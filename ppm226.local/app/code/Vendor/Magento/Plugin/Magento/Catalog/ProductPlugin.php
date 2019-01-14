<?php


namespace Vendor\Magento\Plugin\Magento\Catalog;

class ProductPlugin
{

	public function beforeSetProduct(\Magento\Catalog\Api\Data\ProductInterface $subject, $title)
	{
		
	}


	public function afterGetProduct(\Magento\Catalog\Api\Data\ProductInterface $subject, $result)
	{

	}


	public function aroundGetProduct(\Magento\Catalog\Api\Data\ProductInterface $subject, callable $proceed)
	{

	
	}
}