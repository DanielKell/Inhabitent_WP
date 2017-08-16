<?php
/**
 * The front page!
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


<div class="front-page-container">

    <section class="home-hero-banner">
        <img class="home-page-logo" src="<?php echo get_template_directory_uri(); ?>/inhabitent-site/images/logos/inhabitent-logo-full.svg" alt="Image of Inhabitent logo" />
    </section>    

    <div class="front-page-content-container">

    <!--Product Taxonomies Section-->
    <section class="product-info-container">
        <h2>Shop Stuff</h2>

                <ul class="front-product-posts">
        <?php
            $args = array( 'post_type' => 'product-type');
            $product_posts = get_terms( $args ); // returns an array of posts
        ?>
        
        <?php foreach ( $product_posts as $type ) : setup_postdata( $type ); ?>

        <li>
              <div class="product-post-piece">
              <img src="<?php echo get_template_directory_uri(); ?>/inhabitent-site/images/product-type-icons/<?php echo $type -> name; ?>.svg">
                <div class="taxonomy-types">
                 <div class="taxonomy-description">
                  <?php echo $type -> description; ?>
                 </div>
                    
                 <div>
                    <p class="button"><?php echo $type -> name; ?> Stuff</p>
                 </div> 
                    <!--Use concatenated url to load the picture!-->
                </div>
              </div>
        
        </li>
<?php endforeach; wp_reset_postdata(); ?>

    </ul>

    </section> 

    <!--Blog Entries Section-->
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
            <div class="front-blog-details">
            <div class="entry-meta">
                <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
            </div><!-- .entry-meta -->
            
        <h3><a href="<? echo get_post_permalink() ?>"><?php the_title(); ?></a></h3>
        <!--<p><?php the_content(); ?></p>-->
        </div>
       </div>
    
    </li>

<?php endforeach; wp_reset_postdata(); ?>

    </ul>
    </section> 


    <!--Adventures Section-->
    <section class="adventures-container">
        <h2>Latest Adventures</h2>
            <div class="left-and-right-boxes">
                <div class="left-boxes">
                    <ul class="adventure-boxes">
                        <li class="adventure-box1">
                            <h3 class="adventure-text"> Getting Back to Nature in a Canoe
                            </h3>
                            <a class="white-button">Read More</a>
                        </li>
                    </ul>
                </div>
                <div class="right-boxes">
                    <ul class="adventure-boxes">
                        <li class="adventure-box2">
                            <h3 class="adventure-text"> A Night with Friends at the Beach
                            </h3>
                            <a class="white-button">Read More</a>
                        </li>
                        <li class="adventure-box3">
                            <h3 class="adventure-text"> Taking in the View at Big Mountain
                            </h3>
                            <a class="white-button">Read More</a>
                        </li>
                        <li class="adventure-box4">
                            <h3 class="adventure-text"> Star-Gazing at the Night Sky
                            </h3>
                            <a class="white-button">Read More</a>
                        </li>
                    </ul>
                </div>
            </div>
            <p>
                <a>More Adventures</a>
            </p>

    </section> 


    </div> <!--Front page content container-->
</div> <!--Whole front page container-->

<?php get_footer(); ?>