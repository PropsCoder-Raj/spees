<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Internal Professionals</h5>
                    <!--end::Page Title-->

                </div>
                <!--end::Page Heading-->
            </div>
            <div class="d-flex align-items-center flex-wrap">
                <a href="<?php echo base_url; ?>calendar/<?php echo $edit_id?>" class="btn btn-success btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3">Monthly Calendar</a>
                <a href="<?php echo base_url; ?>internal-doctors" class="btn btn-danger btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3">Back</a>
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
            <div class="row id="branchCard">
                <div class="col-lg-12">
                    <div class="card card-custom  gutter-b">
                        <div class="card-header border-0 pt-1">
                            <h3 class="card-title ml-n6">
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75"><?php echo ($edit) ?  "Edit" : "Add"; ?>
                                Internal Professional</span>
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="<?php if(!$edit) echo "form-group"; ?> col-lg-6">

                                        <?php if($edit): ?>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <img src="<?php echo upload_url.$internal_doctors->Profile_Image; ?>" width="100px">
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

                                    <div class="<?php if(!$edit) echo "form-group"; ?> col-lg-6">

                                        <?php if($edit): ?>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <a href="<?php echo upload_url.$internal_doctors->RCI; ?>" target="_blank">
                                                    <img src="<?php echo upload_url.$internal_doctors->RCI; ?>" width="100px">
                                                </a>                                                
                                            </div>
                                            <div class="col-lg-8">
                                                    <label for="usr">Change RCI:</label>
                                                    <input type="file" class="form-control" name="rci">
                                                
                                            </div>

                                        </div>

                                        <?php else: ?>
                                            <label for="usr">RCI:</label>
                                            <input type="file" class="form-control" name="rci">
                                        <?php endif; ?>

                                    </div> 
                                    <div class="form-group col-lg-6">
                                        <label for="usr">Name:</label>
                                        <input type="text" class="form-control" name="name" value="<?php echo $internal_doctors->Name; ?>" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="usr">Designation:</label>
                                        <input type="text" class="form-control" name="designation" value="<?php echo $internal_doctors->Designation; ?>" required>
                                    </div>  
                                    <div class="form-group col-lg-6">
                                        <label for="usr">Aadhar: <span id="aadharDuplicate" class="text-danger"></span></label>
                                        <input type="number" class="form-control" name="aadhar"
                                            value="<?php echo $internal_doctors->Aadhar; ?>">
                                    </div> 

                                    <div class="form-group col-lg-6">
                                        <label for="sel1">Branch:</label>
                                        <select class="form-control" name="branch" required>
                                        <option selected disabled>Select Branch</option>
                                        <?php foreach($this->main_model->getBranchData() as $item): ?>
                                        <option value="<?php echo $item->Id; ?>" <?php echo ($item->Id == $internal_doctors->Branch_Id) ? "selected" : "";?> ><?php echo $item->Name; ?></option>
                                        <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <label for="sel1">Department:</label>
                                        <select class="form-control" name="department" required>
                                        <option selected disabled>Select Department</option>
                                        <?php foreach($this->main_model->getDepartmentData() as $item): ?>
                                        <option value="<?php echo $item->Id; ?>" <?php echo ($item->Id == $internal_doctors->Department_Id) ? "selected" : "";?> ><?php echo $item->Name; ?></option>
                                        <?php endforeach; ?>
                                        </select>
                                    </div>
   
                                    <div class="form-group col-lg-6">
                                        <label for="usr">Email:</label>
                                        <input type="email" class="form-control" value="<?php echo $internal_doctors->Email; ?>" name="email">
                                    </div>    
                                    <div class="form-group col-lg-6">
                                        <label for="usr">Username: <span id="usernameDuplicate" class="text-danger"></span></label>
                                        <input type="text" class="form-control" onchange="checkUsername(this.value)" value="<?php echo $internal_doctors->Username; ?>" name="username" required>
                                    </div>    
                                    <div class="form-group col-lg-6">
                                        <label for="usr">Password:</label>
                                        <input type="text" class="form-control" value="<?php echo $internal_doctors->Password; ?>" name="password" required>
                                    </div>    
                                    <div class="form-group col-lg-6">
                                        <label for="usr">Mobile:</label>
                                        <input type="number" class="form-control" value="<?php echo $internal_doctors->Mobile; ?>" name="mobile">
                                    </div>    
                                    <div class="form-group col-lg-6">
                                        <label for="sel1">Gender:</label>
                                        <select class="form-control" name="gender">
                                        <option selected disabled>Select Gender</option>
                                        <?php if($internal_doctors->Gender == "Male"): ?>
                                        <option value="Male" selected>Male</option>
                                        <option value="Female">Female</option>
                                        <?php elseif($internal_doctors->Gender == "Female"): ?>
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
                                        <input type="text" class="form-control" value="<?php echo $internal_doctors->Address; ?>" name="address">
                                    </div> 
                                    <div class="form-group col-lg-3">
                                        <label for="usr">State:</label>
                                        <input type="text" class="form-control"  value="<?php echo $internal_doctors->State; ?>" name="state">
                                    </div> 
                                    <div class="form-group col-lg-3">
                                        <label for="usr">City:</label>
                                        <input type="text" class="form-control" value="<?php echo $internal_doctors->City; ?>" name="city" >
                                    </div> 
                                    <div class="form-group col-lg-3">
                                        <label for="usr">Leave Entitle:</label>
                                        <input type="number" class="form-control"
                                            value="<?php echo $internal_doctors->Leave; ?>" name="leave">
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label for="usr">Target:</label>
                                        <input type="number" class="form-control"
                                            value="<?php echo $internal_doctors->Target; ?>" name="target">
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label for="usr">Morning Timing From:</label>
                                                <input type="time" class="form-control"
                                                    value="<?php echo $internal_doctors->Morning_Open_Time; ?>" name="morningOpenTime">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="usr">Morning Timing To:</label>
                                                <input type="time" class="form-control"
                                                    value="<?php echo $internal_doctors->Morning_Close_Time; ?>" name="morningCloseTime">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label for="usr">Noon Timing From:</label>
                                                <input type="time" class="form-control"
                                                    value="<?php echo $internal_doctors->Noon_Open_Time; ?>" name="noonOpenTime">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="usr">Noon Timing To:</label>
                                                <input type="time" class="form-control"
                                                    value="<?php echo $internal_doctors->Noon_Close_Time; ?>" name="noonCloseTime">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label for="usr">Evening Timing From:</label>
                                                <input type="time" class="form-control"
                                                    value="<?php echo $internal_doctors->Evening_Open_Time; ?>" name="eveningOpenTime">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="usr">Evening Timing To:</label>
                                                <input type="time" class="form-control"
                                                    value="<?php echo $internal_doctors->Evening_Close_Time; ?>" name="eveningCloseTime">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label for="usr">Date of Birth:</label>
                                        <input type="date" class="form-control" value="<?php echo $internal_doctors->DOB; ?>" name="dob" >
                                    </div> 
                                    <div class="form-group col-lg-3">
                                        <label for="usr">Date of Joining:</label>
                                        <input type="date" class="form-control" value="<?php echo $internal_doctors->DOJ; ?>" name="doj" >
                                    </div> 
                                    <div class="form-group col-lg-3">
                                        <label for="usr">Date of Anniversary:</label>
                                        <input type="date" class="form-control" value="<?php echo $internal_doctors->DOA; ?>" name="doa" >
                                    </div> 
                                    <div class="form-group col-lg-3">
                                        <label for="sel1">Weekly Off:</label>
                                        <input class="form-control" type="text" list="days" name="weekly_off" value="<?php echo $internal_doctors->Weekly_Off; ?>">

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
                                        <?php if($internal_doctors->Is_Active == 1): ?>
                                        <option value="1" selected>Active</option>
                                        <option value="0">In Active</option>
                                        <?php elseif($internal_doctors->Is_Active == 0): ?>
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
                                        <button type="submit" name="edit_internal_doctors" class="btn btn-primary col-lg-4">Submit</button>
                                    <?php else: ?>
                                        <button type="submit" name="add_internal_doctors" class="btn btn-primary col-lg-4">Submit</button>
                                    <?php endif; ?>
                                        <div class="col-lg-2"></div>
                                    <a href="<?php echo base_url; ?>internal-doctors" class="btn btn-link btn-danger col-lg-2">Cancel</a>
                                </div>     
                            </form>                       
                        </div>
                    </div>
                </div>
                <?php if($edit): ?>
                <div class="col-lg-12">
                    <div class="card card-custom  gutter-b">
                        <div class="card-header border-0 pt-1">
                            <h3 class="card-title ml-n6">
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">
                                Slot Master</span>
                            </h3>
                        </div>
                        <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label for="openTime">Start:</label>
                                                <input type="time" class="form-control" name="openTime" id="openTime" required>
                                            </div>  
                                            <div class="form-group col-lg-6">
                                                <label for="closeTime">End:</label>
                                                <input type="time" class="form-control" name="closeTime" id="closeTime" required>
                                            </div> 
                                        </div>
                                        <div class="row">
                                            <button type="submit" name="add_slot_master" id="add_slot_master" class="btn btn-primary col-lg-3">Add</button>
                                            <button style="display: none;" type="submit" id="edit_internal_doctors_time_slot" onclick="editSlot(<?php echo $edit_id; ?>)" class="btn btn-primary col-lg-3">Edit</button>
                                            <button style="display: none;" type="submit" id="cancelSection" onclick="cancelSection()" class="btn btn-danger col-lg-3">Cancel</button>
                                        </div>
                                        
                                        </form>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped" id="table1">
                                                <thead>
                                                    <tr>
                                                        <th>SR</th>
                                                        <th>Start Time</th>
                                                        <th>End Time</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                <thead>
                                                <tbody>
                                                    <?php $i = 1; foreach($this->main_model->getSlotData($edit_id) as $item){ ?>
                                                        <tr>
                                                            <td><?php echo $i; ?></td>
                                                            <td><?php echo $item->Open_Time; ?></td>
                                                            <td><?php echo $item->Close_Time; ?></td>
                                                            <td>
                                                                <button class="btn btn-primary" onclick="editSection('<?php echo $item->Open_Time; ?>', '<?php echo $item->Close_Time; ?>', '<?php echo $item->Id; ?>', '<?php echo $edit_id; ?>')">Edit</button>
                                                                <button class="btn btn-danger" onclick="deleteSlot('<?php echo $item->Id; ?>', '<?php echo $edit_id; ?>')">Delete</button>
                                                            </td>
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
                <?php endif; ?>
            </div>
            
        </div>
    </div>
</div>

<script>
    var slotId = '';
        function cancelSection() {
            $("#openTime").val('');
            $("#closeTime").val('');

            $("#add_slot_master").show();
            $("#edit_internal_doctors_time_slot").hide();
            $("#cancelSection").hide();
        }  

        function editSection(openTime, closeTime, id, docId) {
            $("#openTime").val(openTime);
            $("#closeTime").val(closeTime);
            slotId = id;
            $("#add_slot_master").hide();
            $("#edit_internal_doctors_time_slot").show();
            $("#cancelSection").show();
        }  

        function editSlot(docId) {
            let openTime = $("#openTime").val();
            let closeTime = $("#closeTime").val();
            console.log(openTime);
            console.log(closeTime);
            console.log(slotId);
            console.log(docId);
            $.ajax({
                url: "<?php echo base_url ?>edit-internal-doctors-slot/" + openTime + '/' + closeTime + '/' + slotId + '/' + docId,
                success: function (result) {
                    console.log(result);
                    // window.location.reload();
                }
            });
        }  

        function deleteSlot(id, docId) {
            $.ajax({
                url: "<?php echo base_url ?>delete-internal-doctors-slot/" + id + '/' + docId,
                success: function (result) {
                    window.location.reload();
                }
            });
        }

    var aadharDuplicate = $("#aadharDuplicate");
    var panDuplicate = $("#panDuplicate");
    var usernameDuplicate = $("#usernameDuplicate");

    // function checkAdharNo(adharNo) {
    //     if (adharNo.length == 12) {
    //         aadharDuplicate.text("");
    //         $.ajax({
    //             url: "<?php echo base_url ?>check_aadhaar/" + adharNo,
    //             success: function (result) {
    //                 console.log(result);
    //                 if (result == "success") {
    //                     aadharDuplicate.text("");
    //                 } else {
    //                     aadharDuplicate.text("Duplicate Aadhar Number found");
    //                 }
    //             }
    //         });
    //     } else {
    //         aadharDuplicate.text("Enter valid Aadhaar number");
    //     }

    // }

    // function checkPan(panno) {
    //     if (panno.length == 10) {
    //         panDuplicate.text("");
    //         $.ajax({
    //             url: "<?php echo base_url ?>check_pan/" + panno,
    //             success: function (result) {
    //                 console.log(result);
    //                 if (result == "success") {
    //                     panDuplicate.text("");
    //                 } else {
    //                     panDuplicate.text("Duplicate Pan Number found");
    //                 }
    //             }
    //         });
    //     } else {
    //         panDuplicate.text("Enter valid Pan number");
    //     }

    // }

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

<script>
    $(document).ready(function(){
        $('#table1').DataTable();
        $('#table2').DataTable();
        $('#table3').DataTable();
    });
</script>