<?php
/**
Search Results
 */

get_header(); ?>

	<section id="primary sub" class="content-area col-sm-12">
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
	            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/search-banner.jpg" />
	            <h1 class="<?php the_field('light_image'); ?>">Search Results</h1>
	        </section><!--full-bleed-->

<section class="sub-content">
	
<div class="container">
	
	<div class="row">	

<div class="col-sm-9">

	<section id="primary" class="content-area col-sm-12 col-lg-8">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'wp-bootstrap-starter' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->






</div>


<div class="col-sm-3 sl-border-left sl-sidebar">
	<p class="sidebar-heading">Search Sidebar</p>
	
SEARCH SIDEBAR CONTENT
</div>

</div>
	
</div>
</section><!--sub-content-->
            
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();





















