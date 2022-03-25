<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-center flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <img src="<?php echo assets_url; ?>media/images/externalDoctors.png"
                        class="h-40px  align-self-center" alt=""><span
                        class=" h5 text-dark font-weight-bold my-1 mr-5">External Professionals</span>
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
                    <div class="card card-custom gutter-b">
                        <div class="card-body">
                            <!--begin::Top-->
                            <div class="d-flex">
                                <!--begin::Pic-->
                                <div class="flex-shrink-0 mr-7 mt-4">
                                    <div class="symbol symbol-50 symbol-lg-130 symbol-circle">
                                        <img alt="Pic"
                                            src="<?php echo upload_url.$this->session->userdata('Profile_Image'); ?>">
                                    </div>
                                </div>
                                <!--end::Pic-->
                                <!--begin: Info-->
                                <div class="flex-grow-1">
                                    <!--begin::Title-->
                                    <div class="d-flex align-items-center justify-content-between flex-wrap mt-2">
                                        <!--begin::User-->
                                        <div class="mr-3">
                                            <!--begin::Name-->
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary mt-n5 font-size-h5 font-weight-bold mr-3"><?php echo $this->session->userdata('Name'); ?></a>
                                            <!--end::Name-->
                                            <!--begin::Contacts-->
                                            <div class="d-flex flex-wrap my-2">
                                                <a href="#"
                                                    class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mt-n3 mb-2">
                                                    <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                    </span>Name</a>

                                            </div>

                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3"><?php echo ($this->session->userdata('Designation') != "") ? $this->session->userdata('Designation') : "-"; ?></a>

                                            <div class="d-flex flex-wrap my-2">
                                                <a href="#"
                                                    class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mt-n3 mb-2">
                                                    <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                        <!--begin::Svg Icon | path:/keen/theme/demo1/<?php echo assets_url; ?>media/svg/icons/Communication/Mail-notification.svg-->

                                                        <!--end::Svg Icon-->
                                                    </span>Designation</a>

                                            </div>
                                            <!--end::Contacts-->
                                        </div>
                                        <div class="mr-3">
                                            <!--begin::Name-->
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary mt-n5 font-size-h5 font-weight-bold mr-3"><?php echo ($this->session->userdata('DOB') != "") ? $this->session->userdata('DOB') : "-"; ?></a>
                                            <!--end::Name-->
                                            <!--begin::Contacts-->
                                            <div class="d-flex flex-wrap my-2">
                                                <a href="#"
                                                    class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mt-n3 mb-2">
                                                    <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                        <!--begin::Svg Icon | path:/keen/theme/demo1/<?php echo assets_url; ?>media/svg/icons/Communication/Mail-notification.svg-->

                                                        <!--end::Svg Icon-->
                                                    </span>Date of Birth</a>

                                            </div>
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3"><?php echo ($this->session->userdata('Hospital_Name') != "") ? $this->session->userdata('Hospital_Name') : "-"; ?></a>

                                            <div class="d-flex flex-wrap my-2">
                                                <a href="#"
                                                    class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mt-n3 mb-2">
                                                    <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                        <!--begin::Svg Icon | path:/keen/theme/demo1/<?php echo assets_url; ?>media/svg/icons/Communication/Mail-notification.svg-->

                                                        <!--end::Svg Icon-->
                                                    </span>Hospital Name</a>

                                            </div>
                                            <!--end::Contacts-->
                                        </div>
                                        
                                        <!--begin::User-->
                                        <!--begin::Actions-->
                                        <div class="my-lg-0 my-1">

                                            <div class="symbol symbol-50 symbol-lg-150 symbol-circle">
                                                
                                            </div>

                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Title-->

                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Top-->
                            <!--begin::Separator-->
                            <!--end::Separator-->
                            <div class="d-flex align-items-center flex-wrap idoc">
                                <!--begin::Bottom-->

                                <div class="card card-custom">

                                    <div class="card-body mblu pt-2 wi-70 mx-auto ">
                                        <div class="flex-grow-0  align-items-center  ">
                                            <div class="mb-3 "><img
                                                    src="<?php echo assets_url; ?>media/images/rewards.png"
                                                    class="h-40px align-self-center " alt=""><span
                                                    class="h4 text-white"> Reward Points</span></div>
                                            <!--begin::Nav-->
                                            <ul class="nav nav-pills nav-fill flex-nowrap">
                                                <!--begin::Nav Item-->
                                                <li class="nav-item w-90px ">
                                                    <a class="nav-link d-flex flex-column bgyello shadow-sm h-90px "
                                                        data-toggle="tab" href="#">

                                                        <span
                                                            class="nav-text pt-6 font-weight-bold  text-light">Earned</span>

                                                        <span
                                                            class="nav-text pt-3 pb-6 display5 text-light font-weight-bold">0</span>
                                                    </a>

                                                </li>
                                                <!--begin::Nav Item-->
                                                <!--end::Nav Item-->
                                                <li class="nav-item w-90px mx-5  ">
                                                    <a class="nav-link d-flex flex-column bgmgreen shadow-sm h-90px"
                                                        data-toggle="tab" href="#">

                                                        <span
                                                            class="nav-text pt-6 font-weight-bold text-light ">Settled</span>

                                                        <span
                                                            class="nav-text pt-3 pb-6 display5 text-light font-weight-bold">0</span>
                                                    </a>
                                                </li>
                                                <!--begin::Nav Item-->
                                                <!--end::Nav Item-->
                                                <li class="nav-item w-90px ">

                                                    <a class="nav-link d-flex flex-column bgdrkgreen shadow-sm h-90px "
                                                        data-toggle="tab" href="#">

                                                        <span
                                                            class="nav-text pt-6 font-weight-bold text-light ">Balance</span>

                                                        <span
                                                            class="nav-text pt-3 pb-6 display5 text-light font-weight-bold">0</span>
                                                    </a>


                                                </li>
                                                <!--end::Nav Item-->
                                            </ul>
                                            <!--end::Nav-->
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <!--end::Bottom-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-custom  gutter-a mb-4">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-1">
                            <h3 class="card-title align-items-start flex-column">

                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75"><span
                                        class=""><img src="<?php echo assets_url; ?>media/images/internalDoctors.png"
                                            class="h-40px  align-self-center" alt=""></span>Patients Statistics</span>

                            </h3>
                            <div class="card-toolbar mt-n5">
                                <span class="display4 font-weight-bold txthgreen "></span>
                            </div>
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
                                            class="nav-text pt-3 pb-6 display5 mgry font-weight-bold"><?php echo $this->main_model->getDailyAppoitmentCountByDoctor('CURDATE() - 1 ',$this->session->userdata('Id')) ?></span>
                                    </a>

                                </li>
                                <!--begin::Nav Item-->
                                <!--end::Nav Item-->
                                <li class="nav-item w-90px mx-5  ">
                                    <a class="nav-link d-flex flex-column indocTod shadow-sm h-90px" data-toggle="tab"
                                        href="#">

                                        <span class="nav-text pt-6 font-weight-bold text-light ">Today</span>

                                        <span
                                            class="nav-text pt-3 pb-6 display5 text-light font-weight-bold"><?php echo $this->main_model->getDailyAppoitmentCountByDoctor('CURDATE()',$this->session->userdata('Id')) ?></span>
                                    </a>
                                </li>
                                <!--begin::Nav Item-->
                                <!--end::Nav Item-->
                                <li class="nav-item w-90px ">

                                    <a class="nav-link d-flex flex-column indocTom shadow-sm h-90px " data-toggle="tab"
                                        href="#">

                                        <span class="nav-text pt-6 font-weight-bold text-dark ">Tomorrow</span>

                                        <span
                                            class="nav-text pt-3 pb-6 display5 text-dark font-weight-bold"><?php echo $this->main_model->getDailyAppoitmentCountByDoctor('CURDATE() +1',$this->session->userdata('Id')) ?></span>
                                    </a>


                                </li>
                                <!--end::Nav Item-->
                            </ul>
                            <!--end::Nav-->
                        </div>
                        <!--end::Body-->
                    </div>

                    <div class="card card-custom " style="word-wrap:unset;">
                            <!--begin::Header-->
                            <div class="card-header border-0 justify-content-around pt-6">
                                <h3 class="card-title flex-column ">
                                    <span class=" text-center">
                                        Daily Appointment Status</span>
                                </h3>

                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
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
                                                    class="nav-link bg-gol  shadow-sm brd justify-content-around text-center  w-70px">
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
            </div>



            <div class="row">
                <div class="col-lg-12" id="waitingAppot">
                    <div class="card card-custom">
                        <div class="card-header flex-wrap border-0 pt-6 pb-0">
                            <div class="card-title">
                                <h3 class="card-label"><span class=""><img
                                            src="<?php echo assets_url; ?>media/images/overallpatients.png"
                                            class="h-40px align-self-center" alt=""></span> Today's Patients
                                    <span class="d-block text-muted pt-2 font-size-sm"></span></h3>
                            </div>
                            <div class="card-toolbar">
                                Total Patients : <span
                                    class="display5"><?php echo $this->main_model->getCurAppoitmentCount(); ?></span>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-0 mb-1">
                            <div class="table-responsive">
                                <table class="table table-borderless table-head-custom table-vertical-center"
                                    id="kt_advance_table_widget_1">
                                    <thead>
                                        <tr class="text-left">

                                            <th class="pr-5 min-w-150px">Name</th>
                                            <th class="pr-5 min-w-50px">Gender</th>
                                            <th class="pr-5 min-w-50px">Age</th>
                                            <th class="pr-5 min-w-50px">Status</th>
                                            <th class="pr-5 min-w-50px">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($this->main_model->getBasicAppoitmentByDoctor($this->session->userdata('Branch_Id'),$this->session->userdata('Id')) as $item): ?>
                                        <tr>
                                            <td class="pr-0 py-2 font-weight-bolder"><?php echo $item->Patient_Name; ?>
                                            </td>
                                            <td class="text-left pl-10 pr-lg-0 pr-5">
                                                <div class=" mt-5 mt-lg-0"><?php echo $item->Patient_Gender; ?></div>
                                            </td>
                                            <td class="pl-4"><span
                                                    class="label font-weight-bold label-lg  label-light-danger label-inline"><?php echo $item->Patient_Age; ?></span>
                                            </td>
                                            <td class="text-left pl-4">
                                                <?php if($item->Status == 0): ?>
                                                <span
                                                    class="label font-weight-bold label-lg  label-light-danger label-inline"
                                                    data-toggle="tooltip" title="Cancelled"C></span>
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
                                            <td class="text-left pl-4">
                                                <?php if($item->Status == 2): ?>
                                                <?php if($this->session->userdata('Role') == 2 || $this->session->userdata('Role') == 3): ?>
                                                <a style="cursor:pointer"
                                                    onclick="showAttendBox('<?php echo $item->Id; ?>','<?php echo $item->Patient_Name; ?>')"
                                                    data-toggle="tooltip" title="Mark as Attended"><i
                                                        class="fa fa-check text-primary"></i></a>
                                                <?php endif; ?>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--end::Body-->
                </div>

                <div class="col-lg-4" id="addRemark" style="display:none;">
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
                                        <label for="usr">Remark/IMP Info:</label>
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

            </div>











        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<script>
    function showAttendBox(id, name) {
        $("#waitingAppot").removeClass('col-lg-12');
        $("#waitingAppot").addClass('col-lg-8');
        $("#remark_patient_name").val(name);
        $("#RemarkApId").val(id);
        $("#addRemark").css('display', "block");
    }

    function closeAddRemark() {
        $("#addRemark").css('display', "none");
        $("#waitingAppot").addClass('col-lg-12');
    }
</script>