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
                        class=" h5 text-dark font-weight-bold my-1 mr-5">Profile</span>
                </div>
            </div>
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