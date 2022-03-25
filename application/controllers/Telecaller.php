<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Telecaller extends CI_Controller {

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

		$data['page_title'] = "Telecaller Dashboard";
		$data['content'] = "telecaller_dashboard";
		$this->load->view('template', $data);

		
	}

    public function follow_leads()
	{

        $data['success_msg'] = "";
		$data['error_msg'] = "";

        if(isset($_POST['add_lead_remark'])){
            $id = $this->input->post('leadid');
            $remark = $this->input->post('lead_remark');
            $lead_status = $this->input->post('lead_status');
            
            $date1 = strtr($this->input->post('follow_date'), '/', '-');
        $follow_date = date('Y-m-d', strtotime($date1));
            $follow_time = $this->input->post('follow_time');
            $branch = $this->input->post('branch');
            
            $date = date("Y-m-d");
            $ar = array('Status'=>$lead_status,'Remark'=>$remark,'Date'=>$date,'Follow_Date'=>$follow_date,'Follow_Time'=>$follow_time);

            $this->db->where('Id',$id);
            $query = $this->db->update("leads",$ar);
            if($query){

                if($branch != ""){
                    $this->db->trans_start();
                    $this->db->where('Id',$id);
                    $query = $this->db->get('leads');
                    $data = $query->result();
                    $name = $data[0]->Name;
                    $mobile = $data[0]->Mobile;
                    $email = $data[0]->Email;

                    $ar = array('Name'=>$name,'Mobile'=>$mobile,'Branch_Id'=>$branch,'Email'=>$email);
                    $this->db->insert('patient',$ar);
                    $this->db->trans_complete();
                }
            } else {
            }
        }

		$data['page_title'] = "Follow up Leads";
        $data['content'] = "follow_leads";
        $this->load->view('template', $data);
	}

    public function won_leads()
	{	

		$data['page_title'] = "Won Leads";
		$data['content'] = "won_leads";
		$this->load->view('template', $data);
		
	}

    public function lost_leads()
	{	

		$data['page_title'] = "Lost Leads";
		$data['content'] = "Lost_leads";
		$this->load->view('template', $data);
		
	}

    public function hold_leads()
	{	

		$data['page_title'] = "Hold Leads";
		$data['content'] = "hold_leads";
		$this->load->view('template', $data);
		
	}
}
