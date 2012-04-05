<?php get_header(); ?>
        
        <div id="stage">

			<?php rewind_posts(); // Loop door de post(s) ?>
            <?php query_posts($query_string . ''); ?>
            <?php while (have_posts()) : the_post(); ?>
            
                <div class="post" id="post-<?php the_ID(); ?>">
                
                	<div class="post-header" id="first-post-header"></div>
                    
                    <div class="post-stage">
                    
                        <h1 class="post-title"><?php the_title(); ?></h1>
                        
                        <div class="post-content">
						
							<?php the_content(); ?>
                            <div class="clear"></div>
                            
                            <?php if(is_page('archief')): get_template_part('part-archief'); endif; ?>
                        
                        </div>
                        
                    	<p class="post-meta-after"><?php edit_post_link('Bewerk','',''); ?></p>

                    </div><!-- post-stage -->
                    
                    <div class="post-footer"></div>
                    
                </div><!-- post -->
                
                <ul class="stage-widgets">
            
                    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar(3)): echo '<li>Widget Fout</li>'; endif; ?>
                    
                </ul>
                
                <ul class="stage-widgets">
            
                    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar(4)): echo '<li>Widget Fout</li>'; endif; ?>
                
                </ul>
                                    
            <?php endwhile; ?>
            
        </div><!-- stage -->
        
<?php get_footer(); ?>