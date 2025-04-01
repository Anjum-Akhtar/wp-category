<?php

// Template Name: Home
//get_header(); 
?>

<h1>helloooooooooooooooooooo</h1>

<?php
// Fetch all categories
$categories = get_categories(array(
    'orderby' => 'name',   // Order categories alphabetically
    'order'   => 'ASC'     // Ascending order
));

// Loop through each category
if ($categories) {
    echo '<div class="categories-list">';
    foreach ($categories as $category) {
        // Get the category image URL (if any)
        $category_image = get_term_meta($category->term_id, 'category_image', true);
        ?>
        <div class="category-item">
            <!-- Category Image -->
            <?php if ($category_image) : ?>
                <div class="category-image">
                    <img src="<?php echo esc_url($category_image); ?>" alt="<?php echo esc_attr($category->name); ?>" />
                </div>
            <?php endif; ?>

            <!-- Category Name and Link -->
            <h3 class="category-title">
                <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
                    <?php echo esc_html($category->name); ?>
                </a>
            </h3>
            <!-- Category Description (Optional) -->
            <?php if ($category->description) : ?>
                <p class="category-description"><?php echo esc_html($category->description); ?></p>
            <?php endif; ?>

            <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
                click for posts
            </a>
        </div>
        <?php
    }
    echo '</div>';
} else {
    echo '<p>No categories found.</p>';
}
?>


<?php //get_footer(); ?>