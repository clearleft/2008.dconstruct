jQuery(function($) {
	var imagearray = new Array('img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg');
	var currentimage = 0;
	var loopimages = function () {
		currentimage++;
		if (currentimage == imagearray.length) {
			currentimage = 0;
		}
		$('.slideshow #showing').before('<img src="/img/photos/'+imagearray[currentimage]+'" alt="" id="waiting" />');
		$('.slideshow #waiting').load(function() {
			$('.slideshow #showing').fadeOut('slow',function() {
				$('.slideshow #showing').attr('id','deleteme');
				$('.slideshow #waiting').attr('id','showing');
				$('.slideshow #deleteme').remove();
			});
		});
	};
	var looping = setInterval(loopimages,5000);
});