<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    var $base;

    function __construct()
    {
        parent::__construct();
        $this->base = $this->config->item('base_url');
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function test()
    {
        log_message('error', "hello");
        echo "hello world<br>";
    }

    function hello($name)
    {
        $data['base'] = $this->base;
        $data['title'] = $name.' Welcome to this site';
        var_dump($data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */