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
            
            <div class="d-flex align-items-center flex-wrap">
            <form method="get" action="" class="form-inline">
            <div class="form-group">
                <label for="email">Start Date</label>
                <input type="date" class="form-control" name="startDate" id="startDate" required>
            </div> &nbsp;
            <div class="form-group">
                <label for="email">End Date</label>
                <input type="date" class="form-control" name="endDate" id="endDate" required>
            </div>&nbsp;
                <button class="btn btn-warning btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3" type="submit" name="filter">Apply Filter</button>
                </form>
                <?php if($filterQuery != ""): ?>
                    <button class="btn btn-danger btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3" type="button" onclick="location.replace('<?php echo base_url; ?>canceled-appointment-list')">Clear</button>
                <?php endif; ?>
                <?php if($this->session->userdata('Role') == 4 || $this->session->userdata('Role') == 6): ?>
                <button class="btn btn-primary btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3"
                    data-toggle="collapse" data-target="#appoitmentCard">Schedule Appointment</button>
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
                                <table class="table table-hover table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>SR</th>
                                            <th>Patient Name</th>
                                            <th>Gender</th>
                                            <th>Age</th>
                                            <th>Referred From</th>
                                            <th>Referred To</th>
                                            <th>Procedure</th>
                                            <th>Date</th>
                                            <th>Note</th>
                                            <th>Action</th>
                                        </tr>
                                        <thead>
                                        <tbody>
                                            <?php $i = 1; foreach($this->main_model->getFullWaitingAppoitment($this->session->userdata('Branch_Id'),$filterQuery) as $item){ ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $item->Prefix; ?>. <?php echo $item->Patient_Name; ?>
                                                </td>
                                                <td><?php echo $item->Patient_Gender; ?></td>
                                                <td><?php echo $item->Patient_Age; ?></td>
                                                <td><?php echo ($item->Referred_From !== "-" && $item->Referred_From !== "" && $item->Referred_From !== "null") ? $this->main_model->getReferredData($item->Referred_From)[0]->Doctor_Name : $item->Referred_From; ?>
                                                </td>
                                                <td><?php echo $item->Doctor_Name; ?></td>
                                                <td><?php echo $this->main_model->getProcedures($item->Procedure_Id)[0]->Procedure_Name; ?>
                                                </td>
                                                <td><?php echo $item->Date; ?><br>
                                                    <?php 
                                                        if($item->Slot_Id != null && $item->Slot_Id != ""){
                                                            $time = $this->main_model->getSingleSlot($item->Slot_Id);
                                                            echo $time->Open_Time ." - ".$time->Close_Time;
                                                        }
                                                    ?>


                                                </td>
                                                <td>
                                                    <?php echo $item->Note; ?>
                                                </td>
                                                <td>
                                                    <?php if($this->session->userdata('Role') == 2 || $this->session->userdata('Role') == 3 || $this->session->userdata('Role') == 4): ?>
                                                    <!-- <a href="<?php echo base_url; ?>cancel-appoitment/<?php echo $item->Id; ?>" data-toggle="tooltip" title="Cancel Appointment"><i class="fa fa-times text-danger"></i></a> -->

                                                    <button class="btn"
                                                        onclick="showCancelBox('<?php echo $item->Id; ?>','<?php echo $item->Patient_Name; ?>')"
                                                        data-toggle="tooltip" title="Cancel Appointment"><i
                                                            class="fa fa-times text-danger"></i></button>
                                                    <?php endif; ?>

                                                    <?php if($this->session->userdata('Role') == 2 || $this->session->userdata('Role') == 3 || $this->session->userdata('Role') == 4): ?>
                                                    <a style="cursor:pointer"
                                                        onclick="showAttendBox('<?php echo $item->Id; ?>','<?php echo $item->Patient_Name; ?>','<?php echo $item->Patient_Id; ?>')"
                                                        data-toggle="tooltip" title="Mark as Attended"><i
                                                            class="fa fa-check text-primary"></i></a>
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
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Forms</span>
                            </h3>
                        </div>
                        <div class="card-body d-flex align-items-center justify-content-between pt-0 flex-wrap">
                            <form action="" method="POST" enctype="multipart/form-data" style="width: -webkit-fill-available;">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <?php foreach($departmentformstransData as $item) : ?>
                                            <div style="padding: 15px 0;">
                                                <span> <?php echo $this->main_model->getSingleFormsmaster($item->FormsId)->Name; ?> </span>
                                                <a style="cursor: pointer;" onclick="openForm('<?php echo $item->FormsId; ?>')" class="card-link float-right">Form link</a>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card card-custom  gutter-b">
                        <div class="card-header border-0 pt-1">
                            <h3 class="card-title ml-n6">
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Patient
                                    Remark</span>
                            </h3>
                        </div>
                        <div class="card-body d-flex align-items-center justify-content-between pt-0 flex-wrap">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label for="usr">Patient Name:</label>
                                        <input type="text" class="form-control" id="remark_patient_name"
                                            readonly="readonly" disabled>
                                        <input type="hidden" name="apId" id="RemarkApId">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label for="usr">Recommended Department:</label>
                                        <select class="form-control" name="recommended">
                                            <option value="0" selected>None</option>
                                            <?php foreach($this->main_model->getDepartmentData() as $item): ?>
                                            <option value="<?php echo $item->Id ?>"><?php echo $item->Name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label for="usr">Follow up Date:</label>
                                        <input type="date" class="form-control" name="follow_up_date">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label for="usr">Remark:</label>
                                        <textarea type="text" class="form-control" name="remark" id="patientRemark"
                                            placeholder="Remark or Info for future purposes"></textarea>
                                    </div>
                                </div>
                                <button type="submit" name="add_doctor_remark"
                                    class="btn btn-primary col-lg-4">Submit</button>
                                <button onclick="closeAddRemark()" ; class="btn btn-link col-lg-4">Close</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" id="addCancelRemark" style="display:none;">
                    <div class="card card-custom  gutter-b">
                        <div class="card-header border-0 pt-1">
                            <h3 class="card-title ml-n6">
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Cancel
                                    Appointment</span>
                            </h3>
                        </div>
                        <div class="card-body d-flex align-items-center justify-content-between pt-0 flex-wrap">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="row">

                                    <div class="form-group col-lg-12">
                                        <label for="usr">Patient Name:</label>
                                        <input type="text" class="form-control" id="cancel_patient_name"
                                            readonly="readonly" disabled>
                                        <input type="hidden" name="apId" id="cancelRemarkApId">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label for="usr">Remark:</label>
                                        <textarea type="text" class="form-control" name="remark"
                                            placeholder="Enter Remark"></textarea>
                                    </div>
                                </div>
                                <button type="submit" name="add_cancel_remark"
                                    class="btn btn-primary col-lg-4">Submit</button>
                                <button onclick="closeCancelBox()" ; class="btn btn-link col-lg-4">Close</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<script>
$(document).ready(function() {
    $('#table1').DataTable();
    $('#table2').DataTable();
    $('#table3').DataTable();
});
var p_id = '';

function showAttendBox(id, name, pid) {
    $("#waitingAppot").removeClass('col-lg-12');
    $("#waitingAppot").addClass('col-lg-8');
    $("#remark_patient_name").val(name);
    $("#RemarkApId").val(id);
    $("#addRemark").css('display', "block");
    p_id = pid;
}

function closeAddRemark() {
    $("#addRemark").css('display', "none");
    $("#waitingAppot").addClass('col-lg-12');
}




function showCancelBox(id, name) {
    $("#waitingAppot").removeClass('col-lg-12');
    $("#waitingAppot").addClass('col-lg-8');
    $("#cancel_patient_name").val(name);
    $("#cancelRemarkApId").val(id);
    $("#addCancelRemark").css('display', "block");
    p_id = '';
}

function closeCancelBox() {
    $("#addCancelRemark").css('display', "none");
    $("#waitingAppot").addClass('col-lg-12');
}

function openForm(form_id) {
    window.open("<?php echo base_url ?>forms/" + form_id + '/' + p_id + '/1','_blank');
}
</script>