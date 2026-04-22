<?php get_header(); ?>

<div class="single-post">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- Poster FIRST -->
    <?php if ( has_post_thumbnail() ) : ?>
        <div class="single-poster">
            <?php the_post_thumbnail('large'); ?>
        </div>
    <?php endif; ?>

    <!-- Movie Information AFTER poster -->
    <h3 class="custom-breadcrumb">Movie Information</h3>

    <!-- Content -->
    <div class="post-content">  
        <?php the_content(); ?>
    </div>

<?php endwhile; endif; ?>

</div>

<div class="custom-breadcrumb">  
    <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a> » Copyright © 2026. All Rights Reserved  
</div> 

<?php get_footer(); ?>