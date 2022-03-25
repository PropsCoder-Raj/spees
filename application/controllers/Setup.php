<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setup extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('main_model');
        $this->load->library('session');

    }

	public function index()
	{
		"Not a valid path";
	}

    public function setup()
	{
        $msg = "";
        if (isset($_POST['add_admin'])) {
            $name = $this->input->post('name');
            $username = $this->input->post('username');
            $passsword = $this->input->post('password');
            $email = $this->input->post('email');
            $mobile = $this->input->post('mobile');
            

            $ar = array("Name"=>$name,"Username"=>$username, "Password"=>$passsword, "Email"=>$email ,"Mobile"=>$mobile, "Role"=>1);
            $this->db->insert("users",$ar);

            if($this->db->affected_rows() > 0):
                echo "<script>window.location.replace(`". base_url."login`)</script>";
            else:
                $msg = "Something went wrong";
            endif;
        }
        $data['msg'] = $msg;
        $data['page_title'] = "Setup Software";
		$this->load->view('setup',$data);
	}
}
