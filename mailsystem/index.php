<?php

	// Classes
	include('lib/classes/mailsystem.php');
	$mailsystem = new mailsystem();
	
	// Views
	$getview = $_GET['view'];
	switch ($getview) {
		
		// Frontend
		case 'login':											$view='lib/views/frontend/login.php';					 				break;
		case 'logout';											$view='lib/views/frontend/logout.php';					 				break;
		case 'subscribe-intro':									$view='lib/views/frontend/subscribe-intro.php';			 				break;
		case 'subscribe':										$view='lib/views/frontend/subscribe.php';				 				break;
		case 'subscribe-success':								$view='lib/views/frontend/subscribe-success.php';		 				break;
		case 'unsubscribe':										$view='lib/views/frontend/unsubscribe.php';				 				break;

		case 'inputArticle';        							$view='lib/views/frontend/inputArticle.php';           	 				break;
		case 'inputArticle-succes'; 							$view='lib/views/frontend/inputArticle-succes.php';    	 				break;
		
		// Backend - Maillijsten
		case 'mailinglists'; 									$view='lib/views/backend/mailinglists/overview.php'; 	 				$backend = true; break;
		case 'mailinglists-view'; 								$view='lib/views/backend/mailinglists/view.php'; 		 				$backend = true; break;
		case 'mailinglists-add'; 								$view='lib/views/backend/mailinglists/add.php'; 		 				$backend = true; break;
		case 'mailinglists-add-success'; 						$view='lib/views/backend/mailinglists/add-success.php'; 		 		$backend = true; break;
		case 'mailinglists-edit'; 								$view='lib/views/backend/mailinglists/edit.php'; 		 				$backend = true; break;
		case 'mailinglists-edit-success'; 						$view='lib/views/backend/mailinglists/edit-success.php'; 		 		$backend = true; break;
		case 'mailinglists-edit-email'; 						$view='lib/views/backend/mailinglists/edit-email.php'; 					$backend = true; break;
		case 'mailinglists-edit-email-success'; 				$view='lib/views/backend/mailinglists/edit-email-success.php'; 			$backend = true; break;
		case 'mailinglists-delete'; 							$view='lib/views/backend/mailinglists/delete.php'; 						$backend = true; break;
                
   		// Backend - Artikelen
		case 'articles'; 										$view='lib/views/backend/articles/overview.php'; 		 				$backend = true; break;
		case 'articles-view'; 									$view='lib/views/backend/articles/view.php'; 			 				$backend = true; break;
		case 'articles-add'; 									$view='lib/views/backend/articles/add.php'; 			 				$backend = true; break;
		case 'articles-edit'; 									$view='lib/views/backend/articles/edit.php'; 			 				$backend = true; break;
		case 'articles-delete'; 								$view='lib/views/backend/articles/delete.php'; 			 				$backend = true; break;
                                    case 'edit-succes';                                                                                                                                      $view='lib/views/backend/articles/edit-succes.php';                                                                                                     $backen = true; break;
				
		// Backend - Templates
		case 'templates'; 										$view='lib/views/backend/templates/overview.php'; 		 				$backend = true; break;
		case 'templates-view'; 									$view='lib/views/backend/templates/view.php'; 			 				$backend = true; break;
		case 'templates-add'; 									$view='lib/views/backend/templates/add.php'; 			 				$backend = true; break;
		case 'templates-edit'; 									$view='lib/views/backend/templates/edit.php'; 			 				$backend = true; break;
		case 'templates-delete'; 								$view='lib/views/backend/templates/delete.php'; 		 				$backend = true; break;

		// Backend - Dashboard
		case 'step1': 											$view='lib/views/backend/dashboard/step1.php';			 				$backend = true; break; // Nieuwsbrief toevoegen
		case 'step2': 											$view='lib/views/backend/dashboard/step2.php';			 				$backend = true; break; // Template kiezen
		case 'step3': 											$view='lib/views/backend/dashboard/step3.php';			 				$backend = true; break; // Artikelen selecteren
		case 'step4': 											$view='lib/views/backend/dashboard/step4.php';			 				$backend = true; break; // Artikelen plaatsen (Drag & Drop)
		case 'step5': 											$view='lib/views/backend/dashboard/step5.php';			 				$backend = true; break; // Maillijst selecteren
		case 'step6': 											$view='lib/views/backend/dashboard/step6.php';			 				$backend = true; break; // Preview

		case 'dashboard': 										$view='lib/views/backend/dashboard/dashboard.php';		 				$backend = true; break;
		default: 												$view='lib/views/backend/dashboard/dashboard.php'; 		 				$backend = true; 
			
	}
	
	if($backend):
	
		$loggedin = $mailsystem->areThereAnyUsersLoggedIn();
	
		if ($loggedin == false):
		
			header('Location: index.php?view=login');
		
		endif;
	
	endif;
		
?><!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Emmail</title>
    
	<!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" media="screen" href="lib/stylesheets/style.css" />

    <!-- Todo: Favicons 
    <link href="lib/images/favicon.ico" type="image/x-icon" rel="shortcut icon"  />
    <link href="lib/images/favicon-ios.png" rel="apple-touch-icon-precomposed" /> -->


</head>

<body<?php if(!$backend):?> class="frontend"<?php endif; ?>>

<?php if(!$backend): ?>

    <div id="container">
        
        <a href="http://www.emmaus-rotterdam.nl/" target="_blank" title="Bezoek de website van Emmaus Rotterdam"><img id="logo" src="lib/images/logo-darker.png" width="164" height="45" alt="Emmail" /></a>
    
        <?php include($view); ?>
                    
    </div><!-- container -->

<?php else: ?>

    <div id="container">
        
        <div id="header">
                
            <a href="index.php?view=dashboard" title="Ga naar het Dashboard"><img id="logo" src="lib/images/logo.png" width="164" height="45" alt="Emmail" /></a>
        
            <ul id="navigation"><!-- float: right -->
            
            	<?php 

					$getview_explode = explode('-', $getview);
					$getv = $getview_explode[0];
		         
		         ?>
            
                <li<?php if($getview == 'dashboard'): ?> class="current"<?php endif; ?>><a href="index.php?view=dashboard">Dashboard</a></li>  

                <li<?php if($getv == 'mailinglists'): ?> class="current"<?php endif; ?>><a href="index.php?view=mailinglists">Maillijsten</a></li>  
                <li<?php if($getv == 'templates'): ?> class="current"<?php endif; ?>><a href="index.php?view=templates">Templates</a></li>  
                <li<?php if($getv == 'articles'): ?> class="current"<?php endif; ?>><a href="index.php?view=articles">Artikelen</a></li>  

                <li<?php if($getview == 'step1'): ?> class="current"<?php endif; ?>><a href="index.php?view=step1">Nieuwsbrief maken</a></li>  

            </ul><!-- navigation -->
            
            <div id="userinfo">
            
                <p>Welkom <?php echo $mailsystem->getCurrentUsersName(); ?> | <a href="index.php?view=logout">Uitloggen</a></p>
            
            </div><!-- userinfo -->
            
        </div><!-- header -->
    
        <?php include($view); ?>
        
        <div id="footer">
        
            <p>&copy; 2012 Emmaus Basisschool | Ontwikkeld door <a href="http://project.cmi.hr.nl/2011_2012/emedia_med2d_t5/" target="_blank" title="Bekijk het blog van de zware jongens">de zware jongens</a></p>
        
        </div><!-- footer -->
            
    </div><!-- container -->
    
<?php endif; ?>

    <div id="temporary-footer">
    
        <!-- Verwijderen bij livegaan, let ook op de 64px padding op de body, zie css -->
    
        <p>Informatie: Inloggen kan met gebruikersnaam <strong>admin</strong> en wachtwoord <strong>1234</strong><i class="livegaan">Deze balk zal bij het livegaan worden verwijderd</i></p>
    
        <ul id="temporary-navigation">
        
            <li>Frontend: </li>
            <li><a href="index.php?view=login">Inloggen</a></li>  
            <li><a href="index.php?view=logout">Uitloggen</a></li> 
             
            <li><a href="index.php?view=subscribe-intro">Abonneren</a></li>  
            <li><!-- <a href="index.php?view=unsubscribe"> -->Abonnement opzeggen<!-- </a> --></li>  

            <li><a href="index.php?view=inputArticle">Artikel insturen</a></li>  

            <li>| Backend: </li>  
            <li><a href="index.php?view=dashboard">Dashboard</a></li>  
            
        </ul><!-- temporary-navigation -->
        
    </div><!-- temporary-footer -->
    
	<!-- Javascipts -->
	<script type="text/javascript" src="lib/javascripts/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="lib/javascripts/jquery.validate-1.9.0.min.js"></script>	
	<script type="text/javascript" src="lib/plugins/table-sorter/packed.js"></script>
	
	<script type="text/javascript" src="lib/javascripts/script.js"></script>
	<script type="text/javascript" src="lib/javascripts/mailinglist-subscribers.js"></script>
          <!-- Javascript files editor en filesubmit button voor articles-add, inputArticle, articles-edit -->
        <?php 
            if($getview == "articles-add" || $getview = "inputArticle" || $getview == "articles-edit"):
                 ?><script type="text/javascript" src="lib/ckeditor/ckeditor.js"></script><?php
                if($getview == "articles-add"):
                    $fileSubmitPicture = "lib/images/buttons/afbeelding_toe_backend.png";
                elseif ($getview = "inputArticle"):
                        $fileSubmitPicture = "lib/images/buttons/voeg_afbeelding_toe.png";
                endif;
         ?>
                <script type="text/javascript" src="lib/javascripts/fileInputStyle.js"></script>
                <script type="text/javascript">
                    $("#picture").filestyle({ 
                        image: "<?php echo $fileSubmitPicture;?>",
                        imageheight : 28,
                        imagewidth : 140,
                        width : 250
                    });
                </script>

        <?php
            endif;
        ?>
</body>
</html>
