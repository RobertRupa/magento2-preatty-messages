define([
    'jquery',
    'uiComponent',
    'Magento_Customer/js/customer-data',
    'underscore',
    'jquery/jquery-storageapi'
], function ($, Component, customerData, _) {
    'use strict';

    return Component.extend({
        defaults: {
            cookieMessages: [],
            messages: []
        },
        closeMessage : function(item, event) {
            $(event.target).parent().parent().remove();
        },
        /**
         * Extends Component object by storage observable messages.
         */
        initialize: function () {
            this._super();

            this.cookieMessages = _.unique($.cookieStorage.get('mage-messages'), 'text');
            this.messages = customerData.get('messages').extend({
                disposableCustomerData: 'messages'
            });
            
            // Force to clean obsolete messages
            if (!_.isEmpty(this.messages().messages)) {
                customerData.set('messages', {});
            }

            $.cookieStorage.set('mage-messages', '');
            
            if(this.cookieMessages.length > 0 || this.messages.length > 0){
                $(".page.messages").addClass("show");
                $(" .messages").each(function() {
                    $(".page.messages").addClass("show"); 
                    if($(this).find("div").length > 0){
                        $(this).addClass("show");
                    }
                });
            }
        }
    });
});
