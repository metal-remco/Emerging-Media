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
		case 'subscribers':			$view = 'lib/views/subscribers.php';			break;
	
		case 'login': 				$view = 'lib/views/login.php';					break;
		case 'logout';				$view = 'lib/views/logout.php';					break;
	
		default: 					$view = 'lib/views/subscribers.php'; 			// Dit moet uiteindelijk index.php worden		
			
	}
	
	$types = Array('parent' => 'ouder', 'employee' => 'medewerker', 'interested' => 'ge&iuml;nteresseerde');

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

<body>

<div id="container">

    <ul id="navigation">
        <li><a href="index.php?view=index">Home</a></li>
        <li><a href="index.php?view=login">Login</a></li>
        <li><a href="index.php?view=subscribers">Subscribers</a></li>  
        <li><a href="index.php?view=logout">Uitloggen</a></li>
    </ul>
    
    <?php include($view); ?>
    
</div><!-- container -->

	<!-- Javascipts -->
	<script type="text/javascript" src="lib/javascripts/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="lib/javascripts/jquery.validate-1.9.0.min.js"></script>
	<script type="text/javascript" src="lib/javascripts/script.js"></script>



</body>
</html>