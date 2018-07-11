<section class="downloads light-blue">
<div class="container">
<div class="row">
	
	<p class="title underline white">Downloads</p>

	
<div class="sl-carousel owl-carousel owl-theme">
                <?php
                if (have_rows('downloads')):
                    while (have_rows('downloads')) : the_row();
                        ?>
                        <div class="item">
                            <img src="<?php the_sub_field('image');?>"/>
                            <h3><?php the_sub_field('title');?></h3>
                            <p><?php the_sub_field('item_description');?></p>
                            <a href="<?php the_sub_field('download_link');?>" class="light-button white">Download</a>
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