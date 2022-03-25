<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->database();

    }

	public function index()
	{
		$data['content'] = "website/index";
        $this->load->view('website/master', $data);
	}

	public function gallery()
	{
		$data['content'] = "website/gallery";
        $this->load->view('website/master', $data);
	}

	public function about()
	{
		$data['content'] = "website/about";
        $this->load->view('website/master', $data);
	}

	public function career()
	{
		$data['content'] = "website/career";
        $this->load->view('website/master', $data);
	}

	public function contact_us()
	{
		$data['success'] = "";
		$data['error'] = "";

		
		if(isset($_POST['contact'])){
			$name = $this->input->post('name');
			$phone = $this->input->post('phone');
			$email = $this->input->post('email');
			$comment = $this->input->post('comment');

			$ar = array("Name"=>$name,"Phone"=>$phone,"Email"=>$email,"Message"=>$comment,"Root"=>"Contact Us");
			$this->db->insert('websitecontacts',$ar);
			if($this->db->affected_rows() > 0){
				$data['success'] = "Form Submmited! We will contact you soon";
			} else{
				$data['error'] = "Something went wrong";
			}
		}

		$data['content'] = "website/contact_us";
        $this->load->view('website/master', $data);
	}

	public function enquiry()
	{
		$data['success'] = "";
		$data['error'] = "";

		
		if(isset($_POST['contact'])){
			$name = $this->input->post('name');
			$phone = $this->input->post('phone');
			$email = $this->input->post('email');
			$ar = array("Name"=>$name,"Mobile"=>$phone,"Email"=>$email);
			$this->db->insert('leads',$ar);
			if($this->db->affected_rows() > 0){
				$data['success'] = "Form Submmited! We will contact you soon";
			} else{
				$data['error'] = "Something went wrong";
			}
		}

		$data['content'] = "website/enquiry";
        $this->load->view('website/master', $data);
	}

	public function partner_with_us()
	{
		if(isset($_POST['addPartnerContacts'])){
			$name = $this->input->post('name');
			$phone = $this->input->post('phone');
			$email = $this->input->post('email');
			$comment = $this->input->post('comment');
			$hosname = $this->input->post('hosname');

			$ar = array("Name"=>$name,"Phone"=>$phone,"Email"=>$email,"Message"=>$comment,"Root"=>"Partner","HospitalName "=>$hosname);
			$this->db->insert('websitecontacts',$ar);
			if($this->db->affected_rows() > 0){
				$data['success'] = "Form Submmited! We will contact you soon";
			} else{
				$data['error'] = "Something went wrong";
			}
		}
		$data['content'] = "website/partner_with_us";
        $this->load->view('website/master', $data);
	}

	public function physiotherapy()
	{
		$data['content'] = "website/physiotherapy";
        $this->load->view('website/master', $data);
	}

	public function services_simple()
	{
		$data['content'] = "website/services_simple";
        $this->load->view('website/master', $data);
	}

	public function speech_therapy()
	{
		$data['content'] = "website/speech_therapy";
        $this->load->view('website/master', $data);
	}

	public function team()
	{
		$data['content'] = "website/team";
        $this->load->view('website/master', $data);
	}

	public function support_and_after_care()
	{
		if(isset($_POST['addSupportContacts'])){
			$name = $this->input->post('name');
			$phone = $this->input->post('phone');
			$email = $this->input->post('email');
			$comment = $this->input->post('comment');
			$supportOptions = $this->input->post('supportOptions');

			$ar = array("Name"=>$name,"Phone"=>$phone,"Email"=>$email,"Message"=>$comment,"Root"=>"Support","SupportOptions"=>$supportOptions);
			$this->db->insert('websitecontacts',$ar);
			if($this->db->affected_rows() > 0){
				$data['success'] = "Form Submmited! We will contact you soon";
			} else{
				$data['error'] = "Something went wrong";
			}
		}
		$data['content'] = "website/support_and_after_care";
        $this->load->view('website/master', $data);
	}

	public function online_audio_logical_evaluation()
	{
		$data['content'] = "website/online_audio_logical_evaluation";
        $this->load->view('website/master', $data);
	}
}
