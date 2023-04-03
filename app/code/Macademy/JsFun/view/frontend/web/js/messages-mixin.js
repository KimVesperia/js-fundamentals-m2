define([], function() {
    'use strict';
    
    return function (originalMessages) {
        // originalMessages.defaults.hideTimeout = 1000;
        return originalMessages.extend({
            defaults: {
                hideTimeout: 3000,
                hideSpeed: 100
            }
        });
    }
});