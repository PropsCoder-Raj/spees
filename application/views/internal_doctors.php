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
            <a href="<?php echo base_url; ?>add-internal-doctors" class="btn btn-primary btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3" >Add Internal Professional</a>
			</div>
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-custom  gutter-b">
                        <div class="card-body d-flex align-items-center justify-content-between pt-0 flex-wrap">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>SR</th>
                                            <th></th>
                                            <th>Name</th>
                                            <th>Branch</th>
                                            <th>Department</th>
                                            <th>Username</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    <thead>
                                    <tbody>
                                        <?php $i = 1; foreach($this->main_model->getInternalDoctorData() as $item){ ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><img src="<?php echo upload_url.$item->Profile_Image; ?>" / width="30px"></td>
                                                <td><?php echo $item->Name; ?></td>
                                                <td><?php echo $this->main_model->getBranchData($item->Branch_Id)[0]->Name; ?></td>
                                                <td><?php echo $this->main_model->getDepartmentData($item->Department_Id)[0]->Name; ?></td>
                                                <td><?php echo $item->Username; ?></td>
                                                <td><?php echo $item->Mobile; ?></td>
                                                <td><?php echo $item->Email; ?></td>
                                                <td>

                                                    <?php echo ($item->Is_Active == 1) ? '<span class="btn btn-success">A</span>' : '<span class="btn btn-danger">I</span>'; ?>
                                                </td>
                                                <td><a href="<?php echo base_url; ?>internal-doctors/<?php echo $item->Id; ?>" class="btn btn-warning">Edit</a></td>
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