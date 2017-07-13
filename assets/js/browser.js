// Exports
var BROWSER = {};

// jQuery closure
(function($) {
	$(function() {


		/*
		 * Initialisation
		 */


		// Get browser info
		getBrowserInfo();


		/*
		 * Get browser info
		 */
		function getBrowserInfo() {

			// Browser is on a touch device
			BROWSER.IS_TOUCH = !!navigator.userAgent.match(/(ipad|iphone|android)/i);

			// Browser is IE 8 or under
			var ie_matches = navigator.userAgent.match(/MSIE\s+([\d\.]+)/i);
			if (!!ie_matches && ie_matches.length >= 2) {
				var ie_v = parseFloat(ie_matches[1]);
				BROWSER.IS_IE_LTE8 = (ie_v <= 8),
				BROWSER.IS_IE_LTE7 = (ie_v <= 7);
			}

		}


	});
})(jQuery);
