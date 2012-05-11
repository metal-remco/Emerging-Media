
    <h1 id="page-title" class="shadow-text">Inloggen</h1>

    <div id="login" class="shadow">
    
		<?php // Als deze gebruiker niet succesvol is ingelogd
        if( !$mailsystem->login($_POST['username'], $_POST['password']) ): ?>
        
            <form id="form_login" action="<?php echo $mailsystem->getRoot(); ?>/inloggen" method="post" />
        
                <input placeholder="Gebruikersnaam" type="text" class="required " id="username" name="username" value="<?php echo $_POST['username']; ?>" /><br />
                <input placeholder="Wachtwoord" type="password" class="required" id="password" name="password" value="<?php echo $_POST['password']; ?>" /><br />
                <input id ="submit" class="shadow" type="submit" name="login" value="Login" />
            </form>
    
        <?php // Als deze gebruiker succesvol is ingelogd 
		else: ?>
        
            <p>U bent succesvol ingelogd</p>
            <meta http-equiv="refresh" content="0;URL=<?php echo $mailsystem->getRoot(); ?>/dashboard" /><!-- Tijdenlijk voor de Sprint Review: Todo -->

        <?php endif; ?>

	</div><!-- login -->
