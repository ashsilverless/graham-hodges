<?php
/**
* Template Name: Resources Page
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
            
            <section class="hero full-bleed" style="background-image:url(<?php the_field('hero_image'); ?>);">
	            <p><?php the_field('hero_text'); ?></p>
	        </section><!--full-bleed-->

<?php get_template_part('template','parts/news-feed');?>

<?php get_template_part('template','parts/downloads');?>

<?php get_template_part('template','parts/article-feed');?>
            
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
