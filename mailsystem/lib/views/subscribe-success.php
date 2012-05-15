    
    <h1 id="page-title" class="shadow-text">Abonneren succesvol</h1>

	<div id="subscribe-success" class="shadow">
    
    	<!-- Todo: Afvangen als er geen Post data is -->
        <!--Todo: htmlentities & htmlspecialvar afvangen voordat functie addSubscriber wordt uitgevoerd -->
        
        <?php 
		
			$i = 1;
			
			while($i < 10):
			
				if( isset( $_POST['child_name_'.$i] ) || isset( $_POST['child_class_'.$i] ) ):
				
					if($i == 1):
	
						$children	= $_POST['child_name_'.$i]; 		
						$classes	= $_POST['child_class_'.$i]; 		
					
					else:
					
						$children	= $children.",".$_POST['child_name_'.$i]; 		
						$classes	= $classes.",".$_POST['child_class_'.$i]; 		

					endif;
				
				endif;

				$i++;
			
			endwhile;
				
		?>
        
        
		<?php // Voeg de gebruiker toe
        $mailsystem->addSubscriber(
		
			htmlentities( htmlspecialchars($_POST['name']) ), 
			htmlentities( htmlspecialchars($_POST['email']) ), 
			
			htmlentities( htmlspecialchars($children) ), 
			htmlentities( htmlspecialchars($classes) ), 
			
			htmlentities( htmlspecialchars($_POST['employee_function']) ), 
			htmlentities( htmlspecialchars($_POST['employee_class']) ), 
			htmlentities( htmlspecialchars($_POST['type']) )
			
		);
			
        $mailsystem->sendConformationMail($_POST['email']); ?>
        
        <!-- Todo: Bevestigingsmail, Oudere nieuwbsrieven bekijken? Klik hier. -->
        
        <p>U bent succesvol geabonneerd. U ontvangt vanaf nu onze nieuwsbrief op <strong><?php echo $_POST['email']; ?></strong>.</p>
                    
    </div><!-- subscribe-success -->