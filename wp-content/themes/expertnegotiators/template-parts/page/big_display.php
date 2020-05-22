<img src="<?php echo img_src(); ?>dots-grid-grey.png" alt="" class="big-display-dots-grey">
        <img src="<?php echo img_src(); ?>grey-line.png" alt="" class="big-display-grey-line">
        <img src="<?php echo img_src(); ?>oblique-line.png" alt="" class="big-display-oblique-line">
        <img src="<?php echo img_src(); ?>grey-square.png" alt="" class="big-display-square">
        
       <?php
             if( get_field('content_big_display') ): ?>
            <?php while( has_sub_field('content_big_display') ):
            ?>
           <?php the_sub_field('content'); ?>
           <?php endwhile; ?>
           <?php endif;?>