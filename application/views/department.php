<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Departments</h5>
                    <!--end::Page Title-->

                </div>
                <!--end::Page Heading-->
            </div>
            <div class="d-flex align-items-center flex-wrap">

                <div class="d-flex align-items-center flex-wrap">
                    <?php if($edit): ?>
                    <a href="<?php echo base_url; ?>departments"
                        class="btn btn-danger btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3">Back</a>
                    <?php else: ?>
                    <button class="btn btn-primary btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3"
                        data-toggle="collapse" data-target="#branchCard">Add Department</button>
                    <?php endif; ?>
                </div>
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
                                <span
                                    class="card-label font-weight-bolder font-size-h4 text-dark-75"><?php echo ($edit) ?  "Edit" : "Add"; ?>
                                    Department</span>
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="usr">Department Name:</label>
                                        <input type="text" class="form-control" name="name"
                                            value="<?php echo $department->Name; ?>" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="sel1">Branch:</label>
                                        <select class="form-control" name="branch" required>
                                            <option selected disabled>Select Branch</option>
                                            <?php foreach($this->main_model->getBranchData() as $item): ?>
                                            <option value="<?php echo $item->Id; ?>"
                                                <?php echo ($item->Id == $department->Branch_Id) ? "selected" : "" ;?>>
                                                <?php echo $item->Name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="usr">Forms:</label>
                                        <select class="form-control" id="app_forms" name="app_forms"
                                            onchange="addItem(this.value)">
                                            <option selected disabled>Select Forms</option>
                                            <?php foreach($this->main_model->getformsmaster() as $item): ?>
                                            <option value="<?php echo $item->Name; ?>">
                                                <?php echo $item->Name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table" id="FormsTable">
                                            <thead>
                                                <tr>
                                                    <th>Form Name</th>
                                                </tr>
                                            <tbody id="FormsTableTbody">
                                                <?php foreach ( $this->main_model->getDepartmentFormsmasterWithDepartmentId($departmentId) as $_item ) : ?>
                                                <tr>
                                                    <td>
                                                        <?php foreach ( $this->main_model->getSingleFormsmasterName($_item->FormsId) as $item ) {
                                                                        echo $item->Name;
                                                                    }
                                                                ?>
                                                    </td>
                                                    <td>
                                                        <!-- <a href="<?php echo base_url ?>delete-department-formstrans/<?php echo $_item->Id; ?>/<?php echo $departmentId; ?>" target="_blank" class="btn btn-danger" >
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
                                                                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
                                                            </svg>
                                                        </a> -->

                                                        <button onclick="deleteForm('<?php echo $_item->Id; ?>','<?php echo $departmentId; ?>')" class="btn btn-danger" >
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
                                                                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
                                                            </svg>
                                                        </botton>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <?php if($edit): ?>
                                    <button type="submit" name="edit_department"
                                        class="btn btn-primary col-lg-2">Submit</button>
                                    <?php else: ?>
                                    <button type="submit" name="add_department"
                                        class="btn btn-primary col-lg-2">Submit</button>
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
                                            <th>Department Name</th>
                                            <th>Branch Name</th>
                                            <th>Action</th>
                                        </tr>
                                        <thead>
                                        <tbody>
                                            <?php $i = 1; foreach($this->main_model->getDepartmentData() as $item){ ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $item->Name; ?></td>
                                                <td><?php echo $this->main_model->getBranchData($item->Branch_Id)[0]->Name; ?>
                                                </td>
                                                <td><a href="<?php echo base_url; ?>departments/<?php echo $item->Id; ?>"
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
var items = 0;

function addItem(name) {
    items++;

    var html = `
        <tr>
            <td>
                <span name="FormNames[]">` + name + `<span>
                <input type="text" class="form-control" id="FormNames` + items +
        `" name="FormNames[]" placeholder="Enter Baseline" value="` + name + `" style="display: none;"></td>
            <td><button type='button' class="btn btn-danger" onclick='deleteRow(this);'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
                  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
                    </svg></button></td>
        </tr>`;

    var row = document.getElementById("FormsTableTbody").insertRow();
    row.innerHTML = html;
}

function deleteRow(button) {
    items--;
    button.parentElement.parentElement.remove();
}
</script>

<script>
$(document).ready(function() {
    $('#table1').DataTable();
    $('#table2').DataTable();
    $('#table3').DataTable();
});

function deleteForm(id, dept_id) {
	    $.ajax({
	        url: "<?php echo base_url ?>delete-department-formstrans/" + id + '/' + dept_id,
	        success: function (result) {

	        }
	    });
	}
</script>