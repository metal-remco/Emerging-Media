
	function Steps() {
		
		this.currentstep 	= 1;
		this.speed			= 1000;
		
		this.init = function() {
			
			var height = $('#steps #step-1').height();
			$("#steps-container").css('height', height+'px');
			
		}; this.init();
		
		this.next = function (newstep) {
		
			// Prev & Next
			var prevtitle 		= $('#steps #step-'+newstep).prev().find('h1').html();
			var nexttitle 		= $('#steps #step-'+newstep).next().find('h1').html();

			if(!nexttitle) {
				
				$("#next-step-button").addClass('hidden');
				
			} else {
			
				$("#next-step-button").removeClass('hidden');
				$("#next-step-button").html(nexttitle);
				
			}
			
			if(!prevtitle){
				
				$("#prev-step-button").addClass('hidden');
	 
			} else {

				$("#prev-step-button").removeClass('hidden');
				$("#prev-step-button").html(prevtitle);
				
			}
			
			// Nav Steps
			$('#nav-steps .nav-step').removeClass('current');
			$('#nav-steps #nav-step-'+newstep).addClass('current');
			
			var inst = this;
			
			$('#nav-steps .nav-step').removeClass('done');
			$('#nav-steps .nav-step').each(function() {
			
				var thisstep = $(this).attr('id').split('-')[2];
				
				if(parseFloat(thisstep) < parseFloat(newstep) ) {
					
					$('#nav-steps #nav-step-'+thisstep).addClass('done');

				}				
				
			});		 

			// Animation
			var position = (-596 * (newstep-1) );
			$('#steps').animate({ left: position }, this.speed, function() {  
				
				// Height
				var height = $('#steps #step-'+newstep).height();
				$("#steps-container").css('height', height+'px');

				
			});


			this.currentstep = newstep;

		}
		
		this.checkarticles = function(id) {
		
			$('#step-3 .article').each(function() {
			
				if( $(this).hasClass('selected') ) {
					
					var id = $(this).attr('id').split('-')[1];
					//$('#step-3 #article-'+id).removeClass('hidden');
					console.log(id);
					
				}			
				
			});	
				 
			console.log('----');

		}
		
	}


$(document).ready(function(){

	var steps = new Steps();
	
	$("#next-step-button").live("click", function(){ 
	
		steps.next(steps.currentstep+1);
		
	});

	$("#prev-step-button").live("click", function(){ 
	
		steps.next(steps.currentstep-1);
		
	});
	
	$("#step-3 .article").live("click", function(){ 
			
		if( $(this).hasClass('selected') ) {
		
			$(this).removeClass('selected');
			$(this).find('.selectme').html('Artikel selecteren');
		
		} else {
			
			$(this).addClass('selected');
			$(this).find('.selectme').html('Artikel geselecteerd');

		}
		
		steps.checkarticles();
		
	});
	

});












