<?php
/**
* Template Name: Sub Page
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
	            <img src="<?php the_field('hero_image'); ?>" />
	            <p><?php the_field('hero_text'); ?></p>
	        </section><!--full-bleed-->

<section class="sub-content">
	
<div class="container">
	
	<div class="row">	

<div class="col-sm-9">
<?php the_field('page_content'); ?>	
</div>


<div class="col-sm-3 sl-border-left sl-sidebar">
	<p class="sidebar-heading">Also In This Section</p>
	
               <?php
                if (have_rows('page_links')):
                    while (have_rows('page_links')) : the_row();
                        ?>
                        <div class="resource">
                            <a href="<?php the_sub_field('button_target');?>"  target="_blank"><?php the_sub_field('name_of_resource');?></a>
                        </div>
                        <?php
                    endwhile;
                else :
                endif;
                ?>
	

	<?php get_template_part('template','parts/get-children');?>
</div>

</div>
	
</div>
</section><!--sub-content-->
            
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
