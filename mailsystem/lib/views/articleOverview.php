<?php
include '../classes/mailsystem.php';

$mailsystem = new mailsystem();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Untitled Document</title>
</head>

<body>
	<div id="container">
    
        <div id="top">
        
        	<div id="navigatie">
            	<ul>
                	<li>Dashboard</li>
                    <li class="active">Artikelbeheer</li>
                    <li>Nieuwsbrief maken</li>
                    <li>Templatebeheer</li>
                    <li>Maillijstbeheer</li>
                </ul>
            </div><!--navigatie-->
            
                <img src="images/logo.png" alt="EMMAIL" class="logo"/>
                
                
        </div><!--top-->
        <div id="info">
                	Welkom Redacteur! | <a href="#">Uitloggen</a>
                </div>
        
        <div id="content">
        
            <div id="breadcrumbs">
                    Dashboard &raquo; Artikelbeheer
            </div><!--Breadcrumbs-->
            
            <div id="sidebar">
                <img src="images/back_btn.jpg" alt="naar overzicht" />
                <img src="images/schrijven_btn.jpg" alt="artikel schrijven" class="btn_margin" />
                <form>
                <input type="text" name="search" id="search_artikel" placeholder="zoeken" value="" />
                </form>
            </div><!--links-->
            
            <div id="states" class="shadow">
            		<h1>Artikel Beheer - Overzicht </h1>
                    <?php 
                    $articles = $mailsystem->getArticles();
                        foreach($articles as $article)
                        {
                    ?>
                    <div id="artikel">
                    	<div id="head">
                        	<h1><?php //echo $article->title;?></h1>
                        </div><!--head-->
                        	
                        <p><?php echo $article->article;?>
                        </p>
                        
                        <div id="footnote">
                        	<p><span class="orange">Auteur:</span> Henk van Dongen	<span class="orange">Geschreven:</span> 15-05-2012</p>
                            
                        	<div id="icons">
                            <img src="images/view.png" alt="bekijken" class="icons" />
                            <img src="images/trash.png" alt="verwijderen" class="icons" />
                            <img src="images/edit.png" alt="bewerken" class="icons" />
                            <img src="images/comment.png" alt="reageren" class="icons" />
                            </div><!--icons-->
                        </div><!--footnote-->
                    </div><!--artikel-->
                    <?php
                        }
                        ?>
                    
            </div><!--rechts-->
            
            <br clear="all" />
            
         </div><!--content-->
            
        
    </div><!--container-->


</body>
</html>