
    <h1 id="page-title" class="shadow-text">Inloggen</h1>

    <div id="login" class="shadow">
    
		<?php
    
        $username = htmlentities(htmlspecialchars($_POST['username']));
        $password = htmlentities(htmlspecialchars(md5($_POST['password'])));
		
		?>
    
        <?php // Als deze gebruiker niet succesvol is ingelogd
        if( !$mailsystem->login($username, $password) ): ?>
        
        	<?php // Als één van de twee velden is ingevuld
			if($_POST['username'] || $_POST['password']): ?>
            
            	<p>Inloggen mislukt, probeer het opnieuw.</p>
            
            <?php endif; ?>
        
            <form id="form_login" action="index.php?view=login" method="post" />
                                
                <input placeholder="Gebruikersnaam" type="text" class="required shadow-light" id="username" name="username" value="<?php echo $_POST['username']; ?>" /><br />
                <input placeholder="Wachtwoord" type="password" class="required shadow-light" id="password" name="password" value="<?php echo $_POST['password']; ?>" /><br />
                <input id ="submit" class="shadow" type="submit" name="login" value="Login" />
            </form>
    
        <?php // Als deze gebruiker succesvol is ingelogd 
		else: ?>
        
            <p>U bent succesvol ingelogd</p>
            <meta http-equiv="refresh" content="0;URL=index.php?view=dashboard" /><!-- Tijdenlijk voor de Sprint Review: Todo -->

        <?php endif; ?>

	</div><!-- login -->