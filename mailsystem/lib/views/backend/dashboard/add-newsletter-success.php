<?php

	$mailsystem->addNewsletter($_POST['title'], $_POST['template'], $_POST['templatestring']);
	
?><meta http-equiv="refresh" content="0;URL=index.php?view=dashboard" />