( function( $ ) {
	var travel_stories_search_toggle_none;
    /* Inside of this function, $() will work as an alias for jQuery()
     and other libraries also using $ will not be accessible under this shortcut*/
	$( document ).ready( function() {
    	/* travel_stories show or hide search box*/
		$( '.travel-stories-search-toggle' ).click( function() {
			$( '.travel-stories-search-toggle' ).css( 'display', 'none' );
			$( '#travel_stories_search_container' ).css( 'display', 'block' );
			$( '#travel-stories-search-box' ).focus();
		});
		$( '#travel-stories-search-box' ).blur( function() {
	  		$( '#travel_stories_search_container' ).css( 'display', 'none' );
	  		$( '.travel-stories-search-toggle' ).css( 'display', 'block' );
		});
		/* travel_stories options for JssorSlider*/
        var travel_stories_options = {
			AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
			$AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
			$AutoPlayInterval: 500,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
			$PauseOnHover: 3,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1
			$Loop: 1,                                      // Enable loop(circular) of carousel or not, 0: stop, 1: loop, 2 rewind, default value is 1
            $DragOrientation: 1,                                /*[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)*/
            $ArrowNavigatorOptions: {                       	/*[Optional] Options to specify and enable arrow navigator or not*/
                $Class: $JssorArrowNavigator$,              	/*[Requried] Class to create arrow navigator instance*/
                $ChanceToShow: 2,                               /*[Required] 0 Never, 1 Mouse Over, 2 Always*/
                $AutoCenter: 0,                                 /*[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0*/
                $Steps: 1                                       /*[Optional] Steps to go for each navigation request, default value is 1*/
            }
        };
		/* travel_stories show menu box*/
		$( '#travel-stories-menu-toogle' ).click( function() {
			if ($("div").is("#travel_stories_page_wrapper")) {
				$( '#travel_stories_page_wrapper' ).find( '.travel-stories-site-main-navigation' ).toggleClass( 'travel-stories-toggled-menu-on' );
			} else if ($("div").is("#travel_stories_single_wrapper")) {
				$( '#travel_stories_single_wrapper' ).find( '.travel-stories-site-main-navigation' ).toggleClass( 'travel-stories-toggled-menu-on' );			
			} else {
				$( '#travel_stories_wrapper' ).find( '.travel-stories-site-main-navigation' ).toggleClass( 'travel-stories-toggled-menu-on' );
			}
		});
		/* travel_stories close menu box*/
		$( '#travel_stories_close_menu' ).click( function() {
			if ($("div").is("#travel_stories_page_wrapper")) {
				$( '#travel_stories_page_wrapper' ).find( '.travel-stories-site-main-navigation' ).removeClass( 'travel-stories-toggled-menu-on' );
			} else if ($("div").is("#travel_stories_single_wrapper")) {
				$( '#travel_stories_single_wrapper' ).find( '.travel-stories-site-main-navigation' ).removeClass( 'travel-stories-toggled-menu-on' );							
			} else {	
				$( '#travel_stories_wrapper' ).find( '.travel-stories-site-main-navigation' ).removeClass( 'travel-stories-toggled-menu-on' );
			}	
		});
		/* travel_stories theme slider */
		if( $( 'body' ).hasClass( 'home' ) ) {
			if ( typeof slider !=="undefined" )
	    		var travel_stories_jssor_slider = new $JssorSlider$( 'slider', travel_stories_options );
		}
	});
})( jQuery );