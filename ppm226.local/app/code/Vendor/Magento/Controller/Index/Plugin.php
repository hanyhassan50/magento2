<?php
/**
 * Copyright © 2015 Inchoo d.o.o.
 * created by Zoran Salamun(zoran.salamun@inchoo.net)
 */
namespace Vendor\Magento\Controller\Index;
 
class Plugin extends \Magento\Framework\App\Action\Action
{	

	protected $title;

  public function execute()
  {
    $this->setTitle('Guns en Roses');
    echo $this->getTitle();
  }

  public function setTitle($title)
  {
    return $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }
}

