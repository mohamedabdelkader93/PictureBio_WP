<?php 

/**
 * Template Name: Contact Page
 */
?>
<section class="header_section" style="background-image: url(<?php echo the_field('contact_page_background_image'); ?>)">
    <?php get_header(); ?>

    <!-- header_text -->
    <div class="container">
        <div class="header_text">
        <h6 class="page_subtitle"><?php echo the_field('contact_page_subtitle'); ?></h6>
        <p><?php echo the_field('contact_page_title'); ?></p>
        </div>
    </div>
    <!-- header_text end -->
</section>

<section class="contact-main-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <?php if ( is_active_sidebar( 'contact_form' ) ) : ?>
                    <?php dynamic_sidebar( 'contact_form' ); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>