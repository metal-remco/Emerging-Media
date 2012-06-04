
	<?php if($_GET['type']): 	$type = $_GET['type']; // interested, parent
   					   else: 	$type = 'interested'; endif; ?>  
	
    <h1 id="page-title" class="shadow-text">Abonneren als <?php if($type == 'parent'): ?>ouder<?php elseif($type == 'interested'): ?>ge&iuml;nteresseerde<?php endif; ?></h1>
    
	<div id="subscribe" class="shadow">
    
    	<?php // Als er nog niet op submit(subscribe) is gedrukt
		if(!$_POST['subscribe-success']): ?>
        
            <!-- Todo: Melding bij foute invoer & Invoer converteren htmlentities + Afvangen als het email adress al staat ingechreven -->
            <form action="index.php?view=subscribe-success" method="post" id="form_subscribe">
            
                <input type="text" name="name" id="name" placeholder="Voornaam, Achternaam" value="<?php echo $_POST['name']; ?>" tabindex="1" size="99" class="required shadow-light" /><br />                 
                 
				<?php if($type == 'parent'): ?>
                
                	<div id="children">
                
                        <div id="child_1" class="child">
                        
                            <input type="text" name="child_name_1" id="child_name_1" placeholder="Naam kind"  value="<?php echo $_POST['child_name']; ?>" tabindex="2" size="99" class="required shadow-light input-child" /><br />
                            <input type="text" name="child_class_1" id="child_class_1" placeholder="Klas kind" value="<?php echo $_POST['child_class']; ?>" tabindex="3" size="3" class="shadow-light input-class" />
                            <a id="addchild" title="Kind toevoegen">Kind toevoegen</a><br />

                        </div>
                        
                    </div><!-- children -->
                                     
				<?php elseif($type = 'interested'): ?>
                
                    <textarea name="reason" id="reason" placeholder="Reden van abonneren" tabindex="2" cols="40" rows="8" class="required shadow-light"></textarea>
                
                <?php endif; ?>
                
                <input type="text" name="email" id="email" placeholder="E-mail" value="<?php echo $_POST['email']; ?>" tabindex="4" size="99" class="required email shadow-light" /><br />

                <input type="hidden" name="type" id="type" value="<?php echo $type; ?>" />
                <input type="submit" id="submit" name="subscribe" value="inschrijven" class="shadow" />
    
            </form> 
        
        <?php endif; ?>  

    </div><!-- subscribe -->