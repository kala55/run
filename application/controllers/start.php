<?php

class Start extends CI_Controller
{
    var $base;

    function __construct()
    {
        parent::__construct();
        $this->base = $this->config->item('base_url');
    }

    function hello()
    {
        $data['base'] = $this->base;
        $data['title'] = 'Welcome to this site';
        var_dump($data);
    }
}

?>