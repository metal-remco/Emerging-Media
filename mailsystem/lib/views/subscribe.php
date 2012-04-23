
	<div id="subscribe">
            
    	<?php // Als er nog niet op submit(type) of submit(subscribe) is gedrukt
		if(!$_POST['type'] && !$_POST['subscribe']): ?>
        
            <form action="index.php?view=subscribe" method="post">
            
                <!-- <label for="type">Ik wil me inschrijven als..</label>
                <select name="chosen_type" id="chosen_type">
                    <option value="interested">Ge&iuml;nteresseerde</option>
                    <option value="parent">Ouder</option>
                    <option value="employee">Medewerker</option>
                </select><br />-->

				<?php $types = Array('parent' => 'Ouder', 'employee' => 'Medewerker', 'interested' => 'Ge&iuml;nteresseerde'); ?>
				
				<?php $i=1; foreach($types as $key => $value): ?>
				
                    <label for="type_<?php echo $key; ?>" id="type_<?php echo $key; ?>" class="type_button">
                        <input type="radio" name="chosen_type" tabindex="<?php echo $i; ?>" value="<?php echo $key; ?>" />
                        Als <?php echo $value; ?>
                    </label>   
                    
                 <?php $i++; endforeach; ?>
        
                <input type="submit" name="type" value="Ga door naar het inschrijfformulier" />
    
            </form> 
            
        <?php // Als er op submit(type) is gedrukt
		else: 
		
			$type = $_POST['chosen_type']; // interested, parent, employee
		
		endif; ?>  



    	<?php // Als er nog niet op submit(subscribe) is gedrukt en er is een type
		if(!$_POST['subscribe'] && $type): ?>

            <h1 title="Inschrijven">Inschrijven</h1>
            
            <!-- Todo: Melding bij foute invoer & Invoer converteren htmlentities -->
            <form action="index.php?view=subscribe" method="post" id="subscribe" class="shadow">
            
            	<?php //if($type == 'parent' || $type == 'employee' ): ?>
    
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" value="" tabindex="1" size="99" class="required" /><br />
                    
                 <?php //endif; ?>
                 
                    <label for="email">Email:</label><!-- Todo: Check of dit wel echt een email adress is -->
                    <input type="text" name="email" id="email" value="" tabindex="2" size="99" class="required email" /><br />
                 
				<?php //if($type == 'parent'): ?>
                
                    <label for="child_name">Naam van uw kind:</label><!-- Todo: Meerdere kinderen toevoegen -->
                    <input type="text" name="child_name" id="child_name" value="" tabindex="3" size="99" class="required" /><br />
                     
                    <label for="child_class">Klas van uw kind:</label>
                    <input type="text" name="child_class" id="child_class" value="" tabindex="4" size="3" /><br />
                 
                <?php //endif; ?>
                
                <?php //if($type == 'employee'): ?>
                
                    <label for="employee_function">Uw functie:</label><!-- Todo: Dropdown -->
                    <input type="text" name="employee_function" id="employee_function" value="" tabindex="3" size="99" class="required" /><br />
                     
                    <label for="employee_class">Uw klas:</label><!-- Todo: Alleen weergeven als dit een leerkracht is -->
                    <input type="text" name="employee_class" id="employee_class" value="" tabindex="4" size="3" class="required" /><br />

                <?php //endif; ?>
                
                <input type="hidden" name="type" id="type" value="<?php echo $type; ?>" />
                <input type="submit" name="subscribe" value="Inschrijven" />
    
            </form> 
        
        <?php // Als er op submit(subscribe) is gedrukt
		elseif ($_POST['subscribe']): ?>  
        
			<?php // Voeg de gebruiker toe
            $mailsystem->addSubscriber($_POST['name'], $_POST['email'], $_POST['child_name'], $_POST['child_class'], $_POST['employee_function'], $_POST['employee_class'], $_POST['type']); ?>
            
            <p>'<?php echo $_POST['email']; ?>' is succesvol toegevoegd.</p>
        
        <?php endif; ?>  

    </div>