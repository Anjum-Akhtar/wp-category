<?php

// Template Name: Test 
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header"> 
</header>
<div class="entry-content" itemprop="mainContentOfPage">
<?php the_content(); ?> 
</div>
</article> 
<?php endwhile; endif; ?>
<?php get_footer(); ?>