<section class="case-study">

<div class="container">
<div class="row">
	
	<div class="inner">
	<p class="title underline"><?php the_field('heading');?></p>
	<div class="column-wrap">
	<?php the_field('lead_copy');?>
	</div>
	</div>
	
<div class="sl-carousel owl-carousel owl-theme">
                <?php
                if (have_rows('case_study')):
                    while (have_rows('case_study')) : the_row();
                        ?>
                        <div class="item">
	                        <img src="<?php the_sub_field('image');?>"/>
	                        <div class="lower">
                            <p class="title underline"><?php the_sub_field('title');?></p>
                            <?php the_sub_field('case_study_body');?>
                            <br/>
                            <a href="<?php the_sub_field('case_study_download');?>" class="light-button">Download</a>
	                        </div>
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