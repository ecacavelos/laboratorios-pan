// JavaScript Document
$(window).load(function() {
	
	var rotable = document.getElementById('rotable_image');
	var my_degree = 360;

	setInterval(function() {
		//alert("hola");
		my_rotate(my_degree);
		if (my_degree == 360){
			my_degree = 0;	
		}
		else
		{
			my_degree = 360;
		}
	}, 5000);
	
	function my_rotate(degree) {
    	// For webkit browsers: e.g. Chrome
	    $(rotable).css({ WebkitTransform: 'rotateY(' + degree + 'deg)'});
		// For Mozilla browser: e.g. Firefox
		$(rotable).css({ '-moz-transform': 'rotateY(' + degree + 'deg)'});
    }
	
});