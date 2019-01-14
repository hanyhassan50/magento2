https://github.com/magento-notes/magento2-exam-notes

https://github.com/magento/magento2/blob/2.2-develop/app/code/Magento/Catalog/Model/Product.php
https://github.com/magento/magento2/blob/2.2-develop/app/code/Magento/Catalog/Model/ProductRepository.php

https://github.com/magento/magento2/blob/2.2-develop/app/code/Magento/Catalog/Model/ResourceModel/Product.php
https://github.com/magento/magento2/blob/2.2-develop/lib/internal/Magento/Framework/Event/ObserverInterface.php


app/
  bin/
    magento.php
  code/
    Vendor/
      Api/
        Data/
      Helper/
        Query/
          TestQuery.php
      Query/
        TestQuery.php
      Module/
      Block/
      Helper/
      Model/
      Controller/
        Customer/
          account/
              login.php::execute
              create.php::execute
      etc/
        adminhtml/
        base/
        frontend/
        webapi_rest/
        webapi_soap/
        crontab.xml
        config.xml
        di.xml
        webapi.xml
        frontend
        routes.xml
      Console/
        Command/  
  design/
    frontend/
      Vendor/
        theme/
          composer.json
          theme.xml
          registration.php
  etc/
    config.php
    NonComposerComponentRegistration.php      
  bootstrap.php
  vendor/
    amzn
      amazon-pay-sdk-php
        Psr
          Log
            LoggerInterface.php
    magento/
      Backend/
        app/
          Action.php
        AbstractAction.php::dispatch
        Action/
          Action.php
        UserConfig.php
        area/
          FrontNameResolver.php
      Cms/
        Controller/
          Router.php::match -- CMS Router
      Checkout/
        Model/
          Session.php::getQuote
      Event/
        ObserverInterface.php      
      framework/
        AppInterface.php::launch
                       ::catchException
        app/
          Bootstrap::create
                   ::createApplication
                   ::run
          Http.php
                 ::launch
          Cron.php
          StaticResource.php
          AreaList.php
          FrontControllerInterface.php::dispatch
          FrontController.php::dispatch 
          RouterInterface.php::match
          ActionInterface.php::execute
          RouterList.php
          Action/
            Http.php
            Action.php::dispatch -- tinatawag ng router
                     ::_forward
            Abstract.php
          ActionFactory.php  -- use in your module routing class
          ResponseInterface.php -- use in your module routing class
          RequestInterface.php -- use in your module routing class
          Router/
            Base::matchAction -- base router
            DefaultRouter.php -- Default Router (404 Router)
            NoRouteHandler.php
            NoRouteHandlerInterface.pp
        Component/
          ComponentRegistrar.php --1
        ObjectManagerInterface.php
        Module/
          ModuleList/
            Loader.php --2  
        Event
          Observer.php
          ObserverInterface.php
        Setup
          InstallSchemaInterface.php::install(install(SchemaSetupInterface $setup, ModuleContextInterface $context)
          ModuleContextInterface.php::getVersion
          SchemaSetupInterface.php::getIdxName
                                  ::getFkName
      Indexer/
        app/
          Indexer.php
      MediaStorage/
        app/
          Media.php
      module-catalog/
        Model/
          Product.php
          ProductRepository.php
          ResourceModel
            Product.php
      module-quote/
        Model/
          Quote.php  
          Quote/
            Item.php  
            Address.php  
      module-shipping/
        web/
          js/
            view/
              checkout/
                shipping/
                  shipping-policy.js
          template/
            checkout/
              shipping/
                shipping-policy.html                    
      Robots/
        Controller/
          Router.php
      UrlRewrite/
        Controller/
          Router.php  -- URL Rewrite Router
      Webapi/
        Controller/
          Rest.php
          Soap.php
  pub/
    index.php -- entry point, for production
    cron.php  -- entry point
    get.php
    media/
  index.php -- entry point for developer
  composer.json

//tanong
1. Narito ang 5 routers sa Magento at ang pagkakasunud-sunod kung saan sila fired sa:
  - vendor/magento/framework/Router/Base
  - vendor/magento/framework/Router/DefaultRouter
  - vendor/magento/Robots/Controller/Router.php
  - vendor/magento/UrlRewrite/Controller/Router.php
  - vendor/magento/Cms/Controller/Router.php

2. controller_front_send_response_before

3. kailan ginagamit ang router::match ?
  - ginagamit kapag ipapadala na ang bawat kahilingan sa pamamagitan ng router series.
4. Maaari kang magdagdag ng iyong sariling pasadyang router sa pamamagitan ng pagdagdag ng.
  - Magento\Framework\App\RouterList.
5. The two area_id’s are:
    - standard
    - admin
6.
  Base Router
  CMS Router
  UrlRewrite Router
  Default Router
7.routing
  - pagtukoy sa kasalukuyang kahilingan
8.what knockout js implement pattern?
  - MVVM

// start of creating routing
https://belvg.com/blog/request-routing-flow-in-magento-2.html

7. di.xml
<?xml version="1.0"?>
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:ObjectManager/etc/config.xsd">
  <type name="Magento\Framework\App\RouterList">
      <arguments>
          <argument name="routerList" xsi:type="array">
              <item name="newreqrouter" xsi:type="array">
                  <item name="class" xsi:type="string">Acidgreen\NewRequestRouter\Controller\Router</item>
                  <item name="disable" xsi:type="boolean">false</item>
                  <item name="sortOrder" xsi:type="string">30</item>
              </item>
          </argument>
      </arguments>
  </type>
</config>

$routerList =[
  'newreqrouter'=>[
      'class'=>'',
      'disable'=>'',
      'sortOrder'=>''
  ]
]

9. how to set template using .xml sample changing template for customer_account_create.xml ?
  -   <action method="setTemplate">
          <argument name="template" xsi:type="string">Vendor_Magento::customer/form/ajaxcall.phtml</argument>
      </action>

10. what happens if you'll used <update handle="customer_account"/> ?
  - it will add customer account menu sidebar      

11. where quote and quote_item stored ? 
  - quote table
  - quote_item


  -- Quote ------|
    customer 
    shopping cart|
  ------------


<?php
/* ACidgreen\NewRequestRouter\Controller\Router*/
namespace BelVG\NewRequestRouter\Controller;
/**
* Class Router
* @package ACidgreen\NewRequestRouter\Controller
*/
class Router implements \Magento\Framework\App\RouterInterface
{
 /**
  * @var \Magento\Framework\App\ActionFactory
  */
 protected $actionFactory;
 /**
  * Response
  *
  * @var \Magento\Framework\App\ResponseInterface
  */
 protected $_response;
 /**
  * @param \Magento\Framework\App\ActionFactory $actionFactory
  * @param \Magento\Framework\App\ResponseInterface $response
  */
 public function __construct(
    \Magento\Framework\App\ActionFactory $actionFactory,
    \Magento\Framework\App\ResponseInterface $response
 ) {
    $this->actionFactory = $actionFactory;
    $this->_response = $response;
 }
 /**
  * Validate and Match
  *
  * @param \Magento\Framework\App\RequestInterface $request
  * @return bool
  */
 public function match(\Magento\Framework\App\RequestInterface $request)
 {
    $identifier = trim($request->getPathInfo(), '/');
    if(strpos($identifier, 'anytestrequest') !== false) {
       $request->setModuleName('newrequest')->setControllerName('test')
          ->setActionName('index');
    } else {
       return;
    }
    return $this->actionFactory->create(
       'Magento\Framework\App\Action\Forward',
       ['request' => $request]
    );
 }
}

// end of creating routing