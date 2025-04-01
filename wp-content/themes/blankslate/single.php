<?php get_header(); ?>
<?php //if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php //get_template_part( 'entry' ); ?>
<?php //if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
<?php 
if (have_posts()) :
    while (have_posts()) : the_post();
        echo '<div class="post-detail">';
        the_post_thumbnail('large');
        echo '<h1>' . get_the_title() . '</h1>';
        echo '<div>' . get_the_content() . '</div>';
        echo '</div>';
    endwhile;
endif;

//endwhile; endif; ?>
<footer class="footer">
<?php get_template_part( 'nav', 'below-single' ); ?>
</footer>
<?php get_footer(); ?>