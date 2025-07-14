<?php get_header(); ?>
    <div class="col-sm-12">
        <?php echo do_shortcode( '[twabc-carousel category="main-slider"]' ); ?>
    </div>
    <div class="col-sm-12" >
        <div class="welcome-box">
            <h1><span><?php single_post_title(); ?></span></h1>
            <?php if ( have_posts() ) : ?>

                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; // end have_posts() check ?>
        </div>
        <div class="clearfix"></div>
    </div>
    <?php if ( is_front_page() ) : ?>
        <div class="col-sm-12">
            <h3 class="heading"><span>Our Product</span></h3>
            <div class="row products-list">
                <?php //WordPress loop for custom post type
                $categories = get_categories();
                // var_dump($categories);exit;
                foreach ($categories as $category) {
                    if($category->term_id != '5'){
                        $image_url = get_wp_term_image($category->term_id);
                        $category_link = get_category_link( $category->term_id );
                        ?> 
                        <div class="col-sm-6">
                            <div class="view">
                                <img src="<?php echo $image_url; ?>" />
                                <a href="<?php echo esc_url( $category_link ); ?>"><h3><?php echo $category->name; ?>
                                    <!-- <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> --></h3></a>
                            </div>
                        </div>
                    <?php }
                } ?>
            </div>
        </div>
    <?php endif; ?>
<?php get_footer(); ?>