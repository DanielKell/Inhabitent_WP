<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="container">
					<div class="contact-info">
						<h3> Contact Info </h3>
                        <p>
                            <i class="fa fa-envelope icon" aria-hidden="true"></i>
                            <a href="mailto:info@inhabitent.com">info@inhabitent.com</a>
                        </p>
                        <p>
                            <i class="fa fa-phone icon" aria-hidden="true"></i>
                            <a href="tel:778-456-7891">778-456-7891</a>
						<p class="footer-social-media">
                            <span>
                                <a href="#"><i class="fa fa-facebook-square icon" aria-hidden="true"></i></a>
                            </span>
                            <span>
                                <a href="#"><i class="fa fa-twitter-square icon" aria-hidden="true"></i></a>
                            </span>
                            <span>
                                <a href="#"><i class="fa fa-google-plus-square icon" aria-hidden="true"></i></a>
                            </span>
                        </p>
					</div>

					<div class="business-hours">
						<h3> Business Hours </h3>
						<p><span class="business-hours-days">Monday-Friday:</span> 9am to 5pm </p>
						<p><span class="business-hours-days">Saturday:</span> 10am to 2pm </p>
						<p><span class="business-hours-days">Sunday:</span> Closed </p>
					</div>

					<div class="footer-logo">
					<img src="<?php echo get_template_directory_uri(); ?>/inhabitent-site/images/logos/inhabitent-logo-text.svg" alt="Image of Inhabitent logo" />
					</div>
				</div>

					<div class="copyright">
						Copyright © <?php echo date('Y'); ?> Inhabitent
					</div>

			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
