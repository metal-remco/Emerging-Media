
	<?php
	
		$newEmail = $_POST['newEmail'];
		$mailsystem->changeSubscriberEmail($newEmail, $_GET['id'])
	
	?>

	<meta http-equiv="refresh" content="0;URL=index.php?view=dashboard" />