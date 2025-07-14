<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
<title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
 
<?php wp_head(); ?>
 
</head>
  
<body>
<!-- A grey horizontal navbar that becomes vertical on small screens -->
<div class="container">
    <div class="col-sm-12">
        <div class="header">
            <div class="col-sm-12">
                <div class="col-sm-6">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <div class="pull-left"><img src="<?php header_image(); ?>" width="100%" alt=""></div>
                        <div class="pull-left"><h1 class="main-title"><?php bloginfo('name'); ?> 
                            <span><?php bloginfo('description'); ?></span></h1></div>
                    </a>
                </div>
                <div class="col-sm-6 nav">
                    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Header Contact Area')) : ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="col-sm-10">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'div','container_class' => 'collapse navbar-collapse in', 'container_id' => 'navbar', 'menu_class' => 'nav navbar-nav', 'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>', ) ); ?>
                </div>
                <div class="col-sm-2 social-links">
                    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Header Social Media Area')) : ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
