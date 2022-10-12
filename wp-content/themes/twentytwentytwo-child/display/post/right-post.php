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
        <div style="display:flex" class="right-post">
            <?php show_image_thumbnail('small') ?>
            <a style="width:100px" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
        </div>
        <?php
    endwhile;
    wp_reset_postdata();
    ?>
    <?php
    $request = wp_remote_get('https://61bc10c1d8542f0017824531.mockapi.io/films');
    $data = json_decode( wp_remote_retrieve_body( $request ) );
    display_api($data);
    ?>
    </div>
</ul>
