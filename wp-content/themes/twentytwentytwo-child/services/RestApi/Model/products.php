<?php

function get_products(){
    global $wpdb;
    $query = "SELECT * FROM wp_t_products";
    return  $wpdb->query($query);
}

?>