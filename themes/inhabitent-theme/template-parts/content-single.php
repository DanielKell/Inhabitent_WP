<?php
/**
 * Template part for displaying single posts.
 *
 * @package Inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'full' ); ?>
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php inhabitent_posted_on(); ?> / <?php inhabitent_comment_count(); ?> / <?php inhabitent_posted_by(); ?>
		</div> <!--.entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<!--<h2><?php echo CFS()->get( 'price' ); ?></h2>-->
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php inhabitent_entry_footer(); ?>
		<div class="social-buttons">
			<button class="black-button">
				<i class="fa fa-facebook"> <span>Like</span>
				</i>
				</button>
			<button class="black-button">
				<i class="fa fa-twitter"> <span>Tweet</span>
				</i>
				</button>
			<button class="black-button">
				<i class="fa fa-pinterest"> <span>Pin</span>
				</i>
				</button>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
