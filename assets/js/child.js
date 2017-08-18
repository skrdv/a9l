jQuery.noConflict();


/*==========================
 DOM Ready (After main.js is loaded)
 ===========================*/

jQuery(function(){

	//Prevent child theme events from sending before the pageview. Do not add custom event tracking here- add it where noted below!
	if ( isGoogleAnalyticsReady() ){
		supplementalEventTracking();
	}

}); //End Document Ready


/*==========================
 Window Load
 ===========================*/

jQuery(window).on('load', function(){

	supplementalEventTracking();

	jQuery('.nano').nanoScroller();

	jQuery('#share').ayoshare({
        counter: true,
        button: {
            facebook : true,
						twitter : true,
            pinterest : true,
						// linkedin: true,
        }
    });


}); //End Window Load


/*==========================
 Window Resize
 ===========================*/

jQuery(window).on('resize', function(){
	debounce(function(){

	}, 500);
}); //End Window Resize



/*==========================
 Child Functions
 To override a parent function, simply redefine it here.
 ===========================*/

//Child theme event tracking.
function supplementalEventTracking(){
	once(function(){
		//Simple example:
		//nebula.dom.document.on('click touch tap', '.selector', function(){
		//	ga('send', 'event', 'Category', 'Action', 'Label');
		//});

		//Add your custom event tracking here!

	}, 'supplemental event tracking');
}
