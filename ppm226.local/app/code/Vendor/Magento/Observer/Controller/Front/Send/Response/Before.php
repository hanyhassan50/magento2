<?php 

namespace Vendor\Magento\Observer\Controller\Front\Send\Response;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;

class Before implements ObserverInterface{

	/**
	 * @param Observer $observer
	 * @return void
	 */
	public function execute(Observer $observer){
		
		//runs on every controller
		// echo die('controller_front_send_response_before');
	}
}