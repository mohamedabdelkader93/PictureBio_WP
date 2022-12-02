<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <meta name="description" content="1-minute pathogen recognition platform">
    <meta name="keywords" content="facial recognition, platform, iris">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/pictura/assets/images/favicon.ico" type="image/x-icon">
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
    <title><?php bloginfo('title') ?></title>
    <!-- -->
  </head>
  <body <?php body_class(); ?>>

<!-- Navbar -->
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light small custom-nav border-bottom fixed-top">
  <div class="container">
    <a class="navbar-brand" href="<?php echo bloginfo( 'url' ); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Prime-Inspire-Logo.svg" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'main-menu',
        'container' => false,
        'menu_class' => '',
        'fallback_cb' => '__return_false',
        'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
        'depth' => 2,
        'walker' => new bootstrap_5_wp_nav_menu_walker()
    ));
    ?>
      <form class="d-flex" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
        <div class="input-group">
            <input type="search" class="form-control form-control-sm" placeholder="<?php echo esc_attr_x( 'Search for..', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">
            <button class="btn btn-sm btn-success" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </button>
        </div>
      </form>
    </div>
  </div>
</nav> -->
<!-- Navbar -->

<nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <!-- <a class="navbar-brand" href="<?php echo get_home_url();?>"> -->
                        <?php csl_CustomSiteLogo_show_logo() ?>
                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/pictura/assets/images/logo.png" /> -->
                    <!-- </a> -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <?php
    wp_nav_menu(array(
        'theme_location' => 'main-menu',
        'container' => false,
        'menu_class' => '',
        'fallback_cb' => '__return_false',
        'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto">%3$s</ul>',
        'depth' => 2,
        'walker' => new bootstrap_5_wp_nav_menu_walker()
    ));
    ?>
    </div>
                    <!-- <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#tech">Tech</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#resources">News & Resources</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </nav>