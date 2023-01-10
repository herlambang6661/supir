<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // if ($this->session->userdata('status') != 'login') {
        //     redirect(base_url());
        // }

        $models = array(
            'LoginModel' => 'login',
        );
        // Load Multiple Models
        foreach ($models as $file => $object_name) {
            $this->load->model($file, $object_name);
        }

        $this->load->library('session');
		$this->load->library('user_agent');
    }
    public function index()
    {
        $this->load->view('/template/_header_login.php');
        $this->load->view('loginView');
    }

    public function checklogin()
    {
		$id 		= $this->input->post('selUser');
		$pass 		= $this->input->post('pass');

		$user_id 	= $this->login->cekPswd($id, $pass);

		if ($this->agent->is_browser()) {
			$agent = $this->agent->browser() . ' ' . $this->agent->version();
		} elseif ($this->agent->is_mobile()) {
			$agent = $this->agent->mobile();
		} else {
			$agent = 'Data user gagal di dapatkan';
		}		

		if (!empty($user_id)) {

			$data_session = array(
				'nama' => $user_id[0]->nama,
				'level' => $user_id[0]->level,
				'user_id' => $user_id[0]->id_user,
				'status' => "login"
			);

			$datalog = array(
				'event' => "login",
				'nama' => $user_id[0]->nama,
				'level' => $user_id[0]->level,
				'userid' => $user_id[0]->id_user,
				'status' => "success",
				'browser' => $agent,
				'OS' => $this->agent->platform()
			);

			$this->login->input($datalog, 'sp_log');

			$this->session->set_userdata($data_session);
			echo "success";
		} else {
			$datalog = array(
				'event' => "login",
				'nama' => $id,
				'password' => $pass,
				'level' => $user_id[0]->level,
				'userid' => $user_id[0]->id_user,
				'status' => "error",
				'browser' => $agent,
				'OS' => $this->agent->platform()
			);
			$this->login->input($datalog, 'sp_log');
			echo "error";
		}

    }
    
    function logout()
    {
        $datalog = array(
            'event' => "logout",
            'nama' => $this->session->userdata("nama"),
            'level' => $this->session->userdata("level"),
            'userid' => $this->session->userdata("user_id"),
            'status' => "success"
        );

        $this->login->input($datalog, 'sp_log');

        $this->session->sess_destroy();

        $this->load->view('/template/_header_login.php');
        $this->load->view('loginView');
    }

}