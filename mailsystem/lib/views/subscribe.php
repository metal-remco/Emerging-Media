	
	<?php // Als er een type is meegestuurd
    if($_GET['type']):
    
        $type = $_GET['type']; // interested, parent, employee
    
    else:
    
        $type = 'interested';
    
    endif; ?>  

	<div id="subscribe">

    	<?php // Als er nog niet op submit(subscribe) is gedrukt
		if(!$_POST['subscribe-success']): ?>
        
            <h1 id="page-title" class="shadow-text">Inschrijven als <?php echo $types[$type]; ?></h1>

            <!-- Todo: Melding bij foute invoer & Invoer converteren htmlentities -->
            <form action="index.php?view=subscribe-success" method="post" id="form_subscribe" class="shadow">
            
            	<?php if($type == 'parent' || $type == 'employee' ): ?>
    
                    <input type="text" name="name" id="name" placeholder="Naam" value="<?php echo $_POST['name']; ?>" tabindex="1" size="99" class="required" /><br />
                    
                 <?php endif; ?>
                 
                    <!-- Todo: Check of dit wel echt een email adress is -->
                    <input type="text" name="email" id="email" placeholder="Email" value="<?php echo $_POST['email']; ?>" tabindex="2" size="99" class="required email" /><br />
                 
				<?php if($type == 'parent'): ?>
                
                    <!-- Todo: Meerdere kinderen toevoegen -->
                    <input type="text" name="child_name" id="child_name" placeholder="Naam van uw kind"  value="<?php echo $_POST['child_name']; ?>" tabindex="3" size="99" class="required" /><br />
                    <input type="text" name="child_class" id="child_class" placeholder="Klas van uw kind" value="<?php echo $_POST['child_class']; ?>" tabindex="4" size="3" /><br />
                 
                <?php endif; ?>
                
                <?php if($type == 'employee'): ?>
                
                    <!-- Todo: Dropdown -->
                    <input type="text" name="employee_function" id="employee_function" placeholder="Functie binnen school" value="<?php echo $_POST['employee_function']; ?>" tabindex="3" size="99" class="required" /><br />
                    <!-- Todo: Alleen weergeven als dit een leerkracht is -->
                    <input type="text" name="employee_class" id="employee_class" placeholder="Welke klas geeft u les?" value="<?php echo $_POST['employee_class']; ?>" tabindex="4" size="3" class="required" /><br />

                <?php endif; ?>
                
                <input type="hidden" name="type" id="type" value="<?php echo $type; ?>" />
                <input type="submit" id="submit" name="subscribe" value="inschrijven" class="shadow" />
    
            </form> 
        
        <?php endif; ?>  

    </div>