<?php
$reaction = $_POST['reaction'];
$subject = $_POST['author'];

$mailsystem->sendArticleReaction($subject, $reaction);
?>

<meta http-equiv="refresh" content="0;URL=index.php?view=articles" />