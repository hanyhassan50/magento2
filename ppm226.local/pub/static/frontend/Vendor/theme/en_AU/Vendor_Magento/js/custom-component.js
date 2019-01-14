define([
    'jquery',
    'uiComponent',
    'mage/validation',
    'ko',
    'Vendor_Magento/js/action/save-customer',
    ], function ($, Component, validation, ko, saveAction) {
        'use strict';
        var totalCustomer= ko.observableArray([]);
        return Component.extend({
            defaults: {
                template: 'Vendor_Magento/knockout-test'
            },
 
            initialize: function () {
                // https://webkul.com/blog/use-knockout-js-custom-template-magento2/
                this.customerName = ko.observableArray([]);
                this.customerData = ko.observable('');
                // end 
                this._super();
            },
            save: function (saveForm) {
                var self = this;
                var saveData = {},
                    formDataArray = $(saveForm).serializeArray();
 
                formDataArray.forEach(function (entry) {
                    saveData[entry.name] = entry.value;
                });
 
                if($(saveForm).validation()
                    && $(saveForm).validation('isValid')
                ) {
                    saveAction(saveData, totalCustomer).always(function() {
                        console.log(totalCustomer());
                    });
                }
            },
            getTotalCustomer: function () {
                return totalCustomer;
            },
            // https://webkul.com/blog/use-knockout-js-custom-template-magento2/
            addNewCustomer: function () {
                this.customerName.push({name:this.customerData()});
                this.customerData('');
            }
            // end
        });
    }
);