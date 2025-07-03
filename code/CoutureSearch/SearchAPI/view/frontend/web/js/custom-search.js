define([
    'jquery',
    'mage/storage',
    'Magento_Search/js/form-mini'
], function ($, storage) {
    'use strict';

    return function (config, element) {
        console.log('✅ Custom search JS loaded');

        var $element = $(element);
        var $searchForm = $element.closest('form');

        $searchForm.on('submit', function (e) {
            e.preventDefault();

            var query = $searchForm.find('input[type="text"]').val();

            // ✅ Your actual API endpoint
            var apiUrl = 'http://localhost:8000/api/search-redirector?query=' + encodeURIComponent(query);

            $('body').trigger('processStart');

            // Use jQuery AJAX directly for cross-domain requests
            $.ajax({
                url: apiUrl, // absolute URL
                method: 'GET',
                dataType: 'json',
                success: function (response) {
                    // renderSearchResults(response.products);
                    if (response.docs) {
                        localStorage.setItem('search_results', JSON.stringify(response.docs));
                        localStorage.setItem('last_query', query);
                        localStorage.setItem('current_page', '1');
                    }

                    // Redirect to your custom results page
                    window.location.href = '/search-results';
                },
                error: function (xhr, status, error) {
                    console.error('❌ Error fetching search results:', status, error);
                },
                complete: function () {
                    $('body').trigger('processStop');
                }
            });

        });

    };
});