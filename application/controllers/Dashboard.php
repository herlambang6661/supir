<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != 'login') {
            redirect(base_url());
        }
        $models = array(
            'HomeModel' => 'home',
        );
        // Load Multiple Models
        foreach ($models as $file => $object_name) {
            $this->load->model($file, $object_name);
        }
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('/template/_header.php');
        $this->load->view('DashView');
    }
}
?>