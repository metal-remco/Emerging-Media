
	<div id="unsubscribe">
    
		<?php $getid = $_GET['id'];  // todo: Object gebruiken 
		$mailsystem->removeSubscriber($getid); ?>
        
    	<p>Subscriber met id '<?php echo $getid; ?>' is succesvol verwijderd.</p>
        
        <!-- Todo: Dit moet natuurlijk niet echt worden weergegeven als iemand zich uitschrijft. -->
    	<p><a href="index.php?view=subscribers">Terug naar het overzicht</a></p>
            
    </div>
