
    <?php
    // Define our WP Query Parameters
    $the_query = new WP_Query( 'posts_per_page=1' ); ?>
    
    <h1>   <?php
    // Start our WP Query
    while ($the_query -> have_posts()) : $the_query -> the_post();
    // Display the Post Title with Hyperlink
    ?></h1>
    
    <div class="main-post">
        <img src="https://resizing.flixster.com/vK77TbbXQYgkJ2HpvPp1p_W0tj4=/ems.cHJkLWVtcy1hc3NldHMvbW92aWVzL2FkNDZiMzU2LTFmYTQtNDgwMS1iOWM5LTgxNTg2NDMxNjBmNi53ZWJw" />
        <h1> 
            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
        </h1>
        <li>
            <?php
                the_excerpt(__('(more…)')); 
            ?>
        </li>
    </div>
    <?php
    endwhile;
    wp_reset_postdata();
    ?>
