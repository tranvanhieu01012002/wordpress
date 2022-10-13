<?php
get_template_part('../Model/index');

class Controller
{
    public function index(){
        return Model::all();
    }
}

?>