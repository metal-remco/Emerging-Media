
	<div id="login">
    
		<?php
        
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			// Check of de gebruikersnaam en het wachtwoord overeenkomen met een database entry, zo ja: vul function met de functie van deze gebruiker
			$result = $mailsystem->checkLogin($username, $password);
			$function = $result[0]->function;
			
			// Als er nog niet op de login knop is geklikt, of als er wel op de login knop is gedrukt maar de fucntie variable is leeg
            if (!$_POST['login'] || ( $_POST['login'] && !$function) ) {
				
				// Als er nog niet op de login knop is geklikt
				if(!$_POST['login']) {
				
					echo "Vul hieronder je gebruikersnaam en wachtwoord in.";
					
				// Als er al wel op de login knop is geklikt
				} else {
				
					echo "Gebruikersnaam en wachtwoord komen niet in de database voor.";
					
				}
                        
			?>
    
            <form action="index.php?view=login" method="post" />
            
                <label for="username">Gebruikersnaam</label>
                <input type="text" id="username" name="username" value="<?php echo $_POST['username']; ?>" /><br />
                
                <label for="password">Wachtwoord</label>
                <input type="password" id="password" name="password" value="<?php echo $_POST['password']; ?>" /><br />
                
                <input type="submit" name="login" value="Login" />
    
            </form>
        
        
        <?php 
		
			// Als er wel op login is gedrukt en de functie var is gevuld
			} else {
                
				if ($function == "editor") {
			
					echo "Je bent de redacteur.";
			
				} else {
				
					echo "Je bent wel ingelogd, maar ik weet niet als wat!";
				
				}

            }
		
		?>
            
    </div>
    
