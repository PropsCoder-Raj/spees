<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Recommended Patients</h5>
                    <!--end::Page Title-->

                </div>
                <!--end::Page Heading-->
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
                        <div class="card-header border-0 pt-1">
                            <h3 class="card-title ml-n6">
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Patients</span>
                            </h3>
                        </div>
                        <div class="card-body d-flex align-items-center justify-content-between pt-0 flex-wrap">
                            <div class="table-responsive">
                            <?php if($this->session->userdata('Role') == 3 || $this->session->userdata('Role') == 2): ?>
                                <table class="table table-hover table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>SR</th>
                                            <th>Patient Name</th>
                                            <th>Department</th>
                                            <th>Date</th>
                                        </tr>
                                        <thead>
                                        <tbody>
                                            <?php $i = 1; foreach($this->main_model->getRecommendedByDoctor($this->session->userdata('Id')) as $item){ ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $item->Patient_Name; ?></td>
                                                <td><?php echo $item->Department_Name; ?></td>
                                                <td><?php echo $item->Created_On; ?></td>
                                                </td>
                                            </tr>
                                            <?php $i++; } ?>
                                        </tbody>
                                </table>
                            <?php else: ?>
                                <table class="table table-hover table-striped" id="table2">
                                    <thead>
                                        <tr>
                                            <th>SR</th>
                                            <th>Patient Name</th>
                                            <th>Professional Name</th>
                                            <th>Department</th>
                                            <th>Date</th>
                                        </tr>
                                        <thead>
                                        <tbody>
                                            <?php $i = 1; foreach($this->main_model->getRecommendedByBranch($this->session->userdata('Branch_Id')) as $item){ ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $item->Patient_Name; ?></td>
                                                <td><?php echo $item->Doctor_Name; ?></td>
                                                <td><?php echo $item->Department_Name; ?></td>
                                                <td><?php echo $item->Created_On; ?></td>
                                                </td>
                                            </tr>
                                            <?php $i++; } ?>
                                        </tbody>
                                </table>
                            <?php endif; ?>
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