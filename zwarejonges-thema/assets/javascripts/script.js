// JavaScript Document

$(document).ready(function(){
	
	themeurl = 'http://project.cmi.hro.nl/2011_2012/emedia_med2d_t5/wp-content/themes/dezwarejongens-1/'
	headeropen = false;
	
	$("#header-arrow").click( function() { 

		if(headeropen) { // Als de header open is, zet hem dicht
		
			$('#header-widgets').slideUp(500);
			$('#header-arrow').css('background', 'url('+themeurl+'assets/images/arrow-down.png) no-repeat');
			headeropen = false;		
		
		} else { // Als de header dicht is, zet hem open
		
			$('#header-widgets').slideDown(1000);
			setTimeout("$('#header-arrow').css('background', 'url('+themeurl+'assets/images/arrow-up.png) no-repeat');",1000);
			headeropen = true;

		}

	});

	$("#header-switch-panel").click( function() { 

		$('#header-widgets').animate({left: '-=1810'});
		$("#header-switch").css('display', 'block');
		$("#header-switch-panel").css('display', 'none');

	});
	
	$("#header-switch").click( function() { 

		$('#header-widgets').animate({left: '+=1810'});
		$("#header-switch").css('display', 'none');
		$("#header-switch-panel").css('display', 'block');

	});

				
});

