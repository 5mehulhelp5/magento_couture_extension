sequenceDiagram
    participant User as User's Browser (Typing)
    participant JS as autocomplete.js
    participant CoutureAPI as Couture Search API
    participant MagentoAJAX as Magento ProductData Controller

    User->>JS: Types "jacket" in search bar
    JS->>JS: Debounce timer starts/resets
    Note over JS: After delay...
    JS->>+CoutureAPI: GET /query/search?q=jacket
    CoutureAPI-->>-JS: Returns { "suggestions": [...], "categories": [...], "product_ids": [10, 20] }
    
    JS->>JS: Renders Suggestions & Categories in UI
    
    JS->>+MagentoAJAX: POST /couture/ajax/productdata with { "product_ids": [10, 20] }
    MagentoAJAX->>MagentoAJAX: Loads product collection for IDs [10, 20]
    MagentoAJAX-->>-JS: Returns JSON with product details (name, image, price, URL)
    
    JS->>User: Renders product results in autocomplete UI