<?php
declare (strict_types = 1);

namespace CoutureSearch\SearchAPI\ViewModel;

use CoutureSearch\SearchAPI\Helper\Data as CoutureHelper;
use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class HomepageBanners implements ArgumentInterface
{
    /**
     * @var UrlInterface
     */
    protected $urlBuilder;

    public function __construct(UrlInterface $urlBuilder)
    {
        $this->urlBuilder = $urlBuilder;
    }

    /**
     * This is the central configuration for all homepage banners.
     * To add/remove/modify a banner, you only need to edit this array.
     *
     * @return array
     */
    public function getBannersConfig(): array
    {
        return [
            'top_trending_products' => [
                'title'            => __('Top Trending products'),
                'subtitle'         => __('Discover what\'s popular right now.'),
                'image_url'        => 'https://img.freepik.com/free-photo/shopping-concept-close-up-portrait-young-beautiful-attractive-redhair-girl-smiling-looking-camera_1258-118763.jpg?semt=ais_hybrid&w=740',
                'link_url'         => $this->urlBuilder->getUrl('couture/index/topresults'),
                'text_align_class' => 'text-align-left',
                'config_path'      => CoutureHelper::XML_PATH_ENABLE_TOP_TRENDING, // Links to the admin setting
            ],
            'recommended_products'  => [
                'title'            => __('Recommended products'),
                'subtitle'         => __('Curated picks just for you.'),
                'image_url'        => 'https://t3.ftcdn.net/jpg/03/20/68/66/360_F_320686681_Ur6vdYQgDC9WiijiVfxlRyQffxOgfeFz.jpg',
                'link_url'         => $this->urlBuilder->getUrl('couture/index/recommended'),
                'text_align_class' => 'text-align-right',
                'config_path'      => CoutureHelper::XML_PATH_ENABLE_RECOMMENDED, // Links to the admin setting
            ],
            // 'new_products'  => [
            //     'title'            => __('New products'),
            //     'subtitle'         => __('New curated picks just for you.'),
            //     'image_url'        => 'https://static.vecteezy.com/system/resources/thumbnails/042/518/584/small_2x/ai-generated-stylish-african-american-man-in-fashionable-green-coat-over-turquoise-background-ideal-for-fashion-concepts-and-st-patricks-day-promotions-photo.jpg',
            //     'link_url'         => $this->urlBuilder->getUrl('couture/index/recommended'),
            //     'text_align_class' => 'text-align-right',
            //     'config_path'      => CoutureHelper::XML_PATH_ENABLE_NEW_PRODUCTS, // Links to the admin setting
            // ],
        ];
    }
}
