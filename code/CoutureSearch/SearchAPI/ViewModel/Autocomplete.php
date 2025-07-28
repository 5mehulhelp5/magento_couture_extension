<?php
namespace CoutureSearch\SearchAPI\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Framework\UrlInterface;

/**
 * Provides configuration data to the autocomplete PHTML template.
 */
class Autocomplete implements ArgumentInterface
{
    /**
     * @var UrlInterface
     */
    protected $urlBuilder;

    /**
     * @param UrlInterface $urlBuilder
     */
    public function __construct(UrlInterface $urlBuilder)
    {
        $this->urlBuilder = $urlBuilder;
    }

    /**
     * Returns the URL for the external search API.
     *
     * @return string
     */
    public function getSearchApiUrl(): string
    {
        // This is the endpoint you specified.
        return 'http://localhost:8000/api/autosuggest/results';
    }

    /**
     * Returns the URL for our internal controller that will fetch product data.
     *
     * @return string
     */
    public function getProductDataUrl(): string
    {
        return $this->urlBuilder->getUrl('couture/ajax/productdata');
    }

    /**
     * Returns the URL for the final search results page.
     *
     * @return string
     */
    public function getSearchResultsUrl(): string
    {
        return $this->urlBuilder->getUrl('couture/index/productssearch');
    }
}
