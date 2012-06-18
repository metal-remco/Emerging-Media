
	<div id="preview-default" class="preview">
	
		<div id="preview-logo"><img src="lib/templates/default/images/logo.png" alt="logo" width="100%" /></div>
		<p id="preview-title"></p>
		
		<div id="preview-stage">
		
			<?php $i=1; foreach ($articles as $article): ?>
						
			    <div class="article hidden" id="preview-article-<?php echo $article->id; ?>">
			
			        <h2 class="article-title"><?php echo $article->title; ?> <span class="selectme">Artikel Selecteren</span></h2>
														        
                    <div class="article-content">

					    <?php echo $article->article; ?>

                    </div>
                    
                    <img class="article-picture" src="<?php echo $article->picture; ?>" />

			    </div><!-- article -->
			
			<?php $i++; endforeach; ?>
			
			<div class="clear"></div>
			
		</div><!-- preview-stage -->
		
		<div class="clear"></div>
	
	</div><!-- preview-default -->
	