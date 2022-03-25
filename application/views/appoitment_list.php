<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Appointments</h5>
                    <!--end::Page Title-->

                </div>
                <!--end::Page Heading-->
            </div>
            <?php if($this->session->userdata('Role') == 4 || $this->session->userdata('Role') == 6): ?>
                <div class="d-flex align-items-center flex-wrap">
                    <button class="btn btn-primary btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3"
                        data-toggle="collapse" data-target="#appoitmentCard">Schedule Appointment</button>
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
                                <h3 class="card-label">Schedule Appointment
                                </h3>
                            </div>
                        </div>
                        <div class="card-body py-0 mb-1">
                            <p style="Color:Red"><?php echo $error_msg; ?></p>
                            <p style="Color:green"><?php echo $success_msg; ?></p>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label for="usr">Patient:</label>
                                        <select class="selectpicker form-control" name="patient" data-live-search="true"
                                            required>
                                            <option selected disabled>Select Patient</option>
                                            <?php foreach($this->main_model->getPatientData() as $item): ?>
                                            <?php echo $item->Name; ?>
                                            <option
                                                data-tokens="<?php echo $item->Name.' '.$item->Aadhar.' '.$item->Mobile.' '.$item->Pan; ?>"
                                                value="<?php echo $item->Id; ?>"><?php echo $item->Name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <label for="usr">Professionals:</label>
                                        <select class="selectpicker form-control" name="drid" data-live-search="true"
                                            required>
                                            <option selected disabled>Select Professional</option>
                                            <?php foreach($this->main_model->getDoctorsByBranch($this->session->userdata('Branch_Id')) as $item): ?>
                                            <?php echo $item->Name; ?>
                                            <option
                                                data-tokens="<?php echo $item->Name.' '.$item->Aadhar.' '.$item->Mobile.' '.$item->Pan; ?>"
                                                value="<?php echo $item->Id; ?>"><?php echo $item->Name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <label for="usr">Date:</label>
                                        <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>"
                                            name="date" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="usr">Note:</label>
                                        <textarea type="text" class="form-control" value="" name="note"
                                            required></textarea>
                                    </div>

                                </div>
                                <div class="row">
                                    <button type="submit" name="add_appoitment"
                                        class="btn btn-primary col-lg-4">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12" id="waitingAppot">
                    <div class="card card-custom  gutter-b">
                        <div class="card-header border-0 pt-1">
                            <h3 class="card-title ml-n6">
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Waiting
                                Appointments</span>
                            </h3>
                        </div>
                        <div class="card-body d-flex align-items-center justify-content-between pt-0 flex-wrap">
                            <div class="table-responsive">
                                <table class="table" id="table1">
                                    <thead>
                                        <tr>
                                            <th>SR</th>
                                            <th>Patient Name</th>
                                            <th>Branch</th>
                                            <th>Professional Name</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Note</th>
                                            <th>Action</th>
                                        </tr>
                                        <thead>
                                        <tbody>
                                            <?php $i = 1; foreach($this->main_model->getFullWaitingAppoitment($this->session->userdata('Branch_Id')) as $item){ ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $item->Prefix; ?>. <?php echo $item->Patient_Name; ?></td>
                                                <td><?php echo $this->main_model->getBranchData($item->Branch_Id)[0]->Name; ?>
                                                </td>
                                                <td><?php echo $item->Doctor_Name; ?></td>
                                                <td><?php echo $item->Date; ?></td>
                                                <td class="text-left pl-4">
                                                    <?php if($item->Status == 0): ?>
                                                    <span
                                                        class="label font-weight-bold label-lg  label-light-danger label-inline"
                                                        data-toggle="tooltip" title="Cancelled"></span>
                                                    <?php elseif($item->Status == 1): ?>
                                                    <span
                                                        class="label font-weight-bold label-lg label-light-success label-inline"
                                                        data-toggle="tooltip" title="Attended"></span>
                                                    <?php elseif($item->Status == 2): ?>
                                                    <span
                                                        class="label font-weight-bold label-lg label-light-warning label-inline"
                                                        data-toggle="tooltip" title="Waiting"></span>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <p data-toggle="tooltip" title="<?php echo $item->Note; ?>"><i
                                                            class="fa fa-eye"></i></p>
                                                </td>
                                                <td>
                                                    <?php if($this->session->userdata('Role') == 4 || $this->session->userdata('Role') == 6): ?>
                                                        <a href="<?php echo base_url; ?>cancel-appoitment/<?php echo $item->Id; ?>" data-toggle="tooltip" title="Cancel Appointment"><i class="fa fa-times text-danger"></i></a>
                                                    <?php endif; ?>

                                                    <?php if($this->session->userdata('Role') == 2 || $this->session->userdata('Role') == 3 || $this->session->userdata('Role') == 6): ?>
                                                        <a style="cursor:pointer" onclick="showAttendBox('<?php echo $item->Id; ?>','<?php echo $item->Patient_Name; ?>')" data-toggle="tooltip" title="Mark as Attended"><i class="fa fa-check text-primary"></i></a>
                                                    <?php endif; ?>
                                                    
                                                </td>
                                            </tr>
                                            <?php $i++; } ?>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" id="addRemark" style="display:none;">
                    <div class="card card-custom  gutter-b">
                        <div class="card-header border-0 pt-1">
                            <h3 class="card-title ml-n6">
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Patient Remark</span>
                            </h3>
                        </div>
                        <div class="card-body d-flex align-items-center justify-content-between pt-0 flex-wrap">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="row">

                                <div class="form-group col-lg-12">
                                    <label for="usr">Patient Name:</label>
                                    <input type="text" class="form-control" id="remark_patient_name" readonly="readonly" disabled>
                                    <input type="hidden" name="apId" id="RemarkApId">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="usr">Follow up Date:</label>
                                    <input type="date" class="form-control" name="follow_up_date">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="usr">Remark:</label>
                                    <textarea type="text" class="form-control" name="remark" id="patientRemark" placeholder="Remark or Info for future purposes"></textarea>
                                </div>
                            </div>
                                <button type="submit" name="add_doctor_remark" class="btn btn-primary col-lg-4">Submit</button>
                                <button onclick="closeAddRemark()"; class="btn btn-link col-lg-4">Close</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12" id="attendedBox">
                    <div class="card card-custom  gutter-b">
                        <div class="card-header border-0 pt-1">
                            <h3 class="card-title ml-n6">
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Attended
                                Appointments</span>
                            </h3>
                        </div>
                        <div class="card-body d-flex align-items-center justify-content-between pt-0 flex-wrap">
                            <div class="table-responsive">
                                <table class="table" id="table2">
                                    <thead>
                                        <tr>
                                            <th>SR</th>
                                            <th>Patient Name</th>
                                            <th>Branch</th>
                                            <th>Professional Name</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Note</th>
                                            <th>Action</th>
                                        </tr>
                                        <thead>
                                        <tbody>
                                            <?php $i = 1; foreach($this->main_model->getFullAttendedAppoitment($this->session->userdata('Branch_Id')) as $item){ ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $item->Prefix; ?>. <?php echo $item->Patient_Name; ?></td>
                                                <td><?php echo $this->main_model->getBranchData($item->Branch_Id)[0]->Name; ?>
                                                </td>
                                                <td><?php echo $item->Doctor_Name; ?></td>
                                                <td><?php echo $item->Date; ?></td>
                                                <td class="text-left pl-4">
                                                    <?php if($item->Status == 0): ?>
                                                    <span
                                                        class="label font-weight-bold label-lg  label-light-danger label-inline"
                                                        data-toggle="tooltip" title="Cancelled"></span>
                                                    <?php elseif($item->Status == 1): ?>
                                                    <span
                                                        class="label font-weight-bold label-lg label-light-success label-inline"
                                                        data-toggle="tooltip" title="Attended"></span>
                                                    <?php elseif($item->Status == 2): ?>
                                                    <span
                                                        class="label font-weight-bold label-lg label-light-warning label-inline"
                                                        data-toggle="tooltip" title="Waiting"></span>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <p data-toggle="tooltip" title="<?php echo $item->Note; ?>"><i
                                                            class="fa fa-eye"></i></p>
                                                </td>
                                                <td>
                                                    <?php if($item->Fees == ""): ?>
                                                        <?php if($this->session->userdata('Role') == 4 || $this->session->userdata('Role') == 6): ?>
                                                            <a style="cursor:pointer" onclick="showFeesBox('<?php echo $item->Id; ?>','<?php echo $item->Patient_Name; ?>')" data-toggle="tooltip" title="Collect Fees"><i class="fa fa-credit-card text-primary"></i></a>
                                                        <?php endif; ?>
                                                    <?php else: "-";endif; ?>
                                                </td>
                                            </tr>
                                            <?php $i++; } ?>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" id="addFees" style="display:none;">
                    <div class="card card-custom  gutter-b">
                        <div class="card-header border-0 pt-1">
                            <h3 class="card-title ml-n6">
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Fees</span>
                            </h3>
                        </div>
                        <div class="card-body d-flex align-items-center justify-content-between pt-0 flex-wrap">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="row">

                                <div class="form-group col-lg-12">
                                    <label for="usr">Patient Name:</label>
                                    <input type="text" class="form-control" id="fees_patient_name" readonly="readonly" disabled>
                                    <input type="hidden" name="feesApId" id="feesApId">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="usr">Amount:</label>
                                    <input type="number" class="form-control" name="feesAmount" id="feesAmount" placeholder="Enter Amount"></input>
                                </div>
                            </div>
                                <button type="submit" name="add_fees" class="btn btn-primary col-lg-4">Submit</button>
                                <button onclick="closeFeesBox()"; class="btn btn-link col-lg-4">Close</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-custom  gutter-b">
                        <div class="card-header border-0 pt-1">
                            <h3 class="card-title ml-n6">
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Cancelled
                                Appointments</span>
                            </h3>
                        </div>
                        <div class="card-body d-flex align-items-center justify-content-between pt-0 flex-wrap">
                            <div class="table-responsive">
                                <table class="table" id="table3">
                                    <thead>
                                        <tr>
                                            <th>SR</th>
                                            <th>Patient Name</th>
                                            <th>Branch</th>
                                            <th>Professional Name</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Note</th>
                                        </tr>
                                        <thead>
                                        <tbody>
                                            <?php $i = 1; foreach($this->main_model->getFullCancelledAppoitment($this->session->userdata('Branch_Id')) as $item){ ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $item->Prefix; ?>. <?php echo $item->Patient_Name; ?></td>
                                                <td><?php echo $this->main_model->getBranchData($item->Branch_Id)[0]->Name; ?>
                                                </td>
                                                <td><?php echo $item->Doctor_Name; ?></td>
                                                <td><?php echo $item->Date; ?></td>
                                                <td class="text-left pl-4">
                                                    <?php if($item->Status == 0): ?>
                                                    <span
                                                        class="label font-weight-bold label-lg  label-light-danger label-inline"
                                                        data-toggle="tooltip" title="Cancelled"></span>
                                                    <?php elseif($item->Status == 1): ?>
                                                    <span
                                                        class="label font-weight-bold label-lg label-light-success label-inline"
                                                        data-toggle="tooltip" title="Attended"></span>
                                                    <?php elseif($item->Status == 2): ?>
                                                    <span
                                                        class="label font-weight-bold label-lg label-light-warning label-inline"
                                                        data-toggle="tooltip" title="Waiting"></span>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <p data-toggle="tooltip" title="<?php echo $item->Note; ?>"><i
                                                            class="fa fa-eye"></i></p>
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
    </div>
</div>


<script>
    $(document).ready(function(){
        $('#table1').DataTable();
        $('#table2').DataTable();
        $('#table3').DataTable();
    });


    function showAttendBox(id,name){
        $("#waitingAppot").removeClass('col-lg-12');
        $("#waitingAppot").addClass('col-lg-8');
        $("#remark_patient_name").val(name);
        $("#RemarkApId").val(id);
        $("#addRemark").css('display',"block");
    }

    function closeAddRemark(){
        $("#addRemark").css('display',"none");
        $("#waitingAppot").addClass('col-lg-12');
    }

    function showFeesBox(id,name){
        $("#attendedBox").removeClass('col-lg-12');
        $("#attendedBox").addClass('col-lg-8');
        $("#fees_patient_name").val(name);
        $("#feesApId").val(id);
        $("#addFees").css('display',"block");
    }

    function closeFeesBox(){
        $("#addFees").css('display',"none");
        $("#attendedBox").addClass('col-lg-12');
    }
</script>