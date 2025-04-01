<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        echo '<div class="post-item">';
        echo '<a href="' . get_permalink() . '">';
        the_post_thumbnail('medium');
        echo '<h3>' . get_the_title() . '</h3>';
        echo '</a>';
        echo '<p>' . get_the_excerpt() . '</p>';
        echo '</div>';
    endwhile;
else :
    echo '<p>No posts found.</p>';
endif;

?>