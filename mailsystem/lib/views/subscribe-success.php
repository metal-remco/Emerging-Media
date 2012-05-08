    
    <h1 id="page-title" class="shadow-text">Inschrijving succesvol</h1>

	<div id="subscribe-success" class="shadow">
    
    	<!-- Todo: Afvangen als er geen Post data is -->
		<?php // Voeg de gebruiker toe
        $mailsystem->addSubscriber(htmlentities(htmlspecialchars($_POST['name'])), htmlentities(htmlspecialchars($_POST['email'])), htmlentities(htmlspecialchars($_POST['child_name'])), htmlentities(htmlspecialchars($_POST['child_class'])), htmlentities(htmlspecialchars($_POST['employee_function'])), htmlentities(htmlspecialchars($_POST['employee_class'])), htmlentities(htmlspecialchars($_POST['type']))); ?>
            
        <!-- Todo: Bevestigingsmail, Oudere nieuwbsrieven bekijken? Klik hier. -->
        <p>De inschrijving is succesvol. U ontvangt vanaf nu onze nieuwsbrief op <strong><?php echo $_POST['email']; ?></strong>.</p>
                    
    </div><!-- subscribe-success -->