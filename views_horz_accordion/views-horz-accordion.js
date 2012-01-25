Drupal.behaviors.views_horz_accordion =  {
  attach: function(context) {
    if(Drupal.settings.views_horz_accordion){
      (function ($) {
	    // START : 
    	
    	 
    	 $('#hero-horz-accordion').liteAccordion({ 
    		    theme : 'light',
    		    firstSlide : 1,
    		    //easing: 'easeOutBounce',
    		    //linkable : true,
    		    activateOn: 'click'
    		});
    	// END  
      
      })(jQuery);
    }
  }
};