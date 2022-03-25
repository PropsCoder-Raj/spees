<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('main_model');
        $this->load->library('session');
        $this->load->library('upload');

        if ($this->session->userdata('Username') == "" || $this->session->userdata('Username') == null)
            echo "<script>window.location.replace('" . base_url . "login')</script>";

        if ($this->session->userdata('Role') != 1)
            echo "<script>window.location.replace('" . base_url."')</script>";

    }

	public function index()
	{
		"Not a valid path";
	}

    public function deletedepartmentformstrans($id, $dept_id)
    {
        $this->db->where("Id",$id);
        $this->db->delete("departmentformstrans");
        // echo "<script>window.close();</script>";
        // echo "<script> setTimeout(() => { window.location.reload('" . base_url . "departments/'". $dept_id ."); }, 2000)</script>";
        
    }

    public function forms($id = '')
    {

        if(isset($_POST['update_form_master'])){
            $formName = $this->input->post("formName");

            $arr = array("Name" => $formName);
            $this->db->where('Id',$id);
            $this->db->update("formsmaster",$arr);
            if($this->db->affected_rows() > 0)
                $data['success_msg'] = "Branch details Updated";
                echo "<script>window.location.replace('" . base_url . "/forms-master')</script>";
        }

        if($id != ""):
            $data['edit'] = true;
            $data['formsdata'] = $this->main_model->getSingleFormsmaster($id);
        else:
            $data['edit'] = false;
        endif;

        $data['page_title'] = "Forms";
        $data['content'] = "forms";
        $data['formsData'] = $this->main_model->getformsmaster();
        $this->load->view('template', $data);
    }

    public function supplier($id = '')
    {

        $data['supplier'] = (object) array('Supplier_Id'=> '','Name'=> '','Billing_Address'=> '','City'=> '','State'=> '','Pin'=> '','Contact_Name'=> '','Designation'=> '','Mobile'=> '','Email'=> '');
        $data['success_msg'] = "";
        $data['error_msg'] = "";

        if(isset($_POST['add_supplier'])){
            $name = $this->input->post('name');
            $billingAddress = $this->input->post('billingAddress');
            $city = $this->input->post('city');
            $state = $this->input->post('state');
            $pin = $this->input->post('pin');
            $contactName = $this->input->post('contactName');
            $designation = $this->input->post('designation');
            $mobile = $this->input->post('mobile');
            $email = $this->input->post('email');

            $ar = array('Name'=> $name,'Billing_Address'=> $billingAddress,'City'=> $city,'State'=> $state,'Pin'=> $pin,'Contact_Name'=> $contactName,'Designation'=> $designation,'Mobile'=> $mobile,'Email'=> $email);
            $this->db->insert("supplier",$ar);
            if($this->db->affected_rows() > 0)
                $data['success_msg'] = "Supplier added";
            else
                $data['error_msg'] = "Something went wrong";
        }

        if(isset($_POST['edit_supplier'])){
            $name = $this->input->post('name');
            $billingAddress = $this->input->post('billingAddress');
            $city = $this->input->post('city');
            $state = $this->input->post('state');
            $pin = $this->input->post('pin');
            $contactName = $this->input->post('contactName');
            $designation = $this->input->post('designation');
            $mobile = $this->input->post('mobile');
            $email = $this->input->post('email');

            $ar = array('Name'=> $name,'Billing_Address'=> $billingAddress,'City'=> $city,'State'=> $state,'Pin'=> $pin,'Contact_Name'=> $contactName,'Designation'=> $designation,'Mobile'=> $mobile,'Email'=> $email);
            $this->db->where('Supplier_Id',$id);
            $this->db->update("supplier",$ar);
            if($this->db->affected_rows() > 0)
                $data['success_msg'] = "Supplier details Updated";
            else
                $data['error_msg'] = "Something went wrong";
        }

        if($id != ""):
            $data['edit'] = true;
            $data['supplier'] = $this->main_model->getSupplierData($id)[0];
        else:
            $data['edit'] = false;
        endif;

        $data['page_title'] = "Supplier Master";
        $data['content'] = "supplier";
        $this->load->view('template', $data);
    }

    public function item($id = '')
    {

        $data['item'] = (object) array("Item_Id"=>"","Item_Code"=>"","Item_Name"=>"","Description"=>"","Item_Company"=>"","Item_Model"=>"","Sale_Rate"=>"","MRP"=>"","Min_Stock"=>"","Max_Stock"=>"","GST_Applicable"=>"","GST"=>"","Category"=>"","Platform"=>"","Serial_Number"=>"","Supplier_Selection"=>"","Created_On"=>"");
        $data['success_msg'] = "";
        $data['error_msg'] = "";

        if(isset($_POST['add_item'])){

            $Item_Code = $this->input->post('Item_Code');
            $Item_Name = $this->input->post('Item_Name');
            $Description = $this->input->post('Description');
            $Item_Company = $this->input->post('Item_Company');
            $Item_Model = $this->input->post('Item_Model');
            $Sale_Rate = $this->input->post('Sale_Rate');
            $MRP = $this->input->post('MRP');
            $Available_Stock = $this->input->post('Available_Stock');
            $Min_Stock = $this->input->post('Min_Stock');
            $Max_Stock = $this->input->post('Max_Stock');
            $GST_Applicable = $this->input->post('GST_Applicable');
            $GST = $this->input->post('GST');
            $Category = $this->input->post('Category');
            $Platform = $this->input->post('Platform');
            $Serial_Number = $this->input->post('Serial_Number');
            $Supplier_Selection = $this->input->post('Supplier_Selection');


            $ar = array("Item_Code"=>$Item_Code,"Item_Name"=>$Item_Name,"Description"=>$Description,"Item_Company"=>$Item_Company,"Item_Model"=>$Item_Model,"Sale_Rate"=>$Sale_Rate,"MRP"=>$MRP, "Available_Stock" =>$Available_Stock, "Min_Stock"=>$Min_Stock,"Max_Stock"=>$Max_Stock,"GST_Applicable"=>$GST_Applicable,"GST"=>$GST,"Category"=>$Category,"Platform"=>$Platform,"Serial_Number"=>$Serial_Number,"Supplier_Selection"=>$Supplier_Selection);
            $this->db->insert("items",$ar);
            if($this->db->affected_rows() > 0)
                $data['success_msg'] = "Item added";
            else
                $data['error_msg'] = "Something went wrong";
        }

        if(isset($_POST['edit_item'])){
            $Item_Code = $this->input->post('Item_Code');
            $Item_Name = $this->input->post('Item_Name');
            $Description = $this->input->post('Description');
            $Item_Company = $this->input->post('Item_Company');
            $Item_Model = $this->input->post('Item_Model');
            $Sale_Rate = $this->input->post('Sale_Rate');
            $MRP = $this->input->post('MRP');
            $Available_Stock = $this->input->post('Available_Stock');
            $Min_Stock = $this->input->post('Min_Stock');
            $Max_Stock = $this->input->post('Max_Stock');
            $GST_Applicable = $this->input->post('GST_Applicable');
            $GST = $this->input->post('GST');
            $Category = $this->input->post('Category');
            $Platform = $this->input->post('Platform');
            $Serial_Number = $this->input->post('Serial_Number');
            $Supplier_Selection = $this->input->post('Supplier_Selection');

            $ar = array("Item_Code"=>$Item_Code,"Item_Name"=>$Item_Name,"Description"=>$Description,"Item_Company"=>$Item_Company,"Item_Model"=>$Item_Model,"Sale_Rate"=>$Sale_Rate,"MRP"=>$MRP,"Available_Stock" =>$Available_Stock,"Min_Stock"=>$Min_Stock,"Max_Stock"=>$Max_Stock,"GST_Applicable"=>$GST_Applicable,"GST"=>$GST,"Category"=>$Category,"Platform"=>$Platform,"Serial_Number"=>$Serial_Number,"Supplier_Selection"=>$Supplier_Selection);
            $this->db->where('Item_Id',$id);
            $this->db->update("items",$ar);
            if($this->db->affected_rows() > 0)
                $data['success_msg'] = "Item details Updated";
            else
                $data['error_msg'] = "Something went wrong";
        }

        if($id != ""):
            $data['edit'] = true;
            $data['item'] = $this->main_model->getItemData($id)[0];
        else:
            $data['edit'] = false;
        endif;

        $data['page_title'] = "Item Master";
        $data['content'] = "item";
        $this->load->view('template', $data);
    }

    public function web_contacts()
    {
        $data['page_title'] = "Web Contacts";
        $data['content'] = "web_contacts";
        $data['webContactsData'] = $this->main_model->getwebsitecontacts();
        $this->load->view('template', $data);
    }

    public function update_web_contacts($id='')
    {
        $query = $this->db->get("websitecontacts");
        $ar = array('Status' => 1);
        $this->db->where('Id',$id);
        $this->db->update("websitecontacts",$ar);
        if($this->db->affected_rows() > 0){
            echo "<script>window.location.replace('" . base_url . "/web-contacts')</script>";
        }
    }

    public function branch($id = "")
	{
        $data['branch'] = (object) array('Id'=> '','Name'=> '','Address'=> '','City'=> '','Pin'=> '','Is_Active'=> '',"Contact_Name"=>'',"Contact_Mobile"=>'',"Contact_Email"=>'',"Contact_Designation"=>'');
        $data['success_msg'] = "";
        $data['error_msg'] = "";

        if(isset($_POST['add_branch'])){
            $name = $this->input->post('name');
            $address = $this->input->post('address');
            $city = $this->input->post('city');
            $pin = $this->input->post('pin');
            $status = $this->input->post('status');
            $contact_name = $this->input->post('contact_name');
            $contact_email = $this->input->post('contact_email');
            $contact_mobile = $this->input->post('contact_mobile');
            $contact_designation = $this->input->post('contact_designation');

            $ar = array("Name"=>$name,"Address"=>$address,"City"=>$city,"Pin"=>$pin,"Is_Active"=>$status,"Contact_Name"=>$contact_name,"Contact_Mobile"=>$contact_mobile,"Contact_Email"=>$contact_email,"Contact_Designation"=>$contact_designation);
            $this->db->insert("branch",$ar);
            if($this->db->affected_rows() > 0)
                $data['success_msg'] = "New Branch added";
            else
                $data['error_msg'] = "Something went wrong";
        }

        if(isset($_POST['edit_branch'])){
            $name = $this->input->post('name');
            $address = $this->input->post('address');
            $city = $this->input->post('city');
            $pin = $this->input->post('pin');
            $status = $this->input->post('status');
            $contact_name = $this->input->post('contact_name');
            $contact_email = $this->input->post('contact_email');
            $contact_mobile = $this->input->post('contact_mobile');
            $contact_designation = $this->input->post('contact_designation');

            $ar = array("Name"=>$name,"Address"=>$address,"City"=>$city,"Pin"=>$pin,"Is_Active"=>$status,"Contact_Name"=>$contact_name,"Contact_Mobile"=>$contact_email,"Contact_Email"=>$contact_mobile,"Contact_Designation"=>$contact_designation);
            $this->db->where('Id',$id);
            $this->db->update("branch",$ar);
            if($this->db->affected_rows() > 0)
                $data['success_msg'] = "Branch details Updated";
            else
                $data['error_msg'] = "Something went wrong";
        }

        if($id != ""):
            $data['edit'] = true;
            $data['branch'] = $this->main_model->getBranchData($id)[0];
        else:
            $data['edit'] = false;
        endif;
        

		$data['page_title'] = "Branch";
        $data['content'] = "branch";
        $this->load->view('template', $data);
	}

    public function departments($id = "")
	{
        $data['department'] = (object) array('Id'=> '','Name'=> '','Branch_Id'=> '');
        $data['success_msg'] = "";
        $data['error_msg'] = "";

        if(isset($_POST['add_department'])){
            $name = $this->input->post('name');
            $branchId = $this->input->post('branch');

            $ar = array("Name"=>$name,"Branch_Id"=>$branchId);
            $this->db->insert("department",$ar);
            if($this->db->affected_rows() > 0)
                $data['success_msg'] = "New Department added";
            else
                $data['error_msg'] = "Something went wrong";
        }

        if(isset($_POST['edit_department'])){
            $name = $this->input->post('name');
            $branchId = $this->input->post('branch');

            $ar = array("Name"=>$name,"Branch_Id"=>$branchId);
            $this->db->where("Id",$id);
            $this->db->update("department",$ar);
            if(isset($_POST["FormNames"])){
                    for ($a = 0; $a < count($_POST["FormNames"]); $a++)
                    {
                        $fid = $_POST["FormNames"][$a];
                            $FormsId = $this->main_model->getSingleFormsmasterUsingFormName($fid)->Id;
                            $arr = array("FormsId"=>$FormsId,"DepertmentId"=>$id);
                            $this->db->insert("departmentformstrans",$arr);
                    }
            }
            if($this->db->affected_rows() > 0){    
                $data['success_msg'] = "Department detaild updated";
            }
            else
                $data['error_msg'] = "Something went wrong";
        }


        if($id != ""):
            $data['edit'] = true;
            $data['department'] = $this->main_model->getDepartmentData($id)[0];
            $data['departmentId'] = $id;
        else:
            $data['edit'] = false;
        endif;

		$data['page_title'] = "Department";
        $data['content'] = "department";
        $this->load->view('template', $data);
	}

    public function receptionist($id = "")
	{
        $data['receptionist'] = (object) array('Aadhar'=>'','Pan'=>'','Branch_Id'=>'','Name' => '','Username' => '','Password' => '','Email' => '','Profile_Image' => '','Address' => '','State' => '','City' => '','Gender' => '','DOB' => '','DOJ' => '','DOA' => '','Mobile' => '','Is_Active' => '','Leave'=>'','Morning_Open_Time'=>'','Morning_Close_Time'=>'','Noon_Open_Time'=>'','Noon_Close_Time'=>'','Evening_Open_Time'=>'','Evening_Close_Time'=>'','Weekly_Off'=>'');
        $data['success_msg'] = "";
        $data['error_msg'] = "";

        if(isset($_POST['add_receptionist'])){
            $name = $this->input->post('name');
            $branch = $this->input->post('branch');
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $mobile = $this->input->post('mobile');
            $gender = $this->input->post('gender');
            $address = $this->input->post('address');
            $state = $this->input->post('state');
            $city = $this->input->post('city');
            $dob = $this->input->post('dob');
            $doj = $this->input->post('doj');
            $doa = $this->input->post('doa');
            $status = $this->input->post('status');
            $leave = $this->input->post('leave');
            $openTime = $this->input->post('openTime');
            $closeTime = $this->input->post('closeTime');
            $aadhar = $this->input->post('aadhar');
            $pan = $this->input->post('pan');
            $weekly_off = $this->input->post('weekly_off');

            $morningOpenTime = $this->input->post('morningOpenTime');
            $morningCloseTime = $this->input->post('morningCloseTime');
            $noonOpenTime = $this->input->post('noonOpenTime');
            $noonCloseTime = $this->input->post('noonCloseTime');
            $eveningOpenTime = $this->input->post('eveningOpenTime');
            $eveningCloseTime = $this->input->post('eveningCloseTime');

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

            $ar = array('Aadhar'=>$aadhar,'Pan'=>$pan,"Profile_Image"=>$profilePhoto,"Branch_Id"=>$branch,"Name"=>$name,"Email"=>$email,'Username'=>$username,'Password'=>$password,'Mobile'=>$mobile,'Gender'=>$gender,'Address'=>$address,'State'=>$state,'City'=>$city,'DOB'=>$dob,'DOJ'=>$doj,'DOA'=>$doa,'Is_Active'=>$status, 'Role'=>4,'Leave'=>$leave,'Morning_Open_Time'=>$morningOpenTime,'Morning_Close_Time'=>$morningCloseTime,'Noon_Open_Time'=>$noonOpenTime,'Noon_Close_Time'=>$noonCloseTime,'Evening_Open_Time'=>$eveningOpenTime,'Evening_Close_Time'=>$eveningCloseTime,'Weekly_Off'=>$weekly_off);
            $this->db->insert("users",$ar);
            if($this->db->affected_rows() > 0)
                $data['success_msg'] = "New Receptionist added";
            else
                $data['error_msg'] = "Something went wrong";
        }


        if(isset($_POST['edit_receptionist'])){
            $name = $this->input->post('name');
            $branch = $this->input->post('branch');
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $mobile = $this->input->post('mobile');
            $gender = $this->input->post('gender');
            $address = $this->input->post('address');
            $state = $this->input->post('state');
            $city = $this->input->post('city');
            $dob = $this->input->post('dob');
            $doj = $this->input->post('doj');
            $doa = $this->input->post('doa');
            $status = $this->input->post('status');
            $leave = $this->input->post('leave');
            $openTime = $this->input->post('openTime');
            $closeTime = $this->input->post('closeTime');
            $aadhar = $this->input->post('aadhar');
            $pan = $this->input->post('pan');
            $weekly_off = $this->input->post('weekly_off');

            $morningOpenTime = $this->input->post('morningOpenTime');
            $morningCloseTime = $this->input->post('morningCloseTime');
            $noonOpenTime = $this->input->post('noonOpenTime');
            $noonCloseTime = $this->input->post('noonCloseTime');
            $eveningOpenTime = $this->input->post('eveningOpenTime');
            $eveningCloseTime = $this->input->post('eveningCloseTime');


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
                    $this->db->update("users");
                } 
            }
    


            $ar = array('Aadhar'=>$aadhar,'Pan'=>$pan,"Branch_Id"=>$branch,"Name"=>$name,"Email"=>$email,'Username'=>$username,'Password'=>$password,'Mobile'=>$mobile,'Gender'=>$gender,'Address'=>$address,'State'=>$state,'City'=>$city,'DOB'=>$dob,'DOJ'=>$doj,'DOA'=>$doa,'Is_Active'=>$status,'Leave'=>$leave,'Morning_Open_Time'=>$morningOpenTime,'Morning_Close_Time'=>$morningCloseTime,'Noon_Open_Time'=>$noonOpenTime,'Noon_Close_Time'=>$noonCloseTime,'Evening_Open_Time'=>$eveningOpenTime,'Evening_Close_Time'=>$eveningCloseTime,'Weekly_Off'=>$weekly_off);
            $this->db->where('Id',$id);
            $query = $this->db->update("users",$ar);
            
            if($query)
                $data['success_msg'] = "Receptionist Updated";
            else
                $data['error_msg'] = "Something went wrong";
        }


        if($id != ""):
            $data['edit'] = true;
            $data['receptionist'] = $this->main_model->getReceptionistData($id)[0];
        else:
            $data['edit'] = false;
        endif;

		$data['page_title'] = "Receptionist";
        $data['content'] = "receptionist";
        $this->load->view('template', $data);
	}

    public function telecaller($id = "")
	{
        $data['telecaller'] = (object) array('Aadhar'=>'','Pan'=>'','Name' => '','Username' => '','Password' => '','Email' => '','Profile_Image' => '','Address' => '','State' => '','City' => '','Gender' => '','DOB' => '','DOJ' => '','DOA' => '','Mobile' => '','Is_Active' => '','Leave'=>'','Morning_Open_Time'=>'','Morning_Close_Time'=>'','Noon_Open_Time'=>'','Noon_Close_Time'=>'','Evening_Open_Time'=>'','Evening_Close_Time'=>'','Weekly_Off'=>'');
        $data['success_msg'] = "";
        $data['error_msg'] = "";

        if(isset($_POST['add_telecaller'])){
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $mobile = $this->input->post('mobile');
            $gender = $this->input->post('gender');
            $address = $this->input->post('address');
            $state = $this->input->post('state');
            $city = $this->input->post('city');
            $dob = $this->input->post('dob');
            $doj = $this->input->post('doj');
            $doa = $this->input->post('doa');
            $status = $this->input->post('status');
            $leave = $this->input->post('leave');
            $openTime = $this->input->post('openTime');
            $closeTime = $this->input->post('closeTime');
            $aadhar = $this->input->post('aadhar');
            $pan = $this->input->post('pan');
            $weekly_off = $this->input->post('weekly_off');

            $morningOpenTime = $this->input->post('morningOpenTime');
            $morningCloseTime = $this->input->post('morningCloseTime');
            $noonOpenTime = $this->input->post('noonOpenTime');
            $noonCloseTime = $this->input->post('noonCloseTime');
            $eveningOpenTime = $this->input->post('eveningOpenTime');
            $eveningCloseTime = $this->input->post('eveningCloseTime');

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

            $ar = array('Aadhar'=>$aadhar,'Pan'=>$pan,"Profile_Image"=>$profilePhoto,"Name"=>$name,"Email"=>$email,'Username'=>$username,'Password'=>$password,'Mobile'=>$mobile,'Gender'=>$gender,'Address'=>$address,'State'=>$state,'City'=>$city,'DOB'=>$dob,'DOJ'=>$doj,'DOA'=>$doa,'Is_Active'=>$status, 'Role'=>5,'Leave'=>$leave,'Morning_Open_Time'=>$morningOpenTime,'Morning_Close_Time'=>$morningCloseTime,'Noon_Open_Time'=>$noonOpenTime,'Noon_Close_Time'=>$noonCloseTime,'Evening_Open_Time'=>$eveningOpenTime,'Evening_Close_Time'=>$eveningCloseTime,'Weekly_Off'=>$weekly_off);
            $this->db->insert("users",$ar);
            if($this->db->affected_rows() > 0)
                $data['success_msg'] = "New Telecaller added";
            else
                $data['error_msg'] = "Something went wrong";
        }

        if(isset($_POST['edit_telecaller'])){
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $mobile = $this->input->post('mobile');
            $gender = $this->input->post('gender');
            $address = $this->input->post('address');
            $state = $this->input->post('state');
            $city = $this->input->post('city');
            $dob = $this->input->post('dob');
            $doj = $this->input->post('doj');
            $doa = $this->input->post('doa');
            $status = $this->input->post('status');
            $leave = $this->input->post('leave');
            $openTime = $this->input->post('openTime');
            $closeTime = $this->input->post('closeTime');
            $aadhar = $this->input->post('aadhar');
            $pan = $this->input->post('pan');
            $weekly_off = $this->input->post('weekly_off');

            $morningOpenTime = $this->input->post('morningOpenTime');
            $morningCloseTime = $this->input->post('morningCloseTime');
            $noonOpenTime = $this->input->post('noonOpenTime');
            $noonCloseTime = $this->input->post('noonCloseTime');
            $eveningOpenTime = $this->input->post('eveningOpenTime');
            $eveningCloseTime = $this->input->post('eveningCloseTime');


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
                    $this->db->update("users");
                } 
            }
    


            $ar = array('Aadhar'=>$aadhar,'Pan'=>$pan,"Name"=>$name,"Email"=>$email,'Username'=>$username,'Password'=>$password,'Mobile'=>$mobile,'Gender'=>$gender,'Address'=>$address,'State'=>$state,'City'=>$city,'DOB'=>$dob,'DOJ'=>$doj,'DOA'=>$doa,'Is_Active'=>$status,'Leave'=>$leave,'Morning_Open_Time'=>$morningOpenTime,'Morning_Close_Time'=>$morningCloseTime,'Noon_Open_Time'=>$noonOpenTime,'Noon_Close_Time'=>$noonCloseTime,'Evening_Open_Time'=>$eveningOpenTime,'Evening_Close_Time'=>$eveningCloseTime,'Weekly_Off'=>$weekly_off);
            $this->db->where('Id',$id);
            $query = $this->db->update("users",$ar);
            
            if($query)
                $data['success_msg'] = "Telecaller Updated";
            else
                $data['error_msg'] = "Something went wrong";
        }

        if($id != ""):
            $data['edit'] = true;
            $data['telecaller'] = $this->main_model->getTelecallerData($id)[0];
        else:
            $data['edit'] = false;
        endif;


		$data['page_title'] = "Telecaller";
        $data['content'] = "telecaller";
        $this->load->view('template', $data);
	}

    public function internal_doctors()
	{

		$data['page_title'] = "Internal Doctors";
        $data['content'] = "internal_doctors";
        $this->load->view('template', $data);
	}

    public function edit_external_doctors_slot($openTime, $closeTime, $id, $docId)
    {
        $ar = array('Open_Time'=>$openTime,'Close_Time'=>$closeTime);
        $this->main_model->editExternalDocSlotData($ar, $id, $docId);
    }

    public function delete_external_doctors_slot($id, $docId)
	{
        $this->main_model->deleteExternalDocSlotData($id, $docId);
	}

    public function edit_internal_doctors_slot($openTime, $closeTime, $id, $docId)
    {
        $ar = array('Open_Time'=>$openTime,'Close_Time'=>$closeTime);
        $this->main_model->editSlotData($ar, $id, $docId);
    }

    public function delete_internal_doctors_slot($id, $docId)
	{
        $this->main_model->deleteSlotData($id, $docId);
	}

    public function edit_internal_doctors($id = ""){
        $data['internal_doctors'] = (object) array('Aadhar'=>'','Pan'=>'','RCI'=>'','Branch_Id'=>'','Department_Id'=>'','Name' => '','Username' => '','Password' => '','Email' => '','Profile_Image' => '','Address' => '','State' => '','City' => '','Gender' => '','DOB' => '','DOJ' => '','DOA' => '','Mobile' => '','Is_Active' => '','Leave'=>'','Designation'=>'','Target'=>'','Morning_Open_Time'=>'','Morning_Close_Time'=>'','Noon_Open_Time'=>'','Noon_Close_Time'=>'','Evening_Open_Time'=>'','Evening_Close_Time'=>'','Weekly_Off'=>'');
        $data['success_msg'] = "";
        $data['error_msg'] = "";

        if(isset($_POST['add_internal_doctors'])){
            $name = $this->input->post('name');
            $branch = $this->input->post('branch');
            $department = $this->input->post('department');
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $mobile = $this->input->post('mobile');
            $gender = $this->input->post('gender');
            $address = $this->input->post('address');
            $state = $this->input->post('state');
            $city = $this->input->post('city');
            $dob = $this->input->post('dob');
            $doj = $this->input->post('doj');
            $doa = $this->input->post('doa');
            $status = $this->input->post('status');
            $leave = $this->input->post('leave');
            $target = $this->input->post('target');
            $designation = $this->input->post('designation');
            $aadhar = $this->input->post('aadhar');
            $pan = $this->input->post('pan');
            $weekly_off = $this->input->post('weekly_off');

            $morningOpenTime = $this->input->post('morningOpenTime');
            $morningCloseTime = $this->input->post('morningCloseTime');
            $noonOpenTime = $this->input->post('noonOpenTime');
            $noonCloseTime = $this->input->post('noonCloseTime');
            $eveningOpenTime = $this->input->post('eveningOpenTime');
            $eveningCloseTime = $this->input->post('eveningCloseTime');

            $profilePhoto = "user.png";
            $rci = "document.png";

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

            if(isset($_FILES["rci"])) {
                if($this->upload->do_upload('rci'))
                {
                    $profilePhoto = $this->upload->data()['file_name'];
                } else {
                    $error = $this->upload->display_errors();
                    // echo "<script>alert('Error with Policy Document". $this->upload->display_errors()."');</script>";
                }
            }

            $ar = array('Aadhar'=>$aadhar,'Pan'=>$pan,"RCI"=>$rci,"Profile_Image"=>$profilePhoto,"Branch_Id"=>$branch,"Name"=>$name,"Email"=>$email,'Username'=>$username,'Password'=>$password,'Mobile'=>$mobile,'Gender'=>$gender,'Address'=>$address,'State'=>$state,'City'=>$city,'DOB'=>$dob,'DOJ'=>$doj,'DOA'=>$doa,'Is_Active'=>$status, 'Role'=>2,'Leave'=>$leave,'Designation'=>$designation,'Target'=>$target,'Department_Id'=>$department,'Morning_Open_Time'=>$morningOpenTime,'Morning_Close_Time'=>$morningCloseTime,'Noon_Open_Time'=>$noonOpenTime,'Noon_Close_Time'=>$noonCloseTime,'Evening_Open_Time'=>$eveningOpenTime,'Evening_Close_Time'=>$eveningCloseTime,'Weekly_Off'=>$weekly_off);
            $this->db->insert("users",$ar);
            if($this->db->affected_rows() > 0)
                $data['success_msg'] = "New Internal Doctor added";
            else
                $data['error_msg'] = "Something went wrong";
        }
        if(isset($_POST['add_slot_master'])){
            $open = $this->input->post('openTime');
            $close = $this->input->post('closeTime');
            $ar = array('Open_Time'=>$open,'Close_Time'=>$close,'User_Id'=>$id);
            $this->db->insert("slot_master",$ar);
            if($this->db->affected_rows() > 0)
                $data['success_msg'] = "New Slot Added";
            else
                $data['error_msg'] = "Something went wrong";
        }

        if(isset($_POST['edit_internal_doctors'])){
            $name = $this->input->post('name');
            $branch = $this->input->post('branch');
            $department = $this->input->post('department');
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $mobile = $this->input->post('mobile');
            $gender = $this->input->post('gender');
            $address = $this->input->post('address');
            $state = $this->input->post('state');
            $city = $this->input->post('city');
            $dob = $this->input->post('dob');
            $doj = $this->input->post('doj');
            $doa = $this->input->post('doa');
            $status = $this->input->post('status');
            $leave = $this->input->post('leave');
            $target = $this->input->post('target');
            $designation = $this->input->post('designation');
            $aadhar = $this->input->post('aadhar');
            $pan = $this->input->post('pan');
            $weekly_off = $this->input->post('weekly_off');

            $morningOpenTime = $this->input->post('morningOpenTime');
            $morningCloseTime = $this->input->post('morningCloseTime');
            $noonOpenTime = $this->input->post('noonOpenTime');
            $noonCloseTime = $this->input->post('noonCloseTime');
            $eveningOpenTime = $this->input->post('eveningOpenTime');
            $eveningCloseTime = $this->input->post('eveningCloseTime');


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
                    $this->db->update("users");
                } 
            }

            if(isset($_FILES["rci"])) {
                if($this->upload->do_upload('rci'))
                {
                    $rci = $this->upload->data()['file_name'];
                    
                    $this->db->set('RCI',$rci);
                    $this->db->where('Id',$id);
                    $this->db->update("users");
                } 
            }
    


            $ar = array('Aadhar'=>$aadhar,'Pan'=>$pan,"Branch_Id"=>$branch,"Name"=>$name,"Email"=>$email,'Username'=>$username,'Password'=>$password,'Mobile'=>$mobile,'Gender'=>$gender,'Address'=>$address,'State'=>$state,'City'=>$city,'DOB'=>$dob,'DOJ'=>$doj,'DOA'=>$doa,'Is_Active'=>$status,'Leave'=>$leave,'Designation'=>$designation,'Target'=>$target,'Department_Id'=>$department,'Morning_Open_Time'=>$morningOpenTime,'Morning_Close_Time'=>$morningCloseTime,'Noon_Open_Time'=>$noonOpenTime,'Noon_Close_Time'=>$noonCloseTime,'Evening_Open_Time'=>$eveningOpenTime,'Evening_Close_Time'=>$eveningCloseTime,'Weekly_Off'=>$weekly_off);
            $this->db->where('Id',$id);
            $query = $this->db->update("users",$ar);
            
            if($query)
                $data['success_msg'] = "Internal Doctor Updated";
            else
                $data['error_msg'] = "Something went wrong";
        }


        if($id != ""):
            $data['edit'] = true;
            $data['edit_id'] = $id;
            $data['internal_doctors'] = $this->main_model->getInternalDoctorData($id)[0];
        else:
            $data['edit'] = false;
        endif;

        $data['page_title'] = "Add/Edit Internal Doctors";
        $data['content'] = "internal_doctors_edit";
        $this->load->view('template', $data);


    }

    public function external_doctors()
	{

		$data['page_title'] = "External Doctors";
        $data['content'] = "external_doctors";
        $this->load->view('template', $data);
	}

    public function edit_external_doctors($id = "")
	{
        $data['external_doctors'] = (object) array('Aadhar'=>'','Pan'=>'','RCI'=>'','Branch_Id'=>'','Department_Id'=>'','Name' => '','Username' => '','Password' => '','Email' => '','Profile_Image' => '','Address' => '','State' => '','City' => '','Gender' => '','DOB' => '','DOJ' => '','DOA' => '','Mobile' => '','Is_Active' => '','Leave'=>'','Designation'=>'','Target'=>'','Hospital_Name'=>'','Hospital_Address'=>'','Morning_Open_Time'=>'','Morning_Close_Time'=>'','Noon_Open_Time'=>'','Noon_Close_Time'=>'','Evening_Open_Time'=>'','Evening_Close_Time'=>'','Weekly_Off'=>'');
        $data['success_msg'] = "";
        $data['error_msg'] = "";

        if(isset($_POST['add_external_doctors'])){
            $name = $this->input->post('name');
            $hospital_name = $this->input->post('hospital_name');
            $hospital_address = $this->input->post('hospital_address');
            $branch = $this->input->post('branch');
            $department = $this->input->post('department');
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $mobile = $this->input->post('mobile');
            $gender = $this->input->post('gender');
            $address = $this->input->post('address');
            $state = $this->input->post('state');
            $city = $this->input->post('city');
            $dob = $this->input->post('dob');
            $doj = $this->input->post('doj');
            $doa = $this->input->post('doa');
            $status = $this->input->post('status');
            $leave = $this->input->post('leave');
            $target = $this->input->post('target');
            $designation = $this->input->post('designation');
            $aadhar = $this->input->post('aadhar');
            $pan = $this->input->post('pan');
            $weekly_off = $this->input->post('weekly_off');

            $morningOpenTime = $this->input->post('morningOpenTime');
            $morningCloseTime = $this->input->post('morningCloseTime');
            $noonOpenTime = $this->input->post('noonOpenTime');
            $noonCloseTime = $this->input->post('noonCloseTime');
            $eveningOpenTime = $this->input->post('eveningOpenTime');
            $eveningCloseTime = $this->input->post('eveningCloseTime');

            $profilePhoto = "user.png";
            $rci = "document.png";

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

            if(isset($_FILES["rci"])) {
                if($this->upload->do_upload('rci'))
                {
                    $profilePhoto = $this->upload->data()['file_name'];
                } else {
                    $error = $this->upload->display_errors();
                    // echo "<script>alert('Error with Policy Document". $this->upload->display_errors()."');</script>";
                }
            }

            $ar = array('Aadhar'=>$aadhar,'Pan'=>$pan,'RCI'=>$rci,"Profile_Image"=>$profilePhoto,"Branch_Id"=>$branch,"Name"=>$name,"Email"=>$email,'Username'=>$username,'Password'=>$password,'Mobile'=>$mobile,'Gender'=>$gender,'Address'=>$address,'State'=>$state,'City'=>$city,'DOB'=>$dob,'DOJ'=>$doj,'DOA'=>$doa,'Is_Active'=>$status, 'Role'=>3,'Leave'=>$leave,'Designation'=>$designation,'Target'=>$target,'Department_Id'=>$department,'Hospital_Name'=>$hospital_name,'Hospital_Address'=>$hospital_address,'Morning_Open_Time'=>$morningOpenTime,'Morning_Close_Time'=>$morningCloseTime,'Noon_Open_Time'=>$noonOpenTime,'Noon_Close_Time'=>$noonCloseTime,'Evening_Open_Time'=>$eveningOpenTime,'Evening_Close_Time'=>$eveningCloseTime,'Weekly_Off'=>$weekly_off);
            $this->db->insert("users",$ar);
            if($this->db->affected_rows() > 0)
                $data['success_msg'] = "New External Doctor added";
            else
                $data['error_msg'] = "Something went wrong";
        }

        if(isset($_POST['add_slot_master'])){
            $open = $this->input->post('openTime');
            $close = $this->input->post('closeTime');
            $ar = array('Open_Time'=>$open,'Close_Time'=>$close,'User_Id'=>$id);
            $this->db->insert("slot_master",$ar);
            if($this->db->affected_rows() > 0)
                $data['success_msg'] = "New Slot Added";
            else
                $data['error_msg'] = "Something went wrong";
        }


        if(isset($_POST['edit_external_doctors'])){
            $name = $this->input->post('name');
            $branch = $this->input->post('branch');
            $hospital_name = $this->input->post('hospital_name');
            $hospital_address = $this->input->post('hospital_address');
            $department = $this->input->post('department');
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $mobile = $this->input->post('mobile');
            $gender = $this->input->post('gender');
            $address = $this->input->post('address');
            $state = $this->input->post('state');
            $city = $this->input->post('city');
            $dob = $this->input->post('dob');
            $doj = $this->input->post('doj');
            $doa = $this->input->post('doa');
            $status = $this->input->post('status');
            $leave = $this->input->post('leave');
            $target = $this->input->post('target');
            $designation = $this->input->post('designation');
            $aadhar = $this->input->post('aadhar');
            $pan = $this->input->post('pan');
            $weekly_off = $this->input->post('weekly_off');

            $morningOpenTime = $this->input->post('morningOpenTime');
            $morningCloseTime = $this->input->post('morningCloseTime');
            $noonOpenTime = $this->input->post('noonOpenTime');
            $noonCloseTime = $this->input->post('noonCloseTime');
            $eveningOpenTime = $this->input->post('eveningOpenTime');
            $eveningCloseTime = $this->input->post('eveningCloseTime');


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
                    $this->db->update("users");
                } 
            }

            if(isset($_FILES["rci"])) {
                if($this->upload->do_upload('rci'))
                {
                    $profilePhoto = $this->upload->data()['file_name'];
                    
                    $this->db->set('RCI',$profilePhoto);
                    $this->db->where('Id',$id);
                    $this->db->update("users");
                } 
            }
    


            $ar = array('Aadhar'=>$aadhar,'Pan'=>$pan,"Branch_Id"=>$branch,"Name"=>$name,"Email"=>$email,'Username'=>$username,'Password'=>$password,'Mobile'=>$mobile,'Gender'=>$gender,'Address'=>$address,'State'=>$state,'City'=>$city,'DOB'=>$dob,'DOJ'=>$doj,'DOA'=>$doa,'Is_Active'=>$status,'Leave'=>$leave,'Designation'=>$designation,'Target'=>$target,'Department_Id'=>$department,'Hospital_Name'=>$hospital_name,'Hospital_Address'=>$hospital_address,'Morning_Open_Time'=>$morningOpenTime,'Morning_Close_Time'=>$morningCloseTime,'Noon_Open_Time'=>$noonOpenTime,'Noon_Close_Time'=>$noonCloseTime,'Evening_Open_Time'=>$eveningOpenTime,'Evening_Close_Time'=>$eveningCloseTime,'Weekly_Off'=>$weekly_off);
            $this->db->where('Id',$id);
            $query = $this->db->update("users",$ar);
            
            if($query)
                $data['success_msg'] = "External Doctor Updated";
            else
                $data['error_msg'] = "Something went wrong";
        }


        if($id != ""):
            $data['edit'] = true;
            $data['edit_id'] = $id;
            $data['external_doctors'] = $this->main_model->getExternalDoctorData($id)[0];
        else:
            $data['edit'] = false;
        endif;

		$data['page_title'] = "Add/Edit External Doctors";
        $data['content'] = "external_doctors_edit";
        $this->load->view('template', $data);
	}

    public function rehab_professionals($id = "")
	{
        $data['rehab_professionals'] = (object) array('Aadhar'=>'','Pan'=>'','RCI'=>'','Branch_Id'=>'','Name' => '','Username' => '','Password' => '','Email' => '','Profile_Image' => '','Address' => '','State' => '','City' => '','Gender' => '','DOB' => '','DOJ' => '','DOA' => '','Mobile' => '','Is_Active' => '','Leave'=>'','Designation'=>'','Target'=>'','Hospital_Name'=>'','Hospital_Address'=>'','Morning_Open_Time'=>'','Morning_Close_Time'=>'','Noon_Open_Time'=>'','Noon_Close_Time'=>'','Evening_Open_Time'=>'','Evening_Close_Time'=>'','Weekly_Off'=>'');
        $data['success_msg'] = "";
        $data['error_msg'] = "";

        if(isset($_POST['add_rehab_professionals'])){
            $name = $this->input->post('name');
            
            $branch = $this->input->post('branch');
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $mobile = $this->input->post('mobile');
            $gender = $this->input->post('gender');
            $address = $this->input->post('address');
            $state = $this->input->post('state');
            $city = $this->input->post('city');
            $dob = $this->input->post('dob');
            $doj = $this->input->post('doj');
            $doa = $this->input->post('doa');
            $status = $this->input->post('status');
            $leave = $this->input->post('leave');
            $openTime = $this->input->post('openTime');
            $closeTime = $this->input->post('closeTime');
            $target = $this->input->post('target');
            $aadhar = $this->input->post('aadhar');
            $pan = $this->input->post('pan');
            $weekly_off = $this->input->post('weekly_off');

            $morningOpenTime = $this->input->post('morningOpenTime');
            $morningCloseTime = $this->input->post('morningCloseTime');
            $noonOpenTime = $this->input->post('noonOpenTime');
            $noonCloseTime = $this->input->post('noonCloseTime');
            $eveningOpenTime = $this->input->post('eveningOpenTime');
            $eveningCloseTime = $this->input->post('eveningCloseTime');

            $profilePhoto = "user.png";
            $rci = "document.png";

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

            if(isset($_FILES["rci"])) {
                if($this->upload->do_upload('rci'))
                {
                    $profilePhoto = $this->upload->data()['file_name'];
                } else {
                    $error = $this->upload->display_errors();
                    // echo "<script>alert('Error with Policy Document". $this->upload->display_errors()."');</script>";
                }
            }

            $ar = array('Aadhar'=>$aadhar,'Pan'=>$pan,'RCI'=>$rci,"Profile_Image"=>$profilePhoto,"Branch_Id"=>$branch,"Name"=>$name,"Email"=>$email,'Username'=>$username,'Password'=>$password,'Mobile'=>$mobile,'Gender'=>$gender,'Address'=>$address,'State'=>$state,'City'=>$city,'DOB'=>$dob,'DOJ'=>$doj,'DOA'=>$doa,'Is_Active'=>$status, 'Role'=>6,'Leave'=>$leave,'Target'=>$target,'Morning_Open_Time'=>$morningOpenTime,'Morning_Close_Time'=>$morningCloseTime,'Noon_Open_Time'=>$noonOpenTime,'Noon_Close_Time'=>$noonCloseTime,'Evening_Open_Time'=>$eveningOpenTime,'Evening_Close_Time'=>$eveningCloseTime,'Weekly_Off'=>$weekly_off);
            $this->db->insert("users",$ar);
            if($this->db->affected_rows() > 0)
                $data['success_msg'] = "New Rehab Professionals added";
            else
                $data['error_msg'] = "Something went wrong";
        }




        if(isset($_POST['edit_rehab_professionals'])){
            $name = $this->input->post('name');
            $branch = $this->input->post('branch');
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $mobile = $this->input->post('mobile');
            $gender = $this->input->post('gender');
            $address = $this->input->post('address');
            $state = $this->input->post('state');
            $city = $this->input->post('city');
            $dob = $this->input->post('dob');
            $doj = $this->input->post('doj');
            $doa = $this->input->post('doa');
            $status = $this->input->post('status');
            $leave = $this->input->post('leave');
            $openTime = $this->input->post('openTime');
            $closeTime = $this->input->post('closeTime');
            $target = $this->input->post('target');
            $aadhar = $this->input->post('aadhar');
            $pan = $this->input->post('pan');
            $weekly_off = $this->input->post('weekly_off');

            $morningOpenTime = $this->input->post('morningOpenTime');
            $morningCloseTime = $this->input->post('morningCloseTime');
            $noonOpenTime = $this->input->post('noonOpenTime');
            $noonCloseTime = $this->input->post('noonCloseTime');
            $eveningOpenTime = $this->input->post('eveningOpenTime');
            $eveningCloseTime = $this->input->post('eveningCloseTime');


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
                    $this->db->update("users");
                } 
            }

            if(isset($_FILES["rci"])) {
                if($this->upload->do_upload('rci'))
                {
                    $profilePhoto = $this->upload->data()['file_name'];
                    
                    $this->db->set('RCI',$profilePhoto);
                    $this->db->where('Id',$id);
                    $this->db->update("users");
                } 
            }
    


            $ar = array('Aadhar'=>$aadhar,'Pan'=>$pan,"Branch_Id"=>$branch,"Name"=>$name,"Email"=>$email,'Username'=>$username,'Password'=>$password,'Mobile'=>$mobile,'Gender'=>$gender,'Address'=>$address,'State'=>$state,'City'=>$city,'DOB'=>$dob,'DOJ'=>$doj,'DOA'=>$doa,'Is_Active'=>$status,'Leave'=>$leave,'Target'=>$target,'Morning_Open_Time'=>$morningOpenTime,'Morning_Close_Time'=>$morningCloseTime,'Noon_Open_Time'=>$noonOpenTime,'Noon_Close_Time'=>$noonCloseTime,'Evening_Open_Time'=>$eveningOpenTime,'Evening_Close_Time'=>$eveningCloseTime,'Weekly_Off'=>$weekly_off);
            $this->db->where('Id',$id);
            $query = $this->db->update("users",$ar);
            
            if($query)
                $data['success_msg'] = "Rehab Professionals Updated";
            else
                $data['error_msg'] = "Something went wrong";
        }


        if($id != ""):
            $data['edit'] = true;
            $data['rehab_professionals'] = $this->main_model->getRehabProfessionalsData($id)[0];
        else:
            $data['edit'] = false;
        endif;

		$data['page_title'] = "Rehab Professionals";
        $data['content'] = "rehab_professionals";
        $this->load->view('template', $data);
	}

    public function grantLeave($id){

        $this->db->Where("Id",$id);
        $this->db->set("Status",1);
        $this->db->update("leave_trans");
        header("Location: ".base_url."leave-management");
    }

    public function rewards($id = "")
	{
        $data['rewards'] = (object) array('Id'=> '','Name'=> '','Address'=> '','City'=> '','Pin'=> '','Is_Active'=> '');
        $data['success_msg'] = "";
        $data['error_msg'] = "";

        if(isset($_POST['add_rewards'])){
            $doctorId = $this->input->post('doctorId');
            $settlePoints = $this->input->post('settlePoints');
            $perpoint = $this->input->post('perPointCost');
            $total = $this->input->post('totalAmount');
            $remark = $this->input->post('remark');

            $ar = array("User_Id"=>$doctorId,"Points"=>$settlePoints,"Total_Amount"=>$total,"Per_Point"=>$perpoint,"Remark"=>$remark);
            $this->db->insert("rewards_settle",$ar);
            if($this->db->affected_rows() > 0)
                $data['success_msg'] = "Rewards Settlement Successful";
            else
                $data['error_msg'] = "Something went wrong";
        }

        if($id != ""):
            $data['edit'] = true;
            $data['rewards'] = (object) array('Id'=> '','Name'=> '','Address'=> '','City'=> '','Pin'=> '','Is_Active'=> '');
        else:
            $data['edit'] = false;
        endif;
        

		$data['page_title'] = "Rewards";
        $data['content'] = "reward";
        $this->load->view('template', $data);
	}


    public function holiday($id = "")
	{
        $data['holiday'] = (object) array('Id'=> '','Name'=> '','Date'=> '');
        $data['success_msg'] = "";
        $data['error_msg'] = "";

        if(isset($_POST['add_holiday'])){
            $name = $this->input->post('name');
            $date1 = strtr($this->input->post('date'), '/', '-');
            $date = date('Y-m-d', strtotime($date1));

            $ar = array("Name"=>$name,"Date"=>$date);
            $this->db->insert("holiday",$ar);
            if($this->db->affected_rows() > 0)
                $data['success_msg'] = "New holiday added";
            else
                $data['error_msg'] = "Something went wrong";
        }

        if(isset($_POST['edit_holiday'])){
            $name = $this->input->post('name');
            $date1 = strtr($this->input->post('date'), '/', '-');
            $date = date('Y-m-d', strtotime($date1));

            $ar = array("Name"=>$name,"Date"=>$date);
            $this->db->where('Id',$id);
            $this->db->update("holiday",$ar);
            if($this->db->affected_rows() > 0)
                $data['success_msg'] = "Holiday details Updated";
            else
                $data['error_msg'] = "Something went wrong";
        }

        if($id != ""):
            $data['edit'] = true;
            $data['holiday'] = $this->main_model->getholidayData($id)[0];
        else:
            $data['edit'] = false;
        endif;
        

		$data['page_title'] = "Holiday";
        $data['content'] = "holiday";
        $this->load->view('template', $data);
	}

    public function procedure($id = "")
	{
        $data['procedure'] = (object) array('Procedures_Id'=> '','Procedure_Name'=> '','Description'=> '','Fees'=> '','Department_Id'=> '');
        $data['success_msg'] = "";
        $data['error_msg'] = "";

        if(isset($_POST['add_procedure'])){
            $Procedure_Name = $this->input->post('Procedure_Name');
            $Description = $this->input->post('Description');
            $Fees = $this->input->post('Fees');
            $Department_Id = $this->input->post('Department_Id');

            $ar = array('Procedure_Name'=> $Procedure_Name,'Description'=> $Description,'Fees'=> $Fees,'Department_Id'=> $Department_Id);
            $this->db->insert("procedures",$ar);
            if($this->db->affected_rows() > 0)
                $data['success_msg'] = "New Procedure added";
            else
                $data['error_msg'] = "Something went wrong";
        }

        if(isset($_POST['edit_procedure'])){
            $Procedures_Id = $this->input->post('Procedures_Id');
            $Procedure_Name = $this->input->post('Procedure_Name');
            $Description = $this->input->post('Description');
            $Fees = $this->input->post('Fees');
            $Department_Id = $this->input->post('Department_Id');

            $ar = array('Procedure_Name'=> $Procedure_Name,'Description'=> $Description,'Fees'=> $Fees,'Department_Id'=> $Department_Id);
            $this->db->where('Procedures_Id',$id);
            $this->db->update("procedures",$ar);
            if($this->db->affected_rows() > 0)
                $data['success_msg'] = "Procedure details Updated";
            else
                $data['error_msg'] = "Something went wrong";
        }

        if($id != ""):
            $data['edit'] = true;
            $data['procedure'] = $this->main_model->getProceduresData($id)[0];
        else:
            $data['edit'] = false;
        endif;
        

		$data['page_title'] = "Procedures";
        $data['content'] = "procedure";
        $this->load->view('template', $data);
	}

    public function referred_master($id = "")
	{
        $data['referral'] = (object) array('Id'=> '','Hospital_Name'=> '','Doctor_Name'=> '','Address'=> '','Mobile'=> '','Email'=>'','Reward'=>'','DOB'=>'','DOA'=>'','Username'=>'','Password'=>'');
        $data['success_msg'] = "";
        $data['error_msg'] = "";

        if(isset($_POST['add_referral'])){
            $Hospital_Name = $this->input->post('Hospital_Name');
            $Doctor_Name = $this->input->post('Doctor_Name');
            $Address = $this->input->post('Address');
            $Mobile = $this->input->post('Mobile');
            $Email = $this->input->post('Email');
            $Reward = $this->input->post('Reward');
            $DOB = $this->input->post('DOB');
            $DOA = $this->input->post('DOA');
            $Username = $this->input->post('Username');
            $Password = $this->input->post('Password');

            $ar = array('Hospital_Name'=> $Hospital_Name,'Doctor_Name'=> $Doctor_Name,'Address'=> $Address,'Mobile'=> $Mobile,'Email'=>$Email,'Reward'=>$Reward,'DOB'=>$DOB,'DOA'=>$DOA,'Username'=>$Username,'Password'=>$Password);
            $this->db->insert("referred_master",$ar);
            if($this->db->affected_rows() > 0)
                $data['success_msg'] = "New Referral added";
            else
                $data['error_msg'] = "Something went wrong";
        }

        if(isset($_POST['edit_referral'])){
            $Hospital_Name = $this->input->post('Hospital_Name');
            $Doctor_Name = $this->input->post('Doctor_Name');
            $Address = $this->input->post('Address');
            $Mobile = $this->input->post('Mobile');
            $Email = $this->input->post('Email');
            $Reward = $this->input->post('Reward');
            $DOB = $this->input->post('DOB');
            $DOA = $this->input->post('DOA');
            $Username = $this->input->post('Username');
            $Password = $this->input->post('Password');

            $ar = array('Hospital_Name'=> $Hospital_Name,'Doctor_Name'=> $Doctor_Name,'Address'=> $Address,'Mobile'=> $Mobile,'Email'=>$Email,'Reward'=>$Reward,'DOB'=>$DOB,'DOA'=>$DOA,'Username'=>$Username,'Password'=>$Password);
            $this->db->where('Id',$id);
            $this->db->update("referred_master",$ar);
            if($this->db->affected_rows() > 0)
                $data['success_msg'] = "Referral details Updated";
            else
                $data['error_msg'] = "Something went wrong";
        }

        if($id != ""):
            $data['edit'] = true;
            $data['referral'] = $this->main_model->getReferredData($id)[0];
        else:
            $data['edit'] = false;
        endif;
        

		$data['page_title'] = "Referral";
        $data['content'] = "referral";
        $this->load->view('template', $data);
	}
}
