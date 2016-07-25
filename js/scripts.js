$(function(){

	// media query event handler
	if (matchMedia) {
	  var mq = window.matchMedia("(min-width: 1040px)");
	  mq.addListener(WidthChange);
	  WidthChange(mq);
	  $(window).on('resize', function() {
	  	console.log(mq);
	  	WidthChange(mq);
	  });
	}

	// media query change
	function WidthChange(mq) {
	  if (mq.matches) {
	    // window width is at least 940px
	    //If body does NOT have this class add the scroll
	    if(!$('body').hasClass('menu-scroll')) {
		    $(window).on("scroll", function() {
		        if($(window).scrollTop() > 100) {
		        	if(!$('.mainNav').hasClass('active')) {
		          	  $(".mainNav").addClass("active");
		        	}
		        } else {
		            //remove the background property so it comes transparent again (defined in your css)
		           $(".mainNav").removeClass("active");
		        }
		    });
		    $('body').addClass('menu-scroll');
	    }
	  } else {
	    // window width is less than 940px
	    $(".mainNav").removeClass("active");
	    $(window).off('scroll');
	  }
	}

	// HAMBURGER MENU //
	$('.fa-bars').on('click touch', function() {
		// We need to display flex the main nav
		console.log('Hi!');
		$('#menu-main-menu').toggleClass('show');

		if ($('#menu-main-menu').css('background') != null) {
            $('#menu-main-menu').css('background', 'rgba(230, 230, 230, 0.7)');
         }
         else {
            $('#menu-main-menu').css('background', 'none');
         }
	});
	// END //

});