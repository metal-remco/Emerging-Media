<?php
$title = $_POST['articleTitle'];

$article = $_POST['editor1'];

///print_r($picture);
$id = $_POST['id'];

if ($_FILES['picture']['error'] != UPLOAD_ERR_NO_FILE) {
    $uploaddir = "uploads/images/";

    $directory = $uploaddir . basename($_FILES['picture']['name']);

    touch($directory);
    move_uploaded_file($_FILES['picture']['tmp_name'], $directory);
} else {
    $directory = $_POST['oldPicture'];
}
//}
//else{$picture = $_POST['oldPicture']; echo "oud";}

$mailsystem->editArticle($title, $article, $directory, $id);
?>

<meta http-equiv="refresh" content="0;URL=index.php?view=articles" /> 