<?php
    $id = $_GET['id'];
    $mailsystem->newsletterDelete($id);
?>
<meta http-equiv="refresh" content="0;URL=index.php?view=dashboard" />