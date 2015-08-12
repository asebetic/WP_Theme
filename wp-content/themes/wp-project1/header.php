<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <meta name="google-site-verification" content="Zd9xlaVoQyZaCoAuDGdJFQnMhYTtVtTMQTGWELnnLkU"/>
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Quattrocento' rel='stylesheet' type='text/css'>
</head>

<body <?php body_class(); ?>>
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <!-- site-header -->
    <header class="site-header">
        <div class="logo">
            <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        </div>

        <a id="nav-toggle" href="#">
            <div class="menu-toggle"><span></span></div>
        </a>

        <nav class="site-nav">
            <?php
            $args = array(
                'theme_location' => 'primary'
            );

            wp_nav_menu($args);
            ?>

        </nav>
    </header>
    <!-- /site-header -->
    <nav class="navbar hidden">
        <?php wp_nav_menu($args); ?>
    </nav>
    <div class="slider">
        <?php
        if (function_exists('easingslider')) {
            easingslider(64);
        }
        ?>
    </div>
