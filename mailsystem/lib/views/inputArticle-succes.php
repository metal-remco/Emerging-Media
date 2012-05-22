<?php
    $title = $_POST['articleTitle'];
 //   echo $title;
    $article = $_POST['editor1'];
  //  echo $article;
  /*  $picture = $_FILES['picture'] ;
    echo $picture;
    $uploaddir= "/uploads/images/";
    print_r($_FILES);
    $directory = $uploaddir.basename($_FILES['picture']['name']); //'/uploads/images/' . $_FILES['picture']['name'];
    echo $directory;
    
    touch($directory);
    move_uploaded_file($_FILES['picture']['tmp_name'], $directory);*/
    
    $mailsystem->sendArticle($title, $article);
?>
<meta http-equiv="refresh" content="0;URL=index.php?view=articleOverview" />