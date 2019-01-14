<?php
/**
 * Copyright © 2015 Inchoo d.o.o.
 * created by Zoran Salamun(zoran.salamun@inchoo.net)
 */
namespace Vendor\Magento\Controller\Contact;
 
class Form extends \Magento\Framework\App\Action\Action
{	
	
	private $_resultPageFactory;

	public function __construct(
		\Magento\Framework\App\Action\context $context,
		\Magento\Framework\View\Result\PageFactory $resultPage
	){
		$this->_resultPageFactory = $resultPage;
		parent::__construct($context);
	}

  	public function execute()
  	{
  		/** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->_resultPageFactory->create();

        return $resultPage;
  	}


}

