
    <h1 id="page-title" class="shadow-text">Uitschrijving succesvol</h1>

    <div id="unsubscribe" class="shadow">
    
        <?php $getid = $_GET['id']; // todo: Object gebruiken
		$mailsystem->removeSubscriber($getid); ?>
    
    	<!-- bevestiginsmail -->
        <p>U bent succesvol uitgeschreven en zult onze nieuwsbrief niet meer ontvangen.</p>
    
    </div><!-- unsubscribe -->