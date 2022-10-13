<?php
get_template_part('../Controller/Controller');

class Model{

    static function query($arr){

    }

    static function  all(){
        global $wpdb;
        $query = "SELECT * FROM wp_t_products";
        return $wpdb->get_results($query);
    }

    static function one(){



    }
}


?>