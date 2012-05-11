<?php

	include('lib/classes/mailsystem.php');
	$mailsystem = new mailsystem();

?><html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Drag, Drop &amp; Mail</title>
    
	<!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $mailsystem->getRoot(); ?>/style.css" />

    <!-- Todo: Favicons 
    <link href="<?php echo $mailsystem->getRoot(); ?>/lib/images/favicon.ico" type="image/x-icon" rel="shortcut icon"  />
    <link href="<?php echo $mailsystem->getRoot(); ?>/lib/images/favicon-ios.png" rel="apple-touch-icon-precomposed" /> -->

</head>

<body>

<div id="container">

	<?php if( $mailsystem->checkloggedin() ): ?>
        
        <ul id="navigation">
        
            <li><a href="<?php echo $mailsystem->getRoot(); ?>/">Dashboard</a></li>  
            <li><a href="<?php echo $mailsystem->getRoot(); ?>/abonneer">Abonneer</a></li>  
            <li><a href="<?php echo $mailsystem->getRoot(); ?>/uitloggen">Uitloggen</a></li>
            
        </ul>

	<?php endif; ?>

    <?php include( 'lib/views/'.$mailsystem->getView().'.php' ); ?>
    
</div><!-- container -->

	<!-- Javascipts -->
	<script type="text/javascript" src="<?php echo $mailsystem->getRoot(); ?>/lib/javascripts/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php echo $mailsystem->getRoot(); ?>/lib/javascripts/jquery.validate-1.9.0.min.js"></script>
	<script type="text/javascript" src="<?php echo $mailsystem->getRoot(); ?>/lib/javascripts/script.js"></script>

</body>
</html>