<?php
add_theme_support( 'post-thumbnails' );
include('wp-content\themes\twentytwentytwo-child\custom\function\display-api.php');
function get_day_of_week_VN()
{
    $day = date('w');
    $arr = require_once('wp-content\themes\twentytwentytwo-child\constant\day-of-week.php') ;
    switch ($day) {
        case 0:
            $day_of_week =  $arr[$day];
            break;
        default:
            $day_of_week =  "Thứ ". $arr[$day] ;  
            break;    
    }
    echo $day_of_week. " ,". get_d_m_Y_VN();
}
function get_d_m_Y_VN()
{
    return  'ngày '.current_datetime()->format('d')
            .' tháng '.current_datetime()->format('m')
            .' năm '.current_datetime()->format('Y');
}
if ( !function_exists('show_image_thumbnail') ) {
    function show_image_thumbnail($size) {
      if( !is_single() && has_post_thumbnail() && !post_password_required() || has_post_format('image') ) : ?>
      <a href="<?php the_permalink(); ?>">
      <div class="post-thumbnail"><?php the_post_thumbnail( $size ); ?></div>
      </a>
      <?php else : ?>
        <a href="<?php the_permalink(); ?>">
      <div class="post-thumbnail"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxddtPSxt3mS3QjGibU-bVEPkoBgh_852nNRuU2_CuZ2sEEJJD9VEcGBZ9OGmlv_LmGdg&usqp=CAU" alt="image empaty"></div>
      </a>
    <?php endif;
}
}

function readmore()
{
  return '…<a class="read-more" href="' . get_permalink(get_the_ID()) . '">' . __('Read More', 'congbio') . '</a>';
}
add_filter('excerpt_more', 'readmore');
?>