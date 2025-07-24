<?php
declare(strict_types=1);

namespace CoutureSearch\SearchAPI\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

/**
 * Custom ViewModel for the product list in CoutureSearch module.
 */
class ListProduct implements ArgumentInterface
{
    /**
     * @param \Magento\Framework\View\Element\Block\ArgumentInterface $block
     * @return string
     */
    public function getExampleData(): string
    {
        return 'Data from CoutureSearch\SearchAPI\ViewModel\ListProduct ViewModel';
    }
}