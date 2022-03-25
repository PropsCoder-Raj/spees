<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">TRC Manager</h5>
                    <!--end::Page Title-->

                </div>
                <!--end::Page Heading-->
            </div>
            <div class="d-flex align-items-center flex-wrap">
                <?php if($edit): ?>
                    <a href="<?php echo base_url; ?>trc-manager" class="btn btn-danger btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3">Back</a>
                <?php else: ?>
				<button class="btn btn-primary btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3" data-toggle="collapse" data-target="#branchCard">Add TRC Manager</button>
				<?php endif; ?>
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
            <div class="row <?php if(!$edit) echo "collapse"; ?>" id="branchCard">
                <div class="col-lg-12">
                    <div class="card card-custom  gutter-b">
                        <div class="card-header border-0 pt-1">
                            <h3 class="card-title ml-n6">
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75"><?php echo ($edit) ?  "Edit" : "Add"; ?>
                                TRC Manager</span>
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="<?php if(!$edit) echo "form-group"; ?> col-lg-6">

                                    <?php if($edit): ?>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <img src="<?php echo upload_url.$rehab_professionals->Profile_Image; ?>" width="100px">
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

                                <div class=" col-lg-6">

                                    <!-- <?php // if($edit): ?>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <img src="<?php // echo upload_url.$rehab_professionals->RCI; ?>" width="100px">
                                        </div>
                                        <div class="col-lg-8">
                                                <label for="usr">Change RCI:</label>
                                                <input type="file" class="form-control" name="rci">
                                            
                                        </div>

                                    </div>

                                    <?php // else: ?>
                                        <label for="usr">RCI:</label>
                                        <input type="file" class="form-control" name="rci">
                                    <?php // endif; ?> -->

                                </div> 
                                <div class="form-group col-lg-6">
                                    <label for="usr">Aadhar: <span id="aadharDuplicate" class="text-danger"></span></label>
                                    <input type="number" class="form-control" name="aadhar"
                                        value="<?php echo $rehab_professionals->Aadhar; ?>">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="sel1">Branch:</label>
                                    <select class="form-control" name="branch" required>
                                    <option selected disabled>Select Branch</option>
                                    <?php foreach($this->main_model->getBranchData() as $item): ?>
                                      <option value="<?php echo $item->Id; ?>" <?php echo ($item->Id == $rehab_professionals->Branch_Id) ? "selected" : "";?> ><?php echo $item->Name; ?></option>
                                      <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="usr">Name:</label>
                                    <input type="text" class="form-control" name="name" value="<?php echo $rehab_professionals->Name; ?>" required>
                                </div>    
                                <div class="form-group col-lg-6">
                                    <label for="usr">Email:</label>
                                    <input type="email" class="form-control" value="<?php echo $rehab_professionals->Email; ?>" name="email">
                                </div>    
                                <div class="form-group col-lg-6">
                                    <label for="usr">Username: <span id="usernameDuplicate" class="text-danger"></span></label>
                                    <input type="text" class="form-control" onchange="checkUsername(this.value)" value="<?php echo $rehab_professionals->Username; ?>" name="username" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="usr">Password:</label>
                                    <input type="text" class="form-control" value="<?php echo $rehab_professionals->Password; ?>" name="password" required>
                                </div>    
                                <div class="form-group col-lg-6">
                                    <label for="usr">Mobile:</label>
                                    <input type="number" class="form-control" value="<?php echo $rehab_professionals->Mobile; ?>" name="mobile">
                                </div>    
                                <div class="form-group col-lg-6">
                                    <label for="sel1">Gender:</label>
                                    <select class="form-control" name="gender">
                                    <option selected disabled>Select Gender</option>
                                    <?php if($rehab_professionals->Gender == "Male"): ?>
                                      <option value="Male" selected>Male</option>
                                      <option value="Female">Female</option>
                                    <?php elseif($rehab_professionals->Gender == "Female"): ?>
                                        <option value="Male">Male</option>
                                        <option value="Female" selected>Female</option>
                                    
                                    <?php else: ?>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    <?php endif; ?>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="usr">Address:</label>
                                    <input type="text" class="form-control" value="<?php echo $rehab_professionals->Address; ?>" name="address">
                                </div> 
                                <div class="form-group col-lg-3">
                                    <label for="usr">State:</label>
                                    <input type="text" class="form-control"  value="<?php echo $rehab_professionals->State; ?>" name="state">
                                </div> 
                                <div class="form-group col-lg-3">
                                    <label for="usr">City:</label>
                                    <input type="text" class="form-control" value="<?php echo $rehab_professionals->City; ?>" name="city" >
                                </div> 
                                <div class="form-group col-lg-3">
                                    <label for="usr">Leave Entitle:</label>
                                    <input type="number" class="form-control"
                                        value="<?php echo $rehab_professionals->Leave; ?>" name="leave">
                                </div>
                                <div class="form-group col-lg-3">
                                    <label for="usr">Target:</label>
                                    <input type="number" class="form-control"
                                        value="<?php echo $rehab_professionals->Target; ?>" name="target">
                                </div>
                                <div class="col-lg-4">
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label for="usr">Morning Timing From:</label>
                                                <input type="time" class="form-control"
                                                    value="<?php echo $rehab_professionals->Morning_Open_Time; ?>"
                                                    name="morningOpenTime">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="usr">Morning Timing To:</label>
                                                <input type="time" class="form-control"
                                                    value="<?php echo $rehab_professionals->Morning_Close_Time; ?>"
                                                    name="morningCloseTime">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label for="usr">Noon Timing From:</label>
                                                <input type="time" class="form-control"
                                                    value="<?php echo $rehab_professionals->Noon_Open_Time; ?>"
                                                    name="noonOpenTime">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="usr">Noon Timing To:</label>
                                                <input type="time" class="form-control"
                                                    value="<?php echo $rehab_professionals->Noon_Close_Time; ?>"
                                                    name="noonCloseTime">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label for="usr">Evening Timing From:</label>
                                                <input type="time" class="form-control"
                                                    value="<?php echo $rehab_professionals->Evening_Open_Time; ?>"
                                                    name="eveningOpenTime">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="usr">Evening Timing To:</label>
                                                <input type="time" class="form-control"
                                                    value="<?php echo $rehab_professionals->Evening_Close_Time; ?>"
                                                    name="eveningCloseTime">
                                            </div>
                                        </div>
                                    </div>
                                <div class="form-group col-lg-3">
                                    <label for="usr">Date of Birth:</label>
                                    <input type="date" class="form-control" value="<?php echo $rehab_professionals->DOB; ?>" name="dob" >
                                </div> 
                                <div class="form-group col-lg-3">
                                    <label for="usr">Date of Joining:</label>
                                    <input type="date" class="form-control" value="<?php echo $rehab_professionals->DOJ; ?>" name="doj" >
                                </div> 
                                <div class="form-group col-lg-3">
                                    <label for="usr">Date of Anniversary:</label>
                                    <input type="date" class="form-control" value="<?php echo $rehab_professionals->DOA; ?>" name="doa" >
                                </div> 
                                <div class="form-group col-lg-3">
                                        <label for="sel1">Weekly Off:</label>
                                        <input class="form-control" type="text" list="days" name="weekly_off" value="<?php echo $rehab_professionals->Weekly_Off; ?>">

                                        <datalist id="days">
                                        <option value="Sunday">
                                        <option value="Monday">
                                        <option value="Tuesday">
                                        <option value="Wednesday">
                                        <option value="Thursday">
                                        <option value="Friday">
                                        <option value="Saturday">
                                        </datalist>
                                    </div>
                                
                                <div class="form-group col-lg-3">
                                    <label for="sel1">Status:</label>
                                    <select class="form-control" name="status" required>
                                    <option disabled>Select Status</option>
                                    <?php if($rehab_professionals->Is_Active == 1): ?>
                                      <option value="1" selected>Active</option>
                                      <option value="0">In Active</option>
                                    <?php elseif($rehab_professionals->Is_Active == 0): ?>
                                        <option value="1">Active</option>
                                        <option value="0" selected>In Active</option>
                                    <?php else: ?>
                                        <option value="1" selected>Active</option>
                                        <option value="0">In Active</option>
                                    <?php endif; ?>

                                    </select>
                                </div>

                            </div>
                            <div class="row">
                                <?php if($edit): ?>
                                    <button type="submit" name="edit_rehab_professionals" class="btn btn-primary col-lg-4">Submit</button>
                                <?php else: ?>
                                    <button type="submit" name="add_rehab_professionals" class="btn btn-primary col-lg-4">Submit</button>
                                <?php endif; ?>
                                    <div class="col-lg-2"></div>
                                <a href="<?php echo base_url; ?>external-doctors" class="btn btn-link btn-danger col-lg-2">Cancel</a>
                            </div>     
                            </form>                       
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-custom  gutter-b">
                        <div class="card-header border-0 pt-1">
                            <h3 class="card-title ml-n6">
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">TRC Managers List</span>
                            </h3>
                        </div>
                        <div class="card-body d-flex align-items-center justify-content-between pt-0 flex-wrap">
                            <div class="table-responsive">
                                <table class="table" id="listTable">
                                    <thead>
                                        <tr>
                                            <th>SR</th>
                                            <th></th>
                                            <th>Name</th>
                                            <th>Branch</th>
                                            <th>Username</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    <thead>
                                    <tbody>
                                        <?php $i = 1; foreach($this->main_model->getRehabProfessionalsData() as $item){ ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><img src="<?php echo upload_url.$item->Profile_Image; ?>" / width="30px"></td>
                                                <td><?php echo $item->Name; ?></td>
                                                <td><?php echo $this->main_model->getBranchData($item->Branch_Id)[0]->Name; ?></td>
                                                <td><?php echo $item->Username; ?></td>
                                                <td><?php echo $item->Mobile; ?></td>
                                                <td><?php echo $item->Email; ?></td>
                                                <td>

                                                    <?php echo ($item->Is_Active == 1) ? '<span class="btn btn-success">A</span>' : '<span class="btn btn-danger">I</span>'; ?>
                                                </td>
                                                <td><a href="<?php echo base_url; ?>trc-manager/<?php echo $item->Id; ?>" class="btn btn-warning">Edit</a></td>
                                            </tr>
                                        <?php $i++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    var aadharDuplicate = $("#aadharDuplicate");
    var panDuplicate = $("#panDuplicate");
    var usernameDuplicate = $("#usernameDuplicate");

    function checkAdharNo(adharNo) {
        if (adharNo.length == 12) {
            aadharDuplicate.text("");
            $.ajax({
                url: "<?php echo base_url ?>check_aadhaar/" + adharNo,
                success: function (result) {
                    console.log(result);
                    if (result == "success") {
                        aadharDuplicate.text("");
                    } else {
                        aadharDuplicate.text("Duplicate Aadhar Number found");
                    }
                }
            });
        } else {
            aadharDuplicate.text("Enter valid Aadhaar number");
        }

    }

    function checkPan(panno) {
        if (panno.length == 10) {
            panDuplicate.text("");
            $.ajax({
                url: "<?php echo base_url ?>check_pan/" + panno,
                success: function (result) {
                    console.log(result);
                    if (result == "success") {
                        panDuplicate.text("");
                    } else {
                        panDuplicate.text("Duplicate Pan Number found");
                    }
                }
            });
        } else {
            panDuplicate.text("Enter valid Pan number");
        }

    }

    function checkUsername(username) {
        if (username.length > 5) {
            usernameDuplicate.text("");
            $.ajax({
                url: "<?php echo base_url ?>check_username/" + username,
                success: function (result) {
                    console.log(result);
                    if (result == "success") {
                        usernameDuplicate.text("");
                    } else {
                        usernameDuplicate.text("Duplicate Username found");
                    }
                }
            });
        } else {
            usernameDuplicate.text("Enter valid Username");
        }

    }
</script>