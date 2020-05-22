     <?php
             if( get_field('content_despre_noi') ): ?>
            <?php while( has_sub_field('content_despre_noi') ):
            ?>
           <?php the_sub_field('content'); ?>
           <?php endwhile; ?>
           <?php endif;?>