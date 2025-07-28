define([
    'jquery'
], function ($) {
    'use strict';

    $.widget('couture.searchAutocomplete', {
        options: {
            searchApiUrl: '',
            productDataUrl: '',
            searchResultsUrl: ''
        },
        
        /**
         * Widget initialization.
         * @private
         */
        _create: function () {
            this.searchForm = $(this.element);
            this.searchInput = this.searchForm.find('#search');
            this.autocompletePopup = $('#couture-autocomplete-popup');

            this.autocompletePopup.appendTo(this.searchForm);
            
            // Inject the corrected CSS styles into the page.
            this._injectCss();

            this.searchInput.on('keyup', this.handleKeyPress.bind(this));
            this.searchForm.on('submit', this.handleFormSubmit.bind(this));

            // Hide popup when clicking outside of the search form
            $(document).on('click', function (event) {
                if (!$(event.target).closest(this.searchForm).length) {
                    this.autocompletePopup.hide();
                }
            }.bind(this));
        },

        /**
         * Dynamically injects the required CSS for the autocomplete popup.
         * For production, this should be moved to a separate .css file.
         * @private
         */
        _injectCss: function() {
            var css = `
                /* This is the key to making the popup an overlay */
                #search_mini_form { 
                    position: relative; 
                }
                .couture-autocomplete-popup {
                    position: absolute;
                    top: 100%; /* Position it right below the search bar */
                    left: 0;
                    width: 620px; /* Increased width to prevent cutoff */
                    background: white;
                    border: 1px solid #ddd;
                    z-index: 1001;
                    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
                    max-height: 500px;
                    overflow-y: auto;
                }
                .couture-autocomplete-wrapper { 
                    display: flex; 
                }
                .couture-autocomplete-wrapper .left-panel {
                    padding: 20px;
                    flex-basis: 40%; /* Adjusted panel widths */
                    border-right: 1px solid #f0f0f0;
                }
                .couture-autocomplete-wrapper .right-panel {
                    padding: 20px;
                    flex-basis: 60%;
                }
                .couture-autocomplete-wrapper h5 {
                    font-weight: 600;
                    margin-top: 0;
                    margin-bottom: 15px;
                    font-size: 12px;
                    color: #888;
                    text-transform: uppercase;
                }
                .couture-autocomplete-wrapper ul { list-style: none; padding: 0; margin: 0; }
                .couture-autocomplete-wrapper .suggestions-container ul li,
                .couture-autocomplete-wrapper .categories-container ul li {
                    padding: 10px 8px;
                    display: flex;
                    align-items: center;
                    gap: 10px;
                    font-size: 14px;
                    cursor: pointer;
                    border-radius: 4px;
                }
                .couture-autocomplete-wrapper .suggestions-container ul li:hover,
                .couture-autocomplete-wrapper .categories-container ul li:hover {
                    background: #f5f5f5;
                }
                .couture-autocomplete-wrapper .suggestion-icon {
                    width: 18px; /* Corrected icon size */
                    height: 18px;
                    stroke: #888; /* Use stroke for line icons */
                    flex-shrink: 0;
                }
                .products-container ul {
                    display: grid;
                    grid-template-columns: 1fr 1fr; /* Two-column grid */
                    gap: 20px;
                }
                .products-container ul li a {
                    display: flex;
                    align-items: center;
                    gap: 12px;
                    text-decoration: none;
                    color: #333;
                    padding: 5px;
                    border-radius: 4px;
                }
                .products-container ul li a:hover { background: #f9f9f9; }
                .products-container .product-details { display: flex; flex-direction: column; }
                .products-container .product-name { font-weight: 600; font-size: 13px; line-height: 1.4; }
                .products-container .product-price { color: #006bb4; font-size: 13px; margin-top: 4px; }
            `;
            // Add a style tag to the head if it doesn't exist yet
            if ($('#couture-autocomplete-styles').length === 0) {
                $('<style id="couture-autocomplete-styles">').text(css).appendTo('head');
            }
        },

        handleKeyPress: function (event) {
            var query = this.searchInput.val().trim();
            if (event.keyCode >= 13 && event.keyCode <= 40) { return; }
            if (query.length < 3) {
                this.autocompletePopup.hide();
                return;
            }
            this.callSearchApi(query);
        },

        handleFormSubmit: function (event) {
            event.preventDefault();
            var query = this.searchInput.val().trim();
            if (query.length > 0) {
                window.location.href = this.options.searchResultsUrl + '?q=' + encodeURIComponent(query);
            }
        },

        callSearchApi: function (query) {
            this.autocompletePopup.html('<div>Loading...</div>').show();
            $.ajax({
                url: this.options.searchApiUrl,
                type: 'GET',
                data: { q: query },
                dataType: 'json',
                success: this.renderAutocomplete.bind(this),
                error: function () {
                    this.autocompletePopup.hide();
                    console.error('Error fetching search results from external API.');
                }.bind(this)
            });
        },

        renderAutocomplete: function (data) {
            if (!data || (!data.suggestions?.length && !data.categories?.length && !data.product_ids?.length)) {
                this.autocompletePopup.hide();
                return;
            }

            let html = '<div class="couture-autocomplete-wrapper">';
            let leftPanelHtml = '<div class="left-panel">';
            let rightPanelHtml = '<div class="right-panel">';

            if (data.suggestions && data.suggestions.length) {
                leftPanelHtml += '<div class="suggestions-container"><h5>Suggestions</h5><ul>';
                // A better, smaller SVG icon
                const searchIconSvg = `<svg class="suggestion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>`;
                data.suggestions.forEach(suggestion => {
                    leftPanelHtml += `<li>${searchIconSvg}<span>${suggestion}</span></li>`;
                });
                leftPanelHtml += '</ul></div>';
            }

            if (data.categories && data.categories.length) {
                leftPanelHtml += '<div class="categories-container" style="margin-top: 20px;"><h5>Categories</h5><ul>';
                data.categories.forEach(category => {
                    leftPanelHtml += `<li>${category.name} (${category.count})</li>`;
                });
                leftPanelHtml += '</ul></div>';
            }
            
            leftPanelHtml += '</div>';
            rightPanelHtml += '<div class="products-container"></div>';
            rightPanelHtml += '</div>';
            html += leftPanelHtml + rightPanelHtml + '</div>';

            this.autocompletePopup.html(html).show();

            if (data.product_ids && data.product_ids.length) {
                this.callProductApi(data.product_ids);
            } else {
                this.autocompletePopup.find('.products-container').html('<h5>Products</h5><div>No products to display.</div>');
            }
        },

        callProductApi: function (productIds) {
            const productContainer = this.autocompletePopup.find('.products-container');
            productContainer.html('<h5>Products</h5><div>Loading products...</div>');

            $.ajax({
                url: this.options.productDataUrl,
                type: 'POST',
                data: { product_ids: productIds },
                dataType: 'json',
                success: function (products) {
                    let productHtml = '<h5>Products</h5>';
                    if (products && products.length) {
                        productHtml += '<ul>';
                        products.forEach(product => {
                            productHtml += `
                                <li>
                                    <a href="${product.url}">
                                        <img src="${product.image}" alt="${product.name}" width="60" />
                                        <div class="product-details">
                                            <span class="product-name">${product.name}</span>
                                            <span class="product-price">${product.price}</span>
                                        </div>
                                    </a>
                                </li>`;
                        });
                        productHtml += '</ul>';
                    } else {
                        productHtml += '<div>No products found.</div>';
                    }
                    productContainer.html(productHtml);
                }.bind(this),
                error: function () {
                    productContainer.html('<h5>Products</h5><div>Error loading products.</div>');
                }
            });
        }
    });

    return $.couture.searchAutocomplete;
});
