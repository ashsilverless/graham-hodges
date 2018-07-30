<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
    
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		
	<section id="contact" class="contact-upper">   
    <div class="container">
	    <p class="heading underline">Contact Us</p>
	    <p>If you would like to call or email. We are very happy to just talk through things. <br/>Feel free to give us a call or send an email, alternatively, leave us a brief message and we’ll be in touch.</p>
    </div>	
	</section><!--contact-upper-->

<section class="contact-lower">

<div class="container">
	<div class="row">
		
		<div class="col-md-2">
			<i class="fas fa-phone"></i><p>01225 719 857</p>
			</div>
		<div class="col-md-2">
			<i class="fas fa-envelope"></i><p>graham@grahamhodges.com</p>
			</div>		
		<div class="col-md-2">
			<i class="fas fa-mobile-alt"></i><p>07850 561 358</p>
			</div>
		
		<div class="col-md-6">
			<?php echo do_shortcode('[contact-form-7 id="192" title="Contact form 1"]');?>
		</div>		
				
	</div>
</div>

</section>


<section class="socket">
	
		<div class="container">
			
			<div class="row">
			
			<div class="col-sm-3">
			<a href="<?php echo esc_url( home_url( '/' )); ?>" class="logo">
                            <img src="<?php echo esc_attr(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>	
			</div>
			
			<div class="col-sm-6 copyright">
			&copy; <?php echo date('Y'); ?> Graham Hodges | <?php echo '<a href="'.home_url().'/wp-content/uploads/2018/07/Graham-Hodges-Privacy-Policy.pdf" target="_blank">Privacy Policy</a>'; ?> | Designed by Silverless		
			</div>		
				
			<div class="col-sm-3 social">
				<a href="https://twitter.com/grahamhodges1" target="_blank"><i class="fab fa-twitter"></i></a>
				<a href="https://www.linkedin.com/in/grahamhodges" target="_blank"><i class="fab fa-linkedin-in"></i></a>
			</div>			
            
			</div>            
            
            
            
            
            
		</div>
</section>

	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</div><!--page-wrapper-->
</body>
</html>