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
                        alt=""><span class=" h5 text-dark font-weight-bold my-1 mr-5">Profile</span>
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

                <div class="col-lg-12">
                    <div class="card card-custom gutter-b">
                        <div class="card-body">
                            <!--begin::Top-->
                            <div class="row">
                                <div class="col-lg-2">
                                    <img alt="Pic"
                                        src="<?php echo upload_url.$this->session->userdata('Profile_Image'); ?>"
                                        width="100%">
                                </div>
                                <div class="col-lg-8">
                                    <br><br>
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-6 col-md-6 col-xs-6 col-sm-6">
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold"><?php echo $this->session->userdata('Name'); ?></a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 ">Receptionist</a>
                                        </div>
                                        <div class="col-lg-6 col-xl-6 col-md-6 col-xs-6 col-sm-6">
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold"><?php echo ($this->session->userdata('DOB') != "") ? $this->session->userdata('DOB') : "-"; ?></a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 ">Date of
                                                Birth</a>
                                        </div>

                                    </div><br><br>
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-6 col-md-6 col-xs-6 col-sm-6">
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary  font-size-h5 font-weight-bold "><?php echo $this->main_model->getBranchData($this->session->userdata('Branch_Id'))[0]->Name; ?></a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 ">Branch</a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary  font-size-h5 font-weight-bold">-</a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold">Timings</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2">

                                </div>
                                <div class="col-lg-8">
                                    <br><br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4>Leave Status</h4>

                                            <div class="" style="background-color:#ecf6ff">
                                                <div class="row">
                                                    <div class="col-lg-3 col-xl-3 col-md-6 col-xs-6 col-sm-6">
                                                        <div class="d-flex align-items-center  mr-5 my-1 p-3">
                                                            <div class="d-flex flex-column text-dark-75"
                                                                style="width:100%;">
                                                                <span class="font-weight-bolder font-size-sm"
                                                                    style="text-align:center;">Total</span>
                                                                <span class="font-weight-bolder font-size-h5"
                                                                    style="text-align:center;">
                                                                    <span
                                                                        class="display5  font-weight-bold"><?php echo ($this->session->userdata('Leave') != "") ? $this->session->userdata('Leave') : "-"; ?></span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-xl-3 col-md-6 col-xs-6 col-sm-6">
                                                        <div class="d-flex align-items-center  mr-5 my-1 p-3">
                                                            <div class="d-flex flex-column text-dark-75"
                                                                style="width:100%;">
                                                                <span class="font-weight-bolder font-size-sm"
                                                                    style="text-align:center;">Taken</span>
                                                                <span class="font-weight-bolder font-size-h5"
                                                                    style="text-align:center;">
                                                                    <span
                                                                        class="display5 text-danger font-weight-bold"><?php echo $this->main_model->getLeaveTransCount($this->session->userdata('Id'),'1'); ?></span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-xl-3 col-md-6 col-xs-6 col-sm-6">
                                                        <div class="d-flex align-items-center  mr-5 my-1 p-3">
                                                            <div class="d-flex flex-column text-dark-75"
                                                                style="width:100%;">
                                                                <span class="font-weight-bolder font-size-sm"
                                                                    style="text-align:center;">Applied</span>
                                                                <span class="font-weight-bolder font-size-h5"
                                                                    style="text-align:center;">
                                                                    <span
                                                                        class="display5 text-warning font-weight-bold"><?php echo $this->main_model->getLeaveTransCount($this->session->userdata('Id'),'2'); ?></span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-xl-3 col-md-6 col-xs-6 col-sm-6">
                                                        <div class="d-flex align-items-center  mr-5 my-1 p-3">
                                                            <div class="d-flex flex-column text-dark-75"
                                                                style="width:100%;">
                                                                <span class="font-weight-bolder font-size-sm"
                                                                    style="text-align:center;">Balance</span>
                                                                <span class="font-weight-bolder font-size-h5"
                                                                    style="text-align:center;">
                                                                    <span
                                                                        class="display5 text-warning font-weight-bold"><?php echo $this->session->userdata('Leave') - $this->main_model->getLeaveTransCount($this->session->userdata('Id'),'1'); ?></span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--end::Top-->
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
    $(document).ready(function(){
        $('.selectpicker').selectpicker();
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>