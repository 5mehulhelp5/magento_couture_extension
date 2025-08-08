<?php
namespace CoutureSearch\SearchAPI\Plugin;

use Magento\Framework\App\Request\CsrfValidator;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\Action\Action;
use Psr\Log\LoggerInterface;

class CsrfValidatorSkip
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param CsrfValidator $subject
     * @param \Closure $proceed
     * @param RequestInterface $request
     * @param Action $action
     */
    public function aroundValidate(
        $subject,
        \Closure $proceed,
        RequestInterface $request,
        Action $action
    ) {
        $this->logger->info('CSRF Check - Module: ' . $request->getModuleName() . ' | Controller: ' . $request->getControllerName());

        /*
         * CORRECTED: The module name is 'couture' as defined in the <route id="couture">
         * in your routes.xml file. This condition will now match correctly.
         */
        if ($request->getModuleName() === 'couture' && $request->getControllerName() === 'sync') {
            $this->logger->info('CSRF Check SKIPPED for our custom controller.');
            return; // Skip the validation
        }
        
        // For all other requests, proceed with the original validation.
        $proceed($request, $action);
    }
}
