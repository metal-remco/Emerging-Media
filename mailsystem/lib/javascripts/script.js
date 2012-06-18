// JavaScript Document

	/*
	 * Translated default messages for the jQuery validation plugin.
	 * By Joost Baaij http://www.spacebabies.nl/ joost@spacebabies.nl
	 * Language: NL
	 * Skipped date/dateISO/number.
	 */
	jQuery.extend(jQuery.validator.messages, {
		required: "<span class='form-error-left'></span><span class='form-error-center'>Dit veld is verplicht</span><span class='form-error-right'></span>",
		maxlength: jQuery.format("<span class='form-error-left'></span><span class='form-error-center'>U kunt niet meer dan {0} karakters invoeren</span><span class='form-error-right'></span>"),
		minlength: jQuery.format("<span class='form-error-left'></span><span class='form-error-center'>U dient minimaal {0} karakters in te voeren</span><span class='form-error-right'></span>"),
		rangelength: jQuery.format("<span class='form-error-left'></span><span class='form-error-center'>U dient minimaal {0} en maximaal {1} karakters in te voeren</span><span class='form-error-right'></span>"),
		email: "<span class='form-error-left'></span><span class='form-error-center'>Een geldig e-mailadres is verplicht.</span><span class='form-error-right'></span>",
		url: "<span class='form-error-left'></span><span class='form-error-center'>Een geldig webadres is verplicht.</span><span class='form-error-right'></span>",
		date: "<span class='form-error-left'></span><span class='form-error-center'>Een geldige datum is verplicht.</span><span class='form-error-right'></span>",
		number: "<span class='form-error-left'></span><span class='form-error-center'>Een geldig getal is verplicht.</span><span class='form-error-right'></span>",
		digits: "<span class='form-error-left'></span><span class='form-error-center'>Gebruik alleen cijfers.</span><span class='form-error-right'></span>",
		equalTo: "<span class='form-error-left'></span><span class='form-error-center'>Herhaal de invoer nogmaals.</span><span class='form-error-right'></span>",
		range: jQuery.format("<span class='form-error-left'></span><span class='form-error-center'>U dient een waarde tussen {0} en {1} in te voeren.</span><span class='form-error-right'></span>"),
		max: jQuery.format("<span class='form-error-left'></span><span class='form-error-center'>U dient een waarde kleiner dan of gelijk aan {0} in te voeren.</span><span class='form-error-right'></span>"),
		min: jQuery.format("<span class='form-error-left'></span><span class='form-error-center'>U dient een waarde groter dan of gelijk aan {0} in te voeren.</span><span class='form-error-right'></span>"),
		creditcard: "<span class='form-error-left'></span><span class='form-error-center'>Een geldig creditcardnummer is verplicht.</span><span class='form-error-right'></span>"
	});
	
	if( $("#subscribers").hasClass('sorter') ) {

		// Maak de subscribers tabel sorteerbaar
		var sorter = new TINY.table.sorter("sorter");
		
		sorter.head = "head";
		sorter.asc = "asc";
		sorter.desc = "desc";
		//sorter.even = "evenrow";
		//sorter.odd = "oddrow";
		//sorter.evensel = "evenselected";
		//sorter.oddsel = "oddselected";
		//sorter.paginate = true;
		//sorter.currentid = "currentpage";
		//sorter.limitid = "pagelimit";
		
		sorter.init("subscribers",1);
		
	}
	
$(document).ready(function(){
		
	$("#form_subscribe").validate();
	$("#form_login").validate();
                  $("#form_article").validate();
                
	
	
	$("#addchild").live("click", function(){ 
	
		var id = $('#children .child').last().attr('id').split('_')[1];
		id++;
		
		var div_top 		= "<div id='child_"+id+"' class='child'>"
		var name_field 		= "<input type='text' name='child_name_"+id+"' id='child_name_"+id+"' placeholder='Naam kind'  value='' size='99' class='required shadow-light input-child' /><br />";
		var class_field 	= "<input type='text' name='child_class_"+id+"' id='child_class_"+id+"' placeholder='Klas kind' value='' size='3' class='shadow-light input-class' />";
		var remove_child	= "<a id='removechild' title='Kind verwijderen'>Kind verwijderen</a><br />";
		var div_bottom		= "</div>";
	
		var child_div 		= div_top+name_field+class_field+remove_child+div_bottom;
	
		$('#children').append(child_div);
	
	});

	$("#removechild").live("click", function(){ 
	
		$(this).parent().remove();
	
	});
	
});

