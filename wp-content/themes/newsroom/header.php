<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body>
    <div class="container">
        <div class="content">
            <header class="header">
                <div class="brand">
                    <a class="site-title" href="<?php echo get_site_url(); ?>"><?php echo get_bloginfo('name'); ?></a>
                </div>
                <nav class="navbar">
                    <ul class="navbar-list">
                        <li class="navbar-item"><a href="#">About</a></li>
                        <li class="navbar-item"><a href="#">Hello</a></li>
                        <li class="navbar-item"><a href="#">Welcome</a></li>
                    </ul>
                </nav> <!-- .navbar -->
            </header> <!-- .header -->