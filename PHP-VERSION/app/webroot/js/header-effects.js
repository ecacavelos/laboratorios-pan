// JavaScript Document
$(window).load(function() {
	
	var rotable = document.getElementById('rotable_image');

	setInterval(function() {
		my_rotate(360);
	}, 10000);
	
	function my_rotate(degree) {
    	// For webkit browsers: e.g. Chrome
	    $(rotable).css({ WebkitTransform: 'rotate(' + degree + 'deg)'});
		// For Mozilla browser: e.g. Firefox
		$(rotable).css({ '-moz-transform': 'rotate(' + degree + 'deg)'});
    }
	
});