define(
    [
        'ko',
        'uiComponent'
    ],
    function (ko, Component) {
        "use strict";

        return Component.extend({
            defaults: {
                template: 'Vendor_Magento/newsletter'
            },
            isRegisterNewsletter: true
        });
    }
);