$(function() {
    var $slideshow = $('.slideshow'),
    $slides = [],
    active = null;
    
    // build the slides array from the children of the slideshow.  this will pull in any children, so adjust the scope if needed
    
	$slideshow.children().each(function(i) {
		
		var $thisSlide = $(this);
		if(!($thisSlide.hasClass('slideShowBtnPanel'))){
			$thisSlide.fadeOut(500);
			
			// if its the active slide then set it to this index
			if ( $thisSlide.hasClass('active') ) {active = i;}
			$slides.push( $thisSlide );
		}
	});
	
	// if no active slide, take the last one
	if ( active === null ) active = $slides.length - 1;
	
	
	
	 
    function slideSwitch() {
        // add the last-active class to the previously active slide
		
		var $lastActive = $slides[active];
        $lastActive.delay(2000).fadeOut(500, function(){
		$lastActive.addClass('last-active');
        
        // find the next slide
        active++;
        
        // set to zero if it's too high
        if ( active >= $slides.length ) active = 0;
        
        var $nextActive = $slides[active];
    	$lastActive.removeClass('active last-active');
		$nextActive
		.addClass('active')
		.fadeIn(500, function(){
		//$nextActive.delay(1000).fadeOut(1000);
		slideSwitch();
				
			});
            });
		
		
    }

    // start the interval
    if($slides[active]!=null)
		$slides[active].fadeIn(500, function(){slideSwitch();});
});
// JavaScript Document