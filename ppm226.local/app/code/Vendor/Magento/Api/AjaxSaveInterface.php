<?php
/**
 * Webkul Software.
 *
 * @category  Webkul
 * @package   Webkul_Ajaxwebapi
 * @author    Webkul
 * @copyright Copyright (c) 2010-2017 Webkul Software Private Limited (https://webkul.com)
 * @license   https://store.webkul.com/license.html
 */
namespace Vendor\Magento\Api;
 
interface AjaxSaveInterface
{
    /**
     * Returns string
     *
     * @api
     * @param string $ajaxval
     * @return string
     */
    public function ajaxSave($ajaxval);
 
}