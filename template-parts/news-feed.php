<section class="news dark-blue">
<div class="container">
<div class="row">

	<p class="title underline white">Latest News</p>
	
<div class="sl-carousel owl-carousel owl-theme">
    <?php
    $args = array( 'posts_per_page' => 10, 'category' => 3 );

    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                        <div class="item">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_date(); ?> </a></h3>
                            <?php the_excerpt(); ?>
                            
                                                        <a href="<?php the_permalink(); ?>" class="light-button">Read More</a>
                            
                            
                        </div>
    <?php endforeach; 
    wp_reset_postdata();?>
            </div>
</div>
</div>
</section>
