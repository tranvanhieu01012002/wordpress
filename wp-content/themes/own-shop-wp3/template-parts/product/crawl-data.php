<?php
class crawlData{
    public function index()
    {
        global $wpdb;
        $result =  $wpdb->get_results( "SELECT * FROM wp_product_hieu");
        
        // var_dump($result)   ;
        foreach ($result as $post){
        echo  '<img src="'.$post->image.'" />';
    }
    }

}



?>