<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reception extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('main_model');
        $this->load->library('session');

		if ($this->session->userdata('Username') == "" || $this->session->userdata('Username') == null)
            echo "<script>window.location.replace('" . base_url . "login')</script>";

        if($this->main_model->getUsersCount() == 0) {
            echo "<script>window.location.replace(`". base_url."setup`)</script>";
        }

    }

	public function index()
	{	
		$data['success_msg'] = "";
		$data['error_msg'] = "";

		if(isset($_POST['add_appoitment'])){
            $patient = $this->input->post('patient');
            $drid = $this->input->post('drid');
            $note = $this->input->post('note');
            
            $date1 = strtr($this->input->post('date'), '/', '-');
        $date = date('Y-m-d', strtotime($date1));
			$branchid = $this->session->userdata('Branch_Id');
			$userid = $this->session->userdata('Id');

            $drtype = $this->main_model->getUserDataById($drid)[0]->Role;

            $ar = array("Patient_Id"=>$patient,"Doctor_Type"=>$drtype,"Doctor_Id"=>$drid,"User_Id"=>$userid,"Note"=>$note,'Date'=>$date,'Branch_Id'=>$branchid);
            $this->db->insert("appoitment",$ar);
            if($this->db->affected_rows() > 0)
                $data['success_msg'] = "Appoitment Scheduled";
            else
                $data['error_msg'] = "Something went wrong";
        }

		$data['page_title'] = "Reception Dashboard";
		$data['content'] = "reception_dashboard";
		$this->load->view('template', $data);

		
	}

    
}
