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

$(document).ready(function(){
		
	$("#form_subscribe").validate();
	$("#form_login").validate();

});