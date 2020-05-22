       <img src="<?php echo img_src(); ?>grey-line.png" alt="" class="blog-grey-line">
        <img src="<?php echo img_src(); ?>blog-line.png" alt="" class="blog-black-line">
        <img src="<?php echo img_src(); ?>dots-grid-grey.png" alt="" class="blog-grid-dots">
        <br><br>
         <div class="blog-title">
         Blogul Nostru
          <hr class="blog-area">
        </div>
        <div class="blog-posts">
            <?php if( get_field('standard') ): ?>
            <?php while( has_sub_field('standard') ):
                    ?>

                      <div class="blog-post">
                          <div class="blog-img">
                            <img src="<?php echo get_template_directory_uri().'/media/'.get_sub_field('image')['filename']; ?>" alt="" />
                          </div>                           <h1>
                            <?php the_sub_field('title'); ?>
                          </h1>
                          <p>
                            <?php the_sub_field('content'); ?>
                          </p>
                          <a class="pink-text" href="<?php echo get_site_url();?>/blog">
                            Mai multe
                            <img
                              class="blog-btn-arrow"
                              src="<?php echo img_src(); ?>long-arrow-pink.png"
                              alt="arrow"
                            />
                          </a>
                        </div>
                   <?php endwhile; ?>
                   <?php endif;?>
          </div>
        </div>