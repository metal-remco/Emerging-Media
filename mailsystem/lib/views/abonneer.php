
	<?php 
	
		// Als er op submit is gedrukt
		if( $_POST['subscribe'] ): 
	
			$stage3 = true; // Succes
		
		// Als het type bekend is
		elseif( $current_type ):
		
			$stage2 = true; // Inschrijfformulier
		
		// Als er niet op submit is gedrukt en het type is onbekend
		else:
		
			$stage1 = true; // Keuze uit Types
		
		endif; 
		
	?>

	<?php if($stage1): ?>

        <h1 id="page-title" class="shadow-text">Abonneren</h1>
                    
        <div id="subscribe-intro">
                
            <?php $i=1; foreach($mailsystem->getSubscriberTypes() as $key => $value): ?>
            
                <a href="<?php echo $mailsystem->getRoot(); ?>/abonneer/<?php echo $key; ?>" id="type_<?php echo $key; ?>" class="type_button shadow"> Als <br /><?php echo $value; ?></a>   
                
             <?php $i++; endforeach; ?>
                        
        </div><!-- subscribe-intro -->
    
	<?php elseif($stage2): ?>
            
        <h1 id="page-title" class="shadow-text">Abonneren als <?php echo $mailsystem->getSubscriberType(true); ?></h1>
        
        <div id="subscribe" class="shadow">
                
            <!-- Todo: Melding bij foute invoer & Invoer converteren htmlentities + Afvangen als het email adress al staat ingechreven -->
            <form action="<?php echo $mailsystem->getRoot(); ?>/abonneer" method="post" id="form_subscribe">
            
                <?php if($mailsystem->getSubscriberType() == 'ouder' || $mailsystem->getSubscriberType() == 'medewerker' ): ?>
    
                    <input type="text" name="name" id="name" placeholder="Naam" value="<?php echo $_POST['name']; ?>" tabindex="1" size="99" class="required" /><br />
                    
                 <?php endif; ?>
                 
                    <!-- Todo: Check of dit wel echt een email adress is -->
                    <input type="text" name="email" id="email" placeholder="Email" value="<?php echo $_POST['email']; ?>" tabindex="2" size="99" class="required email" /><br />
                 
                <?php if($mailsystem->getSubscriberType() == 'ouder'): ?>
                
                    <!-- Todo: Meerdere kinderen toevoegen -->
                    <input type="text" name="child_name" id="child_name" placeholder="Naam van uw kind"  value="<?php echo $_POST['child_name']; ?>" tabindex="3" size="99" class="required" /><br />
                    <input type="text" name="child_class" id="child_class" placeholder="Klas van uw kind" value="<?php echo $_POST['child_class']; ?>" tabindex="4" size="3" /><br />
                 
                <?php endif; ?>
                
                <?php if($mailsystem->getSubscriberType() == 'medewerker'): ?>
                
                    <!-- Todo: Dropdown -->
                    <input type="text" name="employee_function" id="employee_function" placeholder="Functie binnen school" value="<?php echo $_POST['employee_function']; ?>" tabindex="3" size="99" class="required" /><br />
                    <!-- Todo: Alleen weergeven als dit een leerkracht is -->
                    <input type="text" name="employee_class" id="employee_class" placeholder="Welke klas geeft u les?" value="<?php echo $_POST['employee_class']; ?>" tabindex="4" size="3" class="required" /><br />

                <?php endif; ?>
                
                <input type="hidden" name="type" id="type" value="<?php echo $mailsystem->getSubscriberType(); ?>" />
                <input type="submit" id="submit" name="subscribe" value="inschrijven" class="shadow" />
    
            </form> 
    
        </div><!-- subscribe -->    
        
	<?php elseif($stage3): ?>
        
        <h1 id="page-title" class="shadow-text">Abonneren succesvol</h1>
    
        <div id="subscribe-success" class="shadow">
        
            <!-- Todo: Afvangen als er geen Post data is -->
            <?php // Voeg de gebruiker toe
            $mailsystem->addSubscriber($_POST['name'], $_POST['email'], $_POST['child_name'], $_POST['child_class'], $_POST['employee_function'], $_POST['employee_class'], $_POST['type']); ?>
                
            <!-- Todo: Bevestigingsmail, Oudere nieuwbsrieven bekijken? Klik hier. -->
            <p>U bent succesvol geabonneerd. U ontvangt vanaf nu onze nieuwsbrief op <strong><?php echo $_POST['email']; ?></strong>.</p>
                        
        </div><!-- subscribe-success -->
        
	<?php endif; ?>
