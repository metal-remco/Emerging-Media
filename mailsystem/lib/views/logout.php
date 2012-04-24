<?php
$mailsystem->destroySession();
?>
<div id="logout">
    <?php
    if (isset($_SESSION["editor"])) {
        ?>
        <p>U bent succesvol uitgelogd. </p>
        <?php
    } else {
        ?><p>U bent nog niet ingelogd.</p><?php
}
    ?>
</div>