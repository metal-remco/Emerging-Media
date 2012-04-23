
	<div id="unsubscribe">
    
		<?php $getid = $_GET['id'];  // todo: Object gebruiken 
		$mailsystem->removeSubscriber($getid); ?>
        
    	<p>Subscriber met id '<?php echo $getid; ?>' is succesvol verwijderd.</p>
        
    </div>
