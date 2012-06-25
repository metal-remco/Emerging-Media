<?php

	print_r($_POST);

    $mailinglists_string = '';
	$mailinglists = $mailsystem->getMailinglists();    
    
    foreach($mailinglists as $mailinglist):
    
		if(isset($_POST['mailinglijst-'.$mailinglist->ID])):
			
			$mailinglists_string .= $mailinglist->ID;
			$mailinglists_string .= ',';
			
		endif;
     
    endforeach;

	$mailsystem->addNewsletter($_POST['title'], $_POST['template'], $_POST['articles'], $_POST['templatestring'], $mailinglists_string);
	
?><!--<meta http-equiv="refresh" content="0;URL=index.php?view=dashboard" />-->