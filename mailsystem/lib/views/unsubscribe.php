
    <h1 id="page-title" class="shadow-text">Abonnement succesvol opgezegd</h1>

    <div id="unsubscribe" class="shadow">
    
        <?php $getid = $_GET['id']; // todo: Object gebruiken
		$mailsystem->removeSubscriber($getid); ?>
    
    	<!-- bevestiginsmail -->
        <p>Uw abonnement is succesvol opgezegd, u zult onze nieuwsbrief niet meer ontvangen.</p>
    
    </div><!-- unsubscribe -->