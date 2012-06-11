

$(document).ready(function(){
		
	$("#mailinglist-subscribers .subscriber").live("click", function(){ 
	
		var content = '';
	
		if( $(this).hasClass('inmailinglist') ) {
	
			$(this).removeClass('inmailinglist');
		
		} else {
			
			$(this).addClass('inmailinglist');
			
		}
		
		$('#mailinglist-subscribers .subscriber').each(function(index) {
		
			if( $(this).hasClass('inmailinglist') ) {
			
				var id = $(this).attr('id').split('-')[1];
		
				if(content) {
					
					content += ','+id;
					
				} else {
					
					content += id;
					
				}

			}
			
		});
		
		$('#mailinglist-subscribers-input').attr('value', content);
	
	});

	
	

});

