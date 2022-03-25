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
                    <span class=" h5 text-dark font-weight-bold my-1 mr-5">Patient Details</span>
                    <!--end::Page Title-->

                </div>
                <!--end::Page Heading-->
            </div>
            <div class="d-flex align-items-center flex-wrap">
                <a href="<?php echo base_url; ?>patients" class="btn btn-danger btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3">Back</a>
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
                    <div class="card card-custom gutter-b">
                        <div class="card-body">
                            <!--begin::Top-->
                            <?php if($this->session->userdata('Role') == 1): ?>
                            <div class="row">
                                <div class="col-lg-2">
                                    <img alt="Pic"
                                        src="<?php echo upload_url.$patient->Profile_Image; ?>"
                                        width="100%">
                                </div>
                                <div class="col-lg-8">
                                    <br><br>
                                    <div class="row">
                                        <div class="col-lg-4 col-xl-4 col-md-6 col-xs-6 col-sm-6">
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold"><?php echo $patient->Name; ?></a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 ">Name</a>
                                        </div>
                                        <div class="col-lg-4 col-xl-4 col-md-6 col-xs-6 col-sm-6">
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold"><?php echo $patient->DOB; ?></a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 ">Date of
                                                Birth</a>
                                        </div>
                                        <div class="col-lg-4 col-xl-4 col-md-6 col-xs-6 col-sm-6">
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold"><?php echo $patient->DOA; ?></a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 ">Date of Anniversary</a>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row">
                                        <div class="col-lg-4 col-xl-4 col-md-6 col-xs-6 col-sm-6">
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold"><?php echo $patient->Aadhar; ?></a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 ">Aadhar</a>
                                        </div>
                                        <div class="col-lg-4 col-xl-4 col-md-6 col-xs-6 col-sm-6">
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold"><?php echo $patient->Pan; ?></a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 ">Pan</a>
                                        </div>
                                        <div class="col-lg-4 col-xl-4 col-md-6 col-xs-6 col-sm-6">
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold"><?php echo $patient->Age; ?></a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 ">Age</a>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row">
                                        <div class="col-lg-4 col-xl-4 col-md-6 col-xs-6 col-sm-6">
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold"><?php echo $patient->Email; ?></a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 ">Email</a>
                                        </div>
                                        <div class="col-lg-4 col-xl-4 col-md-6 col-xs-6 col-sm-6">
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold"><?php echo $patient->Mobile; ?></a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 ">Mobile</a>
                                        </div>
                                        <div class="col-lg-4 col-xl-4 col-md-6 col-xs-6 col-sm-6">
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold"><?php echo $patient->Gender; ?></a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 ">Gender</a>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row">
                                        <div class="col-lg-4 col-xl-4 col-md-6 col-xs-6 col-sm-6">
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold"><?php echo $patient->Occupation; ?></a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 ">Occupation</a>
                                        </div>
                                        <div class="col-lg-4 col-xl-4 col-md-6 col-xs-6 col-sm-6">
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold"><?php echo $patient->Marriage_Status; ?></a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 ">Marriage Status</a>
                                        </div>
                                        <div class="col-lg-4 col-xl-4 col-md-6 col-xs-6 col-sm-6">
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold"><?php echo $patient->Income; ?></a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 ">Income Slab</a>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row">
                                        <div class="col-lg-4 col-xl-4 col-md-6 col-xs-6 col-sm-6">
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold"><?php echo $patient->Father_Name; ?></a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 ">Father Name</a>
                                        </div>
                                        <div class="col-lg-4 col-xl-4 col-md-6 col-xs-6 col-sm-6">
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold"><?php echo $patient->Father_Education; ?></a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 ">Father Education</a>
                                        </div>
                                        <div class="col-lg-4 col-xl-4 col-md-6 col-xs-6 col-sm-6">
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold"><?php echo $patient->Mother_Name; ?></a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 ">Mother Name</a>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row">
                                        <div class="col-lg-4 col-xl-4 col-md-6 col-xs-6 col-sm-6">
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold"><?php echo $patient->Address; ?></a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 ">Address</a>
                                        </div>
                                        <div class="col-lg-4 col-xl-4 col-md-6 col-xs-6 col-sm-6">
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold"><?php echo $patient->State; ?></a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 ">State</a>
                                        </div>
                                        <div class="col-lg-4 col-xl-4 col-md-6 col-xs-6 col-sm-6">
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold"><?php echo $patient->Taluka; ?></a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 ">Taluka</a>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row">
                                        <div class="col-lg-4 col-xl-4 col-md-6 col-xs-6 col-sm-6">
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold"><?php echo $patient->District; ?></a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 ">District</a>
                                        </div>
                                        <div class="col-lg-4 col-xl-4 col-md-6 col-xs-6 col-sm-6">
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold"><?php echo $patient->Pin; ?></a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 ">Pin</a>
                                        </div>
                                        <div class="col-lg-4 col-xl-4 col-md-6 col-xs-6 col-sm-6">
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold"><?php echo $patient->Language; ?></a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 ">Known Language</a>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row">
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            <?php else: ?>
                                <div class="row">
                                <div class="col-lg-2">
                                    <img alt="Pic"
                                        src="<?php echo upload_url.$patient->Profile_Image; ?>"
                                        width="100%">
                                </div>
                                <div class="col-lg-8">
                                    <br><br>
                                    <div class="row">
                                        <div class="col-lg-4 col-xl-4 col-md-6 col-xs-6 col-sm-6">
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold"><?php echo $patient->Name; ?></a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 ">Name</a>
                                        </div>
                                        <div class="col-lg-4 col-xl-4 col-md-6 col-xs-6 col-sm-6">
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold"><?php echo $patient->Age; ?></a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 ">Age</a>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row">
                                    <?php if($this->session->userdata('Role') == 4): ?>
                                        <div class="col-lg-4 col-xl-4 col-md-6 col-xs-6 col-sm-6">
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold"><?php echo $patient->Email; ?></a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 ">Email</a>
                                        </div>
                                        
                                        <div class="col-lg-4 col-xl-4 col-md-6 col-xs-6 col-sm-6">
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold"><?php echo $patient->Mobile; ?></a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 ">Mobile</a>
                                        </div>
                                        <?php endif; ?>
                                        <div class="col-lg-4 col-xl-4 col-md-6 col-xs-6 col-sm-6">
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold"><?php echo $patient->Gender; ?></a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 ">Gender</a>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row">
                                        <div class="col-lg-4 col-xl-4 col-md-6 col-xs-6 col-sm-6">
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold"><?php echo $patient->Occupation; ?></a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 ">Occupation</a>
                                        </div>
                                        <div class="col-lg-4 col-xl-4 col-md-6 col-xs-6 col-sm-6">
                                            <a href="#"
                                                class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold"><?php echo $patient->Language; ?></a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 ">Known Language</a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-xxl-12">
                    <div class="card card-custom">
                        <div class="card-header flex-wrap border-0 pt-6 pb-0">
                            <div class="card-title">
                                <h3 class="card-label"><span class=""><img
                                            src="<?php echo assets_url; ?>media/images/overallpatients.png"
                                            class="h-40px align-self-center" alt=""></span> Previous History
                                    <span class="d-block text-muted pt-2 font-size-sm"></span></h3>
                            </div>
                        </div>
                        <div class="card-body py-0 mb-1">
                            <div class="table-responsive">
                                <table class="table  table-hover table-striped"
                                    id="table1">
                                    <thead>
                                        <tr class="text-left">

                                            <th class="pr-5 min-w-150px">Date</th>
                                            <th class="pr-5 min-w-50px">Referrede From</th>
                                            <th class="pr-5 min-w-50px">Referrede To</th>
                                            <th class="pr-5 min-w-50px">Procedure</th>
                                            <th class="pr-5 min-w-50px">Remark</th>
                                            <th class="pr-5 min-w-50px">Follow-up Date</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($this->main_model->patinet_visited_history($patient->Id) as $item): ?>
                                        <tr>
                                            <td class="pr-0 py-2 font-weight-bolder"><?php echo $item->Date; ?>
                                            </td>
                                            <td><?php echo ($item->Referred_From !== "-" && $item->Referred_From !== "" && $item->Referred_From !== "null") ? $this->main_model->getReferredData($item->Referred_From)[0]->Doctor_Name : $item->Referred_From; ?></td>
                                            <td class="text-left pl-10 pr-lg-0 pr-5">
                                                <div class=" mt-5 mt-lg-0"><?php echo $item->Doctor_Name; ?></div>
                                            </td>
                                            <td><?php echo $this->main_model->getProcedures($item->Procedure_Id)[0]->Procedure_Name; ?></td>
                                            <td class="text-left pl-4">
                                            <?php if($item->Remark != ""): ?>
                                                <?php echo $item->Remark; ?>
                                                <?php endif; ?>
                                            </td>
                                            <td class="text-left pl-10 pr-lg-0 pr-5">
                                                <div class=" mt-5 mt-lg-0"><?php echo $item->Follow_Date; ?></div>
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
    });
</script>

<script>
    $(document).ready(function(){
        $('#table1').DataTable();
        $('#table2').DataTable();
        $('#table3').DataTable();
    });
</script>