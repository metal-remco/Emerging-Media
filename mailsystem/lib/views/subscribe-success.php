    
    <h1 id="page-title" class="shadow-text">Abonneren succesvol</h1>

	<div id="subscribe-success" class="shadow">
    
    	<!-- Todo: Afvangen als er geen Post data is -->
		<?php // Voeg de gebruiker toe
        $mailsystem->addSubscriber($_POST['name'], $_POST['email'], $_POST['child_name'], $_POST['child_class'], $_POST['employee_function'], $_POST['employee_class'], $_POST['type']); ?>
            
        <!-- Todo: Bevestigingsmail, Oudere nieuwbsrieven bekijken? Klik hier. -->
        <p>U bent succesvol geabonneerd. U ontvangt vanaf nu onze nieuwsbrief op <strong><?php echo $_POST['email']; ?></strong>.</p>
                    
    </div><!-- subscribe-success -->