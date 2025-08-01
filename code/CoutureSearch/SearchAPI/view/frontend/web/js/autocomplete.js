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
        
        _create: function () {
            this.searchForm = $(this.element);
            this.searchInput = this.searchForm.find('#search');
            this.autocompletePopup = $('#couture-autocomplete-popup');

            this.autocompletePopup.appendTo(this.searchForm);
            
            // We now rely on the external autocomplete.css file for all styling.

            this.searchInput.on('keyup', this.handleKeyPress.bind(this));
            this.searchForm.on('submit', this.handleFormSubmit.bind(this));

            $(document).on('click', function (event) {
                if (!$(event.target).closest(this.searchForm).length) {
                    this.autocompletePopup.hide();
                }
            }.bind(this));
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
