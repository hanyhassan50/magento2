<?php
/**
 * Webkul Software.
 *
 * @category  Webkul
 * @package   Webkul_Ajaxwebapi
 * @author    Webkul
 * @copyright Copyright (c) 2010-2017 Webkul Software Private Limited (https://webkul.com)
 * @license   https://store.webkul.com/license.html
 */
namespace Vendor\Magento\Model\Ajax;
 
use Webkul\Ajaxwebapi\Api\AjaxSaveInterface;
 
class AjaxSaveManagement implements AjaxSaveInterface
{
    
 
   /**
    * Returns string
    *
    * @api
    * @param string $ajaxval
    * @return string
    */
    public function ajaxSave($oajaxval)
    {
        try{
          return "Saved";
        }catch(\Exception $e){
 
        }
 
    }
 
}