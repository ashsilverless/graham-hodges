<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
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


            <section class="hero full-bleed" style="background-image:url(<?php the_field('main_image'); ?>);">
	            <h1 class="<?php the_field('light_image'); ?>"><?php the_title(); ?></h1>
	        </section><!--full-bleed-->
	

<section class="sub-content">
	
<div class="container">
	
	<div class="row">	

<div class="col-sm-9">

	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php wp_bootstrap_starter_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
        if ( is_single() ) :
			the_content();
        else :
            the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter' ) );
        endif;

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-starter' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</div>

<div class="col-sm-3 sl-border-left sl-sidebar">
	<p class="sidebar-heading">Related Items</p>
<?php
// Default arguments
$args = array(
	'posts_per_page' => 4, // How many items to display
	'post__not_in'   => array( get_the_ID() ), // Exclude current post
	'no_found_rows'  => true, // We don't ned pagination so this speeds up the query
);

// Check for current post category and add tax_query to the query arguments
$cats = wp_get_post_terms( get_the_ID(), 'category' ); 
$cats_ids = array();  
foreach( $cats as $wpex_related_cat ) {
	$cats_ids[] = $wpex_related_cat->term_id; 
}
if ( ! empty( $cats_ids ) ) {
	$args['category__in'] = $cats_ids;
}

// Query posts
$wpex_query = new wp_query( $args );

// Loop through posts
foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>
	
	<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></a>

<?php
// End loop
endforeach;

// Reset post data
wp_reset_postdata(); ?>


</div>

</div>
	
</div>
</section><!--sub-content-->
            
		</main><!-- #main -->
	</section><!-- #primary -->




<?php
get_footer();
