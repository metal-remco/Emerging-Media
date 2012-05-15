<h1 id="page-title" class="shadow-text">Email wijzigen</h1>

<div id="login" class="shadow">            
    <form id="form_login" action="index.php?view=changeEmail-succes&id=<?php echo $_GET['id']?>" method="post" />
    <input placeholder="Nieuwe Email" type="newEmail" class="required email" id="newEmail" name="newEmail" value="" /><br />
    <input id ="submit" class="shadow" type="submit" name="changeEmail" value="Wijzigen" />
</form>