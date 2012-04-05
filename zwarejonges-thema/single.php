<?php get_header(); ?>
        
        <div id="stage">
    
			<?php rewind_posts(); // Loop door de post(s) ?>
            <?php query_posts($query_string . ''); ?>
            <?php while (have_posts()) : the_post(); ?>
            
                <div class="post" id="post-<?php the_ID(); ?>">
                
                	<div class="post-header" id="first-post-header"></div>
                    
                    <div class="post-stage">
                    
                        <h1 class="post-title"><?php the_title(); ?></h1>
                        <p class="post-meta-before">Geplaatst op <span class="blue"><?php the_time('l j F Y'); ?> om <?php the_time('h:i'); ?></span> door <span class="blue"><?php the_author() ?></span></p>
                        
                        <div class="post-content">
						
							<?php the_content(); ?>
                            <div class="clear"></div>
                        
                        </div>
                        
                    	<p class="post-meta-after"><?php edit_post_link('Bewerk','',' / '); ?>Geplaatst in <?php the_category(', ') ?> / <?php comments_popup_link('0 reacties &raquo;', '1 reactie &raquo;', '% reacties &raquo;'); ?></p>

                    </div><!-- post-stage -->
                    
                    <div class="post-footer"></div>
                    
                </div><!-- post -->
                
                <div class="post" id="post-comments">
                
                	<div class="post-header"></div>

                    <div class="post-stage">
                    
						<?php comments_template(); ?> 
                        
                    </div> 
                    
                    <div class="post-footer" id="last-post-footer"></div>
                
                </div><!-- post-comments -->

                                    
            <?php endwhile; ?>
            
        </div><!-- stage -->
        
<?php get_footer(); ?>