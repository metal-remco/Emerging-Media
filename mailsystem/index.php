<?php

	// Classes
	include('lib/classes/mailsystem.php');
	$mailsystem = new mailsystem();
	
	// Views
	$getview = $_GET['view'];
	
	switch ($getview) {
		
		case 'subscribe-intro':		$view = 'lib/views/subscribe-intro.php';		break;
		case 'subscribe':			$view = 'lib/views/subscribe.php';				break;
		case 'subscribe-success':	$view = 'lib/views/subscribe-success.php';		break;
		case 'unsubscribe':			$view = 'lib/views/unsubscribe.php';			break;
		case 'dashboard':			$view = 'lib/views/dashboard.php';				$backend = true; break;
	
		case 'login': 				$view = 'lib/views/login.php';					break;
		case 'logout';				$view = 'lib/views/logout.php';					break;
		case 'changeEmail';			$view = 'lib/views/changeEmail.php';			$backend = true; break;
		case 'changeEmail-succes';	$view = 'lib/views/changeEmail-succes.php';		$backend = true; break;
                
		case 'inputArticle';        $view = 'lib/views/inputArticle.php';           $backend = true; break;
		case 'inputArticle-succes'; $view = 'lib/views/inputArticle-succes.php';    $backend = true; break;
		default: 					$view = 'lib/views/dashboard.php'; 				$backend = true; 
			
	}
	
	// Als er niemand is ingelogd, ga dan naar het login scherm
	if( !$mailsystem->areThereAnyUsersLoggedIn() ):
	
		$view = 'lib/views/login.php';
	
	endif; 
	
?><html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Drag, Drop &amp; Mail</title>
    
	<!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" media="screen" href="lib/stylesheets/style.css" />

    <!-- Todo: Favicons 
    <link href="lib/images/favicon.ico" type="image/x-icon" rel="shortcut icon"  />
    <link href="lib/images/favicon-ios.png" rel="apple-touch-icon-precomposed" /> -->


</head>

<body<?php if($backend):?> class="backend"<?php endif; ?>>

<div id="container">

	<?php if( $mailsystem->areThereAnyUsersLoggedIn() ): ?>
        
        <ul id="navigation">
        
            <li><a href="index.php?view=dashboard">Dashboard</a></li>  
            <li><a href="index.php?view=subscribe-intro">Abonneren</a></li>  
            <li><a href="index.php?view=inputArticle">Toevoegen</a></li>  
            <li><a href="index.php?view=logout">Uitloggen</a></li>
            
        </ul>

	<?php endif; ?>

    <?php include($view); ?>
    
</div><!-- container -->

	<!-- Javascipts -->
	<script type="text/javascript" src="lib/javascripts/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="lib/javascripts/jquery.validate-1.9.0.min.js"></script>
	<script type="text/javascript" src="lib/javascripts/script.js"></script>

</body>
</html>