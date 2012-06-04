
    <div id="articles-overview" class="shadow">
    
    	<div id="breadcrumbs">
        
        	<p><a href="index.php?view=dashboard" title="Dashboard">Dashboard</a> &gt; Artikelen</p>
            
        </div><!-- breadcrumbs -->
        
        <div id="stage">
        
        	<div id="sidebar">
            
	    		<a class="button shadow-text" href="index.php?view=articles-add" title="Nieuw artikel">Nieuw artikel</a>

            </div><!-- sidebar -->
            
            <div id="content">
                            
                <h1>Artikelen</h1>
                
                <div id="articles">
                
					<?php $articles = $mailsystem->getArticles();
                    foreach($articles as $article): ?>
    
                        <div class="article">
                        
                            <h2 class="article-title"><?php echo $article->title;?></h2>
                                
                            <p class="article-text"><?php echo $article->article;?></p>
                                                        
                            <p class="article-footer">
                            
                            	<span class="orange">Auteur:</span> Henk van Dongen | <span class="orange">Geschreven:</span> 15-05-2012
                            	                            
                                <a class="icon article-comment" title="Reageren" href="index.php?view=articles-view" /></a>
                                <a class="icon article-edit" title="Bewerken" href="index.php?view=articles-edit" /></a>
                                <a class="icon article-delete" title="Verwijderen" href="index.php?view=articles-delete" /></a>
                                <a class="icon article-view" title="Bekijken" href="index.php?view=articles-view" /></a>

                            </p><!-- article-footer -->
                        
                        </div><!-- article -->
                        
                    <?php endforeach; ?>
                    
                    <div class="clear"></div>
                    
                </div><!-- articles -->                

            </div><!-- content -->
            
            <div class="clear"></div>
        
        </div><!-- stage -->
        
    </div><!-- articles-overview -->
    