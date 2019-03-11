<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header id="header" role="banner">
        <nav id="menu" role="navigation">
        <!-- <div id="search">
            <?php get_search_form(); ?>
        </div> -->
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </nav>
    </header>
