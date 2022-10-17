
    <?php
    // Define our WP Query Parameters
    $the_query = new WP_Query( 'posts_per_page=1' ); ?>
    <div class="main-post">
       <?php
    // Start our WP Query
    while ($the_query -> have_posts()) : $the_query -> the_post();
    // Display the Post Title with Hyperlink
    ?>
    
        <?php show_image_thumbnail('large') ?>
        <h1> 
            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
        </h1>
        <?php
    endwhile;
    wp_reset_postdata();
    $the_query = new WP_Query( 'posts_per_page=5' ); ?>
   
       <?php
    // Start our WP Query
    while ($the_query -> have_posts()) : $the_query -> the_post();
    // Display the Post Title with Hyperlink
    ?>
        <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
        <br>
    <?php
    endwhile;
    wp_reset_postdata();
    ?>
    </div>
