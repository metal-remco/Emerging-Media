
<?php
$title = $_POST['articleTitle'];

$article = $_POST['editor1'];

$picture = $_FILES['picture'];

$uploaddir = "uploads/images/";

$directory = $uploaddir . basename($_FILES['picture']['name']);

$author = $_POST['author'];

$date = $_POST['date'];
echo $date;
touch($directory);
move_uploaded_file($_FILES['picture']['tmp_name'], $directory);

$mailsystem->sendArticle($title, $article, $directory, $author, $date);
?>

<meta http-equiv="refresh" content="0;URL=index.php?view=articles" />