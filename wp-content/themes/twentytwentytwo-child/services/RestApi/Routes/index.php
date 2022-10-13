<?php

get_template_part('../Controller/Controller');

class BaseRoute{

    public function get($action)
    {
        return register_rest_route( 'wp', $action, [
            'methods' =>  "GET",
            'callback' => [$this,'use_controller'],
            'permission_callback' => '__return_true',
        ]);  
    }

    public function use_controller()
    {
        $product = new Controller();
        return $product->index();
    }
}
?>