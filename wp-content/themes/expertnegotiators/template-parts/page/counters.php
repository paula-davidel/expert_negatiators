     <?php
             if( get_field('content_counters') ): ?>
            <?php while( has_sub_field('content_counters') ):
            ?>
           <?php the_sub_field('content'); ?>
           <?php endwhile; ?>
           <?php endif;?>