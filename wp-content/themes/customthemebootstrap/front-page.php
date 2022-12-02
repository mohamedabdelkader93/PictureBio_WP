<?php
/**
 * Template Name: Front Page
 */

?>

<div class="page_wrapper">
        <section class="header_section"  style="background-image: url(<?php echo the_field('home_hero_background_image'); ?>">

            <?php get_header(); ?>

            <!-- header_text -->
            <div class="container">
                <div class="header_text">
                    <?php echo the_field('home_hero_text'); ?>
                </div>
            </div>
            <!-- header_text end -->
        </section>
        <!-- introducing_section -->
        <section class="introducing_section">
            <div class="container">
                <div class="introducing_block">
                    <div class="row">
                        <div class="col-md-4">
                            <h5><?php echo the_field('introducing_a_ground_breaking_testing_technology _title'); ?></h5>
                            <img src="<?php echo the_field('introducing_a_ground_breaking_testing_technology_logo'); ?>" />
                        </div>
                        <div class="col-md-8">
                        <?php echo the_field('introducing_a_ground_breaking_testing_technology_text'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- introducing_section end -->
        <section class="technology_section" id="tech">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h6><?php echo the_field('panted_invoation_subtitle'); ?></h6>
                        <h1>
                            <?php echo the_field('panted_inovation_title'); ?>
                        </h1>
                    </div>
                    <div class="col-md-8">
                        <?php
                        $featured_posts = get_field('panted_inovations');
                        if( $featured_posts ): ?>
                            <div class="row">
                            <?php foreach( $featured_posts as $post ): 
                                setup_postdata($post); ?>
                                <div class="col-md-6">
                                    <div class="technology_card">
                                        <?php echo get_the_post_thumbnail(); ?>
                                        <p><?php the_title(); ?></p>
                                    </div>
                                </div>
                              
                            <?php endforeach; ?>
                            </div>
                            <?php 
                            wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- how_it_works_section -->
        <section class="how_it_works_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h6>How it works</h6>
                    </div>
                    <?php
                        $featured_posts = get_field('how_it_works');
                        if( $featured_posts ): ?>
                            <div class="row">
                            <?php foreach( $featured_posts as $post ): 
                                setup_postdata($post); ?>
                                <div class="col-md-12 how_it_works_card_wrapper">
                                    <div class="how_it_works_card">
                                        <h3><?php the_title(); ?></h3>
                                        <p><?php the_content(); ?></p>
                                    </div>
                                </div>  
                            <?php endforeach; ?>
                            </div>
                            <?php 
                            wp_reset_postdata(); ?>
                    <?php endif; ?>
                    
                </div>
            </div>
        </section>
        <!-- how_it_works_section end -->
        <section class="how_it_works_using_iris_section" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h6><?php echo the_field('using_iris_subtitle'); ?></h6>
                        <h2><?php echo the_field('using_iris_title'); ?></h2>
                        <hr />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                       

                        <?php
                        $featured_posts = get_field('using_iris');
                        if( $featured_posts ): ?>
                             <ul class="how_it_works_using_iris_cards_wrapper">
                             <?php $index = 0?>
                            <?php foreach( $featured_posts as $post ):
                                $index = $index + 1; 
                                setup_postdata($post); ?>
                                <li>
                                    <span><?php echo $index ?></span>
                                    <?php echo get_the_post_thumbnail(); ?>
                                    <?php the_title(); ?>
                                </li>
                                
                            <?php endforeach; ?>
                            </ul>
                            <?php 
                            wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="transforming_diagnostics_wrapper">
                            <h6><?php echo the_field('transforming_diagnostics_subtitle'); ?></h6>
                            <?php echo the_field('transforming_diagnostics_main_text'); ?>

                            <?php
                        $featured_posts = get_field('transforming_diagnostics_list');
                        if( $featured_posts ): ?>
                             <ul class="">
                             <?php $index = 0?>
                            <?php foreach( $featured_posts as $post ):
                                $index = $index + 1; 
                                setup_postdata($post); ?>
                                <li>
                                    <?php the_content(); ?>
                                </li>
                            <?php endforeach; ?>
                            </ul>
                            <?php 
                            wp_reset_postdata(); ?>
                        <?php endif; ?>
                            <div class="cta">
                                <a class="btn primary-btn" href="mailto:info@oxdx.com">Join the comunity</a>
                            </div>
                            <hr />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- one_minute_diagnostics_section -->
        <section class="one_minute_diagnostics_section" id="resources">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>
                        <?php echo the_field('one_minute_diagnostics_title'); ?>
                        </h1>
                    </div>
                </div>
                <?php
                $featured_posts = get_field('diagnostics_list');
                if( $featured_posts ): ?>
                        <div class="row">
                    <?php foreach( $featured_posts as $post ):
                        setup_postdata($post); ?>
                        <div class="col-md-4">
                            <div class="one_minute_diagnostics_card">
                                <h3><?php the_title(); ?>
                                </h3>
                                <p><?php the_content(); ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                    <?php 
                    wp_reset_postdata(); ?>
                <?php endif; ?>
  
            </div>
        </section>
        <!-- one_minute_diagnostics_section -->
        <!-- join_the_comunity_section -->
        <!-- <section class="join_the_comunity_section" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="join_the_comunity_card">
                            <p>Are you an <b>investor, laboratory</b> or part of the <b>medical community</b> who wants
                                to be part of this <b>pioneering technology?</b></p>
                            <a href="mailto:info@oxdx.com" class="btn btn-primary">Join the community</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- join_the_comunity_section end -->
        <?php get_footer(); ?>

    </div>

<!-- <header class="main-header pt-5 pb-5 border-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <?php if ( is_active_sidebar( 'front_page_banner_text' ) ) : ?>
                    <?php dynamic_sidebar( 'front_page_banner_text' ); ?>
                <?php endif; ?>
                <a data-bs-toggle="modal" data-bs-target="#signupModal" href="#" class="btn btn-sm btn-success"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg> Sign-up to Get Started
                </a>
            </div>
            <div class="col-lg-6 col-md-6">
                <?php if ( is_active_sidebar( 'front_page_banner_image' ) ) : ?>
                    <?php dynamic_sidebar( 'front_page_banner_image' ); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>

<section class="features pt-3 pb-3 mt-3">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-4">
                <div class="d-flex align-items-center feature_holder small border rounded mb-3">
                    <div class="flex-shrink-0">
                        <img class="img-fluid" src="<?php echo the_field('feature_one_image'); ?>" alt="Some Featured Text">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <?php echo the_field('feature_one_text'); ?>    
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="d-flex align-items-center feature_holder small border rounded mb-3">
                    <div class="flex-shrink-0">
                        <img class="img-fluid" src="<?php echo the_field('feature_two_image'); ?>" alt="Some Featured Text">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <?php echo the_field('feature_two_text'); ?>    
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="d-flex align-items-center feature_holder small border rounded mb-3">
                    <div class="flex-shrink-0">
                        <img class="img-fluid" src="<?php echo the_field('feature_three_image'); ?>" alt="Some Featured Text">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <?php echo the_field('feature_three_text'); ?>    
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="course_cat border-top pt-3 pb-3">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-md-6">
                <div class="course_cat_text text-center small">
                    <?php if ( is_active_sidebar( 'course_cat_text' ) ) : ?>
                        <?php dynamic_sidebar( 'course_cat_text' ); ?>
                    <?php endif; ?>
                    <a data-bs-toggle="modal" data-bs-target="#signupModal" href="#" class="btn btn-sm btn-success"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </svg> Sign-up to Get Started
                    </a>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-3 col-md-3">
                <a href="<?php echo bloginfo( 'url' ); ?>/job-oriented/" class="card text-decoration-none text-dark text-center mb-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Job-Oriented-Courses-in-Bangalore.jpg" alt="Job Oriented Courses">
                    <div class="card-body">
                        <h3 class="m-0 fs-6 fw-600">Job Oriented Courses</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3">
                <a href="<?php echo bloginfo( 'url' ); ?>/short-term/" class="card text-decoration-none text-dark text-center mb-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Short-Term-Courses-in-Bangalore.jpg" alt="Short Term Courses">
                    <div class="card-body">
                        <h3 class="m-0 fs-6 fw-600">Short Term Courses</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3">
                <a href="<?php echo bloginfo( 'url' ); ?>/certificate/" class="card text-decoration-none text-dark text-center mb-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Certification-Courses-in-Bangalore.jpg" alt="Certification Courses">
                    <div class="card-body">
                        <h3 class="m-0 fs-6 fw-600">Certification Courses</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3">
                <a href="<?php echo bloginfo( 'url' ); ?>/online/" class="card text-decoration-none text-dark text-center mb-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Online-Courses-in-Bangalore.jpg" alt="Online Courses">
                    <div class="card-body">
                        <h3 class="m-0 fs-6 fw-600">Online Courses</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="services border-top pt-4 pb-4">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-md-6">
                <div class="course_cat_text text-center small">
                    <?php if ( is_active_sidebar( 'services_text' ) ) : ?>
                        <?php dynamic_sidebar( 'services_text' ); ?>
                    <?php endif; ?>
                    <a data-bs-toggle="modal" data-bs-target="#signupModal" href="#" class="btn btn-sm btn-success"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </svg> Sign-up to Get Started
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main-content border-top pb-4 pt-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="content-area">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
            <?php               
            if ( has_post_thumbnail() ) { ?>
                <img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
            <?php }else{ ?>
                <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/Placeholder.jpg" alt="<?php echo get_the_title(); ?>">
            <?php }

            ?>
            </div>
        </div>
    </div>
</section> -->
