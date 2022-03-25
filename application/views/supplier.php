<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Suppliers</h5>
                    <!--end::Page Title-->

                </div>
                <!--end::Page Heading-->
            </div>
            <div class="d-flex align-items-center flex-wrap">
				<?php if($edit): ?>
                    <a href="<?php echo base_url; ?>supplier" class="btn btn-danger btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3">Back</a>
                <?php else: ?>
				    <button class="btn btn-primary btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3" data-toggle="collapse" data-target="#branchCard">Add Suppliers</button>
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
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75"><?php echo ($edit) ?  "Edit" : "Add"; ?> Supplier</span>
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST" class="row">
                            <div class="form-group col-lg-6">
                                <label for="usr">Firm Name:</label>
                                <input type="text" class="form-control" name="name" value="<?php echo $supplier->Name; ?>" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="usr">Billing Address:</label>
                                <textarea type="text" class="form-control" name="billingAddress" required><?php echo $supplier->Billing_Address; ?></textarea>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="pwd">City:</label>
                                <input type="text" class="form-control" name="city" value="<?php echo $supplier->City; ?>">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="pwd">State:</label>
                                <input type="text" class="form-control" name="state" value="<?php echo $supplier->State; ?>">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="pwd">Pin Code:</label>
                                <input type="number" class="form-control" name="pin" value="<?php echo $supplier->Pin; ?>"></input>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="pwd">Contact Name:</label>
                                <input type="text" class="form-control" name="contactName" value="<?php echo $supplier->Contact_Name; ?>">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="pwd">Designation:</label>
                                <input type="text" class="form-control" name="designation" value="<?php echo $supplier->Designation; ?>">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="pwd">Mobile:</label>
                                <input type="number" class="form-control" name="mobile" value="<?php echo $supplier->Mobile; ?>">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="pwd">Email:</label>
                                <input type="email" class="form-control" name="email" value="<?php echo $supplier->Email; ?>">
                            </div>
                            <div class="col-lg-12">
                            <div class="row">
                                <?php if($edit): ?>
                                    <button type="submit" name="edit_supplier" class="btn btn-primary col-lg-2">Submit</button>
                                <?php else: ?>
                                    <button type="submit" name="add_supplier" class="btn btn-primary col-lg-2">Submit</button>
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
                        <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>SR</th>
                                        <th>Firm Name</th>
                                        <th>Cont. Name</th>
                                        <th>Designation</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>City</th>
                                        <th>Pin</th>
                                        <th>State</th>
                                        <th>Action</th>
                                    </tr>
                                <thead>
                                <tbody>
                                    <?php $i = 1; foreach($this->main_model->getSupplierData() as $item){ ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $item->Name; ?></td>
                                            <td><?php echo $item->Contact_Name; ?></td>
                                            <td><?php echo $item->Designation; ?></td>
                                            <td><?php echo $item->Mobile; ?></td>
                                            <td><?php echo $item->Email; ?></td>
                                            <td><?php echo $item->City; ?></td>
                                            <td><?php echo $item->Pin; ?></td>
                                            <td><?php echo $item->State; ?></td>

                                            <td><a href="<?php echo base_url; ?>/supplier/<?php echo $item->Supplier_Id; ?>" class="btn btn-warning">Edit</a></td>
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