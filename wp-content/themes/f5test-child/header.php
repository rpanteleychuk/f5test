<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package f5test
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quattrocento+Sans:400,400i,700,700i|Quattrocento:400,700"
          rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

    <header id="masthead" class="site-header">
        <div class="container">
            <div class="row pt-3">
                <div class="col-12 col-md-4 col-lg-6">
                    <div class="site-branding">
                        <?php
                        the_custom_logo();
                        if (is_front_page() && is_home()) :
                            ?>
                            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                                      rel="home"><?php bloginfo('name'); ?></a></h1>
                        <?php
                        else :
                            ?>
                            <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                                     rel="home"><?php bloginfo('name'); ?></a></p>
                        <?php
                        endif;
                        $f5test_description = get_bloginfo('description', 'display');
                        if ($f5test_description || is_customize_preview()) :
                            ?>
                            <p class="site-description"><?php echo $f5test_description; /* WPCS: xss ok. */ ?></p>
                        <?php endif; ?>
                    </div><!-- .site-branding -->
                </div>
                <div class="col-12 col-md-4 col-lg-3 header__phone-contact-style">
                    <a href="tel:+1234567890"><i class="fas fa-phone"></i> Call Us<span>55 55 55 55</span></a>
                </div>
                <div class="col-12 col-md-4 col-lg-3 header__mail-contact-style">
                    <a href="mailto:sales@ldtool.com"><i class="fas fa-envelope"></i> Email
                        Us<span>sales@ldtool.com</span></a>
                </div>
            </div>
        </div>
    </header>


<div class="header-menu sticky-top">
    <nav class="navbar navbar-expand-lg p-0 navbar-dark">
        <div class="container">
            <button class="header-menu__navbar-toggler navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
                <span class="header-menu__navbar-toggler-icon navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse header-menu__main-navigation-style" id="navbarNav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-1',
                    'menu_id' => 'primary-menu',
                ));
                ?>
            </div>
            <a href="#get-quote" class="header-menu__button p-3">GET A QUOTE</a>
        </div>
    </nav>
</div>


    <div id="content" class="site-content">
