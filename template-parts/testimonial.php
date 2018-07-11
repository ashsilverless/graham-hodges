<section class="testimonials">
<div class="container">
<div class="row">
	
	<div class="inner">
	<p class="title underline"><?php the_field('testi_heading');?></p>
	<div class="column-wrap">
	<?php the_field('testi_lead_copy');?>
	</div>
	</div>	
	
<div class="sl-carousel owl-carousel owl-theme">
                <?php
                if (have_rows('testimonial')):
                    while (have_rows('testimonial')) : the_row();
                        ?>
                        <div class="item">
                            <p><?php the_sub_field('name');?></p>
                            <p><?php the_sub_field('appointment');?></p>
                            <p><?php the_sub_field('testimonial_body');?></p>
                        </div>
                        <?php
                    endwhile;
                else :
                endif;
                ?>
            </div>
</div>
</div>
</section>