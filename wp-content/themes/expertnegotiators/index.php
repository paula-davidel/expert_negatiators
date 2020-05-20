<?php get_header();?>

    <main>

      <div class="hero-container">

        <button id="hero-btn-left" class="hero-btn-left hero-btn-inactive">
          <img
            alt="arrow left for slides"
            src="<?php echo img_src(); ?>purple-arrow-left.png"
          />
        </button>
        <button id="hero-btn-right" class="hero-btn-right">
          <img
            alt="arrow right for slides"
            src="<?php echo img_src(); ?>purple-arrow-left.png"
          />
        </button>

        <div class="hero">
        	<?php get_template_part("slidebar");?>
        </div>


        <img class="hero-bkg-dots" src="<?php echo img_src(); ?>dots-grid.png" alt="">

        <div class="hero-dots">
          <div id="hero-dot-1" class="hero-dot-active"></div>
          <div id="hero-dot-2"></div>
          <div id="hero-dot-3"></div>
        </div>

      </div>

      <div class="services-display">
          <?php get_template_part("services");?>
      </div>

      <div class="tablet-display">
        <img src="<?php echo img_src(); ?>grey-line.png" alt="" class="tablet-grey-line">
        <img src="<?php echo img_src(); ?>oblique-lines.png" alt="" class="tablet-oblique-lines">
        <img src="<?php echo img_src(); ?>dots-grid-grey.png" alt="" class="tablets-dots-grey">
        <div class="tablet-display-image">
          <img src="<?php echo img_src(); ?>tablet.png" alt="" />
        </div>

        <div class="tablet-display-text">
          <h1>
            Daca exista vreo cale de a
            <br />
            economisi bani in shipping,
            <br />
            Expert Negotiators va arata cum!
          </h1>
          <p>
            Aducem o transparenta fara precedent in industria de curierat si va
            punem la dispozitie experianta noastra.
          </p>
        </div>
      </div>

      <div class="big-display">
        <?php get_template_part("big_display");?>
      </div>

      <div class="counters-container">
       <?php get_template_part("counters");?>
      </div>

      <div class="blog">
 		   <?php get_template_part("blog");?>
      </div>

      <div class="grey-area">
        <?php get_template_part("grey_area");?>
      </div>

      <div class="testimonials">
        <?php get_template_part("testimonials");?>
      </div>

      <div class="contact-form-container">
       <?php get_template_part("contact");?>
      </div>
    </main>

    <?php get_footer();?>