<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors extends CI_Controller {

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

	public function internal()
	{	
		if(isset($_POST['add_doctor_remark'])){
            $apid = $this->input->post('apId');
            $remark = $this->input->post('remark');
            

            $date1 = strtr($this->input->post('follow_up_date'), '/', '-');
        $follow_date = date('Y-m-d', strtotime($date1));
        
            $ar = array("Remark"=>$remark,"Status"=>1,'Follow_Date'=>$follow_date);
            $this->db->where("Id",$apid);
            if($this->db->update("appoitment",$ar)):
                $insar = array("User_Id"=>$this->session->userdata('Id'), "Appoitment_Id"=>$apid,"Points"=>1);
                $this->db->insert("rewards",$insar);

                $department_id = $this->input->post('recommended');
                if($department_id != "0"){
                    $patient_Id = $this->main_model->getAppoitmentById($apid)[0]->Patient_Id;
                    $insaptar = array("Patient_Id"=> $patient_Id,"Branch_Id"=> $this->session->userdata('Branch_Id'),"Doctor_Id"=>$this->session->userdata('Id'),"Department_Id"=>$department_id);
                    $this->db->insert("recommend_patient",$insaptar);
                }
                $data['success_msg'] = "Remark Added";
            else:
                $data['error_msg'] = "Something went wrong";
            endif;
        } 
		
		$data['page_title'] = "Internal Professional Dashboard";
		$data['content'] = "internal_dashboard";
		$this->load->view('template', $data);

	}

    public function external()
	{	
		if(isset($_POST['add_doctor_remark'])){
            $apid = $this->input->post('apId');
            $remark = $this->input->post('remark');
            

            $date1 = strtr($this->input->post('follow_up_date'), '/', '-');
        $follow_date = date('Y-m-d', strtotime($date1));
        
            $ar = array("Remark"=>$remark,"Status"=>1,'Follow_Date'=>$follow_date);
            $this->db->where("Id",$apid);
            if($this->db->update("appoitment",$ar)):
                $insar = array("User_Id"=>$this->session->userdata('Id'), "Appoitment_Id"=>$apid,"Points"=>1);
                $this->db->insert("rewards",$insar);

                $department_id = $this->input->post('recommended');
                if($department_id != "0"){
                    $patient_Id = $this->main_model->getAppoitmentById($apid)[0]->Patient_Id;
                    $insaptar = array("Patient_Id"=> $patient_Id,"Branch_Id"=> $this->session->userdata('Branch_Id'),"Doctor_Id"=>$this->session->userdata('Id'),"Department_Id"=>$department_id);
                    $this->db->insert("recommend_patient",$insaptar);
                }
                $data['success_msg'] = "Remark Added";
            else:
                $data['error_msg'] = "Something went wrong";
            endif;
        } 

		$data['page_title'] = "External Professional Dashboard";
		$data['content'] = "external_dashboard";
		$this->load->view('template', $data);

	}

    // public function rehab()
	// {	
		
	// 	$data['page_title'] = "TRS Manager Dashboard";
	// 	$data['content'] = "rehab_dashboard";
	// 	$this->load->view('template', $data);

	// }
}
