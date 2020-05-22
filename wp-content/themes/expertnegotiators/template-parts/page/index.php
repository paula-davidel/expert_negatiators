<?php get_header();?>

    <main>
		<?php switch ($post->post_name){
			case "acasa":
				 get_page_template_part("index_old");
				break;
			case "despre-noi":?>
			  <div class="grey-area">
		        <?php get_page_template_part("grey_area");?>
		      </div>
      			<?php
      			break;
			case "servicii":?>
			  <div class="services-display">
		          <?php get_page_template_part("services");?>
		      </div>
      			<?php
      			break;
			case "blog":
				?>
				<div class="blog">
			 		<?php get_page_template_part("blog");?>
			    </div>
				<?php
				break;
			case "contact":?>
			  <div class="contact-form-container">
		       <?php get_page_template_part("contact");?>
		      </div>
      			<?php
      			break;
		}  

		?>
    

    </main>

<?php get_footer();?>