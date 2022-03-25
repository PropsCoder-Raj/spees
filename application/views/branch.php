<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Branches</h5>
                    <!--end::Page Title-->

                </div>
                <!--end::Page Heading-->
            </div>
            <div class="d-flex align-items-center flex-wrap">
				<?php if($edit): ?>
                    <a href="<?php echo base_url; ?>branches" class="btn btn-danger btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3">Back</a>
                <?php else: ?>
				    <button class="btn btn-primary btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3" data-toggle="collapse" data-target="#branchCard">Add Branch</button>
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
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75"><?php echo ($edit) ?  "Edit" : "Add"; ?> Branches</span>
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                            <div class="form-group">
                                <label for="usr">Branch Name:</label>
                                <input type="text" class="form-control" name="name" value="<?php echo $branch->Name; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Branch Address:</label>
                                <textarea type="text" class="form-control" name="address"><?php echo $branch->Address; ?></textarea>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-4">
                                    <label for="pwd">City:</label>
                                    <input type="text" class="form-control" name="city" required value="<?php echo $branch->City; ?>">
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="pwd">Pin:</label>
                                    <input type="number" class="form-control" name="pin" required value="<?php echo $branch->Pin; ?>">
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="sel1">Status:</label>
                                    <select class="form-control" name="status" required>
                                    <?php if($branch->Is_Active == 1): ?>
                                      <option value="1" selected>Active</option>
                                      <option value="0">In Active</option>
                                    <?php elseif($branch->Is_Active == 0): ?>
                                        <option value="1">Active</option>
                                        <option value="0" selected>In Active</option>

                                    <?php endif; ?>
                                    </select>
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-lg-3">
                                    <label for="pwd">Contact Person Name:</label>
                                    <input type="text" class="form-control" name="contact_name" required value="<?php echo $branch->Contact_Name; ?>">
                                </div>
                                <div class="form-group col-lg-3">
                                    <label for="pwd">Contact Person Email:</label>
                                    <input type="email" class="form-control" name="contact_email" required value="<?php echo $branch->Contact_Email; ?>">
                                </div>
                                <div class="form-group col-lg-3">
                                    <label for="pwd">Contact Person Mobile:</label>
                                    <input type="number" class="form-control" name="contact_mobile" required value="<?php echo $branch->Contact_Mobile; ?>">
                                </div>
                                <div class="form-group col-lg-3">
                                    <label for="pwd">Contact Person Designation:</label>
                                    <input type="text" class="form-control" name="contact_designation" required value="<?php echo $branch->Contact_Designation; ?>">
                                </div>
                            </div>

                            <div class="row">
                                <?php if($edit): ?>
                                    <button type="submit" name="edit_branch" class="btn btn-primary col-lg-2">Submit</button>
                                <?php else: ?>
                                    <button type="submit" name="add_branch" class="btn btn-primary col-lg-2">Submit</button>
                                <?php endif; ?>
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
                                        <th>Branch Name</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>Pin</th>
                                        <th>Person Name</th>
                                        <th>Designation</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                <thead>
                                <tbody>
                                    <?php $i = 1; foreach($this->main_model->getBranchData() as $item){ ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $item->Name; ?></td>
                                            <td><?php echo $item->Address; ?></td>
                                            <td><?php echo $item->City; ?></td>
                                            <td><?php echo $item->Pin; ?></td>
                                            <td><?php echo $item->Contact_Name; ?></td>
                                            <td><?php echo $item->Contact_Designation; ?></td>
                                            <td><?php echo $item->Contact_Mobile; ?></td>
                                            <td><?php echo $item->Contact_Email; ?></td>
                                            <td><a href="<?php echo base_url; ?>/branches/<?php echo $item->Id; ?>" class="btn btn-warning">Edit</a></td>
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