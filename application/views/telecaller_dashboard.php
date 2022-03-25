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
                        alt=""><span class=" h5 text-dark font-weight-bold my-1 mr-5">Telecaller Dashboard</span>
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
                    <div class="card card-custom card-stretch gutter-b" style="word-wrap:unset !important;">
                        <div class="card-header border-0 justify-content-around pt-6">
                            <h3 class="card-title flex-column ">
                                <span class=" text-center">
                                    Calls Today</span>
                            </h3>

                        </div>
                        <div class="card-body">

                            <div class="row text-center">
                                <div class="col-lg-3 col-xl-3 col-sm-6 col-xs-6 col-md-6 ">
                                    <div class="bd-highlight">
                                        <div class="font-size-h5 text-dark bd-highlight">New Leads
                                            <a
                                                class="nav-link shadow-sm brd justify-content-around text-center " style="background:#D2F3C1;">
                                                <span class=" pt-6 text-success  display4 font-weight-bold"><?php echo $this->main_model->getTeleNewCalls($this->session->Id); ?></span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-xl-3 col-sm-6 col-xs-6 col-md-6">
                                    <div class="bd-highlight">
                                        <div class="font-size-h5 text-dark bd-highlight">Follow Up
                                            <a
                                                class="nav-link  shadow-sm brd justify-content-around text-center " style="background-color: #FFEBCB;">
                                                <span
                                                    class=" pt-6 text-warning display4 font-weight-bold"><?php echo $this->main_model->getTeleFollowupCalls($this->session->Id); ?></span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-xl-3 col-sm-6 col-xs-6 col-md-6">
                                    <div class="bd-highlight">
                                        <div class="font-size-h5 text-dark bd-highlight">Not Connected
                                            <a
                                                class="nav-link  shadow-sm brd justify-content-around text-center " style="background-color: #E7E8E8;">
                                                <span
                                                    class=" pt-6  text-dark display4 font-weight-bold"><?php echo $this->main_model->getTeleUACCallsByUser($this->session->Id); ?></span></span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-xl-3 col-sm-6 col-xs-6 col-md-6">
                                    <div class="bd-highlight">
                                        <div class="font-size-h5 text-dark bd-highlight">Postponed
                                            <a
                                                class="nav-link  shadow-sm brd justify-content-around text-center " style="background-color: #ECF7FF;">
                                                <span
                                                    class=" pt-6   display4 text-teritory font-weight-bold"><?php echo $this->main_model->getTelePostCallsByUser($this->session->Id); ?></span></span></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-body">

                            <div class="row text-center">
                                <div class="col-lg-4 col-xl-4 col-sm-6 col-xs-6 col-md-6">
                                    <div class="bd-highlight">
                                        <div class="font-size-h5 text-dark bd-highlight">Hold
                                            <a
                                                class="nav-link  shadow-sm brd justify-content-around text-center " style="background-color: #a16de8;">
                                                <span
                                                    class=" pt-6  text-light display4 font-weight-bold"><?php echo $this->main_model->getTeleHoldCalls($this->session->Id); ?></span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-xl-4 col-sm-6 col-xs-6 col-md-6">
                                    <div class="">
                                        <div class="font-size-h5 text-dark ">Lost
                                            <a
                                                class="nav-link indocTod  shadow-sm brd justify-content-around text-center " style="background-color: #FA3F5E;">
                                                <span
                                                    class=" pt-6 text-light display4 font-weight-bold"><?php echo $this->main_model->getTeleWonCalls($this->session->Id); ?></span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-xl-4 col-sm-6 col-xs-6 col-md-6">
                                    <div class="bd-highlight">
                                        <div class="font-size-h5 text-dark bd-highlight">Won
                                            <a
                                                class="nav-link bg-gol  shadow-sm brd justify-content-around text-center ">
                                                <span
                                                    class=" pt-6  text-light display4 font-weight-bold"><?php echo $this->main_model->getTeleWonCalls($this->session->Id); ?></span></span></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <div class="card card-custom">
                        <div class="card-header flex-wrap border-0 pt-6 pb-0">
                            <div class="card-title">
                                <h3 class="card-label"><span class=""><img
                                            src="<?php echo assets_url; ?>media/images/overallpatients.png"
                                            class="h-40px align-self-center" alt=""></span> Today's Calling
                                    <span class="d-block text-muted pt-2 font-size-sm"></span></h3>
                            </div>
                            <div class="card-toolbar">
                                Total Calls : <span class="display5"><?php echo $this->main_model->dailyCallingCount($this->session->Id); ?></span>
                            </div>
                        </div>
                        <div class="card-body py-0 mb-1">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped"
                                    id="table1">
                                    <thead>
                                        <tr class="text-left">

                                            <th class="pr-5 min-w-150px">Name</th>
                                            <th class="pr-5 min-w-150px">Mobile</th>
                                            <th class="pr-5 min-w-150px">Remark</th>
                                            <th class="pr-5 min-w-50px">Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($this->main_model->dailyCallingList($this->session->userdata('Id')) as $item): ?>
                                        <tr>
                                            <td class="pr-0 py-2 font-weight-bolder"><?php echo $item->Name; ?>
                                            </td>
                                            <td class="text-left pl-10 pr-lg-0 pr-5">
                                                <div class=" mt-5 mt-lg-0"><?php echo $item->Mobile; ?></div>
                                            </td>
                                            <td class="text-left pl-10 pr-lg-0 pr-5">
                                                <div class=" mt-5 mt-lg-0"><?php echo $item->Remark; ?></div>
                                            </td>
                                                <td>
                                                    <?php if($item->Status == 0): ?>
                                                    <span
                                                        class="label font-weight-bold label-lg  label-light-secondary label-inline"
                                                        data-toggle="tooltip" title="New"></span>
                                                    <?php elseif($item->Status == 1): ?>
                                                    <span
                                                        class="label font-weight-bold label-lg label-light-success label-inline"
                                                        data-toggle="tooltip" title="Counseled"></span>
                                                    <?php elseif($item->Status == 2): ?>
                                                        <span
                                                            class="label font-weight-bold label-lg label-light-success label-inline"
                                                            data-toggle="tooltip" title="Visting H.Q."></span>
                                                    <?php elseif($item->Status == 3): ?>
                                                        <span
                                                            class="label font-weight-bold label-lg label-light-success label-inline"
                                                            data-toggle="tooltip" title="Visting Branch"></span>
                                                    
                                                    <?php elseif($item->Status == 4): ?>
                                                        <span
                                                            class="label font-weight-bold label-lg label-light-danger label-inline"
                                                            data-toggle="tooltip" title="Postponed"></span>

                                                    <?php elseif($item->Status == 5): ?>
                                                        <span
                                                            class="label font-weight-bold label-lg label-light-primary label-inline"
                                                            data-toggle="tooltip" title="Follow-up"></span>
                                                    <?php elseif($item->Status == 6): ?>
                                                        <span
                                                            class="label font-weight-bold label-lg label-light-danger label-inline"
                                                            data-toggle="tooltip" title="Postponed"></span>
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
    $(document).ready(function(){
        $('.selectpicker').selectpicker();
        $('[data-toggle="tooltip"]').tooltip();
        $("#table1").datatable();
    });
</script>