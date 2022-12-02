<?php 

/**
 * Template Name: About Page
 */

get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="the_journey_so_far_section">
    <div class="container">
        <h6 class="page_subtitle"><?php echo get_the_title(); ?></h6>
        <h1 class="page_title"><?php echo the_field('the_journey_so_far_title'); ?></h1>
        <img src="<?php echo the_field('the_journey_so_far_image'); ?>" class="page_hero_image" />
        <div class="section_text_list">
            <?php echo the_field('the_journey_so_far_paragraph_1'); ?>
            <?php echo the_field('the_journey_so_far_paragraph_2'); ?>
        </div>
    </div>
</section>

<section class="our_goal_today_section">
    <div class="container">
        <h6 class="page_subtitle"><?php echo get_the_title(); ?></h6>
        <h1 class="page_title"><?php echo the_field('our_goals_title'); ?></h1>
        <div class="section_text_list">
            <?php echo the_field('our_goals_paragraph_1'); ?>
            <div class="row">
                <div class="col-md-6">
                    <?php echo the_field('our_goals_paragraph_2'); ?>
                </div>
                <div class="col-md-6">
                    <?php echo the_field('our_goals_paragraph_3'); ?>
                </div>
            </div>
            <!-- <?php echo the_field('our_goals_team_indicator'); ?> -->
        </div>
    </div>
</section>

<section class="our_team_section">
    <div class="container">
        <h6 class="page_subtitle"><?php echo get_the_title(); ?></h6>
        <h1 class="page_title">Our team</h1>
        <br>
        <br>
        <div class="row">
            <?php $loop = new WP_Query( array( 'post_type' => 'our_team', 
            'posts_per_page' => 20, 
            'meta_key' => 'display_order',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            
            ) ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="col-md-6">
                <div class="our_team_card">
                    <?php if ( has_post_thumbnail() ) { ?>
                        <img class="" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                    <?php }else{ ?>
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/img/Placeholder.jpg" alt="<?php echo get_the_title(); ?>">
                    <?php } ?>
                    <h2>
                    <?php the_title();?>
                    <a href="<?php echo the_field('linkedin'); ?>" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/pictura/assets/images/linkedin_icon.png" />
                    </a>
                    </h2>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
            <?php endwhile; wp_reset_query();?>
        </div>
        
    </div>
</section>

<section class="partners_section">
    <div class="container">
        <h6 class="page_subtitle"><?php echo get_the_title(); ?></h6>
        <h1 class="page_title">Partners:</h1>
        <br>
        <br>
        <div class="row">
            <?php $loop = new WP_Query( array( 'post_type' => 'partners', 'posts_per_page' => 10 ) ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="col-md-3">
                <div class="partner_card">
                    <?php if ( has_post_thumbnail() ) { ?>
                        <img class="" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                    <?php }else{ ?>
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/img/Placeholder.jpg" alt="<?php echo get_the_title(); ?>">
                    <?php } ?>
                    <h2>
                    <?php the_title();?>
                    </h2>
                    <!-- <p><?php the_content(); ?></p> -->
                </div>
            </div>
            <?php endwhile; wp_reset_query();?>
        </div>
        
    </div>
</section>

<section class="investment_section">
    <div class="container">
        <h6 class="page_subtitle"><?php echo get_the_title(); ?></h6>
        <h1 class="page_title"><?php echo the_field('investment_title'); ?></h1>
        <div class="section_text_list">
            <?php echo the_field('investment_paragraph_1'); ?>
            <?php echo the_field('investment_paragraph_2'); ?>
            <?php echo the_field('investment_paragraph_3'); ?>
        </div>
        <div class="cta">
            <a class="btn primary-btn" href="mailto:info@pictura.bio">Request Investor Pack</a>
        </div>
    </div>
</section>

<?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>