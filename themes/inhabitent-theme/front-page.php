<?php
/**
 * The front page!
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


<div class="front-page-container">

    <section class="home-hero-banner">

    </section>    

    <section class="product-info-container">
        <h2>Shop Stuff</h2>
    </section> 

    <section class="recent-blog-entries">
        <h2>Inhabitent Journal</h2>

        <ul class="front-blog-posts">
        <?php
   $args = array( 'post_type' => 'post', 'orderby' => 'date' , 'posts_per_page' => '3', 'order' => 'DESC');
   $product_posts = get_posts( $args ); // returns an array of posts
    ?>
<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>

<li>
    <div class="blog-post-piece">
        <div class="journal-thumbnail-wrapper">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'large' ); ?>
            <?php endif; ?>
        </div>
        <div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
    <a href="<? echo get_post_permalink() ?>"><h3><?php the_title(); ?></h3></a>
    <!--<p><?php the_content(); ?></p>-->
   </div>
   
</li>

<?php endforeach; wp_reset_postdata(); ?>


    </ul>
    </section> 

    <section class="adventures-container">
        <h2>Latest Adventures</h2>
    </section> 



</div>

<?php get_footer(); ?>