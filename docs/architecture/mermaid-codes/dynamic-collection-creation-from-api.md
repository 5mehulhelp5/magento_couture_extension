sequenceDiagram
    participant User as User's Browser
    participant Magento as Magento Frontend
    participant Controller as Generic Results Controller
    participant CoutureAPI as Couture API

    User->>+Magento: Requests page (e.g., /couture/banner/view/code/top_finds)
    Magento->>+Controller: Instantiates the controller
    Controller->>+CoutureAPI: GET /api/top-finds (sends API Key & Store ID)
    CoutureAPI-->>-Controller: Returns { "product_ids": [1, 2, 3] }
    Controller->>Magento: Registers product IDs with the layout
    Controller->>Magento: Sets page title (e.g., "Top Finds For You")
    Magento->>Magento: Loads layout XML (couturesearch_banner_view.xml)
    Magento->>Magento: Renders Product List & Navigation blocks using the provided product IDs
    Magento-->>-User: Returns fully rendered HTML page