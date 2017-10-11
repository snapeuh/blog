<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Monoton|Open+Sans:400,600,700" rel="stylesheet" type="text/css">
        <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css">
        <link href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" rel="shortcut icon">

        <link href="<?php bloginfo('rss2_url'); ?>" title="<?php bloginfo('name'); ?>" rel="alternate" type="application/rss+xml">

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header>
            <a class="logo" href="<?php echo home_url(); ?>">
                <h1 class="name"><?php bloginfo('name'); ?><br><?php bloginfo('description'); ?></h1>
            </a>
            <nav class="nav">
                <button type="button" class="button"><svg version="1.1" id="Layer_1" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><rect x="96" y="241" width="320" height="32"/><rect x="96" y="145" width="320" height="32"/><rect x="96" y="337" width="320" height="32"/></g></svg> Menu</button>
                <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => false, 'menu_class' => 'dropdown', 'menu_id' => 'header-menu')); ?>
            </nav>
        </header>
