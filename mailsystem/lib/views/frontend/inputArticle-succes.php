
	<?php
		$title = $_POST['articleTitle'];
	 //   echo $title;
		$article = $_POST['editor1'];
	  //  echo $article;
	    $picture = $_FILES['picture'] ;

		$uploaddir= "uploads/images/";
		
		$directory = $uploaddir.basename($_FILES['picture']['name']); //'/uploads/images/' . $_FILES['picture']['name'];

		
		touch($directory);
		move_uploaded_file($_FILES['picture']['tmp_name'], $directory);
		
		$mailsystem->sendArticle($title, $article, $directory);
	?>
    
	<meta http-equiv="refresh" content="0;URL=index.php?view=articles" />