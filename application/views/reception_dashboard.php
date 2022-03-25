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
                <div class="d-flex align-items-center flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <img src="<?php echo assets_url; ?>media/images/reception.png" class="h-40px  align-self-center"
                        alt=""><span class=" h5 text-dark font-weight-bold my-1 mr-5">Reception Dashboard</span>
                    <!--end::Page Title-->

                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card card-custom card-stretch gutter-b" style="word-wrap:unset !important;">
                        <div class="card-header border-0 justify-content-around pt-6">
                            <h3 class="card-title flex-column ">
                                <span class=" text-center">
                                    Today's Appointment Status</span>
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-xl-3 col-sm-6 col-xs-6 col-md-6">
                                    <div class="bd-highlight">
                                        <div class="font-size-h5 text-dark bd-highlight">Total
                                            <a
                                                class="nav-link bgdrkgreen  shadow-sm brd justify-content-around text-center  w-70px ">
                                                <span
                                                    class=" pt-6 text-light  display4 font-weight-bold"><?php echo $this->main_model->getCurAppoitmentCount(); ?></span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-xl-3 col-sm-6 col-xs-6 col-md-6">
                                    <div class="bd-highlight">
                                        <div class="font-size-h5 text-dark bd-highlight">Attended
                                            <a
                                                class="nav-link indocTod  shadow-sm brd justify-content-around text-center  w-70px">
                                                <span
                                                    class=" pt-6 text-light display4 font-weight-bold"><?php echo $this->main_model->getCurAppoitmentCountByStatus(1); ?></span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-xl-3 col-sm-6 col-xs-6 col-md-6">
                                    <div class="bd-highlight">
                                        <div class="font-size-h5 text-dark bd-highlight">Waiting
                                            <a
                                                class="nav-link bgyello  shadow-sm brd justify-content-around text-center  w-70px">
                                                <span
                                                    class=" pt-6  text-light display4 font-weight-bold"><?php echo $this->main_model->getCurAppoitmentCountByStatus(2); ?></span></span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-xl-3 col-sm-6 col-xs-6 col-md-6">
                                    <div class="bd-highlight">
                                        <div class="font-size-h5 text-dark bd-highlight">Cancelled
                                            <a
                                                class="nav-link bgmred  shadow-sm brd justify-content-around text-center  w-70px ">
                                                <span
                                                    class=" pt-6   display4 text-light font-weight-bold"><?php echo $this->main_model->getCurAppoitmentCountByStatus(0); ?></span></span></a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">

                    <div class="card card-custom  gutter-a mb-4">
                        <div class="card-header border-0 pt-1">
                            <h3 class="card-title align-items-start flex-column">

                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75"><span
                                        class=""><img src="<?php echo assets_url; ?>media/images/internalDoctors.png"
                                            class="h-40px  align-self-center" alt=""></span>Patients Statistics</span>

                            </h3>
                        </div>
                        <div class="card-body pt-2">
                            <ul class="nav nav-pills nav-fill flex-nowrap">
                                <li class="nav-item w-90px ">
                                    <a class="nav-link d-flex flex-column indocYes shadow-sm h-90px " data-toggle="tab"
                                        href="#">

                                        <span class="nav-text pt-6 font-weight-bold  mgry">Yesterday</span>

                                        <span
                                            class="nav-text pt-3 pb-6 display5 mgry font-weight-bold"><?php echo $this->main_model->getDailyAppoitmentCount('CURDATE() - 1 ') ?></span>
                                    </a>

                                </li>
                                <li class="nav-item w-90px mx-5  ">
                                    <a class="nav-link d-flex flex-column indocTod shadow-sm h-90px" data-toggle="tab"
                                        href="#">

                                        <span class="nav-text pt-6 font-weight-bold text-light ">Today</span>

                                        <span
                                            class="nav-text pt-3 pb-6 display5 text-light font-weight-bold"><?php echo $this->main_model->getDailyAppoitmentCount('CURDATE()') ?></span>
                                    </a>
                                </li>
                                <li class="nav-item w-90px ">

                                    <a class="nav-link d-flex flex-column indocTom shadow-sm h-90px " data-toggle="tab"
                                        href="#">

                                        <span class="nav-text pt-6 font-weight-bold text-dark ">Tomorrow</span>

                                        <span
                                            class="nav-text pt-3 pb-6 display5 text-dark font-weight-bold"><?php echo $this->main_model->getDailyAppoitmentCount('CURDATE() + 1') ?></span>
                                    </a>


                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>


            <div class="row">
                <div class="col-lg-4">
                    <div class="card card-custom  gutter-a mb-4">
                        <div class="card-header border-0 pt-1">
                            <h3 class="card-title align-items-start flex-column mt-10 ">

                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">
                                    <div class="card-toolbar mt-n5">
                                        <span class=""><img
                                                src="<?php echo assets_url; ?>media/images/externalDoctors.png"
                                                class="h-40px  align-self-center" alt=""></span> <span
                                            class="display4 font-weight-bold txtpurple "></span>
                                        External Professionals</div>

                                </span></h3>
                            <div class="text-center font-size-h4 align-items-center">Patients Statistics</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-2">
                            <!--begin::Nav-->
                            <ul class="nav nav-pills nav-fill flex-nowrap">
                                <!--begin::Nav Item-->
                                <li class="nav-item w-90px ">
                                    <a class="nav-link d-flex flex-column indocYes shadow-sm h-90px " data-toggle="tab"
                                        href="#">

                                        <span class="nav-text pt-6 font-weight-bold  mgry">Yesterday</span>

                                        <span
                                            class="nav-text pt-3 pb-6 display5 mgry font-weight-bold"><?php echo $this->main_model->getDailyAppoitmentCountByRoleNoBranch('CURDATE() - 1 ',3,$this->session->userdata('Branch_Id')) ?></span>
                                    </a>

                                </li>
                                <!--begin::Nav Item-->
                                <!--end::Nav Item-->
                                <li class="nav-item w-90px mx-5  ">
                                    <a class="nav-link d-flex flex-column indocTod shadow-sm h-90px" data-toggle="tab"
                                        href="#">

                                        <span class="nav-text pt-6 font-weight-bold text-light ">Today</span>

                                        <span
                                            class="nav-text pt-3 pb-6 display5 text-light font-weight-bold"><?php echo $this->main_model->getDailyAppoitmentCountByRoleNoBranch('CURDATE()',3,$this->session->userdata('Branch_Id')) ?></span>
                                    </a>
                                </li>
                                <!--begin::Nav Item-->
                                <!--end::Nav Item-->
                                <li class="nav-item w-90px ">

                                    <a class="nav-link d-flex flex-column indocTom shadow-sm h-90px " data-toggle="tab"
                                        href="#">

                                        <span class="nav-text pt-6 font-weight-bold text-dark ">Tomorrow</span>

                                        <span
                                            class="nav-text pt-3 pb-6 display5 text-dark font-weight-bold"><?php echo $this->main_model->getDailyAppoitmentCountByRoleNoBranch('CURDATE() + 1 ',3,$this->session->userdata('Branch_Id')) ?></span>
                                    </a>


                                </li>
                                <!--end::Nav Item-->
                            </ul>
                            <!--end::Nav-->
                        </div>
                        <!--end::Body-->
                    </div>
                </div>

                <div class="col-lg-4">

                    <div class="card card-custom  gutter-a mb-4">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-1">
                            <h3 class="card-title align-items-start flex-column mt-10 ">

                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">
                                    <div class="card-toolbar mt-n5">
                                        <span class=""><img
                                                src="<?php echo assets_url; ?>media/images/internalDoctors.png"
                                                class="h-40px  align-self-center" alt=""></span> <span
                                            class="display4 font-weight-bold txthgreen "></span>
                                        Internal Professionals</div>

                                </span></h3>
                            <div class="text-center font-size-h4 align-items-center">Patients Statistics</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-2">
                            <!--begin::Nav-->
                            <ul class="nav nav-pills nav-fill flex-nowrap">
                                <!--begin::Nav Item-->
                                <li class="nav-item w-90px ">
                                    <a class="nav-link d-flex flex-column indocYes shadow-sm h-90px " data-toggle="tab"
                                        href="#">

                                        <span class="nav-text pt-6 font-weight-bold  mgry">Yesterday</span>

                                        <span
                                            class="nav-text pt-3 pb-6 display5 mgry font-weight-bold"><?php echo $this->main_model->getDailyAppoitmentCountByRoleNoBranch('CURDATE() - 1 ',2,$this->session->userdata('Branch_Id')) ?></span>
                                    </a>

                                </li>
                                <!--begin::Nav Item-->
                                <!--end::Nav Item-->
                                <li class="nav-item w-90px mx-5  ">
                                    <a class="nav-link d-flex flex-column indocTod shadow-sm h-90px" data-toggle="tab"
                                        href="#">

                                        <span class="nav-text pt-6 font-weight-bold text-light ">Today</span>

                                        <span
                                            class="nav-text pt-3 pb-6 display5 text-light font-weight-bold"><?php echo $this->main_model->getDailyAppoitmentCountByRoleNoBranch('CURDATE()',2,$this->session->userdata('Branch_Id')) ?></span>
                                    </a>
                                </li>
                                <!--begin::Nav Item-->
                                <!--end::Nav Item-->
                                <li class="nav-item w-90px ">

                                    <a class="nav-link d-flex flex-column indocTom shadow-sm h-90px " data-toggle="tab"
                                        href="#">

                                        <span class="nav-text pt-6 font-weight-bold text-dark ">Tomorrow</span>

                                        <span
                                            class="nav-text pt-3 pb-6 display5 text-dark font-weight-bold"><?php echo $this->main_model->getDailyAppoitmentCountByRoleNoBranch('CURDATE() + 1 ',2,$this->session->userdata('Branch_Id')) ?></span>
                                    </a>


                                </li>
                                <!--end::Nav Item-->
                            </ul>
                            <!--end::Nav-->
                        </div>
                        <!--end::Body-->
                    </div>
                </div>


                <div class="col-lg-4">
                    <!--begin::Stats Widget 3-->
                    <div class="card card-custom  gutter-a mb-4">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-6">
                            <h3 class="card-title align-items-start flex-column">

                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75"><span
                                        class=""><img src="<?php echo assets_url; ?>media/images/overallpatients.png"
                                            class="h-40px  align-self-center" alt=""></span>Visited Patients</span>

                            </h3>
                            <div class="card-toolbar mt-n5">

                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-10">
                            <!--begin::Nav-->
                            <ul class="nav nav-pills nav-fill flex-nowrap">
                                <!--begin::Nav Item-->
                                <li class="nav-item w-90px ">
                                    <a class="nav-link d-flex flex-column indocYes shadow-sm h-90px " data-toggle="tab"
                                        href="#">

                                        <span
                                            class="nav-text pt-6 font-weight-bold"><?php echo date('F',strtotime ( '-1 month')); ?></span>

                                        <span
                                            class="nav-text pt-3 pb-6 display5 font-weight-bold"><?php echo $this->main_model->getMonthlyAppoitmentCount(date('m',strtotime ( '-1 month'))) ?></span>
                                    </a>

                                </li>
                                <!--begin::Nav Item-->
                                <!--end::Nav Item-->
                                <li class="nav-item w-90px mx-5  ">
                                    <a class="nav-link d-flex flex-column indocTod shadow-sm h-90px" data-toggle="tab"
                                        href="#">

                                        <span
                                            class="nav-text pt-6 font-weight-bold text-light "><?php echo date('F'); ?></span>

                                        <span
                                            class="nav-text pt-3 pb-6 display5 text-light font-weight-bold"><?php echo $this->main_model->getMonthlyAppoitmentCount(date('m')) ?></span>
                                    </a>
                                </li>
                                <!--begin::Nav Item-->
                                <!--end::Nav Item-->
                                <li class="nav-item w-90px ">

                                    <a class="nav-link d-flex flex-column indocTom shadow-sm h-90px " data-toggle="tab"
                                        href="#">

                                        <span
                                            class="nav-text pt-6 font-weight-bold "><?php echo date('F',strtotime ( '+1 month')); ?></span>

                                        <span
                                            class="nav-text pt-3 pb-6 display5 font-weight-bold"><?php echo $this->main_model->getMonthlyAppoitmentCount(date('m',strtotime ( '+1 month'))) ?></span>
                                    </a>


                                </li>
                                <!--end::Nav Item-->
                            </ul>
                            <!--end::Nav-->
                        </div>
                        <!--end::Body-->
                    </div>



                </div>

            </div>


            <div class="row">
                <div class="col-xl-6 col-xxl-6">
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
                            <form>
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label for="usr">Patient:</label>
                                        <select class="selectpicker form-control" id="app_patient" name="patient"
                                            data-live-search="true" required>
                                            <option selected disabled>Select Patient</option>
                                            <?php foreach($this->main_model->getPatientData() as $item): ?>
                                            <?php echo $item->Name; ?>
                                            <option
                                                data-tokens="<?php echo $item->Name.' '.$item->Aadhar.' '.$item->Mobile.' '.$item->Pan; ?>"
                                                value="<?php echo $item->Id; ?>"><?php echo $item->Prefix; ?>.
                                                <?php echo $item->Name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <label for="usr">Referred From:</label>
                                        <select class="selectpicker form-control" id="app_referred"
                                            data-live-search="true" required>
                                            <option value="-" selected>None</option>
                                            <?php foreach($this->main_model->getReferredData() as $item): ?>
                                            <?php echo $item->Name; ?>
                                            <option
                                                data-tokens="<?php echo $item->Hospital_Name.' '.$item->Doctor_Name; ?>"
                                                value="<?php echo $item->Id; ?>"><?php echo $item->Hospital_Name.' - '.$item->Doctor_Name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>


                                    <div class="form-group col-lg-6">
                                        <label for="usr">Procedure:</label>
                                        <select class="form-control" id="app_procedure" required onchange="addProcedure(this.value)">
                                            <option selected disabled>Select Procedures</option>
                                            <?php foreach($this->main_model->getProcedures() as $item): ?>
                                            <option value="<?php echo $item->Procedures_Id; ?>">
                                                <?php echo $item->Procedure_Name.'- ₹'.$item->Fees; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>



                                    <div class="form-group col-lg-6">
                                        <label for="usr">Date:</label>
                                        <input type="date" class="form-control" id="app_date"
                                            value="<?php echo date('Y-m-d'); ?>" name="date" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="usr">Note:</label>
                                        <textarea type="text" class="form-control" id="app_note" value="" name="note"
                                            required></textarea>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                            <table class="table" id="ProcedureTable">
                                                <thead>
                                                    <tr>
                                                        <th>Procedure Name</th>
                                                        <th>Fees</th>
                                                        <th>Professionals</th>
                                                        <th>Action</th>
                                                    </tr>
                                                <tbody>

                                                </tbody>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                            <table class="table">
                                                    <tr>
                                                        <th>Total</th>
                                                        <td id="totalFees"></td>
                                                    </tr>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <button type="button" onclick="createAppointment()"
                                        class="btn btn-primary col-lg-4">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-xxl-6">
                    <div class="card card-custom">
                        <div class="card-header flex-wrap border-0 pt-6 pb-0">
                            <div class="card-title">
                                <h3 class="card-label"><span class=""><img
                                            src="<?php echo assets_url; ?>media/images/overallpatients.png"
                                            class="h-40px align-self-center" alt=""></span> Today's Appointment
                                    <span class="d-block text-muted pt-2 font-size-sm"></span></h3>
                            </div>
                            <div class="card-toolbar">
                                Total Appointment : <span
                                    class="display5"><?php echo $this->main_model->getCurAppoitmentCount(); ?></span>
                            </div>
                        </div>
                        <div class="card-body py-0 mb-1">
                            <div class="table-responsive">
                                <table class="table"
                                    id="table2">
                                    <thead>
                                        <tr class="text-left">

                                            <th>Patient Name</th>
                                            <th>Gender</th>
                                            <th>Age</th>
                                            <th>Referred From</th>
                                            <th>Referred To</th>
                                            <th>Procedure</th>
                                            <th>Note</th>
                                            <th class="pr-5 min-w-50px">Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($this->main_model->getBasicAppoitment($this->session->userdata('Branch_Id')) as $item): ?>
                                        <tr>
                                            <td><?php echo $item->Prefix; ?>. <?php echo $item->Patient_Name; ?>
                                            </td>
                                            <td><?php echo $item->Patient_Gender; ?></td>
                                            <td><?php echo $item->Patient_Age; ?></td>
                                            <td><?php echo ($item->Referred_From !== "-" && $item->Referred_From !== "" && $item->Referred_From !== "null") ? $this->main_model->getReferredData($item->Referred_From)[0]->Doctor_Name : $item->Referred_From; ?></td>
                                            <td><?php echo $item->Doctor_Name; ?></td>
                                            <td><?php echo $this->main_model->getProcedures($item->Procedure_Id)[0]->Procedure_Name; ?></td>
                                            <td>
                                                <p data-toggle="tooltip" title="<?php echo $item->Note; ?>"><i
                                                        class="fa fa-sticky-note text-warning"></i></p>
                                            </td>
                                            <td>
                                                <?php if($item->Status == 0): ?>
                                                <span
                                                    class="label font-weight-bold label-lg  label-light-danger label-inline"
                                                    data-toggle="tooltip" title="Cancelled">C</span>
                                                <?php elseif($item->Status == 1): ?>
                                                <span
                                                    class="label font-weight-bold label-lg label-light-success label-inline"
                                                    data-toggle="tooltip" title="Attended">A</span>
                                                <?php elseif($item->Status == 2): ?>
                                                <span
                                                    class="label font-weight-bold label-lg label-light-warning label-inline"
                                                    data-toggle="tooltip" title="Waiting">W</span>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <br>
            <div class="row">
                <div class="col-xl-6 col-xxl-6">
                    <div class="card card-custom">
                        <div class="card-header flex-wrap border-0 pt-6 pb-0">
                            <div class="card-title">
                                <h3 class="card-label"><span class=""><img
                                            src="<?php echo assets_url; ?>media/images/internalDoctors.png"
                                            class="h-40px align-self-center" alt=""></span> Professionals Status
                                    <span class="d-block text-muted pt-2 font-size-sm"></span></h3>
                            </div>
                        </div>
                        <div class="card-body py-0 mb-1">
                            <div class="table-responsive">
                                <table class="table "
                                    id="table3">
                                    <thead>
                                        <tr class="text-left">
                                            <th>Professional Name</th>
                                            <th class="pr-5 min-w-50px">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($this->main_model->getActiveStatus() as $item): ?>
                                        <tr>
                                            <td><?php echo $item->Name; ?></td>
                                            <td>
                                                <?php if($item->Status == 0): ?>
                                                <span
                                                    class="label font-weight-bold label-lg  label-light-danger label-inline"
                                                    data-toggle="tooltip" title="Offline">Offline</span>
                                                <?php elseif($item->Status == 1): ?>
                                                <span
                                                    class="label font-weight-bold label-lg label-light-success label-inline"
                                                    data-toggle="tooltip" title="Online">Online</span>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>

<script>
    $(document).ready(function () {
        $('.selectpicker').selectpicker();
        $('[data-toggle="tooltip"]').tooltip();
    });

    var procedureId = [];   
    var total = 0;
    var activeTr = 0;
    
    function addProcedure(id) {
        if(id !== "undefined"){
        
            $.get("<?php echo base_url; ?>procedure-data-by-id/"+id, function(data, status){
                $('#ProcedureTable tbody').append(data);    
                var trl = (procedureId.length == 0) ? 0 : procedureId.length - 1;
                procedureId.push(id);  
                var tempt = $("#feesId"+id).text();
                total = parseInt(total)+parseInt(tempt);
                $("#totalFees").text("₹ "+total);
                $("#app_procedure").val("");
                console.log("trl  : "+trl);
                $("#ProcedureTable tbody tr:eq("+ trl+") #rbtn").css("display","none");
                activeTr = trl + 1;
            });
        }
        

    }

    function createAppointment(){
        var patient = $("#app_patient").val();
        var date = $("#app_date").val();
        var note = $("#app_note").val();
        var referredFrom = $("#app_referred").val();
        for(var i = 0;i<procedureId.length;i++){
            $.post("<?php echo base_url; ?>create-appointment",
            {
                patient: patient,
                drid: $("#proId"+procedureId[i]).val(),
                note: note,
                date: date,
                referredFrom:referredFrom,
                procedure_Id: procedureId[i],
                fees: $("#feesId"+procedureId[i]).text(),
            },
            function(data, status){
                location.reload();
            });
        }

    }

    function removeId(procId,fees){
        
        console.log("activetr : "+activeTr);
        procedureId.pop(procId);
        $("#ProcedureTable tbody tr:eq("+ activeTr+")").remove();
        let trl = activeTr -1;
        $("#ProcedureTable tbody tr:eq("+ trl +") #rbtn").css("display","block");
        
        total = parseInt(total)-parseInt(fees);
        $("#totalFees").text("₹ "+total);

        activeTr --;
    }


    
</script>

<script>
    $(document).ready(function(){
        $('#table1').DataTable();
        $('#table2').DataTable();
        $('#table3').DataTable();
    });
</script>