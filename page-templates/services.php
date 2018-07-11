<?php
/**
* Template Name: Services Page
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				//get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				//if ( comments_open() || get_comments_number() ) :
				//	comments_template();
				//endif;

			endwhile; // End of the loop.
			?>
            
            <section class="hero full-bleed">
	            <img src="<?php the_field('hero_image'); ?>" />
	            <p><?php the_field('hero_text'); ?></p>
	        </section><!--full-bleed-->

<?php get_template_part('template','parts/tab-section');?>

<section class="lower-section">
	<div class="background-color-panel"></div>
	<div class="container">
		<div class="wrapper">
		<p class="heading underline"><?php the_field('lower_section_heading'); ?></p>
		<div class="column-wrap"><?php the_field('lower_section_text'); ?></div>
		</div>
	</div>
	
</section>
            
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
