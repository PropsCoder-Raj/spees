<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

	public function progress_report()
	{
        $msg = "";
		if(isset($_POST['add_progress_report'])){
			$patientName = $this->input->post('patientName');
            $patientId = $this->input->post('patientId');
            $clinician = $this->input->post('clinician');
            $provisionalDiagnosis = $this->input->post('provisionalDiagnosis');
            $noSessionWeeks = $this->input->post('noSessionWeeks');

            $ar = array("PatientName"=>$patientName,"PatientId"=>$patientId, "Clinician"=>$clinician, "ProvisionalDiagnosis"=>$provisionalDiagnosis ,"NumberOfWeeksSession"=>$noSessionWeeks);
            $this->db->insert("progress_report",$ar);
            $insert_id = $this->db->insert_id();

            if($this->db->affected_rows() > 0){
            	for ($a = 0; $a < count($_POST["baseLine"]); $a++)
		        {
		        	$baseLine = $_POST["baseLine"][$a];
		        	$goal = $_POST["goal"][$a];
		        	$progress = $_POST["progress"][$a];
            		$arr = array("baseLine"=>$baseLine,"Goal"=>$goal, "Progress"=>$progress, "PregressReportId"=>$insert_id);
		            $this->db->insert("progress_report_table",$arr);
            		if(count($_POST["baseLine"]) === ($a - 1)){
		                echo `<script>window.alert("Add Progress Report")</script>`;
            		}
		        }
            }else{
            	echo `<script>window.alert("SomeThing Went Wrong")</script>`;
            }
		}
		$data['page_title'] = "Progress Report";
		$data['content'] = "progress_report";
		$this->load->view('template', $data);
	}

	public function index()
	{
		if($this->session->userdata("Role") == 1){
			$data['page_title'] = "Admin Dashboard";
			$data['content'] = "admin_dashboard";
			$this->load->view('template', $data);
		}

		if($this->session->userdata("Role") == 2){
			header('Location: '.base_url.'internal/dashboard');
		}

		if($this->session->userdata("Role") == 3){
			header('Location: '.base_url.'external/dashboard');
		}

		if($this->session->userdata("Role") == 4){
			header('Location: '.base_url.'reception/dashboard');
		}

		if($this->session->userdata("Role") == 5){
			header('Location: '.base_url.'telecaller/dashboard');
		}

		if($this->session->userdata("Role") == 6){
			header('Location: '.base_url.'reception/dashboard');
		}

		
	}
}
