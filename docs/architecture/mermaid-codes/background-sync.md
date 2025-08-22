graph TD
    subgraph A ["Step 1: Triggers"]
        direction LR
        A1[Manual Trigger: Admin User] --> A2[StartSync Controller]
        A3[Automated Trigger: Magento Cron] --> A4[SyncCatalogue & SyncOrders Cron Jobs]
    end

    subgraph B ["Step 2: Queuing Process"]
        B1[Controller / Cron Job] --> B2{Validation: Is a sync of this type already running?}
        B2 -- No --> B3[Create 'Queued' Record in Sync History DB]
        B3 --> B4[Publish Message to RabbitMQ Topic]
        B2 -- Yes --> B5[Stop & Log Message]
    end
    
    subgraph C ["Step 3: Background Processing"]
        C1[RabbitMQ] -- "Delivers message with Sync ID" --> C2[Catalogue Consumer OR Order Consumer]
        C2 --> C3[1. Update Status to 'Processing' in Sync History DB]
        C3 --> C4[2. Fetch Data in Batches from Magento DB]
        C4 --> C5[3. Send Batch to Couture API Endpoint]
        C5 --> C6[4. Update Status to 'Success'/'Failed' in Sync History DB]
    end

    subgraph D ["Step 4: Couture Backend"]
        D1[Couture API Endpoint] --> D2{API Logic: Validate Request & Parse Payload}
        D2 --> D3[Save to appropriate Couture DB]
    end

    A --> B --> C --> D

    style A1 fill:#b2b,stroke:#333,stroke-width:2px
    style A3 fill:#05e,stroke:#333,stroke-width:2px
