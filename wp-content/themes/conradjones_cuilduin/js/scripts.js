(function($) {
	// jquery goodness
		$(".logo").on("click",function(){
				window.location = "http://comhairleteicneolaiochta.ie/projects/cuilduin/";
		});

	$(".post-content a").addClass("read-more");

	$("#swipebox-close").on("click", function(){
		alert("click");
		$("#fancybox-overlay").click();
	});


  $(".download-brochure , .download-brochure-container").on("click", function(){
		var redirectWindow = window.open('cuilDuin_brochure.pdf', '_blank');
    redirectWindow.location;
	});



	$(".view-gallery").on("click", function(){
		$(".sliderimgLi a")[0].click();
	});

		//Expand more info button on hover
		$(".more").hover(function(){
			$(this).stop().animate({width: '225px' }, 200).css({'z-index' : '10'}); //Change the width increase caption size
			$(this).find("span").show();
		}, function () {
			$(this).stop().animate({width: '225px' }, 200).css({'z-index' : '1'});
				$(this).find("span").hide();
    		});

				$(".more").click(function(){
					$(this).find("a").click(); //Change the width increase caption size
					alert("click");
				});

   $(".luas-map").on("click", function(){
		 $(".luas-map-enlarge").click();
	 });

	$('img[usemap]').rwdImageMaps();

	$('area').on("click" , function(e){
		e.preventDefault();
		var className = $(this).attr("class");

		$("#" + className).click();
			// could change colour of background to match menu item selected
		//$("#swipebox-overlay").css("background","green");
	});


$('.panzoom').panzoom({
		$zoomIn: $(".zoom-in"),
		$zoomOut: $(".zoom-out"),
		$zoomRange: $(".zoom-range"),
		$reset: $(".reset"),
		startTransform: 'scale(1.0)',
		increment: 0.1,
		minScale: 1,
		contain: 'invert'
	}).panzoom('zoom');

	//$(".reset").click();

})(jQuery);
