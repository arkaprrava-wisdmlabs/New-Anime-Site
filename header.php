<?php
wp_head();
?>
<html>
    <head>
        <title> <?php bloginfo( 'name' ); ?> </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body <?php body_class();?> >
        <header>
            <nav>
                <?php wp_nav_menu(array('theme_location'=>'header-menu')); ?>
            </nav>
            <div class="company">
                <figure class="logo">
                    <img src="<?php echo site_icon_url(); ?>" alt="logo">
                </figure>
                <h1 class="company-name"><?php echo bloginfo('name'); ?></h1>
            </div>
            <div class="search-field">
                <?php get_search_form(); ?>
            </div>
        </header>
        <div class="middle">