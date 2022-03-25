<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comman extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('main_model');
        $this->load->library('session');
		$this->load->library('upload');

		if ($this->session->userdata('Username') == "" || $this->session->userdata('Username') == null)
            echo "<script>window.location.replace('" . base_url . "login')</script>";

        if($this->main_model->getUsersCount() == 0) {
            echo "<script>window.location.replace(`". base_url."setup`)</script>";
        }

    }

	public function index()
	{
		if($this->session->userdata("Role") == 1){
			$data['page_title'] = "Admin Dashboard";
			$data['content'] = "admin_dashboard";
			$this->load->view('template', $data);
		}
	}

    public function invoice()
    {
        $branchid = $this->session->userdata('Branch_Id');
		$data['success_msg'] = "";
		$data['error_msg'] = "";
		$data['branchid'] = $branchid;
        $data['page_title'] = "Invoice";
        $data['content'] = "invoiceList";
        $this->load->view('template', $data);
    }

    public function print_invoice_items($id)
    {
        if($id != ""){
            $this->db->where("Id",$id);
            $query = $this->db->get("invoice");
            if($query->num_rows() > 0){
                $resultAr1 = $query->result(); 
                $patient_Id = $resultAr1[0]->Patient_Id;
                $Total_Qty = $resultAr1[0]->Total_Qty;
                $Total_Total = $resultAr1[0]->Total_Total;
                $Total_Discount = $resultAr1[0]->Total_Discount;
                $Total_Final_Amount = $resultAr1[0]->Total_Final_Amount;
                $Created_At = $resultAr1[0]->Created_At;
            }
        }

		$data['success_msg'] = "";
		$data['error_msg'] = "";
        $data['page_title'] = "Print Invoice";
        $data['content'] = "print_invoice_items";
        $data['unique_id'] = $id;
        $data['Total_Qty'] = $Total_Qty;
        $data['Total_Total'] = $Total_Total;
        $data['Total_Discount'] = $Total_Discount;
        $data['Total_Final_Amount'] = $Total_Final_Amount;
        $data['Created_At'] = $Created_At;
        $data['patient_data'] = $this->main_model->getPatientById($patient_Id);
        $data['items_data'] = $this->main_model->getInvoiceItemsData($id);
        $this->load->view('template', $data);
    }

    public function create_invoice_database()
    {
        $patient = $this->input->post('patient');
        $totalQty = $this->input->post('totalQty');
        $totalTotal = $this->input->post('totalTotal');
        $totalDiscount = $this->input->post('totalDiscount');
        $totalFinalAmount = $this->input->post('totalFinalAmount');
        
        $branchid = $this->session->userdata('Branch_Id');
        
        $ar = array("Branch_Id" => $branchid,"Patient_Id"=>$patient,"Total_Qty"=>$totalQty,"Total_Total"=>$totalTotal,"Total_Discount"=>$totalDiscount,'Total_Final_Amount'=>$totalFinalAmount);
        $this->db->insert("invoice",$ar);
        if($this->db->affected_rows() > 0){
            $insert_id = $this->db->insert_id();
            $ar = array('status'=>"success","id"=>$insert_id);
            echo json_encode($ar);
        }else{
            $ar = array('status'=>"error");
            echo json_encode($ar);
        }

    }


    public function create_invoice_items()
    {
        $Invoice_Id = $this->input->post('Invoice_Id');
        $Item_Id = $this->input->post('Item_Id');
        $Item_Name = $this->input->post('Item_Name');
        $MRP = $this->input->post('MRP');
        $Qty = $this->input->post('Qty');
        $Total = $this->input->post('Total');
        $Discount = $this->input->post('Discount');
        $Final_Amount = $this->input->post('Final_Amount');

        $ar = array("Invoice_Id"=>$Invoice_Id,"Item_Id"=>$Item_Id,"Item_Name"=>$Item_Name,"MRP"=>$MRP,"Qty"=>$Qty,'Total'=>$Total,'Discount'=>$Discount,'Final_Amount'=>$Final_Amount);
        $this->db->insert("invoice_items",$ar);
        if($this->db->affected_rows() > 0)
            $data['success_msg'] = "Appoitment Scheduled";
        else
            $data['error_msg'] = "Something went wrong";
    }

    public function create_invoice()
    {
		$data['success_msg'] = "";
		$data['error_msg'] = "";
        $data['page_title'] = "Create Invoice";
        $data['content'] = "invoice_create";
        $this->load->view('template', $data);
    }

    public function print_invoice($id)
    {
        if($id != ""){
            $branchid = $this->session->userdata('Branch_Id');
            $this->db->where("Appointment_Id",$id);
            $this->db->where("Branch_Id",$branchid);
            $query = $this->db->get("payment_receipt");
            if($query->num_rows() > 0){
                $resultAr1 = $query->result();
                $unique_id = $resultAr1[0]->Id;   
            }else{
                $queryEmpty = $this->db->get("payment_receipt");
                if($queryEmpty->num_rows() > 0){
                    $unique_id = $this->main_model->getLastPaymentReceiptId()[0]->Id + 1;   
                }else{
                    $unique_id = 1;   
                }

                $branchid = $this->session->userdata('Branch_Id');
                $ar = array("Appointment_Id	"=>$id, "Branch_Id"=> $branchid);
                $this->db->insert("payment_receipt",$ar);

            }
            $this->db->where("Id",$id);
            $queryArr1 = $this->db->get("appoitment");
            if($queryArr1->num_rows() > 0){
                $result1 = $queryArr1->result();
                $fees = $result1[0]->Fees;
                $patient_Id = $result1[0]->Patient_Id;
                $payment_mode = $result1[0]->Fees_Paid_Type;
                $date = $result1[0]->Created_on;
                $procedure_Id = $result1[0]->Procedure_Id;
                $number = $fees;
                $no = floor($number);
                $point = round($number - $no, 2) * 100;
                $hundred = null;
                $digits_1 = strlen($no);
                $i = 0;
                $str = array();
                $words = array('0' => '', '1' => 'one', '2' => 'two',
                    '3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',
                    '7' => 'seven', '8' => 'eight', '9' => 'nine',
                    '10' => 'ten', '11' => 'eleven', '12' => 'twelve',
                    '13' => 'thirteen', '14' => 'fourteen',
                    '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',
                    '18' => 'eighteen', '19' =>'nineteen', '20' => 'twenty',
                    '30' => 'thirty', '40' => 'forty', '50' => 'fifty',
                    '60' => 'sixty', '70' => 'seventy',
                    '80' => 'eighty', '90' => 'ninety');
                $digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
                while ($i < $digits_1) {
                    $divider = ($i == 2) ? 10 : 100;
                    $number = floor($no % $divider);
                    $no = floor($no / $divider);
                    $i += ($divider == 10) ? 1 : 2;
                    if ($number) {
                        $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
                        $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
                        $str [] = ($number < 21) ? $words[$number] .
                            " " . $digits[$counter] . $plural . " " . $hundred
                            :
                            $words[floor($number / 10) * 10]
                            . " " . $words[$number % 10] . " "
                            . $digits[$counter] . $plural . " " . $hundred;
                    } else $str[] = null;
                }
                $str = array_reverse($str);
                $result = implode('', $str);
                $points = ($point) ?
                    "." . $words[$point / 10] . " " . 
                        $words[$point = $point % 10] : '';
            }    
        }

		$data['success_msg'] = "";
		$data['error_msg'] = "";
        $data['page_title'] = "Print Payment Receipt";
        $data['content'] = "print_invoice";
        $data['unique_id'] = $unique_id;
        $data['fees'] = $fees;
        $data['payment_mode'] = $payment_mode;
        $data['date'] = $date;
        $data['procedure_data'] = $this->main_model->getProcedureById($procedure_Id);
        $data['patient_data'] = $this->main_model->getPatientById($patient_Id);
        $data['sum_of_rupees'] = $result . "rupees";
        $this->load->view('template', $data);
    }

    public function payment_receipt()
    {
        $branchid = $this->session->userdata('Branch_Id');
		$data['success_msg'] = "";
		$data['error_msg'] = "";
		$data['branchid'] = $branchid;
        $data['page_title'] = "Payment Receipt";
        $data['content'] = "payment_receipt";
        $this->load->view('template', $data);
    }

    public function create_payment_receipt()
    {
        $patient = $this->input->post('patient');
        $sum_of_rupees = $this->input->post('sum_of_rupees');
        $mode_of_payment = $this->input->post('mode_of_payment');
        $cheque_no = $this->input->post('cheque_no');
        $amount = $this->input->post('amount');
        $branchid = $this->session->userdata('Branch_Id');

        $ar = array("Patient_Id"=>$patient,"Branch_Id"=>$branchid,"Sum_Of_Rupees"=>$sum_of_rupees,"Mode_Of_Payment"=>$mode_of_payment,'Cheque_No'=>$cheque_no,'Amount'=>$amount);
        $this->db->insert("payment_receipt",$ar);
        if($this->db->affected_rows() > 0){
            $insert_id = $this->db->insert_id();
            $ar = array('status'=>"success","id"=>$insert_id);
            echo json_encode($ar);
        }else{
            $ar = array('status'=>"error");
            echo json_encode($ar);
        }
    }

    public function createPaymentReceiptProcedures()
    {
        $patient = $this->input->post('patient');
        $drid = $this->input->post('drid');
        $branchid = $this->session->userdata('Branch_Id');
        $userid = $this->session->userdata('Id');
        $procedure_id = $this->input->post('procedure_id');
        $payment_receipt_id = $this->input->post('payment_receipt_id');

        $drtype = $this->main_model->getUserDataById($drid)[0]->Role;

        $ar = array("Patient_Id"=>$patient,"Doctor_Id"=>$drid,"User_Id"=>$userid,'Branch_Id'=>$branchid,'Procedure_Id'=>$procedure_id,'Payment_Receipt_Id'=>$payment_receipt_id);
        $this->db->insert("payment_receipt_procedures",$ar);
        if($this->db->affected_rows() > 0)
            $data['success_msg'] = "Create Payment Receipt";
        else
            $data['error_msg'] = "Something went wrong";
    }

    public function appoitment_list()
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
        
        if(isset($_POST['add_fees'])){
            $feesApId = $this->input->post('feesApId');
            $fees = $this->input->post('feesAmount');

            $this->db->where("Id",$feesApId);
            $this->db->set("Fees",$fees);
            $this->db->update("appoitment");
            if($this->db->affected_rows() > 0)
                $data['success_msg'] = "Fees updated";
            else
                $data['error_msg'] = "Something went wrong";
        } 

		$data['page_title'] = "Appoitment List";
        $data['content'] = "appoitment_list";
        $this->load->view('template', $data);
	}

    public function waiting_appoitment_list()
	{
		$data['success_msg'] = "";
		$data['error_msg'] = "";
        $filterQuery = "";
        $data['startDate'] = (isset($_GET['startDate'])) ? $filterQuery .= " AND ap.Date >= '".$_GET['startDate']."'" : "";
        $data['endDate'] = (isset($_GET['endDate'])) ? $filterQuery .=  " AND ap.Date <= '".$_GET['endDate']."'" : "";
        $data['filterQuery'] = $filterQuery;

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
        
        if(isset($_POST['add_cancel_remark'])){
            $apid = $this->input->post('apId');
            $remark = $this->input->post('remark');

            $ar = array("Remark"=>$remark,"Status"=>0);
            $this->db->where("Id",$apid);
            if($this->db->update("appoitment",$ar)):

                $data['success_msg'] = "Remark updated";
            else:
                $data['error_msg'] = "Something went wrong";
            endif;
        }
        
        if(isset($_POST['add_fees'])){
            $feesApId = $this->input->post('feesApId');
            $fees = $this->input->post('feesAmount');

            $this->db->where("Id",$feesApId);
            $this->db->set("Fees",$fees);
            $this->db->update("appoitment");
            if($this->db->affected_rows() > 0)
                $data['success_msg'] = "Fees updated";
            else
                $data['error_msg'] = "Something went wrong";
        }
        $Department_Id = $this->session->userdata('Department_Id');
        $data['Department_Id'] = $Department_Id;
        $data['departmentformstransData'] = $this->main_model->getDepartmentFormsmasterWithDepartmentId($Department_Id);
		$data['page_title'] = "Appointment List";
        $data['content'] = "waiting_appoitment_list";
        $this->load->view('template', $data);
	}

    public function forms($form_id, $patient_Id, $action)
    {
        $msg = "";
        if($form_id == 1){
            if(isset($_POST['add_progress_report'])){
                $patientName = $this->input->post('patientName');
                $patientId = $this->input->post('patientId');
                $clinician = $this->input->post('clinician');
                $provisionalDiagnosis = $this->input->post('provisionalDiagnosis');
                $noSessionWeeks = $this->input->post('noSessionWeeks');

                $ar = array("PatientName"=>$patientName,"PatientId"=>$patientId, "Clinician"=>$clinician, "ProvisionalDiagnosis"=>$provisionalDiagnosis ,"NumberOfWeeksSession"=>$noSessionWeeks, "FormId" => $form_id);
                $this->db->insert("formsrecords",$ar);
                $insert_id = $this->db->insert_id();

                if($this->db->affected_rows() > 0){
                    for ($a = 0; $a < count($_POST["baseLine"]); $a++)
                    {
                        $baseLine = $_POST["baseLine"][$a];
                        $goal = $_POST["goal"][$a];
                        $progress = $_POST["progress"][$a];
                        $arr = array("BaseLine"=>$baseLine,"Goal"=>$goal, "Progress"=>$progress, "FormId"=>$insert_id);
                        $this->db->insert("progress_report_table",$arr);
                        
                    }
					echo "<script>window.close();</script>";
                }else{
                    echo `<script>window.alert("SomeThing Went Wrong")</script>`;
                }
            }

            if(isset($_POST['edit_progress_report'])){
                $patientName = $this->input->post('patientName');
                $patientId = $this->input->post('patientId');
                $clinician = $this->input->post('clinician');
                $provisionalDiagnosis = $this->input->post('provisionalDiagnosis');
                $noSessionWeeks = $this->input->post('noSessionWeeks');

                $update_ar = array("PatientName"=>$patientName,"PatientId"=>$patientId, "Clinician"=>$clinician, "ProvisionalDiagnosis"=>$provisionalDiagnosis ,"NumberOfWeeksSession"=>$noSessionWeeks);
                $this->db->where("FormId", $form_id);
                $this->db->where("PatientId", $patientId);
                $this->db->update("formsrecords",$update_ar);
                    for ($a = 0; $a < count($_POST["baseLine"]); $a++)
                    {
                        $baseLine = $_POST["baseLine"][$a];
                        $goal = $_POST["goal"][$a];
                        $progress = $_POST["progress"][$a];
                        $id = $_POST["formId"][$a];
                        if($this->main_model->get_count_progress_report_table($id) > 0):
                            $arr_update = array("BaseLine"=>$baseLine,"Goal"=>$goal, "Progress"=>$progress);
                            $this->main_model->update_progress_report_table($arr_update, $id);
					            echo "<script>window.close();</script>";
                        else:
                            $arr_insert = array("BaseLine"=>$baseLine,"Goal"=>$goal, "Progress"=>$progress, "FormId" => $this->main_model->getFormRecordsUsingId($form_id, $patient_Id)[0]->Id);
                            $this->db->insert("progress_report_table",$arr_insert);
					            echo "<script>window.close();</script>";
                        endif;
                    }
            }

            if($this->main_model->getFormRecordsUsingPatientId($patient_Id, $form_id) > 0){
                $data['edit'] = true;
                $data['formRecordsData'] = $this->main_model->getFormRecordsUsingId($form_id, $patient_Id);
                $data['progressReportData'] = $this->main_model->get_progress_report_table($this->main_model->getFormRecordsUsingId($form_id, $patient_Id)[0]->Id);
            }else{
                $data['edit'] = false;
            }
            
            $data['formsData'] = $this->main_model->getSingleFormsmaster($form_id);
            $data['patientData'] = $this->main_model->getPatientData($patient_Id)[0];
            $data['page_title'] = "Form | Progress Report";
		    $data['content'] = "form_1_progress_report";
            $data['action'] = $action;
            $this->load->view('template', $data);
        } 

        if($form_id == 2){
            if(isset($_POST['add_speech_lesson_plan'])){
                $patientName = $this->input->post('patientName');
                $patientId = $this->input->post('patientId');
                $clinician = $this->input->post('clinician');
                $provisionalDiagnosis = $this->input->post('provisional_diagnosis');
                $noSessionWeeks = $this->input->post('no_of_session_weeks');
                $age = $this->input->post('age');
                $date1 = strtr($this->input->post('date'), '/', '-');
                $date = date('Y-m-d', strtotime($date1));
                $gender = $this->input->post('gender');

                $ar = array("PatientName"=>$patientName,"PatientId"=>$patientId, "Clinician"=>$clinician, "ProvisionalDiagnosis"=>$provisionalDiagnosis ,"NumberOfWeeksSession"=>$noSessionWeeks, "Age"=> $age, "Gender"=> $gender, "Date"=> $date, "FormId" => $form_id);
                $this->db->insert("formsrecords",$ar);
                $insert_id = $this->db->insert_id();

                if($this->db->affected_rows() > 0){
                    for ($a = 0; $a < count($_POST["baseLine"]); $a++)
                    {
                        $baseLine = $_POST["baseLine"][$a];
                        $goal = $_POST["goal"][$a];
                        $activity = $_POST["activity"][$a];
                        $reinforcement = $_POST["reinforcement"][$a];
                        $arr = array("BaseLine"=>$baseLine,"Goal"=>$goal, "Activity"=>$activity, "Reinforcement"=>$reinforcement, "FormId"=>$insert_id);
                        $this->db->insert("speech_lesson_plan_table",$arr);
                    }
					echo "<script>window.close();</script>";
                }else{
                    echo `<script>window.alert("SomeThing Went Wrong")</script>`;
                }
            }

            if(isset($_POST['edit_speech_lesson_plan'])){
                $patientName = $this->input->post('patientName');
                $patientId = $this->input->post('patientId');
                $clinician = $this->input->post('clinician');
                $provisionalDiagnosis = $this->input->post('provisional_diagnosis');
                $noSessionWeeks = $this->input->post('no_of_session_weeks');
                $age = $this->input->post('age');
                $date1 = strtr($this->input->post('date'), '/', '-');
                $date = date('Y-m-d', strtotime($date1));
                $gender = $this->input->post('gender');

                $update_ar = array("PatientName"=>$patientName,"PatientId"=>$patientId, "Clinician"=>$clinician, "ProvisionalDiagnosis"=>$provisionalDiagnosis ,"NumberOfWeeksSession"=>$noSessionWeeks, "Age"=> $age, "Gender"=> $gender, "Date"=> $date, "FormId" => $form_id);
                $this->db->where("FormId", $form_id);
                $this->db->where("PatientId", $patientId);
                $this->db->update("formsrecords",$update_ar);
                    for ($a = 0; $a < count($_POST["baseLine"]); $a++)
                    {
                        $baseLine = $_POST["baseLine"][$a];
                        $goal = $_POST["goal"][$a];
                        $activity = $_POST["activity"][$a];
                        $reinforcement = $_POST["reinforcement"][$a];
                        $id = $_POST["formId"][$a];
                        if($this->main_model->get_count_speech_lesson_plan_table($id) > 0):
                            $arr_update = array("Goal"=>$goal,"BaseLine"=>$baseLine,"Activity"=>$activity, "Reinforcement"=>$reinforcement);
                            $this->main_model->update_speech_lesson_plan_table($arr_update, $id);
					            echo "<script>window.close();</script>";
                        else:
                            $arr_insert = array("Goal"=>$goal,"BaseLine"=>$baseLine, "Activity"=>$activity, "Reinforcement"=>$reinforcement, "FormId"=> $this->main_model->getFormRecordsUsingId($form_id, $patient_Id)[0]->Id);
                            $this->db->insert("speech_lesson_plan_table",$arr_insert);
					            echo "<script>window.close();</script>";
                        endif;
                    }
            }

            if($this->main_model->getFormRecordsUsingPatientId($patient_Id, $form_id) > 0){
                $data['edit'] = true;
                $data['formRecordsData'] = $this->main_model->getFormRecordsUsingId($form_id, $patient_Id);
                $data['speechLessonPlanData'] = $this->main_model->get_speech_lesson_plan_table($this->main_model->getFormRecordsUsingId($form_id, $patient_Id)[0]->Id);
            }else{
                $data['edit'] = false;
            }

            $data['formsData'] = $this->main_model->getSingleFormsmaster($form_id);
            $data['patientData'] = $this->main_model->getPatientData($patient_Id)[0];
            $data['page_title'] = "Form | Speech Lesson Plan";
		    $data['content'] = "form_2_speech_lesson_plan";
            $data['action'] = $action;
            $this->load->view('template', $data);
        }

        if($form_id == 3){

            if(isset($_POST['add_case_history'])){
                $patientName = $this->input->post('patientName');
                $address = $this->input->post('address');
                $age = $this->input->post('age');
                $dob = $this->input->post('dob');
                $reffred_by = $this->input->post('reffred_by');
                $date1 = strtr($this->input->post('date'), '/', '-');
        $date = date('Y-m-d', strtotime($date1));

                $ar = array("PatientName"=>$patientName, "PatientId"=>$patient_Id,"Address"=>$address, "DOB"=>$dob, "Reffered_By"=>$reffred_by, "Age"=> $age, "Date"=> $date, "FormId" => $form_id);
                $this->db->insert("formsrecords",$ar);
                $insert_id = $this->db->insert_id();

                if($this->db->affected_rows() > 0){
                        
                    $convcern = $this->input->post('convcern');
                    $birth_history = $this->input->post('birth_history');
                    $neck_holding = $this->input->post('neck_holding');
                    $crawling = $this->input->post('crawling');
                    $walking = $this->input->post('walking');
                    $speech = $this->input->post('speech');
                    $sentence = $this->input->post('sentence');
                    $past_history = $this->input->post('past_history');
                    $school_history = $this->input->post('school_history');
                    $present_class = $this->input->post('present_class');
                    $observations = $this->input->post('observations');
                    $plan = $this->input->post('plan');
                    $recommendation = $this->input->post('recommendation');

                    $array = array("Convcern"=>$convcern, "Birth_History"=>$birth_history, "Neck_Holding"=>$neck_holding, "Crawling"=>$crawling, "Walking"=>$walking, "Speech"=> $speech, "Sentence"=> $sentence, 
                    "Past_History"=> $past_history, "School_History" => $school_history, "Present_Class" => $present_class, "Observations" => $observations, "Plan" => $plan, "Recommendation" => $recommendation, "FormId" => $insert_id);
                    $this->db->insert("case_history",$array);
                    if($this->db->affected_rows() > 0){
					    echo "<script>window.close();</script>";
                    }    
                }else{
                    echo `<script>window.alert("SomeThing Went Wrong")</script>`;
                }
            }    

            
            if(isset($_POST['edit_case_history'])){
                $patientName = $this->input->post('patientName');
                $address = $this->input->post('address');
                $age = $this->input->post('age');
                $dob = $this->input->post('dob');
                $reffred_by = $this->input->post('reffred_by');
                $date1 = strtr($this->input->post('date'), '/', '-');
        $date = date('Y-m-d', strtotime($date1));

                $update_ar = array("PatientName"=>$patientName, "PatientId"=>$patient_Id,"Address"=>$address, "DOB"=>$dob, "Reffered_By"=>$reffred_by, "Age"=> $age, "Date"=> $date, "FormId" => $form_id);
                $this->db->where("FormId", $form_id);
                $this->db->where("PatientId", $patient_Id);
                $this->db->update("formsrecords",$update_ar);

                    $convcern = $this->input->post('convcern');
                    $birth_history = $this->input->post('birth_history');
                    $neck_holding = $this->input->post('neck_holding');
                    $crawling = $this->input->post('crawling');
                    $walking = $this->input->post('walking');
                    $speech = $this->input->post('speech');
                    $sentence = $this->input->post('sentence');
                    $past_history = $this->input->post('past_history');
                    $school_history = $this->input->post('school_history');
                    $present_class = $this->input->post('present_class');
                    $observations = $this->input->post('observations');
                    $plan = $this->input->post('plan');
                    $recommendation = $this->input->post('recommendation');

                    $update_array = array("Convcern"=>$convcern, "Birth_History"=>$birth_history, "Neck_Holding"=>$neck_holding, "Crawling"=>$crawling, "Walking"=>$walking, "Speech"=> $speech, "Sentence"=> $sentence, 
                    "Past_History"=> $past_history, "School_History" => $school_history, "Present_Class" => $present_class, "Observations" => $observations, "Plan" => $plan, "Recommendation" => $recommendation);
                    $this->main_model->update_case_history($update_array, $this->main_model->getFormRecordsUsingId($form_id, $patient_Id)[0]->Id);
					echo "<script>window.close();</script>";
            }    

            if($this->main_model->getFormRecordsUsingPatientId($patient_Id, $form_id) > 0){
                $data['edit'] = true;
                $data['formRecordsData'] = $this->main_model->getFormRecordsUsingId($form_id, $patient_Id);
                $data['caseHistoryData'] = $this->main_model->get_case_history($this->main_model->getFormRecordsUsingId($form_id, $patient_Id)[0]->Id);
            }else{
                $data['edit'] = false;
            }

            $data['formsData'] = $this->main_model->getSingleFormsmaster($form_id);
            $data['patientData'] = $this->main_model->getPatientData($patient_Id)[0];
            $data['page_title'] = "Form | Case History";
		    $data['content'] = "form_3_case_history";
            $data['action'] = $action;
            $this->load->view('template', $data);
        }

        if($form_id == 4){

            if(isset($_POST['add_aphasia_other_neuro_disorder_poforma'])){

                $provisionalDiagnosis = $this->input->post('provisionalDiagnosis');

                $ar_form = array("PatientId"=>$patient_Id, "ProvisionalDiagnosis"=>$provisionalDiagnosis ,"FormId" => $form_id);
                $this->db->insert("formsrecords",$ar_form);
                $insert_id = $this->db->insert_id();

                if($this->db->affected_rows() > 0){

                    $language_commonly_use = $_POST["language_commonly_use"];
                    $occupation = $_POST["occupation"];
                    $motor_physical_status = $_POST["motor_physical_status"];
                    $gait = $_POST["gait"];
                    $premorbidHooby = $_POST["premorbidHooby"];
                    $postmorbidHobby = $_POST["postmorbidHobby"];
                    $communication_behaviour = $_POST["communication_behaviour"];
                    $changes_in_speech_mechanism = $_POST["changes_in_speech_mechanism"];
                    $associated_problem = $_POST["associated_problem"];

                    $ar_ao = array("Language_Commonly_Use"=>$language_commonly_use, "Occupation"=>$occupation ,"Motor_Shysical_Status" => $motor_physical_status, "Gait"=>$gait ,"Premorbid_Hobbies_Intrests" => $premorbidHooby, 
                    "Postmorbid_Hobbies_Intrests"=>$postmorbidHobby ,"Communication_Behaviour" => $communication_behaviour,"Changes_In_Speech_Mechanism	" => $changes_in_speech_mechanism,"Associated_Problem" => $associated_problem,
                    "FormId" => $insert_id);
                    $this->db->insert("aphasia_other_neuro_disorder_poforma",$ar_ao);

                    if($this->db->affected_rows() > 0){
                        for ($a = 0; $a < count($_POST["language_known"]); $a++)
                        {
                            $language_known = $_POST["language_known"][$a];
                            $pre_comprehend = $_POST["pre_comprehend"][$a];
                            $pre_speak = $_POST["pre_speak"][$a];
                            $pre_read = $_POST["pre_read"][$a];
                            $pre_write = $_POST["pre_write"][$a];
                            $post_comprehend = $_POST["post_comprehend"][$a];
                            $post_speak = $_POST["post_speak"][$a];
                            $post_read = $_POST["post_read"][$a];
                            $post_write = $_POST["post_write"][$a];


                            $arr = array("Language_Known"=>$language_known,"Pre_comprehend"=>$pre_comprehend, "Pre_speak"=>$pre_speak, "Pre_read"=>$pre_read, "Pre_write" => $pre_write,
                            "Post_comprehend"=>$post_comprehend, "Post_speak"=>$post_speak, "Post_read"=>$post_read, "Post_write" => $post_write,"FormId"=>$insert_id);
                            $this->db->insert("language_history",$arr);
                        }
                        echo "<script>window.close();</script>";
                    }    
                }else{
                    echo `<script>window.alert("SomeThing Went Wrong")</script>`;
                }

                
            }    

            
            if(isset($_POST['edit_aphasia_other_neuro_disorder_poforma'])){
                $provisionalDiagnosis = $this->input->post('provisionalDiagnosis');

                $ar_form = array("ProvisionalDiagnosis"=>$provisionalDiagnosis);
                $this->db->where("FormId", $form_id);
                $this->db->where("PatientId", $patient_Id);
                $this->db->update("formsrecords",$ar_form);

                $language_commonly_use = $_POST["language_commonly_use"];
                $occupation = $_POST["occupation"];
                $motor_physical_status = $_POST["motor_physical_status"];
                $gait = $_POST["gait"];
                $premorbidHooby = $_POST["premorbidHooby"];
                $postmorbidHobby = $_POST["postmorbidHobby"];
                $communication_behaviour = $_POST["communication_behaviour"];
                $changes_in_speech_mechanism = $_POST["changes_in_speech_mechanism"];
                $associated_problem = $_POST["associated_problem"];

                $update_array = array("Language_Commonly_Use"=>$language_commonly_use, "Occupation"=>$occupation ,"Motor_Shysical_Status" => $motor_physical_status, "Gait"=>$gait ,"Premorbid_Hobbies_Intrests" => $premorbidHooby, 
                "Postmorbid_Hobbies_Intrests"=>$postmorbidHobby ,"Communication_Behaviour" => $communication_behaviour,"Changes_In_Speech_Mechanism	" => $changes_in_speech_mechanism,"Associated_Problem" => $associated_problem);

                
                $this->main_model->update_aphasia_other_neuro_disorder_poforma($update_array, $this->main_model->getFormRecordsUsingId($form_id, $patient_Id)[0]->Id);

                for ($a = 0; $a < count($_POST["language_known"]); $a++)
                    {
                        $language_known = $_POST["language_known"][$a];
                        $pre_comprehend = $_POST["pre_comprehend"][$a];
                        $pre_speak = $_POST["pre_speak"][$a];
                        $pre_read = $_POST["pre_read"][$a];
                        $pre_write = $_POST["pre_write"][$a];
                        $post_comprehend = $_POST["post_comprehend"][$a];
                        $post_speak = $_POST["post_speak"][$a];
                        $post_read = $_POST["post_read"][$a];
                        $post_write = $_POST["post_write"][$a];
                        $id = $_POST["formId"][$a];

                        if($this->main_model->get_count_language_history($id) > 0):
                            $arr_update = array("Language_Known"=>$language_known,"Pre_comprehend"=>$pre_comprehend, "Pre_speak"=>$pre_speak, "Pre_read"=>$pre_read, "Pre_write" => $pre_write,
                            "Post_comprehend"=>$post_comprehend, "Post_speak"=>$post_speak, "Post_read"=>$post_read, "Post_write" => $post_write);
                            $this->main_model->update_language_history($arr_update, $id);
					            echo "<script>window.close();</script>";
                        else:
                            $arr_insert = array("Language_Known"=>$language_known,"Pre_comprehend"=>$pre_comprehend, "Pre_speak"=>$pre_speak, "Pre_read"=>$pre_read, "Pre_write" => $pre_write,
                            "Post_comprehend"=>$post_comprehend, "Post_speak"=>$post_speak, "Post_read"=>$post_read, "Post_write" => $post_write, "FormId" => $this->main_model->getFormRecordsUsingId($form_id, $patient_Id)[0]->Id);
                            $this->db->insert("language_history",$arr_insert);
					            echo "<script>window.close();</script>";
                        endif;
                    }

            }    

            if($this->main_model->getFormRecordsUsingPatientId($patient_Id, $form_id) > 0){
                $data['edit'] = true;
                $data['formRecordsData'] = $this->main_model->getFormRecordsUsingId($form_id, $patient_Id);
                $data['aoData'] = $this->main_model->get_aphasia_other_neuro_disorder_poforma($this->main_model->getFormRecordsUsingId($form_id, $patient_Id)[0]->Id);
                $data['languageHistoryData'] = $this->main_model->get_language_history($this->main_model->getFormRecordsUsingId($form_id, $patient_Id)[0]->Id);
            }else{
                $data['edit'] = false;
            }

            $data['formsData'] = $this->main_model->getSingleFormsmaster($form_id);
            $data['patientData'] = $this->main_model->getPatientData($patient_Id)[0];
            $data['page_title'] = "Form | Aphasia & other neuro disorder-poforma";
		    $data['content'] = "form_4_Aphasia_&_other_neuro_disorder_poforma";
            $data['action'] = $action;
            $this->load->view('template', $data);
        }

        if($form_id == 5){

            if(isset($_POST['add_articulation_proformaData'])){

                
                $patientName = $this->input->post('patientName');
                $patientId = $this->input->post('patientId');
                $provisionalDiagnosis = $this->input->post('provisionalDiagnosis');
                $age = $this->input->post('age');
                $date1 = strtr($this->input->post('date'), '/', '-');
        $date = date('Y-m-d', strtotime($date1));
                $gender = $this->input->post('gender');

                $ar = array("PatientName"=>$patientName,"PatientId"=>$patient_Id, "ProvisionalDiagnosis"=>$provisionalDiagnosis ,"Age"=> $age, "Gender"=> $gender, "Date"=> $date, "FormId" => $form_id);
                $this->db->insert("formsrecords",$ar);
                
                $insert_id = $this->db->insert_id();

                if($this->db->affected_rows() > 0){

                    $articulatory_errors_associated_with_structural_deficits = $_POST["articulatory_errors_associated_with_structural_deficits"];
                    $self_awareness_about_the_problem = $_POST["self_awareness_about_the_problem"];
                    $parent_awareness_about_the_problem = $_POST["parent_awareness_about_the_problem"];
                    $self_reaction_to_the_problem = $_POST["self_reaction_to_the_problem"];
                    $parent_reaction_to_the_problem = $_POST["parent_reaction_to_the_problem"];
                    $self_avoidance_behaviour = $_POST["self_avoidance_behaviour"];
                    $parent_avoidance_behaviour = $_POST["parent_avoidance_behaviour"];
                    $self_articulation_defect = $_POST["self_articulation_defect"];
                    $parent_articulation_defect = $_POST["parent_articulation_defect"];

                    $rhyming = $_POST["rhyming"];
                    $blending = $_POST["blending"];
                    $syllabification_segmentation = $_POST["syllabification_segmentation"];
                    $Consistancy_errors = $_POST["Consistancy_errors"];
                    $rate_speech = $_POST["rate_speech"];
                    $rate_speech_word = $_POST["rate_speech_word"];
                    $Intelligibility_Ratin_Scale = $_POST["Intelligibility_Ratin_Scale"];
                    $auditory_discrimination = $_POST["auditory_discrimination"];
                    $auditory = $_POST["auditory"];
                    $audio_visual = $_POST["audio_visual"];
                    $Audio_visual_graphic = $_POST["Audio_visual_graphic"];
                    $motokinesthetic = $_POST["motokinesthetic"];
                    $ddk_rate = $_POST["ddk_rate"];
                    $phonological_process_error_analysis = $_POST["phonological_process_error_analysis"];
                    $recording_date = $_POST["recording_date"];

                    $reference_no = $_POST["reference_no"];
                    $remarks = $_POST["remarks"];
                    $recommendations = $_POST["recommendations"];

                    $ar_ao = array("Articulatory_errors_associated_with_structural_deficits	"=>$articulatory_errors_associated_with_structural_deficits, "Self_Awareness_about_the_problem"=>$self_awareness_about_the_problem ,
                    "Parent_Awareness_about_the_problem" => $parent_awareness_about_the_problem, "Self_Reaction_to_the_problem"=>$self_reaction_to_the_problem ,"Parent_Reaction_to_the_problem" => $parent_reaction_to_the_problem, 
                    "Self_Avoidance_Behaviour"=>$self_avoidance_behaviour ,"Parent_Avoidance_Behaviour" => $parent_avoidance_behaviour,"Self_Articulation_Defect" => $self_articulation_defect,
                    "Parent_Articulation_Defect" => $parent_articulation_defect,"Rhyming" => $rhyming,"Blending" => $blending,"Syllabification_Segmentation" => $syllabification_segmentation,
                    "Consistancy_errors" => $Consistancy_errors,"Rate_Speech" => $rate_speech,"Rate_Speech_Word" => $rate_speech_word,"Intelligibility_Ratin_Scale" => $Intelligibility_Ratin_Scale,
                    "Auditory_Discrimination" => $auditory_discrimination,"Auditory" => $auditory,"Audio_Visual" => $audio_visual,"Audio_Visual_Graphic" => $Audio_visual_graphic,
                    "Recording_Date" => $recording_date,"Reference_No" => $reference_no,"Remarks" => $remarks, "Recommendations" => $recommendations,"FormId" => $insert_id);
                    $this->db->insert("articulation_proforma",$ar_ao);

                    if($this->db->affected_rows() > 0){
                        echo "<script>window.close();</script>";
                    }    
                }else{
                    echo `<script>window.alert("SomeThing Went Wrong")</script>`;
                }

                
            }    

            if(isset($_POST['edit_articulation_proformaData'])){

                
                $patientName = $this->input->post('patientName');
                $patientId = $this->input->post('patientId');
                $provisionalDiagnosis = $this->input->post('provisionalDiagnosis');
                $age = $this->input->post('age');
                $date1 = strtr($this->input->post('date'), '/', '-');
        $date = date('Y-m-d', strtotime($date1));
                $gender = $this->input->post('gender');

                $update_ar = array("PatientName"=>$patientName,"PatientId"=>$patientId, "ProvisionalDiagnosis"=>$provisionalDiagnosis ,"Age"=> $age, "Gender"=> $gender, "Date"=> $date, "FormId" => $form_id);
                
                $this->db->where("FormId", $form_id);
                $this->db->where("PatientId", $patientId);
                $this->db->update("formsrecords",$update_ar);

                    $articulatory_errors_associated_with_structural_deficits = $_POST["articulatory_errors_associated_with_structural_deficits"];
                    $self_awareness_about_the_problem = $_POST["self_awareness_about_the_problem"];
                    $parent_awareness_about_the_problem = $_POST["parent_awareness_about_the_problem"];
                    $self_reaction_to_the_problem = $_POST["self_reaction_to_the_problem"];
                    $parent_reaction_to_the_problem = $_POST["parent_reaction_to_the_problem"];
                    $self_avoidance_behaviour = $_POST["self_avoidance_behaviour"];
                    $parent_avoidance_behaviour = $_POST["parent_avoidance_behaviour"];
                    $self_articulation_defect = $_POST["self_articulation_defect"];
                    $parent_articulation_defect = $_POST["parent_articulation_defect"];

                    $rhyming = $_POST["rhyming"];
                    $blending = $_POST["blending"];
                    $syllabification_segmentation = $_POST["syllabification_segmentation"];
                    $Consistancy_errors = $_POST["Consistancy_errors"];
                    $rate_speech = $_POST["rate_speech"];
                    $rate_speech_word = $_POST["rate_speech_word"];
                    $Intelligibility_Ratin_Scale = $_POST["Intelligibility_Ratin_Scale"];
                    $auditory_discrimination = $_POST["auditory_discrimination"];
                    $auditory = $_POST["auditory"];
                    $audio_visual = $_POST["audio_visual"];
                    $Audio_visual_graphic = $_POST["Audio_visual_graphic"];
                    $motokinesthetic = $_POST["motokinesthetic"];
                    $ddk_rate = $_POST["ddk_rate"];
                    $phonological_process_error_analysis = $_POST["phonological_process_error_analysis"];
                    $recording_date = $_POST["recording_date"];
                    $reference_no = $_POST["reference_no"];
                    $remarks = $_POST["remarks"];
                    $recommendations = $_POST["recommendations"];

                    $update_array = array("Articulatory_errors_associated_with_structural_deficits	"=>$articulatory_errors_associated_with_structural_deficits, "Self_Awareness_about_the_problem"=>$self_awareness_about_the_problem ,
                    "Parent_Awareness_about_the_problem" => $parent_awareness_about_the_problem, "Self_Reaction_to_the_problem"=>$self_reaction_to_the_problem ,"Parent_Reaction_to_the_problem" => $parent_reaction_to_the_problem, 
                    "Self_Avoidance_Behaviour"=>$self_avoidance_behaviour ,"Parent_Avoidance_Behaviour" => $parent_avoidance_behaviour,"Self_Articulation_Defect" => $self_articulation_defect,
                    "Parent_Articulation_Defect" => $parent_articulation_defect,"Rhyming" => $rhyming,"Blending" => $blending,"Syllabification_Segmentation" => $syllabification_segmentation,
                    "Consistancy_errors" => $Consistancy_errors,"Rate_Speech" => $rate_speech,"Rate_Speech_Word" => $rate_speech_word,"Intelligibility_Ratin_Scale" => $Intelligibility_Ratin_Scale,
                    "Auditory_Discrimination" => $auditory_discrimination,"Auditory" => $auditory,"Audio_Visual" => $audio_visual,"Audio_Visual_Graphic" => $Audio_visual_graphic,
                    "Recording_Date" => $recording_date,"Reference_No" => $reference_no,"Remarks" => $remarks, "Recommendations" => $recommendations,);
                    
                    $this->main_model->update_articulation_proforma($update_array, $this->main_model->getFormRecordsUsingId($form_id, $patient_Id)[0]->Id);

                    echo "<script>window.close();</script>"; 

                
            }    

            if($this->main_model->getFormRecordsUsingPatientId($patient_Id, $form_id) > 0){
                $data['edit'] = true;
                $data['formRecordsData'] = $this->main_model->getFormRecordsUsingId($form_id, $patient_Id);
                $data['formId'] = $this->main_model->getFormRecordsUsingId($form_id, $patient_Id)[0]->Id;
                $data['articulation_proformaData'] = $this->main_model->get_articulation_proforma($this->main_model->getFormRecordsUsingId($form_id, $patient_Id)[0]->Id);
            }else{
                $data['edit'] = false;
            }

            $data['formsData'] = $this->main_model->getSingleFormsmaster($form_id);
            $data['patientData'] = $this->main_model->getPatientData($patient_Id)[0];
            $data['page_title'] = "Form | Articulation Proforma";
		    $data['content'] = "form_5_articulation_proforma";
            $data['action'] = $action;
            $this->load->view('template', $data);
        }
        
        if($form_id == 6){

            if(isset($_POST['add_stuttering_proforma'])){

                $patientName = $this->input->post('patientName');
                $patientId = $this->input->post('patientId');
                $provisionalDiagnosis = $this->input->post('provisionalDiagnosis');
                $age = $this->input->post('age');
                $date1 = strtr($this->input->post('date'), '/', '-');
        $date = date('Y-m-d', strtotime($date1));
                $gender = $this->input->post('gender');

                $ar = array("PatientName"=>$patientName,"PatientId"=>$patient_Id, "ProvisionalDiagnosis"=>$provisionalDiagnosis ,"Age"=> $age, "Gender"=> $gender, "Date"=> $date, "FormId" => $form_id);
                $this->db->insert("formsrecords",$ar);
                
                $insert_id = $this->db->insert_id();

                if($this->db->affected_rows() > 0){

                    $onset = $_POST["onset"];
                    $age_onset = $_POST["age_onset"];
                    $first_notice_by = $_POST["first_notice_by"];
                    $relationship = $_POST["relationship"];
                    $how_long = $_POST["how_long"];
                    $when = $_POST["when"];
                    $self_reaction_to_the_problem = $_POST["self_reaction_to_the_problem"];
                    $parent_reaction_to_the_problem = $_POST["parent_reaction_to_the_problem"];

                    $more_situations = $_POST["more_situations"];
                    $less_situations = $_POST["less_situations"];
                    $same_situations = $_POST["same_situations"];
                    $more_individuals = $_POST["more_individuals"];
                    $less_individuals = $_POST["less_individuals"];
                    $same_individuals = $_POST["same_individuals"];
                    $at_begining_other_sentence = $_POST["at_begining_other_sentence"];
                    $some_spcific_swl = $_POST["some_spcific_swl"];
                    $anticipation = $_POST["anticipation"];
                    $avoidance_behaviour = $_POST["avoidance_behaviour"];
                    $reported = $_POST["reported"];
                    $observed = $_POST["observed"];
                    $recording_date = $_POST["recording_date"];
                    $reference_no = $_POST["reference_no"];
                    $speak_no_of_prolongations = $_POST["speak_no_of_prolongations"];
                    $read_no_of_prolongations = $_POST["read_no_of_prolongations"];
                    $speak_no_of_repetitions = $_POST["speak_no_of_repetitions"];
                    $read_no_of_repetitions = $_POST["read_no_of_repetitions"];

                    $speak_no_of_hesitations = $_POST["speak_no_of_hesitations"];
                    $read_no_of_hesitations = $_POST["read_no_of_hesitations"];
                    $speak_total_no_of_blocks = $_POST["speak_total_no_of_blocks"];
                    $read_total_no_of_blocks = $_POST["read_total_no_of_blocks"];
                    $rate_of_speech = $_POST["rate_of_speech"];
                    $behaviour_observed_during_silent_reading = $_POST["behaviour_observed_during_silent_reading"];
                    $mpd = $_POST["mpd"];
                    $secondaries = $_POST["secondaries"];
                    $remarks = $_POST["remarks"];

                    $ar_ao = array("Onset	"=>$onset, "Age_Onset"=>$age_onset, "First_Notice_By" => $first_notice_by, "Relationship"=>$relationship ,"How_Long" => $how_long, 
                    "When_Do"=>$when ,"Self_Reaction_to_the_problem" => $self_reaction_to_the_problem,"Parent_Reaction_to_the_problem" => $parent_reaction_to_the_problem,
                    "More_Situations" => $more_situations,"Less_Situations" => $less_situations,"Same_Situations" => $same_situations,"More_Individuals" => $more_individuals,
                    "Less_Individuals" => $less_individuals,"Same_Individuals" => $same_individuals,"At_Begining_Other_Sentence" => $at_begining_other_sentence,"Some_Spcific_SWL" => $some_spcific_swl,
                    "Anticipation" => $anticipation,"Avoidance_Behaviour" => $avoidance_behaviour,"Reported" => $reported,"Observed" => $observed,
                    "Recording_Date" => $recording_date,"Reference_No" => $reference_no,"Speak_No_Of_Prolongations" => $speak_no_of_prolongations,"Read_No_Of_Prolongations" => $read_no_of_prolongations,
                    "Speak_No_Of_Repetitions" => $speak_no_of_repetitions,"Read_No_Of_Repetitions" => $read_no_of_repetitions,"Speak_No_Of_Hesitations" => $speak_no_of_hesitations,
                    "Read_No_Of_Hesitations" => $read_no_of_hesitations,"Speak_Total_No_Of_Blocks" => $speak_total_no_of_blocks,"Read_Total_No_Of_Blocks" => $read_total_no_of_blocks,
                    "Rate_Of_Speech" => $rate_of_speech,"Behaviour_Observed_During_Silent_Reading" => $behaviour_observed_during_silent_reading,"MPD" => $mpd,"Secondaries" => $secondaries,
                    "Remarks" => $remarks,"FormId" => $insert_id);


                    $this->db->insert("stuttering_proforma",$ar_ao);

                    if($this->db->affected_rows() > 0){
                        echo "<script>window.close();</script>";
                    }    
                }else{
                    echo `<script>window.alert("SomeThing Went Wrong")</script>`;
                }

                
            }  

            if(isset($_POST['edit_stuttering_proforma'])){

                
                $patientName = $this->input->post('patientName');
                $patientId = $this->input->post('patientId');
                $provisionalDiagnosis = $this->input->post('provisionalDiagnosis');
                $age = $this->input->post('age');
                $date1 = strtr($this->input->post('date'), '/', '-');
        $date = date('Y-m-d', strtotime($date1));
                $gender = $this->input->post('gender');

                $update_ar = array("PatientName"=>$patientName,"PatientId"=>$patientId, "ProvisionalDiagnosis"=>$provisionalDiagnosis ,"Age"=> $age, "Gender"=> $gender, "Date"=> $date, "FormId" => $form_id);
                
                $this->db->where("FormId", $form_id);
                $this->db->where("PatientId", $patientId);
                $this->db->update("formsrecords",$update_ar);

                $onset = $_POST["onset"];
                $age_onset = $_POST["age_onset"];
                $first_notice_by = $_POST["first_notice_by"];
                $relationship = $_POST["relationship"];
                $how_long = $_POST["how_long"];
                $when = $_POST["when"];
                $self_reaction_to_the_problem = $_POST["self_reaction_to_the_problem"];
                $parent_reaction_to_the_problem = $_POST["parent_reaction_to_the_problem"];

                $more_situations = $_POST["more_situations"];
                $less_situations = $_POST["less_situations"];
                $same_situations = $_POST["same_situations"];
                $more_individuals = $_POST["more_individuals"];
                $less_individuals = $_POST["less_individuals"];
                $same_individuals = $_POST["same_individuals"];
                $at_begining_other_sentence = $_POST["at_begining_other_sentence"];
                $some_spcific_swl = $_POST["some_spcific_swl"];
                $anticipation = $_POST["anticipation"];
                $avoidance_behaviour = $_POST["avoidance_behaviour"];
                $reported = $_POST["reported"];
                $observed = $_POST["observed"];
                $recording_date = $_POST["recording_date"];
                $reference_no = $_POST["reference_no"];
                $speak_no_of_prolongations = $_POST["speak_no_of_prolongations"];
                $read_no_of_prolongations = $_POST["read_no_of_prolongations"];
                $speak_no_of_repetitions = $_POST["speak_no_of_repetitions"];
                $read_no_of_repetitions = $_POST["read_no_of_repetitions"];

                $speak_no_of_hesitations = $_POST["speak_no_of_hesitations"];
                $read_no_of_hesitations = $_POST["read_no_of_hesitations"];
                $speak_total_no_of_blocks = $_POST["speak_total_no_of_blocks"];
                $read_total_no_of_blocks = $_POST["read_total_no_of_blocks"];
                $rate_of_speech = $_POST["rate_of_speech"];
                $behaviour_observed_during_silent_reading = $_POST["behaviour_observed_during_silent_reading"];
                $mpd = $_POST["mpd"];
                $secondaries = $_POST["secondaries"];
                $remarks = $_POST["remarks"];

                $update_array = array("Onset	"=>$onset, "Age_Onset"=>$age_onset, "First_Notice_By" => $first_notice_by, "Relationship"=>$relationship ,"How_Long" => $how_long, 
                "When_Do"=>$when ,"Self_Reaction_to_the_problem" => $self_reaction_to_the_problem,"Parent_Reaction_to_the_problem" => $parent_reaction_to_the_problem,
                "More_Situations" => $more_situations,"Less_Situations" => $less_situations,"Same_Situations" => $same_situations,"More_Individuals" => $more_individuals,
                "Less_Individuals" => $less_individuals,"Same_Individuals" => $same_individuals,"At_Begining_Other_Sentence" => $at_begining_other_sentence,"Some_Spcific_SWL" => $some_spcific_swl,
                "Anticipation" => $anticipation,"Avoidance_Behaviour" => $avoidance_behaviour,"Reported" => $reported,"Observed" => $observed,
                "Recording_Date" => $recording_date,"Reference_No" => $reference_no,"Speak_No_Of_Prolongations" => $speak_no_of_prolongations,"Read_No_Of_Prolongations" => $read_no_of_prolongations,
                "Speak_No_Of_Repetitions" => $speak_no_of_repetitions,"Read_No_Of_Repetitions" => $read_no_of_repetitions,"Speak_No_Of_Hesitations" => $speak_no_of_hesitations,
                "Read_No_Of_Hesitations" => $read_no_of_hesitations,"Speak_Total_No_Of_Blocks" => $speak_total_no_of_blocks,"Read_Total_No_Of_Blocks" => $read_total_no_of_blocks,
                "Rate_Of_Speech" => $rate_of_speech,"Behaviour_Observed_During_Silent_Reading" => $behaviour_observed_during_silent_reading,"MPD" => $mpd,"Secondaries" => $secondaries,
                "Remarks" => $remarks);
                    
                    $this->main_model->update_stuttering_proforma($update_array, $this->main_model->getFormRecordsUsingId($form_id, $patient_Id)[0]->Id);

                    echo "<script>window.close();</script>"; 

                
            }  

            if($this->main_model->getFormRecordsUsingPatientId($patient_Id, $form_id) > 0){
                $data['edit'] = true;
                $data['formRecordsData'] = $this->main_model->getFormRecordsUsingId($form_id, $patient_Id);
                $data['stuttering_proformaData'] = $this->main_model->get_stuttering_proforma($this->main_model->getFormRecordsUsingId($form_id, $patient_Id)[0]->Id);
            }else{
                $data['edit'] = false;
            }

            $data['formsData'] = $this->main_model->getSingleFormsmaster($form_id);
            $data['patientData'] = $this->main_model->getPatientData($patient_Id)[0];
            $data['page_title'] = "Form | Stuttering Proforma";
		    $data['content'] = "form_6_stuttering_proforma";
            $data['action'] = $action;
            $this->load->view('template', $data);
        }

        if($form_id == 7){


            if(isset($_POST['add_speech_pre_therapy'])){

                $patientName = $this->input->post('patientName');
                $patientId = $this->input->post('patientId');
                $age = $this->input->post('age');
                $date1 = strtr($this->input->post('date'), '/', '-');
        $date = date('Y-m-d', strtotime($date1));
                $gender = $this->input->post('gender');
                $languages_known = $this->input->post('languages_known');
                $clinician = $this->input->post('clinician');
                $provisionalDiagnosis = $this->input->post('provisionalDiagnosis');
                $noSessionWeeks = $this->input->post('noSessionWeeks');

                $ar = array("PatientName"=>$patientName,"PatientId"=>$patient_Id, "Clinician"=>$clinician, "ProvisionalDiagnosis"=>$provisionalDiagnosis ,"NumberOfWeeksSession"=>$noSessionWeeks,"Age"=> $age, "Gender"=> $gender, "Date"=> $date, "Languages_Known" => $languages_known, "FormId" => $form_id);
                $this->db->insert("formsrecords",$ar);
                
                $insert_id = $this->db->insert_id();

                if($this->db->affected_rows() > 0){

                    $brief_history = $_POST["brief_history"];
                    $lip_structure = $_POST["lip_structure"];
                    $puckering = $_POST["puckering"];
                    $rounding = $_POST["rounding"];
                    $spreading = $_POST["spreading"];
                    $teeth_structure = $_POST["teeth_structure"];
                    $t_biting = $_POST["t_biting"];
                    $t_chewing = $_POST["t_chewing"];
                    $tongue_structure = $_POST["tongue_structure"];
                    $elevation = $_POST["elevation"];
                    $lateral_movements = $_POST["lateral_movements"];
                    $protrusion = $_POST["protrusion"];
                    $retraction = $_POST["retraction"];
                    $hard_palate_structure = $_POST["hard_palate_structure"];
                    $hard_palate_function = $_POST["hard_palate_function"];
                    $soft_palate_structure = $_POST["soft_palate_structure"];
                    $symmetrical_movements = $_POST["symmetrical_movements"];
                    $uvula_structure = $_POST["uvula_structure"];
                    $uvula_function = $_POST["uvula_function"];
                    $jaw_structure = $_POST["jaw_structure"];
                    $jaw_function = $_POST["jaw_function"];
                    $drooling = $_POST["drooling"];
                    $blowing = $_POST["blowing"];
                    $swallowing = $_POST["swallowing"];
                    $v_chewing = $_POST["v_chewing"];
                    $sucking = $_POST["sucking"];
                    $v_biting = $_POST["v_biting"];
                    $eye_contact = $_POST["eye_contact"];
                    $name_call_response = $_POST["name_call_response"];
                    $sitting_tolerance = $_POST["sitting_tolerance"];
                    $compliance = $_POST["compliance"];
                    $pointing = $_POST["pointing"];
                    $turn_taking = $_POST["turn_taking"];
                    $language_comprehension = $_POST["language_comprehension"];
                    $language_expression = $_POST["language_expression"];

                    
                    $mode_of_communication = $_POST["mode_of_communication"];
                    $greetings = $_POST["greetings"];
                    $engages_in_interaction = $_POST["engages_in_interaction"];
                    $initiate_interaction = $_POST["initiate_interaction"];
                    $social_smile = $_POST["social_smile"];
                    $solo_play = $_POST["solo_play"];
                    $peer_play = $_POST["peer_play"];
                    $instrumental_play = $_POST["instrumental_play"];
                    $imaginative_play = $_POST["imaginative_play"];
                    $narration = $_POST["narration"];
                    $topic_initiation = $_POST["topic_initiation"];
                    $topic_maintenance = $_POST["topic_maintenance"];
                    $topic_termination = $_POST["topic_termination"];
                    $object_permanence = $_POST["object_permanence"];
                    $object_use = $_POST["object_use"];
                    $sequencing = $_POST["sequencing"];
                    $selection = $_POST["selection"];
                    $object_to_object = $_POST["object_to_object"];
                    $object_to_picture = $_POST["object_to_picture"];
                    $categorization = $_POST["categorization"];
                    $reasoning = $_POST["reasoning"];
                    $judgment = $_POST["judgment"];
                    $gender_concept = $_POST["gender_concept"];
                    $money_concept = $_POST["money_concept"];
                    $appearance_disappearance = $_POST["appearance_disappearance"];
                    $possession = $_POST["possession"];
                    $rejection = $_POST["rejection"];
                    $location = $_POST["location"];
                    $denial = $_POST["denial"];
                    $imitation = $_POST["imitation"];
                    $language_test_results = $_POST["language_test_results"];
                    $articulation = $_POST["articulation"];
                    $voice = $_POST["voice"];
                    $fluency = $_POST["fluency"];
                    $speech_test_results = $_POST["speech_test_results"];
                    $academic_skils = $_POST["academic_skils"];
                    $remarks = $_POST["remarks"];
                    $selected_goals = $_POST["selected_goals"];

                    $ar_ao = array("Brief_History"=>$brief_history, "Lip_Structure"=>$lip_structure, "Puckering" => $puckering, "Rounding"=>$rounding ,"Spreading" => $spreading, 
                    "Teeth_Structure"=>$teeth_structure ,"T_Biting" => $t_biting,"T_Chewing" => $t_chewing, "Tongue_Structure" => $tongue_structure,"Elevation" => $elevation,"Lateral_Movements" => $lateral_movements,
                    "Protrusion" => $protrusion, "Retraction" => $retraction,"Hard_Palate_Structure" => $hard_palate_structure,"Hard_Palate_Function" => $hard_palate_function,
                    "Soft_Palate_Structure" => $soft_palate_structure, "Symmetrical_Movements" => $symmetrical_movements,"Uvula_Structure" => $uvula_structure,
                    "Uvula_Function" => $uvula_function,"Jaw_Structure" => $jaw_structure, "Jaw_Function" => $jaw_function,"Drooling" => $drooling,"Blowing" => $blowing,"Swallowing" => $swallowing,
                    "V_Chewing" => $v_chewing,"Sucking" => $sucking,"V_Biting" => $v_biting, "Eye_Contact" => $eye_contact,"Name_Call_Response" => $name_call_response,"Sitting_Tolerance" => $sitting_tolerance,
                    "Compliance" => $compliance,"Pointing" => $pointing,"Turn_Taking" => $turn_taking,"Language_Comprehension" => $language_comprehension,"Language_Expression" => $language_expression,
                    "Mode_Of_Communication"=>$mode_of_communication, "Greetings"=>$greetings, "Engages_In_Interaction" => $engages_in_interaction, "Initiate_Interaction"=>$initiate_interaction ,
                    "Social_Smile" => $social_smile, 
                    "Solo_Play"=>$solo_play ,"Peer_Play" => $peer_play,"Instrumental_Play" => $instrumental_play, "Imaginative_Play" => $imaginative_play,"Narration" => $narration,"Topic_Initiation" => $topic_initiation,
                    "Topic_Maintenance" => $topic_maintenance, "Topic_Termination" => $topic_termination,"Object_Permanence" => $object_permanence,"Object_Use" => $object_use,
                    "Sequencing" => $sequencing, "Selection" => $selection,"Object_To_Object" => $object_to_object,
                    "Object_To_Picture" => $object_to_picture,"Categorization" => $categorization, "Reasoning" => $reasoning,"Judgment" => $judgment,"Gender_Concept" => $gender_concept,"Money_Concept" => $money_concept,
                    "Appearance_Disappearance" => $appearance_disappearance,"Possession" => $possession,"Rejection" => $rejection, "Location" => $location,"Denial" => $denial,"Imitation" => $imitation,
                    "Language_Test_Results" => $language_test_results,"Articulation" => $articulation,"Voice" => $voice,"Fluency" => $fluency,"Speech_Test_Results" => $speech_test_results,
                    "Academic_Skils" => $academic_skils,"Remarks" => $remarks,"Selected_Goals" => $selected_goals,
                    "FormId" => $insert_id);


                    $this->db->insert("speech_pre_therapy",$ar_ao);

                    if($this->db->affected_rows() > 0){
                        echo "<script>window.close();</script>";
                    }    
                }else{
                    echo `<script>window.alert("SomeThing Went Wrong")</script>`;
                }

                
            }  

            if(isset($_POST['edit_speech_pre_therapy'])){

                $patientName = $this->input->post('patientName');
                $patientId = $this->input->post('patientId');
                $age = $this->input->post('age');
                $date1 = strtr($this->input->post('date'), '/', '-');
        $date = date('Y-m-d', strtotime($date1));
                $gender = $this->input->post('gender');
                $languages_known = $this->input->post('languages_known');
                $clinician = $this->input->post('clinician');
                $provisionalDiagnosis = $this->input->post('provisionalDiagnosis');
                $noSessionWeeks = $this->input->post('noSessionWeeks');

                $update_ar = array("PatientName"=>$patientName,"PatientId"=>$patient_Id, "Clinician"=>$clinician, "ProvisionalDiagnosis"=>$provisionalDiagnosis ,"NumberOfWeeksSession"=>$noSessionWeeks,"Age"=> $age, "Gender"=> $gender, "Date"=> $date, "Languages_Known" => $languages_known, "FormId" => $form_id);

                $this->db->where("FormId", $form_id);
                $this->db->where("PatientId", $patientId);
                $this->db->update("formsrecords",$update_ar);
                
                    $brief_history = $_POST["brief_history"];
                    $lip_structure = $_POST["lip_structure"];
                    $puckering = $_POST["puckering"];
                    $rounding = $_POST["rounding"];
                    $spreading = $_POST["spreading"];
                    $teeth_structure = $_POST["teeth_structure"];
                    $t_biting = $_POST["t_biting"];
                    $t_chewing = $_POST["t_chewing"];
                    $tongue_structure = $_POST["tongue_structure"];
                    $elevation = $_POST["elevation"];
                    $lateral_movements = $_POST["lateral_movements"];
                    $protrusion = $_POST["protrusion"];
                    $retraction = $_POST["retraction"];
                    $hard_palate_structure = $_POST["hard_palate_structure"];
                    $hard_palate_function = $_POST["hard_palate_function"];
                    $soft_palate_structure = $_POST["soft_palate_structure"];
                    $symmetrical_movements = $_POST["symmetrical_movements"];
                    $uvula_structure = $_POST["uvula_structure"];
                    $uvula_function = $_POST["uvula_function"];
                    $jaw_structure = $_POST["jaw_structure"];
                    $jaw_function = $_POST["jaw_function"];
                    $drooling = $_POST["drooling"];
                    $blowing = $_POST["blowing"];
                    $swallowing = $_POST["swallowing"];
                    $v_chewing = $_POST["v_chewing"];
                    $sucking = $_POST["sucking"];
                    $v_biting = $_POST["v_biting"];
                    $eye_contact = $_POST["eye_contact"];
                    $name_call_response = $_POST["name_call_response"];
                    $sitting_tolerance = $_POST["sitting_tolerance"];
                    $compliance = $_POST["compliance"];
                    $pointing = $_POST["pointing"];
                    $turn_taking = $_POST["turn_taking"];
                    $language_comprehension = $_POST["language_comprehension"];
                    $language_expression = $_POST["language_expression"];

                    
                    $mode_of_communication = $_POST["mode_of_communication"];
                    $greetings = $_POST["greetings"];
                    $engages_in_interaction = $_POST["engages_in_interaction"];
                    $initiate_interaction = $_POST["initiate_interaction"];
                    $social_smile = $_POST["social_smile"];
                    $solo_play = $_POST["solo_play"];
                    $peer_play = $_POST["peer_play"];
                    $instrumental_play = $_POST["instrumental_play"];
                    $imaginative_play = $_POST["imaginative_play"];
                    $narration = $_POST["narration"];
                    $topic_initiation = $_POST["topic_initiation"];
                    $topic_maintenance = $_POST["topic_maintenance"];
                    $topic_termination = $_POST["topic_termination"];
                    $object_permanence = $_POST["object_permanence"];
                    $object_use = $_POST["object_use"];
                    $sequencing = $_POST["sequencing"];
                    $selection = $_POST["selection"];
                    $object_to_object = $_POST["object_to_object"];
                    $object_to_picture = $_POST["object_to_picture"];
                    $categorization = $_POST["categorization"];
                    $reasoning = $_POST["reasoning"];
                    $judgment = $_POST["judgment"];
                    $gender_concept = $_POST["gender_concept"];
                    $money_concept = $_POST["money_concept"];
                    $appearance_disappearance = $_POST["appearance_disappearance"];
                    $possession = $_POST["possession"];
                    $rejection = $_POST["rejection"];
                    $location = $_POST["location"];
                    $denial = $_POST["denial"];
                    $imitation = $_POST["imitation"];
                    $language_test_results = $_POST["language_test_results"];
                    $articulation = $_POST["articulation"];
                    $voice = $_POST["voice"];
                    $fluency = $_POST["fluency"];
                    $speech_test_results = $_POST["speech_test_results"];
                    $academic_skils = $_POST["academic_skils"];
                    $remarks = $_POST["remarks"];
                    $selected_goals = $_POST["selected_goals"];

                    $update_array = array("Brief_History"=>$brief_history, "Lip_Structure"=>$lip_structure, "Puckering" => $puckering, "Rounding"=>$rounding ,"Spreading" => $spreading, 
                    "Teeth_Structure"=>$teeth_structure ,"T_Biting" => $t_biting,"T_Chewing" => $t_chewing, "Tongue_Structure" => $tongue_structure,"Elevation" => $elevation,"Lateral_Movements" => $lateral_movements,
                    "Protrusion" => $protrusion, "Retraction" => $retraction,"Hard_Palate_Structure" => $hard_palate_structure,"Hard_Palate_Function" => $hard_palate_function,
                    "Soft_Palate_Structure" => $soft_palate_structure, "Symmetrical_Movements" => $symmetrical_movements,"Uvula_Structure" => $uvula_structure,
                    "Uvula_Function" => $uvula_function,"Jaw_Structure" => $jaw_structure, "Jaw_Function" => $jaw_function,"Drooling" => $drooling,"Blowing" => $blowing,"Swallowing" => $swallowing,
                    "V_Chewing" => $v_chewing,"Sucking" => $sucking,"V_Biting" => $v_biting, "Eye_Contact" => $eye_contact,"Name_Call_Response" => $name_call_response,"Sitting_Tolerance" => $sitting_tolerance,
                    "Compliance" => $compliance,"Pointing" => $pointing,"Turn_Taking" => $turn_taking,"Language_Comprehension" => $language_comprehension,"Language_Expression" => $language_expression,
                    "Mode_Of_Communication"=>$mode_of_communication, "Greetings"=>$greetings, "Engages_In_Interaction" => $engages_in_interaction, "Initiate_Interaction"=>$initiate_interaction ,
                    "Social_Smile" => $social_smile, 
                    "Solo_Play"=>$solo_play ,"Peer_Play" => $peer_play,"Instrumental_Play" => $instrumental_play, "Imaginative_Play" => $imaginative_play,"Narration" => $narration,"Topic_Initiation" => $topic_initiation,
                    "Topic_Maintenance" => $topic_maintenance, "Topic_Termination" => $topic_termination,"Object_Permanence" => $object_permanence,"Object_Use" => $object_use,
                    "Sequencing" => $sequencing, "Selection" => $selection,"Object_To_Object" => $object_to_object,
                    "Object_To_Picture" => $object_to_picture,"Categorization" => $categorization, "Reasoning" => $reasoning,"Judgment" => $judgment,"Gender_Concept" => $gender_concept,"Money_Concept" => $money_concept,
                    "Appearance_Disappearance" => $appearance_disappearance,"Possession" => $possession,"Rejection" => $rejection, "Location" => $location,"Denial" => $denial,"Imitation" => $imitation,
                    "Language_Test_Results" => $language_test_results,"Articulation" => $articulation,"Voice" => $voice,"Fluency" => $fluency,"Speech_Test_Results" => $speech_test_results,
                    "Academic_Skils" => $academic_skils,"Remarks" => $remarks,"Selected_Goals" => $selected_goals);


                    $this->main_model->update_speech_pre_therapy($update_array, $this->main_model->getFormRecordsUsingId($form_id, $patient_Id)[0]->Id);

                    echo "<script>window.close();</script>";    
                
            }  


            if($this->main_model->getFormRecordsUsingPatientId($patient_Id, $form_id) > 0){
                $data['edit'] = true;
                $data['formRecordsData'] = $this->main_model->getFormRecordsUsingId($form_id, $patient_Id);
                $data['speech_pre_therapyData'] = $this->main_model->get_speech_pre_therapy($this->main_model->getFormRecordsUsingId($form_id, $patient_Id)[0]->Id);
            }else{
                $data['edit'] = false;
            }

            $data['formsData'] = $this->main_model->getSingleFormsmaster($form_id);
            $data['patientData'] = $this->main_model->getPatientData($patient_Id)[0];
            $data['page_title'] = "Form | Speech Pre-Therapy";
		    $data['content'] = "form_7_speech_pre_therapy";
            $data['action'] = $action;
            $this->load->view('template', $data);
        }

        if($form_id == 8){

            if(isset($_POST['add_feeding_proforma'])){

                $ar = array("PatientId"=>$patient_Id,"FormId" => $form_id);
                $this->db->insert("formsrecords",$ar);
                
                $insert_id = $this->db->insert_id();

                if($this->db->affected_rows() > 0){

                    $feeding_concerns = $_POST["feeding_concerns"];
                    $problem_noticed_first = $_POST["problem_noticed_first"];
                    $nasal_regurgitation = $_POST["nasal_regurgitation"];
                    $pneumonia = $_POST["pneumonia"];
                    $aspiration = $_POST["aspiration"];
                    $ear_infection = $_POST["ear_infection"];
                    $URTI = $_POST["URTI"];
                    $respiratory_stridor = $_POST["respiratory_stridor"];
                    $wheezing = $_POST["wheezing"];
                    $asthma = $_POST["asthma"];
                    $nasal_chest_congestion = $_POST["nasal_chest_congestion"];
                    $feeding_milestones_1 = $_POST["feeding_milestones_1"];
                    $feeding_milestones_2 = $_POST["feeding_milestones_2"];
                    $feeding_milestones_3 = $_POST["feeding_milestones_3"];
                    $feeding_milestones_4 = $_POST["feeding_milestones_4"];
                    $feeding_milestones_5 = $_POST["feeding_milestones_5"];
                    $feeding_milestones_6 = $_POST["feeding_milestones_6"];
                    $feeding_milestones_7 = $_POST["feeding_milestones_7"];
                    $feeding_milestones_8 = $_POST["feeding_milestones_8"];
                    $sensory_issue_1 = $_POST["sensory_issue_1"];
                    $sensory_issue_2 = $_POST["sensory_issue_2"];
                    $sensory_issue_3 = $_POST["sensory_issue_3"];
                    $sensory_issue_4 = $_POST["sensory_issue_4"];
                    $sensory_issue_5 = $_POST["sensory_issue_5"];
                    $sensory_issue_6 = $_POST["sensory_issue_6"];
                    $sensory_issue_6_checked = $_POST["sensory_issue_6_checked"];
                    $meal_time_behaviour_checklist_1 = $_POST["meal_time_behaviour_checklist_1"];
                    $meal_time_behaviour_checklist_2 = $_POST["meal_time_behaviour_checklist_2"];
                    $meal_time_behaviour_checklist_3 = $_POST["meal_time_behaviour_checklist_3"];
                    $meal_time_behaviour_checklist_4 = $_POST["meal_time_behaviour_checklist_4"];
                    $meal_time_behaviour_checklist_5 = $_POST["meal_time_behaviour_checklist_5"];
                    $meal_time_behaviour_checklist_6 = $_POST["meal_time_behaviour_checklist_6"];
                    $meal_time_behaviour_checklist_7 = $_POST["meal_time_behaviour_checklist_7"];
                    $meal_time_behaviour_checklist_8 = $_POST["meal_time_behaviour_checklist_8"];
                    $meal_time_behaviour_checklist_9 = $_POST["meal_time_behaviour_checklist_9"];
                    $meal_time_behaviour_checklist_10 = $_POST["meal_time_behaviour_checklist_10"];
                    $meal_time_behaviour_checklist_11 = $_POST["meal_time_behaviour_checklist_11"];
                    $meal_time_behaviour_checklist_12 = $_POST["meal_time_behaviour_checklist_12"];
                    $opme_lip_1 = $_POST["opme_lip_1"];
                    $opme_lip_2 = $_POST["opme_lip_2"];
                    $opme_lip_3 = $_POST["opme_lip_3"];
                    $opme_jaw_1 = $_POST["opme_jaw_1"];
                    $opme_jaw_2 = $_POST["opme_jaw_2"];
                    $opme_jaw_3 = $_POST["opme_jaw_3"];
                    $opme_tongue_1 = $_POST["opme_tongue_1"];
                    $opme_tongue_2 = $_POST["opme_tongue_2"];
                    $opme_tongue_3 = $_POST["opme_tongue_3"];
                    $oral_cavity_1 = $_POST["oral_cavity_1"];
                    $oral_cavity_2 = $_POST["oral_cavity_2"];
                    $poster_while_feeding_1 = $_POST["poster_while_feeding_1"];
                    $poster_while_feeding_2 = $_POST["poster_while_feeding_2"];
                    $dry_1 = $_POST["dry_1"];
                    $dry_2 = $_POST["dry_2"];
                    $dry_3 = $_POST["dry_3"];
                    $dry_4 = $_POST["dry_4"];
                    $dry_5 = $_POST["dry_5"];
                    $dry_6 = $_POST["dry_6"];
                    $dry_7 = $_POST["dry_7"];
                    $semiliquid_1 = $_POST["semiliquid_1"];
                    $semiliquid_2 = $_POST["semiliquid_2"];
                    $semiliquid_3 = $_POST["semiliquid_3"];
                    $semiliquid_4 = $_POST["semiliquid_4"];
                    $semiliquid_5 = $_POST["semiliquid_5"];
                    $semiliquid_6 = $_POST["semiliquid_6"];
                    $semiliquid_7 = $_POST["semiliquid_7"];
                    $liquid_1 = $_POST["liquid_1"];
                    $liquid_2 = $_POST["liquid_2"];
                    $liquid_3 = $_POST["liquid_3"];
                    $liquid_4 = $_POST["liquid_4"];
                    $liquid_5 = $_POST["liquid_5"];
                    $liquid_6 = $_POST["liquid_6"];
                    $liquid_7 = $_POST["liquid_7"];
                    $solid_1 = $_POST["solid_1"];
                    $solid_2 = $_POST["solid_2"];
                    $solid_3 = $_POST["solid_3"];
                    $solid_4 = $_POST["solid_4"];
                    $solid_5 = $_POST["solid_5"];
                    $solid_6 = $_POST["solid_6"];
                    $solid_7 = $_POST["solid_7"];
                    $tube_feeding_info_1 = $_POST["tube_feeding_info_1"];
                    $tube_feeding_info_2 = $_POST["tube_feeding_info_2"];
                    $tube_feeding_info_3 = $_POST["tube_feeding_info_3"];
                    $tube_feeding_info_4 = $_POST["tube_feeding_info_4"];
                    $tube_feeding_info_5 = $_POST["tube_feeding_info_5"];
                    $tube_feeding_shedule_1 = $_POST["tube_feeding_shedule_1"];
                    $tube_feeding_shedule_2 = $_POST["tube_feeding_shedule_2"];
                    $nutrition_1 = $_POST["nutrition_1"];
                    $nutrition_2 = $_POST["nutrition_2"];
                    $nutrition_3 = $_POST["nutrition_3"];
                    $remarks = $_POST["remarks"];
                    $recommendations = $_POST["recommendations"];
                    $ar_ao = array("Feeding_Concerns"=>$feeding_concerns, "Problem_Noticed_First"=>$problem_noticed_first, "Nasal_Regurgitation" => $nasal_regurgitation, 
                    "Pneumonia"=>$pneumonia , "Aspiration" => $aspiration, "Ear_Infection"=>$ear_infection , "URTI" => $URTI, "Respiratory_Stridor" => $respiratory_stridor, 
                    "Wheezing" => $wheezing, "Asthma" => $asthma, "Nasal_Chest_Congestion" => $nasal_chest_congestion, "Feeding_Milestones_1" => $feeding_milestones_1, 
                    "Feeding_Milestones_2" => $feeding_milestones_2, "Feeding_Milestones_3" => $feeding_milestones_3, "Feeding_Milestones_4" => $feeding_milestones_4, 
                    "Feeding_Milestones_5" => $feeding_milestones_5, "Feeding_Milestones_6" => $feeding_milestones_6, "Feeding_Milestones_7" => $feeding_milestones_7, 
                    "Feeding_Milestones_8" => $feeding_milestones_8, "Sensory_Issue_1" => $sensory_issue_1, "Sensory_Issue_2" => $sensory_issue_2, 
                    "Sensory_Issue_3" => $sensory_issue_3, "Sensory_Issue_4" => $sensory_issue_4, "Sensory_Issue_5" => $sensory_issue_5, "Sensory_Issue_6" => $sensory_issue_6, 
                    "sensory_issue_6_checked" => $sensory_issue_6_checked, "Meal_Time_Behaviour_Checklist_1" => $meal_time_behaviour_checklist_1, 
                    "Meal_Time_Behaviour_Checklist_2" => $meal_time_behaviour_checklist_2, "Meal_Time_Behaviour_Checklist_3" => $meal_time_behaviour_checklist_3, 
                    "Meal_Time_Behaviour_Checklist_4" => $meal_time_behaviour_checklist_4, "Meal_Time_Behaviour_Checklist_5" => $meal_time_behaviour_checklist_5, 
                    "Meal_Time_Behaviour_Checklist_6" => $meal_time_behaviour_checklist_6, "Meal_Time_Behaviour_Checklist_7" => $meal_time_behaviour_checklist_7, 
                    "Meal_Time_Behaviour_Checklist_8" => $meal_time_behaviour_checklist_8, "Meal_Time_Behaviour_Checklist_9" => $meal_time_behaviour_checklist_9, 
                    "Meal_Time_Behaviour_Checklist_10" => $meal_time_behaviour_checklist_10, "Meal_Time_Behaviour_Checklist_11" => $meal_time_behaviour_checklist_11, 
                    "Meal_Time_Behaviour_Checklist_12" => $meal_time_behaviour_checklist_12, "Opme_Lip_1" => $opme_lip_1, "Opme_Lip_2" => $opme_lip_2, "Opme_Lip_3" => $opme_lip_3, 
                    "Opme_Jaw_1" => $opme_jaw_1, "Opme_Jaw_2" => $opme_jaw_2, "Opme_Jaw_3" => $opme_jaw_3, "Opme_Tongue_1" => $opme_tongue_1, "Opme_Tongue_2" => $opme_tongue_2, 
                    "Opme_Tongue_3" => $opme_tongue_3, "Oral_Cavity_1" => $oral_cavity_1, "Oral_Cavity_2" => $oral_cavity_2, "Poster_While_Feeding_1" => $poster_while_feeding_1, 
                    "Poster_While_Feeding_2" => $poster_while_feeding_2, "Dry_1" => $dry_1, "Dry_2" => $dry_2, "Dry_3" => $dry_3, "Dry_4" => $dry_4, "Dry_5" => $dry_5, "Dry_6" => $dry_6, 
                    "Dry_7" => $dry_7, "Semiliquid_1" => $semiliquid_1, "Semiliquid_2" => $semiliquid_2, "Semiliquid_3" => $semiliquid_3, "Semiliquid_4" => $semiliquid_4, "Semiliquid_5" => $semiliquid_5, 
                    "Semiliquid_6" => $semiliquid_6, "Semiliquid_7" => $semiliquid_7, "Liquid_1" => $liquid_1, "Liquid_2" => $liquid_2, "Liquid_3" => $liquid_3, "Liquid_4" => $liquid_4, 
                    "Liquid_5" => $liquid_5, "Liquid_6" => $liquid_6, "Liquid_7" => $liquid_7, "Solid_1" => $solid_1, "Solid_2" => $solid_2, "Solid_3" => $solid_3, "Solid_4" => $solid_4, 
                    "Solid_5" => $solid_5, "Solid_6" => $solid_6, "Solid_7" => $solid_7, "Tube_Feeding_Info_1" => $tube_feeding_info_1, "Tube_Feeding_Info_2" => $tube_feeding_info_2, 
                    "Tube_Feeding_Info_3" => $tube_feeding_info_3, "Tube_Feeding_Info_4" => $tube_feeding_info_4, "Tube_Feeding_Info_5" => $tube_feeding_info_5, 
                    "Tube_Feeding_Shedule_1" => $tube_feeding_shedule_1, "Tube_Feeding_Shedule_2" => $tube_feeding_shedule_2, "Nutrition_1" => $nutrition_1, "Nutrition_2" => $nutrition_2, 
                    "Nutrition_3" => $nutrition_3, "Remarks" => $remarks, "Recommendations" => $recommendations, "FormId" => $insert_id);


                    $this->db->insert("feeding_proforma",$ar_ao);

                    if($this->db->affected_rows() > 0){
                        echo "<script>window.close();</script>";
                    }    
                }else{
                    echo `<script>window.alert("SomeThing Went Wrong")</script>`;
                }

                
            }  

            if(isset($_POST['edit_feeding_proforma'])){

                    $feeding_concerns = $_POST["feeding_concerns"];
                    $problem_noticed_first = $_POST["problem_noticed_first"];
                    $nasal_regurgitation = $_POST["nasal_regurgitation"];
                    $pneumonia = $_POST["pneumonia"];
                    $aspiration = $_POST["aspiration"];
                    $ear_infection = $_POST["ear_infection"];
                    $URTI = $_POST["URTI"];
                    $respiratory_stridor = $_POST["respiratory_stridor"];
                    $wheezing = $_POST["wheezing"];
                    $asthma = $_POST["asthma"];
                    $nasal_chest_congestion = $_POST["nasal_chest_congestion"];
                    $feeding_milestones_1 = $_POST["feeding_milestones_1"];
                    $feeding_milestones_2 = $_POST["feeding_milestones_2"];
                    $feeding_milestones_3 = $_POST["feeding_milestones_3"];
                    $feeding_milestones_4 = $_POST["feeding_milestones_4"];
                    $feeding_milestones_5 = $_POST["feeding_milestones_5"];
                    $feeding_milestones_6 = $_POST["feeding_milestones_6"];
                    $feeding_milestones_7 = $_POST["feeding_milestones_7"];
                    $feeding_milestones_8 = $_POST["feeding_milestones_8"];
                    $sensory_issue_1 = $_POST["sensory_issue_1"];
                    $sensory_issue_2 = $_POST["sensory_issue_2"];
                    $sensory_issue_3 = $_POST["sensory_issue_3"];
                    $sensory_issue_4 = $_POST["sensory_issue_4"];
                    $sensory_issue_5 = $_POST["sensory_issue_5"];
                    $sensory_issue_6 = $_POST["sensory_issue_6"];
                    $sensory_issue_6_checked = $_POST["sensory_issue_6_checked"];
                    $meal_time_behaviour_checklist_1 = $_POST["meal_time_behaviour_checklist_1"];
                    $meal_time_behaviour_checklist_2 = $_POST["meal_time_behaviour_checklist_2"];
                    $meal_time_behaviour_checklist_3 = $_POST["meal_time_behaviour_checklist_3"];
                    $meal_time_behaviour_checklist_4 = $_POST["meal_time_behaviour_checklist_4"];
                    $meal_time_behaviour_checklist_5 = $_POST["meal_time_behaviour_checklist_5"];
                    $meal_time_behaviour_checklist_6 = $_POST["meal_time_behaviour_checklist_6"];
                    $meal_time_behaviour_checklist_7 = $_POST["meal_time_behaviour_checklist_7"];
                    $meal_time_behaviour_checklist_8 = $_POST["meal_time_behaviour_checklist_8"];
                    $meal_time_behaviour_checklist_9 = $_POST["meal_time_behaviour_checklist_9"];
                    $meal_time_behaviour_checklist_10 = $_POST["meal_time_behaviour_checklist_10"];
                    $meal_time_behaviour_checklist_11 = $_POST["meal_time_behaviour_checklist_11"];
                    $meal_time_behaviour_checklist_12 = $_POST["meal_time_behaviour_checklist_12"];
                    $opme_lip_1 = $_POST["opme_lip_1"];
                    $opme_lip_2 = $_POST["opme_lip_2"];
                    $opme_lip_3 = $_POST["opme_lip_3"];
                    $opme_jaw_1 = $_POST["opme_jaw_1"];
                    $opme_jaw_2 = $_POST["opme_jaw_2"];
                    $opme_jaw_3 = $_POST["opme_jaw_3"];
                    $opme_tongue_1 = $_POST["opme_tongue_1"];
                    $opme_tongue_2 = $_POST["opme_tongue_2"];
                    $opme_tongue_3 = $_POST["opme_tongue_3"];
                    $oral_cavity_1 = $_POST["oral_cavity_1"];
                    $oral_cavity_2 = $_POST["oral_cavity_2"];
                    $poster_while_feeding_1 = $_POST["poster_while_feeding_1"];
                    $poster_while_feeding_2 = $_POST["poster_while_feeding_2"];
                    $dry_1 = $_POST["dry_1"];
                    $dry_2 = $_POST["dry_2"];
                    $dry_3 = $_POST["dry_3"];
                    $dry_4 = $_POST["dry_4"];
                    $dry_5 = $_POST["dry_5"];
                    $dry_6 = $_POST["dry_6"];
                    $dry_7 = $_POST["dry_7"];
                    $semiliquid_1 = $_POST["semiliquid_1"];
                    $semiliquid_2 = $_POST["semiliquid_2"];
                    $semiliquid_3 = $_POST["semiliquid_3"];
                    $semiliquid_4 = $_POST["semiliquid_4"];
                    $semiliquid_5 = $_POST["semiliquid_5"];
                    $semiliquid_6 = $_POST["semiliquid_6"];
                    $semiliquid_7 = $_POST["semiliquid_7"];
                    $liquid_1 = $_POST["liquid_1"];
                    $liquid_2 = $_POST["liquid_2"];
                    $liquid_3 = $_POST["liquid_3"];
                    $liquid_4 = $_POST["liquid_4"];
                    $liquid_5 = $_POST["liquid_5"];
                    $liquid_6 = $_POST["liquid_6"];
                    $liquid_7 = $_POST["liquid_7"];
                    $solid_1 = $_POST["solid_1"];
                    $solid_2 = $_POST["solid_2"];
                    $solid_3 = $_POST["solid_3"];
                    $solid_4 = $_POST["solid_4"];
                    $solid_5 = $_POST["solid_5"];
                    $solid_6 = $_POST["solid_6"];
                    $solid_7 = $_POST["solid_7"];
                    $tube_feeding_info_1 = $_POST["tube_feeding_info_1"];
                    $tube_feeding_info_2 = $_POST["tube_feeding_info_2"];
                    $tube_feeding_info_3 = $_POST["tube_feeding_info_3"];
                    $tube_feeding_info_4 = $_POST["tube_feeding_info_4"];
                    $tube_feeding_info_5 = $_POST["tube_feeding_info_5"];
                    $tube_feeding_shedule_1 = $_POST["tube_feeding_shedule_1"];
                    $tube_feeding_shedule_2 = $_POST["tube_feeding_shedule_2"];
                    $nutrition_1 = $_POST["nutrition_1"];
                    $nutrition_2 = $_POST["nutrition_2"];
                    $nutrition_3 = $_POST["nutrition_3"];
                    $remarks = $_POST["remarks"];
                    $recommendations = $_POST["recommendations"];
                    $update_array = array("Feeding_Concerns"=>$feeding_concerns, "Problem_Noticed_First"=>$problem_noticed_first, "Nasal_Regurgitation" => $nasal_regurgitation, 
                    "Pneumonia"=>$pneumonia , "Aspiration" => $aspiration, "Ear_Infection"=>$ear_infection , "URTI" => $URTI, "Respiratory_Stridor" => $respiratory_stridor, 
                    "Wheezing" => $wheezing, "Asthma" => $asthma, "Nasal_Chest_Congestion" => $nasal_chest_congestion, "Feeding_Milestones_1" => $feeding_milestones_1, 
                    "Feeding_Milestones_2" => $feeding_milestones_2, "Feeding_Milestones_3" => $feeding_milestones_3, "Feeding_Milestones_4" => $feeding_milestones_4, 
                    "Feeding_Milestones_5" => $feeding_milestones_5, "Feeding_Milestones_6" => $feeding_milestones_6, "Feeding_Milestones_7" => $feeding_milestones_7, 
                    "Feeding_Milestones_8" => $feeding_milestones_8, "Sensory_Issue_1" => $sensory_issue_1, "Sensory_Issue_2" => $sensory_issue_2, 
                    "Sensory_Issue_3" => $sensory_issue_3, "Sensory_Issue_4" => $sensory_issue_4, "Sensory_Issue_5" => $sensory_issue_5, "Sensory_Issue_6" => $sensory_issue_6, 
                    "sensory_issue_6_checked" => $sensory_issue_6_checked, "Meal_Time_Behaviour_Checklist_1" => $meal_time_behaviour_checklist_1, 
                    "Meal_Time_Behaviour_Checklist_2" => $meal_time_behaviour_checklist_2, "Meal_Time_Behaviour_Checklist_3" => $meal_time_behaviour_checklist_3, 
                    "Meal_Time_Behaviour_Checklist_4" => $meal_time_behaviour_checklist_4, "Meal_Time_Behaviour_Checklist_5" => $meal_time_behaviour_checklist_5, 
                    "Meal_Time_Behaviour_Checklist_6" => $meal_time_behaviour_checklist_6, "Meal_Time_Behaviour_Checklist_7" => $meal_time_behaviour_checklist_7, 
                    "Meal_Time_Behaviour_Checklist_8" => $meal_time_behaviour_checklist_8, "Meal_Time_Behaviour_Checklist_9" => $meal_time_behaviour_checklist_9, 
                    "Meal_Time_Behaviour_Checklist_10" => $meal_time_behaviour_checklist_10, "Meal_Time_Behaviour_Checklist_11" => $meal_time_behaviour_checklist_11, 
                    "Meal_Time_Behaviour_Checklist_12" => $meal_time_behaviour_checklist_12, "Opme_Lip_1" => $opme_lip_1, "Opme_Lip_2" => $opme_lip_2, "Opme_Lip_3" => $opme_lip_3, 
                    "Opme_Jaw_1" => $opme_jaw_1, "Opme_Jaw_2" => $opme_jaw_2, "Opme_Jaw_3" => $opme_jaw_3, "Opme_Tongue_1" => $opme_tongue_1, "Opme_Tongue_2" => $opme_tongue_2, 
                    "Opme_Tongue_3" => $opme_tongue_3, "Oral_Cavity_1" => $oral_cavity_1, "Oral_Cavity_2" => $oral_cavity_2, "Poster_While_Feeding_1" => $poster_while_feeding_1, 
                    "Poster_While_Feeding_2" => $poster_while_feeding_2, "Dry_1" => $dry_1, "Dry_2" => $dry_2, "Dry_3" => $dry_3, "Dry_4" => $dry_4, "Dry_5" => $dry_5, "Dry_6" => $dry_6, 
                    "Dry_7" => $dry_7, "Semiliquid_1" => $semiliquid_1, "Semiliquid_2" => $semiliquid_2, "Semiliquid_3" => $semiliquid_3, "Semiliquid_4" => $semiliquid_4, "Semiliquid_5" => $semiliquid_5, 
                    "Semiliquid_6" => $semiliquid_6, "Semiliquid_7" => $semiliquid_7, "Liquid_1" => $liquid_1, "Liquid_2" => $liquid_2, "Liquid_3" => $liquid_3, "Liquid_4" => $liquid_4, 
                    "Liquid_5" => $liquid_5, "Liquid_6" => $liquid_6, "Liquid_7" => $liquid_7, "Solid_1" => $solid_1, "Solid_2" => $solid_2, "Solid_3" => $solid_3, "Solid_4" => $solid_4, 
                    "Solid_5" => $solid_5, "Solid_6" => $solid_6, "Solid_7" => $solid_7, "Tube_Feeding_Info_1" => $tube_feeding_info_1, "Tube_Feeding_Info_2" => $tube_feeding_info_2, 
                    "Tube_Feeding_Info_3" => $tube_feeding_info_3, "Tube_Feeding_Info_4" => $tube_feeding_info_4, "Tube_Feeding_Info_5" => $tube_feeding_info_5, 
                    "Tube_Feeding_Shedule_1" => $tube_feeding_shedule_1, "Tube_Feeding_Shedule_2" => $tube_feeding_shedule_2, "Nutrition_1" => $nutrition_1, "Nutrition_2" => $nutrition_2, 
                    "Nutrition_3" => $nutrition_3, "Remarks" => $remarks, "Recommendations" => $recommendations);


                    $this->main_model->update_feeding_proforma($update_array, $this->main_model->getFormRecordsUsingId($form_id, $patient_Id)[0]->Id);

                    echo "<script>window.close();</script>"; 

                
            }  


            if($this->main_model->getFormRecordsUsingPatientId($patient_Id, $form_id) > 0){
                $data['edit'] = true;
                $data['formRecordsData'] = $this->main_model->get_feeding_proforma($this->main_model->getFormRecordsUsingId($form_id, $patient_Id)[0]->Id);
            }else{
                $data['edit'] = false;
            }
            
            $data['formsData'] = $this->main_model->getSingleFormsmaster($form_id);
            $data['patientData'] = $this->main_model->getPatientData($patient_Id)[0];
            $data['page_title'] = "Form | Feeding Proforma";
		    $data['content'] = "form_8_feeding_proforma";
            $data['action'] = $action;
            $this->load->view('template', $data);
        }    

        if($form_id == 9){

            if(isset($_POST['add_adult_case_history'])){

                $patientName = $this->input->post('patientName');
                $patientId = $this->input->post('patientId');
                $age = $this->input->post('age');
                $date1 = strtr($this->input->post('date'), '/', '-');
        $date = date('Y-m-d', strtotime($date1));
                $gender = $this->input->post('gender');
                $occupation = $this->input->post('occupation');
                $reffred_by = $this->input->post('reffred_by');
                $time = $this->input->post('time');

                $ar = array("PatientName"=>$patientName,"PatientId"=>$patient_Id, "Reffered_By"=>$reffred_by, "Time"=>$time ,"Age"=> $age, "Gender"=> $gender, "Date"=> $date, "Occupation" => $occupation, "FormId" => $form_id);
                $this->db->insert("formsrecords",$ar);

                $ar = array("PatientId"=>$patient_Id,"FormId" => $form_id);
                $this->db->insert("formsrecords",$ar);
                
                $insert_id = $this->db->insert_id();

                if($this->db->affected_rows() > 0){

                    $HCRHS_status = $_POST["HCRHS_status"];
                    $HCRHS_rlb = $_POST["HCRHS_rlb"];
                    $HCRHS_since = $_POST["HCRHS_since"];
                    $HCRHS_onset = $_POST["HCRHS_onset"];
                    $HCRHS_nature = $_POST["HCRHS_nature"];
                    $HCBS_status = $_POST["HCBS_status"];
                    $HCBS_rlb = $_POST["HCBS_rlb"];
                    $HCBS_since = $_POST["HCBS_since"];
                    $HCBS_associated = $_POST["HCBS_associated"];
                    $HCEP_status = $_POST["HCEP_status"];
                    $HCEP_rlb = $_POST["HCEP_rlb"];
                    $HCEP_since = $_POST["HCEP_since"];
                    $HCEP_nature = $_POST["HCEP_nature"];
                    $HCED_status = $_POST["HCED_status"];
                    $HCED_rlb = $_POST["HCED_rlb"];
                    $HCED_since = $_POST["HCED_since"];
                    $HCED_type = $_POST["HCED_type"];
                    $HCED_episode = $_POST["HCED_episode"];
                    $HCT_status = $_POST["HCT_status"];
                    $HCT_rlb = $_POST["HCT_rlb"];
                    $HCT_since = $_POST["HCT_since"];
                    $HCT_type = $_POST["HCT_type"];
                    $HCT_nature = $_POST["HCT_nature"];
                    $HCT_duration = $_POST["HCT_duration"];
                    $HCVG_status = $_POST["HCVG_status"];
                    $HCVG_since = $_POST["HCVG_since"];
                    $HCVG_nature = $_POST["HCVG_nature"];
                    $COSUD_status = $_POST["COSUD_status"];
                    $COSUD_situation = $_POST["COSUD_situation"];
                    $HOEN_status = $_POST["HOEN_status"];
                    $HOEN_noise = $_POST["HOEN_noise"];
                    $HOEN_hour_day = $_POST["HOEN_hour_day"];
                    $HOEN_since = $_POST["HOEN_since"];
                    $HOEN_details = $_POST["HOEN_details"];
                    $HOT_status = $_POST["HOT_status"];
                    $HOT_to_ear = $_POST["HOT_to_ear"];
                    $HOT_to_head = $_POST["HOT_to_head"];
                    $HOT_details = $_POST["HOT_details"];
                    $COILS_status = $_POST["COILS_status"];
                    $COILS_noise = $_POST["COILS_noise"];
                    $COILS_since = $_POST["COILS_since"];
                    $HOOTD_status = $_POST["HOOTD_status"];
                    $HOOTD_details = $_POST["HOOTD_details"];
                    $HOD_status = $_POST["HOD_status"];
                    $HOD_since = $_POST["HOD_since"];
                    $HOBVI_status = $_POST["HOBVI_status"];
                    $HOBVI_details = $_POST["HOBVI_details"];
                    $ASA_status = $_POST["ASA_status"];
                    $ASA_details = $_POST["ASA_details"];
                    $AOAP_status = $_POST["AOAP_status"];
                    $AOAP_details = $_POST["AOAP_details"];
                    $HOPTI = $_POST["HOPTI"];
                    $HOUHA_status = $_POST["HOUHA_status"];
                    $HOUHA_details = $_POST["HOUHA_details"];
                    $HOUHA_duration = $_POST["HOUHA_duration"];
                    $ENT_findings = $_POST["ENT_findings"];
                    $Audiological_evaluation = $_POST["Audiological_evaluation"];
                    $ENT_Review = $_POST["ENT_Review"];

                    $ar_ao = array("HCRHS_Status" => $HCRHS_status, "HCRHS_RLB" => $HCRHS_rlb, "HCRHS_Since" => $HCRHS_since, "HCRHS_Onset" => $HCRHS_onset, "HCRHS_Nature" => $HCRHS_nature, 
                    "HCBS_Status" => $HCBS_status, "HCBS_RLB" => $HCBS_rlb, "HCBS_Since" => $HCBS_since, "HCBS_Associated" => $HCBS_associated, "HCEP_Status" => $HCEP_status, "HCEP_RLB" => $HCEP_rlb, 
                    "HCEP_Since" => $HCEP_since, "HCEP_Nature" => $HCEP_nature, "HCED_Status" => $HCED_status, "HCED_RLB" => $HCED_rlb, "HCED_Since" => $HCED_since, "HCED_Type" => $HCED_type, 
                    "HCED_Episode" => $HCED_episode, "HCT_Status" => $HCT_status, "HCT_RLB" => $HCT_rlb, "HCT_Since" => $HCT_since, "HCT_Type" => $HCT_type, "HCT_Nature" => $HCT_nature, 
                    "HCT_Duration" => $HCT_duration, "HCVG_Status" => $HCVG_status, "HCVG_Since" => $HCVG_since, "HCVG_Nature" => $HCVG_nature, "COSUD_Status" => $COSUD_status, 
                    "COSUD_Situation" => $COSUD_situation, "HOEN_Status" => $HOEN_status, "HOEN_Noise" => $HOEN_noise, "HOEN_Hour_Day" => $HOEN_hour_day, "HOEN_Since" => $HOEN_since, 
                    "HOEN_Details" => $HOEN_details, "HOT_Status" => $HOT_status, "HOT_To_Ear" => $HOT_to_ear, "HOT_To_Head" => $HOT_to_head, "HOT_Details" => $HOT_details, 
                    "COILS_Status" => $COILS_status, "COILS_Noise" => $COILS_noise, "COILS_Since" => $COILS_since, "HOOTD_Status" => $HOOTD_status, "HOOTD_Details" => $HOOTD_details, 
                    "HOD_Status" => $HOD_status, "HOD_Since" => $HOD_since, "HOBVI_Status" => $HOBVI_status, "HOBVI_Details" => $HOBVI_details, "ASA_Status" => $ASA_status, "ASA_Details" => $ASA_details, 
                    "AOAP_Status" => $AOAP_status, "AOAP_Details" => $AOAP_details, "HOPTI" => $HOPTI, "HOUHA_Status" => $HOUHA_status, "HOUHA_Details" => $HOUHA_details, 
                    "HOUHA_Duration" => $HOUHA_duration, "ENT_findings" => $ENT_findings, "Audiological_Evaluation" => $Audiological_evaluation, "ENT_Review" => $ENT_Review, "FormId" => $insert_id);


                    $this->db->insert("adult_case_history",$ar_ao);

                    if($this->db->affected_rows() > 0){
                        echo "<script>window.close();</script>";
                    }    
                }else{
                    echo `<script>window.alert("SomeThing Went Wrong")</script>`;
                }

                
            }  

            if(isset($_POST['edit_adult_case_history'])){

                $patientName = $this->input->post('patientName');
                $patientId = $this->input->post('patientId');
                $age = $this->input->post('age');
                $date1 = strtr($this->input->post('date'), '/', '-');
        $date = date('Y-m-d', strtotime($date1));
                $gender = $this->input->post('gender');
                $occupation = $this->input->post('occupation');
                $reffred_by = $this->input->post('reffred_by');
                $time = $this->input->post('time');

                $update_ar = array("PatientName"=>$patientName,"PatientId"=>$patient_Id, "Reffered_By"=>$reffred_by, "Time"=>$time ,"Age"=> $age, "Gender"=> $gender, "Date"=> $date, "Occupation" => $occupation, "FormId" => $form_id);
                $this->db->where("FormId", $form_id);
                $this->db->where("PatientId", $patientId);
                $this->db->update("formsrecords",$update_ar);

                    $HCRHS_status = $_POST["HCRHS_status"];
                    $HCRHS_rlb = $_POST["HCRHS_rlb"];
                    $HCRHS_since = $_POST["HCRHS_since"];
                    $HCRHS_onset = $_POST["HCRHS_onset"];
                    $HCRHS_nature = $_POST["HCRHS_nature"];
                    $HCBS_status = $_POST["HCBS_status"];
                    $HCBS_rlb = $_POST["HCBS_rlb"];
                    $HCBS_since = $_POST["HCBS_since"];
                    $HCBS_associated = $_POST["HCBS_associated"];
                    $HCEP_status = $_POST["HCEP_status"];
                    $HCEP_rlb = $_POST["HCEP_rlb"];
                    $HCEP_since = $_POST["HCEP_since"];
                    $HCEP_nature = $_POST["HCEP_nature"];
                    $HCED_status = $_POST["HCED_status"];
                    $HCED_rlb = $_POST["HCED_rlb"];
                    $HCED_since = $_POST["HCED_since"];
                    $HCED_type = $_POST["HCED_type"];
                    $HCED_episode = $_POST["HCED_episode"];
                    $HCT_status = $_POST["HCT_status"];
                    $HCT_rlb = $_POST["HCT_rlb"];
                    $HCT_since = $_POST["HCT_since"];
                    $HCT_type = $_POST["HCT_type"];
                    $HCT_nature = $_POST["HCT_nature"];
                    $HCT_duration = $_POST["HCT_duration"];
                    $HCVG_status = $_POST["HCVG_status"];
                    $HCVG_since = $_POST["HCVG_since"];
                    $HCVG_nature = $_POST["HCVG_nature"];
                    $COSUD_status = $_POST["COSUD_status"];
                    $COSUD_situation = $_POST["COSUD_situation"];
                    $HOEN_status = $_POST["HOEN_status"];
                    $HOEN_noise = $_POST["HOEN_noise"];
                    $HOEN_hour_day = $_POST["HOEN_hour_day"];
                    $HOEN_since = $_POST["HOEN_since"];
                    $HOEN_details = $_POST["HOEN_details"];
                    $HOT_status = $_POST["HOT_status"];
                    $HOT_to_ear = $_POST["HOT_to_ear"];
                    $HOT_to_head = $_POST["HOT_to_head"];
                    $HOT_details = $_POST["HOT_details"];
                    $COILS_status = $_POST["COILS_status"];
                    $COILS_noise = $_POST["COILS_noise"];
                    $COILS_since = $_POST["COILS_since"];
                    $HOOTD_status = $_POST["HOOTD_status"];
                    $HOOTD_details = $_POST["HOOTD_details"];
                    $HOD_status = $_POST["HOD_status"];
                    $HOD_since = $_POST["HOD_since"];
                    $HOBVI_status = $_POST["HOBVI_status"];
                    $HOBVI_details = $_POST["HOBVI_details"];
                    $ASA_status = $_POST["ASA_status"];
                    $ASA_details = $_POST["ASA_details"];
                    $AOAP_status = $_POST["AOAP_status"];
                    $AOAP_details = $_POST["AOAP_details"];
                    $HOPTI = $_POST["HOPTI"];
                    $HOUHA_status = $_POST["HOUHA_status"];
                    $HOUHA_details = $_POST["HOUHA_details"];
                    $HOUHA_duration = $_POST["HOUHA_duration"];
                    $ENT_findings = $_POST["ENT_findings"];
                    $Audiological_evaluation = $_POST["Audiological_evaluation"];
                    $ENT_Review = $_POST["ENT_Review"];
                    $Follow_up = $_POST["Follow_up"];

                    $update_array = array("HCRHS_Status" => $HCRHS_status, "HCRHS_RLB" => $HCRHS_rlb, "HCRHS_Since" => $HCRHS_since, "HCRHS_Onset" => $HCRHS_onset, "HCRHS_Nature" => $HCRHS_nature, 
                    "HCBS_Status" => $HCBS_status, "HCBS_RLB" => $HCBS_rlb, "HCBS_Since" => $HCBS_since, "HCBS_Associated" => $HCBS_associated, "HCEP_Status" => $HCEP_status, "HCEP_RLB" => $HCEP_rlb, 
                    "HCEP_Since" => $HCEP_since, "HCEP_Nature" => $HCEP_nature, "HCED_Status" => $HCED_status, "HCED_RLB" => $HCED_rlb, "HCED_Since" => $HCED_since, "HCED_Type" => $HCED_type, 
                    "HCED_Episode" => $HCED_episode, "HCT_Status" => $HCT_status, "HCT_RLB" => $HCT_rlb, "HCT_Since" => $HCT_since, "HCT_Type" => $HCT_type, "HCT_Nature" => $HCT_nature, 
                    "HCT_Duration" => $HCT_duration, "HCVG_Status" => $HCVG_status, "HCVG_Since" => $HCVG_since, "HCVG_Nature" => $HCVG_nature, "COSUD_Status" => $COSUD_status, 
                    "COSUD_Situation" => $COSUD_situation, "HOEN_Status" => $HOEN_status, "HOEN_Noise" => $HOEN_noise, "HOEN_Hour_Day" => $HOEN_hour_day, "HOEN_Since" => $HOEN_since, 
                    "HOEN_Details" => $HOEN_details, "HOT_Status" => $HOT_status, "HOT_To_Ear" => $HOT_to_ear, "HOT_To_Head" => $HOT_to_head, "HOT_Details" => $HOT_details, 
                    "COILS_Status" => $COILS_status, "COILS_Noise" => $COILS_noise, "COILS_Since" => $COILS_since, "HOOTD_Status" => $HOOTD_status, "HOOTD_Details" => $HOOTD_details, 
                    "HOD_Status" => $HOD_status, "HOD_Since" => $HOD_since, "HOBVI_Status" => $HOBVI_status, "HOBVI_Details" => $HOBVI_details, "ASA_Status" => $ASA_status, "ASA_Details" => $ASA_details, 
                    "AOAP_Status" => $AOAP_status, "AOAP_Details" => $AOAP_details, "HOPTI" => $HOPTI, "HOUHA_Status" => $HOUHA_status, "HOUHA_Details" => $HOUHA_details, 
                    "HOUHA_Duration" => $HOUHA_duration, "ENT_findings" => $ENT_findings, "Audiological_Evaluation" => $Audiological_evaluation, "ENT_Review" => $ENT_Review, "Follow_Up" => $Follow_up);


                    $this->main_model->update_adult_case_history($update_array, $this->main_model->getFormRecordsUsingId($form_id, $patient_Id)[0]->Id);

                    echo "<script>window.close();</script>"; 

                
            }  

            if($this->main_model->getFormRecordsUsingPatientId($patient_Id, $form_id) > 0){
                $data['edit'] = true;
                $data['formRecordsData'] = $this->main_model->getFormRecordsUsingId($form_id, $patient_Id);
                $data['get_adult_case_historyData'] = $this->main_model->get_adult_case_history($this->main_model->getFormRecordsUsingId($form_id, $patient_Id)[0]->Id);
            }else{
                $data['edit'] = false;
            }

            $data['formsData'] = $this->main_model->getSingleFormsmaster($form_id);
            $data['patientData'] = $this->main_model->getPatientData($patient_Id)[0];
            $data['page_title'] = "Form | Adult Case History";
		    $data['content'] = "form_9_adult_case_history";
            $data['action'] = $action;
            $this->load->view('template', $data);
        }    

        if($form_id == 10){

            if(isset($_POST['add_pediatric_case_history'])){

                $patientName = $this->input->post('patientName');
                $patientId = $this->input->post('patientId');
                $age = $this->input->post('age');
                $date1 = strtr($this->input->post('date'), '/', '-');
        $date = date('Y-m-d', strtotime($date1));
                $gender = $this->input->post('gender');
                $informant = $this->input->post('informant');
                $reffred_by = $this->input->post('reffred_by');
                $time = $this->input->post('time');

                $ar = array("PatientName"=>$patientName,"PatientId"=>$patient_Id, "Reffered_By"=>$reffred_by, "Time"=>$time ,"Age"=> $age, "Gender"=> $gender, "Date"=> $date, "Informant" => $informant, "FormId" => $form_id);
                $this->db->insert("formsrecords",$ar);
                
                $insert_id = $this->db->insert_id();

                if($this->db->affected_rows() > 0){

                    $complaints = $_POST["complaints"];
                    $complaints_other = $_POST["complaints_other"];
                    $responds_to_sound = $_POST["responds_to_sound"];
                    $responds_to_level = $_POST["responds_to_level"];
                    $type_of_response = $_POST["type_of_response"];
                    $type_of_other_response = $_POST["type_of_other_response"];
                    $NCR_status = $_POST["NCR_status"];
                    $mode_of_communication = $_POST["mode_of_communication"];
                    $any_IDD_select = $_POST["any_IDD_select"];
                    $any_IDD = $_POST["any_IDD"];
                    $exposure_radiatiopn_select = $_POST["exposure_radiatiopn_select"];
                    $exposure_radiatiopn = $_POST["exposure_radiatiopn"];
                    $any_medications_select = $_POST["any_medications_select"];
                    $any_medications = $_POST["any_medications"];
                    $any_KOTA_select = $_POST["any_KOTA_select"];
                    $any_KOTA = $_POST["any_KOTA"];
                    $RFI_select = $_POST["RFI_select"];
                    $RFI = $_POST["RFI"];
                    $delivery_place = $_POST["delivery_place"];
                    $term_select = $_POST["term_select"];
                    $term = $_POST["term"];
                    $type_of_delivery = $_POST["type_of_delivery"];
                    $birth_color = $_POST["birth_color"];
                    $birth_cry = $_POST["birth_cry"];
                    $birth_weight = $_POST["birth_weight"];
                    $postnatal_history = $_POST["postnatal_history"];
                    $neck_control = $_POST["neck_control"];
                    $turn_over = $_POST["turn_over"];
                    $crawling = $_POST["crawling"];
                    $sitting = $_POST["sitting"];
                    $standing = $_POST["standing"];
                    $walking = $_POST["walking"];
                    $handedness = $_POST["handedness"];
                    $cooing = $_POST["cooing"];
                    $babbling = $_POST["babbling"];
                    $first_word = $_POST["first_word"];
                    $word_phases = $_POST["word_phases"];
                    $sentence_level = $_POST["sentence_level"];
                    $family_history = $_POST["family_history"];
                    $history_IPT = $_POST["history_IPT"];
                    $history_seizures_radio = $_POST["history_seizures_radio"];
                    $history_seizures = $_POST["history_seizures"];
                    $currently_studying_in = $_POST["currently_studying_in"];
                    $academic_performance = $_POST["academic_performance"];
                    $remarks = $_POST["remarks"];
                    $DCFET_to_scratch = $_POST["DCFET_to_scratch"];
                    $DCFET_to_putting = $_POST["DCFET_to_putting"];
                    $HCED_status = $_POST["HCED_status"];
                    $HCED_rlb = $_POST["HCED_rlb"];
                    $HCED_since = $_POST["HCED_since"];
                    $right_ear_pinna = $_POST["right_ear_pinna"];
                    $left_ear_pinna = $_POST["left_ear_pinna"];
                    $right_ear_EAM = $_POST["right_ear_EAM"];
                    $left_ear_EAM = $_POST["left_ear_EAM"];
                    $right_ear_tympanic_membrane = $_POST["right_ear_tympanic_membrane"];
                    $left_ear_tympanic_membrane = $_POST["left_ear_tympanic_membrane"];
                    $any_remarks = $_POST["any_remarks"];
                    $ENT_findings = $_POST["ENT_findings"];
                    $recommendations = $_POST["recommendations"];

                    $ar_ao = array("Complaints" => $complaints,"Complaints_Other" => $complaints_other,"Responds_To_Sound" => $responds_to_sound,"Responds_To_Level" => $responds_to_level,
                    "Type_Of_Response" => $type_of_response,"Type_Of_Other_Response" => $type_of_other_response,"NCR_Status" => $NCR_status,"Mode_Of_Communication" => $mode_of_communication,
                    "Any_IDD_Select" => $any_IDD_select,"Any_IDD" => $any_IDD,"Exposure_Radiatiopn_Select" => $exposure_radiatiopn_select,"Exposure_Radiatiopn" => $exposure_radiatiopn,
                    "Any_Medications_Select" => $any_medications_select,"Any_Medications" => $any_medications,"Any_KOTA_Select" => $any_KOTA_select,"Any_KOTA" => $any_KOTA,
                    "RFI_Select" => $RFI_select,"RFI" => $RFI,"Delivery_Place" => $delivery_place,"Term_Select" => $term_select,"Term" => $term,"Type_Of_Delivery" => $type_of_delivery,
                    "Birth_Color" => $birth_color,"Birth_Cry" => $birth_cry,"Birth_Weight" => $birth_weight,"Postnatal_History" => $postnatal_history,"Neck_Control" => $neck_control,
                    "Turn_Over" => $turn_over,"Crawling" => $crawling,"Sitting" => $sitting,"Standing" => $standing,"Walking" => $walking,"Handedness" => $handedness,"Cooing" => $cooing,
                    "Babbling" => $babbling,"First_Word" => $first_word,"Word_Phases" => $word_phases,"Sentence_Level" => $sentence_level,"Family_History" => $family_history,
                    "History_IPT" => $history_IPT,"History_Seizures_Radio" => $history_seizures_radio,"History_Seizures" => $history_seizures,"Currently_Studying_In" => $currently_studying_in,
                    "Academic_Performance" => $academic_performance,"Remarks" => $remarks,"DCFET_To_Scratch" => $DCFET_to_scratch,"DCFET_To_Putting" => $DCFET_to_putting,"HCED_Status" => $HCED_status,
                    "HCED_RLB" => $HCED_rlb,"HCED_Since" => $HCED_since,"Right_Ear_Pinna" => $right_ear_pinna,"Left_Ear_Pinna" => $left_ear_pinna,"Right_Ear_EAM" => $right_ear_EAM,
                    "Left_Ear_EAM" => $left_ear_EAM,"Right_Ear_Tympanic_Membrane" => $right_ear_tympanic_membrane,"Left_Ear_Tympanic_Membrane" => $left_ear_tympanic_membrane,
                    "Any_Remarks" => $any_remarks,"ENT_Findings" => $ENT_findings,"Recommendations" => $recommendations, "FormId" => $insert_id);


                    $this->db->insert("pediatric_case_history",$ar_ao);

                    if($this->db->affected_rows() > 0){
                        echo "<script>window.close();</script>";
                    }    
                }else{
                    echo `<script>window.alert("SomeThing Went Wrong")</script>`;
                }

                
            }

            
            if(isset($_POST['edit_pediatric_case_history'])){

                $patientName = $this->input->post('patientName');
                $patientId = $this->input->post('patientId');
                $age = $this->input->post('age');
                $date1 = strtr($this->input->post('date'), '/', '-');
        $date = date('Y-m-d', strtotime($date1));
                $gender = $this->input->post('gender');
                $informant = $this->input->post('informant');
                $reffred_by = $this->input->post('reffred_by');
                $time = $this->input->post('time');

                $update_ar = array("PatientName"=>$patientName,"PatientId"=>$patient_Id, "Reffered_By"=>$reffred_by, "Time"=>$time ,"Age"=> $age, "Gender"=> $gender, "Date"=> $date, "Informant" => $informant, "FormId" => $form_id);
                $this->db->where("FormId", $form_id);
                $this->db->where("PatientId", $patientId);
                $this->db->update("formsrecords",$update_ar);
                
                $insert_id = $this->db->insert_id();

                    $complaints = $_POST["complaints"];
                    $complaints_other = $_POST["complaints_other"];
                    $responds_to_sound = $_POST["responds_to_sound"];
                    $responds_to_level = $_POST["responds_to_level"];
                    $type_of_response = $_POST["type_of_response"];
                    $type_of_other_response = $_POST["type_of_other_response"];
                    $NCR_status = $_POST["NCR_status"];
                    $mode_of_communication = $_POST["mode_of_communication"];
                    $any_IDD_select = $_POST["any_IDD_select"];
                    $any_IDD = $_POST["any_IDD"];
                    $exposure_radiatiopn_select = $_POST["exposure_radiatiopn_select"];
                    $exposure_radiatiopn = $_POST["exposure_radiatiopn"];
                    $any_medications_select = $_POST["any_medications_select"];
                    $any_medications = $_POST["any_medications"];
                    $any_KOTA_select = $_POST["any_KOTA_select"];
                    $any_KOTA = $_POST["any_KOTA"];
                    $RFI_select = $_POST["RFI_select"];
                    $RFI = $_POST["RFI"];
                    $delivery_place = $_POST["delivery_place"];
                    $term_select = $_POST["term_select"];
                    $term = $_POST["term"];
                    $type_of_delivery = $_POST["type_of_delivery"];
                    $birth_color = $_POST["birth_color"];
                    $birth_cry = $_POST["birth_cry"];
                    $birth_weight = $_POST["birth_weight"];
                    $postnatal_history = $_POST["postnatal_history"];
                    $neck_control = $_POST["neck_control"];
                    $turn_over = $_POST["turn_over"];
                    $crawling = $_POST["crawling"];
                    $sitting = $_POST["sitting"];
                    $standing = $_POST["standing"];
                    $walking = $_POST["walking"];
                    $handedness = $_POST["handedness"];
                    $cooing = $_POST["cooing"];
                    $babbling = $_POST["babbling"];
                    $first_word = $_POST["first_word"];
                    $word_phases = $_POST["word_phases"];
                    $sentence_level = $_POST["sentence_level"];
                    $family_history = $_POST["family_history"];
                    $history_IPT = $_POST["history_IPT"];
                    $history_seizures_radio = $_POST["history_seizures_radio"];
                    $history_seizures = $_POST["history_seizures"];
                    $currently_studying_in = $_POST["currently_studying_in"];
                    $academic_performance = $_POST["academic_performance"];
                    $remarks = $_POST["remarks"];
                    $DCFET_to_scratch = $_POST["DCFET_to_scratch"];
                    $DCFET_to_putting = $_POST["DCFET_to_putting"];
                    $HCED_status = $_POST["HCED_status"];
                    $HCED_rlb = $_POST["HCED_rlb"];
                    $HCED_since = $_POST["HCED_since"];
                    $right_ear_pinna = $_POST["right_ear_pinna"];
                    $left_ear_pinna = $_POST["left_ear_pinna"];
                    $right_ear_EAM = $_POST["right_ear_EAM"];
                    $left_ear_EAM = $_POST["left_ear_EAM"];
                    $right_ear_tympanic_membrane = $_POST["right_ear_tympanic_membrane"];
                    $left_ear_tympanic_membrane = $_POST["left_ear_tympanic_membrane"];
                    $any_remarks = $_POST["any_remarks"];
                    $ENT_findings = $_POST["ENT_findings"];
                    $recommendations = $_POST["recommendations"];

                    $update_array = array("Complaints" => $complaints,"Complaints_Other" => $complaints_other,"Responds_To_Sound" => $responds_to_sound,"Responds_To_Level" => $responds_to_level,
                    "Type_Of_Response" => $type_of_response,"Type_Of_Other_Response" => $type_of_other_response,"NCR_Status" => $NCR_status,"Mode_Of_Communication" => $mode_of_communication,
                    "Any_IDD_Select" => $any_IDD_select,"Any_IDD" => $any_IDD,"Exposure_Radiatiopn_Select" => $exposure_radiatiopn_select,"Exposure_Radiatiopn" => $exposure_radiatiopn,
                    "Any_Medications_Select" => $any_medications_select,"Any_Medications" => $any_medications,"Any_KOTA_Select" => $any_KOTA_select,"Any_KOTA" => $any_KOTA,
                    "RFI_Select" => $RFI_select,"RFI" => $RFI,"Delivery_Place" => $delivery_place,"Term_Select" => $term_select,"Term" => $term,"Type_Of_Delivery" => $type_of_delivery,
                    "Birth_Color" => $birth_color,"Birth_Cry" => $birth_cry,"Birth_Weight" => $birth_weight,"Postnatal_History" => $postnatal_history,"Neck_Control" => $neck_control,
                    "Turn_Over" => $turn_over,"Crawling" => $crawling,"Sitting" => $sitting,"Standing" => $standing,"Walking" => $walking,"Handedness" => $handedness,"Cooing" => $cooing,
                    "Babbling" => $babbling,"First_Word" => $first_word,"Word_Phases" => $word_phases,"Sentence_Level" => $sentence_level,"Family_History" => $family_history,
                    "History_IPT" => $history_IPT,"History_Seizures_Radio" => $history_seizures_radio,"History_Seizures" => $history_seizures,"Currently_Studying_In" => $currently_studying_in,
                    "Academic_Performance" => $academic_performance,"Remarks" => $remarks,"DCFET_To_Scratch" => $DCFET_to_scratch,"DCFET_To_Putting" => $DCFET_to_putting,"HCED_Status" => $HCED_status,
                    "HCED_RLB" => $HCED_rlb,"HCED_Since" => $HCED_since,"Right_Ear_Pinna" => $right_ear_pinna,"Left_Ear_Pinna" => $left_ear_pinna,"Right_Ear_EAM" => $right_ear_EAM,
                    "Left_Ear_EAM" => $left_ear_EAM,"Right_Ear_Tympanic_Membrane" => $right_ear_tympanic_membrane,"Left_Ear_Tympanic_Membrane" => $left_ear_tympanic_membrane,
                    "Any_Remarks" => $any_remarks,"ENT_Findings" => $ENT_findings,"Recommendations" => $recommendations);
                    
                    $this->main_model->update_pediatric_case_history($update_array, $this->main_model->getFormRecordsUsingId($form_id, $patient_Id)[0]->Id);

                    echo "<script>window.close();</script>"; 

                
            }

            if($this->main_model->getFormRecordsUsingPatientId($patient_Id, $form_id) > 0){
                $data['edit'] = true;
                $data['formRecordsData'] = $this->main_model->getFormRecordsUsingId($form_id, $patient_Id);
                $data['pediatric_case_historyData'] = $this->main_model->get_pediatric_case_history($this->main_model->getFormRecordsUsingId($form_id, $patient_Id)[0]->Id);
            }else{
                $data['edit'] = false;
            }

            $data['formsData'] = $this->main_model->getSingleFormsmaster($form_id);
            $data['patientData'] = $this->main_model->getPatientData($patient_Id)[0];
            $data['page_title'] = "Form |  Pediatric Case History";
		    $data['content'] = "form_10_pediatric_case_history";
            $data['action'] = $action;
            $this->load->view('template', $data);
        }

        if($form_id == 11){

            if(isset($_POST['add_speech_case_history'])){

                $patientName = $this->input->post('patientName');
                $patientId = $this->input->post('patientId');
                $age = $this->input->post('age');
                $date1 = strtr($this->input->post('date'), '/', '-');
        $date = date('Y-m-d', strtotime($date1));
                $gender = $this->input->post('gender');
                $informant = $this->input->post('informant');
                $relation_with_patient = $this->input->post('relation_with_patient');
                $time = $this->input->post('time');
                $languages_known = $this->input->post('languages_known');
                $provisionalDiagnosis = $this->input->post('provisionalDiagnosis');
                $mobile = $this->input->post('mobile');

                $ar = array("PatientName"=>$patientName,"PatientId"=>$patient_Id,"Mobile"=>$mobile, "ProvisionalDiagnosis"=>$provisionalDiagnosis , "Languages_Known" => $languages_known,"Relation_With_Patient"=>$relation_with_patient, "Time"=>$time ,"Age"=> $age, "Gender"=> $gender, "Date"=> $date, "Informant" => $informant, "FormId" => $form_id);
                $this->db->insert("formsrecords",$ar);
                
                $insert_id = $this->db->insert_id();

                if($this->db->affected_rows() > 0){

                    $complaints = $this->input->post("complaints");
                    $family_history = $this->input->post("family_history");
                    $mother_health_pregrancy = $this->input->post("mother_health_pregrancy");
                    $any_medications = $this->input->post("any_medications");
                    $any_kind_of_trauma = $this->input->post("any_kind_of_trauma");
                    $x_ray_exposure = $this->input->post("x_ray_exposure");
                    $rh_factor = $this->input->post("rh_factor");
                    $hypertension = $this->input->post("hypertension");
                    $BP = $this->input->post("BP");
                    $others_prenatal = $this->input->post("others_prenatal");
                    $delivery_place = $this->input->post("delivery_place");
                    $term_select = $this->input->post("term_select");
                    $no_of_weeks = $this->input->post("no_of_weeks");
                    $type_of_delivery = $this->input->post("type_of_delivery");
                    $birth_color = $this->input->post("birth_color");
                    $birth_cry = $this->input->post("birth_cry");
                    $birth_weight = $this->input->post("birth_weight");
                    $other_perinatal = $this->input->post("other_perinatal");
                    $feeding = $this->input->post("feeding");
                    $other_feeding = $this->input->post("other_feeding");
                    $any_complications = $this->input->post("any_complications");
                    $any_remarks = $this->input->post("any_remarks");
                    $neck_control = $this->input->post("neck_control");
                    $turn_over = $this->input->post("turn_over");
                    $crawling = $this->input->post("crawling");
                    $sitting = $this->input->post("sitting");
                    $standing = $this->input->post("standing");
                    $walking = $this->input->post("walking");
                    $handedness = $this->input->post("handedness");
                    $toilet_control = $this->input->post("toilet_control");
                    $hand_preference = $this->input->post("hand_preference");
                    $undressing = $this->input->post("undressing");
                    $dressing = $this->input->post("dressing");
                    $remarks_motor = $this->input->post("remarks_motor");
                    $pincer_grasp = $this->input->post("pincer_grasp");
                    $palmer_grasp = $this->input->post("palmer_grasp");
                    $eye_hand_coordination = $this->input->post("eye_hand_coordination");
                    $cooing = $this->input->post("cooing");
                    $babbling = $this->input->post("babbling");
                    $first_word = $this->input->post("first_word");
                    $word_phases = $this->input->post("word_phases");
                    $sentence_level = $this->input->post("sentence_level");
                    $remarks_sl_dev = $this->input->post("remarks_sl_dev");
                    $history_IPT = $this->input->post("history_IPT");
                    $vision = $this->input->post("vision");
                    $remarks_vision = $this->input->post("remarks_vision");
                    $hearing = $this->input->post("hearing");
                    $remarks_hearing = $this->input->post("remarks_hearing");
                    $blowing = $this->input->post("blowing");
                    $swallowing = $this->input->post("swallowing");
                    $v_chewing = $this->input->post("v_chewing");
                    $sucking = $this->input->post("sucking");
                    $v_biting = $this->input->post("v_biting");
                    $lip_structure = $this->input->post("lip_structure");
                    $puckering = $this->input->post("puckering");
                    $rounding = $this->input->post("rounding");
                    $spreading = $this->input->post("spreading");
                    $teeth_structure = $this->input->post("teeth_structure");
                    $t_biting = $this->input->post("t_biting");
                    $t_chewing = $this->input->post("t_chewing");
                    $tongue_structure = $this->input->post("tongue_structure");
                    $elevation = $this->input->post("elevation");
                    $lateral_movements = $this->input->post("lateral_movements");
                    $protrusion = $this->input->post("protrusion");
                    $retraction = $this->input->post("retraction");
                    $hard_palate_structure = $this->input->post("hard_palate_structure");
                    $hard_palate_function = $this->input->post("hard_palate_function");
                    $soft_palate_structure = $this->input->post("soft_palate_structure");
                    $symmetrical_movements = $this->input->post("symmetrical_movements");
                    $uvula_structure = $this->input->post("uvula_structure");
                    $uvula_function = $this->input->post("uvula_function");
                    $jaw_structure = $this->input->post("jaw_structure");
                    $jaw_function = $this->input->post("jaw_function");
                    $drooling = $this->input->post("drooling");
                    $attention = $this->input->post("attention");
                    $eye_contact = $this->input->post("eye_contact");
                    $name_call_response = $this->input->post("name_call_response");
                    $sitting_tolerance = $this->input->post("sitting_tolerance");
                    $compliance = $this->input->post("compliance");
                    $pointing = $this->input->post("pointing");
                    $turn_taking = $this->input->post("turn_taking");
                    $language_comprehension = $this->input->post("language_comprehension");
                    $language_expression = $this->input->post("language_expression");
                    $mode_of_communication = $this->input->post("mode_of_communication");
                    $greetings = $this->input->post("greetings");
                    $engages_in_interaction = $this->input->post("engages_in_interaction");
                    $initiate_interaction = $this->input->post("initiate_interaction");
                    $social_smile = $this->input->post("social_smile");
                    $solo_play = $this->input->post("solo_play");
                    $peer_play = $this->input->post("peer_play");
                    $instrumental_play = $this->input->post("instrumental_play");
                    $imaginative_play = $this->input->post("imaginative_play");
                    $narration = $this->input->post("narration");
                    $topic_initiation = $this->input->post("topic_initiation");
                    $topic_maintenance = $this->input->post("topic_maintenance");
                    $topic_termination = $this->input->post("topic_termination");
                    $object_permanence = $this->input->post("object_permanence");
                    $object_use = $this->input->post("object_use");
                    $sequencing = $this->input->post("sequencing");
                    $selection = $this->input->post("selection");
                    $object_to_object = $this->input->post("object_to_object");
                    $object_to_picture = $this->input->post("object_to_picture");
                    $categorization = $this->input->post("categorization");
                    $reasoning = $this->input->post("reasoning");
                    $judgment = $this->input->post("judgment");
                    $gender_concept = $this->input->post("gender_concept");
                    $money_concept = $this->input->post("money_concept");
                    $appearance_disappearance = $this->input->post("appearance_disappearance");
                    $possession = $this->input->post("possession");
                    $rejection = $this->input->post("rejection");
                    $location = $this->input->post("location");
                    $denial = $this->input->post("denial");
                    $imitation = $this->input->post("imitation");
                    $language_test_results = $this->input->post("language_test_results");
                    $articulation = $this->input->post("articulation");
                    $voice = $this->input->post("voice");
                    $fluency = $this->input->post("fluency");
                    $speech_test_results = $this->input->post("speech_test_results");
                    $academic_skils = $this->input->post("academic_skils");
                    $reading = $this->input->post("reading");
                    $writing = $this->input->post("writing");
                    $arithmetic = $this->input->post("arithmetic");
                    $copying = $this->input->post("copying");
                    $behavioural_skills = $this->input->post("behavioural_skills");
                    $diagnostic_formulation = $this->input->post("diagnostic_formulation");
                    $recommendations = $this->input->post("recommendations");

                    $ar_ao = array("Complaints" => $complaints, "Family_History" => $family_history, "Mother_Health_Pregrancy" => $mother_health_pregrancy, "Any_Medications" => $any_medications, 
                    "Any_Kind_Of_Trauma" => $any_kind_of_trauma, "X_Ray_Exposure" => $x_ray_exposure, "Rh_Factor" => $rh_factor, "Hypertension" => $hypertension, "BP" => $BP, 
                    "Others_Prenatal" => $others_prenatal, "Delivery_Place" => $delivery_place, "Term_Select" => $term_select, "No_Of_Weeks" => $no_of_weeks, "Type_Of_Delivery" => $type_of_delivery,
                     "Birth_Color" => $birth_color, "Birth_Cry" => $birth_cry, "Birth_Weight" => $birth_weight, "Other_Perinatal" => $other_perinatal, "Feeding" => $feeding, 
                     "Other_Feeding" => $other_feeding, "Any_Complications" => $any_complications, "Any_Remarks" => $any_remarks, "Neck_Control" => $neck_control, "Turn_Over" => $turn_over, 
                     "Crawling" => $crawling, "Sitting" => $sitting, "Standing" => $standing, "Walking" => $walking, "Handedness" => $handedness, "Toilet_Control" => $toilet_control, 
                     "Hand_Preference" => $hand_preference, "Undressing" => $undressing, "Dressing" => $dressing, "Remarks_Motor" => $remarks_motor, "Pincer_Grasp" => $pincer_grasp, 
                     "Palmer_Grasp" => $palmer_grasp, "Eye_Hand_Coordination" => $eye_hand_coordination, "Cooing" => $cooing, "Babbling" => $babbling, "First_Word" => $first_word, 
                     "Word_Phases" => $word_phases, "Sentence_Level" => $sentence_level, "Remarks_Sl_Dev" => $remarks_sl_dev, "History_IPT" => $history_IPT, "Vision" => $vision, 
                     "Remarks_Vision" => $remarks_vision, "Hearing" => $hearing, "Remarks_Hearing" => $remarks_hearing, "Blowing" => $blowing, "Swallowing" => $swallowing, "V_Chewing" => $v_chewing, 
                     "Sucking" => $sucking, "V_Biting" => $v_biting, "Lip_Structure" => $lip_structure, "Puckering" => $puckering, "Rounding" => $rounding, "Spreading" => $spreading, 
                     "Teeth_Structure" => $teeth_structure, "T_Biting" => $t_biting, "T_Chewing" => $t_chewing, "Tongue_Structure" => $tongue_structure, "Elevation" => $elevation, 
                     "Lateral_Movements" => $lateral_movements, "Protrusion" => $protrusion, "Retraction" => $retraction, "Hard_Palate_Structure" => $hard_palate_structure, 
                     "Hard_Palate_Function" => $hard_palate_function, "Soft_Palate_Structure" => $soft_palate_structure, "Symmetrical_Movements" => $symmetrical_movements, 
                     "Uvula_Structure" => $uvula_structure, "Uvula_Function" => $uvula_function, "Jaw_Structure" => $jaw_structure, "Jaw_Function" => $jaw_function, "Drooling" => $drooling, 
                     "Attention" => $attention, "Eye_Contact" => $eye_contact, "Name_Call_Response" => $name_call_response, "Sitting_Tolerance" => $sitting_tolerance, "Compliance" => $compliance, 
                     "Pointing" => $pointing, "Turn_Taking" => $turn_taking, "Language_Comprehension" => $language_comprehension, "Language_Expression" => $language_expression, 
                     "Mode_Of_Communication" => $mode_of_communication, "Greetings" => $greetings, "Engages_In_Interaction" => $engages_in_interaction, "Initiate_Interaction" => $initiate_interaction, 
                     "Social_Smile" => $social_smile, "Solo_Play" => $solo_play, "Peer_Play" => $peer_play, "Instrumental_Play" => $instrumental_play, "Imaginative_Play" => $imaginative_play, 
                     "Narration" => $narration, "Topic_Initiation" => $topic_initiation, "Topic_Maintenance" => $topic_maintenance, "Topic_Termination" => $topic_termination, 
                     "Object_Permanence" => $object_permanence, "Object_Use" => $object_use, "Sequencing" => $sequencing, "Selection" => $selection, "Object_To_Object" => $object_to_object, 
                     "Object_To_Picture" => $object_to_picture, "Categorization" => $categorization, "Reasoning" => $reasoning, "Judgment" => $judgment, "Gender_Concept" => $gender_concept, 
                     "Money_Concept" => $money_concept, "Appearance_Disappearance" => $appearance_disappearance, "Possession" => $possession, "Rejection" => $rejection, "Location" => $location, 
                     "Denial" => $denial, "Imitation" => $imitation, "Language_Test_Results" => $language_test_results, "Articulation" => $articulation, "Voice" => $voice, "Fluency" => $fluency, 
                     "Speech_Test_Results" => $speech_test_results, "Academic_Skils" => $academic_skils, "Reading" => $reading, "Writing" => $writing, "Arithmetic" => $arithmetic, "Copying" => $copying, 
                     "Behavioural_Skills" => $behavioural_skills, "Diagnostic_Formulation" => $diagnostic_formulation, "Recommendations" => $recommendations, "FormId" => $insert_id);


                    $this->db->insert("speech_case_history",$ar_ao);

                    if($this->db->affected_rows() > 0){
                        echo "<script>window.close();</script>";
                    }    
                }else{
                    echo `<script>window.alert("SomeThing Went Wrong")</script>`;
                }

            }

            
            if(isset($_POST['edit_speech_case_history'])){

                $patientName = $this->input->post('patientName');
                $patientId = $this->input->post('patientId');
                $age = $this->input->post('age');
                $date1 = strtr($this->input->post('date'), '/', '-');
        $date = date('Y-m-d', strtotime($date1));
                $gender = $this->input->post('gender');
                $informant = $this->input->post('informant');
                $relation_with_patient = $this->input->post('relation_with_patient');
                $time = $this->input->post('time');
                $languages_known = $this->input->post('languages_known');
                $provisionalDiagnosis = $this->input->post('provisionalDiagnosis');
                $mobile = $this->input->post('mobile');

                $update_ar = array("PatientName"=>$patientName,"PatientId"=>$patient_Id, "Mobile"=>$mobile, "ProvisionalDiagnosis"=>$provisionalDiagnosis , "Languages_Known" => $languages_known,"Relation_With_Patient"=>$relation_with_patient, "Time"=>$time ,"Age"=> $age, "Gender"=> $gender, "Date"=> $date, "Informant" => $informant, "FormId" => $form_id);
                $this->db->where("FormId", $form_id);
                $this->db->where("PatientId", $patient_Id);
                $this->db->update("formsrecords",$update_ar);

                    $complaints = $this->input->post("complaints");
                    $family_history = $this->input->post("family_history");
                    $mother_health_pregrancy = $this->input->post("mother_health_pregrancy");
                    $any_medications = $this->input->post("any_medications");
                    $any_kind_of_trauma = $this->input->post("any_kind_of_trauma");
                    $x_ray_exposure = $this->input->post("x_ray_exposure");
                    $rh_factor = $this->input->post("rh_factor");
                    $hypertension = $this->input->post("hypertension");
                    $BP = $this->input->post("BP");
                    $others_prenatal = $this->input->post("others_prenatal");
                    $delivery_place = $this->input->post("delivery_place");
                    $term_select = $this->input->post("term_select");
                    $no_of_weeks = $this->input->post("no_of_weeks");
                    $type_of_delivery = $this->input->post("type_of_delivery");
                    $birth_color = $this->input->post("birth_color");
                    $birth_cry = $this->input->post("birth_cry");
                    $birth_weight = $this->input->post("birth_weight");
                    $other_perinatal = $this->input->post("other_perinatal");
                    $feeding = $this->input->post("feeding");
                    $other_feeding = $this->input->post("other_feeding");
                    $any_complications = $this->input->post("any_complications");
                    $any_remarks = $this->input->post("any_remarks");
                    $neck_control = $this->input->post("neck_control");
                    $turn_over = $this->input->post("turn_over");
                    $crawling = $this->input->post("crawling");
                    $sitting = $this->input->post("sitting");
                    $standing = $this->input->post("standing");
                    $walking = $this->input->post("walking");
                    $handedness = $this->input->post("handedness");
                    $toilet_control = $this->input->post("toilet_control");
                    $hand_preference = $this->input->post("hand_preference");
                    $undressing = $this->input->post("undressing");
                    $dressing = $this->input->post("dressing");
                    $remarks_motor = $this->input->post("remarks_motor");
                    $pincer_grasp = $this->input->post("pincer_grasp");
                    $palmer_grasp = $this->input->post("palmer_grasp");
                    $eye_hand_coordination = $this->input->post("eye_hand_coordination");
                    $cooing = $this->input->post("cooing");
                    $babbling = $this->input->post("babbling");
                    $first_word = $this->input->post("first_word");
                    $word_phases = $this->input->post("word_phases");
                    $sentence_level = $this->input->post("sentence_level");
                    $remarks_sl_dev = $this->input->post("remarks_sl_dev");
                    $history_IPT = $this->input->post("history_IPT");
                    $vision = $this->input->post("vision");
                    $remarks_vision = $this->input->post("remarks_vision");
                    $hearing = $this->input->post("hearing");
                    $remarks_hearing = $this->input->post("remarks_hearing");
                    $blowing = $this->input->post("blowing");
                    $swallowing = $this->input->post("swallowing");
                    $v_chewing = $this->input->post("v_chewing");
                    $sucking = $this->input->post("sucking");
                    $v_biting = $this->input->post("v_biting");
                    $lip_structure = $this->input->post("lip_structure");
                    $puckering = $this->input->post("puckering");
                    $rounding = $this->input->post("rounding");
                    $spreading = $this->input->post("spreading");
                    $teeth_structure = $this->input->post("teeth_structure");
                    $t_biting = $this->input->post("t_biting");
                    $t_chewing = $this->input->post("t_chewing");
                    $tongue_structure = $this->input->post("tongue_structure");
                    $elevation = $this->input->post("elevation");
                    $lateral_movements = $this->input->post("lateral_movements");
                    $protrusion = $this->input->post("protrusion");
                    $retraction = $this->input->post("retraction");
                    $hard_palate_structure = $this->input->post("hard_palate_structure");
                    $hard_palate_function = $this->input->post("hard_palate_function");
                    $soft_palate_structure = $this->input->post("soft_palate_structure");
                    $symmetrical_movements = $this->input->post("symmetrical_movements");
                    $uvula_structure = $this->input->post("uvula_structure");
                    $uvula_function = $this->input->post("uvula_function");
                    $jaw_structure = $this->input->post("jaw_structure");
                    $jaw_function = $this->input->post("jaw_function");
                    $drooling = $this->input->post("drooling");
                    $attention = $this->input->post("attention");
                    $eye_contact = $this->input->post("eye_contact");
                    $name_call_response = $this->input->post("name_call_response");
                    $sitting_tolerance = $this->input->post("sitting_tolerance");
                    $compliance = $this->input->post("compliance");
                    $pointing = $this->input->post("pointing");
                    $turn_taking = $this->input->post("turn_taking");
                    $language_comprehension = $this->input->post("language_comprehension");
                    $language_expression = $this->input->post("language_expression");
                    $mode_of_communication = $this->input->post("mode_of_communication");
                    $greetings = $this->input->post("greetings");
                    $engages_in_interaction = $this->input->post("engages_in_interaction");
                    $initiate_interaction = $this->input->post("initiate_interaction");
                    $social_smile = $this->input->post("social_smile");
                    $solo_play = $this->input->post("solo_play");
                    $peer_play = $this->input->post("peer_play");
                    $instrumental_play = $this->input->post("instrumental_play");
                    $imaginative_play = $this->input->post("imaginative_play");
                    $narration = $this->input->post("narration");
                    $topic_initiation = $this->input->post("topic_initiation");
                    $topic_maintenance = $this->input->post("topic_maintenance");
                    $topic_termination = $this->input->post("topic_termination");
                    $object_permanence = $this->input->post("object_permanence");
                    $object_use = $this->input->post("object_use");
                    $sequencing = $this->input->post("sequencing");
                    $selection = $this->input->post("selection");
                    $object_to_object = $this->input->post("object_to_object");
                    $object_to_picture = $this->input->post("object_to_picture");
                    $categorization = $this->input->post("categorization");
                    $reasoning = $this->input->post("reasoning");
                    $judgment = $this->input->post("judgment");
                    $gender_concept = $this->input->post("gender_concept");
                    $money_concept = $this->input->post("money_concept");
                    $appearance_disappearance = $this->input->post("appearance_disappearance");
                    $possession = $this->input->post("possession");
                    $rejection = $this->input->post("rejection");
                    $location = $this->input->post("location");
                    $denial = $this->input->post("denial");
                    $imitation = $this->input->post("imitation");
                    $language_test_results = $this->input->post("language_test_results");
                    $articulation = $this->input->post("articulation");
                    $voice = $this->input->post("voice");
                    $fluency = $this->input->post("fluency");
                    $speech_test_results = $this->input->post("speech_test_results");
                    $academic_skils = $this->input->post("academic_skils");
                    $reading = $this->input->post("reading");
                    $writing = $this->input->post("writing");
                    $arithmetic = $this->input->post("arithmetic");
                    $copying = $this->input->post("copying");
                    $behavioural_skills = $this->input->post("behavioural_skills");
                    $diagnostic_formulation = $this->input->post("diagnostic_formulation");
                    $recommendations = $this->input->post("recommendations");

                    $update_array = array("Complaints" => $complaints, "Family_History" => $family_history, "Mother_Health_Pregrancy" => $mother_health_pregrancy, "Any_Medications" => $any_medications, 
                    "Any_Kind_Of_Trauma" => $any_kind_of_trauma, "X_Ray_Exposure" => $x_ray_exposure, "Rh_Factor" => $rh_factor, "Hypertension" => $hypertension, "BP" => $BP, 
                    "Others_Prenatal" => $others_prenatal, "Delivery_Place" => $delivery_place, "Term_Select" => $term_select, "No_Of_Weeks" => $no_of_weeks, "Type_Of_Delivery" => $type_of_delivery,
                     "Birth_Color" => $birth_color, "Birth_Cry" => $birth_cry, "Birth_Weight" => $birth_weight, "Other_Perinatal" => $other_perinatal, "Feeding" => $feeding, 
                     "Other_Feeding" => $other_feeding, "Any_Complications" => $any_complications, "Any_Remarks" => $any_remarks, "Neck_Control" => $neck_control, "Turn_Over" => $turn_over, 
                     "Crawling" => $crawling, "Sitting" => $sitting, "Standing" => $standing, "Walking" => $walking, "Handedness" => $handedness, "Toilet_Control" => $toilet_control, 
                     "Hand_Preference" => $hand_preference, "Undressing" => $undressing, "Dressing" => $dressing, "Remarks_Motor" => $remarks_motor, "Pincer_Grasp" => $pincer_grasp, 
                     "Palmer_Grasp" => $palmer_grasp, "Eye_Hand_Coordination" => $eye_hand_coordination, "Cooing" => $cooing, "Babbling" => $babbling, "First_Word" => $first_word, 
                     "Word_Phases" => $word_phases, "Sentence_Level" => $sentence_level, "Remarks_Sl_Dev" => $remarks_sl_dev, "History_IPT" => $history_IPT, "Vision" => $vision, 
                     "Remarks_Vision" => $remarks_vision, "Hearing" => $hearing, "Remarks_Hearing" => $remarks_hearing, "Blowing" => $blowing, "Swallowing" => $swallowing, "V_Chewing" => $v_chewing, 
                     "Sucking" => $sucking, "V_Biting" => $v_biting, "Lip_Structure" => $lip_structure, "Puckering" => $puckering, "Rounding" => $rounding, "Spreading" => $spreading, 
                     "Teeth_Structure" => $teeth_structure, "T_Biting" => $t_biting, "T_Chewing" => $t_chewing, "Tongue_Structure" => $tongue_structure, "Elevation" => $elevation, 
                     "Lateral_Movements" => $lateral_movements, "Protrusion" => $protrusion, "Retraction" => $retraction, "Hard_Palate_Structure" => $hard_palate_structure, 
                     "Hard_Palate_Function" => $hard_palate_function, "Soft_Palate_Structure" => $soft_palate_structure, "Symmetrical_Movements" => $symmetrical_movements, 
                     "Uvula_Structure" => $uvula_structure, "Uvula_Function" => $uvula_function, "Jaw_Structure" => $jaw_structure, "Jaw_Function" => $jaw_function, "Drooling" => $drooling, 
                     "Attention" => $attention, "Eye_Contact" => $eye_contact, "Name_Call_Response" => $name_call_response, "Sitting_Tolerance" => $sitting_tolerance, "Compliance" => $compliance, 
                     "Pointing" => $pointing, "Turn_Taking" => $turn_taking, "Language_Comprehension" => $language_comprehension, "Language_Expression" => $language_expression, 
                     "Mode_Of_Communication" => $mode_of_communication, "Greetings" => $greetings, "Engages_In_Interaction" => $engages_in_interaction, "Initiate_Interaction" => $initiate_interaction, 
                     "Social_Smile" => $social_smile, "Solo_Play" => $solo_play, "Peer_Play" => $peer_play, "Instrumental_Play" => $instrumental_play, "Imaginative_Play" => $imaginative_play, 
                     "Narration" => $narration, "Topic_Initiation" => $topic_initiation, "Topic_Maintenance" => $topic_maintenance, "Topic_Termination" => $topic_termination, 
                     "Object_Permanence" => $object_permanence, "Object_Use" => $object_use, "Sequencing" => $sequencing, "Selection" => $selection, "Object_To_Object" => $object_to_object, 
                     "Object_To_Picture" => $object_to_picture, "Categorization" => $categorization, "Reasoning" => $reasoning, "Judgment" => $judgment, "Gender_Concept" => $gender_concept, 
                     "Money_Concept" => $money_concept, "Appearance_Disappearance" => $appearance_disappearance, "Possession" => $possession, "Rejection" => $rejection, "Location" => $location, 
                     "Denial" => $denial, "Imitation" => $imitation, "Language_Test_Results" => $language_test_results, "Articulation" => $articulation, "Voice" => $voice, "Fluency" => $fluency, 
                     "Speech_Test_Results" => $speech_test_results, "Academic_Skils" => $academic_skils, "Reading" => $reading, "Writing" => $writing, "Arithmetic" => $arithmetic, "Copying" => $copying, 
                     "Behavioural_Skills" => $behavioural_skills, "Diagnostic_Formulation" => $diagnostic_formulation, "Recommendations" => $recommendations);


                    $this->main_model->update_speech_case_history($update_array, $this->main_model->getFormRecordsUsingId($form_id, $patient_Id)[0]->Id);

                    echo "<script>window.close();</script>"; 

            }

            if($this->main_model->getFormRecordsUsingPatientId($patient_Id, $form_id) > 0){
                $data['edit'] = true;
                $data['formRecordsData'] = $this->main_model->getFormRecordsUsingId($form_id, $patient_Id);
                $data['speech_case_historyData'] = $this->main_model->get_speech_case_history($this->main_model->getFormRecordsUsingId($form_id, $patient_Id)[0]->Id);
            }else{
                $data['edit'] = false;
            }

            $data['formsData'] = $this->main_model->getSingleFormsmaster($form_id);
            $data['patientData'] = $this->main_model->getPatientData($patient_Id)[0];
            $data['page_title'] = "Form | Speech Case History";
		    $data['content'] = "form_11_speech_case_history";
            $data['action'] = $action;
            $this->load->view('template', $data);
        }

        if($form_id == 12){

            if(isset($_POST['add_sample_report_misic'])){

                $patientName = $this->input->post('patientName');
                $patientId = $this->input->post('patientId');
                $age = $this->input->post('age');
                $gender = $this->input->post('gender');
                $languages_known = $this->input->post('languages_known');
                $reffred_by = $this->input->post('reffred_by');
                $dob = $this->input->post('dob');
                $date1 = strtr($this->input->post('date'), '/', '-');
        $date = date('Y-m-d', strtotime($date1));

                $ar = array("PatientName"=>$patientName,"PatientId"=>$patient_Id, "Reffered_By"=>$reffred_by , "Languages_Known" => $languages_known,"DOB"=>$dob, "Age"=> $age, "Gender"=> $gender, "Date"=> $date, "FormId" => $form_id);
                $this->db->insert("formsrecords",$ar);
                
                $insert_id = $this->db->insert_id();

                if($this->db->affected_rows() > 0){

                    $academic = $this->input->post("academic");
                    $below_age_school = $this->input->post("below_age_school");
                    $diff_math_cal = $this->input->post("diff_math_cal");
                    $weak_english_hindi = $this->input->post("weak_english_hindi");
                    $poor_write_skill = $this->input->post("poor_write_skill");
                    $poor_attent_span = $this->input->post("poor_attent_span");
                    $comprehensio_below_age = $this->input->post("comprehensio_below_age");
                    $behavior = $this->input->post("behavior");
                    $medical_histroy = $this->input->post("medical_histroy");
                    $head_control = $this->input->post("head_control");
                    $neck_holding = $this->input->post("neck_holding");
                    $crawling = $this->input->post("crawling");
                    $walking = $this->input->post("walking");
                    $speech_1 = $this->input->post("speech_1");
                    $schooling_age = $this->input->post("schooling_age");
                    $play_group = $this->input->post("play_group");
                    $SRKG = $this->input->post("SRKG");
                    $present_class = $this->input->post("present_class");
                    $medium_school = $this->input->post("medium_school");
                    $hearing = $this->input->post("hearing");
                    $speech_2 = $this->input->post("speech_2");
                    $sitting_span = $this->input->post("sitting_span");
                    $assessment_done = $this->input->post("assessment_done");
                    $information_1 = $this->input->post("information_1");
                    $information_2 = $this->input->post("information_2");
                    $comprehension_1 = $this->input->post("comprehension_1");
                    $comprehension_2 = $this->input->post("comprehension_2");
                    $arithmetic_1 = $this->input->post("arithmetic_1");
                    $arithmetic_2 = $this->input->post("arithmetic_2");
                    $similarities_1 = $this->input->post("similarities_1");
                    $similarities_2 = $this->input->post("similarities_2");
                    $digits_span_1 = $this->input->post("digits_span_1");
                    $digits_span_2 = $this->input->post("digits_span_2");
                    $picture_completion_1 = $this->input->post("picture_completion_1");
                    $picture_completion_2 = $this->input->post("picture_completion_2");
                    $block_design_1 = $this->input->post("block_design_1");
                    $block_design_2 = $this->input->post("block_design_2");
                    $object_assembly_1 = $this->input->post("object_assembly_1");
                    $object_assembly_2 = $this->input->post("object_assembly_2");
                    $coding_1 = $this->input->post("coding_1");
                    $coding_2 = $this->input->post("coding_2");
                    $mazes_1 = $this->input->post("mazes_1");
                    $mazes_2 = $this->input->post("mazes_2");
                    $verbal_performance_index = $this->input->post("verbal_performance_index");
                    $nonverbal_performance_index = $this->input->post("nonverbal_performance_index");
                    $global_iq = $this->input->post("global_iq");
                    $performance_info = $this->input->post("performance_info");
                    $performance_comp = $this->input->post("performance_comp");
                    $performance_arith = $this->input->post("performance_arith");
                    $performance_simi = $this->input->post("performance_simi");
                    $performance_digit = $this->input->post("performance_digit");
                    $performance_picture = $this->input->post("performance_picture");
                    $performance_block = $this->input->post("performance_block");
                    $performance_object = $this->input->post("performance_object");
                    $performance_coding = $this->input->post("performance_coding");
                    $performance_mazes = $this->input->post("performance_mazes");
                    $interpretation_1 = $this->input->post("interpretation_1");
                    $interpretation_2 = $this->input->post("interpretation_2");
                    $interpretation_3 = $this->input->post("interpretation_3");
                    $interpretation_4 = $this->input->post("interpretation_4");
                    $interpretation_5 = $this->input->post("interpretation_5");
                    $verbal_index = $this->input->post("verbal_index");
                    $performance_index = $this->input->post("performance_index");
                    $global_index = $this->input->post("global_index");
                    $recommendation_1_1 = $this->input->post("recommendation_1_1");
                    $recommendation_1_2 = $this->input->post("recommendation_1_2");
                    $recommendation_1_3 = $this->input->post("recommendation_1_3");
                    $recommendation_1_4 = $this->input->post("recommendation_1_4");
                    $recommendation_1_5 = $this->input->post("recommendation_1_5");
                    $recommendation_1_6 = $this->input->post("recommendation_1_6");
                    $recommendation_1_7 = $this->input->post("recommendation_1_7");
                    $recommendation_2_1 = $this->input->post("recommendation_2_1");
                    $recommendation_3_1 = $this->input->post("recommendation_3_1");
                    $recommendation_3_2 = $this->input->post("recommendation_3_2");
                    $recommendation_3_3 = $this->input->post("recommendation_3_3");
                    $recommendation_3_4 = $this->input->post("recommendation_3_4");
                    $recommendation_3_5 = $this->input->post("recommendation_3_5");
                    $recommendation_4_1 = $this->input->post("recommendation_4_1");
                    $recommendation_4_2 = $this->input->post("recommendation_4_2");
                    $recommendation_4_3 = $this->input->post("recommendation_4_3");
                    $recommendation_4_4 = $this->input->post("recommendation_4_4");
                    $recommendation_4_5 = $this->input->post("recommendation_4_5");
                    $recommendation_4_6 = $this->input->post("recommendation_4_6");
                    $recommendation_5_1 = $this->input->post("recommendation_5_1");
                    $recommendation_5_2 = $this->input->post("recommendation_5_2");
                    $recommendation_5_3 = $this->input->post("recommendation_5_3");
                    $recommendation_5_4 = $this->input->post("recommendation_5_4");
                    $recommendation_6_1 = $this->input->post("recommendation_6_1");
                    $recommendation_6_2 = $this->input->post("recommendation_6_2");
                    $recommendation_6_3 = $this->input->post("recommendation_6_3");
                    $recommendation_6_4 = $this->input->post("recommendation_6_4");
                    $recommendation_6_5 = $this->input->post("recommendation_6_5");

                    $ar_ao = array("Academic" => $academic,"Below_Age_School" => $below_age_school,"Diff_Math_Cal" => $diff_math_cal,"Weak_English_Hindi" => $weak_english_hindi,
                    "Poor_Write_Skill" => $poor_write_skill,"Poor_Attent_Span" => $poor_attent_span,"Comprehensio_Below_Age" => $comprehensio_below_age,"Behavior" => $behavior,
                    "Medical_Histroy" => $medical_histroy,"Head_Control" => $head_control,"Neck_Holding" => $neck_holding,"Crawling" => $crawling,"Walking" => $walking,"Speech_1" => $speech_1,
                    "Schooling_Age" => $schooling_age,"Play_Group" => $play_group,"SRKG" => $SRKG,"Present_Class" => $present_class,"Medium_School" => $medium_school,"Hearing" => $hearing,
                    "Speech_2" => $speech_2,"Sitting_Span" => $sitting_span,"Assessment_Done" => $assessment_done,"Information_1" => $information_1,"Information_2" => $information_2,
                    "Comprehension_1" => $comprehension_1,"Comprehension_2" => $comprehension_2,"Arithmetic_1" => $arithmetic_1,"Arithmetic_2" => $arithmetic_2,
                    "Similarities_1" => $similarities_1,"Similarities_2" => $similarities_2,"Digits_Span_1" => $digits_span_1,"Digits_Span_2" => $digits_span_2,
                    "Picture_Completion_1" => $picture_completion_1,"Picture_Completion_2" => $picture_completion_2,"Block_Design_1" => $block_design_1,"Block_Design_2" => $block_design_2,
                    "Object_Assembly_1" => $object_assembly_1,"Object_Assembly_2" => $object_assembly_2,"Coding_1" => $coding_1,"Coding_2" => $coding_2,"Mazes_1" => $mazes_1,
                    "Mazes_2" => $mazes_2,"Verbal_Performance_Index" => $verbal_performance_index,"Nonverbal_Performance_Index" => $nonverbal_performance_index,"Global_Iq" => $global_iq,
                    "Performance_Info" => $performance_info,"Performance_Comp" => $performance_comp,"Performance_Arith" => $performance_arith,"Performance_Simi" => $performance_simi,
                    "Performance_Digit" => $performance_digit,"Performance_Picture" => $performance_picture,"Performance_Block" => $performance_block,"Performance_Object" => $performance_object,
                    "Performance_Coding" => $performance_coding,"Performance_Mazes" => $performance_mazes,"Interpretation_1" => $interpretation_1,"Interpretation_2" => $interpretation_2,
                    "Interpretation_3" => $interpretation_3,"Interpretation_4" => $interpretation_4,"Interpretation_5" => $interpretation_5,"Verbal_Index" => $verbal_index,
                    "Performance_Index" => $performance_index,"Global_Index" => $global_index,"Recommendation_1_1" => $recommendation_1_1,"Recommendation_1_2" => $recommendation_1_2,
                    "Recommendation_1_3" => $recommendation_1_3,"Recommendation_1_4" => $recommendation_1_4,"Recommendation_1_5" => $recommendation_1_5,"Recommendation_1_6" => $recommendation_1_6,
                    "Recommendation_1_7" => $recommendation_1_7,"Recommendation_2_1" => $recommendation_2_1,"Recommendation_3_1" => $recommendation_3_1,"Recommendation_3_2" => $recommendation_3_2,
                    "Recommendation_3_3" => $recommendation_3_3,"Recommendation_3_4" => $recommendation_3_4,"Recommendation_3_5" => $recommendation_3_5,"Recommendation_4_1" => $recommendation_4_1,
                    "Recommendation_4_2" => $recommendation_4_2,"Recommendation_4_3" => $recommendation_4_3,"Recommendation_4_4" => $recommendation_4_4,"Recommendation_4_5" => $recommendation_4_5,
                    "Recommendation_4_6" => $recommendation_4_6,"Recommendation_5_1" => $recommendation_5_1,"Recommendation_5_2" => $recommendation_5_2,"Recommendation_5_3" => $recommendation_5_3,
                    "Recommendation_5_4" => $recommendation_5_4,"Recommendation_6_1" => $recommendation_6_1,"Recommendation_6_2" => $recommendation_6_2,"Recommendation_6_3" => $recommendation_6_3,
                    "Recommendation_6_4" => $recommendation_6_4,"Recommendation_6_5" => $recommendation_6_5, "FormId" => $insert_id);


                    $this->db->insert("sample_report_misic",$ar_ao);

                    if($this->db->affected_rows() > 0){
                        echo "<script>window.close();</script>";
                    }    
                }else{
                    echo `<script>window.alert("SomeThing Went Wrong")</script>`;
                }

            }

            

            if(isset($_POST['edit_sample_report_misic'])){

                $patientName = $this->input->post('patientName');
                $patientId = $this->input->post('patientId');
                $age = $this->input->post('age');
                $gender = $this->input->post('gender');
                $languages_known = $this->input->post('languages_known');
                $reffred_by = $this->input->post('reffred_by');
                $dob = $this->input->post('dob');
                $date1 = strtr($this->input->post('date'), '/', '-');
        $date = date('Y-m-d', strtotime($date1));

                $update_ar = array("PatientName"=>$patientName,"PatientId"=>$patient_Id, "Reffered_By"=>$reffred_by , "Languages_Known" => $languages_known,"DOB"=>$dob, "Age"=> $age, "Gender"=> $gender, "Date"=> $date, "FormId" => $form_id);
                $this->db->where("FormId", $form_id);
                $this->db->where("PatientId", $patient_Id);
                $this->db->update("formsrecords",$update_ar);

                    $academic = $this->input->post("academic");
                    $below_age_school = $this->input->post("below_age_school");
                    $diff_math_cal = $this->input->post("diff_math_cal");
                    $weak_english_hindi = $this->input->post("weak_english_hindi");
                    $poor_write_skill = $this->input->post("poor_write_skill");
                    $poor_attent_span = $this->input->post("poor_attent_span");
                    $comprehensio_below_age = $this->input->post("comprehensio_below_age");
                    $behavior = $this->input->post("behavior");
                    $medical_histroy = $this->input->post("medical_histroy");
                    $head_control = $this->input->post("head_control");
                    $neck_holding = $this->input->post("neck_holding");
                    $crawling = $this->input->post("crawling");
                    $walking = $this->input->post("walking");
                    $speech_1 = $this->input->post("speech_1");
                    $schooling_age = $this->input->post("schooling_age");
                    $play_group = $this->input->post("play_group");
                    $SRKG = $this->input->post("SRKG");
                    $present_class = $this->input->post("present_class");
                    $medium_school = $this->input->post("medium_school");
                    $hearing = $this->input->post("hearing");
                    $speech_2 = $this->input->post("speech_2");
                    $sitting_span = $this->input->post("sitting_span");
                    $assessment_done = $this->input->post("assessment_done");
                    $information_1 = $this->input->post("information_1");
                    $information_2 = $this->input->post("information_2");
                    $comprehension_1 = $this->input->post("comprehension_1");
                    $comprehension_2 = $this->input->post("comprehension_2");
                    $arithmetic_1 = $this->input->post("arithmetic_1");
                    $arithmetic_2 = $this->input->post("arithmetic_2");
                    $similarities_1 = $this->input->post("similarities_1");
                    $similarities_2 = $this->input->post("similarities_2");
                    $digits_span_1 = $this->input->post("digits_span_1");
                    $digits_span_2 = $this->input->post("digits_span_2");
                    $picture_completion_1 = $this->input->post("picture_completion_1");
                    $picture_completion_2 = $this->input->post("picture_completion_2");
                    $block_design_1 = $this->input->post("block_design_1");
                    $block_design_2 = $this->input->post("block_design_2");
                    $object_assembly_1 = $this->input->post("object_assembly_1");
                    $object_assembly_2 = $this->input->post("object_assembly_2");
                    $coding_1 = $this->input->post("coding_1");
                    $coding_2 = $this->input->post("coding_2");
                    $mazes_1 = $this->input->post("mazes_1");
                    $mazes_2 = $this->input->post("mazes_2");
                    $verbal_performance_index = $this->input->post("verbal_performance_index");
                    $nonverbal_performance_index = $this->input->post("nonverbal_performance_index");
                    $global_iq = $this->input->post("global_iq");
                    $performance_info = $this->input->post("performance_info");
                    $performance_comp = $this->input->post("performance_comp");
                    $performance_arith = $this->input->post("performance_arith");
                    $performance_simi = $this->input->post("performance_simi");
                    $performance_digit = $this->input->post("performance_digit");
                    $performance_picture = $this->input->post("performance_picture");
                    $performance_block = $this->input->post("performance_block");
                    $performance_object = $this->input->post("performance_object");
                    $performance_coding = $this->input->post("performance_coding");
                    $performance_mazes = $this->input->post("performance_mazes");
                    $interpretation_1 = $this->input->post("interpretation_1");
                    $interpretation_2 = $this->input->post("interpretation_2");
                    $interpretation_3 = $this->input->post("interpretation_3");
                    $interpretation_4 = $this->input->post("interpretation_4");
                    $interpretation_5 = $this->input->post("interpretation_5");
                    $verbal_index = $this->input->post("verbal_index");
                    $performance_index = $this->input->post("performance_index");
                    $global_index = $this->input->post("global_index");
                    $recommendation_1_1 = $this->input->post("recommendation_1_1");
                    $recommendation_1_2 = $this->input->post("recommendation_1_2");
                    $recommendation_1_3 = $this->input->post("recommendation_1_3");
                    $recommendation_1_4 = $this->input->post("recommendation_1_4");
                    $recommendation_1_5 = $this->input->post("recommendation_1_5");
                    $recommendation_1_6 = $this->input->post("recommendation_1_6");
                    $recommendation_1_7 = $this->input->post("recommendation_1_7");
                    $recommendation_2_1 = $this->input->post("recommendation_2_1");
                    $recommendation_3_1 = $this->input->post("recommendation_3_1");
                    $recommendation_3_2 = $this->input->post("recommendation_3_2");
                    $recommendation_3_3 = $this->input->post("recommendation_3_3");
                    $recommendation_3_4 = $this->input->post("recommendation_3_4");
                    $recommendation_3_5 = $this->input->post("recommendation_3_5");
                    $recommendation_4_1 = $this->input->post("recommendation_4_1");
                    $recommendation_4_2 = $this->input->post("recommendation_4_2");
                    $recommendation_4_3 = $this->input->post("recommendation_4_3");
                    $recommendation_4_4 = $this->input->post("recommendation_4_4");
                    $recommendation_4_5 = $this->input->post("recommendation_4_5");
                    $recommendation_4_6 = $this->input->post("recommendation_4_6");
                    $recommendation_5_1 = $this->input->post("recommendation_5_1");
                    $recommendation_5_2 = $this->input->post("recommendation_5_2");
                    $recommendation_5_3 = $this->input->post("recommendation_5_3");
                    $recommendation_5_4 = $this->input->post("recommendation_5_4");
                    $recommendation_6_1 = $this->input->post("recommendation_6_1");
                    $recommendation_6_2 = $this->input->post("recommendation_6_2");
                    $recommendation_6_3 = $this->input->post("recommendation_6_3");
                    $recommendation_6_4 = $this->input->post("recommendation_6_4");
                    $recommendation_6_5 = $this->input->post("recommendation_6_5");

                    $update_array = array("Academic" => $academic,"Below_Age_School" => $below_age_school,"Diff_Math_Cal" => $diff_math_cal,"Weak_English_Hindi" => $weak_english_hindi,
                    "Poor_Write_Skill" => $poor_write_skill,"Poor_Attent_Span" => $poor_attent_span,"Comprehensio_Below_Age" => $comprehensio_below_age,"Behavior" => $behavior,
                    "Medical_Histroy" => $medical_histroy,"Head_Control" => $head_control,"Neck_Holding" => $neck_holding,"Crawling" => $crawling,"Walking" => $walking,"Speech_1" => $speech_1,
                    "Schooling_Age" => $schooling_age,"Play_Group" => $play_group,"SRKG" => $SRKG,"Present_Class" => $present_class,"Medium_School" => $medium_school,"Hearing" => $hearing,
                    "Speech_2" => $speech_2,"Sitting_Span" => $sitting_span,"Assessment_Done" => $assessment_done,"Information_1" => $information_1,"Information_2" => $information_2,
                    "Comprehension_1" => $comprehension_1,"Comprehension_2" => $comprehension_2,"Arithmetic_1" => $arithmetic_1,"Arithmetic_2" => $arithmetic_2,
                    "Similarities_1" => $similarities_1,"Similarities_2" => $similarities_2,"Digits_Span_1" => $digits_span_1,"Digits_Span_2" => $digits_span_2,
                    "Picture_Completion_1" => $picture_completion_1,"Picture_Completion_2" => $picture_completion_2,"Block_Design_1" => $block_design_1,"Block_Design_2" => $block_design_2,
                    "Object_Assembly_1" => $object_assembly_1,"Object_Assembly_2" => $object_assembly_2,"Coding_1" => $coding_1,"Coding_2" => $coding_2,"Mazes_1" => $mazes_1,
                    "Mazes_2" => $mazes_2,"Verbal_Performance_Index" => $verbal_performance_index,"Nonverbal_Performance_Index" => $nonverbal_performance_index,"Global_Iq" => $global_iq,
                    "Performance_Info" => $performance_info,"Performance_Comp" => $performance_comp,"Performance_Arith" => $performance_arith,"Performance_Simi" => $performance_simi,
                    "Performance_Digit" => $performance_digit,"Performance_Picture" => $performance_picture,"Performance_Block" => $performance_block,"Performance_Object" => $performance_object,
                    "Performance_Coding" => $performance_coding,"Performance_Mazes" => $performance_mazes,"Interpretation_1" => $interpretation_1,"Interpretation_2" => $interpretation_2,
                    "Interpretation_3" => $interpretation_3,"Interpretation_4" => $interpretation_4,"Interpretation_5" => $interpretation_5,"Verbal_Index" => $verbal_index,
                    "Performance_Index" => $performance_index,"Global_Index" => $global_index,"Recommendation_1_1" => $recommendation_1_1,"Recommendation_1_2" => $recommendation_1_2,
                    "Recommendation_1_3" => $recommendation_1_3,"Recommendation_1_4" => $recommendation_1_4,"Recommendation_1_5" => $recommendation_1_5,"Recommendation_1_6" => $recommendation_1_6,
                    "Recommendation_1_7" => $recommendation_1_7,"Recommendation_2_1" => $recommendation_2_1,"Recommendation_3_1" => $recommendation_3_1,"Recommendation_3_2" => $recommendation_3_2,
                    "Recommendation_3_3" => $recommendation_3_3,"Recommendation_3_4" => $recommendation_3_4,"Recommendation_3_5" => $recommendation_3_5,"Recommendation_4_1" => $recommendation_4_1,
                    "Recommendation_4_2" => $recommendation_4_2,"Recommendation_4_3" => $recommendation_4_3,"Recommendation_4_4" => $recommendation_4_4,"Recommendation_4_5" => $recommendation_4_5,
                    "Recommendation_4_6" => $recommendation_4_6,"Recommendation_5_1" => $recommendation_5_1,"Recommendation_5_2" => $recommendation_5_2,"Recommendation_5_3" => $recommendation_5_3,
                    "Recommendation_5_4" => $recommendation_5_4,"Recommendation_6_1" => $recommendation_6_1,"Recommendation_6_2" => $recommendation_6_2,"Recommendation_6_3" => $recommendation_6_3,
                    "Recommendation_6_4" => $recommendation_6_4,"Recommendation_6_5" => $recommendation_6_5);


                    $this->main_model->update_sample_report_misic($update_array, $this->main_model->getFormRecordsUsingId($form_id, $patient_Id)[0]->Id);

                    echo "<script>window.close();</script>";  

            }

            if($this->main_model->getFormRecordsUsingPatientId($patient_Id, $form_id) > 0){
                $data['edit'] = true;
                $data['formRecordsData'] = $this->main_model->getFormRecordsUsingId($form_id, $patient_Id);
                $data['sample_report_misicData'] = $this->main_model->get_sample_report_misic($this->main_model->getFormRecordsUsingId($form_id, $patient_Id)[0]->Id);
            }else{
                $data['edit'] = false;
            }

            $data['formsData'] = $this->main_model->getSingleFormsmaster($form_id);
            $data['patientData'] = $this->main_model->getPatientData($patient_Id)[0];
            $data['page_title'] = "Form | Sample report MISIC";
		    $data['content'] = "form_12_sample_report_misic";
            $data['action'] = $action;
            $this->load->view('template', $data);
        }   
        
        if($form_id == 13){

            if(isset($_POST['add_assesment_report'])){

                $patientName = $this->input->post('patientName');
                $patientId = $this->input->post('patientId');
                $age = $this->input->post('age');
                $gender = $this->input->post('gender');
                $languages_known = $this->input->post('languages_known');
                $reffred_by = $this->input->post('reffred_by');
                $dob = $this->input->post('dob');
                $date1 = strtr($this->input->post('date'), '/', '-');
        $date = date('Y-m-d', strtotime($date1));
                $reason_for_assessment = $this->input->post('reason_for_assessment');

                $ar = array("Reason_For_Assessment"=> $reason_for_assessment,"PatientName"=>$patientName,"PatientId"=>$patient_Id, "Reffered_By"=>$reffred_by , "Languages_Known" => $languages_known,"DOB"=>$dob, "Age"=> $age, "Gender"=> $gender, "Date"=> $date, "FormId" => $form_id);
                $this->db->insert("formsrecords",$ar);
                
                $insert_id = $this->db->insert_id();

                if($this->db->affected_rows() > 0){

                    $concern_1 = $this->input->post("concern_1");
                    $concern_2 = $this->input->post("concern_2");
                    $concern_3 = $this->input->post("concern_3");
                    $concern_4 = $this->input->post("concern_4");
                    $concern_5 = $this->input->post("concern_5");
                    $concern_6 = $this->input->post("concern_6");
                    $clinical_background = $this->input->post("clinical_background");
                    $motor_speech_development_1 = $this->input->post("motor_speech_development_1");
                    $motor_speech_development_2 = $this->input->post("motor_speech_development_2");
                    $motor_speech_development_3 = $this->input->post("motor_speech_development_3");
                    $motor_speech_development_4 = $this->input->post("motor_speech_development_4");
                    $academic_history = $this->input->post("academic_history");
                    $tests_administered = $this->input->post("tests_administered");
                    $observations_1 = $this->input->post("observations_1");
                    $observations_2 = $this->input->post("observations_2");
                    $observations_3 = $this->input->post("observations_3");
                    $observations_4 = $this->input->post("observations_4");
                    $observations_5 = $this->input->post("observations_5");
                    $observations_6 = $this->input->post("observations_6");
                    $observations_7 = $this->input->post("observations_7");
                    $observations_8 = $this->input->post("observations_8");
                    $observations_9 = $this->input->post("observations_9");
                    $observations_10 = $this->input->post("observations_10");
                    $observations_11 = $this->input->post("observations_11");
                    $sub_domain_1 = $this->input->post("sub_domain_1");
                    $sub_domain_2 = $this->input->post("sub_domain_2");
                    $sub_domain_3 = $this->input->post("sub_domain_3");
                    $sub_domain_4 = $this->input->post("sub_domain_4");
                    $sub_domain_5 = $this->input->post("sub_domain_5");
                    $sub_domain_6 = $this->input->post("sub_domain_6");
                    $sub_domain_7 = $this->input->post("sub_domain_7");
                    $sub_domain_8 = $this->input->post("sub_domain_8");
                    $sub_domain_9 = $this->input->post("sub_domain_9");
                    $sub_domain_10 = $this->input->post("sub_domain_10");
                    $sub_domain_11 = $this->input->post("sub_domain_11");
                    $table_1_1 = $this->input->post("table_1_1");
                    $table_1_2 = $this->input->post("table_1_2");
                    $table_1_3 = $this->input->post("table_1_3");
                    $table_2_1 = $this->input->post("table_2_1");
                    $table_2_2 = $this->input->post("table_2_2");
                    $table_2_3 = $this->input->post("table_2_3");
                    $table_3_1 = $this->input->post("table_3_1");
                    $table_3_2 = $this->input->post("table_3_2");
                    $table_3_3 = $this->input->post("table_3_3");
                    $table_4_1 = $this->input->post("table_4_1");
                    $table_5_1 = $this->input->post("table_5_1");
                    $table_5_2 = $this->input->post("table_5_2");
                    $table_5_3 = $this->input->post("table_5_3");
                    $table_6_1 = $this->input->post("table_6_1");
                    $table_6_2 = $this->input->post("table_6_2");
                    $table_6_3 = $this->input->post("table_6_3");
                    $table_7_1 = $this->input->post("table_7_1");
                    $table_7_2 = $this->input->post("table_7_2");
                    $table_7_3 = $this->input->post("table_7_3");
                    $table_8_1 = $this->input->post("table_8_1");
                    $table_9_1 = $this->input->post("table_9_1");
                    $table_9_2 = $this->input->post("table_9_2");
                    $table_9_3 = $this->input->post("table_9_3");
                    $table_10_1 = $this->input->post("table_10_1");
                    $table_10_2 = $this->input->post("table_10_2");
                    $table_10_3 = $this->input->post("table_10_3");
                    $table_11_1 = $this->input->post("table_11_1");
                    $table_11_2 = $this->input->post("table_11_2");
                    $table_11_3 = $this->input->post("table_11_3");
                    $table_12_1 = $this->input->post("table_12_1");
                    $table_13_1 = $this->input->post("table_13_1");
                    $table_13_2 = $this->input->post("table_13_2");
                    $table_13_3 = $this->input->post("table_13_3");
                    $table_14_1 = $this->input->post("table_14_1");
                    $table_14_2 = $this->input->post("table_14_2");
                    $table_14_3 = $this->input->post("table_14_3");
                    $table_15_1 = $this->input->post("table_15_1");
                    $observations_communication_1 = $this->input->post("observations_communication_1");
                    $observations_communication_2 = $this->input->post("observations_communication_2");
                    $observations_communication_3 = $this->input->post("observations_communication_3");
                    $observations_communication_4 = $this->input->post("observations_communication_4");
                    $observations_dailyliving_1 = $this->input->post("observations_dailyliving_1");
                    $observations_dailyliving_2 = $this->input->post("observations_dailyliving_2");
                    $observations_dailyliving_3 = $this->input->post("observations_dailyliving_3");
                    $observations_dailyliving_4 = $this->input->post("observations_dailyliving_4");
                    $observations_socialization_1 = $this->input->post("observations_socialization_1");
                    $observations_socialization_2 = $this->input->post("observations_socialization_2");
                    $observations_socialization_3 = $this->input->post("observations_socialization_3");
                    $observations_socialization_4 = $this->input->post("observations_socialization_4");
                    $observations_motorskill_1 = $this->input->post("observations_motorskill_1");
                    $observations_motorskill_2 = $this->input->post("observations_motorskill_2");
                    $observations_motorskill_3 = $this->input->post("observations_motorskill_3");
                    $observations_motorskill_4 = $this->input->post("observations_motorskill_4");
                    $recommendations_1_1 = $this->input->post("recommendations_1_1");
                    $recommendations_1_2 = $this->input->post("recommendations_1_2");
                    $recommendations_1_3 = $this->input->post("recommendations_1_3");
                    $recommendations_2_1 = $this->input->post("recommendations_2_1");
                    $recommendations_2_2 = $this->input->post("recommendations_2_2");
                    $recommendations_2_3 = $this->input->post("recommendations_2_3");
                    $recommendations_2_4 = $this->input->post("recommendations_2_4");
                    $recommendations_3_1 = $this->input->post("recommendations_3_1");
                    $recommendations_3_2 = $this->input->post("recommendations_3_2");
                    $recommendations_3_3 = $this->input->post("recommendations_3_3");
                    $recommendations_3_4 = $this->input->post("recommendations_3_4");
                    $recommendations_3_5 = $this->input->post("recommendations_3_5");
                    $recommendations_4_1 = $this->input->post("recommendations_4_1");
                    $recommendations_4_2 = $this->input->post("recommendations_4_2");
                    $recommendations_4_3 = $this->input->post("recommendations_4_3");
                    $recommendations_5_1 = $this->input->post("recommendations_5_1");
                    $recommendations_5_2 = $this->input->post("recommendations_5_2");
                    $recommendations_5_3 = $this->input->post("recommendations_5_3");
                    $recommendations_5_4 = $this->input->post("recommendations_5_4");
                    $recommendations_5_5 = $this->input->post("recommendations_5_5");
                    $impression = $this->input->post("impression");
                    

                    $ar_ao = array("Concern_1" => $concern_1, "Concern_2" => $concern_2, "Concern_3" => $concern_3, "Concern_4" => $concern_4, "Concern_5" => $concern_5, 
                    "Concern_6" => $concern_6, "Clinical_Background" => $clinical_background, "Motor_Speech_Development_1" => $motor_speech_development_1, 
                    "Motor_Speech_Development_2" => $motor_speech_development_2, "Motor_Speech_Development_3" => $motor_speech_development_3, 
                    "Motor_Speech_Development_4" => $motor_speech_development_4, "Academic_History" => $academic_history, "Tests_Administered" => $tests_administered, 
                    "Observations_1" => $observations_1, "Observations_2" => $observations_2, "Observations_3" => $observations_3, "Observations_4" => $observations_4, 
                    "Observations_5" => $observations_5, "Observations_6" => $observations_6, "Observations_7" => $observations_7, "Observations_8" => $observations_8, 
                    "Observations_9" => $observations_9, "Observations_10" => $observations_10, "Observations_11" => $observations_11, "Sub_Domain_1" => $sub_domain_1, 
                    "Sub_Domain_2" => $sub_domain_2, "Sub_Domain_3" => $sub_domain_3, "Sub_Domain_4" => $sub_domain_4, "Sub_Domain_5" => $sub_domain_5, "Sub_Domain_6" => $sub_domain_6, 
                    "Sub_Domain_7" => $sub_domain_7, "Sub_Domain_8" => $sub_domain_8, "Sub_Domain_9" => $sub_domain_9, "Sub_Domain_10" => $sub_domain_10, "Sub_Domain_11" => $sub_domain_11, 
                    "Table_1_1" => $table_1_1, "Table_1_2" => $table_1_2, "Table_1_3" => $table_1_3, "Table_2_1" => $table_2_1, "Table_2_2" => $table_2_2, "Table_2_3" => $table_2_3, 
                    "Table_3_1" => $table_3_1, "Table_3_2" => $table_3_2, "Table_3_3" => $table_3_3, "Table_4_1" => $table_4_1, "Table_5_1" => $table_5_1, "Table_5_2" => $table_5_2, 
                    "Table_5_3" => $table_5_3, "Table_6_1" => $table_6_1, "Table_6_2" => $table_6_2, "Table_6_3" => $table_6_3, "Table_7_1" => $table_7_1, "Table_7_2" => $table_7_2, 
                    "Table_7_3" => $table_7_3, "Table_8_1" => $table_8_1, "Table_9_1" => $table_9_1, "Table_9_2" => $table_9_2, "Table_9_3" => $table_9_3, "Table_10_1" => $table_10_1, 
                    "Table_10_2" => $table_10_2, "Table_10_3" => $table_10_3, "Table_11_1" => $table_11_1, "Table_11_2" => $table_11_2, "Table_11_3" => $table_11_3, 
                    "Table_12_1" => $table_12_1, "Table_13_1" => $table_13_1, "Table_13_2" => $table_13_2, "Table_13_3" => $table_13_3, "Table_14_1" => $table_14_1, 
                    "Table_14_2" => $table_14_2, "Table_14_3" => $table_14_3, "Table_15_1" => $table_15_1, "Observations_Communication_1" => $observations_communication_1, 
                    "Observations_Communication_2" => $observations_communication_2, "Observations_Communication_3" => $observations_communication_3, 
                    "Observations_Communication_4" => $observations_communication_4, "Observations_Dailyliving_1" => $observations_dailyliving_1, 
                    "Observations_Dailyliving_2" => $observations_dailyliving_2, "Observations_Dailyliving_3" => $observations_dailyliving_3, 
                    "Observations_Dailyliving_4" => $observations_dailyliving_4, "Observations_Socialization_1" => $observations_socialization_1, 
                    "Observations_Socialization_2" => $observations_socialization_2, "Observations_Socialization_3" => $observations_socialization_3, 
                    "Observations_Socialization_4" => $observations_socialization_4, "Observations_Motorskill_1" => $observations_motorskill_1, 
                    "Observations_Motorskill_2" => $observations_motorskill_2, "Observations_Motorskill_3" => $observations_motorskill_3, 
                    "Observations_Motorskill_4" => $observations_motorskill_4, "Recommendations_1_1" => $recommendations_1_1, "Recommendations_1_2" => $recommendations_1_2, 
                    "Recommendations_1_3" => $recommendations_1_3, "Recommendations_2_1" => $recommendations_2_1, "Recommendations_2_2" => $recommendations_2_2, 
                    "Recommendations_2_3" => $recommendations_2_3, "Recommendations_2_4" => $recommendations_2_4, "Recommendations_3_1" => $recommendations_3_1, 
                    "Recommendations_3_2" => $recommendations_3_2, "Recommendations_3_3" => $recommendations_3_3, "Recommendations_3_4" => $recommendations_3_4, 
                    "Recommendations_3_5" => $recommendations_3_5, "Recommendations_4_1" => $recommendations_4_1, "Recommendations_4_2" => $recommendations_4_2, 
                    "Recommendations_4_3" => $recommendations_4_3, "Recommendations_5_1" => $recommendations_5_1, "recommendations_5_2" => $recommendations_5_2, 
                    "Recommendations_5_3" => $recommendations_5_3, "Recommendations_5_4" => $recommendations_5_4, "Recommendations_5_5" => $recommendations_5_5, 
                    "Impression" => $impression , "FormId" => $insert_id);


                    $this->db->insert("assesment_report",$ar_ao);

                    if($this->db->affected_rows() > 0){
                        echo "<script>window.close();</script>";
                    }    
                }else{
                    echo `<script>window.alert("SomeThing Went Wrong")</script>`;
                }

            }

            if(isset($_POST['edit_assesment_report'])){

                $patientName = $this->input->post('patientName');
                $patientId = $this->input->post('patientId');
                $age = $this->input->post('age');
                $gender = $this->input->post('gender');
                $languages_known = $this->input->post('languages_known');
                $reffred_by = $this->input->post('reffred_by');
                $dob = $this->input->post('dob');
                $date1 = strtr($this->input->post('date'), '/', '-');
        $date = date('Y-m-d', strtotime($date1));
                $reason_for_assessment = $this->input->post('reason_for_assessment');

                $update_ar = array("Reason_For_Assessment"=> $reason_for_assessment,"PatientName"=>$patientName,"PatientId"=>$patient_Id, "Reffered_By"=>$reffred_by , "Languages_Known" => $languages_known,"DOB"=>$dob, "Age"=> $age, "Gender"=> $gender, "Date"=> $date, "FormId" => $form_id);
                $this->db->where("FormId", $form_id);
                $this->db->where("PatientId", $patient_Id);
                $this->db->update("formsrecords",$update_ar);

                    $concern_1 = $this->input->post("concern_1");
                    $concern_2 = $this->input->post("concern_2");
                    $concern_3 = $this->input->post("concern_3");
                    $concern_4 = $this->input->post("concern_4");
                    $concern_5 = $this->input->post("concern_5");
                    $concern_6 = $this->input->post("concern_6");
                    $clinical_background = $this->input->post("clinical_background");
                    $motor_speech_development_1 = $this->input->post("motor_speech_development_1");
                    $motor_speech_development_2 = $this->input->post("motor_speech_development_2");
                    $motor_speech_development_3 = $this->input->post("motor_speech_development_3");
                    $motor_speech_development_4 = $this->input->post("motor_speech_development_4");
                    $academic_history = $this->input->post("academic_history");
                    $tests_administered = $this->input->post("tests_administered");
                    $observations_1 = $this->input->post("observations_1");
                    $observations_2 = $this->input->post("observations_2");
                    $observations_3 = $this->input->post("observations_3");
                    $observations_4 = $this->input->post("observations_4");
                    $observations_5 = $this->input->post("observations_5");
                    $observations_6 = $this->input->post("observations_6");
                    $observations_7 = $this->input->post("observations_7");
                    $observations_8 = $this->input->post("observations_8");
                    $observations_9 = $this->input->post("observations_9");
                    $observations_10 = $this->input->post("observations_10");
                    $observations_11 = $this->input->post("observations_11");
                    $sub_domain_1 = $this->input->post("sub_domain_1");
                    $sub_domain_2 = $this->input->post("sub_domain_2");
                    $sub_domain_3 = $this->input->post("sub_domain_3");
                    $sub_domain_4 = $this->input->post("sub_domain_4");
                    $sub_domain_5 = $this->input->post("sub_domain_5");
                    $sub_domain_6 = $this->input->post("sub_domain_6");
                    $sub_domain_7 = $this->input->post("sub_domain_7");
                    $sub_domain_8 = $this->input->post("sub_domain_8");
                    $sub_domain_9 = $this->input->post("sub_domain_9");
                    $sub_domain_10 = $this->input->post("sub_domain_10");
                    $sub_domain_11 = $this->input->post("sub_domain_11");
                    $table_1_1 = $this->input->post("table_1_1");
                    $table_1_2 = $this->input->post("table_1_2");
                    $table_1_3 = $this->input->post("table_1_3");
                    $table_2_1 = $this->input->post("table_2_1");
                    $table_2_2 = $this->input->post("table_2_2");
                    $table_2_3 = $this->input->post("table_2_3");
                    $table_3_1 = $this->input->post("table_3_1");
                    $table_3_2 = $this->input->post("table_3_2");
                    $table_3_3 = $this->input->post("table_3_3");
                    $table_4_1 = $this->input->post("table_4_1");
                    $table_5_1 = $this->input->post("table_5_1");
                    $table_5_2 = $this->input->post("table_5_2");
                    $table_5_3 = $this->input->post("table_5_3");
                    $table_6_1 = $this->input->post("table_6_1");
                    $table_6_2 = $this->input->post("table_6_2");
                    $table_6_3 = $this->input->post("table_6_3");
                    $table_7_1 = $this->input->post("table_7_1");
                    $table_7_2 = $this->input->post("table_7_2");
                    $table_7_3 = $this->input->post("table_7_3");
                    $table_8_1 = $this->input->post("table_8_1");
                    $table_9_1 = $this->input->post("table_9_1");
                    $table_9_2 = $this->input->post("table_9_2");
                    $table_9_3 = $this->input->post("table_9_3");
                    $table_10_1 = $this->input->post("table_10_1");
                    $table_10_2 = $this->input->post("table_10_2");
                    $table_10_3 = $this->input->post("table_10_3");
                    $table_11_1 = $this->input->post("table_11_1");
                    $table_11_2 = $this->input->post("table_11_2");
                    $table_11_3 = $this->input->post("table_11_3");
                    $table_12_1 = $this->input->post("table_12_1");
                    $table_13_1 = $this->input->post("table_13_1");
                    $table_13_2 = $this->input->post("table_13_2");
                    $table_13_3 = $this->input->post("table_13_3");
                    $table_14_1 = $this->input->post("table_14_1");
                    $table_14_2 = $this->input->post("table_14_2");
                    $table_14_3 = $this->input->post("table_14_3");
                    $table_15_1 = $this->input->post("table_15_1");
                    $observations_communication_1 = $this->input->post("observations_communication_1");
                    $observations_communication_2 = $this->input->post("observations_communication_2");
                    $observations_communication_3 = $this->input->post("observations_communication_3");
                    $observations_communication_4 = $this->input->post("observations_communication_4");
                    $observations_dailyliving_1 = $this->input->post("observations_dailyliving_1");
                    $observations_dailyliving_2 = $this->input->post("observations_dailyliving_2");
                    $observations_dailyliving_3 = $this->input->post("observations_dailyliving_3");
                    $observations_dailyliving_4 = $this->input->post("observations_dailyliving_4");
                    $observations_socialization_1 = $this->input->post("observations_socialization_1");
                    $observations_socialization_2 = $this->input->post("observations_socialization_2");
                    $observations_socialization_3 = $this->input->post("observations_socialization_3");
                    $observations_socialization_4 = $this->input->post("observations_socialization_4");
                    $observations_motorskill_1 = $this->input->post("observations_motorskill_1");
                    $observations_motorskill_2 = $this->input->post("observations_motorskill_2");
                    $observations_motorskill_3 = $this->input->post("observations_motorskill_3");
                    $observations_motorskill_4 = $this->input->post("observations_motorskill_4");
                    $recommendations_1_1 = $this->input->post("recommendations_1_1");
                    $recommendations_1_2 = $this->input->post("recommendations_1_2");
                    $recommendations_1_3 = $this->input->post("recommendations_1_3");
                    $recommendations_2_1 = $this->input->post("recommendations_2_1");
                    $recommendations_2_2 = $this->input->post("recommendations_2_2");
                    $recommendations_2_3 = $this->input->post("recommendations_2_3");
                    $recommendations_2_4 = $this->input->post("recommendations_2_4");
                    $recommendations_3_1 = $this->input->post("recommendations_3_1");
                    $recommendations_3_2 = $this->input->post("recommendations_3_2");
                    $recommendations_3_3 = $this->input->post("recommendations_3_3");
                    $recommendations_3_4 = $this->input->post("recommendations_3_4");
                    $recommendations_3_5 = $this->input->post("recommendations_3_5");
                    $recommendations_4_1 = $this->input->post("recommendations_4_1");
                    $recommendations_4_2 = $this->input->post("recommendations_4_2");
                    $recommendations_4_3 = $this->input->post("recommendations_4_3");
                    $recommendations_5_1 = $this->input->post("recommendations_5_1");
                    $recommendations_5_2 = $this->input->post("recommendations_5_2");
                    $recommendations_5_3 = $this->input->post("recommendations_5_3");
                    $recommendations_5_4 = $this->input->post("recommendations_5_4");
                    $recommendations_5_5 = $this->input->post("recommendations_5_5");
                    $impression = $this->input->post("impression");
                    

                    $update_array = array("Concern_1" => $concern_1, "Concern_2" => $concern_2, "Concern_3" => $concern_3, "Concern_4" => $concern_4, "Concern_5" => $concern_5, 
                    "Concern_6" => $concern_6, "Clinical_Background" => $clinical_background, "Motor_Speech_Development_1" => $motor_speech_development_1, 
                    "Motor_Speech_Development_2" => $motor_speech_development_2, "Motor_Speech_Development_3" => $motor_speech_development_3, 
                    "Motor_Speech_Development_4" => $motor_speech_development_4, "Academic_History" => $academic_history, "Tests_Administered" => $tests_administered, 
                    "Observations_1" => $observations_1, "Observations_2" => $observations_2, "Observations_3" => $observations_3, "Observations_4" => $observations_4, 
                    "Observations_5" => $observations_5, "Observations_6" => $observations_6, "Observations_7" => $observations_7, "Observations_8" => $observations_8, 
                    "Observations_9" => $observations_9, "Observations_10" => $observations_10, "Observations_11" => $observations_11, "Sub_Domain_1" => $sub_domain_1, 
                    "Sub_Domain_2" => $sub_domain_2, "Sub_Domain_3" => $sub_domain_3, "Sub_Domain_4" => $sub_domain_4, "Sub_Domain_5" => $sub_domain_5, "Sub_Domain_6" => $sub_domain_6, 
                    "Sub_Domain_7" => $sub_domain_7, "Sub_Domain_8" => $sub_domain_8, "Sub_Domain_9" => $sub_domain_9, "Sub_Domain_10" => $sub_domain_10, "Sub_Domain_11" => $sub_domain_11, 
                    "Table_1_1" => $table_1_1, "Table_1_2" => $table_1_2, "Table_1_3" => $table_1_3, "Table_2_1" => $table_2_1, "Table_2_2" => $table_2_2, "Table_2_3" => $table_2_3, 
                    "Table_3_1" => $table_3_1, "Table_3_2" => $table_3_2, "Table_3_3" => $table_3_3, "Table_4_1" => $table_4_1, "Table_5_1" => $table_5_1, "Table_5_2" => $table_5_2, 
                    "Table_5_3" => $table_5_3, "Table_6_1" => $table_6_1, "Table_6_2" => $table_6_2, "Table_6_3" => $table_6_3, "Table_7_1" => $table_7_1, "Table_7_2" => $table_7_2, 
                    "Table_7_3" => $table_7_3, "Table_8_1" => $table_8_1, "Table_9_1" => $table_9_1, "Table_9_2" => $table_9_2, "Table_9_3" => $table_9_3, "Table_10_1" => $table_10_1, 
                    "Table_10_2" => $table_10_2, "Table_10_3" => $table_10_3, "Table_11_1" => $table_11_1, "Table_11_2" => $table_11_2, "Table_11_3" => $table_11_3, 
                    "Table_12_1" => $table_12_1, "Table_13_1" => $table_13_1, "Table_13_2" => $table_13_2, "Table_13_3" => $table_13_3, "Table_14_1" => $table_14_1, 
                    "Table_14_2" => $table_14_2, "Table_14_3" => $table_14_3, "Table_15_1" => $table_15_1, "Observations_Communication_1" => $observations_communication_1, 
                    "Observations_Communication_2" => $observations_communication_2, "Observations_Communication_3" => $observations_communication_3, 
                    "Observations_Communication_4" => $observations_communication_4, "Observations_Dailyliving_1" => $observations_dailyliving_1, 
                    "Observations_Dailyliving_2" => $observations_dailyliving_2, "Observations_Dailyliving_3" => $observations_dailyliving_3, 
                    "Observations_Dailyliving_4" => $observations_dailyliving_4, "Observations_Socialization_1" => $observations_socialization_1, 
                    "Observations_Socialization_2" => $observations_socialization_2, "Observations_Socialization_3" => $observations_socialization_3, 
                    "Observations_Socialization_4" => $observations_socialization_4, "Observations_Motorskill_1" => $observations_motorskill_1, 
                    "Observations_Motorskill_2" => $observations_motorskill_2, "Observations_Motorskill_3" => $observations_motorskill_3, 
                    "Observations_Motorskill_4" => $observations_motorskill_4, "Recommendations_1_1" => $recommendations_1_1, "Recommendations_1_2" => $recommendations_1_2, 
                    "Recommendations_1_3" => $recommendations_1_3, "Recommendations_2_1" => $recommendations_2_1, "Recommendations_2_2" => $recommendations_2_2, 
                    "Recommendations_2_3" => $recommendations_2_3, "Recommendations_2_4" => $recommendations_2_4, "Recommendations_3_1" => $recommendations_3_1, 
                    "Recommendations_3_2" => $recommendations_3_2, "Recommendations_3_3" => $recommendations_3_3, "Recommendations_3_4" => $recommendations_3_4, 
                    "Recommendations_3_5" => $recommendations_3_5, "Recommendations_4_1" => $recommendations_4_1, "Recommendations_4_2" => $recommendations_4_2, 
                    "Recommendations_4_3" => $recommendations_4_3, "Recommendations_5_1" => $recommendations_5_1, "recommendations_5_2" => $recommendations_5_2, 
                    "Recommendations_5_3" => $recommendations_5_3, "Recommendations_5_4" => $recommendations_5_4, "Recommendations_5_5" => $recommendations_5_5, 
                    "Impression" => $impression);


                    $this->main_model->update_assesment_report($update_array, $this->main_model->getFormRecordsUsingId($form_id, $patient_Id)[0]->Id);
                    echo "<script>window.close();</script>";    
                    

            }

            if($this->main_model->getFormRecordsUsingPatientId($patient_Id, $form_id) > 0){
                $data['edit'] = true;
                $data['formRecordsData'] = $this->main_model->getFormRecordsUsingId($form_id, $patient_Id);
                $data['assesment_reportData'] = $this->main_model->get_assesment_report($this->main_model->getFormRecordsUsingId($form_id, $patient_Id)[0]->Id);
            }else{
                $data['edit'] = false;
            }

            $data['formsData'] = $this->main_model->getSingleFormsmaster($form_id);
            $data['patientData'] = $this->main_model->getPatientData($patient_Id)[0];
            $data['page_title'] = "Form | ASSESMENT REPORT";
		    $data['content'] = "form_13_assesment_report";
            $data['action'] = $action;
            $this->load->view('template', $data);
        }   


    }

    public function attending_appoitment_list()
	{
		$data['success_msg'] = "";
		$data['error_msg'] = "";
        $filterQuery = "";
        $data['startDate'] = (isset($_GET['startDate'])) ? $filterQuery .= " AND ap.Date >= '".$_GET['startDate']."'" : "";
        $data['endDate'] = (isset($_GET['endDate'])) ? $filterQuery .=  " AND ap.Date <= '".$_GET['endDate']."'" : "";
        $data['filterQuery'] = $filterQuery;

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
        
        if(isset($_POST['add_fees'])){
            $feesApId = $this->input->post('feesApId');
            $fees = $this->input->post('feesAmount');
            $fees_type = $this->input->post('fees_type');
            $remark = $this->input->post('remark');

            $this->db->where("Id",$feesApId);
            $this->db->set("Fees",$fees);
            $this->db->set("Fees_Paid_Type",$fees_type);
            $this->db->set("Remark",$remark);
            $this->db->update("appoitment");
            if($this->db->affected_rows() > 0)
                $data['success_msg'] = "Fees updated";
            else
                $data['error_msg'] = "Something went wrong";
        } 

		$data['page_title'] = "Appointment List";
        $data['content'] = "attending_appoitment_list";
        $Department_Id = $this->session->userdata('Department_Id');
        $data['departmentformstransData'] = $this->main_model->getDepartmentFormsmasterWithDepartmentId($Department_Id);
        $this->load->view('template', $data);
	}

    public function canceled_appoitment_list()
	{
		$data['success_msg'] = "";
		$data['error_msg'] = "";
        $filterQuery = "";
        $data['startDate'] = (isset($_GET['startDate'])) ? $filterQuery .= " AND ap.Date >= '".$_GET['startDate']."'" : "";
        $data['endDate'] = (isset($_GET['endDate'])) ? $filterQuery .=  " AND ap.Date <= '".$_GET['endDate']."'" : "";
        $data['filterQuery'] = $filterQuery;


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

                $data['success_msg'] = "Remark Added";
            else:
                $data['error_msg'] = "Something went wrong";
            endif;
        } 
        
        if(isset($_POST['add_fees'])){
            $feesApId = $this->input->post('feesApId');
            $fees = $this->input->post('feesAmount');

            $this->db->where("Id",$feesApId);
            $this->db->set("Fees",$fees);
            $this->db->update("appoitment");
            if($this->db->affected_rows() > 0)
                $data['success_msg'] = "Fees updated";
            else
                $data['error_msg'] = "Something went wrong";
        } 



		$data['page_title'] = "Appointment List";
        $data['content'] = "canceled_appoitment_list";
        $this->load->view('template', $data);
	}

	public function leave_list()
	{
		$data['success_msg'] = "";
		$data['error_msg'] = "";

		if(isset($_POST['add_leave'])){
            $date1 = strtr($this->input->post('date'), '/', '-');
        $date = date('Y-m-d', strtotime($date1));
            $reason = $this->input->post('reason');
			$userid = $this->session->userdata('Id');

            $query = $this->db->query("SELECT * FROM leave_trans WHERE User_Id ='$userid' AND Status = 1 AND MONTH(Created_On) = MONTH(CURRENT_DATE())");
            
            if($query->num_rows() == 0){
                $ar = array("User_Id"=>$userid,"Reason"=>$reason,"Date"=>$date);
                $this->db->insert("leave_trans",$ar);
                if($this->db->affected_rows() > 0)
                    $data['success_msg'] = "Leave Applied";
                else
                    $data['error_msg'] = "Something went wrong";
            } else {
                $data['error_msg'] = "You can apply 1 leave in a month";
            }
        }
		
		$data['page_title'] = "Leave Management";
        $data['content'] = "leave_trans";
        $this->load->view('template', $data);
	}

	public function patients()
	{
		$data['page_title'] = "Patients";
        $data['content'] = "patients";
        $this->load->view('template', $data);
	}

    public function patient_details($id)
	{
        $data['patient'] = $this->main_model->getPatientData($id)[0];

		$data['page_title'] = "Patients Details";
        $data['content'] = "patient_details";
        $this->load->view('template', $data);
	}

    public function editPatients($id = "")
	{
        $data['patient'] = (object) array('Prefix'=>'','Pan'=>'','Id'=>'','Branch_Id'=>'', 'Name'=>'', 'Profile_Image'=>'', 'Age'=>'', 'Gender'=>'', 'DOB'=>'', 'Occupation'=>'', 'Mobile'=>'', 'Email'=>'', 'Aadhar'=>'', 'Marriage_Status'=>'', 'DOA'=>'', 'Father_Name'=>'', 'Father_Education'=>'', 'Father_Occupation'=>'', 'Mother_Name'=>'', 'Income'=>'', 'Address'=>'', 'District'=>'', 'Taluka'=>'', 'State'=>'', 'Pin'=>'', 'Reffered_By'=>'', 'Reffered_To'=>'', 'Language'=>'', 'Source'=>'', 'Is_Active'=>'','Alternate_Mobile'=>'');
        $data['success_msg'] = "";
        $data['error_msg'] = "";

        if(isset($_POST['add_patient'])){
            $branch = $this->input->post('branch');
            $prefix = $this->input->post('prefix');
            $name = $this->input->post('name');
            $age = $this->input->post('age');
            $gender = $this->input->post('gender');
            $dob = $this->input->post('dob');
            $occupation = $this->input->post('occupation');
            $mobile = $this->input->post('mobile');
            $Alternate_Mobile = $this->input->post('Alternate_Mobile');
            $email = $this->input->post('email');
            $aadhar = $this->input->post('aadhar');
            $marriage_status = $this->input->post('marriage_status');
            $doa = $this->input->post('doa');
            $father_name = $this->input->post('father_name');
            $father_education = $this->input->post('father_education');
            $father_occupation = $this->input->post('father_occupation');
            $mother_name = $this->input->post('mother_name');
            $income = $this->input->post('income');
            $address = $this->input->post('address');
            $state = $this->input->post('state');
            $taluka = $this->input->post('taluka');
            $district = $this->input->post('district');
            $pin = $this->input->post('pin');
            $ref_by = $this->input->post('ref_by');
            $ref_to = $this->input->post('ref_to');
            $lang = $this->input->post('lang');
            $source = $this->input->post('source');
            $status = $this->input->post('status');
            $pan = $this->input->post('pan');

            $profilePhoto = "user.png";

            $config['upload_path'] = './upload/';
            $config['allowed_types'] = 'png|jpg|jpeg';
            $config['encrypt_name'] = true;
            $config['overwrite'] = true;
        
            $this->upload->initialize($config);

            if(isset($_FILES["profile_photo"])) {
                if($this->upload->do_upload('profile_photo'))
                {
                    $profilePhoto = $this->upload->data()['file_name'];
                } else {
                    $error = $this->upload->display_errors();
                    // echo "<script>alert('Error with Policy Document". $this->upload->display_errors()."');</script>";
                }
            }

            $ar = array('Prefix'=>$prefix,'Pan'=>$pan,'Branch_Id'=>$branch, 'Name'=>$name, 'Profile_Image'=>$profilePhoto, 'Age'=>$age, 'Gender'=>$gender, 'DOB'=>$dob, 'Occupation'=>$occupation, 'Mobile'=>$mobile, 'Email'=>$email, 'Aadhar'=>$aadhar, 'Marriage_Status'=>$marriage_status, 'DOA'=>$doa, 'Father_Name'=>$father_name, 'Father_Education'=>$father_education, 'Father_Occupation'=>$father_occupation, 'Mother_Name'=>$mother_name, 'Income'=>$income, 'Address'=>$address, 'District'=>$district, 'Taluka'=>$taluka, 'State'=>$state, 'Pin'=>$pin, 'Reffered_By'=>$ref_by, 'Reffered_To'=>$ref_to, 'Language'=>$lang, 'Source'=>$source, 'Is_Active'=>$status,'Created_By'=>$this->session->userdata('Id'),'Alternate_Mobile'=>$Alternate_Mobile);
            $this->db->insert("patient",$ar);
            if($this->db->affected_rows() > 0)
                $data['success_msg'] = "New Patients added";
            else
                $data['error_msg'] = "Something went wrong";
        }

        if(isset($_POST['edit_patient'])){
            $branch = $this->input->post('branch');
            $prefix = $this->input->post('prefix');
            $name = $this->input->post('name');
            $age = $this->input->post('age');
            $gender = $this->input->post('gender');
            $dob = $this->input->post('dob');
            $occupation = $this->input->post('occupation');
            $mobile = $this->input->post('mobile');
            $Alternate_Mobile = $this->input->post('Alternate_Mobile');
            $email = $this->input->post('email');
            $aadhar = $this->input->post('aadhar');
            $marriage_status = $this->input->post('marriage_status');
            $doa = $this->input->post('doa');
            $father_name = $this->input->post('father_name');
            $father_education = $this->input->post('father_education');
            $father_occupation = $this->input->post('father_occupation');
            $mother_name = $this->input->post('mother_name');
            $income = $this->input->post('income');
            $address = $this->input->post('address');
            $state = $this->input->post('state');
            $taluka = $this->input->post('taluka');
            $district = $this->input->post('district');
            $pin = $this->input->post('pin');
            $ref_by = $this->input->post('ref_by');
            $ref_to = $this->input->post('ref_to');
            $lang = $this->input->post('lang');
            $source = $this->input->post('source');
            $status = $this->input->post('status');
            $pan = $this->input->post('pan');

            $config['upload_path'] = './upload/';
            $config['allowed_types'] = 'png|jpg|jpeg';
            $config['encrypt_name'] = true;
            $config['overwrite'] = true;
        
            $this->upload->initialize($config);

            if(isset($_FILES["profile_photo"])) {
                if($this->upload->do_upload('profile_photo'))
                {
                    $profilePhoto = $this->upload->data()['file_name'];
                    
                    $this->db->set('Profile_Image',$profilePhoto);
                    $this->db->where('Id',$id);
                    $this->db->update("patient");
                } 
            }
    


            $ar = array('Prefix'=>$prefix,'Pan'=>$pan,'Branch_Id'=>$branch, 'Name'=>$name,'Age'=>$age, 'Gender'=>$gender, 'DOB'=>$dob, 'Occupation'=>$occupation, 'Mobile'=>$mobile, 'Email'=>$email, 'Aadhar'=>$aadhar, 'Marriage_Status'=>$marriage_status, 'DOA'=>$doa, 'Father_Name'=>$father_name, 'Father_Education'=>$father_education, 'Father_Occupation'=>$father_occupation, 'Mother_Name'=>$mother_name, 'Income'=>$income, 'Address'=>$address, 'District'=>$district, 'Taluka'=>$taluka, 'State'=>$state, 'Pin'=>$pin, 'Reffered_By'=>$ref_by, 'Reffered_To'=>$ref_to, 'Language'=>$lang, 'Source'=>$source, 'Is_Active'=>$status,'Created_By'=>$this->session->userdata('Id'),'Alternate_Mobile'=>$Alternate_Mobile);
            $this->db->where('Id',$id);
            $query = $this->db->update("patient",$ar);
            
            if($query)
                $data['success_msg'] = "Patients Updated";
            else
                $data['error_msg'] = "Something went wrong";
        }

        if($id != ""):
            $data['edit'] = true;
            $data['patient'] = $this->main_model->getPatientData($id)[0];
        else:
            $data['edit'] = false;
        endif;


		$data['page_title'] = "Patients";
        $data['content'] = "edit_patients";
        $this->load->view('template', $data);
	}

    public function cancelAppoitment($id){

        $this->db->Where("Id",$id);
        $this->db->set("Status",0);
        $this->db->update("appoitment");
        header("Location: ".base_url."appoitment-list");
    }

    public function cancelRecurringAppoitment($id, $fee)
    {
        $this->db->Where("Recurring_Appointment_Id",$id);
        $this->db->Where("Status", 2);
        $this->db->set("Status",0);
        $this->db->set("Fees",$fee);
        $this->db->update("appoitment");
        $this->db->Where("Id",$id);
        $this->db->set("Status",0);
        $this->db->update("recurring_appointment");
    }

    public function cancelLeave($id){

        $this->db->Where("Id",$id);
        $this->db->set("Status",3);
        $this->db->update("leave_trans");
        header("Location: ".base_url."leave-management");
    }

    
    public function sales($start_date="",$end_date="")
	{
        $data['start_date'] = $start_date;
        $data['end_date'] = $end_date;

        if(isset($_POST['apply_filter'])){
            

            $date1 = strtr($this->input->post('start_date'), '/', '-');
            $start_date = date('Y-m-d', strtotime($date1));

            

            $date1 = strtr($this->input->post('end_date'), '/', '-');
        $end_date = date('Y-m-d', strtotime($date1));
            header('Location: '.base_url.'sales/'.$start_date.'/'.$end_date);
        }

		$data['page_title'] = "Sales";
        $data['content'] = "sales";
        $this->load->view('template', $data);
	}

    public function leads()
	{

        $data['success_msg'] = "";
		$data['error_msg'] = "";

        if(isset($_POST['add_lead'])){
            $name = $this->input->post('name');
            $mobile = $this->input->post('mobile');
            $email = $this->input->post('email');
            $city = $this->input->post('city');
            $branch = $this->input->post('branch');
            $date1 = strtr($this->input->post('date'), '/', '-');
        $date = date('Y-m-d', strtotime($date1));
            $remark = $this->input->post('remark');
			$userid = $this->session->userdata('Id');

            $ar = array("User_Id"=>$userid,"Name"=>$name,"Mobile"=>$mobile,'City'=>$city,'Near_Branch'=>$branch,'Date'=>$date,'Remark'=>$remark,'Email'=>$email,'Status'=>0);
            $this->db->insert("leads",$ar);
            if($this->db->affected_rows() > 0)
                $data['success_msg'] = "Lead Added";
            else
                $data['error_msg'] = "Something went wrong";
        }

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

                    $ar = array('Name'=>$name,'Mobile'=>$mobile,'Branch_Id'=>$branch);
                    $this->db->insert('patient',$ar);
                    $this->db->trans_complete();
                }
            } else {
            }
        }

		$data['page_title'] = "Leads";
        $data['content'] = "leads";
        $this->load->view('template', $data);
	}

    public function check_aadhaar($adharno)
    {
        $this->db->where('Aadhar',$adharno);
        $query = $this->db->get("users");
        if($query->num_rows() == 0){
            echo "success";
        } else {
            echo "failed";
        }

    }

    public function check_pan($adharno)
    {
        $this->db->where('Pan',$adharno);
        $query = $this->db->get("users");
        if($query->num_rows() == 0){
            echo "success";
        } else {
            echo "failed";
        }

    }

    public function check_username($username)
    {
        $this->db->where('Username',$username);
        $query = $this->db->get("users");
        if($query->num_rows() == 0){
            echo "success";
        } else {
            echo "failed";
        }

    }

    public function check_aadhaar_patient($Aadhar)
    {
        $this->db->where('Aadhar',$Aadhar);
        $query = $this->db->get("patient");
        if($query->num_rows() == 0){
            echo "success";
        } else {
            echo "failed";
        }

    }

    public function check_pan_patient($pan)
    {
        $this->db->where('Pan',$pan);
        $query = $this->db->get("patient");
        if($query->num_rows() == 0){
            echo "success";
        } else {
            echo "failed";
        }

    }

    public function getDoctorReward($id)
    {
        $this->db->select("COALESCE(SUM(Points),0) as Total_Points");
        $this->db->where('User_Id',$id);
        $total_points = $this->db->get("rewards")->result()[0]->Total_Points;

        $this->db->select("COALESCE(SUM(Points),0) as Settle_Points");
        $this->db->where('User_Id',$id);
        $settle_Points = $this->db->get("rewards_settle")->result()[0]->Settle_Points;

        echo $total_points-$settle_Points;
    }

    public function deletePatients($id){
        $this->db->where('Id',$id);
        $this->db->delete('patient');
        header('Location: '.base_url.'patients');
    }


    public function profile()
    {
        if($this->session->userdata('Role') == 2){
            $data['page_title'] = "Profile";
            $data['content'] = "profile_internal";
            $this->load->view('template', $data);
        } else if($this->session->userdata('Role') == 3) {
            $data['page_title'] = "Profile";
            $data['content'] = "profile_external";
            $this->load->view('template', $data);
        } else if($this->session->userdata('Role') == 4 || $this->session->userdata('Role') == 6) {
            $data['page_title'] = "Profile";
            $data['content'] = "profile_reception";
            $this->load->view('template', $data);
        } else if($this->session->userdata('Role') == 5) {
            $data['page_title'] = "Profile";
            $data['content'] = "profile_telecaller";
            $this->load->view('template', $data);
        } else {

        }
    }

    public function markOnline()
    {
        if(empty($this->main_model->getActiveStatus($this->session->userdata('Id')))){
            $inar = array("Doctor_Id"=>$this->session->userdata('Id'),"Status"=>1);
            $this->db->insert("active_status",$inar);
        } else {
            $this->db->set("Status",1);
            $this->db->where("Doctor_Id",$this->session->userdata('Id'));
            $this->db->update("active_status");
            // echo $this->db->last_query();
        }

        header("Location: ".base_url."dashboard");
        
    }

    public function markOffline()
    {
        if(empty($this->main_model->getActiveStatus($this->session->userdata('Id')))){
            $inar = array("Doctor_Id"=>$this->session->userdata('Id'),"Status"=>0);
            $this->db->insert("active_status",$inar);
        } else {
            $this->db->set("Status",0);
            $this->db->where("Doctor_Id",$this->session->userdata('Id'));
            $this->db->update("active_status");
            // echo $this->db->last_query();
        }

        header("Location: ".base_url."dashboard");
        
    }

    public function patientDataById($id){
        $this->db->where('Id',$id);
        $query = $this->db->get("patient");
        $proRes = json_encode($query->result()[0], true);
        echo $proRes;
    }

    public function itemDataById($id){
        $this->db->where('Item_Id',$id);
        $query = $this->db->get("items");
        $proRes = json_encode($query->result()[0], true);
        echo $proRes;
    }

    public function update_invoice_items_stock($id, $qty)
    {
        $this->db->where("Item_Id",$id);
        $this->db->set("Available_Stock",$qty);
        $this->db->update("items");
    }

    public function procedureDataById($id){
        $this->db->where('Procedures_Id',$id);
        $query = $this->db->get("procedures");

        $proRes = $query->result()[0];

        $this->db->where("Department_Id",$query->result()[0]->Department_Id);
        $this->db->where("Role",2);
        $this->db->or_where("Role",3);
        $usersQuery = $this->db->get("users");
        $ures = $usersQuery->result();
        $ar = array("Procedures_Id"=> $proRes->Procedures_Id,"Procedure_Name"=> $proRes->Procedure_Name,"Description"=> $proRes->Description,"Fees"=> $proRes->Fees,"Department_Id"=> $proRes->Department_Id,"Users"=>$usersQuery->result());

        // echo json_encode($ar);
        // // echo json_encode($usersQuery->result());
        $select = "";
        for($i = 0;$i< $usersQuery->num_rows();$i++){
            $select .= '<option value="' . $ures[$i]->Id . '">' . $ures[$i]->Name . '</option>';
        }

        echo "<tr id='tr'><td>".$proRes->Procedure_Name ." </td><td><p id='feesId".$id."'>".$proRes->Fees."</p></td><td><select required class='form-control' id='proId".$id."'>".$select."</select></td><td><button id='rbtn' type='button' onclick='removeId(`".$proRes->Procedures_Id ."`,`".$proRes->Fees ."`)' class='btn btn-link'>X</button></td></tr>";
    }

    

    public function procedureDataByIdWithIndex($id,$trsr){
        $this->db->where('Procedures_Id',$id);
        $query = $this->db->get("procedures");

        $proRes = $query->result()[0];

        $this->db->where("Department_Id",$query->result()[0]->Department_Id);
        $this->db->where("Role",2);
        $this->db->or_where("Role",3);
        $usersQuery = $this->db->get("users");
        $ures = $usersQuery->result();
        $ar = array("Procedures_Id"=> $proRes->Procedures_Id,"Procedure_Name"=> $proRes->Procedure_Name,"Description"=> $proRes->Description,"Fees"=> $proRes->Fees,"Department_Id"=> $proRes->Department_Id,"Users"=>$usersQuery->result());

        // echo json_encode($ar);
        // // echo json_encode($usersQuery->result());
        $select = "";
        for($i = 0;$i< $usersQuery->num_rows();$i++){
            $select .= '<option value="' . $ures[$i]->Id . '">' . $ures[$i]->Name . '</option>';
        }

        echo "<tr id='tr".$trsr."'><td>".$proRes->Procedure_Name ." </td><td><p id='feesId".$id."'>".$proRes->Fees."</p></td><td><select required class='form-control' id='proId".$id."'>".$select."</select></td><td><button id='rbtn".$trsr."' type='button' onclick='removeId(`".$trsr."`)' class='btn btn-link'>X</button></td></tr>";
    }



    public function procedureDataByIdWithoutFees($id,$date,$trsr){
        $this->db->where('Procedures_Id',$id);
        $query = $this->db->get("procedures");

        $proRes = $query->result()[0];

        $this->db->where("Department_Id",$query->result()[0]->Department_Id);
        $this->db->where("Role",2);
        $this->db->or_where("Role",3);
        $usersQuery = $this->db->get("users");
        $ures = $usersQuery->result();
        $ar = array("Procedures_Id"=> $proRes->Procedures_Id,"Procedure_Name"=> $proRes->Procedure_Name,"Description"=> $proRes->Description,"Fees"=> $proRes->Fees,"Department_Id"=> $proRes->Department_Id,"Users"=>$usersQuery->result());

        // echo json_encode($ar);
        // // echo json_encode($usersQuery->result());
        $select = "";
        for($i = 0;$i< $usersQuery->num_rows();$i++){
            $select .= '<option value="' . $ures[$i]->Id . '">' . $ures[$i]->Name . '</option>';
        }

        echo "<tr id='tr".$trsr."'><td><p id='dateId".$id."'>".$date ." </p></td><td>".$proRes->Procedure_Name ." </td><td><select required class='form-control' id='proId".$id."'>".$select."</select></td><td> <p id='avail".$trsr."'></p> <button id='checkavailable".$trsr."' type='button' onclick='checkAvail(`".$trsr."`,`".$proRes->Procedures_Id ."`)' class='btn btn-link'>Check Availability</button> <button id='rbtn".$trsr."' type='button' onclick='removeId(`".$trsr ."`)' class='btn btn-link'>X</button></td></tr>";
    }


    
    public function createAppointment()
    {
        $patient = $this->input->post('patient');
        $drid = $this->input->post('drid');
        $note = $this->input->post('note');
        $date1 = strtr($this->input->post('date'), '/', '-');
        $date = date('Y-m-d', strtotime($date1));
        $branchid = $this->session->userdata('Branch_Id');
        $userid = $this->session->userdata('Id');
        $procedure_Id = $this->input->post('procedure_Id');
        $fees = $this->input->post('fees');
        $Referred_From = $this->input->post('referredFrom');

        $drtype = $this->main_model->getUserDataById($drid)[0]->Role;

        $ar = array("Patient_Id"=>$patient,"Doctor_Type"=>$drtype,"Doctor_Id"=>$drid,"User_Id"=>$userid,"Note"=>$note,'Date'=>$date,'Branch_Id'=>$branchid,'Procedure_Id'=>$procedure_Id,'Fees'=>$fees,'Referred_From'=>$Referred_From);
        $this->db->insert("appoitment",$ar);
        if($this->db->affected_rows() > 0)
            $data['success_msg'] = "Appoitment Scheduled";
        else
            $data['error_msg'] = "Something went wrong";
    }


    public function recommendedList(){
        $data['page_title'] = "Recommended Patients";
        $data['content'] = "recommended_list";
        $this->load->view('template', $data);
    }

    public function recurring_appoitment_list()
    {
        $data['success_msg'] = "";
        $data['error_msg'] = "";

        if(isset($_POST['add_payment'])){
            $apId = $this->input->post('apId');
            $fees = $this->input->post('collect_amount');
            $fees_type = $this->input->post('fees_type');
            $remark = $this->input->post('remark');

            $this->db->where("Appointment_Type","2");
            $this->db->where("Recurring_Appointment_Id",$apId);
            $this->db->where("Fees","0");
            $this->db->limit("1");
            $appQuery = $this->db->get("appoitment");
            if($appQuery->num_rows() > 0){
                $result = $appQuery->result();
                $this->db->where("Id",$result[0]->Id);
                $this->db->set("Fees",$fees);
                $this->db->set("Fees_Paid_Type",$fees_type);
                $this->db->set("Remark",$remark);
                $this->db->update("appoitment");
                if($this->db->affected_rows() > 0)
                    $data['success_msg'] = "Fees updated";
                else
                    $data['error_msg'] = "Something went wrong";
            } else {
                $data['error_msg'] = "Something went wrong";
            }
            

        } 

        $data['page_title'] = "Recurring Appointment List";
        $data['content'] = "recurring_appoitment_list";
        $this->load->view('template', $data);
    }

    public function delete_procedure($id, $aptId){
        $this->main_model->deleteRecurringAppointmentProcedure($id, $aptId);
    }

    public function recurring_appoitment_view($id)
    {   
        $data['list'] = $this->main_model->getSingleRecurringAppoitment($id);
        $data['procedure_list'] = $this->main_model->getAppoitmentByRecurringAppointmentId($id);
        $data['page_title'] = "Recurring Appointment View";
        $data['content'] = "recurring_appoitment_view";
        $data['apt_id'] = $id;
        $this->load->view('template', $data);
    }

    public function create_recurring_appoiment()
    {
        $patient = $this->input->post('patient');
        $Referred_From = $this->input->post('referredFrom');
        

        $date1 = strtr($this->input->post('startDate'), '/', '-');
        $startDate = date('Y-m-d', strtotime($date1));

        $fees = $this->input->post('fees');
        $days = $this->input->post('days');
        $bufferDays = $this->input->post('bufferDays');
        $profId = $this->input->post('profId');
        $note = $this->input->post('note');
        $status = $this->input->post('status');
        
        $branchid = $this->session->userdata('Branch_Id');
        $ar = array("Patient_Id"=>$patient,"Branch_Id"=>$branchid,"Referred_From"=>$Referred_From,"Start_Date"=>$startDate,"Days"=>$days,'Extra_Days'=>$bufferDays,'Fees'=>$fees,'Note'=>$note, "Status" => $status);
        $this->db->insert("recurring_appointment",$ar);
        if($this->db->affected_rows() > 0){
            $insert_id = $this->db->insert_id();
            $ar = array('status'=>"success","id"=>$insert_id);
            echo json_encode($ar);
        }else{
            $ar = array('status'=>"error");
            echo json_encode($ar);
        }

    }

    public function createRAppointment()
    {
        $patient = $this->input->post('patient');
        $drid = $this->input->post('drid');
        $note = $this->input->post('note');

        $date1 = strtr($this->input->post('date'), '/', '-');
        $date = date('Y-m-d', strtotime($date1));


        $slotid = $this->input->post('slotId');
        $branchid = $this->session->userdata('Branch_Id');
        $userid = $this->session->userdata('Id');
        $procedure_Id = $this->input->post('procedure_Id');
        $fees = $this->input->post('fees');
        $Referred_From = $this->input->post('referredFrom');
        $Recurring_Appointment_Id = $this->input->post('Recurring_Appointment_Id');

        $drtype = $this->main_model->getUserDataById($drid)[0]->Role;

        $ar = array("Patient_Id"=>$patient,"Doctor_Type"=>$drtype,"Doctor_Id"=>$drid,"User_Id"=>$userid,"Note"=>$note,'Date'=>$date,'Slot_Id'=>$slotid,'Branch_Id'=>$branchid,'Procedure_Id'=>$procedure_Id,'Fees'=>$fees,'Referred_From'=>$Referred_From,'Recurring_Appointment_Id'=>$Recurring_Appointment_Id,"Appointment_Type"=>2);
        $this->db->insert("appoitment",$ar);
        if($this->db->affected_rows() > 0)
            $data['success_msg'] = "Appoitment Scheduled";
        else
            $data['error_msg'] = "Something went wrong";
    }

    public function getDoctorAvailableSlots($doctorId,$date,$trid){
        $this->db->where("User_Id",$doctorId);
        $query = $this->db->get("slot_master");
        $ures = $query->result();
        $select = "";
        // print_r($ures);
        if($query->num_rows() > 0){
            for($i = 0;$i< $query->num_rows();$i++){
                $date1 = strtr($date, '/', '-');
                $date = date('Y-m-d', strtotime($date1));

                $this->db->where("Date",$date);
                $this->db->where("Doctor_Id",$doctorId);
                $this->db->where("Status !=", -1);
                $this->db->where("Slot_Id",$ures[$i]->Id);
                $appQuery = $this->db->get("appoitment");
                // echo $this->db->last_query();
                if(!$appQuery->num_rows() > 0){
                    
                    $select .= '<input type="radio" name="radio'.$trid.'" value="'.$ures[$i]->Id.'"><label> &nbsp;'.$ures[$i]->Open_Time.' - '.$ures[$i]->Close_Time.'</label><br>';
                }else {
                    $select .= '<input type="radio" name="radio'.$trid.'" value="'.$ures[$i]->Id.'" disabled><label> &nbsp;'.$ures[$i]->Open_Time.' - '.$ures[$i]->Close_Time.'</label><br>';
                }
    
            }
        } else {
            $select = "No Slots Found";
        }
        

        echo $select;
    }

    public function calendar($doctorId="",$date = "")
    {
        $data['error_msg'] = "";
        $data['success_msg'] = "";
        $data['doctorId'] = "";
        $data['month'] = "";
        $data['year'] = "";
        $data['days'] = "";

        if($doctorId == ""){
            $data['error_msg'] = "Doctor Not Selected";
        } else {
            $data['doctorId'] = $doctorId;
        }

        if($date != ""){
            $exp = explode("-",$date);
            $data['month'] = $exp[1];
            $data['year'] = $exp[0];
            $data['days'] = $d=cal_days_in_month(CAL_GREGORIAN,$exp[1],$exp[0]);
        } else {
            $data['month'] = date("m");
            $data['year'] = date("Y");
            $data['days'] = date("t");
        }


        $data['page_title'] = "Calendar";
        $data['content'] = "calendar";
        $this->load->view('template', $data);
    }

}