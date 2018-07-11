<section class="tabs">
	<div class="top-section">
		<div class="container">
			<p class="heading underline"><?php the_field('tab_area_title'); ?></p>
			<!-- Check for parent repeater row -->
			<?php if( have_rows('tab_section') ): ?>
			<ul class="nav justify-content-center" id="myTab" role="tablist">
				<?php $row = 1; // number rows ?>
				<?php // Step 1: Loop through rows, first displaying tab titles
				while( have_rows('tab_section') ): the_row();
				//  ?>
				<li role="presentation" class="<?php if($row == 1) {echo 'active';}?> nav-item">
					<a href="#<?php echo $row; ?>" role="tab" data-toggle="tab" class="nav-link">
						<span class="dashed-border">
						<?php $logo = get_sub_field("tab_icon"); ?>
						<?php echo file_get_contents( $logo ); ?>
						</span> 
						<p><?php the_sub_field('tab_heading'); ?></p>
					</a>
				</li>
				<?php $row++; endwhile; // (have_rows('tab_panes') ):?>
			</ul>
			<?php endif; // (have_rows('tab_panes') ): ?>
	</div>
</div><!--top section-->
	<div class="bottom-section">
		<img src="<?php the_field('tab_background_image'); ?>" />	
			<div class="container">	
			<?php if( have_rows('tab_section') ): ?>
				<div class="tab-content" id="myTabContent">
				<?php $row = 1; // number rows ?>
				<?php // Step 2: Loop through rows, now displaying tab contents
				while( have_rows('tab_section') ): the_row();
				// Display each item as a list ?>
					<div class="tab-pane fade show <?php if($row == 1) {echo 'active';}?>" id="<?php echo $row; ?>" role="tabpanel">
						<div class="inner">
							<p class="title underline"><?php the_sub_field('tab_heading'); ?></p>
							<div class="column-wrap">
							<?php the_sub_field('tab_body_text'); ?>				
							</div>
							<div class="sub-link">
							<?php if( get_sub_field('button_target') ): ?>										
							<a href="<?php the_sub_field('button_target'); ?>">Learn More</a>
							<?php endif;?>	
							</div>	
					</div>
				</div>
			<?php $row++; endwhile; // (have_rows('tab_panes') ):?>
			</div>
		<?php endif; // (have_rows('tab_panes') ): ?>
		</div>
	</div>
</div><!--bottom section-->  