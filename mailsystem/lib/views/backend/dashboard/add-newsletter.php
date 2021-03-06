
	<?php $articles = $mailsystem->getArticles(0);?>
	<?php $mailinglists = $mailsystem->getMailinglists(); ?>     

    <div id="step1" class="shadow">
    
    	<div id="breadcrumbs">
        
        	<p><a href="index.php?view=dashboard" title="Dashboard">Dashboard</a> &gt; Nieuwsbrief aanmaken</p>
            
        </div><!-- breadcrumbs -->
        
        <div id="stage">
        
        	<div id="sidebar">
        	
        		<div id="nav-steps">
        		
        			<div id="nav-step-1" class="nav-step current"><p>Nieuwsbrief aanmaken</p></div>
        			<div id="nav-step-2" class="nav-step"><p>Template selecteren</p></div>
        			<div id="nav-step-3" class="nav-step"><p>Artikelen selecteren</p></div>
        			<div id="nav-step-4" class="nav-step"><p>Artikelen plaatsen</p></div>
        			<div id="nav-step-5" class="nav-step"><p>Maillijst(en) selecteren</p></div>
        			<div id="nav-step-6" class="nav-step"><p>Preview nieuwsbrief</p></div>
        			<div id="nav-step-7" class="nav-step last"><p>Nieuwsbrief versturen</p></div>

        		</div><!-- nav-steps -->

				<div id="articles" class="hidden draggable">
				
					<?php foreach ($articles as $article): ?>
					
					    <div class="article hidden" id="article-<?php echo $article->id; ?>">
					
					        <h2 class="article-title"><?php echo $article->title; ?></h2>
													
					        <p class="article-footer">
					
					            <span class="orange">Auteur:</span> <?php echo $article->author;?> <span class="orange">Geschreven:</span> <?php echo $article->date;?>
					
					        </p><!-- article-footer -->
					
					    </div><!-- article -->
					
					<?php endforeach; ?>
					
				</div><!-- articles -->
				
				<div class="clear"></div>

            </div><!-- sidebar -->
            
            <div id="content">
                            
                <div id="steps-container">
                
	                <form id="steps" action="index.php?view=add-newsletter-success" method="post">
	                					
						
						
	
	
	                	<!-- step 1 -->
	                
						<div class="step" id="step-1">
						
			                <h1>Nieuwsbrief aanmaken</h1>
	
				            <input type="text" placeholder="Titel:" class="required" id="title" name="title" value="" /><br />
				            <div class="clear"></div>
						
						</div><!-- step-1 -->
						
						
						
	
	
	                	<!-- step 2 -->
	                
						<div class="step" id="step-2">
						
			                <h1>Template selecteren</h1>
			                
			                <p>Op dit moment is alleen het standaard template beschikbaar.</p>
			                
			                <div id="template">
			                
				                <img src="lib/images/default-template.png" alt="standaard-template" width="131" height="131" />
				                <p>Standaard template</p>

			                </div><!-- template -->
				            <div class="clear"></div>
	
						</div><!-- step-2 -->
						
						
						
	
	
	                	<!-- step 3 -->
	                
						<div class="step" id="step-3">
						
							<h1>Artikelen selecteren</h1>
							
							<div id="articles">
							
								<?php foreach ($articles as $article): ?>
								
								    <div class="article" id="article-<?php echo $article->id; ?>">
								
								        <h2 class="article-title"><?php echo $article->title; ?> <span class="selectme">Artikel Selecteren</span></h2>
																
				                        <div class="article-content">
				
										    <?php echo $article->article; ?>
				
				                        </div>
																
								        <p class="article-footer">
								
								            <span class="orange">Auteur:</span> <?php echo $article->author;?> <span class="orange">Geschreven:</span> <?php echo $article->date;?>
								
								        </p><!-- article-footer -->
								
								    </div><!-- article -->
								
								<?php endforeach; ?>
								
							</div><!-- articles -->
							
							<div class="clear"></div>

						</div><!-- step-3 -->
						
						
						
	
	
	                	<!-- step 4 -->
	                
						<div class="step" id="step-4">
						
							<h1>Artikelen plaatsen</h1>
							
							<?php include('lib/templates/default/template.php'); ?>
							
							<div class="clear"></div>

						</div><!-- step-4 -->
						
						
						
						
	                	<!-- step 5 -->
	                
						<div class="step" id="step-5">
	
							<h1>Maillijst(en) selecteren</h1>
							
			                <div id="steps-mailinglists">
			                
								<?php foreach($mailinglists as $mailinglist): ?>
								
				            		<?php $subscribers = $mailsystem->getSubscribersByMailinglist($mailinglist->ID); ?>     

								    <div class="step-mailinglist" id="step-mailinglist-<?php echo $mailinglist->ID; ?>">
								
								        <p class="step-mailinglist-title"><?php echo $mailinglist->name; ?> <span class="selectme">Maillijst Selecteren</span></p>
			                				                		
			                			<p class="right"><a href="index.php?view=mailinglists-view&id=<?php echo $mailinglist->ID; ?>">Bekijk maillijst</a></p>
								
								    </div><!-- step-mailinglist -->
								
								<?php endforeach; ?>
								
								<div class="clear"></div>
			
			                </div><!-- steps-mailinglists -->
			                							
							<div class="clear"></div>
	
						</div><!-- step-5 -->
						
						
						
	
	
	                	<!-- step 6 -->
	                
						<div class="step" id="step-6">
						
							<h1>Preview nieuwsbrief</h1>
							
							<?php include('lib/templates/default/preview.php'); ?>

							<div class="clear"></div>
	
						</div><!-- step-6 -->
						
						
						
	
	
	                	<!-- step 7 -->
	                
						<div class="step" id="step-7">
						
							<h1>Nieuwsbrief versturen</h1>
							
							<p>Template:</p>
							<ul>
							
								<li>Standaard</li>
								
							</ul>
							
							<p>Deze artikelen zijn te vinden in de nieuwsbrief:</p>

							<ul>
							
								<?php foreach ($articles as $article): ?>
								
								    <li class="finalcheck-article hidden" id="finalcheck-article-<?php echo $article->id; ?>"><?php echo $article->title; ?></li>
								
								<?php endforeach; ?>
								
							</ul>
							
							<p>Wordt verstuurd naar de volgende lijsten:</p>
							<ul>
							
								<?php foreach ($mailinglists as $mailinglist): ?>
								
								    <li class="finalcheck-mailinglist hidden" id="finalcheck-mailinglist-<?php echo $mailinglist->ID; ?>"><?php echo $mailinglist->name; ?></li>
								
								<?php endforeach; ?>
								
							</ul>
							
				            <input type="hidden" name="template" value="default" />
				            <input type="hidden" name="articles" value="" id="articlestring" />
				            <input type="hidden" name="templatestring" id="templatestring" value="" /><!-- //article:4,117px,382px.article:15,-70px,449px. -->
				            <input type="hidden" name="mailinglists" value="" id="mailingliststring" />

				            <input id="submit-newsletter" type="submit" name="submit-newsletter" value="Nieuwsbrief versturen" />
				            
							<div class="clear"></div>

						</div><!-- step-7 -->
						
						<div class="clear"></div>
						
						
						
	
	
	                </form><!-- steps -->
                
		    		<a class="steps-button hidden" id="prev-step-button"></a>
		    		<a class="steps-button" id="next-step-button">Artikelen selecteren</a>


                </div><!-- steps-container -->
                
                                
            </div><!-- content -->
            
            <div class="clear"></div>
        
        </div><!-- stage -->
        
        <div class="clear"></div>

    </div><!-- step1 -->   
    
     