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
                                            <th>Gender</th>
                                            <th>Age</th>
                                            <th>Referred From</th>
                                            <th>Referred To</th>
                                            <th>Procedure</th>
                                            <th>Date</th>
                                            <th>Note</th>
                                            <th style="width: 25% !important;">Action</th>
                                        </tr>
                                        <thead>
                                        <tbody>
                                            <?php $i = 1; foreach($this->main_model->getFullAttendedAppoitment($this->session->userdata('Branch_Id'),$filterQuery) as $item){ ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $item->Prefix; ?>. <?php echo $item->Patient_Name; ?></td>
                                                <td><?php echo $item->Patient_Gender; ?></td>
                                                <td><?php echo $item->Patient_Age; ?></td>
                                                <td><?php echo ($item->Referred_From !== "-" && $item->Referred_From !== "" && $item->Referred_From !== "null") ? $this->main_model->getReferredData($item->Referred_From)[0]->Doctor_Name : $item->Referred_From; ?></td>
                                                <td><?php echo $item->Doctor_Name; ?></td>
                                                <td><?php echo $this->main_model->getProcedures($item->Procedure_Id)[0]->Procedure_Name; ?></td>
                                                <td><?php echo $item->Date; ?>
                                                    <br>
                                                    <?php 
                                                        if($item->Slot_Id != null && $item->Slot_Id != ""){
                                                            $time = $this->main_model->getSingleSlot($item->Slot_Id);
                                                            echo $time->Open_Time ." - ".$time->Close_Time;
                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <p data-toggle="tooltip" title="<?php echo $item->Note; ?>"><?php echo $item->Note; ?><?php echo $item->Id; ?><?php echo $item->Patient_Name; ?><?php echo $item->Patient_Id; ?></p>
                                                </td>
                                                <td>
                                                    
                                                <?php if($this->session->userdata('Role') == 2 || $this->session->userdata('Role') == 3 || $this->session->userdata('Role') == 4): ?>
                                                    <a style="cursor:pointer" class="btn btn-primary btn-sm" onclick="showAttendBox('<?php echo $item->Id; ?>','<?php echo $item->Patient_Name; ?>','<?php echo $item->Patient_Id; ?>')" data-toggle="tooltip" title="Mark as Attended"><i class="fa fa-eye"></i></a>
                                                    <a style="cursor:pointer" class="btn btn-primary btn-sm" onclick="showFeesBox('<?php echo $item->Id; ?>','<?php echo $item->Patient_Name; ?>', <?php echo $this->main_model->getProcedures($item->Procedure_Id)[0]->Fees; ?>)" data-toggle="tooltip" title="Collect Fees"><i class="fa fa-money"></i></a>
                                                    <a style="cursor:pointer" class="btn btn-danger btn-sm" href="print-invoice/<?php echo $item->Id; ?>" target="_blank" data-toggle="tooltip" title="Print Invoice"><i class="fa fa-print"></i></a>        
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
                                        <input type="number" class="form-control" name="feesAmount" id="feesAmount">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="usr">Type:</label>
                                        <select class="form-control" id="fees_type" name="fees_type">
                                                <option selected disabled>--Select--</option>
                                                <option value="Online">Online</option>
                                                <option value="Cash">Cash</option>
                                        </select>
                                </div>
                                
                                <div class="form-group col-lg-12">
                                        <label>Remark:</label>
                                        <input type="text" class="form-control" name="remark" id="remark">
                                </div>        
                                
                            </div>
                                <button type="submit" name="add_fees" class="btn btn-primary col-lg-4">Submit</button>
                                <button onclick="closeFeesBox()"; class="btn btn-link col-lg-4">Close</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<script>
    $(document).ready(function(){
        $('#table2').DataTable();
    });

    
    var p_id = '';

    function showAttendBox(id,name,pid){
        $("#attendedBox").removeClass('col-lg-12');
        $("#attendedBox").addClass('col-lg-8');
        $("#remark_patient_name").val(name);
        $("#RemarkApId").val(id);
        $("#addRemark").css('display',"block");
        p_id = pid;
    }

    function closeAddRemark(){
        $("#addRemark").css('display',"none");
        $("#attendedBox").addClass('col-lg-12');
    }

    function showFeesBox(id,name,fees){
        console.log("Fees: "+ fees);
        $("#attendedBox").removeClass('col-lg-12');
        $("#attendedBox").addClass('col-lg-8');
        $("#fees_patient_name").val(name);
        $("#feesAmount").val(fees);
        $("#feesApId").val(id);
        $("#addFees").css('display',"block");
    }

    function closeFeesBox(){
        $("#addFees").css('display',"none");
        $("#attendedBox").addClass('col-lg-12');
    }

    function openForm(form_id) {
        window.open("<?php echo base_url ?>forms/" + form_id + '/' + p_id + '/0','_blank');
    }
</script>