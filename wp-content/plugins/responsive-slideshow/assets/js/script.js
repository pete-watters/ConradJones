jQuery(window).load(function() {
// slideshow on homepage
jQuery('#wa_rs_cycle').cycle({
    fx: rsArgs.fx,
    timeout: parseInt(rsArgs.timeout),
    easing: rsArgs.easing,
    speed:rsArgs.speed,
    fit: 1,
    next: '#wa_rs_next', 
    prev: '#wa_rs_prev',
    pager:'#wa_rs_nav',
    pagerAnchorBuilder: function paginate(idx, el) {
    return '<a class="wa_rs_nav_point" href="#" >&bull;</a>';
    }
 });

// This function  resize the height of the container when the window is resized
function updateSlideHolderSize() {
    var max = 0;
    jQuery("#wa_rs_cycle li img").each(function () {
        max = Math.max(max, jQuery(this).height());
    });
    jQuery("#wa_rs_cycle").height(max);
};
 
//extra animation 
jQuery('.wa_rs_relative_container')
    .hover(function() {
        jQuery('#wa_rs_prev').animate({ 'left' : '1.2%', 'opacity' : 1 }), 300;
        jQuery('#wa_rs_next').animate({ 'right' : '1.2%', 'opacity' : 1 }), 300;
    }, function() {
        jQuery('#wa_rs_prev').animate({ 'left' : 0, 'opacity' : 0 }), 'fast';
        jQuery('#wa_rs_next').animate({ 'right' : 0, 'opacity' : 0 }), 'fast';
    });
});

//add swipe 
jQuery("#wa_rs_cycle").touchwipe({
      wipeLeft: function() {
            jQuery("#wa_rs_cycle").cycle("next");
      },
      wipeRight: function() {
            jQuery("#wa_rs_cycle").cycle("prev");
      }
});