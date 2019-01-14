/**
 * Webkul Software.
 *
 * @category  Webkul
 * @package   Webkul_Mpproductcreation
 * @author    Webkul
 * @copyright Copyright (c) 2010-2017 Webkul Software Private Limited (https://webkul.com)
 * @license   https://store.webkul.com/license.html
 */
define([
  'jquery',
  'mage/translate',
  'mage/storage',
  'uiComponent',
  'ko'
  ], function (
      $,
      $t,
      storage,
      Component,
      ko,
      alert
  ) {
  'use strict';
  return Component.extend({
    initialize: function () {
      // #ajaxcall button id selector
      $('#ajaxcall').on('click',function(){
        if($('#ajaxcallvalue').val()){
          ajaxValue = [
            'ajaxvalue' : $('#ajaxcallvalue').val()
          ];
          // #ajaxcallvalue this text box id seletor
          var serviceUrlCreate,serviceUrl,payload;
          /**
            * Save  values .
            */
          serviceUrl        = 'rest/V1/ajax/save';
          payload           = {
            optionval: JSON.stringify(ajaxValue),
          };
          storage.post(
            serviceUrl,
            JSON.stringify(payload)
          ).done(function (response) {
            alert({
              content: $t('Action Successfully completed.')
            });
          }).fail(function (response) {
            alert({
              content: $t('There was error during saving data')
            });
          });
        }
      });
    }
  }
});



