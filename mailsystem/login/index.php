<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Drag, Drop & Mail</title>
        <?php
        include('lib/classes/login.php');
        $login = new login();

        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $editor = $login->checkLogin($username, $password);
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
        }else{echo "Je hebt niets ingevuld.";}
        ?>
    </head>
    <body>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>"/>
        <label for="username">Gebruikersnaam</label>
        <input type="text" id="username" name="username"></input>
        <label for="password">Wachtwoord</label>
        <input type="password" id="password" name="password"></input>
        <input type="submit" name="login" value="Login"></input>
    </form>
</body>
</html>
