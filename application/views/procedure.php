<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Procedure</h5>
                    <!--end::Page Title-->

                </div>
                <!--end::Page Heading-->
            </div>
            <div class="d-flex align-items-center flex-wrap">
				<?php if($edit): ?>
                    <a href="<?php echo base_url; ?>procedure" class="btn btn-danger btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3">Back</a>
                <?php else: ?>
				    <button class="btn btn-primary btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3" data-toggle="collapse" data-target="#branchCard">Add Procedure</button>
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
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75"><?php echo ($edit) ?  "Edit" : "Add"; ?> Procedure</span>
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST" class="row">
                            <div class="form-group col-lg-6">
                                <label for="usr">Procedure Name:</label>
                                <input type="text" class="form-control" name="Procedure_Name" value="<?php echo $procedure->Procedure_Name; ?>" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="usr">Department:</label>
                                <select class="form-control" name="Department_Id" required>
                                    <option selected disabled>Select Department</option>
                                    <?php foreach($this->main_model->getDepartmentData() as $item): ?>
                                        <?php if($procedure->Department_Id == $item->Id): ?>
                                            <option selected value="<?php echo $item->Id; ?>"><?php echo $item->Name; ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo $item->Id; ?>"><?php echo $item->Name; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>

                            </div>
                            <div class="form-group col-lg-6">
                                <label for="usr">Fees:</label>
                                <input type="text" class="form-control" name="Fees" value="<?php echo $procedure->Fees; ?>" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="pwd">Description:</label>
                                <textarea type="text" class="form-control" name="Description"><?php echo $procedure->Description; ?></textarea>
                            </div>
                            <div class="col-lg-12">
                            <div class="row">
                                <?php if($edit): ?>
                                    <button type="submit" name="edit_procedure" class="btn btn-primary col-lg-2">Submit</button>
                                <?php else: ?>
                                    <button type="submit" name="add_procedure" class="btn btn-primary col-lg-2">Submit</button>
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
                                        <th>Procedure Name</th>
                                        <th>Description</th>
                                        <th>Fees</th>
                                        <th>Department</th>
                                        <th>Action</th>
                                    </tr>
                                <thead>
                                <tbody>
                                    <?php $i = 1; foreach($this->main_model->getProceduresData() as $item){ ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $item->Procedure_Name; ?></td>
                                            <td><?php echo $item->Description; ?></td>
                                            <td>Rs. <?php echo $item->Fees; ?></td>
                                            <td><?php echo $this->main_model->getDepartmentData($item->Department_Id)[0]->Name ; ?></td>
                                            <td><a href="<?php echo base_url; ?>/procedure/<?php echo $item->Procedures_Id; ?>" class="btn btn-warning">Edit</a></td>
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