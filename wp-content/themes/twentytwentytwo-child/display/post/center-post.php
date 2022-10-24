<ul>
    <?php
    // Define our WP Query Parameters
    $the_query = new WP_Query( 'posts_per_page=3' ); ?>
    <div class="main-post">
    <?php
    // Start our WP Query
    while ($the_query -> have_posts()) : $the_query -> the_post();
    // Display the Post Title with Hyperlink
    ?>
        <br>
        <?php show_image_thumbnail('large') ?>
        <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
        <?php
    endwhile;
    wp_reset_postdata();
    ?>
    </div>
</ul>