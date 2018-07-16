<?php
/**
* Template Name: Sub Sub Page
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
	            <h1 class="<?php the_field('light_image'); ?>"><?php the_field('hero_text'); ?></h1>
	        </section><!--full-bleed-->

<section class="sub-content">
	
<div class="container">
	
	<div class="row">	

<div class="col-sm-9">
<?php the_field('page_content'); ?>	
</div>


<div class="col-sm-3 sl-border-left sl-sidebar">
	<p class="sidebar-heading">Further Resources</p>

                <?php
                if (have_rows('resource')):
                    while (have_rows('resource')) : the_row();
                        ?>
                        <div class="resource">
                            <a href="<?php the_sub_field('source');?>"  target="_blank"><?php the_sub_field('name_of_resource');?></a>
                        </div>
                        <?php
                    endwhile;
                else :
                endif;
                ?>
            </div>


</div>
	
</div>
</section><!--sub-content-->
            
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
