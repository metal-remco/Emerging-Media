    
    <h1 id="page-title" class="shadow-text">Abonneren succesvol</h1>

	<div id="subscribe-success" class="shadow">
    
    	<!-- Todo: Afvangen als er geen Post data is -->
        <!--Todo: htmlentities & htmlspecialvar afvangen voordat functie addSubscriber wordt uitgevoerd -->
		<?php // Voeg de gebruiker toe
        $mailsystem->addSubscriber(htmlentities(htmlspecialchars($_POST['name'])), htmlentities(htmlspecialchars($_POST['email'])), htmlentities(htmlspecialchars($_POST['child_name'])), htmlentities(htmlspecialchars($_POST['child_class'])), htmlentities(htmlspecialchars($_POST['employee_function'])), htmlentities(htmlspecialchars($_POST['employee_class'])), htmlentities(htmlspecialchars($_POST['type'])));
        $mailsystem->sendConformationMail($_POST['email']);?>
        <!-- Todo: Bevestigingsmail, Oudere nieuwbsrieven bekijken? Klik hier. -->
        <p>U bent succesvol geabonneerd. U ontvangt vanaf nu onze nieuwsbrief op <strong><?php echo $_POST['email']; ?></strong>.</p>
                    
    </div><!-- subscribe-success -->