<?php get_header(); ?>

<section class="blog_section">
    <div class="container">
        <h6 class="page_subtitle">Blog</h6>
        <h1 class="page_title">News & Resources:</h1>
        <br>
        <br>
        <div class="blog_listing_container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="blog_card">
                    <h6 class="post_date"><?php echo get_the_date(); ?></h6>
                    <h2 class="post_title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                    <p class="post_content"><?php echo get_the_excerpt(); ?></p>
                    <a class="find_our_more" href="<?php the_permalink(); ?>">Find our more</a>
                </div>
            <?php endwhile; else : ?>
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </div>
        
    </div>
</section>

<section class="want_to_know_more" style="background-image: url(<?php echo get_template_directory_uri(); ?>/pictura/assets/images/want_to_know_more_bg.png)">
    <h1>Want to know more ?</h1>
    <a class="btn primary-btn" href="/about">About Us</a>
</section>

<!-- <section class="default-holder mt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9">

                <div class="list-group mb-3">

                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="list-group-item list-group-item-action small">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-4">
                                <?php 
                                
                                if ( has_post_thumbnail() ) { ?>
                                    <img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                                <?php }else{ ?>
                                    <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/Placeholder.jpg" alt="<?php echo get_the_title(); ?>">
                                <?php }

                                ?>
                                
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <h3 class="fs-5 fw-600"><?php echo get_the_title(); ?></h3>
                                <p><?php echo get_the_excerpt(); ?></p>
                            </div>
                        </div>
                    </a>
                    <?php endwhile; else : ?>
                        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>

                </div>

            </div>
            <div class="col-lg-3 col-md-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section> -->
    
<?php get_footer(); ?>