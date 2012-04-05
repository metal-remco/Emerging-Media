<?php get_header(); ?>
        
        <div id="stage">
    
			<?php rewind_posts(); // Loop door de post(s) ?>
            <?php query_posts($query_string . ''); ?>
            <?php $i=1; while (have_posts()) : the_post(); ?>
            
                <div class="post" id="post-<?php the_ID(); ?>">
                
                	<div class="post-header"<?php if($i==1): echo ' id="first-post-header"'; endif; ?>>
                    
                    	<?php if(is_category() && $i==1): ?>
                        
                        	<p id="category-title-top">Categorie:</p>            
                            <h1 id="category-title"><?php echo single_cat_title( '', false ); ?></h1>
                        
                        <?php elseif(is_search() && $i==1): ?>
                        
                        	<p id="category-title-top">Zoekterm:</p>            
                            <h1 id="category-title"><?php the_search_query(); ?></h1>
                        
                        <?php endif; ?>
                    
                    </div>
                    
                    <div class="post-stage">
                    
                        <h1 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
                        <p class="post-meta-before">Geplaatst op <span class="blue"><?php the_time('l j F Y'); ?> om <?php the_time('h:i'); ?></span> door <span class="blue"><?php the_author() ?></span></p>
                        
                        <div class="post-content">
						
							<?php the_content(); ?>
                            <div class="clear"></div>
                        
                        </div>
                        
                    	<p class="post-meta-after"><?php edit_post_link('Bewerk','',' / '); ?>Geplaatst in <?php the_category(', ') ?> / <?php comments_popup_link('0 reacties &raquo;', '1 reactie &raquo;', '% reacties &raquo;'); ?></p>

                    </div><!-- post-stage -->
                    
                    <div class="post-footer"<?php if($i == $wp_query->post_count): echo ' id="last-post-footer"'; endif; ?>></div>
                    
                </div><!-- post -->
                                
                <?php if($i == 1): ?>
                
                	<ul class="stage-widgets">
                
						<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar(3)): echo '<li>Widget Fout</li>'; endif; ?>
                        
                    </ul>
                
                <?php elseif($i == 2): ?>
                
                	<ul class="stage-widgets">
                
						<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar(4)): echo '<li>Widget Fout</li>'; endif; ?>
                    
                    </ul>
                
                <?php endif; ?>
                                    
            <?php $i++; endwhile; ?>
            
            <!-- Vorige en Volgende knoppen -->
            <?php $prev = get_previous_posts_link(); ?>
            <?php if ($prev != '') { echo '<p class="navlinks left">'.$prev.'</p>'; } ?>

            <?php $next = get_next_posts_link(); ?>
            <?php if ($next != '') { echo '<p class="navlinks right">'.$next.'</p>'; } ?>
            			
            <div class="clear"></div>
            
        </div><!-- stage -->
        
<?php get_footer(); ?>