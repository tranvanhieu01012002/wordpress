<?php
add_theme_support( 'post-thumbnails' );
function get_day_of_week_VN($day)
{
    // $arr = require_once('./constant/day-of-week.php') ;
    $arr = array(
        '0'=> 'Chủ Nhật',
        '1'=> 'Hai',
        '2'=> 'Ba',
        '3'=> 'Tư',
        '4'=> 'Sáu',
        '5'=> 'Bảy',
    );
    switch ($day) {
        case 0:
           return $arr[$day];
        default:
        return "Thứ ". $arr[$day] ;      
    }
}

?>