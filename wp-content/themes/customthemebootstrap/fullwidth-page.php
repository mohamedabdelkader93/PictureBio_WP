<?php 

/**
 * Template Name: Full Width
 */

get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="page-contents border-top pt-3 pb-3" style="margin-bottom: 200px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <article class="main-content small">
                    <?php the_content(); ?>
                </article>
            </div>
        </div>
    </div>
</section>

<?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>