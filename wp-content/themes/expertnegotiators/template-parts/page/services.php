<img src="<?php echo img_src(); ?>grey-line.png" alt="" class="services-grey-line">
<img src="<?php echo img_src(); ?>grey-circle.png" alt="" class="services-grey-circle">

            <div class="services-display-description">
           <?php
             if( get_field('header_servicii') ): ?>
            <?php while( has_sub_field('header_servicii') ):
                    ?>
                    <h1>
                      <?php the_sub_field('title'); ?>
                    </h1>
                    <p>
                       <?php the_sub_field('content'); ?>
                    </p>
                   <?php endwhile; ?>
                   <?php endif;?>
        </div>

        <div class="services-display-content">
          <div class="services-controls">
            <div class="services-controls-img">
              <img
              id="services-control-left"
              src="<?php echo img_src(); ?>grey-arrow-left.png"
              alt="arrow left"
            />
            </div>
            <div class="services-controls-img">
              <img
              id="services-control-right"
              src="<?php echo img_src(); ?>grey-arrow-right.png"
              alt="arrow right"
            />
            </div>


          </div>

          <div class="services">
              <?php if( get_field('content_servicii') ): ?>
              <?php while( has_sub_field('content_servicii') ):
                    ?>
                       <?php the_sub_field('content'); ?>
                   <?php endwhile; ?>
                   <?php endif;?>
          </div>
        </div>