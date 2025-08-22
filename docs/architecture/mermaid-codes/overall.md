graph TD
    subgraph 1. Sync Initiation 
        A[Manual Trigger] -- "Admin clicks 'Sync Now'" --> C{Sync Controller / Job};
        B[Automated Trigger] -- "Scheduled task runs" --> C;
    end

    subgraph 2. Job Queuing & Decoupling
        C -- "1. Creates 'Queued' record in history" --> D[Sync History DB];
        C -- "2. Publishes sync task" --> E(Message Queue);
    end

    subgraph 3. Background Processing
        E -- "Passes task to consumer" --> F[Generic Sync Consumer];
        F -- "1. Updates status to 'Processing'" --> D;
        F -- "2. Fetches data in batches" <--> G[Magento Core DB];
        F -- "Repeats steps 2 & 3 for all batches" --> F;
        F -- "3. Sends batch payload via HTTPS" --> H((Couture API Endpoint));
        F -- "4. Updates final status (Success/Failed)" --> D;
    end
    
    subgraph 4. Data Reception
        H -- "Receives request with API Key & Store ID" --> I{Application Logic};
        I -- "Validates & transforms data" --> I;
        I -- "Writes processed data" --> J[Couture Databases];
    end

    %% Styling
    style A fill:#6a5acd,stroke:#333,stroke-width:2px
    style B fill:#1e90ff,stroke:#333,stroke-width:2px
    style D fill:#f9f,stroke:#333,stroke-width:2px
    style G fill:#f9f,stroke:#333,stroke-width:2px
    style J fill:#c2f0c2,stroke:#333,stroke-width:2px
    style H fill:#ffad33,stroke:#333,stroke-width:2px