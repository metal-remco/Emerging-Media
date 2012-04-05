
    <h2>Alle berichten</h2>
    
    <table id="archive">
    
        <tr>
            <th class="column-time">Datum</th>
            <th class="column-title">Titel</th>
            <th class="column-author">Auteur</th>
            <th class="column-category">Categorie</th>
        </tr>
    
		<?php $my_query = new WP_Query( "posts_per_page=-1" ); ?>
        <?php if ( $my_query->have_posts() ): ?>
			<?php while ( $my_query->have_posts() ): ?>
				<?php $my_query->the_post(); ?>
        
                <tr>
                    <td class="column-time"><?php the_time('d/m h:i'); ?></td>
                    <td class="column-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></td>
                    <td class="column-author"><?php the_author() ?></td>
                    <td class="column-category"><?php the_category(', '); ?></td>
                </tr>
            
            <?php endwhile; ?>
		<?php endif; ?>
        <?php wp_reset_postdata(); ?>
   
    </table>
