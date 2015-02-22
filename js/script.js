// To Do:
// make the letters change back to gray as sliding
// inner html the menu seidebar into a div

$(document).ready(function() {
	// var height = $('.menu-item a').height();
	// $('.menu-item').css('height', height + 'px');
	// $('.menu-highlight').css('height', height + 'px');
	// $('.menu-item.hover').css('height', height + 'px');
	
	$('.menu-item').hover( 
		function() {	
			$(this).find('.menu-highlight').css({'background-color': '#DF4231', 'width' : '0px'});
			$(this).find('.menu-highlight').stop().animate({width:230},300);	
			$(this).find('.hover').stop().animate({width:230},300);
	}, function() {
			$(this).find('.menu-highlight').stop().animate({width:0},300);
			$(this).find('.hover').stop().animate({width:0},300);			
	});
	

	// Gallery Page ------------------
	var albumLength = 0;
	var currentImage = 0;

	function clickedAlbum() {
		currentImage = 0;
		var imageName = '.image' + currentImage;
		$(imageName).show();
		$('.prev-button').css('visibility', 'hidden');
		$('.gallery-view').show();
	}

	function clickedAlbum200x() {
		albumLength = 6;
		clickedAlbum();
	}

	$('.content-album-200x').ready(clickedAlbum200x);

	$('.next-button').click(function() {
		var imageName = '.image' + currentImage;
		$(imageName).hide();
		currentImage += 1;
		imageName = '.image' + currentImage;
		$(imageName).fadeIn(800);

		if(currentImage != 0) {
			$('.prev-button').css('visibility', 'visible');
		}

		if((currentImage + 1) == albumLength) {
			$('.next-button').css('visibility', 'hidden');
		}
	});

	$('.prev-button').click(function() {
		var imageName = '.image' + currentImage;
		$(imageName).hide();
		currentImage -= 1;
		imageName = '.image' + currentImage;
		$(imageName).fadeIn(800);

		if((currentImage + 1) != albumLength) {
			$('.next-button').css('visibility', 'visible');
		}

		if(currentImage == 0) {
			$('.prev-button').css('visibility', 'hidden');
		}
	});
});