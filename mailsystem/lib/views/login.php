<?php

	if (isset($_POST['login'])) {
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$editor = $mailsystem->checkLogin($username, $password);
		
		foreach ($editor as $function) {
			
			$function_User = $function->function;
			
		}
		
	}
	
	if (!empty($function_User)) {
		
		if (isset($function_User)) {
		
			if ($function_User == "editor") {
		
				echo "Je bent de redacteur.";
		
			}
		
		} else {
		
			echo "Gebruikersnaam of wachtwoord is verkeerd.";
		
		}
		
	} else { 
	
		echo "Je hebt niets ingevuld.";
		
	}

?>

	<div id="login">
    
        <form action="index.php?view=login" method="post" />
        
            <label for="username">Gebruikersnaam</label>
            <input type="text" id="username" name="username"></input><br />
            
            <label for="password">Wachtwoord</label>
            <input type="password" id="password" name="password"></input><br />
            
            <input type="submit" name="login" value="Login" />

        </form>
            
    </div>
    