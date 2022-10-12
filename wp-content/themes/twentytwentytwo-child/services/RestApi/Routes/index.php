<?php
class Route{
    public static function get($action,$fuction)
    {
        register_rest_route( 'wp', $action, [
            'methods' => 'GET',
            'callback' => $fuction,
            'permission_callback' => '__return_true',
          ] );
    }
}
?>