<section class="articles dark-blue">
<div class="container">
<div class="row">

	<p class="title underline white">Articles</p>
	
<div class="sl-carousel owl-carousel owl-theme">
    <?php
    $args = array( 'posts_per_page' => 10, 'category' => 4 );

    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                        <div class="item">
	                        <?php echo get_the_post_thumbnail( $page->ID, 'full' ); ?>
	                        
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="light-button">Read More</a>
                            
                        </div>
    <?php endforeach; 
    wp_reset_postdata();?>
            </div>
</div>
</div>
</section>
