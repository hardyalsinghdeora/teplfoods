<?php get_header(); ?>
    <div class="col-sm-12" >
        <div class="welcome-box">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h1><span><?php the_title(); ?></span></h1>
                <?php the_content(); ?>
            <?php endwhile; else: ?>
                <h1>Woops...</h1>
                <p>Sorry, no posts we're found.</p>
            <?php endif; ?>
            <p align="center"><?php posts_nav_link(); ?></p>
        </div>
    </div>
<?php get_footer(); ?>