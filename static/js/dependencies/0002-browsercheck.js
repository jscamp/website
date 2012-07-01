(function() {
	var userAgent = {
		string: navigator.userAgent.toLowerCase()
	};
		
	if(jQuery.browser.msie) {
		userAgent.tooOld = jQuery.browser.version < 9;
		userAgent.url = "http://www.browser-update.org/update.html";
	}
	else if(jQuery.browser.mozilla) {
		userAgent.v = jQuery.browser.version.split('.');
		userAgent.tooOld = (userAgent.v[0] == 1 && userAgent.v[1] < 9) || (userAgent.v[0] == 1 && userAgent.v[1] == 9 && userAgent.v[2] < 2);
		if(/firefox/.test(userAgent.string)) {
			userAgent.url = "http://www.mozilla.org/firefox/";
		}
	}
	else if(jQuery.browser.webkit) {
		userAgent.v = jQuery.browser.version.split('.');
		userAgent.tooOld = (userAgent.v[0] < 534) || (userAgent.v[0] == 534 && userAgent.v[1] < 17);
		if(/chrome/.test(userAgent.string)) {
			userAgent.url = "http://www.google.com/chrome/";
		}
		else if(/safari/.test(userAgent.string)) {
			userAgent.url = "http://www.apple.com/safari/";
		}
	}
	else if(jQuery.browser.opera) {
		userAgent.tooOld = jQuery.browser.version < 10;
		userAgent.url = "http://www.opera.com/";
	}
	else {
		userAgent.tooOld = true;
		userAgent.url = "http://www.browser-update.org/update.html";
	}
	
	if(userAgent.tooOld && userAgent.url) {
		if(confirm("Surely you want to switch to a modern browser before attending this conference, because this one won't do."))
			window.location = userAgent.url;
		else
			alert("Here be dragons...");
	}
})();