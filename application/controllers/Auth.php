<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('main_model');
        $this->load->library('session');

        if($this->main_model->getUsersCount() == 0) {
            echo "<script>window.location.replace(`". base_url."setup`)</script>";
        }

    }

	public function index()
	{
		"Not a valid path";
	}

    public function login()
	{
        $msg = "";
        if (isset($_POST['login'])) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            if($this->main_model->checkLogin($username,$password)):
                echo "<script>window.location.replace(`". base_url."dashboard`)</script>";
            else:
                $msg = "Invalid Login Id or Password";
            endif;
        }
        $data['msg'] = $msg;
        $data['page_title'] = "Login";
		$this->load->view('login',$data);
	}

    public function signout()
    {
        $this->session->sess_destroy();
        echo "<script>window.location.replace('".base_url."login');</script>";
    }

}
