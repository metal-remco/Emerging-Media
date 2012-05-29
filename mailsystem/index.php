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
                

		case 'articleOverview';     $view = 'lib/views/articleOverview.php';        $backend = true; break;

		case 'inputArticle';        $view = 'lib/views/inputArticle.php';           break;
		case 'inputArticle-succes'; $view = 'lib/views/inputArticle-succes.php';    break;
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
    <link rel="stylesheet" type="text/css" href="lib/stylesheets/tooltip_popover.css"/>
    <!--<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css"/>

    <!-- Todo: Favicons 
    <link href="lib/images/favicon.ico" type="image/x-icon" rel="shortcut icon"  />
    <link href="lib/images/favicon-ios.png" rel="apple-touch-icon-precomposed" /> -->


</head>

<body<?php if($backend):?> class="backend"<?php endif; ?>>

<div id="container">
    
    <div id="header">
            
        <a href="index.php?view=dashboard"><img id="logo" src="lib/images/logo.png" width="164" height="45" alt="Emmail" /></a>
	
		<?php if( $backend ): ?>
        
            <ul id="navigation">
            
                <li<?php if($getview == 'articleOverview'): ?> class="current"<?php endif; ?>><a href="index.php?view=articleOverview">Artikelen</a></li>  
                <li<?php if($getview == 'logout'): ?> class="current"<?php endif; ?>><a href="index.php?view=logout">Uitloggen</a></li>
                
            </ul><!-- navigation -->
            
        <?php endif; ?>

    </div><!-- header -->

    <?php include($view); ?>
    
	<?php if( $backend ): ?>
    
        <div id="footer">
        
            <p>&copy; 2012 Emmaus Basisschool | Ontwikkeld door <a href="http://project.cmi.hr.nl/2011_2012/emedia_med2d_t5/" target="_blank" title="Bekijk het blog van de zware jongens">de zware jongens</a></p>
        
        </div><!-- footer -->
    
    <?php endif; ?>
        
</div><!-- container -->

<div id="temporary-footer">

	<!-- Verwijderen bij livegaan -->

    <p>Informatie: Inloggen kan met gebruikersnaam <strong>admin</strong> en wachtwoord <strong>1234</strong><i class="livegaan">Deze balk zal bij het livegaan worden verwijderd</i></p>

    <ul id="temporary-navigation">
    
        <li>Navigatie: </li>
        <li><a href="index.php?view=dashboard">Dashboard</a></li>  
        <li><a href="index.php?view=subscribe-intro">Abonneren</a></li>  
        <li><a href="index.php?view=inputArticle">Artikel toevoegen</a></li>  
        
    </ul><!-- temporary-navigation -->

</div><!-- temporary-footer -->

	<!-- Javascipts -->
	<script type="text/javascript" src="lib/javascripts/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="lib/javascripts/jquery.validate-1.9.0.min.js"></script>
	<script type="text/javascript" src="lib/javascripts/script.js"></script>
        
<script type="text/javascript" src="lib/javascripts/tooltip.js"></script>
<script type="text/javascript" src="lib/javascripts/popover.js"></script>
<script type="text/javascript" src="lib/javascripts/popoverscript.js"></script>

</body>
</html>