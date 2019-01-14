<?php
namespace Fastly\Cdn\Model\Config;

/**
 * Interceptor class for @see \Fastly\Cdn\Model\Config
 */
class Interceptor extends \Fastly\Cdn\Model\Config implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Filesystem\Directory\ReadFactory $readFactory, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\App\Cache\StateInterface $cacheState, \Magento\Framework\Module\Dir\Reader $reader, \Magento\PageCache\Model\Varnish\VclGeneratorFactory $vclGeneratorFactory, \Magento\Framework\Serialize\Serializer\Json $serializer = null)
    {
        $this->___init();
        parent::__construct($readFactory, $scopeConfig, $cacheState, $reader, $vclGeneratorFactory, $serializer);
    }

    /**
     * {@inheritdoc}
     */
    public function isFastlyEnabled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isFastlyEnabled');
        if (!$pluginInfo) {
            return parent::isFastlyEnabled();
        } else {
            return $this->___callPlugins('isFastlyEnabled', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFastlyVersion()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFastlyVersion');
        if (!$pluginInfo) {
            return parent::getFastlyVersion();
        } else {
            return $this->___callPlugins('getFastlyVersion', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCID()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCID');
        if (!$pluginInfo) {
            return parent::getCID();
        } else {
            return $this->___callPlugins('getCID', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getApiEndpoint()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getApiEndpoint');
        if (!$pluginInfo) {
            return parent::getApiEndpoint();
        } else {
            return $this->___callPlugins('getApiEndpoint', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getServiceId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getServiceId');
        if (!$pluginInfo) {
            return parent::getServiceId();
        } else {
            return $this->___callPlugins('getServiceId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getApiKey()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getApiKey');
        if (!$pluginInfo) {
            return parent::getApiKey();
        } else {
            return $this->___callPlugins('getApiKey', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTtl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTtl');
        if (!$pluginInfo) {
            return parent::getTtl();
        } else {
            return $this->___callPlugins('getTtl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getStaleTtl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStaleTtl');
        if (!$pluginInfo) {
            return parent::getStaleTtl();
        } else {
            return $this->___callPlugins('getStaleTtl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getStaleErrorTtl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStaleErrorTtl');
        if (!$pluginInfo) {
            return parent::getStaleErrorTtl();
        } else {
            return $this->___callPlugins('getStaleErrorTtl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAdminPathTimeout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAdminPathTimeout');
        if (!$pluginInfo) {
            return parent::getAdminPathTimeout();
        } else {
            return $this->___callPlugins('getAdminPathTimeout', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getXMagentoTagsSize()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getXMagentoTagsSize');
        if (!$pluginInfo) {
            return parent::getXMagentoTagsSize();
        } else {
            return $this->___callPlugins('getXMagentoTagsSize', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIgnoredUrlParameters()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIgnoredUrlParameters');
        if (!$pluginInfo) {
            return parent::getIgnoredUrlParameters();
        } else {
            return $this->___callPlugins('getIgnoredUrlParameters', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBasicAuthenticationStatus()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBasicAuthenticationStatus');
        if (!$pluginInfo) {
            return parent::getBasicAuthenticationStatus();
        } else {
            return $this->___callPlugins('getBasicAuthenticationStatus', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canPurgeCatalogCategory()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canPurgeCatalogCategory');
        if (!$pluginInfo) {
            return parent::canPurgeCatalogCategory();
        } else {
            return $this->___callPlugins('canPurgeCatalogCategory', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canPurgeCatalogProduct()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canPurgeCatalogProduct');
        if (!$pluginInfo) {
            return parent::canPurgeCatalogProduct();
        } else {
            return $this->___callPlugins('canPurgeCatalogProduct', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canPurgeCmsPage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canPurgeCmsPage');
        if (!$pluginInfo) {
            return parent::canPurgeCmsPage();
        } else {
            return $this->___callPlugins('canPurgeCmsPage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canPreserveStatic()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canPreserveStatic');
        if (!$pluginInfo) {
            return parent::canPreserveStatic();
        } else {
            return $this->___callPlugins('canPreserveStatic', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canUseSoftPurge()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canUseSoftPurge');
        if (!$pluginInfo) {
            return parent::canUseSoftPurge();
        } else {
            return $this->___callPlugins('canUseSoftPurge', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isGeoIpEnabled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isGeoIpEnabled');
        if (!$pluginInfo) {
            return parent::isGeoIpEnabled();
        } else {
            return $this->___callPlugins('isGeoIpEnabled', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getGeoIpAction()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGeoIpAction');
        if (!$pluginInfo) {
            return parent::getGeoIpAction();
        } else {
            return $this->___callPlugins('getGeoIpAction', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getGeoIpRedirectMapping()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGeoIpRedirectMapping');
        if (!$pluginInfo) {
            return parent::getGeoIpRedirectMapping();
        } else {
            return $this->___callPlugins('getGeoIpRedirectMapping', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isImageOptimizationEnabled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isImageOptimizationEnabled');
        if (!$pluginInfo) {
            return parent::isImageOptimizationEnabled();
        } else {
            return $this->___callPlugins('isImageOptimizationEnabled', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isImageOptimizationPixelRatioEnabled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isImageOptimizationPixelRatioEnabled');
        if (!$pluginInfo) {
            return parent::isImageOptimizationPixelRatioEnabled();
        } else {
            return $this->___callPlugins('isImageOptimizationPixelRatioEnabled', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isForceLossyEnabled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isForceLossyEnabled');
        if (!$pluginInfo) {
            return parent::isForceLossyEnabled();
        } else {
            return $this->___callPlugins('isForceLossyEnabled', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isImageOptimizationBgColorEnabled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isImageOptimizationBgColorEnabled');
        if (!$pluginInfo) {
            return parent::isImageOptimizationBgColorEnabled();
        } else {
            return $this->___callPlugins('isImageOptimizationBgColorEnabled', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getImageOptimizationRatios()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImageOptimizationRatios');
        if (!$pluginInfo) {
            return parent::getImageOptimizationRatios();
        } else {
            return $this->___callPlugins('getImageOptimizationRatios', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockByCountry()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBlockByCountry');
        if (!$pluginInfo) {
            return parent::getBlockByCountry();
        } else {
            return $this->___callPlugins('getBlockByCountry', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockByAcl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBlockByAcl');
        if (!$pluginInfo) {
            return parent::getBlockByAcl();
        } else {
            return $this->___callPlugins('getBlockByAcl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function areWebHooksEnabled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'areWebHooksEnabled');
        if (!$pluginInfo) {
            return parent::areWebHooksEnabled();
        } else {
            return $this->___callPlugins('areWebHooksEnabled', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIncomingWebhookURL()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIncomingWebhookURL');
        if (!$pluginInfo) {
            return parent::getIncomingWebhookURL();
        } else {
            return $this->___callPlugins('getIncomingWebhookURL', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWebhookUsername()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWebhookUsername');
        if (!$pluginInfo) {
            return parent::getWebhookUsername();
        } else {
            return $this->___callPlugins('getWebhookUsername', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canPublishKeyUrlChanges()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canPublishKeyUrlChanges');
        if (!$pluginInfo) {
            return parent::canPublishKeyUrlChanges();
        } else {
            return $this->___callPlugins('canPublishKeyUrlChanges', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canPublishPurgeAllChanges()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canPublishPurgeAllChanges');
        if (!$pluginInfo) {
            return parent::canPublishPurgeAllChanges();
        } else {
            return $this->___callPlugins('canPublishPurgeAllChanges', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canPublishPurgeChanges()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canPublishPurgeChanges');
        if (!$pluginInfo) {
            return parent::canPublishPurgeChanges();
        } else {
            return $this->___callPlugins('canPublishPurgeChanges', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canPublishPurgeAllDebugBacktrace()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canPublishPurgeAllDebugBacktrace');
        if (!$pluginInfo) {
            return parent::canPublishPurgeAllDebugBacktrace();
        } else {
            return $this->___callPlugins('canPublishPurgeAllDebugBacktrace', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canPublishPurgeByKeyDebugBacktrace()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canPublishPurgeByKeyDebugBacktrace');
        if (!$pluginInfo) {
            return parent::canPublishPurgeByKeyDebugBacktrace();
        } else {
            return $this->___callPlugins('canPublishPurgeByKeyDebugBacktrace', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canPublishPurgeDebugBacktrace()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canPublishPurgeDebugBacktrace');
        if (!$pluginInfo) {
            return parent::canPublishPurgeDebugBacktrace();
        } else {
            return $this->___callPlugins('canPublishPurgeDebugBacktrace', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canPublishConfigChanges()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canPublishConfigChanges');
        if (!$pluginInfo) {
            return parent::canPublishConfigChanges();
        } else {
            return $this->___callPlugins('canPublishConfigChanges', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWebhookMessagePrefix()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWebhookMessagePrefix');
        if (!$pluginInfo) {
            return parent::getWebhookMessagePrefix();
        } else {
            return $this->___callPlugins('getWebhookMessagePrefix', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLastCheckedIssuedVersion()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLastCheckedIssuedVersion');
        if (!$pluginInfo) {
            return parent::getLastCheckedIssuedVersion();
        } else {
            return $this->___callPlugins('getLastCheckedIssuedVersion', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getGeoIpMappingForCountry($countryCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGeoIpMappingForCountry');
        if (!$pluginInfo) {
            return parent::getGeoIpMappingForCountry($countryCode);
        } else {
            return $this->___callPlugins('getGeoIpMappingForCountry', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getVclFile($vclTemplatePath)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVclFile');
        if (!$pluginInfo) {
            return parent::getVclFile($vclTemplatePath);
        } else {
            return $this->___callPlugins('getVclFile', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getVclSnippets($path = '/vcl_snippets', $specificFile = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVclSnippets');
        if (!$pluginInfo) {
            return parent::getVclSnippets($path, $specificFile);
        } else {
            return $this->___callPlugins('getVclSnippets', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomSnippets($path, $specificFile = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomSnippets');
        if (!$pluginInfo) {
            return parent::getCustomSnippets($path, $specificFile);
        } else {
            return $this->___callPlugins('getCustomSnippets', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFastlyEdgeModules($path = '/fastly_edge_modules', $specificFile = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFastlyEdgeModules');
        if (!$pluginInfo) {
            return parent::getFastlyEdgeModules($path, $specificFile);
        } else {
            return $this->___callPlugins('getFastlyEdgeModules', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function validateCustomSnippet($name, $type, $priority)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateCustomSnippet');
        if (!$pluginInfo) {
            return parent::validateCustomSnippet($name, $type, $priority);
        } else {
            return $this->___callPlugins('validateCustomSnippet', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function processBlockedItems($strippedBlockedItems, $blockingType = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processBlockedItems');
        if (!$pluginInfo) {
            return parent::processBlockedItems($strippedBlockedItems, $blockingType);
        } else {
            return $this->___callPlugins('processBlockedItems', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getType');
        if (!$pluginInfo) {
            return parent::getType();
        } else {
            return $this->___callPlugins('getType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isEnabled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEnabled');
        if (!$pluginInfo) {
            return parent::isEnabled();
        } else {
            return $this->___callPlugins('isEnabled', func_get_args(), $pluginInfo);
        }
    }
}
