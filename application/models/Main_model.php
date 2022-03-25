<?php
/**
 * 
 */
class Main_Model extends CI_Model
{
	
	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
       $this->load->database();

    }

    public function getLastPaymentReceiptId(){
        $query = $this->db->query("SELECT * FROM payment_receipt ORDER BY Id DESC LIMIT 1");
        return $query->result();
    }

    public function getPaymentReceipt($branch_id){
        if($branch_id != "" && $branch_id != null){
            $this->db->where('Branch_Id',$branch_id);
            $query = $this->db->query("SELECT * FROM payment_receipt WHERE Branch_Id = '$branch_id' ORDER BY Id DESC");
            return $query->result();
        } else {
            $query = $this->db->query("SELECT * FROM payment_receipt ORDER BY Id DESC");
            return $query->result();
        }
    }
    
    public function checkLogin($username,$password)
    {
        $this->db->where('Username',$username);
    	$this->db->where('Password',$password);
        $this->db->where('Is_Active','1');
        $query = $this->db->get('users');
    	if ($query->num_rows() == 1) {
    		$this->session->set_userdata($query->result_array()[0]);
            return true;
    	}else{
    		return false;
    	}
    }

    public function get_assesment_report($form_Id){
        $this->db->where("FormId",$form_Id);
        $query = $this->db->get("assesment_report");
        return $query->result();
    }

    public function get_count_assesment_report($id)
    {
        $this->db->where('Id',$id);
        $query = $this->db->get('assesment_report');
        return $query->num_rows();
    }

    public function update_assesment_report($arr_update, $id){
        $this->db->where("FormId", $id);
        $query = $this->db->update("assesment_report",$arr_update);
    }

    public function get_sample_report_misic($form_Id){
        $this->db->where("FormId",$form_Id);
        $query = $this->db->get("sample_report_misic");
        return $query->result();
    }

    public function get_count_sample_report_misic($id)
    {
        $this->db->where('Id',$id);
        $query = $this->db->get('sample_report_misic');
        return $query->num_rows();
    }

    public function update_sample_report_misic($arr_update, $id){
        $this->db->where("FormId", $id);
        $query = $this->db->update("sample_report_misic",$arr_update);
    }

    public function get_speech_case_history($form_Id){
        $this->db->where("FormId",$form_Id);
        $query = $this->db->get("speech_case_history");
        return $query->result();
    }

    public function get_count_speech_case_history($id)
    {
        $this->db->where('Id',$id);
        $query = $this->db->get('speech_case_history');
        return $query->num_rows();
    }

    public function update_speech_case_history($arr_update, $id){
        $this->db->where("FormId", $id);
        $query = $this->db->update("speech_case_history",$arr_update);
    }

    public function get_pediatric_case_history($form_Id){
        $this->db->where("FormId",$form_Id);
        $query = $this->db->get("pediatric_case_history");
        return $query->result();
    }

    public function get_count_pediatric_case_history($id)
    {
        $this->db->where('Id',$id);
        $query = $this->db->get('pediatric_case_history');
        return $query->num_rows();
    }

    public function update_pediatric_case_history($arr_update, $id){
        $this->db->where("FormId", $id);
        $query = $this->db->update("pediatric_case_history",$arr_update);
    }

    public function get_adult_case_history($form_Id){
        $this->db->where("FormId",$form_Id);
        $query = $this->db->get("adult_case_history");
        return $query->result();
    }

    public function get_count_adult_case_history($id)
    {
        $this->db->where('Id',$id);
        $query = $this->db->get('adult_case_history');
        return $query->num_rows();
    }

    public function update_adult_case_history($arr_update, $id){
        $this->db->where("FormId", $id);
        $query = $this->db->update("adult_case_history",$arr_update);
    }

    public function get_feeding_proforma($form_Id){
        $this->db->where("FormId",$form_Id);
        $query = $this->db->get("feeding_proforma");
        return $query->result();
    }

    public function get_count_feeding_proforma($id)
    {
        $this->db->where('Id',$id);
        $query = $this->db->get('feeding_proforma');
        return $query->num_rows();
    }

    public function update_feeding_proforma($arr_update, $id){
        $this->db->where("FormId", $id);
        $query = $this->db->update("feeding_proforma",$arr_update);
    }

    public function get_speech_pre_therapy($form_Id){
        $this->db->where("FormId",$form_Id);
        $query = $this->db->get("speech_pre_therapy");
        return $query->result();
    }

    public function get_count_speech_pre_therapy($id)
    {
        $this->db->where('Id',$id);
        $query = $this->db->get('speech_pre_therapy');
        return $query->num_rows();
    }

    public function update_speech_pre_therapy($arr_update, $id){
        $this->db->where("FormId", $id);
        $query = $this->db->update("speech_pre_therapy",$arr_update);
    }

    public function get_stuttering_proforma($form_Id){
        $this->db->where("FormId",$form_Id);
        $query = $this->db->get("stuttering_proforma");
        return $query->result();
    }

    public function get_count_stuttering_proforma($id)
    {
        $this->db->where('Id',$id);
        $query = $this->db->get('stuttering_proforma');
        return $query->num_rows();
    }

    public function update_stuttering_proforma($arr_update, $id){
        $this->db->where("FormId", $id);
        $query = $this->db->update("stuttering_proforma",$arr_update);
    }

    public function get_articulation_proforma($form_Id){
        $this->db->where("FormId",$form_Id);
        $query = $this->db->get("articulation_proforma");
        return $query->result();
    }

    public function get_count_articulation_proforma($id)
    {
        $this->db->where('Id',$id);
        $query = $this->db->get('articulation_proforma');
        return $query->num_rows();
    }

    public function update_articulation_proforma($arr_update, $id){
        $this->db->where("FormId", $id);
        $query = $this->db->update("articulation_proforma",$arr_update);
    }

    public function get_aphasia_other_neuro_disorder_poforma($form_Id){
        $this->db->where("FormId",$form_Id);
        $query = $this->db->get("aphasia_other_neuro_disorder_poforma");
        return $query->result();
    }

    public function get_count_aphasia_other_neuro_disorder_poforma($id)
    {
        $this->db->where('Id',$id);
        $query = $this->db->get('aphasia_other_neuro_disorder_poforma');
        return $query->num_rows();
    }

    public function update_aphasia_other_neuro_disorder_poforma($arr_update, $id){
        $this->db->where("FormId", $id);
        $query = $this->db->update("aphasia_other_neuro_disorder_poforma",$arr_update);
    }

    public function get_language_history($form_Id){
        $this->db->where("FormId",$form_Id);
        $query = $this->db->get("language_history");
        return $query->result();
    }

    public function get_count_language_history($id)
    {
        $this->db->where('Id',$id);
        $query = $this->db->get('language_history');
        return $query->num_rows();
    }

    public function update_language_history($arr_update, $id){
        $this->db->where("FormId", $id);
        $query = $this->db->update("language_history",$arr_update);
    }

    public function get_case_history($form_Id){
        $this->db->where("FormId",$form_Id);
        $query = $this->db->get("case_history");
        return $query->result();
    }

    public function get_count_case_history($id)
    {
        $this->db->where('Id',$id);
        $query = $this->db->get('case_history');
        return $query->num_rows();
    }

    public function update_case_history($arr_update, $id){
        $this->db->where("FormId", $id);
        $query = $this->db->update("case_history",$arr_update);
    }
    

    public function get_speech_lesson_plan_table($form_Id){
        $this->db->where("FormId",$form_Id);
        $query = $this->db->get("speech_lesson_plan_table");
        return $query->result();
    }

    public function get_count_speech_lesson_plan_table($id)
    {
        $this->db->where('Id',$id);
        $query = $this->db->get('speech_lesson_plan_table');
        return $query->num_rows();
    }

    public function update_speech_lesson_plan_table($arr_update, $id){
        $this->db->where("Id", $id);
        $query = $this->db->update("speech_lesson_plan_table",$arr_update);
    }

    public function get_progress_report_table($form_Id){
        $this->db->where("FormId",$form_Id);
        $query = $this->db->get("progress_report_table");
        return $query->result();
    }

    public function getDepartmentFormsmasterWithDepartmentId($dept_Id){
        $this->db->where("DepertmentId",$dept_Id);
        $query = $this->db->get("departmentformstrans");
        return $query->result();
    }

    public function getSingleFormsmasterUsingFormName($Name){
        $this->db->where("Name",$Name);
        $query = $this->db->get("formsmaster");
        return $query->result()[0];
    }

    public function get_count_progress_report_table($id)
    {
        $this->db->where('Id',$id);
        $query = $this->db->get('progress_report_table');
        return $query->num_rows();
    }

    public function update_progress_report_table($arr_update, $id){
        $this->db->where("Id", $id);
        $query = $this->db->update("progress_report_table",$arr_update);
    }

    public function getSingleFormsmasterName($Id){
        $this->db->where("Id",$Id);
        $query = $this->db->get("formsmaster");
        return $query->result();
    }

    public function deletedepartmentformstrans($id, $dept_id)
    {
        $this->db->where("Id",$id);
        $query = $this->db->delete("departmentformstrans");
        $afftectedRows = $this->db->affected_rows();
        if($afftectedRows === 1){
            echo "<script>window.location.replace('" . base_url . "departments/'". $dept_id .")</script>";
        }else{
            return false;
        }
    }

    public function getSingleFormsmaster($Id){
        $this->db->where("Id",$Id);
        $query = $this->db->get("formsmaster");
        return $query->result()[0];
    }

    public function getformsmaster()
    {
        $query = $this->db->get('formsmaster');
        return $query->result();
    }

    public function getwebsitecontacts()
    {
        $query = $this->db->get('websitecontacts');
        return $query->result();
    }

    public function getUsersCount()
    {
        $query = $this->db->get('users');
    	return $query->num_rows();
    }

    public function getPatientCount()
    {
        $query = $this->db->get('patient');
    	return $query->num_rows();
    }

    public function getBranchCount($onlyActive = false)
    {
        if($onlyActive)
            $this->db->where('Is_Active',1);
        $query = $this->db->get('branch');
    	return $query->num_rows();
    }

    public function getBranchData($id = "",$onlyActive = false){
        
        if($id !== "")
            $this->db->where("Id",$id);

        if($onlyActive)
            $this->db->where('Is_Active',1);

        $query = $this->db->get('branch');
        return $query->result();
    }

    public function getProceduresData($id = ""){
        
        if($id !== "")
            $this->db->where("Procedures_Id",$id);

        $query = $this->db->get('procedures');
        return $query->result();
    }

    public function getSupplierData($id = ""){
        
        if($id !== "")
            $this->db->where("Supplier_Id",$id);

        $query = $this->db->get('supplier');
        return $query->result();
    }

    public function getInvoiceDataBranch($branch_id = ""){
        if($branch_id != "" && $branch_id != null){
            $this->db->where('Branch_Id',$branch_id);
            $query = $this->db->get('invoice');
            return $query->result();
        } else {
            $query = $this->db->get('invoice');
            return $query->result();
        }
    }

    public function getInvoiceData($id = ""){
        
        if($id !== "")
            $this->db->where("Id",$id);

        $query = $this->db->get('invoice');
        return $query->result();
    }

    public function getInvoiceItemsData($id = ""){
        
        if($id !== "")
            $this->db->where("Invoice_Id",$id);

        $query = $this->db->get('invoice_items');
        return $query->result();
    }

    public function getItemData($id = ""){
        
        if($id !== "")
            $this->db->where("Item_Id",$id);

        $query = $this->db->get('items');
        return $query->result();
    }

    public function getReferredData($id = ""){
        
        if($id !== "")
            $this->db->where("Id",$id);

        $query = $this->db->get('referred_master');
        return $query->result();
    }

    public function getDepartmentData($id = ""){
        
        if($id !== "")
            $this->db->where("Id",$id);
            
        $query = $this->db->get('department');
        return $query->result();
    }

    public function getTelecallerData($id = "", $onlyActive = false){
        
        if($id !== "")
            $this->db->where("Id",$id);

        if($onlyActive)
            $this->db->where('Is_Active',1);
            
        $this->db->where('Role',5);
        $query = $this->db->get('users');
        return $query->result();
    }

    public function getReceptionistData($id = "", $onlyActive = false){
        
        if($id !== "")
            $this->db->where("Id",$id);

        if($onlyActive)
            $this->db->where('Is_Active',1);
            
        $this->db->where('Role',4);
        $query = $this->db->get('users');
        return $query->result();
    }


    public function getInternalDoctorData($id = "", $onlyActive = false){
        
        if($id !== "")
            $this->db->where("Id",$id);

        if($onlyActive)
            $this->db->where('Is_Active',1);
            
        $this->db->where('Role',2);
        $query = $this->db->get('users');
        return $query->result();
    }

    public function getExternalDoctorData($id = "", $onlyActive = false){
        
        if($id !== "")
            $this->db->where("Id",$id);

        if($onlyActive)
            $this->db->where('Is_Active',1);
            
        $this->db->where('Role',3);
        $query = $this->db->get('users');
        return $query->result();
    }

    public function getDoctorsData($branch_id = "")
    {
        if($branch_id != "" && $branch_id != null){
            $this->db->where('Branch_Id',$branch_id);
            $this->db->where('Role',2);
            $this->db->or_where('Role',3);
            $query = $this->db->get('users');
            return $query->result();
        } else {
            $this->db->where('Role',2);
            $this->db->or_where('Role',3);
            $query = $this->db->get('users');
            return $query->result();
        }
    }

    public function getRehabProfessionalsData($id = "", $onlyActive = false){
        
        if($id !== "")
            $this->db->where("Id",$id);

        if($onlyActive)
            $this->db->where('Is_Active',1);
            
        $this->db->where('Role',6);
        $query = $this->db->get('users');
        return $query->result();
    }

    public function getUserDataById($id = ""){
        
        if($id !== "")
            $this->db->where("Id",$id);

        $query = $this->db->get('users');
        return $query->result();
    }
    public function getSlotData($id = ""){
        
        if($id !== "")
            $this->db->where("User_Id",$id);

        $query = $this->db->get('slot_master');
        return $query->result();
    }

    
    public function editSlotData($arr_update = "", $id = "", $docId = ""){
        $this->db->where("Id", $id);
        $query = $this->db->update("slot_master",$arr_update);

        $afftectedRows = $this->db->affected_rows();
        if($afftectedRows === 1){
            echo "<script>window.location.replace('" . base_url . "internal-doctors/'". $docId .")</script>";
        }else{
            return false;
        }
    }

    
    public function deleteSlotData($id = "", $docId = ""){
        
        if($id !== "")
            $this->db->where("Id",$id);

        $query = $this->db->delete('slot_master');
        $afftectedRows = $this->db->affected_rows();
        if($afftectedRows === 1){
            echo "<script>window.location.replace('" . base_url . "internal-doctors/'". $docId .")</script>";
        }else{
            return false;
        }
    }

    

    
    public function editExternalDocSlotData($arr_update = "", $id = "", $docId = ""){
        $this->db->where("Id", $id);
        $query = $this->db->update("slot_master",$arr_update);

        $afftectedRows = $this->db->affected_rows();
        if($afftectedRows === 1){
            echo "<script>window.location.replace('" . base_url . "external-doctors/'". $docId .")</script>";
        }else{
            return false;
        }
    }

    
    public function deleteExternalDocSlotData($id = "", $docId = ""){
        
        if($id !== "")
            $this->db->where("Id",$id);

        $query = $this->db->delete('slot_master');
        $afftectedRows = $this->db->affected_rows();
        if($afftectedRows === 1){
            echo "<script>window.location.replace('" . base_url . "external-doctors/'". $docId .")</script>";
        }else{
            return false;
        }
    }


    public function getPatientData($id = "", $onlyActive = false){
        
        if($id !== "")
            $this->db->where("Id",$id);

        if($onlyActive)
            $this->db->where('Is_Active',1);
            
        $query = $this->db->get('patient');
        return $query->result();
    }

    public function getPatientDataByDoctor($docId = ""){
        
        $query = $this->db->query("SELECT * from patient as pt INNER JOIN appoitment as apt ON pt.Id=apt.Patient_Id WHERE apt.Doctor_Id = '".$docId."'");
        return $query->result();
    }

    public function getFormRecordsUsingPatientId($pid="", $fid="")
    {
        if($pid != "")
            $this->db->where('PatientId',$pid);
            $this->db->where('FormId',$fid);

        $query = $this->db->get('formsrecords');
    	return $query->num_rows();
    }

    public function getFormRecordsUsingId($id="", $pId="")
    {
        $this->db->where('FormId',$id);
        $this->db->where('PatientId',$pId);
        $query = $this->db->get('formsrecords');
    	return $query->result();
    }


    public function getLeaveTransCount($uid="",$status = "")
    {
        if($status != "")
            $this->db->where('Status',$status);

        if($uid != "")
            $this->db->where('User_Id',$uid);

        $query = $this->db->get('leave_trans');
    	return $query->num_rows();
    }

    public function getLeaveTransData($uid="",$status = "")
    {
        if($status != "")
            $this->db->where('Status',$status);

        if($uid != "")
            $this->db->where('User_Id',$uid);

            $this->db->order_by('Id','DESC');
        $query = $this->db->get('leave_trans');
    	return $query->result();
    }

    public function getDoctorsByBranch($branch_id){
    
        $this->db->where("Branch_Id",$branch_id);
        $this->db->where("Role",2);
        $this->db->or_where("Role",3);
        $this->db->or_where("Role",6);

            
        $query = $this->db->get('users');
        return $query->result();
    }

    

    
    public function deleteRecurringAppointmentProcedure($id = "", $aptId = ""){

        if($id !== "")
            $this->db->where("Id",$id);

        $arr_update = array("Status"=>-1);
        $query = $this->db->update("appoitment",$arr_update);
        
        $afftectedRows = $this->db->affected_rows();
        if($afftectedRows === 1){
            echo "<script>window.location.replace('" . base_url . "recurring-appointment-view/'". $aptId .")</script>";
        }else{
            return false;
        }
    }

    public function getProcedures($id = ""){
    
        if($id !== "")
            $this->db->where("Procedures_Id",$id);

        $query = $this->db->get('procedures');
        return $query->result();
    }

    public function getDoctors(){
    
        $this->db->where("Role",2);
        $this->db->or_where("Role",3);
        $this->db->or_where("Role",6);

            
        $query = $this->db->get('users');
        return $query->result();
    }

    public function getDoctorById($id){
        $this->db->where("Id",$id);
        $query = $this->db->get('users');
        return $query->result();
    }

    public function getAppoitmentById($id){
        $this->db->where("Id",$id);
        $query = $this->db->get('appoitment');
        return $query->result();
    }

    public function getPatientById($id){
        $this->db->where("Id",$id);
        $query = $this->db->get('patient');
        return $query->result();
    }

    public function getProcedureById($id){
        $this->db->where("Procedures_Id",$id);
        $query = $this->db->get('procedures');
        return $query->result();
    }

    public function getAppoitmentByRecurringAppointmentId($id){
    
        $this->db->where("Recurring_Appointment_Id",$id);
        $query = $this->db->get('appoitment');
        return $query->result();
    }

    public function getBasicAppoitmentById($id){
        $query = $this->db->query("SELECT ap.Created_on,ap.Fees_Paid_Type,ap.Fees,ap.Procedure_Id,ap.Date,ap.Note,ap.Referred_From,pt.Prefix,pt.Id as Patient_Id,ap.Status as Status,pt.Name as Patient_Name, pt.Gender as Patient_Gender, pt.Age as Patient_Age, pt.Aadhar as Patient_Aadhar, pt.Pan as Patient_Pan, u.Name as Doctor_Name, u.Id as Doctor_Id, u.Role as Doctor_Type FROM appoitment ap INNER JOIN patient pt ON ap.Patient_Id=pt.Id INNER JOIN users u ON ap.Doctor_Id=u.Id WHERE ap.Id='$id'");
        return $query->result();
    }

    public function getBasicAppoitment($branch_id){
        $query = $this->db->query("SELECT ap.Procedure_Id,ap.Date,ap.Note,ap.Referred_From,pt.Prefix,pt.Id as Patient_Id,ap.Status as Status,pt.Name as Patient_Name, pt.Gender as Patient_Gender, pt.Age as Patient_Age, pt.Aadhar as Patient_Aadhar, pt.Pan as Patient_Pan, u.Name as Doctor_Name, u.Id as Doctor_Id, u.Role as Doctor_Type FROM appoitment ap INNER JOIN patient pt ON ap.Patient_Id=pt.Id INNER JOIN users u ON ap.Doctor_Id=u.Id WHERE ap.Branch_Id='$branch_id' AND ap.Date=CURDATE() ORDER BY ap.Id DESC ");
        return $query->result();
    }

    public function getBasicAppoitmentByDoctor($branch_id,$id){
        $query = $this->db->query("SELECT ap.Referred_From,ap.Procedure_Id,pt.Prefix,ap.Id, pt.Id as Patient_Id,ap.Status as Status,pt.Name as Patient_Name, pt.Gender as Patient_Gender, pt.Age as Patient_Age, pt.Aadhar as Patient_Aadhar, pt.Pan as Patient_Pan, u.Name as Doctor_Name, u.Id as Doctor_Id, u.Role as Doctor_Type FROM appoitment ap INNER JOIN patient pt ON ap.Patient_Id=pt.Id INNER JOIN users u ON ap.Doctor_Id=u.Id WHERE ap.Branch_Id='$branch_id' AND ap.Date=CURDATE() AND ap.Doctor_Id = '$id' ORDER BY ap.Id DESC ");
        return $query->result();
    }

    public function getFullAppoitment($branch_id = ""){
        if($branch_id != "")
            $query = $this->db->query("SELECT ap.Procedure_Id,ap.Id,ap.Fees,ap.Branch_Id,ap.Date,ap.Note,ap.Referred_From,pt.Id as Patient_Id,ap.Status as Status,pt.Name as Patient_Name, pt.Gender as Patient_Gender, pt.Age as Patient_Age, pt.Aadhar as Patient_Aadhar, pt.Pan as Patient_Pan, u.Name as Doctor_Name, u.Id as Doctor_Id, u.Role as Doctor_Type FROM appoitment ap INNER JOIN patient pt ON ap.Patient_Id=pt.Id INNER JOIN users u ON ap.Doctor_Id=u.Id ORDER BY ap.Id DESC ");
        else 
            $query = $this->db->query("SELECT ap.Procedure_Id,ap.Id,ap.Fees,ap.Branch_Id,ap.Date,ap.Note,ap.Referred_From,pt.Id as Patient_Id,ap.Status as Status,pt.Name as Patient_Name, pt.Gender as Patient_Gender, pt.Age as Patient_Age, pt.Aadhar as Patient_Aadhar, pt.Pan as Patient_Pan, u.Name as Doctor_Name, u.Id as Doctor_Id, u.Role as Doctor_Type FROM appoitment ap INNER JOIN patient pt ON ap.Patient_Id=pt.Id INNER JOIN users u ON ap.Doctor_Id=u.Id ORDER BY ap.Id DESC ");
        return $query->result();
    }

    public function getFullWaitingAppoitment($branch_id = "",$filterQuery=""){
        if($branch_id == ""):
            $query = $this->db->query("SELECT ap.Procedure_Id,ap.Slot_Id,pt.Prefix,ap.Id,ap.Fees,ap.Branch_Id,ap.Date,ap.Note,ap.Referred_From,pt.Id as Patient_Id,ap.Status as Status,pt.Name as Patient_Name, pt.Gender as Patient_Gender, pt.Age as Patient_Age, pt.Aadhar as Patient_Aadhar, pt.Pan as Patient_Pan, u.Name as Doctor_Name, u.Id as Doctor_Id, u.Role as Doctor_Type FROM appoitment ap INNER JOIN patient pt ON ap.Patient_Id=pt.Id INNER JOIN users u ON ap.Doctor_Id=u.Id WHERE ap.Status = 2 ".$filterQuery." ORDER BY ap.Id DESC ");
        else :
            if($this->session->userdata('Role') == 4 || $this->session->userdata('Role') == 6):
                $query = $this->db->query("SELECT ap.Procedure_Id,ap.Slot_Id,pt.Prefix,ap.Id,ap.Fees,ap.Branch_Id,ap.Date,ap.Note,ap.Referred_From,pt.Id as Patient_Id,ap.Status as Status,pt.Name as Patient_Name, pt.Gender as Patient_Gender, pt.Age as Patient_Age, pt.Aadhar as Patient_Aadhar, pt.Pan as Patient_Pan, u.Name as Doctor_Name, u.Id as Doctor_Id, u.Role as Doctor_Type FROM appoitment ap INNER JOIN patient pt ON ap.Patient_Id=pt.Id INNER JOIN users u ON ap.Doctor_Id=u.Id WHERE ap.Status = 2 AND ap.Branch_Id = '$branch_id' ".$filterQuery." ORDER BY ap.Id DESC ");
            else:
                $doctorId = $this->session->userdata('Id');
                $query = $this->db->query("SELECT ap.Procedure_Id,ap.Slot_Id,pt.Prefix,ap.Id,ap.Fees,ap.Branch_Id,ap.Date,ap.Note,ap.Referred_From,pt.Id as Patient_Id,ap.Status as Status,pt.Name as Patient_Name, pt.Gender as Patient_Gender, pt.Age as Patient_Age, pt.Aadhar as Patient_Aadhar, pt.Pan as Patient_Pan, u.Name as Doctor_Name, u.Id as Doctor_Id, u.Role as Doctor_Type FROM appoitment ap INNER JOIN patient pt ON ap.Patient_Id=pt.Id INNER JOIN users u ON ap.Doctor_Id=u.Id WHERE ap.Status = 2 AND ap.Doctor_Id ='$doctorId' ".$filterQuery." ORDER BY ap.Id DESC ");
            endif;
        endif;
        return $query->result();
    }

    

    public function getFullAttendedAppoitment($branch_id = "",$filterQuery=""){
        if($branch_id == ""):
            $query = $this->db->query("SELECT ap.Procedure_Id,ap.Slot_Id,pt.Prefix,ap.Id,ap.Fees,ap.Branch_Id,ap.Date,ap.Note,ap.Referred_From,pt.Id as Patient_Id,ap.Status as Status,pt.Name as Patient_Name, pt.Gender as Patient_Gender, pt.Age as Patient_Age, pt.Aadhar as Patient_Aadhar, pt.Pan as Patient_Pan, u.Name as Doctor_Name, u.Id as Doctor_Id, u.Role as Doctor_Type FROM appoitment ap INNER JOIN patient pt ON ap.Patient_Id=pt.Id INNER JOIN users u ON ap.Doctor_Id=u.Id WHERE ap.Status = 1 ".$filterQuery." ORDER BY ap.Id DESC ");
        else:
            if($this->session->userdata('Role') == 4 || $this->session->userdata('Role') == 6):
                $query = $this->db->query("SELECT ap.Procedure_Id,ap.Slot_Id,pt.Prefix,ap.Id,ap.Fees,ap.Branch_Id,ap.Date,ap.Note,ap.Referred_From,pt.Id as Patient_Id,ap.Status as Status,pt.Name as Patient_Name, pt.Gender as Patient_Gender, pt.Age as Patient_Age, pt.Aadhar as Patient_Aadhar, pt.Pan as Patient_Pan, u.Name as Doctor_Name, u.Id as Doctor_Id, u.Role as Doctor_Type FROM appoitment ap INNER JOIN patient pt ON ap.Patient_Id=pt.Id INNER JOIN users u ON ap.Doctor_Id=u.Id WHERE ap.Status = 1 AND ap.Branch_Id = '$branch_id' ".$filterQuery." ORDER BY ap.Id DESC ");
            else:
                $doctorId = $this->session->userdata('Id');
                $query = $this->db->query("SELECT ap.Procedure_Id,ap.Slot_Id,pt.Prefix,ap.Id,ap.Fees,ap.Branch_Id,ap.Date,ap.Note,ap.Referred_From,pt.Id as Patient_Id,ap.Status as Status,pt.Name as Patient_Name, pt.Gender as Patient_Gender, pt.Age as Patient_Age, pt.Aadhar as Patient_Aadhar, pt.Pan as Patient_Pan, u.Name as Doctor_Name, u.Id as Doctor_Id, u.Role as Doctor_Type FROM appoitment ap INNER JOIN patient pt ON ap.Patient_Id=pt.Id INNER JOIN users u ON ap.Doctor_Id=u.Id WHERE ap.Status = 1 AND ap.Doctor_Id = $doctorId ".$filterQuery." ORDER BY ap.Id DESC ");
            endif;
        endif;
            return $query->result();
    }

    public function getFullCancelledAppoitment($branch_id = "",$filterQuery=""){
        if($branch_id == ""):
            $query = $this->db->query("SELECT ap.Procedure_Id,ap.Slot_Id,pt.Prefix,ap.Id,ap.Fees,ap.Branch_Id,ap.Date,ap.Note,ap.Remark,ap.Referred_From,pt.Id as Patient_Id,ap.Status as Status,pt.Name as Patient_Name, pt.Gender as Patient_Gender, pt.Age as Patient_Age, pt.Aadhar as Patient_Aadhar, pt.Pan as Patient_Pan, u.Name as Doctor_Name, u.Id as Doctor_Id, u.Role as Doctor_Type FROM appoitment ap INNER JOIN patient pt ON ap.Patient_Id=pt.Id INNER JOIN users u ON ap.Doctor_Id=u.Id WHERE ap.Status = 0 ".$filterQuery." ORDER BY ap.Id DESC ");
        else: 
            if($this->session->userdata('Role') == 4 || $this->session->userdata('Role') == 6):
                $query = $this->db->query("SELECT ap.Procedure_Id,ap.Slot_Id,pt.Prefix,ap.Id,ap.Fees,ap.Branch_Id,ap.Date,ap.Note,ap.Remark,ap.Referred_From,pt.Id as Patient_Id,ap.Status as Status,pt.Name as Patient_Name, pt.Gender as Patient_Gender, pt.Age as Patient_Age, pt.Aadhar as Patient_Aadhar, pt.Pan as Patient_Pan, u.Name as Doctor_Name, u.Id as Doctor_Id, u.Role as Doctor_Type FROM appoitment ap INNER JOIN patient pt ON ap.Patient_Id=pt.Id INNER JOIN users u ON ap.Doctor_Id=u.Id WHERE ap.Status = 0 AND ap.Branch_Id = '$branch_id' ".$filterQuery." ORDER BY ap.Id DESC ");
            else:
                $doctorId = $this->session->userdata('Id');
                $query = $this->db->query("SELECT ap.Procedure_Id,ap.Slot_Id,pt.Prefix,ap.Id,ap.Fees,ap.Branch_Id,ap.Date,ap.Note,ap.Remark,ap.Referred_From,pt.Id as Patient_Id,ap.Status as Status,pt.Name as Patient_Name, pt.Gender as Patient_Gender, pt.Age as Patient_Age, pt.Aadhar as Patient_Aadhar, pt.Pan as Patient_Pan, u.Name as Doctor_Name, u.Id as Doctor_Id, u.Role as Doctor_Type FROM appoitment ap INNER JOIN patient pt ON ap.Patient_Id=pt.Id INNER JOIN users u ON ap.Doctor_Id=u.Id WHERE ap.Status = 0 AND ap.Doctor_Id = '$doctorId' ".$filterQuery." ORDER BY ap.Id DESC ");
            endif;
        endif;
        return $query->result();
    }
    

    public function getCurAppoitmentCount(){
        $branch = $this->session->userdata('Branch_Id');

        if($this->session->userdata('Role') == 4 || $this->session->userdata('Role') == 6):
            $query = $this->db->query("SELECT * FROM appoitment WHERE Date = CURDATE() AND Branch_Id = '$branch' GROUP BY Patient_Id");
        else:
            $doctorId = $this->session->userdata('Id');
            $query = $this->db->query("SELECT * FROM appoitment WHERE Date = CURDATE() AND Branch_Id = '$branch' AND Doctor_Id = '$doctorId'  GROUP BY Patient_Id");
        endif;
    	return $query->num_rows();
    }

    public function getCurAppoitmentCountByStatus($status){
        $branch = $this->session->userdata('Branch_Id');
        if($this->session->userdata('Role') == 4 || $this->session->userdata('Role') == 6):
            $query = $this->db->query("SELECT * FROM appoitment WHERE Date = CURDATE() AND Status = '$status' AND Branch_Id = '$branch' GROUP BY Patient_Id");
        else:
            $doctorId = $this->session->userdata('Id');
            $query = $this->db->query("SELECT * FROM appoitment WHERE Date = CURDATE() AND Status = '$status' AND Branch_Id = '$branch' AND Doctor_Id = '$doctorId'  GROUP BY Patient_Id");
        endif;
    	return $query->num_rows();
    }

    public function getFullRecurringAppoitment($branch_id = ""){
        if($branch_id == ""):
            $query = $this->db->query("SELECT ap.Status,ap.Start_Date, ap.Days, ap.Extra_Days,pt.Prefix,ap.Id,ap.Fees,ap.Branch_Id,ap.Note,ap.Referred_From,pt.Id as Patient_Id,pt.Name as Patient_Name, pt.Gender as Patient_Gender, pt.Age as Patient_Age, pt.Aadhar as Patient_Aadhar, pt.Pan as Patient_Pan FROM recurring_appointment ap INNER JOIN patient pt ON ap.Patient_Id=pt.Id  ORDER BY ap.Id DESC ");
        else: 
            if($this->session->userdata('Role') == 4 || $this->session->userdata('Role') == 6):
                $query = $this->db->query("SELECT ap.Status,ap.Start_Date, ap.Days, ap.Extra_Days,pt.Prefix,ap.Id,ap.Fees,ap.Branch_Id,ap.Note,ap.Referred_From,pt.Id as Patient_Id,pt.Name as Patient_Name, pt.Gender as Patient_Gender, pt.Age as Patient_Age, pt.Aadhar as Patient_Aadhar, pt.Pan as Patient_Pan FROM recurring_appointment ap INNER JOIN patient pt ON ap.Patient_Id=pt.Id  WHERE ap.Branch_Id = '$branch_id' ORDER BY ap.Id DESC ");
            else:
                $doctorId = $this->session->userdata('Id');
                $query = $this->db->query("SELECT ap.Status,ap.Start_Date, ap.Days, ap.Extra_Days,pt.Prefix,ap.Id,ap.Fees,ap.Branch_Id,ap.Note,ap.Referred_From,pt.Id as Patient_Id,pt.Name as Patient_Name, pt.Gender as Patient_Gender, pt.Age as Patient_Age, pt.Aadhar as Patient_Aadhar, pt.Pan as Patient_Pan FROM recurring_appointment ap INNER JOIN patient pt ON ap.Patient_Id=pt.Id  WHERE ap.Doctor_Id = '$doctorId' ORDER BY ap.Id DESC ");
            endif;
        endif;
        return $query->result();
    }

    public function getSingleRecurringAppoitment($id = ''){
        $query = $this->db->query("SELECT ap.Start_Date, ap.Days, ap.Extra_Days,pt.Prefix,ap.Id,ap.Fees,ap.Branch_Id,ap.Note,ap.Referred_From,ap.Id,pt.Id as Patient_Id,pt.Name as Patient_Name, pt.Gender as Patient_Gender, pt.Age as Patient_Age, pt.Aadhar as Patient_Aadhar, pt.Pan as Patient_Pan FROM recurring_appointment ap INNER JOIN patient pt ON ap.Patient_Id=pt.Id  WHERE ap.Id = '$id'");
        // $query = $this->db->query("SELECT * from recurring_appointment WHERE Id = '$id'");
        return $query->result();
    }

    public function getDailyAppoitmentCount($dt){
        $branch = $this->session->userdata('Branch_Id');
        $query = $this->db->query("SELECT * FROM appoitment WHERE Date = $dt AND Branch_Id = '$branch' GROUP BY Patient_Id");
    	return $query->num_rows();
    }

    public function getOverallPatientCountByBranch($dt){
        $branch = $this->session->userdata('Branch_Id');
        $query = $this->db->query("SELECT * FROM appoitment WHERE Date = $dt AND Branch_Id = '$branch' GROUP BY Patient_Id");
    	return $query->num_rows();
    }

    public function getOverallPatientCountByGroup(){
        $branch = $this->session->userdata('Branch_Id');
        $query = $this->db->query("SELECT * FROM appoitment WHERE Branch_Id = '$branch' GROUP BY Patient_Id");
    	return $query->num_rows();
    }


    public function getDailyAppoitmentCountByRoleNoBranch($dt, $role, $branch=""){
        if($branch == "")
            $query = $this->db->query("SELECT * FROM appoitment WHERE Date = $dt AND Doctor_Type = '$role' AND Status = '1' GROUP BY Patient_Id");
        else
            $query = $this->db->query("SELECT * FROM appoitment WHERE Date = $dt AND Doctor_Type = '$role' AND Branch_Id='$branch' AND Status = '1' GROUP BY Patient_Id");
    
    	return $query->num_rows();
    }

    public function getDailyAppoitmentCountByDoctor($dt, $id, $branch=""){
        if($branch == "")
            $query = $this->db->query("SELECT * FROM appoitment WHERE Date = $dt AND Doctor_Id = '$id' AND Status = '1' GROUP BY Patient_Id");
        else
            $query = $this->db->query("SELECT * FROM appoitment WHERE Date = $dt AND Doctor_Id = '$id' AND Branch_Id='$branch' AND Status = '1' GROUP BY Patient_Id");
    
    	return $query->num_rows();
    }



    public function getMonthlyAppoitmentCount($month){
        $branch = $this->session->userdata('Branch_Id');
        $query = $this->db->query("SELECT * FROM appoitment WHERE Month(Date) = '$month' AND Branch_Id = '$branch' GROUP BY Patient_Id"); 
    	return $query->num_rows();
    }

    public function getAllLeaveForAdmin(){
        
        $query = $this->db->query("SELECT lt.Id,lt.Date,lt.Reason,lt.Status,u.Name,u.Role FROM leave_trans lt INNER JOIN users u ON lt.User_Id=u.Id ORDER BY lt.Id DESC");
    	return $query->result();
    }

    public function getPatientHistoryList($branch_id){
        $query = $this->db->query("SELECT pt.Id as Id,pt.Is_Active,pt.Name as Patient_Name, pt.Gender as Patient_Gender, pt.Profile_Image,pt.Age as Patient_Age,pt.Mobile as Patient_Mobile, pt.Aadhar as Patient_Aadhar, pt.Pan as Patient_Pan, u.Name as Doctor_Name, u.Id as Doctor_Id, u.Role as Doctor_Type FROM appoitment ap INNER JOIN patient pt ON ap.Patient_Id=pt.Id INNER JOIN users u ON ap.Doctor_Id=u.Id WHERE ap.Branch_Id='$branch_id' GROUP BY ap.Patient_Id ORDER BY ap.Id DESC");
        return $query->result();
    }

    public function getNewPatientCountByBranch($branch_id){
        $this->db->where('Branch_Id',$branch_id);
        $query = $this->db->get('patient');
        return $query->num_rows();
    }

    public function getNewPatientDataByBranch($branch_id){
        $this->db->where('Branch_Id',$branch_id);
        $this->db->where('Created_By',0);
        $query = $this->db->get('patient');
        return $query->result();
    }

    public function adminWeeklySales(){
        $this->db->select_sum('Fees');
        $this->db->where("Date > DATE_SUB(NOW(), INTERVAL 1 WEEK)");
        $query = $this->db->get("appoitment");
        return $query->result()[0]->Fees;

    }

    public function patinet_visited_history($patient_id){
        $query = $this->db->query("SELECT u.Name as Doctor_Name,ap.Follow_Date,ap.Referred_From,ap.Procedure_Id, ap.Date, ap.Remark,ap.Doctor_Type  FROM appoitment ap INNER JOIN users u ON u.Id = ap.Doctor_Id INNER JOIN branch br ON br.Id = ap.Branch_Id  WHERE ap.Patient_Id = '$patient_id' ORDER BY ap.Id DESC");
        return $query->result();
    }

    public function getGrantedLeaveCountByUser($user)
    {
        $this->db->where("YEAR(Date) = YEAR(CURDATE())");
        $this->db->where("User_Id",$user);
        $this->db->where("Status",1);
        $query = $this->db->get('leave_trans');
    	return $query->num_rows();
    }

    public function getLeadCount($uid = "")
    {
        if($uid != "")
            $this->db->where("User_Id",$uid);
        
        $query = $this->db->get('leads');
    	return $query->num_rows();
    }

    public function getLeadData($uid = "")
    {
        if($uid != "")
            $this->db->where("User_Id",$uid);


        $this->db->order_by('Id','DESC');
        $query = $this->db->get('leads');
    	return $query->result();
    }

    public function getFollowLeadData($uid = "")
    {
        if($uid != "")
            $this->db->where("User_Id",$uid);
        
        $this->db->where("Status",5);

        $this->db->order_by('Id','DESC');
        $query = $this->db->get('leads');
    	return $query->result();
    }

    public function getWonLeadData($uid = "")
    {
        if($uid != "")
            $this->db->where("User_Id",$uid);
        
        $this->db->where("Status",1);
        $this->db->or_where("Status",2);
        $this->db->or_where("Status",3);

        $this->db->order_by('Id','DESC');
        $query = $this->db->get('leads');
    	return $query->result();
    }

    public function getLostLeadData($uid = "")
    {
        if($uid != "")
            $this->db->where("User_Id",$uid);
        
        $this->db->where("Status",6);
        $this->db->or_where("Status",7);

        $this->db->order_by('Id','DESC');
        $query = $this->db->get('leads');
    	return $query->result();
    }

    public function getHoldLeadData($uid = "")
    {
        if($uid != "")
            $this->db->where("User_Id",$uid);
        
        $this->db->where("Status",4);

        $this->db->order_by('Id','DESC');
        $query = $this->db->get('leads');
    	return $query->result();
    }


    public function getTeleNewCalls($user_id){
        $this->db->where("Date = CURDATE()");
        $this->db->where("User_Id",$user_id);
        $this->db->where("Status",0);
        $query = $this->db->get("leads");
        return $query->num_rows();
    }

    public function getTeleFollowupCalls($user_id){
        $this->db->where("Date = CURDATE()");
        $this->db->where("User_Id",$user_id);
        $this->db->where("Status",5);
        $query = $this->db->get("leads");
        return $query->num_rows();
    }

    public function getTeleWonCalls($user_id){
        $this->db->where("Date = CURDATE()");
        $this->db->where("User_Id",$user_id);
        $this->db->where("Status",1);
        $this->db->or_where("Status",2);
        $this->db->or_where("Status",3);
        $query = $this->db->get("leads");
        return $query->num_rows();
    }

    public function getTeleLostCalls($user_id){
        $this->db->where("Date = CURDATE()");
        $this->db->where("User_Id",$user_id);
        $this->db->where("Status",6);
        $query = $this->db->get("leads");
        return $query->num_rows();
    }

    public function getTeleHoldCalls($user_id){
        $this->db->where("Date = CURDATE()");
        $this->db->where("User_Id",$user_id);
        $this->db->where("Status",4);
        $query = $this->db->get("leads");
        return $query->num_rows();
    }

    public function getTeleUACCalls(){
        $this->db->where("Date = CURDATE()");
        $this->db->where("Status",6);
        $query = $this->db->get("leads");
        return $query->num_rows();
    }

    public function getTeleUACCallsByUser($userid){
        $this->db->where("Date = CURDATE()");
        $this->db->where("Status",6);
        $this->db->where("User_Id",$userid);
        $query = $this->db->get("leads");
        return $query->num_rows();
    }

    public function getTelePostCalls(){
        $this->db->where("Date = CURDATE()");
        $this->db->where("Status",4);
        $query = $this->db->get("leads");
        return $query->num_rows();
    }

    public function getTelePostCallsByUser($userid){
        $this->db->where("Date = CURDATE()");
        $this->db->where("Status",4);
        $this->db->where("User_Id",$userid);
        $query = $this->db->get("leads");
        return $query->num_rows();
    }

    public function getTeleConsCalls(){
        $this->db->where("Date = CURDATE()");
        $this->db->where("Status",1);
        $query = $this->db->get("leads");
        return $query->num_rows();
    }

    public function getTeleHQCalls(){
        $this->db->where("Date = CURDATE()");
        $this->db->where("Status",2);
        $query = $this->db->get("leads");
        return $query->num_rows();
    }

    public function getTeleBranchCalls(){
        $this->db->where("Date = CURDATE()");
        $this->db->where("Status",3);
        $query = $this->db->get("leads");
        return $query->num_rows();
    }

    public function dailyCallingList($id){
        $this->db->where("User_Id",$id);
        $this->db->where("Follow_Date = CURDATE()");
        $this->db->or_where("Date = CURDATE()");
        $this->db->where("Status",0);
        $query = $this->db->get("leads");
        return $query->result();
    }

    public function dailyCallingCount($id){
        $this->db->where("User_Id",$id);
        $this->db->where("Follow_Date = CURDATE()");
        $this->db->or_where("Date = CURDATE()");
        $this->db->where("Status",0);
        $query = $this->db->get("leads");
        return $query->num_rows();
    }


    public function getRewardSettlementTrans(){
        $this->db->order_by('Id','DESC');
        $query = $this->db->get('rewards_settle');
        return $query->result();

    }

    public function getHolidayData($id = ""){
        
        if($id !== "")
            $this->db->where("Id",$id);


        $query = $this->db->get('holiday');
        return $query->result();
    }
    

    public function getDoctorBalanceReward($id)
    {
        $this->db->select("COALESCE(SUM(Points),0) as Total_Points");
        $this->db->where('User_Id',$id);
        $total_points = $this->db->get("rewards")->result()[0]->Total_Points;

        $this->db->select("COALESCE(SUM(Points),0) as Settle_Points");
        $this->db->where('User_Id',$id);
        $settle_Points = $this->db->get("rewards_settle")->result()[0]->Settle_Points;

        return $total_points-$settle_Points;
    }

    public function getDoctorReward($id)
    {
        $this->db->select("COALESCE(SUM(Points),0) as Total_Points");
        $this->db->where('User_Id',$id);
        $total_points = $this->db->get("rewards")->result()[0]->Total_Points;

        return $total_points;
    }

    public function getDoctorSettleReward($id)
    {
        $this->db->select("COALESCE(SUM(Points),0) as Settle_Points");
        $this->db->where('User_Id',$id);
        $settle_Points = $this->db->get("rewards_settle")->result()[0]->Settle_Points;
        return $settle_Points;
    }

    public function getActiveStatus($doctor_id = "")
    {
        $branch_id = $this->session->userdata('Branch_Id');
        if($doctor_id != ""){
            $queryActiveStatus = $this->db->query("SELECT * FROM active_status WHERE Doctor_Id='$doctor_id'");
            if($queryActiveStatus->num_rows() > 0){
                $query = $this->db->query("SELECT u.Name,acs.* FROM active_status acs INNER JOIN users u ON acs.Doctor_Id=u.Id WHERE acs.Doctor_Id='$doctor_id' AND u.Branch_Id='$branch_id'");
                return $query->result();
            }else{
                return false;
            }
        } else {
            $query = $this->db->query("SELECT u.Name,acs.* FROM active_status acs INNER JOIN users u ON acs.Doctor_Id=u.Id WHERE u.Branch_Id='$branch_id'");
            return $query->result();
        }
    }


    public function getRecommendedByBranch($branchid){
        $query = $this->db->query("SELECT rp.Created_On,dpt.Name as Department_Name, pt.Name as Patient_Name,u.Name as Doctor_Name FROM recommend_patient rp INNER JOIN users u ON rp.Doctor_Id=u.Id INNER JOIN department dpt ON rp.Department_Id=dpt.Id INNER JOIN patient pt ON rp.Patient_Id=pt.Id WHERE rp.Branch_Id = '$branchid'");
        return $query->result();
    }

    public function getRecommendedByDoctor($doctorid){
        $query = $this->db->query("SELECT rp.Created_On,dpt.Name as Department_Name, pt.Name as Patient_Name,u.Name as Doctor_Name FROM recommend_patient rp INNER JOIN users u ON rp.Doctor_Id=u.Id INNER JOIN department dpt ON rp.Department_Id=dpt.Id INNER JOIN patient pt ON rp.Patient_Id=pt.Id WHERE rp.Doctor_Id = '$doctorid'");
        return $query->result();
    }

    public function getSalesSum($start_date = "",$end_date=""){
        if($start_date != "" && $end_date != ""){
            $query = $this->db->query("SELECT SUM(Fees) as Fees FROM appoitment WHERE Status = '1' AND Created_on BETWEEN '$start_date' AND '$end_date'");
        } else {
            $query = $this->db->query("SELECT SUM(Fees) as Fees FROM appoitment WHERE Status = '1'");
        }
        
        return $query->result()[0];
    }

    public function getCasesCount($start_date = "",$end_date=""){
        if($start_date != "" && $end_date != ""){
            $query = $this->db->query("SELECT Count(Id) as Cases FROM appoitment WHERE Status = '1' AND Created_on BETWEEN '$start_date' AND '$end_date'");
        } else {
            $query = $this->db->query("SELECT Count(Id) as Cases FROM appoitment WHERE Status = '1'");
        }
        
        return $query->result()[0];
    }

    public function getSalesAppoiment($start_date = "",$end_date="")
    {
        if($start_date != "" && $end_date != ""){
            $query = $this->db->query("SELECT ap.Procedure_Id,pt.Prefix,ap.Id,ap.Fees,ap.Branch_Id,ap.Date,ap.Note,ap.Referred_From,pt.Id as Patient_Id,ap.Status as Status,pt.Name as Patient_Name, pt.Gender as Patient_Gender, pt.Age as Patient_Age, pt.Aadhar as Patient_Aadhar, pt.Pan as Patient_Pan, u.Name as Doctor_Name, u.Id as Doctor_Id, u.Role as Doctor_Type FROM appoitment ap INNER JOIN patient pt ON ap.Patient_Id=pt.Id INNER JOIN users u ON ap.Doctor_Id=u.Id WHERE ap.Status = 1 AND ap.Created_on BETWEEN '$start_date' AND '$end_date' ORDER BY ap.Id DESC ");
        } else {
            $query = $this->db->query("SELECT ap.Procedure_Id,pt.Prefix,ap.Id,ap.Fees,ap.Branch_Id,ap.Date,ap.Note,ap.Referred_From,pt.Id as Patient_Id,ap.Status as Status,pt.Name as Patient_Name, pt.Gender as Patient_Gender, pt.Age as Patient_Age, pt.Aadhar as Patient_Aadhar, pt.Pan as Patient_Pan, u.Name as Doctor_Name, u.Id as Doctor_Id, u.Role as Doctor_Type FROM appoitment ap INNER JOIN patient pt ON ap.Patient_Id=pt.Id INNER JOIN users u ON ap.Doctor_Id=u.Id WHERE ap.Status = 1 ORDER BY ap.Id DESC ");
        }
        return $query->result();
    }

    public function getSalesCountLastSevenDays(){
        $query = $this->db->query("SELECT SUM(Fees) AS Fees, DATE(Created_on) FROM appoitment WHERE Created_on >=  CURRENT_DATE - INTERVAL 6 DAY GROUP BY DATE(Created_on)");
        return $query->result();
    }

    public function getRecurringAppById($id){
        $query = $this->db->query("SELECT * FROM recurring_appointment WHERE Id =  '$id'");
        return $query->result();
    }

    public function getRecurringAppPaymentById($id){
        $query = $this->db->query("SELECT SUM(Fees) AS Fees FROM appoitment WHERE Recurring_Appointment_Id =  '$id'");
        return $query->result();
    }

    public function getCountAttend($id){
        $query = $this->db->query("SELECT * FROM appoitment WHERE Recurring_Appointment_Id =  '$id' AND Status = 1");
        return $query->num_rows();
    }

    public function getCountSheduleDates($id){
        $query = $this->db->query("SELECT * FROM appoitment WHERE Recurring_Appointment_Id =  '$id'");
        return $query->num_rows();
    }

    public function getSingleSlot($slotId){
        $this->db->where("Id",$slotId);
        $query = $this->db->get("slot_master");
        return $query->result()[0];
    }

    public function getAllocatedSlots($slotId,$date)
    {
        $query = $this->db->query("SELECT p.Name as Patient_Name, apt.Status as APT_Status, apt.* FROM appoitment as apt INNER JOIN patient as p ON apt.Patient_Id=p.Id WHERE apt.Slot_Id = '".$slotId."' AND apt.Date = '".$date."' AND apt.Appointment_Type = 2 GROUP BY apt.Patient_Id");
        return $query->result();
    }
}