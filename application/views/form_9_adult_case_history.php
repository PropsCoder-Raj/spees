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
                    <!-- <img src="<?php echo assets_url; ?>media/images/weeklysales.png" class="h-40px  align-self-center" alt=""> -->
                    <span class=" h5 text-dark font-weight-bold my-1 mr-5"><?php echo $formsData->Name; ?></span>
                    <!--end::Page Title-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
        </div>
    </div>

    <div class="d-flex flex-column-fluid">

        <form action="" method="POST" style="width: 100%">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Patient Name :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="patientName" name="patientName"
                                                placeholder="Enter Patient Name"
                                                value="<?php echo $patientData->Name; ?>">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="patientName" name="patientName"
                                                placeholder="Enter Patient Name"
                                                value="<?php echo $formRecordsData[0]->PatientName; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Patient ID :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="patientId" name="patientId"
                                                placeholder="Enter Patient ID" value="<?php echo $patientData->Id; ?>">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="patientId" name="patientId"
                                                placeholder="Enter Patient ID"
                                                value="<?php echo $formRecordsData[0]->PatientId; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Age :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="number" class="form-control" id="age" name="age"
                                                placeholder="Enter Age" value="<?php echo $patientData->Age; ?>">
                                            <?php }else{ ?>
                                            <input type="number" class="form-control" id="age" name="age"
                                                placeholder="Enter Age" value="<?php echo $formRecordsData[0]->Age; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Gender :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <select class="form-select form-control" name="gender"
                                                aria-label="Default select example"
                                                value="<?php echo $patientData->Gender;?>">
                                                <option disabled>Select</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                            </select>
                                            <?php }else{ ?>
                                            <select class="form-select form-control" name="gender"
                                                aria-label="Default select example">
                                                <option disabled>Select</option>
                                                <option value="Male"
                                                    <?php echo $formRecordsData[0]->Gender == 'Male' ? ' selected="selected"' : '';?>>
                                                    Male</option>
                                                <option value="Female"
                                                    <?php echo $formRecordsData[0]->Gender == 'Female' ? ' selected="selected"' : '';?>>
                                                    Female</option>
                                                <option value="Other"
                                                    <?php echo $formRecordsData[0]->Gender == 'Other' ? ' selected="selected"' : '';?>>
                                                    Other</option>
                                            </select>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Occupation :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="occupation" name="occupation"
                                                placeholder="Enter Occupation" value="">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="occupation" name="occupation"
                                                placeholder="Enter Occupation"
                                                value="<?php echo $formRecordsData[0]->Occupation; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Reffered By :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="reffred_by" name="reffred_by"
                                                placeholder="Enter Reffred By"
                                                value="<?php echo $patientData->Reffered_By; ?>">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="reffred_by" name="reffred_by"
                                                placeholder="Enter Reffred By"
                                                value="<?php echo $formRecordsData[0]->Reffered_By; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Date :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="date" class="form-control" id="date" name="date"
                                                placeholder="Enter Date">
                                            <?php }else{ ?>
                                            <input type="date" class="form-control" id="date" name="date"
                                                placeholder="Enter Date"
                                                value="<?php echo $formRecordsData[0]->Date; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Time :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="time" class="form-control" id="time" name="time"
                                                placeholder="Enter Time">
                                            <?php }else{ ?>
                                            <input type="time" class="form-control" id="time" name="time"
                                                placeholder="Enter Time"
                                                value="<?php echo $formRecordsData[0]->Time; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4 row mb-3">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">History/ Complaint
                                                of
                                                reduced hearing sensitivity:</label>
                                            <div class="col-sm-6 form-group">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCRHS_status"
                                                        id="HCRHS_status1" value="Present"
                                                        onclick="HCRHS_status_click('Present')" checked>
                                                    <label class="form-check-label" for="HCRHS_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCRHS_status"
                                                        id="HCRHS_status2" value="Absent"
                                                        onclick="HCRHS_status_click('Absent')">
                                                    <label class="form-check-label" for="HCRHS_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php }else{ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCRHS_status"
                                                        id="HCRHS_status1" value="Present"
                                                        onclick="HCRHS_status_click('Present')"
                                                        <?php if($get_adult_case_historyData[0]->HCRHS_Status == 'Present') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCRHS_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCRHS_status"
                                                        id="HCRHS_status2" value="Absent"
                                                        onclick="HCRHS_status_click('Absent')"
                                                        <?php if($get_adult_case_historyData[0]->HCRHS_Status == 'Absent') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCRHS_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>

                                            <div class="col-sm-6 form-group" id="HCRHS_status_section_1"
                                                style="display: none;">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCRHS_rlb"
                                                        id="HCRHS_rlb1" value="Rt" checked>
                                                    <label class="form-check-label" for="HCRHS_rlb1">
                                                        Rt
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCRHS_rlb"
                                                        id="HCRHS_rlb2" value="Lt">
                                                    <label class="form-check-label" for="HCRHS_rlb2">
                                                        Lt
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCRHS_rlb"
                                                        id="HCRHS_rlb3" value="Both">
                                                    <label class="form-check-label" for="HCRHS_status3">
                                                        Both
                                                    </label>
                                                </div>
                                                <?php }else{ ?>

                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCRHS_rlb"
                                                        id="HCRHS_rlb1" value="Rt"
                                                        <?php if($get_adult_case_historyData[0]->HCRHS_RLB == 'Rt') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCRHS_rlb1">
                                                        Rt
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCRHS_rlb"
                                                        id="HCRHS_rlb2" value="Lt"
                                                        <?php if($get_adult_case_historyData[0]->HCRHS_RLB == 'Lt') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCRHS_rlb2">
                                                        Lt
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCRHS_rlb"
                                                        id="HCRHS_rlb3" value="Both"
                                                        <?php if($get_adult_case_historyData[0]->HCRHS_RLB == 'Both') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCRHS_status3">
                                                        Both
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-8 row" id="HCRHS_status_section_2" style="display: none;">
                                            <div class="col-sm-3 mb-3">
                                                <label for="inputEmail3" class="col-sm-12">Since :</label>
                                                <div class="col-sm-12">
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control" id="HCRHS_since"
                                                        name="HCRHS_since" placeholder="Enter Since" value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control" id="HCRHS_since"
                                                        name="HCRHS_since" placeholder="Enter Since"
                                                        value="<?php echo $get_adult_case_historyData[0]->HCRHS_Since; ?>">
                                                    <?php } ?>
                                                </div>
                                            </div>

                                            <div class="col-sm-3 form-group">
                                                <label for="inputEmail3" style="display: block;">Onset:</label>
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCRHS_onset"
                                                        id="HCRHS_onset1" value="sudden" checked>
                                                    <label class="form-check-label" for="HCRHS_onset1">
                                                        sudden
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCRHS_onset"
                                                        id="HCRHS_onset2" value="gradual">
                                                    <label class="form-check-label" for="HCRHS_onset2">
                                                        gradual
                                                    </label>
                                                </div>
                                                <?php }else{ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCRHS_onset"
                                                        id="HCRHS_onset1" value="sudden"
                                                        <?php if($get_adult_case_historyData[0]->HCRHS_Onset == 'sudden') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCRHS_onset1">
                                                        sudden
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCRHS_onset"
                                                        id="HCRHS_onset2" value="gradual"
                                                        <?php if($get_adult_case_historyData[0]->HCRHS_Onset == 'gradual') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCRHS_onset2">
                                                        gradual
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>

                                            <div class="col-sm-5 form-group">

                                                <label for="inputEmail3" style="display: block">Nature:</label>
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCRHS_nature"
                                                        id="HCRHS_nature1" value="progressive" checked>
                                                    <label class="form-check-label" for="HCRHS_nature1">
                                                        progressive
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCRHS_nature"
                                                        id="HCRHS_nature2" value="non-progressive">
                                                    <label class="form-check-label" for="HCRHS_nature2">
                                                        non-progressive
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCRHS_nature"
                                                        id="HCRHS_nature3" value="fluctuating">
                                                    <label class="form-check-label" for="HCRHS_status3">
                                                        fluctuating
                                                    </label>
                                                </div>
                                                <?php }else{ ?>

                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCRHS_nature"
                                                        id="HCRHS_nature1" value="progressive"
                                                        <?php if($get_adult_case_historyData[0]->HCRHS_Nature == 'progressive') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCRHS_nature1">
                                                        progressive
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCRHS_nature"
                                                        id="HCRHS_nature2" value="non-progressive"
                                                        <?php if($get_adult_case_historyData[0]->HCRHS_Nature == 'non-progressive') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCRHS_nature2">
                                                        non-progressive
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCRHS_nature"
                                                        id="HCRHS_nature3" value="fluctuating"
                                                        <?php if($get_adult_case_historyData[0]->HCRHS_Nature == 'fluctuating') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCRHS_status3">
                                                        fluctuating
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-4 row mb-3">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">History/ Complaint
                                                of blocking sensation:</label>
                                            <div class="col-sm-6 form-group">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCBS_status"
                                                        id="HCBS_status1" value="Present"
                                                        onclick="HCBS_status_click('Present')" checked>
                                                    <label class="form-check-label" for="HCBS_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCBS_status"
                                                        id="HCBS_status2" value="Absent"
                                                        onclick="HCBS_status_click('Absent')">
                                                    <label class="form-check-label" for="HCBS_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php }else{ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCBS_status"
                                                        id="HCBS_status1" value="Present"
                                                        onclick="HCBS_status_click('Present')"
                                                        <?php if($get_adult_case_historyData[0]->HCBS_Status == 'Present') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCBS_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCBS_status"
                                                        id="HCBS_status2" value="Absent"
                                                        onclick="HCBS_status_click('Absent')"
                                                        <?php if($get_adult_case_historyData[0]->HCBS_Status == 'Absent') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCBS_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>

                                            <div class="col-sm-6 form-group" id="HCBS_status_section_1"
                                                style="display: none;">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCBS_rlb"
                                                        id="HCBS_rlb1" value="Rt" checked>
                                                    <label class="form-check-label" for="HCBS_rlb1">
                                                        Rt
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCBS_rlb"
                                                        id="HCBS_rlb2" value="Lt">
                                                    <label class="form-check-label" for="HCBS_rlb2">
                                                        Lt
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCBS_rlb"
                                                        id="HCBS_rlb3" value="Both">
                                                    <label class="form-check-label" for="HCBS_status3">
                                                        Both
                                                    </label>
                                                </div>
                                                <?php }else{ ?>

                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCBS_rlb"
                                                        id="HCBS_rlb1" value="Rt"
                                                        <?php if($get_adult_case_historyData[0]->HCBS_RLB == 'Rt') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCBS_rlb1">
                                                        Rt
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCBS_rlb"
                                                        id="HCBS_rlb2" value="Lt"
                                                        <?php if($get_adult_case_historyData[0]->HCBS_RLB == 'Lt') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCBS_rlb2">
                                                        Lt
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCBS_rlb"
                                                        id="HCBS_rlb3" value="Both"
                                                        <?php if($get_adult_case_historyData[0]->HCBS_RLB == 'Both') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCBS_status3">
                                                        Both
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-8 row" id="HCBS_status_section_2" style="display: none;">
                                            <div class="col-sm-3 mb-3">
                                                <label for="inputEmail3" class="col-sm-12">Since :</label>
                                                <div class="col-sm-12">
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control" id="HCBS_since"
                                                        name="HCBS_since" placeholder="Enter Since" value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control" id="HCBS_since"
                                                        name="HCBS_since" placeholder="Enter Since"
                                                        value="<?php echo $get_adult_case_historyData[0]->HCBS_Since; ?>">
                                                    <?php } ?>
                                                </div>
                                            </div>

                                            <div class="col-sm-8 form-group">
                                                <label for="inputEmail3" style="display: block">Associated with:</label>
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCBS_associated"
                                                        id="HCBS_associated1" value="cold" checked>
                                                    <label class="form-check-label" for="HCBS_associated1">
                                                        cold
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCBS_associated"
                                                        id="HCBS_associated2" value="without cold">
                                                    <label class="form-check-label" for="HCBS_associated2">
                                                        without cold
                                                    </label>
                                                </div>
                                                <?php }else{ ?>

                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCBS_associated"
                                                        id="HCBS_associated1" value="cold"
                                                        <?php if($get_adult_case_historyData[0]->HCBS_Associated == 'cold') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCBS_associated1">
                                                        cold
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCBS_associated"
                                                        id="HCBS_associated2" value="without cold"
                                                        <?php if($get_adult_case_historyData[0]->HCBS_Associated == 'without cold') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCBS_associated2">
                                                        without cold
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-4 row mb-3">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">History/ Complaint
                                                of Ear pain:</label>
                                            <div class="col-sm-6 form-group">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCEP_status"
                                                        id="HCEP_status1" value="Present"
                                                        onclick="HCEP_status('Present')" checked>
                                                    <label class="form-check-label" for="HCEP_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCEP_status"
                                                        id="HCEP_status2" value="Absent"
                                                        onclick="HCEP_status('Absent')">
                                                    <label class="form-check-label" for="HCEP_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php }else{ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCEP_status"
                                                        id="HCEP_status1" value="Present"
                                                        onclick="HCEP_status_click('Present')"
                                                        <?php if($get_adult_case_historyData[0]->HCEP_Status == 'Present') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCEP_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCEP_status"
                                                        id="HCEP_status2" value="Absent"
                                                        onclick="HCEP_status_click('Absent')"
                                                        <?php if($get_adult_case_historyData[0]->HCEP_Status == 'Absent') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCEP_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>

                                            <div class="col-sm-6 form-group" id="HCEP_status_section_1"
                                                style="display: none;">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCEP_rlb"
                                                        id="HCEP_rlb1" value="Rt" checked>
                                                    <label class="form-check-label" for="HCEP_rlb1">
                                                        Rt
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCEP_rlb"
                                                        id="HCEP_rlb2" value="Lt">
                                                    <label class="form-check-label" for="HCEP_rlb2">
                                                        Lt
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCEP_rlb"
                                                        id="HCEP_rlb3" value="Both">
                                                    <label class="form-check-label" for="HCEP_status3">
                                                        Both
                                                    </label>
                                                </div>
                                                <?php }else{ ?>

                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCEP_rlb"
                                                        id="HCEP_rlb1" value="Rt"
                                                        <?php if($get_adult_case_historyData[0]->HCEP_RLB == 'Rt') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCEP_rlb1">
                                                        Rt
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCEP_rlb"
                                                        id="HCEP_rlb2" value="Lt"
                                                        <?php if($get_adult_case_historyData[0]->HCEP_RLB == 'Lt') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCEP_rlb2">
                                                        Lt
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCEP_rlb"
                                                        id="HCEP_rlb3" value="Both"
                                                        <?php if($get_adult_case_historyData[0]->HCEP_RLB == 'Both') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCEP_status3">
                                                        Both
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-8 row" id="HCEP_status_section_2" style="display: none;">
                                            <div class="col-sm-3 mb-3">
                                                <label for="inputEmail3" class="col-sm-12">Since :</label>
                                                <div class="col-sm-12">
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control" id="HCEP_since"
                                                        name="HCEP_since" placeholder="Enter Since" value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control" id="HCEP_since"
                                                        name="HCEP_since" placeholder="Enter Since"
                                                        value="<?php echo $get_adult_case_historyData[0]->HCEP_Since; ?>">
                                                    <?php } ?>
                                                </div>
                                            </div>

                                            <div class="col-sm-8 form-group">
                                                <label for="inputEmail3" style="display: block">Nature :</label>
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCEP_nature"
                                                        id="HCEP_nature1" value="continuous" checked>
                                                    <label class="form-check-label" for="HCEP_nature1">
                                                        continuous
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCEP_nature"
                                                        id="HCEP_nature2" value="intermittent">
                                                    <label class="form-check-label" for="HCEP_nature2">
                                                        intermittent
                                                    </label>
                                                </div>
                                                <?php }else{ ?>

                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCEP_nature"
                                                        id="HCEP_nature1" value="continuous"
                                                        <?php if($get_adult_case_historyData[0]->HCEP_Nature == 'continuous') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCEP_nature1">
                                                        continuous
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCEP_nature"
                                                        id="HCEP_nature2" value="intermittent"
                                                        <?php if($get_adult_case_historyData[0]->HCEP_Nature == 'intermittent') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCEP_nature2">
                                                        intermittent
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-4 row mb-3">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">History/ Complaint
                                                of Ear discharge:</label>
                                            <div class="col-sm-6 form-group">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCED_status"
                                                        id="HCED_status1" value="Present"
                                                        onclick="HCED_status_click('Present')" checked>
                                                    <label class="form-check-label" for="HCED_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCED_status"
                                                        id="HCED_status2" value="Absent"
                                                        onclick="HCED_status_click('Absent')">
                                                    <label class="form-check-label" for="HCED_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php }else{ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCED_status"
                                                        id="HCED_status1" value="Present"
                                                        onclick="HCED_status_click('Present')"
                                                        <?php if($get_adult_case_historyData[0]->HCED_Status == 'Present') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCED_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCED_status"
                                                        id="HCED_status2" value="Absent"
                                                        onclick="HCED_status_click('Absent')"
                                                        <?php if($get_adult_case_historyData[0]->HCED_Status == 'Absent') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCED_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>

                                            <div class="col-sm-6 form-group" id="HCED_status_section_1"
                                                style="display: none">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCED_rlb"
                                                        id="HCED_rlb1" value="Rt" checked>
                                                    <label class="form-check-label" for="HCED_rlb1">
                                                        Rt
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCED_rlb"
                                                        id="HCED_rlb2" value="Lt">
                                                    <label class="form-check-label" for="HCED_rlb2">
                                                        Lt
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCED_rlb"
                                                        id="HCED_rlb3" value="Both">
                                                    <label class="form-check-label" for="HCED_status3">
                                                        Both
                                                    </label>
                                                </div>
                                                <?php }else{ ?>

                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCED_rlb"
                                                        id="HCED_rlb1" value="Rt"
                                                        <?php if($get_adult_case_historyData[0]->HCED_RLB == 'Rt') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCED_rlb1">
                                                        Rt
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCED_rlb"
                                                        id="HCED_rlb2" value="Lt"
                                                        <?php if($get_adult_case_historyData[0]->HCED_RLB == 'Lt') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCED_rlb2">
                                                        Lt
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCED_rlb"
                                                        id="HCED_rlb3" value="Both"
                                                        <?php if($get_adult_case_historyData[0]->HCED_RLB == 'Both') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCED_status3">
                                                        Both
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-8 row" id="HCED_status_section_2" style="display: none;">
                                            <div class="col-sm-3 mb-3">
                                                <label for="inputEmail3" class="col-sm-12">Since :</label>
                                                <div class="col-sm-12">
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control" id="HCED_since"
                                                        name="HCED_since" placeholder="Enter Since" value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control" id="HCED_since"
                                                        name="HCED_since" placeholder="Enter Since"
                                                        value="<?php echo $get_adult_case_historyData[0]->HCED_Since; ?>">
                                                    <?php } ?>
                                                </div>
                                            </div>


                                            <div class="col-sm-5 form-group">
                                                <label for="inputEmail3" style="display: block">Type :</label>
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCED_type"
                                                        id="HCED_type1" value="watery" checked>
                                                    <label class="form-check-label" for="HCED_type1">
                                                        watery
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCED_type"
                                                        id="HCED_type2" value="purulent/ blood stained">
                                                    <label class="form-check-label" for="HCED_type2">
                                                        purulent/ blood stained
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCED_type"
                                                        id="HCED_type3" value="foul smelling">
                                                    <label class="form-check-label" for="HCED_type3">
                                                        foul smelling
                                                    </label>
                                                </div>
                                                <?php }else{ ?>

                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCED_type"
                                                        id="HCED_type1" value="watery"
                                                        <?php if($get_adult_case_historyData[0]->HCED_Type == 'watery') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCED_type1">
                                                        watery
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCED_type"
                                                        id="HCED_type2" value="purulent/ blood stained"
                                                        <?php if($get_adult_case_historyData[0]->HCED_Type == 'purulent/ blood stained') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCED_type2">
                                                        purulent/ blood stained
                                                    </label>
                                                </div>

                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCED_type"
                                                        id="HCED_type3" value="foul smelling"
                                                        <?php if($get_adult_case_historyData[0]->HCED_Type == 'foul smelling') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCED_type3">
                                                        foul smelling
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>

                                            <div class="col-sm-3 form-group">
                                                <label for="inputEmail3" style="display: block">Episode :</label>
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCED_episode"
                                                        id="HCED_episode1" value="recurrent" checked>
                                                    <label class="form-check-label" for="HCED_episode1">
                                                        recurrent
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCED_episode"
                                                        id="HCED_episode2" value="occurred once">
                                                    <label class="form-check-label" for="HCED_episode2">
                                                        occurred once
                                                    </label>
                                                </div>
                                                <?php }else{ ?>

                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCED_episode"
                                                        id="HCED_episode1" value="recurrent"
                                                        <?php if($get_adult_case_historyData[0]->HCED_Episode == 'recurrent') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCED_episode1">
                                                        recurrent
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCED_episode"
                                                        id="HCED_episode2" value="occurred once"
                                                        <?php if($get_adult_case_historyData[0]->HCED_Episode == 'occurred once') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCED_episode2">
                                                        occurred once
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-4 row mb-3">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">History/ Complaint
                                                of Tinnitus:</label>
                                            <div class="col-sm-6 form-group">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCT_status"
                                                        id="HCT_status1" value="Present"
                                                        onclick="HCT_status_click('Present')" checked>
                                                    <label class="form-check-label" for="HCT_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCT_status"
                                                        id="HCT_status2" value="Absent"
                                                        onclick="HCT_status_click('Absent')">
                                                    <label class="form-check-label" for="HCT_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php }else{ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCT_status"
                                                        id="HCT_status1" value="Present"
                                                        onclick="HCT_status_click('Present')"
                                                        <?php if($get_adult_case_historyData[0]->HCT_Status == 'Present') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCT_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCT_status"
                                                        id="HCT_status2" value="Absent"
                                                        onclick="HCT_status_click('Absent')"
                                                        <?php if($get_adult_case_historyData[0]->HCT_Status == 'Absent') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCT_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>

                                            <div class="col-sm-6 form-group" id="HCT_status_section_1"
                                                style="display:none;">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCT_rlb"
                                                        id="HCT_rlb1" value="Rt" checked>
                                                    <label class="form-check-label" for="HCT_rlb1">
                                                        Rt
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCT_rlb"
                                                        id="HCT_rlb2" value="Lt">
                                                    <label class="form-check-label" for="HCT_rlb2">
                                                        Lt
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCT_rlb"
                                                        id="HCT_rlb3" value="Both">
                                                    <label class="form-check-label" for="HCT_status3">
                                                        Both
                                                    </label>
                                                </div>
                                                <?php }else{ ?>

                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCT_rlb"
                                                        id="HCT_rlb1" value="Rt"
                                                        <?php if($get_adult_case_historyData[0]->HCT_RLB == 'Rt') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCT_rlb1">
                                                        Rt
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCT_rlb"
                                                        id="HCT_rlb2" value="Lt"
                                                        <?php if($get_adult_case_historyData[0]->HCT_RLB == 'Lt') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCT_rlb2">
                                                        Lt
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCT_rlb"
                                                        id="HCT_rlb3" value="Both"
                                                        <?php if($get_adult_case_historyData[0]->HCT_RLB == 'Both') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCT_status3">
                                                        Both
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-8 row" id="HCT_status_section_2" style="display: none;">
                                            <div class="col-sm-3 mb-3">
                                                <label for="inputEmail3" class="col-sm-12">Since :</label>
                                                <div class="col-sm-12">
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control" id="HCT_since"
                                                        name="HCT_since" placeholder="Enter Since" value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control" id="HCT_since"
                                                        name="HCT_since" placeholder="Enter Since"
                                                        value="<?php echo $get_adult_case_historyData[0]->HCT_Since; ?>">
                                                    <?php } ?>
                                                </div>
                                            </div>

                                            <div class="col-sm-3 form-group">
                                                <label for="inputEmail3" style="display: block">Type :</label>
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCT_type"
                                                        id="HCT_type1" value="buzzing" checked>
                                                    <label class="form-check-label" for="HCT_type1">
                                                        buzzing
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCT_type"
                                                        id="HCT_type2" value="roaring">
                                                    <label class="form-check-label" for="HCT_type2">
                                                        roaring
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCT_type"
                                                        id="HCT_type3" value="ringing">
                                                    <label class="form-check-label" for="HCT_type3">
                                                        ringing
                                                    </label>
                                                </div>
                                                <?php }else{ ?>

                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCT_type"
                                                        id="HCT_type1" value="buzzing"
                                                        <?php if($get_adult_case_historyData[0]->HCT_Type == 'buzzing') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCT_type1">
                                                        buzzing
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCT_type"
                                                        id="HCT_type2" value="roaring"
                                                        <?php if($get_adult_case_historyData[0]->HCT_Type == 'roaring') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCT_type2">
                                                        roaring
                                                    </label>
                                                </div>

                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCT_type"
                                                        id="HCT_type3" value="ringing"
                                                        <?php if($get_adult_case_historyData[0]->HCT_Type == 'ringing') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCT_type3">
                                                        ringing
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>

                                            <div class="col-sm-3 form-group">
                                                <label for="inputEmail3" style="display: block">Nature :</label>
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCT_nature"
                                                        id="HCT_nature1" value="continuous" checked>
                                                    <label class="form-check-label" for="HCT_nature1">
                                                        continuous
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCT_nature"
                                                        id="HCT_nature2" value="occasional">
                                                    <label class="form-check-label" for="HCT_nature2">
                                                        occasional
                                                    </label>
                                                </div>
                                                <?php }else{ ?>

                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCT_nature"
                                                        id="HCT_nature1" value="continuous"
                                                        <?php if($get_adult_case_historyData[0]->HCT_Nature == 'continuous') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCT_nature1">
                                                        continuous
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCT_nature"
                                                        id="HCT_nature2" value="occasional"
                                                        <?php if($get_adult_case_historyData[0]->HCT_Nature == 'occasional') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCT_nature2">
                                                        occasional
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>

                                            <div class="col-sm-3 mb-3">
                                                <label for="inputEmail3" class="col-sm-12">Duration :</label>
                                                <div class="col-sm-12">
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control" id="HCT_duration"
                                                        name="HCT_duration" placeholder="Enter Duration" value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control" id="HCT_duration"
                                                        name="HCT_duration" placeholder="Enter Duration"
                                                        value="<?php echo $get_adult_case_historyData[0]->HCT_Duration; ?>">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-4 row mb-3">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">History/ Complaint
                                                of vertigo/giddiness:</label>
                                            <div class="col-sm-6 form-group">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCVG_status"
                                                        id="HCVG_status1" value="Present" onclick="HCVG_status_click('Present')" checked>
                                                    <label class="form-check-label" for="HCVG_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCVG_status"
                                                        id="HCVG_status2" value="Absent" onclick="HCVG_status_click('Absent')">
                                                    <label class="form-check-label" for="HCVG_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php }else{ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCVG_status"
                                                        id="HCVG_status1" value="Present" onclick="HCVG_status_click('Present')"
                                                        <?php if($get_adult_case_historyData[0]->HCVG_Status == 'Present') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCVG_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCVG_status"
                                                        id="HCVG_status2" value="Absent" onclick="HCVG_status_click('Absent')"
                                                        <?php if($get_adult_case_historyData[0]->HCVG_Status == 'Absent') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCVG_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-8 row" id="HCVG_status_section_1" style="display: none;">
                                            <div class="col-sm-3 mb-3">
                                                <label for="inputEmail3" class="col-sm-12">Since :</label>
                                                <div class="col-sm-12">
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control" id="HCVG_since"
                                                        name="HCVG_since" placeholder="Enter Since" value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control" id="HCVG_since"
                                                        name="HCVG_since" placeholder="Enter Since"
                                                        value="<?php echo $get_adult_case_historyData[0]->HCVG_Since; ?>">
                                                    <?php } ?>
                                                </div>
                                            </div>

                                            <div class="col-sm-9 form-group">
                                                <label for="inputEmail3" style="display: block">Nature :</label>
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCVG_nature"
                                                        id="HCVG_nature1" value="imbalance" checked>
                                                    <label class="form-check-label" for="HCVG_nature1">
                                                        imbalance
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCVG_nature"
                                                        id="HCVG_nature2" value=" light headedness">
                                                    <label class="form-check-label" for="HCVG_nature2">
                                                        light headedness
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCVG_nature"
                                                        id="HCVG_nature3" value="self rotating Sudden black out">
                                                    <label class="form-check-label" for="HCVG_nature3">
                                                        self rotating Sudden black out
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCVG_nature"
                                                        id="HCVG_nature4" value="surrounding rotating">
                                                    <label class="form-check-label" for="HCVG_nature4">
                                                        surrounding rotating
                                                    </label>
                                                </div>
                                                <?php }else{ ?>

                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCVG_nature"
                                                        id="HCVG_nature1" value="imbalance"
                                                        <?php if($get_adult_case_historyData[0]->HCVG_Nature == 'imbalance') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCVG_nature1">
                                                        imbalance
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCVG_nature"
                                                        id="HCVG_nature2" value=" light headedness"
                                                        <?php if($get_adult_case_historyData[0]->HCVG_Nature == ' light headedness') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCVG_nature2">
                                                        light headedness
                                                    </label>
                                                </div>

                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCVG_nature"
                                                        id="HCVG_nature3" value="self rotating Sudden black out"
                                                        <?php if($get_adult_case_historyData[0]->HCVG_Nature == 'self rotating Sudden black out') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCVG_nature3">
                                                        self rotating Sudden black out
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCVG_nature"
                                                        id="HCVG_nature4" value="surrounding rotating"
                                                        <?php if($get_adult_case_historyData[0]->HCVG_Nature == 'surrounding rotating') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCVG_nature4">
                                                        surrounding rotating
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12 row mb-3">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">C/O speech
                                                understanding difficulty:</label>
                                            <div class="col-sm-3 form-group">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="COSUD_status"
                                                        id="COSUD_status1" value="Present" onclick="COSUD_status_click('Present')" checked>
                                                    <label class="form-check-label" for="COSUD_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="COSUD_status"
                                                        id="COSUD_status2" value="Absent" onclick="COSUD_status_click('Absent')">
                                                    <label class="form-check-label" for="COSUD_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php }else{ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="COSUD_status"
                                                        id="COSUD_status1" value="Present" onclick="COSUD_status_click('Present')"
                                                        <?php if($get_adult_case_historyData[0]->COSUD_Status == 'Present') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="COSUD_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="COSUD_status"
                                                        id="COSUD_status2" value="Absent" onclick="COSUD_status_click('Absent')"
                                                        <?php if($get_adult_case_historyData[0]->COSUD_Status == 'Absent') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="COSUD_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>

                                            <div class="col-sm-9 form-group" id="COSUD_status_section_1">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="COSUD_situation"
                                                        id="COSUD_situation1" value="In all situation" checked>
                                                    <label class="form-check-label" for="COSUD_situation1">
                                                        In all situation
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="COSUD_situation"
                                                        id="COSUD_situation2" value="only in noisy situation">
                                                    <label class="form-check-label" for="COSUD_situation2">
                                                        only in noisy situation
                                                    </label>
                                                </div>
                                                <?php }else{ ?>

                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="COSUD_situation"
                                                        id="COSUD_situation1" value="In all situation"
                                                        <?php if($get_adult_case_historyData[0]->COSUD_Situation == 'In all situation') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="COSUD_situation1">
                                                        In all situation
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="COSUD_situation"
                                                        id="COSUD_situation2" value="only in noisy situation"
                                                        <?php if($get_adult_case_historyData[0]->COSUD_Situation == 'only in noisy situation') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="COSUD_situation2">
                                                        only in noisy situation
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5 row mb-3">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">H/O exposure to
                                                noise:</label>
                                            <div class="col-sm-6 form-group">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HOEN_status"
                                                        id="HOEN_status1" value="Present" onclick="HOEN_status_click('Present')" checked>
                                                    <label class="form-check-label" for="HOEN_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HOEN_status"
                                                        id="HOEN_status2" value="Absent" onclick="HOEN_status_click('Absent')">
                                                    <label class="form-check-label" for="HOEN_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php }else{ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HOEN_status"
                                                        id="HOEN_status1" value="Present" onclick="HOEN_status_click('Present')"
                                                        <?php if($get_adult_case_historyData[0]->HOEN_Status == 'Present') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HOEN_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HOEN_status"
                                                        id="HOEN_status2" value="Absent" onclick="HOEN_status_click('Absent')"
                                                        <?php if($get_adult_case_historyData[0]->HOEN_Status == 'Absent') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HOEN_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>

                                            <div class="col-sm-6 form-group" id="HOEN_status_section_1" style="display: none;">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HOEN_noise"
                                                        id="HOEN_noise1" value="Sudden very loud noise" checked>
                                                    <label class="form-check-label" for="HOEN_noise1">
                                                        Sudden very loud noise
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HOEN_noise"
                                                        id="HOEN_noise2" value=" continuous loud noise">
                                                    <label class="form-check-label" for="HOEN_noise2">
                                                        continuous loud noise
                                                    </label>
                                                </div>
                                                <?php }else{ ?>

                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HOEN_noise"
                                                        id="HOEN_noise1" value="Sudden very loud noise"
                                                        <?php if($get_adult_case_historyData[0]->HOEN_Noise == 'Sudden very loud noise') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HOEN_noise1">
                                                        Sudden very loud noise
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HOEN_noise"
                                                        id="HOEN_noise2" value=" continuous loud noise"
                                                        <?php if($get_adult_case_historyData[0]->HOEN_Noise == ' continuous loud noise') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HOEN_noise2">
                                                        continuous loud noise
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-7 row" id="HOEN_status_section_2" style="display: none;">
                                            <div class="col-sm-4 mb-3">
                                                <label for="inputEmail3" class="col-sm-12">hours/day :</label>
                                                <div class="col-sm-12">
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control" id="HOEN_hour_day"
                                                        name="HOEN_hour_day" placeholder="Enter Hour/Day" value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control" id="HOEN_hour_day"
                                                        name="HOEN_hour_day" placeholder="Enter Hour/Day"
                                                        value="<?php echo $get_adult_case_historyData[0]->HOEN_Hour_Day; ?>">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mb-3">
                                                <label for="inputEmail3" class="col-sm-12">Since :</label>
                                                <div class="col-sm-12">
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control" id="HOEN_since"
                                                        name="HOEN_since" placeholder="Enter Since" value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control" id="HOEN_since"
                                                        name="HOEN_since" placeholder="Enter Since"
                                                        value="<?php echo $get_adult_case_historyData[0]->HOEN_Since; ?>">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mb-3">
                                                <label for="inputEmail3" class="col-sm-12">Details :</label>
                                                <div class="col-sm-12">
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control" id="HOEN_details"
                                                        name="HOEN_details" placeholder="Enter Since" value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control" id="HOEN_details"
                                                        name="HOEN_details" placeholder="Enter Since"
                                                        value="<?php echo $get_adult_case_historyData[0]->HOEN_Details; ?>">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3 row mb-3">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">H/O
                                                trauma:</label>
                                            <div class="col-sm-12 form-group">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HOT_status"
                                                        id="HOT_status1" value="Yes" onclick="HOT_status_click('Yes')" checked>
                                                    <label class="form-check-label" for="HOT_status1">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HOT_status"
                                                        id="HOT_status2" value="No" onclick="HOT_status_click('No')">
                                                    <label class="form-check-label" for="HOT_status2">
                                                        No
                                                    </label>
                                                </div>
                                                <?php }else{ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HOT_status"
                                                        id="HOT_status1" value="Yes" onclick="HOT_status_click('Yes')"
                                                        <?php if($get_adult_case_historyData[0]->HOT_Status == 'Yes') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HOT_status1">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HOT_status"
                                                        id="HOT_status2" value="No" onclick="HOT_status_click('No')"
                                                        <?php if($get_adult_case_historyData[0]->HOT_Status == 'No') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HOT_status2">
                                                        No
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 row" id="HOT_status_section_1" style="display: none;">
                                            <div class="col-sm-4 mb-3">
                                                <label for="inputEmail3" class="col-sm-12 col-form-label">To
                                                    Ear:</label>
                                                <div class="col-sm-12 form-group">
                                                    <?php if($edit === false){ ?>
                                                    <div class="form-check"
                                                        style="display: inline-block;margin: 0 5px;">
                                                        <input class="form-check-input" type="radio" name="HOT_to_ear"
                                                            id="HOT_to_ear1" value="Rt" checked>
                                                        <label class="form-check-label" for="HOT_to_ear1">
                                                            Rt
                                                        </label>
                                                    </div>
                                                    <div class="form-check"
                                                        style="display: inline-block;margin: 0 5px;">
                                                        <input class="form-check-input" type="radio" name="HOT_to_ear"
                                                            id="HOT_to_ear2" value="Lt">
                                                        <label class="form-check-label" for="HOT_to_ear2">
                                                            Lt
                                                        </label>
                                                    </div>
                                                    <div class="form-check"
                                                        style="display: inline-block;margin: 0 5px;">
                                                        <input class="form-check-input" type="radio" name="HOT_to_ear"
                                                            id="HOT_to_ear3" value="Both Ear">
                                                        <label class="form-check-label" for="HOT_to_ear3">
                                                            Both Ear
                                                        </label>
                                                    </div>
                                                    <?php }else{ ?>
                                                    <div class="form-check"
                                                        style="display: inline-block;margin: 0 5px;">
                                                        <input class="form-check-input" type="radio" name="HOT_to_ear"
                                                            id="HOT_to_ear1" value="Rt"
                                                            <?php if($get_adult_case_historyData[0]->HOT_To_Ear == 'Rt') { echo "checked"; } ?>>
                                                        <label class="form-check-label" for="HOT_to_ear1">
                                                            Rt
                                                        </label>
                                                    </div>
                                                    <div class="form-check"
                                                        style="display: inline-block;margin: 0 5px;">
                                                        <input class="form-check-input" type="radio" name="HOT_to_ear"
                                                            id="HOT_to_ear2" value="Lt"
                                                            <?php if($get_adult_case_historyData[0]->HOT_To_Ear == 'Lt') { echo "checked"; } ?>>
                                                        <label class="form-check-label" for="HOT_to_ear2">
                                                            Lt
                                                        </label>
                                                    </div>
                                                    <div class="form-check"
                                                        style="display: inline-block;margin: 0 5px;">
                                                        <input class="form-check-input" type="radio" name="HOT_to_ear"
                                                            id="HOT_to_ear3" value="Both Ear"
                                                            <?php if($get_adult_case_historyData[0]->HOT_To_Ear == 'Both Ear') { echo "checked"; } ?>>
                                                        <label class="form-check-label" for="HOT_to_ear3">
                                                            Both Ear
                                                        </label>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 mb-3">
                                                <label for="inputEmail3" class="col-sm-12 col-form-label">To
                                                    head:</label>
                                                <div class="col-sm-12 form-group">
                                                    <?php if($edit === false){ ?>
                                                    <div class="form-check"
                                                        style="display: inline-block;margin: 0 5px;">
                                                        <input class="form-check-input" type="radio" name="HOT_to_head"
                                                            id="HOT_to_head1" value="Rt" checked>
                                                        <label class="form-check-label" for="HOT_to_head1">
                                                            Rt
                                                        </label>
                                                    </div>
                                                    <div class="form-check"
                                                        style="display: inline-block;margin: 0 5px;">
                                                        <input class="form-check-input" type="radio" name="HOT_to_head"
                                                            id="HOT_to_head2" value="Lt">
                                                        <label class="form-check-label" for="HOT_to_head2">
                                                            Lt
                                                        </label>
                                                    </div>
                                                    <div class="form-check"
                                                        style="display: inline-block;margin: 0 5px;">
                                                        <input class="form-check-input" type="radio" name="HOT_to_head"
                                                            id="HOT_to_head3" value="Both side">
                                                        <label class="form-check-label" for="HOT_to_head3">
                                                            Both side
                                                        </label>
                                                    </div>
                                                    <?php }else{ ?>
                                                    <div class="form-check"
                                                        style="display: inline-block;margin: 0 5px;">
                                                        <input class="form-check-input" type="radio" name="HOT_to_head"
                                                            id="HOT_to_head1" value="Rt"
                                                            <?php if($get_adult_case_historyData[0]->HOT_To_Head == 'Rt') { echo "checked"; } ?>>
                                                        <label class="form-check-label" for="HOT_to_head1">
                                                            Rt
                                                        </label>
                                                    </div>
                                                    <div class="form-check"
                                                        style="display: inline-block;margin: 0 5px;">
                                                        <input class="form-check-input" type="radio" name="HOT_to_head"
                                                            id="HOT_to_head2" value="Lt"
                                                            <?php if($get_adult_case_historyData[0]->HOT_To_Head == 'Lt') { echo "checked"; } ?>>
                                                        <label class="form-check-label" for="HOT_to_head2">
                                                            Lt
                                                        </label>
                                                    </div>
                                                    <div class="form-check"
                                                        style="display: inline-block;margin: 0 5px;">
                                                        <input class="form-check-input" type="radio" name="HOT_to_head"
                                                            id="HOT_to_head3" value="Both side"
                                                            <?php if($get_adult_case_historyData[0]->HOT_To_Head == 'Both side') { echo "checked"; } ?>>
                                                        <label class="form-check-label" for="HOT_to_head3">
                                                            Both side
                                                        </label>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mb-3">
                                                <label for="inputEmail3" class="col-sm-12">Details :</label>
                                                <div class="col-sm-12">
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control" id="HOT_details"
                                                        name="HOT_details" placeholder="Enter Since" value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control" id="HOT_details"
                                                        name="HOT_details" placeholder="Enter Since"
                                                        value="<?php echo $get_adult_case_historyData[0]->HOT_Details; ?>">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5 row mb-3">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">C/O intolerance to
                                                loud sounds:</label>
                                            <div class="col-sm-6 form-group">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="COILS_status"
                                                        id="COILS_status1" value="Present" onclick="COILS_status_click('Present')" checked>
                                                    <label class="form-check-label" for="COILS_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="COILS_status"
                                                        id="COILS_status2" value="Absent" onclick="COILS_status_click('Absent')">
                                                    <label class="form-check-label" for="COILS_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php }else{ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="COILS_status"
                                                        id="COILS_status1" value="Present" onclick="COILS_status_click('Present')"
                                                        <?php if($get_adult_case_historyData[0]->COILS_Status == 'Present') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="COILS_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="COILS_status"
                                                        id="COILS_status2" value="Absent" onclick="COILS_status_click('Absent')"
                                                        <?php if($get_adult_case_historyData[0]->COILS_Status == 'Absent') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="COILS_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>

                                            <div class="col-sm-6 form-group" id="COILS_status_section_1" style="display: none;">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="COILS_noise"
                                                        id="COILS_noise1" value="To all sounds" checked>
                                                    <label class="form-check-label" for="COILS_noise1">
                                                        To all sounds
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="COILS_noise"
                                                        id="COILS_noise2" value="specific sound">
                                                    <label class="form-check-label" for="COILS_noise2">
                                                        specific sound
                                                    </label>
                                                </div>
                                                <?php }else{ ?>

                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="COILS_noise"
                                                        id="COILS_noise1" value="To all sounds"
                                                        <?php if($get_adult_case_historyData[0]->COILS_Noise == 'To all sounds') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="COILS_noise1">
                                                        To all sounds
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="COILS_noise"
                                                        id="COILS_noise2" value="specific sound"
                                                        <?php if($get_adult_case_historyData[0]->COILS_Noise == 'specific sound') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="COILS_noise2">
                                                        specific sound
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-7 row" id="COILS_status_section_2" style="display: none;">
                                            <div class="col-sm-12 mb-3">
                                                <label for="inputEmail3" class="col-sm-12">Since :</label>
                                                <div class="col-sm-12">
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control" id="COILS_since"
                                                        name="COILS_since" placeholder="Enter Since" value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control" id="COILS_since"
                                                        name="COILS_since" placeholder="Enter Since"
                                                        value="<?php echo $get_adult_case_historyData[0]->COILS_Since; ?>">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-4 row mb-3">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">H/O usage of Otto
                                                toxic drugs:</label>
                                            <div class="col-sm-12 form-group">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HOOTD_status"
                                                        id="HOOTD_status1" value="Present" onclick="HOOTD_status_click('Present')" checked>
                                                    <label class="form-check-label" for="HOOTD_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HOOTD_status"
                                                        id="HOOTD_status2" value="Absent" onclick="HOOTD_status_click('Absent')">
                                                    <label class="form-check-label" for="HOOTD_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php }else{ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HOOTD_status"
                                                        id="HOOTD_status1" value="Present" onclick="HOOTD_status_click('Present')"
                                                        <?php if($get_adult_case_historyData[0]->HOOTD_Status == 'Present') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HOOTD_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HOOTD_status"
                                                        id="HOOTD_status2" value="Absent" onclick="HOOTD_status_click('Absent')"
                                                        <?php if($get_adult_case_historyData[0]->HOOTD_Status == 'Absent') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HOOTD_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-8 row" id="HOOTD_status_section_1" style="display: none;">
                                            <div class="col-sm-12 mb-3">
                                                <label for="inputEmail3" class="col-sm-12">Details :</label>
                                                <div class="col-sm-12">
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control" id="HOOTD_details"
                                                        name="HOOTD_details" placeholder="Enter Since" value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control" id="HOOTD_details"
                                                        name="HOOTD_details" placeholder="Enter Since"
                                                        value="<?php echo $get_adult_case_historyData[0]->HOOTD_Details; ?>">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-4 row mb-3">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">H/O
                                                Diabetics:</label>
                                            <div class="col-sm-6 form-group">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HOD_status"
                                                        id="HOD_status1" value="Present" onclick="HOD_status_click('Present')" checked>
                                                    <label class="form-check-label" for="HOD_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HOD_status"
                                                        id="HOD_status2" value="Absent" onclick="HOD_status_click('Absent')">
                                                    <label class="form-check-label" for="HOD_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php }else{ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HOD_status"
                                                        id="HOD_status1" value="Present" onclick="HOD_status_click('Present')"
                                                        <?php if($get_adult_case_historyData[0]->HOD_Status == 'Present') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HOD_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HOD_status"
                                                        id="HOD_status2" value="Absent" onclick="HOD_status_click('Absent')"
                                                        <?php if($get_adult_case_historyData[0]->HOD_Status == 'Absent') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HOD_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-8 row" id="HOD_status_section_1" style="display: none;">
                                            <div class="col-sm-12 mb-3">
                                                <label for="inputEmail3" class="col-sm-12">Since :</label>
                                                <div class="col-sm-12">
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control" id="HOD_since"
                                                        name="HOD_since" placeholder="Enter Since" value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control" id="HOD_since"
                                                        name="HOD_since" placeholder="Enter Since"
                                                        value="<?php echo $get_adult_case_historyData[0]->HOD_Since; ?>">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-4 row mb-3">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">H/O Bacterial/
                                                Viral infection:</label>
                                            <div class="col-sm-12 form-group">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HOBVI_status"
                                                        id="HOBVI_status1" value="Present" onclick="HOBVI_status_click('Present')" checked>
                                                    <label class="form-check-label" for="HOBVI_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HOBVI_status"
                                                        id="HOBVI_status2" value="Absent" onclick="HOBVI_status_click('Absent')">
                                                    <label class="form-check-label" for="HOBVI_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php }else{ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HOBVI_status"
                                                        id="HOBVI_status1" value="Present" onclick="HOBVI_status_click('Present')"
                                                        <?php if($get_adult_case_historyData[0]->HOBVI_Status == 'Present') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HOBVI_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HOBVI_status"
                                                        id="HOBVI_status2" value="Absent" onclick="HOBVI_status_click('Absent')"
                                                        <?php if($get_adult_case_historyData[0]->HOBVI_Status == 'Absent') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HOBVI_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-8 row" id="HOBVI_status_section_1" style="display: none;">
                                            <div class="col-sm-12 mb-3">
                                                <label for="inputEmail3" class="col-sm-12">Details :</label>
                                                <div class="col-sm-12">
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control" id="HOBVI_details"
                                                        name="HOBVI_details" placeholder="Enter Details" value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control" id="HOBVI_details"
                                                        name="HOBVI_details" placeholder="Enter Details"
                                                        value="<?php echo $get_adult_case_historyData[0]->HOBVI_Details; ?>">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-4 row mb-3">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Any Speech
                                                abnormality:</label>
                                            <div class="col-sm-12 form-group">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="ASA_status"
                                                        id="ASA_status1" value="Present" onclick="ASA_status_click('Present')" checked>
                                                    <label class="form-check-label" for="ASA_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="ASA_status"
                                                        id="ASA_status2" value="Absent" onclick="ASA_status_click('Absent')">
                                                    <label class="form-check-label" for="ASA_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php }else{ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="ASA_status"
                                                        id="ASA_status1" value="Present" onclick="ASA_status_click('Present')"
                                                        <?php if($get_adult_case_historyData[0]->ASA_Status == 'Present') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="ASA_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="ASA_status"
                                                        id="ASA_status2" value="Absent" onclick="ASA_status_click('Absent')"
                                                        <?php if($get_adult_case_historyData[0]->ASA_Status == 'Absent') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="ASA_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-8 row" id="ASA_status_section_1" style="display: none;">
                                            <div class="col-sm-12 mb-3">
                                                <label for="inputEmail3" class="col-sm-12">Details :</label>
                                                <div class="col-sm-12">
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control" id="ASA_details"
                                                        name="ASA_details" placeholder="Enter Details" value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control" id="ASA_details"
                                                        name="ASA_details" placeholder="Enter Details"
                                                        value="<?php echo $get_adult_case_historyData[0]->ASA_Details; ?>">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-4 row mb-3">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Any other
                                                associated problems:</label>
                                            <div class="col-sm-12 form-group">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="AOAP_status"
                                                        id="AOAP_status1" value="Present" onclick="AOAP_status_click('Present')" checked>
                                                    <label class="form-check-label" for="AOAP_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="AOAP_status"
                                                        id="AOAP_status2" value="Absent" onclick="AOAP_status_click('Absent')">
                                                    <label class="form-check-label" for="AOAP_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php }else{ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="AOAP_status"
                                                        id="AOAP_status1" value="Present" onclick="AOAP_status_click('Present')"
                                                        <?php if($get_adult_case_historyData[0]->AOAP_Status == 'Present') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="AOAP_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="AOAP_status"
                                                        id="AOAP_status2" value="Absent" onclick="AOAP_status_click('Absent')"
                                                        <?php if($get_adult_case_historyData[0]->AOAP_Status == 'Absent') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="AOAP_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-8 row" id="AOAP_status_section_1" style="display: none">
                                            <div class="col-sm-12 mb-3">
                                                <label for="inputEmail3" class="col-sm-12">Details :</label>
                                                <div class="col-sm-12">
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control" id="AOAP_details"
                                                        name="AOAP_details" placeholder="Enter Details" value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control" id="AOAP_details"
                                                        name="AOAP_details" placeholder="Enter Details"
                                                        value="<?php echo $get_adult_case_historyData[0]->AOAP_Details; ?>">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">H/O previous
                                            treatment/investigations :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="HOPTI"
                                                name="HOPTI" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="HOPTI"
                                                name="HOPTI"
                                                style="height: 100px"><?php echo $get_adult_case_historyData[0]->HOPTI; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-4 row mb-3">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">H/O usage of
                                                hearing aid:</label>
                                            <div class="col-sm-12 form-group">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HOUHA_status"
                                                        id="HOUHA_status1" value="Present" onclick="HOUHA_status_click('Present')" checked>
                                                    <label class="form-check-label" for="HOUHA_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HOUHA_status"
                                                        id="HOUHA_status2" value="Absent">
                                                    <label class="form-check-label" for="HOUHA_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php }else{ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HOUHA_status"
                                                        id="HOUHA_status1" value="Present" onclick="HOUHA_status_click('Present')"
                                                        <?php if($get_adult_case_historyData[0]->HOUHA_Status == 'Present') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HOUHA_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HOUHA_status"
                                                        id="HOUHA_status2" value="Absent"
                                                        <?php if($get_adult_case_historyData[0]->HOUHA_Status == 'Absent') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HOUHA_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-8 row" id="HOUHA_status_section_1" style="display: none;">
                                            <div class="col-sm-6 mb-3">
                                                <label for="inputEmail3" class="col-sm-12">Details :</label>
                                                <div class="col-sm-12">
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control" id="HOUHA_details"
                                                        name="HOUHA_details" placeholder="Enter Details" value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control" id="HOUHA_details"
                                                        name="HOUHA_details" placeholder="Enter Details"
                                                        value="<?php echo $get_adult_case_historyData[0]->HOUHA_Details; ?>">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mb-3">
                                                <label for="inputEmail3" class="col-sm-12">Duration :</label>
                                                <div class="col-sm-12">
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control" id="HOUHA_duration"
                                                        name="HOUHA_duration" placeholder="Enter Duration" value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control" id="HOUHA_duration"
                                                        name="HOUHA_duration" placeholder="Enter Duration"
                                                        value="<?php echo $get_adult_case_historyData[0]->HOUHA_Duration; ?>">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">ENT findings :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="ENT_findings"
                                                name="ENT_findings" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="ENT_findings"
                                                name="ENT_findings"
                                                style="height: 100px"><?php echo $get_adult_case_historyData[0]->ENT_findings; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <h5>Recommendations</h5>
                                    <br>

                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Audiological evaluation
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="Audiological_evaluation" name="Audiological_evaluation"
                                                style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="Audiological_evaluation" name="Audiological_evaluation"
                                                style="height: 100px"><?php echo $get_adult_case_historyData[0]->Audiological_Evaluation; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">ENT Review :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="ENT_Review"
                                                name="ENT_Review" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="ENT_Review"
                                                name="ENT_Review"
                                                style="height: 100px"><?php echo $get_adult_case_historyData[0]->ENT_Review; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Follow up :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="Follow_up"
                                                name="Follow_up" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="Follow_up"
                                                name="Follow_up"
                                                style="height: 100px"><?php echo $get_adult_case_historyData[0]->Follow_Up; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        
                        <?php if($action == 1){ ?>
                            <?php if($edit === true): ?>
                            <button type="submit" class="btn btn-primary float-right" name="edit_adult_case_history"
                                id="edit_adult_case_history">Submit</button>
                            <?php else: ?>
                            <button type="submit" class="btn btn-primary float-right" name="add_adult_case_history"
                                id="add_adult_case_history">Submit</button>
                            <?php endif; ?>
                        <?php } ?>    
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<script>

 
function HOUHA_status_click(name) {
    if (name == 'Present') {
        $("#HOUHA_status_section_1").show();
    } else {
        $("#HOUHA_status_section_1").hide();
    }
}  
    
function AOAP_status_click(name) {
    if (name == 'Present') {
        $("#AOAP_status_section_1").show();
    } else {
        $("#AOAP_status_section_1").hide();
    }
}   

function ASA_status_click(name) {
    if (name == 'Present') {
        $("#ASA_status_section_1").show();
    } else {
        $("#ASA_status_section_1").hide();
    }
}   

function HOBVI_status_click(name) {
    if (name == 'Present') {
        $("#HOBVI_status_section_1").show();
    } else {
        $("#HOBVI_status_section_1").hide();
    }
}   

function HOD_status_click(name) {
    if (name == 'Present') {
        $("#HOD_status_section_1").show();
    } else {
        $("#HOD_status_section_1").hide();
    }
}   

function HOOTD_status_click(name) {
    if (name == 'Present') {
        $("#HOOTD_status_section_1").show();
    } else {
        $("#HOOTD_status_section_1").hide();
    }
}   

function COILS_status_click(name) {
    if (name == 'Present') {
        $("#COILS_status_section_1").show();
        $("#COILS_status_section_2").show();
    } else {
        $("#COILS_status_section_1").hide();
        $("#COILS_status_section_2").hide();
    }
}   

function HOT_status_click(name) {
    if (name == 'Yes') {
        $("#HOT_status_section_1").show();
    } else {
        $("#HOT_status_section_1").hide();
    }
}   

function HOEN_status_click(name) {
    if (name == 'Present') {
        $("#HOEN_status_section_1").show();
        $("#HOEN_status_section_2").show();
    } else {
        $("#HOEN_status_section_1").hide();
        $("#HOEN_status_section_2").hide();
    }
}   

function COSUD_status_click(name) {
    if (name == 'Present') {
        $("#COSUD_status_section_1").show();
    } else {
        $("#COSUD_status_section_1").hide();
    }
}

function HCVG_status_click(name) {
    if (name == 'Present') {
        $("#HCVG_status_section_1").show();
    } else {
        $("#HCVG_status_section_1").hide();
    }
}

function HCT_status_click(name) {
    if (name == 'Present') {
        $("#HCT_status_section_1").show();
        $("#HCT_status_section_2").show();
    } else {
        $("#HCT_status_section_1").hide();
        $("#HCT_status_section_2").hide();
    }
}

function HCED_status_click(name) {
    if (name == 'Present') {
        $("#HCED_status_section_1").show();
        $("#HCED_status_section_2").show();
    } else {
        $("#HCED_status_section_1").hide();
        $("#HCED_status_section_2").hide();
    }
}

function HCEP_status_click(name) {
    if (name == 'Present') {
        $("#HCEP_status_section_1").show();
        $("#HCEP_status_section_2").show();
    } else {
        $("#HCEP_status_section_1").hide();
        $("#HCEP_status_section_2").hide();
    }
}

function HCBS_status_click(name) {
    if (name == 'Present') {
        $("#HCBS_status_section_1").show();
        $("#HCBS_status_section_2").show();
    } else {
        $("#HCBS_status_section_1").hide();
        $("#HCBS_status_section_2").hide();
    }
}

function HCRHS_status_click(name) {
    if (name == 'Present') {
        $("#HCRHS_status_section_1").show();
        $("#HCRHS_status_section_2").show();
    } else {
        $("#HCRHS_status_section_1").hide();
        $("#HCRHS_status_section_2").hide();
    }
}
</script>


<?php if($edit) { ?>


<?php if($get_adult_case_historyData[0]->HOUHA_Status == 'Present') { ?>
<script>
$(document).ready(function() {
    $("#HOUHA_status_section_1").show();
});
</script>
<?php }else{ ?>
<script>
$(document).ready(function() {
    $("#HOUHA_status_section_1").hide();
});
</script>
<?php } ?>
    
    
    
<?php if($get_adult_case_historyData[0]->AOAP_Status == 'Present') { ?>
<script>
$(document).ready(function() {
    $("#AOAP_status_section_1").show();
});
</script>
<?php }else{ ?>
<script>
$(document).ready(function() {
    $("#AOAP_status_section_1").hide();
});
</script>
<?php } ?>
    
    
<?php if($get_adult_case_historyData[0]->ASA_Status == 'Present') { ?>
<script>
$(document).ready(function() {
    $("#ASA_status_section_1").show();
});
</script>
<?php }else{ ?>
<script>
$(document).ready(function() {
    $("#ASA_status_section_1").hide();
});
</script>
<?php } ?>
    
<?php if($get_adult_case_historyData[0]->HOBVI_Status == 'Present') { ?>
<script>
$(document).ready(function() {
    $("#HOBVI_status_section_1").show();
});
</script>
<?php }else{ ?>
<script>
$(document).ready(function() {
    $("#HOBVI_status_section_1").hide();
});
</script>
<?php } ?>

    
<?php if($get_adult_case_historyData[0]->HOD_Status == 'Present') { ?>
<script>
$(document).ready(function() {
    $("#HOD_status_section_1").show();
});
</script>
<?php }else{ ?>
<script>
$(document).ready(function() {
    $("#HOD_status_section_1").hide();
});
</script>
<?php } ?>

    
    
<?php if($get_adult_case_historyData[0]->HOOTD_Status == 'Present') { ?>
<script>
$(document).ready(function() {
    $("#HOOTD_status_section_1").show();
});
</script>
<?php }else{ ?>
<script>
$(document).ready(function() {
    $("#HOOTD_status_section_1").hide();
});
</script>
<?php } ?>
    
<?php if($get_adult_case_historyData[0]->COILS_Status == 'Present') { ?>
<script>
$(document).ready(function() {
    $("#COILS_status_section_1").show();
    $("#COILS_status_section_2").show();
});
</script>
<?php }else{ ?>
<script>
$(document).ready(function() {
    $("#COILS_status_section_1").hide();
    $("#COILS_status_section_2").hide();
});
</script>
<?php } ?>

    
<?php if($get_adult_case_historyData[0]->HOT_Status == 'Yes') { ?>
<script>
$(document).ready(function() {
    $("#HOT_status_section_1").show();
});
</script>
<?php }else{ ?>
<script>
$(document).ready(function() {
    $("#HOT_status_section_1").hide();
});
</script>
<?php } ?>

    
<?php if($get_adult_case_historyData[0]->HOEN_Status == 'Present') { ?>
<script>
$(document).ready(function() {
    $("#HOEN_status_section_1").show();
    $("#HOEN_status_section_2").show();
});
</script>
<?php }else{ ?>
<script>
$(document).ready(function() {
    $("#HOEN_status_section_1").hide();
    $("#HOEN_status_section_2").hide();
});
</script>
<?php } ?>

    
<?php if($get_adult_case_historyData[0]->COSUD_Status == 'Present') { ?>
<script>
$(document).ready(function() {
    $("#COSUD_status_section_1").show();
});
</script>
<?php }else{ ?>
<script>
$(document).ready(function() {
    $("#COSUD_status_section_1").hide();
});
</script>
<?php } ?>

    
<?php if($get_adult_case_historyData[0]->HCVG_Status == 'Present') { ?>
<script>
$(document).ready(function() {
    $("#HCVG_status_section_1").show();
});
</script>
<?php }else{ ?>
<script>
$(document).ready(function() {
    $("#HCVG_status_section_1").hide();
});
</script>
<?php } ?>

    
<?php if($get_adult_case_historyData[0]->HCT_Status == 'Present') { ?>
<script>
$(document).ready(function() {
    $("#HCT_status_section_1").show();
    $("#HCT_status_section_2").show();
});
</script>
<?php }else{ ?>
<script>
$(document).ready(function() {
    $("#HCT_status_section_1").hide();
    $("#HCT_status_section_2").hide();
});
</script>
<?php } ?>


<?php if($get_adult_case_historyData[0]->HCED_Status == 'Present') { ?>
<script>
$(document).ready(function() {
    $("#HCED_status_section_1").show();
    $("#HCED_status_section_2").show();
});
</script>
<?php }else{ ?>
<script>
$(document).ready(function() {
    $("#HCED_status_section_1").hide();
    $("#HCED_status_section_2").hide();
});
</script>
<?php } ?>


<?php if($get_adult_case_historyData[0]->HCEP_Status == 'Present') { ?>
<script>
$(document).ready(function() {
    $("#HCEP_status_section_1").show();
    $("#HCEP_status_section_2").show();
});
</script>
<?php }else{ ?>
<script>
$(document).ready(function() {
    $("#HCEP_status_section_1").hide();
    $("#HCEP_status_section_2").hide();
});
</script>
<?php } ?>


<?php if($get_adult_case_historyData[0]->HCBS_Status == 'Present') { ?>
<script>
$(document).ready(function() {
    $("#HCBS_status_section_1").show();
    $("#HCBS_status_section_2").show();
});
</script>
<?php }else{ ?>
<script>
$(document).ready(function() {
    $("#HCBS_status_section_1").hide();
    $("#HCBS_status_section_2").hide();
});
</script>
<?php } ?>


<?php if($get_adult_case_historyData[0]->HCRHS_Status == 'Present') { ?>
<script>
$(document).ready(function() {
    $("#HCRHS_status_section_1").show();
    $("#HCRHS_status_section_2").show();
});
</script>
<?php }else{ ?>
<script>
$(document).ready(function() {
    $("#HCRHS_status_section_1").hide();
    $("#HCRHS_status_section_2").hide();
});
</script>
<?php } ?>



<?php } ?>