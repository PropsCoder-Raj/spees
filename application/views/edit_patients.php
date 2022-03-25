<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Add Patients</h5>
                    <!--end::Page Title-->

                </div>
                <!--end::Page Heading-->
            </div>
            <div class="d-flex align-items-center flex-wrap">
                <a href="<?php echo base_url; ?>patients" class="btn btn-danger btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3">Back</a>
			</div>
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <p style="Color:Red"><?php echo $error_msg; ?></p>
            <p style="Color:green"><?php echo $success_msg; ?></p>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-custom  gutter-b">
                        <div class="card-header border-0 pt-1">
                            <h3 class="card-title ml-n6">
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75"><?php echo ($edit) ?  "Edit" : "Create"; ?>
                                Patient</span> 
                            </h3>
                            <p><?php echo ($edit) ?  "Patient Id -  <b>".$patient->Id."</b>" : ""; ?></p>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="<?php if(!$edit) echo "form-group"; ?> col-lg-6">

                                    <?php if($edit): ?>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <img src="<?php echo upload_url.$patient->Profile_Image; ?>" width="100px">
                                        </div>
                                        <div class="col-lg-8">
                                                <label for="usr">Change Profile Photo:</label>
                                                <input type="file" class="form-control" name="profile_photo">
                                            
                                        </div>

                                    </div>

                                    <?php else: ?>
                                        <label for="usr">Profile Photo:</label>
                                        <input type="file" class="form-control" name="profile_photo">
                                    <?php endif; ?>

                                </div>   

                                <div class="form-group col-lg-6">
                                    <label for="sel1">Branch:</label>
                                    <select class="form-control" name="branch" required>
                                        <option disabled>Select Branch</option>
                                        <?php foreach($this->main_model->getBranchData() as $item): ?>
                                        <option value="<?php echo $item->Id; ?>" <?php echo ($item->Id == $patient->Branch_Id) ? "selected" : "";?>><?php echo $item->Name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div> 
                                <div class="form-group col-lg-2">
                                    <label for="sel1">Prefix:</label>
                                    <select class="form-control" name="prefix" required>
                                    <option selected disabled>Prefix</option>
                                    <?php if($patient->Prefic == "Dr"): ?>
                                      <option value="Dr" selected>Dr</option>
                                      <option value="Mr">Mr</option>
                                      <option value="Mrs">Mrs</option>
                                      <option value="Miss">Miss</option>
                                    <?php elseif($patient->Prefix == "Mr"): ?>
                                        <option value="Dr">Dr</option>
                                        <option value="Mr" selected>Mr</option>
                                        <option value="Mrs">Mrs</option>
                                        <option value="Miss">Miss</option>

                                    <?php elseif($patient->Prefix == "Mrs"): ?>
                                        <option value="Dr">Dr</option>
                                        <option value="Mr">Mr</option>
                                        <option value="Mrs" selected>Mrs</option>
                                        <option value="Miss">Miss</option>

                                    <?php elseif($patient->Prefix == "Miss"): ?>
                                        <option value="Dr">Dr</option>
                                        <option value="Mr">Mr</option>
                                        <option value="Mrs">Mrs</option>
                                        <option value="Miss" selected>Miss</option>
                                    <?php else: ?>
                                        <option value="Dr">Dr</option>
                                        <option value="Mr">Mr</option>
                                        <option value="Mrs">Mrs</option>
                                        <option value="Miss">Miss</option>
                                    <?php endif; ?>
                                    </select>
                                </div>

                                <div class="form-group col-lg-10">
                                    <label for="usr">Name:</label>
                                    <input type="text" class="form-control" name="name" value="<?php echo $patient->Name; ?>" required>
                                </div>   
                                <div class="form-group col-lg-6">
                                    <label for="usr">Aadhar No: <span id="aadharDuplicate" class="text-danger"></span></label>
                                    <input type="number" class="form-control" name="aadhar" value="<?php echo $patient->Aadhar; ?>" required>
                                </div>
 

                                <div class="form-group col-lg-6">
                                    <label for="usr">Email:</label>
                                    <input type="email" class="form-control" value="<?php echo $patient->Email; ?>" name="email">
                                </div>    
                                   
                                <div class="form-group col-lg-3">
                                    <label for="usr">Mobile:</label>
                                    <input type="number" class="form-control" value="<?php echo $patient->Mobile; ?>" name="mobile" required>
                                </div>
                                <div class="form-group col-lg-3">
                                    <label for="usr">Alternate Mobile:</label>
                                    <input type="number" class="form-control" value="<?php echo $patient->Alternate_Mobile; ?>" name="Alternate_Mobile">
                                </div>    
                                <div class="form-group col-lg-6">
                                    <label for="sel1">Gender:</label>
                                    <select class="form-control" name="gender" required>
                                    <option selected disabled>Select Gender</option>
                                    <?php if($patient->Gender == "Male"): ?>
                                      <option value="Male" selected>Male</option>
                                      <option value="Female">Female</option>
                                    <?php elseif($patient->Gender == "Female"): ?>
                                        <option value="Male">Male</option>
                                        <option value="Female" selected>Female</option>
                                    <?php else: ?>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    <?php endif; ?>
                                    </select>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="usr">Age:</label>
                                    <input type="number" class="form-control" name="age" value="<?php echo $patient->Age; ?>" required>
                                </div>    

                                <div class="form-group col-lg-6">
                                    <label for="usr">Occupation:</label>
                                    <input type="text" class="form-control" name="occupation" value="<?php echo $patient->Occupation; ?>" required>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="sel1">Marriage Status:</label>
                                    <select class="form-control" name="marriage_status">
                                    <option selected disabled>Select</option>

                                        <?php if($patient->Marriage_Status == "Single"): ?>
                                            <option value="Single" selected>Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Other">Other</option>
                                        <?php elseif($patient->Marriage_Status == "Married"): ?>
                                            <option value="Single">Single</option>
                                            <option value="Married" selected>Married</option>
                                            <option value="Other">Other</option>

                                        <?php elseif($patient->Marriage_Status == "Other"): ?>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Other" selected>Other</option>

                                        <?php else: ?>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Other">Other</option>
                                        <?php endif; ?>
                                    </select>
                                </div>



                                <div class="form-group col-lg-6">
                                    <label for="usr">Father Name:</label>
                                    <input type="text" class="form-control" name="father_name" value="<?php echo $patient->Father_Name; ?>" required>
                                </div> 


                                <div class="form-group col-lg-6">
                                    <label for="usr">Father Education:</label>
                                    <input type="text" class="form-control" name="father_education" value="<?php echo $patient->Father_Education; ?>" required>
                                </div>  

                                <div class="form-group col-lg-6">
                                    <label for="usr">Father Occupation:</label>
                                    <input type="text" class="form-control" name="father_occupation" value="<?php echo $patient->Father_Occupation; ?>" required>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="usr">Mother's Name:</label>
                                    <input type="text" class="form-control" name="mother_name" value="<?php echo $patient->Mother_Name; ?>" required>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="usr">Income Slab:</label>
                                    <input type="text" class="form-control" list="slab" name="income" value="<?php echo $patient->Income; ?>" required>
                                    <datalist id="slab">
                                        <option value="Less than 1 Lakh">
                                        <option value="1 Lakh - 2.5 Lakh">
                                        <option value="2.5 Lakh - 5 Lakh">
                                        <option value="5 Lakh - 7.5 Lakh">
                                        <option value="7.5 Lakh - 10 Lakh">
                                        <option value="More than 10 Lakh">
                                        </datalist>
                                </div>


                                <div class="form-group col-lg-6">
                                    <label for="usr">Address:</label>
                                    <input type="text" class="form-control" value="<?php echo $patient->Address; ?>" name="address">
                                </div> 
                                <div class="form-group col-lg-3">
                                    <label for="usr">State:</label>
                                    <input type="text" class="form-control" value="<?php echo $patient->State; ?>" name="state">
                                </div> 
                                <div class="form-group col-lg-3">
                                    <label for="usr">Taluka:</label>
                                    <input type="text" class="form-control" value="<?php echo $patient->Taluka; ?>" name="taluka" >
                                </div>
                                <div class="form-group col-lg-3">
                                    <label for="usr">District:</label>
                                    <input type="text" class="form-control" value="<?php echo $patient->District; ?>" name="district" >
                                </div>  
                                <div class="form-group col-lg-3">
                                    <label for="usr">Pin:</label>
                                    <input type="text" class="form-control" value="<?php echo $patient->Pin; ?>" name="pin" >
                                </div> 
                                <div class="form-group col-lg-3">
                                    <label for="usr">Date of Birth:</label>
                                    <input type="date" class="form-control" value="<?php echo $patient->DOB; ?>" name="dob" >
                                </div> 
                                
                                <div class="form-group col-lg-3">
                                    <label for="usr">Date of Anniversary:</label>
                                    <input type="date" class="form-control" value="<?php echo $patient->DOA; ?>" name="doa" >
                                </div> 

                                <div class="form-group col-lg-6">
                                    <label for="usr">Language Known:</label>
                                    <input type="text" class="form-control" value="<?php echo $patient->Language; ?>" name="lang" >
                                </div> 

<!-- 
                                <div class="form-group col-lg-6">
                                    <label for="sel1">Reffered by:</label>
                                    <select class="form-control" name="ref_by">
                                    <option selected disabled>Select</option>
                                        
                                        <?php // foreach($this->main_model->getInternalDoctorData() as $item): ?>
                                            <option value="<?php //echo $item->Id; ?>" <?php // echo ($item->Id == $patient->Reffered_By) ? "selected" : "";?> ><?php //echo $item->Name; ?></option>
                                        <?php // endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="sel1">Reffered To:</label>
                                    <select class="form-control" name="ref_to">
                                        <option selected disabled>Select</option>
                                        <?php //foreach($this->main_model->getExternalDoctorData() as $item): ?>
                                            <option value="<?php //echo $item->Id; ?>" <?php // echo ($item->Id == $patient->Reffered_To) ? "selected" : "";?> ><?php // echo $item->Name; ?></option>
                                        <?php //endforeach; ?>
                                    </select>
                                </div> -->

                                <div class="form-group col-lg-6">
                                    <label for="sel1">Source:</label>
                                    <select class="form-control" name="source">
                                        <option selected disabled>Select</option>

                                        <?php if($patient->Source == "Facebook"): ?>
                                            <option value="Facebook" selected>Facebook</option>
                                            <option value="Website">Website</option>
                                            <option value="Google">Google</option>
                                            <option value="Call">Call</option>
                                            <option value="Other">Other</option>
                                        <?php elseif($patient->Source == "Website"): ?>
                                            <option value="Facebook">Facebook</option>
                                            <option value="Website" selected>Website</option>
                                            <option value="Google">Google</option>
                                            <option value="Call">Call</option>
                                            <option value="Other">Other</option>
                                        <?php elseif($patient->Source == "Google"): ?>
                                            <option value="Facebook">Facebook</option>
                                            <option value="Website">Website</option>
                                            <option value="Google" selected>Google</option>
                                            <option value="Call">Call</option>
                                            <option value="Other">Other</option>
                                        <?php elseif($patient->Source == "Call"): ?>
                                            <option value="Facebook">Facebook</option>
                                            <option value="Website">Website</option>
                                            <option value="Google">Google</option>
                                            <option value="Call" selected>Call</option>
                                            <option value="Other">Other</option>
                                        <?php elseif($patient->Source == "Other"): ?>
                                            <option value="Facebook">Facebook</option>
                                            <option value="Website">Website</option>
                                            <option value="Google">Google</option>
                                            <option value="Call">Call</option>
                                            <option value="Other" selected>Other</option>
                                        <?php else: ?>
                                            <option value="Facebook">Facebook</option>
                                            <option value="Website">Website</option>
                                            <option value="Google">Google</option>
                                            <option value="Call">Call</option>
                                            <option value="Other">Other</option>
                                        <?php endif; ?>
                                    </select>
                                </div>

                                <div class="form-group col-lg-3">
                                    <label for="sel1">Status:</label>
                                    <select class="form-control" name="status" required>
                                    <option disabled>Select Status</option>
                                    <?php if($patient->Is_Active == 1): ?>
                                      <option value="1" selected>Active</option>
                                      <option value="0">In Active</option>
                                    <?php elseif($patient->Is_Active == 0): ?>
                                        <option value="1">Active</option>
                                        <option value="0" selected>In Active</option>

                                    <?php else: ?>
                                        <option value="1">Active</option>
                                        <option value="0">In Active</option>
                                    <?php endif; ?>
                                    </select>
                                </div>

                            </div>
                            <div class="row">
                                
                                <?php if($edit): ?>
                                    <button type="submit" name="edit_patient" class="btn btn-primary col-lg-4">Submit</button>
                                <?php else: ?>
                                    <button type="submit" name="add_patient" class="btn btn-primary col-lg-4">Submit</button>
                                <?php endif; ?>
                            </div>     
                            </form>                       
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
