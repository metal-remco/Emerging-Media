
	<div id="container-backend">
            
        <div id="content">
        
            <div id="breadcrumbs">
            
                <p>Dashboard &raquo; Artikelbeheer</p>
            
            </div><!--Breadcrumbs-->
            
            <div id="sidebar">
            
                <img src="lib/images/backend/back_btn.jpg" alt="naar overzicht" />
                <img src="lib/images/backend/schrijven_btn.jpg" alt="artikel schrijven" class="btn_margin" />

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
                            <img src="lib/images/backend/view.png" alt="bekijken" class="icons" />
                            <img src="lib/images/backend/trash.png" alt="verwijderen" class="icons" />
                            <img src="lib/images/backend/edit.png" alt="bewerken" class="icons" />
                            <img src="lib/images/backend/comment.png" alt="reageren" class="icons" />
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
