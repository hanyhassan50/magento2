<?php
namespace Magento\CacheInvalidate\Model\PurgeCache;

/**
 * Interceptor class for @see \Magento\CacheInvalidate\Model\PurgeCache
 */
class Interceptor extends \Magento\CacheInvalidate\Model\PurgeCache implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\PageCache\Model\Cache\Server $cacheServer, \Magento\CacheInvalidate\Model\SocketFactory $socketAdapterFactory, \Magento\Framework\Cache\InvalidateLogger $logger)
    {
        $this->___init();
        parent::__construct($cacheServer, $socketAdapterFactory, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function sendPurgeRequest($tagsPattern)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'sendPurgeRequest');
        if (!$pluginInfo) {
            return parent::sendPurgeRequest($tagsPattern);
        } else {
            return $this->___callPlugins('sendPurgeRequest', func_get_args(), $pluginInfo);
        }
    }
}
