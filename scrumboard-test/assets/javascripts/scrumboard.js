// JavaScript Document

function Scrumboard(scrumboardtitle, scrumboarddescription) { 

	// Initialisatie

		var title 			= scrumboardtitle;
		var description 	= scrumboarddescription;
		var panels 			= new Array();
		var items 			= new Array();
		
	// Constructor
	
		// Maak title, #title en #description leeg en vul ze
		$('title').empty();
		$('title').append(title);

		$('#title').empty();
		$('#title').append(title);
		
		$('#description').empty();
		$('#description').append(description);
		
	// Methodes
	
		this.getAmountOfPanels	= function() { return panels.length; }
		this.getAmountOfItems	= function() { return items.length; }
		/* 
		this.getItem 			= function(id) { return items[id-1]; }
		*/
		this.addPanel = function(paneltitle, panelcolor) {
			
			// Check hoeveel panels er zijn, en tel daar 1 bij op voor het id
			var panelid = this.getAmountOfPanels()+1;
			
			// Push een nieuw panel naar de panels Array
			panels.push( new Panel(panelid, paneltitle, panelcolor) );
	
		}
		this.addItem = function(itemtitle) {
			
			// Check hoeveel panels er zijn, en tel daar 1 bij op voor het id
			var itemid = this.getAmountOfItems()+1;
			
			// Push een nieuw item naar de items Array
			items.push( new Item(itemid, itemtitle) );
	
		}		
		
		this.displayPanels = function() { 
		
			// Loop door de panels
			for(var key in panels) {
				
				var p 		= panels[key]; // Haalt één object uit de panels Array
				var width	= 94 / this.getAmountOfPanels();
				var margin	= (6 / 2) / this.getAmountOfPanels();
				
				// Zet het panel in #panels
				$('#panels').append('<div class="panel radius" id="panel-'+p.getID()+'"></div>');
	
				// Zet de titel in het panel
				$('#panel-'+p.getID()).append('<h2 class="panel-title shadow-text">'+p.getTitle()+'</h2>');
				
				// Style het panel en de titel
				$('#panel-'+p.getID()).css('width', width+'%' );
				$('#panel-'+p.getID()).css('margin', margin+'%' );
				$('#panel-'+p.getID()).css('background', p.getColor() );
				$('#panel-'+p.getID()+' .panel-title').css('color', p.getColor() );
						
			 }	
			 						 	
		}
		this.displayItems = function() { 
		
			// Loop door de items
			for(var key in items) {
				
				var i 		= items[key]; // Haalt één object uit de items Array
				var width	= 94 / this.getAmountOfItems();
				var margin	= (6 / 2) / this.getAmountOfItems();
				
				// Zet het panel in #panels
				$('#panel-1').append('<div class="item radius" id="item-'+i.getID()+'"></div>');
	
				// Zet de titel in het item
				$('#item-'+i.getID()).append('<h3 class="item-title">'+i.getTitle()+'</h3>');
				
				// Positioneer de items
				for(var key in items) {
					
					var i 		= items[key]; // Haalt één item uit de items Array
				
					// Als de browser localStorage ondersteund
					if (localStorage) {
						
						var top		= localStorage.getItem('item-'+i.getID()+'-top');
						var left 	= localStorage.getItem('item-'+i.getID()+'-left');
						
						if(top && left) { 
						
							$('#item-'+i.getID()).animate({
								left: left,
								top: top
							}, 500, function() {
								// Animation complete.
							});
	
						}
						
					}
					
				}
										
			 }	
			 
			// Maak .item draggable
			$( ".item" ).draggable({
				
				// Als de muis word losgelaten
				stop: function(event, ui) { 
				
					// Als de browser localStorage ondersteund
					if (localStorage) {
						
						var id 			= $(this).attr('id').split('-')[1]; 
						var top 		= $(this).css('top');
						var left 		= $(this).css('left');
												
						localStorage.setItem('item-'+id+'-top', top);  
						localStorage.setItem('item-'+id+'-left', left);  
						
						console.log(top);
						console.log(left);
						
					} 
		
				}
				
			});
			
		}		
		
} // Prikbord

	/* Opmerkingen
			
		Ik heb een aantal keer 'Vraag voor Rimmert' in de comments staan. Misschien kunt u hier antwoord op geven?
		
		Todo: 
		- Dubbele code verwijderen; zoals bij het positioneren van de items
		
		Schoonheidsfoutjes:
		- Ruimte tussen #items en #content maken.
		- Radius bij de foto's in de items op een desktop weghalen.
		- Het id van de items beter weergeven.
		- Margin van de items, right en bottom + stage padding.
		
		Master:
		- Meerder prikborden aanmaken
		- Browser Check; weergeven in Footer

		Aantekeningen:
		
		Scope
		private 	var name = ''; (= protected)
		private 	function get() (= protected)
		public		this.get = fucntion() { } 
		
		Media Queries 	
		<link rel="stylesheet" type="text/css" media="screen" href="assets/stylesheets/style.css" />
		<link rel="stylesheet" type="text/css" media="screen and (min-width: 480px)" href="assets/stylesheets/desktop.css" />
		<link rel="stylesheet" type="text/css" media="screen and (max-device-width: 480px)" href="assets/stylesheets/mobile.css" />
		
		
	*/
	

