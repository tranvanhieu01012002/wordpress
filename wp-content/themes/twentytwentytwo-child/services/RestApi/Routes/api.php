<?php

get_template_part('./index');

class Route extends BaseRoute {

    public function use_controller()
    {
        return ['message'=>'this is child Route'];
    }
}

?>