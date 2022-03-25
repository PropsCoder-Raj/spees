<style>
.btn .dropdown-toggle .btn-default {
    display: none !important;
}
</style>

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">
                        <img src="<?php echo assets_url; ?>media/query.png" class="h-40px  align-self-center"
                            alt=""><span class="h5 text-dark font-weight-bold my-1 mr-5">Forms Master</span>
                    </h5>
                    <!--end::Page Title-->

                </div>
                <!--end::Page Heading-->
            </div>
            <div class="d-flex align-items-center flex-wrap">

                <div class="d-flex align-items-center flex-wrap">
                    <?php if($edit){ ?>
                    <a href="<?php echo base_url; ?>forms-master"
                        class="btn btn-danger btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3">Back</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-column-fluid">

        <form action="" method="POST" style="width: 100%">
            <div class="container">
                <?php if($edit == true){ ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-custom  gutter-b">
                            <div class="card-header border-0 pt-1">
                                <h3 class="card-title ml-n6">
                                    <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Edit Forms
                                        Master</span>
                                </h3>
                            </div>
                            <div class="card-body d-flex align-items-center justify-content-between pt-0 flex-wrap">
                                <div class="row" style="width: 100%">
                                    <div class="col-lg-12">
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Form Name :</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="formName" name="formName"
                                                    placeholder="Enter Form Name"
                                                    value="<?php echo $formsdata->Name; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary float-right"
                                            name="update_form_master" id="add_progress_report">Update Form
                                            Master</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-custom  gutter-b">
                            <div class="card-header border-0 pt-1">
                                <h3 class="card-title ml-n6">
                                    <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Forms
                                        Master</span>
                                </h3>
                            </div>
                            <div class="card-body d-flex align-items-center justify-content-between pt-0 flex-wrap">
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped" id="table1">
                                        <thead>
                                            <tr>
                                                <th>SR</th>
                                                <th>Name</th>
                                                <th>Preview</th>
                                                <th>Action</th>
                                            </tr>
                                            <thead>
                                            <tbody>
                                                <?php $i = 1; foreach($formsData as $item){ ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $item->Name; ?></td>
                                                    <td>
                                                        <a href="<?php echo assets_url; ?>pdf/<?php echo $item->Preview; ?>.pdf" target="_blank"
                                                            class="btn btn-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-eye-fill"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                                <path
                                                                    d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                            </svg></a>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo base_url; ?>forms-master/<?php echo $item->Id; ?>"
                                                            class="btn btn-warning">Edit</a>
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
        </form>
    </div>
</div>

<script type="text/javascript">
function updateStatus(id) {
    $.ajax({
        url: "<?php echo base_url ?>forms-master/" + id,
    });
}
</script>

<script>
$(document).ready(function() {
    $('#table1').DataTable();
});
</script>