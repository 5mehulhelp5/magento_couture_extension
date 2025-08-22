graph TD
    subgraph Magento Admin
        A[Admin User] -->|1. Clicks 'Sync Config'| B[SyncBanners UI Block]
        B -->|2. AJAX POST Request| C[Sync Controller]
    end

    subgraph Magento Backend
        C -->|3. POST to API with credentials| D[Couture /reco-config API]
        D -->|4. Returns JSON with 'banners' & 'product_recos'| C
        
        C -->|5. Truncates & Updates| E[Custom DB Table<br/>'couture_banner_configuration']
        C -->|6. Truncates & Updates| F[Custom DB Table<br/>'couture_reco_configuration']
        
        C -->|7. Saves default 'enabled' values| G[Core Config DB]
        C -->|8. Clears Config Cache| H[Magento Cache]
    end

    subgraph Page Reload
        I[Admin reloads page] --> J[Banners Backend Model]
        J -->|Reads from| E
        J -->|Reads from| G
        J --> K[Banners Frontend Model]
        K -->|Dynamically renders 'Yes/No' toggles| L[Admin UI]
    end