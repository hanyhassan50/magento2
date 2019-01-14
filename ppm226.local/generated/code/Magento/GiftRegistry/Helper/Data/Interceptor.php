<?php
namespace Magento\GiftRegistry\Helper\Data;

/**
 * Interceptor class for @see \Magento\GiftRegistry\Helper\Data
 */
class Interceptor extends \Magento\GiftRegistry\Helper\Data implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Helper\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\GiftRegistry\Model\EntityFactory $entityFactory, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $localeDate, \Magento\Framework\Escaper $escaper, \Magento\Framework\Locale\ResolverInterface $localeResolver, \Magento\Store\Model\StoreManagerInterface $storeManager)
    {
        $this->___init();
        parent::__construct($context, $customerSession, $entityFactory, $localeDate, $escaper, $localeResolver, $storeManager);
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

    /**
     * {@inheritdoc}
     */
    public function getRecipientsLimit()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRecipientsLimit');
        if (!$pluginInfo) {
            return parent::getRecipientsLimit();
        } else {
            return $this->___callPlugins('getRecipientsLimit', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAddressIdPrefix()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAddressIdPrefix');
        if (!$pluginInfo) {
            return parent::getAddressIdPrefix();
        } else {
            return $this->___callPlugins('getAddressIdPrefix', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMaxRegistrant($store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMaxRegistrant');
        if (!$pluginInfo) {
            return parent::getMaxRegistrant($store);
        } else {
            return $this->___callPlugins('getMaxRegistrant', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function validateCustomAttributes($customValues, $attributes)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateCustomAttributes');
        if (!$pluginInfo) {
            return parent::validateCustomAttributes($customValues, $attributes);
        } else {
            return $this->___callPlugins('validateCustomAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentCustomerEntityOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurrentCustomerEntityOptions');
        if (!$pluginInfo) {
            return parent::getCurrentCustomerEntityOptions();
        } else {
            return $this->___callPlugins('getCurrentCustomerEntityOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function filterDatesByFormat($data, $fieldDateFormats)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'filterDatesByFormat');
        if (!$pluginInfo) {
            return parent::filterDatesByFormat($data, $fieldDateFormats);
        } else {
            return $this->___callPlugins('filterDatesByFormat', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function _filterDate($value, $formatIn = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '_filterDate');
        if (!$pluginInfo) {
            return parent::_filterDate($value, $formatIn);
        } else {
            return $this->___callPlugins('_filterDate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getRegistryLink($entity)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRegistryLink');
        if (!$pluginInfo) {
            return parent::getRegistryLink($entity);
        } else {
            return $this->___callPlugins('getRegistryLink', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canAddToGiftRegistry($item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canAddToGiftRegistry');
        if (!$pluginInfo) {
            return parent::canAddToGiftRegistry($item);
        } else {
            return $this->___callPlugins('canAddToGiftRegistry', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isModuleOutputEnabled($moduleName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isModuleOutputEnabled');
        if (!$pluginInfo) {
            return parent::isModuleOutputEnabled($moduleName);
        } else {
            return $this->___callPlugins('isModuleOutputEnabled', func_get_args(), $pluginInfo);
        }
    }
}
