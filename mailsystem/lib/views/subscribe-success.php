
	<?php // Voeg de gebruiker toe
    $mailsystem->addSubscriber($_POST['name'], $_POST['email'], $_POST['child_name'], $_POST['child_class'], $_POST['employee_function'], $_POST['employee_class'], $_POST['type']); ?>

	<div id="subscribe-success">
    
    	<!-- Todo: Afvangen als er geen Post data is -->
    
        <h1 id="page-title" class="shadow-text">Inschrijving succesvol</h1>
        
        <!-- Todo: Bevestigingsmail, Oudere nieuwbsrieven bekijken? Klik hier. -->
        <p class="shadow">De inschrijving is succesvol. U ontvangt vanaf nu onze nieuwsbrief op <strong><?php echo $_POST['email']; ?></strong>.</p>
                    
    </div>