function titlenus(){
	$('input.title-switch').each(function(){
		if ($(this).attr('title') != ""){
			// if the title exists
			if($(this).val() == "") {
				// if on load the value is blank
				$(this).val($(this).attr('title'));
			}	
			$(this).blur(function(){
				if($(this).val() == "") {
					$(this).val($(this).attr('title'));
				}
			});	
			$(this).click(function(){
				if($(this).val() == $(this).attr('title')) {
					$(this).val("");
				}
			});
		}
	});
};

jQuery(function($) {
	titlenus();
	$('tr').hover(function() { $(this).css("background-color", '#E6F5CF') }, function() { $(this).css("background-color", '#F4F4F4') })
	
	// make abbr's accept styling in IE
	document.createElement('abbr');
});

