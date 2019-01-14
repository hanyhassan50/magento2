<?php


namespace Vendor\Magento\Plugin\Controller;

class Plugin
{

	public function beforeSetTitle(\Vendor\Magento\Controller\Index\Plugin $subject, $title)
	{
		$title = $title . " to ";
		echo __METHOD__ . "</br>";

		return [$title];
	}


	public function afterGetProduct(\Vendor\Magento\Controller\Index\Plugin $subject, $result)
	{

		echo __METHOD__ . "</br>";

		return '<h1>'. $result . 'Mageplaza.com' .'</h1>';

	}


	public function aroundGetTitle(\Vendor\Magento\Controller\Index\Plugin $subject, callable $proceed)
	{

		echo __METHOD__ . " - Before proceed() </br>";
		$result = $proceed();
		echo __METHOD__ . " - After proceed() </br>";

		return $result;
	}
}