<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="individual-product-page">

    <div class="product-item-left-half">
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>



		<!--<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?>
		</div>-->
	</header><!-- .entry-header -->
    </div>


    <div class="product-item-right-half">
	<div class="entry-content">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<h2><?php echo CFS()->get( 'price' ); ?></h2>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
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
    </div>
    </section> 
</article><!-- #post-## -->
