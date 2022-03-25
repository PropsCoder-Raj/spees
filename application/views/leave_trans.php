<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Manage Leave</h5>
                    <!--end::Page Title-->

                </div>
                <!--end::Page Heading-->
            </div>
            <?php if($this->session->userdata('Role') != 1): ?>
                <div class="d-flex align-items-center flex-wrap">
                    <button class="btn btn-primary btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3"
                        data-toggle="collapse" data-target="#appoitmentCard">Apply Leave</button>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <p style="Color:Red"><?php echo $error_msg; ?></p>
            <p style="Color:green"><?php echo $success_msg; ?></p>
            <div class="row collapse" id="appoitmentCard">
                <div class="col-xl-12 col-xxl-12">
                    <div class="card card-custom">
                        <div class="card-header flex-wrap border-0 pt-6 pb-0">
                            <div class="card-title">
                                <h3 class="card-label">Apply Leave
                                </h3>
                            </div>
                        </div>
                        <div class="card-body py-0 mb-1">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="row">

                                    <div class="form-group col-lg-6">
                                        <label for="usr">Date:</label>
                                        <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>"
                                            name="date" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="usr">Reason:</label>
                                        <textarea type="text" class="form-control" value="" name="reason"
                                            required></textarea>
                                    </div>

                                </div>
                                <div class="row">
                                    <button type="submit" name="add_leave"
                                        class="btn btn-primary col-lg-4">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-custom  gutter-b">
                        <div class="card-header border-0 pt-1">
                            <h3 class="card-title ml-n6">
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Leaves
                                    Transactions</span>
                            </h3>
                        </div>
                        <div class="card-body d-flex align-items-center justify-content-between pt-0 flex-wrap">
                            <div class="table-responsive">
                            <?php if($this->session->userdata('Role') != 1): ?>
                                <table class="table table-hover table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>SR</th>
                                            <th>Date</th>
                                            <th>Reason</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        <thead>
                                        <tbody>
                                            <?php $i = 1; foreach($this->main_model->getLeaveTransData($this->session->userdata('Id')) as $item){ ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $item->Date; ?></td>
                                                <td><p data-toggle="tooltip" title="<?php echo $item->Reason; ?>"><?php echo $item->Note; ?></p>
                                                </td>
                                                <td class="text-left pl-4">
                                                    <?php if($item->Status == 0): ?>
                                                    <span
                                                        class="label font-weight-bold label-lg  label-light-danger label-inline"
                                                        data-toggle="tooltip" title="Rejected">R</span>
                                                    <?php elseif($item->Status == 1): ?>
                                                    <span
                                                        class="label font-weight-bold label-lg label-light-success label-inline"
                                                        data-toggle="tooltip" title="Granted">G</span>
                                                    <?php elseif($item->Status == 2): ?>
                                                    <span
                                                        class="label font-weight-bold label-lg label-light-warning label-inline"
                                                        data-toggle="tooltip" title="Pending">P</span>
                                                    <?php elseif($item->Status == 3): ?>
                                                        <span
                                                            class="label font-weight-bold label-lg label-light-danger label-inline"
                                                            data-toggle="tooltip" title="Cancelled">C</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                <?php if($item->Date > date('Y-m-d')): ?>
                                                    <?php if($item->Status == 2): ?>
                                                        <a href="<?php echo base_url; ?>cancel-leave/<?php echo $item->Id; ?>" data-toggle="tooltip" title="Cancel Leave"><i class="fa fa-times text-danger"></i></a>
                                                    <?php else: echo "-"; endif; ?>
                                                <?php else: echo "-"; endif; ?>
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
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Role</th>
                                            <th>Reason</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        <thead>
                                        <tbody>
                                            <?php $i = 1; foreach($this->main_model->getAllLeaveForAdmin() as $item){ ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $item->Name; ?></td>
                                                <td><?php echo $item->Date; ?></td>
                                                <td>
                                                    <?php if($item->Role == 1) echo "Admin"; ?>
                                                    <?php if($item->Role == 2) echo "Internal Professional"; ?>
                                                    <?php if($item->Role == 3) echo "External Professional"; ?>
                                                    <?php if($item->Role == 4) echo "Receptionist"; ?>
                                                    <?php if($item->Role == 5) echo "Telecaller"; ?>
                                                    <?php if($item->Role == 6) echo "TRC Manager"; ?>

                                                </td>
                                                <td><p data-toggle="tooltip" title="<?php echo $item->Reason; ?>"><?php echo $item->Reason; ?></p>
                                                </td>
                                                <td class="text-left pl-4">
                                                    <?php if($item->Status == 0): ?>
                                                    <span
                                                        class="label font-weight-bold label-lg  label-light-danger label-inline"
                                                        data-toggle="tooltip" title="Rejected">R</span>
                                                    <?php elseif($item->Status == 1): ?>
                                                    <span
                                                        class="label font-weight-bold label-lg label-light-success label-inline"
                                                        data-toggle="tooltip" title="Granted">G</span>
                                                    <?php elseif($item->Status == 2): ?>
                                                    <span
                                                        class="label font-weight-bold label-lg label-light-warning label-inline"
                                                        data-toggle="tooltip" title="Pending">P</span>
                                                    <?php elseif($item->Status == 3): ?>
                                                        <span
                                                            class="label font-weight-bold label-lg label-light-danger label-inline"
                                                            data-toggle="tooltip" title="Cancelled">C</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                        
                                                    <?php if($item->Status == 2): ?>
                                                        <a href="<?php echo base_url; ?>grant-leave/<?php echo $item->Id; ?>"  data-toggle="tooltip" title="Grant Leave"><i class="fa fa-check text-success"></i></a> &nbsp;&nbsp;
                                                        <a href="<?php echo base_url; ?>cancel-leave/<?php echo $item->Id; ?>" data-toggle="tooltip" title="Cancel Leave"><i class="fa fa-times text-danger"></i></a>
                                                    <?php elseif($item->Status == 1): ?>
                                                        <a href="<?php echo base_url; ?>cancel-leave/<?php echo $item->Id; ?>" data-toggle="tooltip" title="Cancel Leave"><i class="fa fa-times text-danger"></i></a>
                                                    <?php else: echo "-"; endif; ?>
                                                    
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