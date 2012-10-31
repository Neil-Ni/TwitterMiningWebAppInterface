(function($){
	var sliderUL = $('div.slider').css('overflow', 'hidden').children('ul'),
		imgs = sliderUL.find('img'),
		imgHeight = imgs.first().height,//180
		imgsLen = 8, //8
		current = 1,
		totalImgHeight = imgHeight*imgsLen; 

	console.log(imgsLen);

	$('#slider-nav').show().find('button').on('click', function(){
		var direction = 'next',
			loc = imgHeight;
		current += 1;
		if (current === 0){
			current = imgsLen;
			direction = 'next'
		}else if (current-1 === imgsLen){
			current = 1;
		}
		console.log(current);
		transition(sliderUL, loc, direction);
	});
	// $('#slider-nav2').show().find('button').on('click', function(){
	// 	var direction = 'next',
	// 		loc = imgHeight;
	// 	current += 1;
	// 	if (current === 0){
	// 		current = imgsLen;
	// 	}else if (current-1 === imgsLen){
	// 		current = 1;
	// 	}
	// 	console.log(current);
	// 	transition(sliderUL, loc, direction);

	// });
	function transition(container, loc, direction){
		console.log(direction);
		var unit; // -= +=
		// if (direction && loc!==0){
		// 	unit = (direction === 'next') ?'-=' : '+=';
		// }
		container.animate({
			'margin-left': '+=180'
		});
	}

})(jQuery);