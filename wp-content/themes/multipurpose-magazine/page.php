<?php
/**
 * The template for displaying all pages.
 * @package Multipurpose Magazine
 */
get_header(); ?>

<?php do_action('multipurpose_magazine_page_header'); ?>

<main id="maincontent" role="main" class="main-wrap-box">
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="title-box">
        	<div class="container">
        		<h1><?php esc_html(the_title()); ?></h1>
        	</div>
        </div>
        <div id="wrapper" class="container">
            <div class="feature-box">
                <div class="bradcrumbs">
                    <?php multipurpose_magazine_the_breadcrumb(); ?>
                </div>
            </div> 
            <div class="feature-box">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="entry-content"><?php the_content(); ?> </div>
            <?php wp_link_pages( array(
                'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'multipurpose-magazine' ) . '</span>',
                'after'       => '</div>',
                'link_before' => '<span class="page-number">',
                'link_after'  => '</span>',
                'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'multipurpose-magazine' ) . ' </span>%',
                'separator'   => '<span class="screen-reader-text">, </span>',
            ) ); ?>       
            <div class="clear"></div>  
            <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) {
                    comments_template();
                }
            ?>
        </div>
    <?php endwhile; // end of the loop. 
    wp_reset_postdata();?>
</main>

<?php do_action('multipurpose_magazine_page_left_footer'); ?>

<?php get_footer(); ?>