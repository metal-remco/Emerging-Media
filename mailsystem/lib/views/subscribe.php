
	<div id="subscribe">
    
    	<?php // Als er nog niet op submit is gedruk
		if(!$_POST['subscribe']): ?>

            <p>Vul dit formulier in om een subscriber toe te voegen.</p>
            
            <!-- Todo: Melding bij foute invoer -->
            <form action="index.php?view=subscribe" method="post">
    
                 <label for="name">Name:</label>
                 <input type="text" name="name" id="name" value="" tabindex="1" /><br />
                 
                 <label for="email">Email:</label><!-- Todo: Check of dit wel echt een email adress is -->
                 <input type="text" name="email" id="email" value="" tabindex="2" /><br />
    
                <input type="submit" name="subscribe" value="Submit" />
    
            </form> 
        
        <?php else: ?>  
        
			<?php // Voeg de gebruiker toe
            $mailsystem->addSubscriber($_POST['name'], $_POST['email']); ?>
            
            <p>'<?php echo $_POST['name']; ?>' is succesvol toegevoegd.</p>
        
        <?php endif; ?>  
        
        <!-- Todo: Dit moet natuurlijk niet echt worden weergegeven als iemand zich uitschrijft. -->
    	<p><a href="index.php?view=subscribers">Terug naar het overzicht</a></p>

    </div>