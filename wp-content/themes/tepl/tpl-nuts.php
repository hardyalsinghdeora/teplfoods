<?php
/**
 *
 * Template Name: Dry Fruits Template
 *
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage TEPL_theme
 * @since TEPL theme 1.0
 */

get_header(); ?>
<div class="col-sm-12">
    <?php echo do_shortcode( '[twabc-carousel category="dry-fruits"]' ); ?>
</div>
<div class="col-sm-12" >
	<div class="welcome-box">
		<h1 class="text-center"><span><?php echo ucwords($category_name); ?></span></h1>
        <div class="row products-list">
    		<?php $i=0; while ( have_posts() ) : the_post(); ?>
                <?php echo ($i % 3 == 0) ? '<div class="clearfix"></div><br />' : ''; ?>
                <div class="col-sm-4">
                    <div class="view view-first">
                        <?php the_post_thumbnail();?>
                        <div class="mask">
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        </div>
    				</div>
                    <div class="view">
                        <h3><?php the_title(); ?></h3>
                    </div>
    			</div>
    		<?php $i++; endwhile; // end of the loop. ?>
    	</div>
    </div>
</div>
<?php get_footer(); ?>
