<?php
class Api {

    private $url ;

    function __construct()
    {
        $this->url= API;
    }

    public function get_url()
    {
        return $this->url;
    }

    public function set_url($url)
    {
       $this->url = $url;
    }

    public function get_data()
    {
        $request = wp_remote_get($this->url);
        return json_decode( wp_remote_retrieve_body( $request ));
    }
}

?>