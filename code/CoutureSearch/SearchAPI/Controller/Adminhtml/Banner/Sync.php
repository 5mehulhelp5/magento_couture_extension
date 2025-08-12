<?php
namespace CoutureSearch\SearchAPI\Controller\Adminhtml\Banner;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\HTTP\Client\Curl;
use Magento\Framework\Serialize\Serializer\Json;
use CoutureSearch\SearchAPI\Helper\Data as CoutureHelper;
use CoutureSearch\SearchAPI\Model\BannerConfigFactory;
use CoutureSearch\SearchAPI\Model\ResourceModel\BannerConfig as BannerConfigResource;
use CoutureSearch\SearchAPI\Model\RecoConfigFactory;
use CoutureSearch\SearchAPI\Model\ResourceModel\RecoConfig as RecoConfigResource;
use Psr\Log\LoggerInterface;
use Magento\Framework\App\Config\Storage\WriterInterface;
use Magento\Framework\App\Cache\TypeListInterface;
use Magento\Backend\Model\Session;

class Sync extends Action
{
    protected $resultJsonFactory;
    protected $curl;
    protected $json;
    protected $coutureHelper;
    protected $bannerConfigFactory;
    protected $bannerConfigResource;
    protected $logger;
    protected $configWriter;
    protected $cacheTypeList;
    protected $session;
    protected $recoConfigFactory;
    protected $recoConfigResource;

    public function __construct(
        Context $context,
        JsonFactory $resultJsonFactory,
        Curl $curl,
        Json $json,
        CoutureHelper $coutureHelper,
        BannerConfigFactory $bannerConfigFactory,
        BannerConfigResource $bannerConfigResource,
        RecoConfigFactory $recoConfigFactory,
        RecoConfigResource $recoConfigResource,
        LoggerInterface $logger,
        WriterInterface $configWriter,
        TypeListInterface $cacheTypeList,
        Session $session
    ) {
        $this->resultJsonFactory = $resultJsonFactory;
        $this->curl = $curl;
        $this->json = $json;
        $this->coutureHelper = $coutureHelper;
        $this->bannerConfigFactory = $bannerConfigFactory;
        $this->bannerConfigResource = $bannerConfigResource;
        $this->logger = $logger;
        $this->configWriter = $configWriter;
        $this->cacheTypeList = $cacheTypeList;
        $this->session = $session; 
        $this->recoConfigFactory = $recoConfigFactory;
        $this->recoConfigResource = $recoConfigResource;
        
        parent::__construct($context);
    }

    public function execute()
    {
        $result = $this->resultJsonFactory->create();
        try {
            $this->logger->info('--- Banner Sync Controller: execute() started ---');
            $apiUrl = $this->coutureHelper->getRecoConfigEndpointUrl();
            $apiKey = $this->coutureHelper->getUniversalApiKey();
            $storeIdentifier = $this->coutureHelper->getStoreIdentifier();

            $this->curl->addHeader('X-Api-Key', $apiKey ?? '');
            $this->curl->addHeader('X-Store-Identifier', $storeIdentifier);
            $this->curl->post($apiUrl, '');
            
            $responseBody = $this->curl->getBody();
            $this->logger->info('API Response Body: ' . $responseBody);
            $response = $this->json->unserialize($responseBody);

            // Process Banners if they exist
            if (isset($response['banners']) && is_array($response['banners'])) {
                $this->updateBannerConfigTable($response['banners']);
            }

            // Process Product Recos if they exist
            if (isset($response['product_recos']) && is_array($response['product_recos'])) {
                $this->updateRecoConfigTable($response['product_recos']);
            }
            
            $this->cacheTypeList->cleanType(\Magento\Framework\App\Cache\Type\Config::TYPE_IDENTIFIER);
            $this->logger->info('Cleaned config cache after sync.');

            return $result->setData(['message' => 'Configuration synced successfully.']);
        } catch (\Exception $e) {
            $this->logger->error('Banner Sync Failed: ' . $e->getMessage());
            return $result->setData(['error' => true, 'message' => 'Failed to sync banner config: ' . $e->getMessage()]);
        }
    }

    private function updateBannerConfigTable(array $bannersFromApi)
    {
        $this->logger->info('Updating banner config table with ' . count($bannersFromApi) . ' items.');
        $connection = $this->bannerConfigResource->getConnection();
        $tableName = $this->bannerConfigResource->getMainTable();
        $connection->truncateTable($tableName);

        foreach ($bannersFromApi as $banner) {
            $bannerCode = $this->generateCodeFromName($banner['banner_name']);
            
            $bannerModel = $this->bannerConfigFactory->create();
            
            // UPDATED: Save all the new fields from the API response
            $dataToSave = [
                'banner_code' => $bannerCode,
                'banner_name' => $banner['banner_name'],
                'endpoint' => $banner['endpoint'],
                'is_enabled_default' => $banner['enabled'] ? 1 : 0,
                'caption' => $banner['caption'] ?? '',
                'img_link' => $banner['img_link'] ?? '',
                'orientation' => $banner['orientation'] ?? 'left'
            ];
            
            $bannerModel->setData($dataToSave);
            $this->bannerConfigResource->save($bannerModel);
            $this->logger->info('Saved banner to DB: ', $dataToSave);

            $configPath = 'couture_dynamic_banners/marketing_settings/' . $bannerCode . '_enabled';
            $defaultValue = $banner['enabled'] ? 1 : 0;

            $this->configWriter->save($configPath, $defaultValue);
            $this->logger->info("Set initial config value for {$configPath} to {$defaultValue}");
        }
        $this->logger->info('--- Banner Sync Controller: DB and Core Config update complete ---');
    }


    private function updateRecoConfigTable(array $recosFromApi)
    {
        $this->logger->info('Updating product reco config table with ' . count($recosFromApi) . ' items.');
        $connection = $this->recoConfigResource->getConnection();
        $tableName = $this->recoConfigResource->getMainTable();
        $connection->truncateTable($tableName);

        foreach ($recosFromApi as $reco) {
            $recoCode = $this->generateCodeFromName($reco['banner_name']);
            
            $recoModel = $this->recoConfigFactory->create();
            $dataToSave = [
                'reco_code' => $recoCode,
                'reco_name' => $reco['banner_name'],
                'caption' => $reco['caption'] ?? '',
                'endpoint' => $reco['endpoint'],
                'is_enabled_default' => $reco['enabled'] ? 1 : 0
            ];
            $recoModel->setData($dataToSave);
            $this->recoConfigResource->save($recoModel);
            $this->logger->info('Saved product reco to DB: ', $dataToSave);

            // Also save the default value to Magento's core config
            $configPath = 'couture_dynamic_banners/settings/' . $recoCode . '_enabled';
            
            $defaultValue = $reco['enabled'] ? 1 : 0;
            $this->configWriter->save($configPath, $defaultValue);
            $this->logger->info("Set initial config value for {$configPath} to {$defaultValue}");
        }
    }

    private function generateCodeFromName(string $name): string
    {
        return strtolower(preg_replace('/[^a-zA-Z0-9]+/', '_', trim($name)));
    }
}
