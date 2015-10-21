(function($) {
	// jquery goodness

	$("#swipebox-close").on("click", function(){
		$("#fancybox-close").click();
		$("#fancybox-wrap").hide();
		$("#fancybox-overlay").hide();
	});

	$(".post-content a").addClass("read-more");

  $(".download-brochure").on("click", function(){
		var redirectWindow = window.open('cuilDuin_brochure.pdf', '_blank');
    redirectWindow.location;
	});

	$(".view-gallery").on("click", function(){
		$(".sliderimgLi a")[0].click();
	});




})(jQuery);
