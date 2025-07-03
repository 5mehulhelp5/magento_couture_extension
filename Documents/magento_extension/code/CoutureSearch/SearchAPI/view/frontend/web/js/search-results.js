define(['jquery'], function ($) {
    'use strict';

    return function () {
        const products = JSON.parse(sessionStorage.getItem('customSearchResults')) || [];

        const $container = $('#search-result-grid');
        $container.empty();

        if (products.length === 0) {
            $container.append('<p>No results found.</p>');
            return;
        }

        products.forEach(function (product) {
            const html = `
                <div class="product-item" style="border:1px solid #ccc; padding:10px; margin:10px; display:inline-block; width:200px;">
                    <img src="${product['174Wx218H_string']}" alt="${product['name_text_en']}" style="max-width:100%;">
                    <h3>${product['name_text_en']}</h3>
                    <p>${product['brandName_text_en_mv'][0]}</p>
                </div>
            `;
            $container.append(html);
        });
    };
});
