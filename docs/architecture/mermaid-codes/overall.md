graph TD
    subgraph Magento Admin Panel
        A[Admin User] -->|Clicks 'Sync Catalogue'| B[StartSync Controller]
        B --> C{Sync History DB}
        C -- "1. Create 'Queued' Record (MANUAL-CATALOG-123)" --> D
        C -- "2. Create 'Queued' Record (MANUAL-ORDER-456)" --> D
        B --> D[Message Queue]
        D -- "Publish Msg: ID_123" --> E[Topic couture.catalogue.sync]
        D -- "Publish Msg: ID_456" --> F[Topic couture.order.sync]
    end

    subgraph Magento Server Automated Cron
        G[Magento Cron] --> H{SyncCatalogue Cron Job}
        G --> I{SyncOrders Cron Job}
        H --> C
        I --> C
        H -- "Queues Catalogue Sync if none are active" --> D
        I -- "Queues Order Sync if none are active" --> D
    end

    subgraph Magento Server Background Consumersxsx
        E --> J[Catalogue Consumer]
        F --> K[Order Consumer]

        J -- "1. Receives Msg: ID_123" --> C
        C -- "2. Updates Status to Processing" --> J
        J -- "3. Fetches Product Data in Batches" --> L[Magento DB]
        L -- "Products, Inventory, Categories, Prices" --> J
        J -- "4. Sends Batch to API" --> M[Couture API Endpoint]
        M -- "Success/Fail Response" --> J
        J -- "5. Updates Status to Success/Failed" --> C

        K -- "1. Receives Msg: ID_456" --> C
        C -- "2. Updates Status to Processing" --> K
        K -- "3. Fetches Order Data in Batches" --> L
        L -- "Orders, Order Items, Customer Info" --> K
        K -- "4. Sends Batch to API" --> M
        M -- "Success/Fail Response" --> K
        K -- "5. Updates Status to Success/Failed" --> C
    end

    subgraph Couture API & DB
        M -- "Receives Payload with Headers (API Key, Store ID)" --> N{API Logic}
        N -- "Validates Request & Parses Payload" --> O[Couture Databases]
        subgraph O
            P[Catalogue DB]
            Q[Order History DB]
        end
    end

    style A fill:#6a5acd,stroke:#aaa,stroke-width:2px   %% soft slate blue
    style G fill:#1e90ff,stroke:#aaa,stroke-width:2px   %% dodger blue
