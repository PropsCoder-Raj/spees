<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Referral</h5>
                    <!--end::Page Title-->

                </div>
                <!--end::Page Heading-->
            </div>
            <div class="d-flex align-items-center flex-wrap">
                <?php if($edit): ?>
                <a href="<?php echo base_url; ?>referral"
                    class="btn btn-danger btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3">Back</a>
                <?php else: ?>
                <button class="btn btn-primary btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3"
                    data-toggle="collapse" data-target="#branchCard">Add Referral</button>
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
            <div class="row <?php if(!$edit) echo "collapse"; ?> " id="branchCard">
                <div class="col-lg-12">
                    <div class="card card-custom  gutter-b">
                        <div class="card-header border-0 pt-1">
                            <h3 class="card-title ml-n6">
                                <span
                                    class="card-label font-weight-bolder font-size-h4 text-dark-75"><?php echo ($edit) ?  "Edit" : "Add"; ?>
                                    Referral</span>
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST" class="row">
                                <div class="form-group col-lg-6">
                                    <label for="usr">Hospital Name:</label>
                                    <input type="text" class="form-control" name="Hospital_Name"
                                        value="<?php echo $referral->Hospital_Name; ?>" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="usr">Doctor Name:</label>
                                    <input type="text" class="form-control" name="Doctor_Name"
                                        value="<?php echo $referral->Doctor_Name; ?>" required>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="usr">Mobile:</label>
                                    <input type="number" class="form-control" name="Mobile"
                                        value="<?php echo $referral->Mobile; ?>" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="usr">Email:</label>
                                    <input type="email" class="form-control" name="Email"
                                        value="<?php echo $referral->Email; ?>" required>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="usr">Date of Birth:</label>
                                    <input type="date" class="form-control" name="DOB"
                                        value="<?php echo $referral->DOB; ?>" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="usr">Date of Anniversary:</label>
                                    <input type="date" class="form-control" name="DOA"
                                        value="<?php echo $referral->DOA; ?>" required>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="usr">Username:</label>
                                    <input type="text" class="form-control" name="Username"
                                        value="<?php echo $referral->Username; ?>" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="usr">Password:</label>
                                    <input type="text" class="form-control" name="Password"
                                        value="<?php echo $referral->Password; ?>" required>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="pwd">Address:</label>
                                    <textarea type="text" class="form-control"
                                        name="Address"><?php echo $referral->Address; ?></textarea>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="usr">Reward:</label>
                                    <input type="text" class="form-control" name="Reward"
                                        value="<?php echo $referral->Reward; ?>" required>
                                </div>


                                <div class="col-lg-12">
                                    <div class="row">
                                        <?php if($edit): ?>
                                        <button type="submit" name="edit_referral"
                                            class="btn btn-primary col-lg-2">Submit</button>
                                        <?php else: ?>
                                        <button type="submit" name="add_referral"
                                            class="btn btn-primary col-lg-2">Submit</button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-custom  gutter-b">
                        <div class="card-body d-flex align-items-center justify-content-between pt-0 flex-wrap">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>SR</th>
                                            <th>Hospital Name</th>
                                            <th>Doctor Name</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>DOB</th>
                                            <th>DOA</th>
                                            <th>Reward</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                        <thead>
                                        <tbody>
                                            <?php $i = 1; foreach($this->main_model->getReferredData() as $item){ ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $item->Hospital_Name; ?></td>
                                                <td><?php echo $item->Doctor_Name; ?></td>
                                                <td><?php echo $item->Mobile; ?></td>
                                                <td><?php echo $item->Email; ?></td>
                                                <td><?php echo $item->DOB; ?></td>
                                                <td><?php echo $item->DOA; ?></td>
                                                <td><?php echo $item->Reward; ?></td>
                                                <td><?php echo $item->Address; ?></td>
                                                
                                                </td>
                                                <td><a href="<?php echo base_url; ?>/referral/<?php echo $item->Id; ?>"
                                                        class="btn btn-warning">Edit</a></td>
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
    $(document).ready(function(){
        $('#table1').DataTable();
        $('#table2').DataTable();
        $('#table3').DataTable();
    });
</script>