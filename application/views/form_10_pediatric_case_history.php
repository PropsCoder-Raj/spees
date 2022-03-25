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
                                                <option value="Male" <?php echo $formRecordsData[0]->Gender == 'Male' ? ' selected="selected"' : '';?>>Male</option>
                                                <option value="Female" <?php echo $formRecordsData[0]->Gender == 'Female' ? ' selected="selected"' : '';?>>Female</option>
                                                <option value="Other" <?php echo $formRecordsData[0]->Gender == 'Other' ? ' selected="selected"' : '';?>>Other</option>
                                            </select>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Informant :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="informant" name="informant"
                                                placeholder="Enter Informant" value="">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="informant" name="informant"
                                                placeholder="Enter Informant"
                                                value="<?php echo $formRecordsData[0]->Informant; ?>">
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
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Complaints :</label>
                                        <div class="col-sm-6">
                                            <?php if($edit === false){ ?>
                                            <select class="form-select form-control" name="complaints" id="complaints"
                                                aria-label="Default select example" onchange="complaintsChange()">
                                                <option disabled>Select</option>
                                                <option value="not responding to sounds/ name">not responding to sounds/
                                                    name</option>
                                                <option value="reduced hearing">reduced hearing</option>
                                                <option value="not speaking/ limited vocabulary">not speaking/ limited
                                                    vocabulary</option>
                                                <option value="Dr. Recommended for check up">Dr. Recommended for check
                                                    up</option>
                                                <option value="other">other</option>
                                            </select>
                                            <?php }else{ ?>
                                            <select class="form-select form-control" name="complaints" id="complaints"
                                                aria-label="Default select example"
                                                onchange="complaintsChange()">
                                                <option disabled>Select</option>
                                                <option value="not responding to sounds/ name" <?php echo $pediatric_case_historyData[0]->Complaints == 'not responding to sounds/ name' ? ' selected="selected"' : '';?>>not responding to sounds/
                                                    name</option>
                                                <option value="reduced hearing" <?php echo $pediatric_case_historyData[0]->Complaints == 'reduced hearing' ? ' selected="selected"' : '';?>>reduced hearing</option>
                                                <option value="not speaking/ limited vocabulary" <?php echo $pediatric_case_historyData[0]->Complaints == 'not speaking/ limited vocabulary' ? ' selected="selected"' : '';?>>not speaking/ limited
                                                    vocabulary</option>
                                                <option value="Dr. Recommended for check up" <?php echo $pediatric_case_historyData[0]->Complaints == 'Dr. Recommended for check up' ? ' selected="selected"' : '';?>>Dr. Recommended for check
                                                    up</option>
                                                <option value="other" <?php echo $pediatric_case_historyData[0]->Complaints == 'other' ? ' selected="selected"' : '';?>>other</option>
                                            </select>
                                            <?php } ?>
                                        </div>
                                        <div class="col-sm-4" id="complaints_other_section" style="display: none;">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Complaint"
                                                id="complaints_other" name="complaints_other"
                                                style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Complaint"
                                                id="complaints_other" name="complaints_other"
                                                style="height: 100px"><?php echo $pediatric_case_historyData[0]->Complaints_Other; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Responds to sounds
                                                :</label>
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <select class="form-select form-control" name="responds_to_sound"
                                                    id="responds_to_sound" aria-label="Default select example">
                                                    <option disabled>Select</option>
                                                    <option value="consistent">consistent</option>
                                                    <option value="inconsistent">inconsistent</option>
                                                </select>
                                                <?php }else{ ?>
                                                <select class="form-select form-control" name="responds_to_sound"
                                                    id="responds_to_sound" aria-label="Default select example">
                                                    <option disabled>Select</option>
                                                    <option value="consistent" <?php echo $pediatric_case_historyData[0]->Responds_To_Sound == 'consistent' ? ' selected="selected"' : '';?>>consistent</option>
                                                    <option value="inconsistent" <?php echo $pediatric_case_historyData[0]->Responds_To_Sound == 'inconsistent' ? ' selected="selected"' : '';?>>inconsistent</option>
                                                </select>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Level :</label>
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <select class="form-select form-control" name="responds_to_level"
                                                    id="responds_to_level" aria-label="Default select example">
                                                    <option disabled>Select</option>
                                                    <option value="soft">soft</option>
                                                    <option value="moderately loud">moderately loud</option>
                                                    <option value="loud">loud</option>
                                                </select>
                                                <?php }else{ ?>
                                                <select class="form-select form-control" name="responds_to_level"
                                                    id="responds_to_level" aria-label="Default select example">
                                                    <option disabled>Select</option>
                                                    <option value="soft" <?php echo $pediatric_case_historyData[0]->Responds_To_Level == 'soft' ? ' selected="selected"' : '';?>>soft</option>
                                                    <option value="moderately loud" <?php echo $pediatric_case_historyData[0]->Responds_To_Level == 'moderately loud' ? ' selected="selected"' : '';?>>moderately loud</option>
                                                    <option value="loud" <?php echo $pediatric_case_historyData[0]->Responds_To_Level == 'loud' ? ' selected="selected"' : '';?>>loud</option>
                                                </select>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Type of response
                                                :</label>
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <select class="form-select form-control" name="type_of_response"
                                                    id="type_of_response" aria-label="Default select example"
                                                    onchange="typeResponseChange()">
                                                    <option disabled>Select</option>
                                                    <option value="startle">startle</option>
                                                    <option value="awakening">awakening</option>
                                                    <option value="other">other</option>
                                                </select>
                                                <?php }else{ ?>
                                                <select class="form-select form-control" name="type_of_response"
                                                    id="type_of_response" aria-label="Default select example"
                                                    onchange="typeResponseChange()">
                                                    <option disabled>Select</option>
                                                    <option value="startle" <?php echo $pediatric_case_historyData[0]->Type_Of_Response == 'startle' ? ' selected="selected"' : '';?>>startle</option>
                                                    <option value="awakening" <?php echo $pediatric_case_historyData[0]->Type_Of_Response == 'awakening' ? ' selected="selected"' : '';?>>awakening</option>
                                                    <option value="other" <?php echo $pediatric_case_historyData[0]->Type_Of_Response == 'other' ? ' selected="selected"' : '';?>>other</option>
                                                </select>
                                                <?php } ?>
                                            </div>
                                            <div class="col-sm-12" style="display:none; margin-top: 10px;"
                                                id="type_of_response_section">
                                                <?php if($edit === false){ ?>
                                                <input type="text" class="form-control" id="type_of_other_response"
                                                    name="type_of_other_response" placeholder="Type other type">
                                                <?php }else{ ?>
                                                <input type="text" class="form-control" id="type_of_other_response"
                                                    name="type_of_other_response" placeholder="Type other type"
                                                    value="<?php echo $pediatric_case_historyData[0]->Type_Of_Other_Response; ?>">
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Name call
                                                response:</label>
                                            <div class="col-sm-6 form-group">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="NCR_status"
                                                        id="NCR_status1" value="Present" checked>
                                                    <label class="form-check-label" for="NCR_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="NCR_status"
                                                        id="NCR_status2" value="Absent">
                                                    <label class="form-check-label" for="NCR_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php }else{ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="NCR_status"
                                                        id="NCR_status1" value="Present"
                                                        <?php if($pediatric_case_historyData[0]->NCR_Status == 'Present') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="NCR_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="NCR_status"
                                                        id="NCR_status2" value="Absent"
                                                        <?php if($pediatric_case_historyData[0]->NCR_Status == 'Absent') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="NCR_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Mode of communication
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <select class="form-select form-control" name="mode_of_communication"
                                                id="mode_of_communication" aria-label="Default select example">
                                                <option disabled>Select</option>
                                                <option value="verbal">verbal</option>
                                                <option value="non verbal">non verbal</option>
                                                <option value="both">both</option>
                                            </select>
                                            <?php }else{ ?>
                                            <select class="form-select form-control" name="mode_of_communication"
                                                id="mode_of_communication" aria-label="Default select example">
                                                <option disabled>Select</option>
                                                <option value="verbal" <?php echo $pediatric_case_historyData[0]->Mode_Of_Communication == 'verbal' ? ' selected="selected"' : '';?>>verbal</option>
                                                <option value="non verbal" <?php echo $pediatric_case_historyData[0]->Mode_Of_Communication == 'non verbal' ? ' selected="selected"' : '';?>>non verbal</option>
                                                <option value="both" <?php echo $pediatric_case_historyData[0]->Mode_Of_Communication == 'both' ? ' selected="selected"' : '';?>>both</option>
                                            </select>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4>Prenatal History</h4>
                                    <br>
                                    <div class="row mb-3">
                                        <div class="col-sm-4">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Any
                                                illness/diseases/disorder
                                                :</label>
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <select class="form-select form-control" name="any_IDD_select"
                                                    id="any_IDD_select" aria-label="Default select example"
                                                    onchange="anyIDDChange()">
                                                    <option disabled>Select</option>
                                                    <option value="nil">nil</option>
                                                    <option value="present">present</option>
                                                </select>
                                                <?php }else{ ?>
                                                <select class="form-select form-control" name="any_IDD_select"
                                                    id="any_IDD_select" aria-label="Default select example"
                                                    onchange="anyIDDChange()">
                                                    <option disabled>Select</option>
                                                    <option value="nil" <?php echo $pediatric_case_historyData[0]->Any_IDD_Select == 'nil' ? ' selected="selected"' : '';?>>nil</option>
                                                    <option value="present" <?php echo $pediatric_case_historyData[0]->Any_IDD_Select == 'present' ? ' selected="selected"' : '';?>>present</option>
                                                </select>
                                                <?php } ?>
                                            </div>
                                            <div class="col-sm-12" style="display:none; margin-top: 10px;"
                                                id="any_IDD_section">
                                                <?php if($edit === false){ ?>
                                                <input type="text" class="form-control" id="any_IDD" name="any_IDD"
                                                    placeholder="Type here">
                                                <?php }else{ ?>
                                                <input type="text" class="form-control" id="any_IDD" name="any_IDD"
                                                    placeholder="Type here"
                                                    value="<?php echo $pediatric_case_historyData[0]->Any_IDD; ?>">
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Exposure to
                                                radiation
                                                :</label>
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <select class="form-select form-control"
                                                    name="exposure_radiatiopn_select" id="exposure_radiatiopn_select"
                                                    aria-label="Default select example"
                                                    onchange="exposureRadiationChange()">
                                                    <option disabled>Select</option>
                                                    <option value="nil" <?php echo $pediatric_case_historyData[0]->Any_IDD_Select == 'nil' ? ' selected="selected"' : '';?>>nil</option>
                                                    <option value="present" <?php echo $pediatric_case_historyData[0]->Any_IDD_Select == 'present' ? ' selected="selected"' : '';?>>present</option>
                                                </select>
                                                <?php }else{ ?>
                                                <select class="form-select form-control"
                                                    name="exposure_radiatiopn_select" id="exposure_radiatiopn_select"
                                                    aria-label="Default select example"
                                                    onchange="exposureRadiationChange()">
                                                    <option disabled>Select</option>
                                                    <option value="nil" <?php echo $pediatric_case_historyData[0]->Exposure_Radiatiopn_Select == 'nil' ? ' selected="selected"' : '';?>>nil</option>
                                                    <option value="present" <?php echo $pediatric_case_historyData[0]->Exposure_Radiatiopn_Select == 'present' ? ' selected="selected"' : '';?>>present</option>
                                                </select>
                                                <?php } ?>
                                            </div>
                                            <div class="col-sm-12" style="display:none; margin-top: 10px;"
                                                id="exposure_radiatiopn_section">
                                                <?php if($edit === false){ ?>
                                                <input type="text" class="form-control" id="exposure_radiatiopn"
                                                    name="exposure_radiatiopn" placeholder="Type here">
                                                <?php }else{ ?>
                                                <input type="text" class="form-control" id="exposure_radiatiopn"
                                                    name="exposure_radiatiopn" placeholder="Type here"
                                                    value="<?php echo $pediatric_case_historyData[0]->Exposure_Radiatiopn; ?>">
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Any medications
                                                :</label>
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <select class="form-select form-control" name="any_medications_select"
                                                    id="any_medications_select" aria-label="Default select example"
                                                    onchange="anyMedicationChange()">
                                                    <option disabled>Select</option>
                                                    <option value="nil" <?php echo $pediatric_case_historyData[0]->Any_IDD_Select == 'nil' ? ' selected="selected"' : '';?>>nil</option>
                                                    <option value="present" <?php echo $pediatric_case_historyData[0]->Any_IDD_Select == 'present' ? ' selected="selected"' : '';?>>present</option>
                                                </select>
                                                <?php }else{ ?>
                                                <select class="form-select form-control" name="any_medications_select"
                                                    id="any_medications_select" aria-label="Default select example"
                                                    onchange="anyMedicationChange()">
                                                    <option disabled>Select</option>
                                                    <option value="nil" <?php echo $pediatric_case_historyData[0]->Any_Medications_Select == 'nil' ? ' selected="selected"' : '';?>>nil</option>
                                                    <option value="present" <?php echo $pediatric_case_historyData[0]->Any_Medications_Select == 'present' ? ' selected="selected"' : '';?>>present</option>
                                                </select>
                                                <?php } ?>
                                            </div>
                                            <div class="col-sm-12" style="display:none; margin-top: 10px;"
                                                id="any_medications_section">
                                                <?php if($edit === false){ ?>
                                                <input type="text" class="form-control" id="any_medications"
                                                    name="any_medications" placeholder="Type here">
                                                <?php }else{ ?>
                                                <input type="text" class="form-control" id="any_medications"
                                                    name="any_medications" placeholder="Type here"
                                                    value="<?php echo $pediatric_case_historyData[0]->Any_Medications; ?>">
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Any kind of
                                                trauma/accidents <?php echo $pediatric_case_historyData[0]->Any_KOTA_Select; ?>:</label>
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <select class="form-select form-control" name="any_KOTA_select"
                                                    id="any_KOTA_select" aria-label="Default select example"
                                                    onchange="anyKOTAChange()">
                                                    <option disabled>Select</option>
                                                    <option value="nil" <?php echo $pediatric_case_historyData[0]->Any_IDD_Select == 'nil' ? ' selected="selected"' : '';?>>nil</option>
                                                    <option value="present" <?php echo $pediatric_case_historyData[0]->Any_IDD_Select == 'present' ? ' selected="selected"' : '';?>>present</option>
                                                </select>
                                                <?php }else{ ?>
                                                <select class="form-select form-control" name="any_KOTA_select"
                                                    id="any_KOTA_select" aria-label="Default select example"
                                                    onchange="anyKOTAChange()">
                                                    <option disabled>Select</option>
                                                    <option value="nil" <?php echo $pediatric_case_historyData[0]->Any_KOTA_Select == 'nil' ? ' selected="selected"' : '';?>>nil</option>
                                                    <option value="present" <?php echo $pediatric_case_historyData[0]->Any_KOTA_Select == 'present' ? ' selected="selected"' : '';?>>present</option>
                                                </select>
                                                <?php } ?>
                                            </div>
                                            <div class="col-sm-12" style="display:none; margin-top: 10px;"
                                                id="any_KOTA_section">
                                                <?php if($edit === false){ ?>
                                                <input type="text" class="form-control" id="any_KOTA" name="any_KOTA"
                                                    placeholder="Type here">
                                                <?php }else{ ?>
                                                <input type="text" class="form-control" id="any_KOTA" name="any_KOTA"
                                                    placeholder="Type here"
                                                    value="<?php echo $pediatric_case_historyData[0]->Any_KOTA; ?>">
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Rh factor
                                                incompatibility
                                                :</label>
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <select class="form-select form-control" name="RFI_select"
                                                    id="RFI_select" aria-label="Default select example"
                                                    onchange="rftChange()">
                                                    <option disabled>Select</option>
                                                    <option value="absent">absent</option>
                                                    <option value="present">present</option>
                                                </select>
                                                <?php }else{ ?>
                                                <select class="form-select form-control" name="RFI_select"
                                                    id="RFI_select" aria-label="Default select example"
                                                    onchange="rftChange()">
                                                    <option disabled>Select</option>
                                                    <option value="absent" <?php echo $pediatric_case_historyData[0]->RFI_Select == 'absent' ? ' selected="selected"' : '';?>>absent</option>
                                                    <option value="present" <?php echo $pediatric_case_historyData[0]->RFI_Select == 'present' ? ' selected="selected"' : '';?>>present</option>
                                                </select>
                                                <?php } ?>
                                            </div>
                                            <div class="col-sm-12" style="display:none; margin-top: 10px;"
                                                id="RFI_section">
                                                <?php if($edit === false){ ?>
                                                <input type="text" class="form-control" id="RFI" name="RFI"
                                                    placeholder="Type here">
                                                <?php }else{ ?>
                                                <input type="text" class="form-control" id="RFI" name="RFI"
                                                    placeholder="Type here"
                                                    value="<?php echo $pediatric_case_historyData[0]->RFI; ?>">
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4>Perinatal History</h4><br>
                                    <div class="row mb-3">
                                        <div class="col-sm-4">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Delivery place
                                                :</label>
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <select class="form-select form-control" name="delivery_place"
                                                    id="delivery_place" aria-label="Default select example">
                                                    <option disabled>Select</option>
                                                    <option value="home">home</option>
                                                    <option value="hospital">hospital</option>
                                                </select>
                                                <?php }else{ ?>
                                                <select class="form-select form-control" name="delivery_place"
                                                    id="delivery_place" aria-label="Default select example">
                                                    <option disabled>Select</option>
                                                    <option value="home" <?php echo $pediatric_case_historyData[0]->Delivery_Place == 'home' ? ' selected="selected"' : '';?>>home</option>
                                                    <option value="hospital" <?php echo $pediatric_case_historyData[0]->Delivery_Place == 'hospital' ? ' selected="selected"' : '';?>>hospital</option>
                                                </select>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Term
                                                :</label>
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <select class="form-select form-control" name="term_select"
                                                    id="term_select" aria-label="Default select example"
                                                    onchange="termChange()">
                                                    <option disabled>Select</option>
                                                    <option value="full term">full term</option>
                                                    <option value="per term">per term</option>
                                                    <option value="time duration">time duration</option>
                                                </select>
                                                <?php }else{ ?>
                                                <select class="form-select form-control" name="term_select"
                                                    id="term_select" aria-label="Default select example"
                                                    onchange="termChange()">
                                                    <option disabled>Select</option>
                                                    <option value="full term" <?php echo $pediatric_case_historyData[0]->Term_Select == 'full term' ? ' selected="selected"' : '';?>>full term</option>
                                                    <option value="per term" <?php echo $pediatric_case_historyData[0]->Term_Select == 'per term' ? ' selected="selected"' : '';?>>per term</option>
                                                    <option value="time duration" <?php echo $pediatric_case_historyData[0]->Term_Select == 'time duration' ? ' selected="selected"' : '';?>>time duration</option>
                                                </select>
                                                <?php } ?>
                                            </div>
                                            <div class="col-sm-12" style="display:none; margin-top: 10px;"
                                                id="term_section">
                                                <?php if($edit === false){ ?>
                                                <input type="text" class="form-control" id="term" name="term"
                                                    placeholder="Type here">
                                                <?php }else{ ?>
                                                <input type="text" class="form-control" id="term" name="term"
                                                    placeholder="Type here"
                                                    value="<?php echo $pediatric_case_historyData[0]->Term; ?>">
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Type of delivery
                                                :</label>
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <select class="form-select form-control" name="type_of_delivery"
                                                    id="type_of_delivery" aria-label="Default select example">
                                                    <option disabled>Select</option>
                                                    <option value="normal">normal</option>
                                                    <option value="LSCS">LSCS</option>
                                                    <option value="forceps">forceps</option>
                                                </select>
                                                <?php }else{ ?>
                                                <select class="form-select form-control" name="type_of_delivery"
                                                    id="type_of_delivery" aria-label="Default select example">
                                                    <option disabled>Select</option>
                                                    <option value="normal" <?php echo $pediatric_case_historyData[0]->Type_Of_Delivery == 'normal' ? ' selected="selected"' : '';?>>normal</option>
                                                    <option value="LSCS" <?php echo $pediatric_case_historyData[0]->Type_Of_Delivery == 'LSCS' ? ' selected="selected"' : '';?>>LSCS</option>
                                                    <option value="forceps" <?php echo $pediatric_case_historyData[0]->Type_Of_Delivery == 'forceps' ? ' selected="selected"' : '';?>>forceps</option>
                                                </select>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Birth color
                                                :</label>
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <select class="form-select form-control" name="birth_color"
                                                    id="birth_color" aria-label="Default select example">
                                                    <option disabled>Select</option>
                                                    <option value="normal">normal</option>
                                                    <option value="yellow">yellow</option>
                                                    <option value="blue">blue</option>
                                                </select>
                                                <?php }else{ ?>
                                                <select class="form-select form-control" name="birth_color"
                                                    id="birth_color" aria-label="Default select example">
                                                    <option disabled>Select</option>
                                                    <option value="normal" <?php echo $pediatric_case_historyData[0]->Birth_Color == 'normal' ? ' selected="selected"' : '';?>>normal</option>
                                                    <option value="yellow" <?php echo $pediatric_case_historyData[0]->Birth_Color == 'yellow' ? ' selected="selected"' : '';?>>yellow</option>
                                                    <option value="blue" <?php echo $pediatric_case_historyData[0]->Birth_Color == 'blue' ? ' selected="selected"' : '';?>>blue</option>
                                                </select>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Birth Cry
                                                :</label>
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <select class="form-select form-control" name="birth_cry" id="birth_cry"
                                                    aria-label="Default select example">
                                                    <option disabled>Select</option>
                                                    <option value="immediate">immediate</option>
                                                    <option value="delayed">delayed</option>
                                                </select>
                                                <?php }else{ ?>
                                                <select class="form-select form-control" name="birth_cry" id="birth_cry"
                                                    aria-label="Default select example">
                                                    <option disabled>Select</option>
                                                    <option value="immediate" <?php echo $pediatric_case_historyData[0]->Birth_Cry == 'immediate' ? ' selected="selected"' : '';?>>immediate</option>
                                                    <option value="delayed" <?php echo $pediatric_case_historyData[0]->Birth_Cry == 'delayed' ? ' selected="selected"' : '';?>>delayed</option>
                                                </select>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Birth weight
                                                :</label>
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <input type="text" class="form-control" id="birth_weight"
                                                    name="birth_weight" placeholder="Type here">
                                                <?php }else{ ?>
                                                <input type="text" class="form-control" id="birth_weight"
                                                    name="birth_weight" placeholder="Type here"
                                                    value="<?php echo $pediatric_case_historyData[0]->Birth_Weight; ?>">
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4>Postnatal History</h4><br>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="postnatal_history" name="postnatal_history"
                                                    style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="postnatal_history" name="postnatal_history"
                                                    style="height: 100px"><?php echo $pediatric_case_historyData[0]->Postnatal_History; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Developmental History</h4>
                                </div>
                                <div class="card-body">
                                    <h5>Motor development:</h5><br>
                                    <div class="row mb-3">
                                        <div class="col-sm-4">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">neck control
                                                :</label>
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <input type="text" class="form-control" id="neck_control"
                                                    name="neck_control" placeholder="Type here in months">
                                                <?php }else{ ?>
                                                <input type="text" class="form-control" id="neck_control"
                                                    name="neck_control" placeholder="Type here in months"
                                                    value="<?php echo $pediatric_case_historyData[0]->Neck_Control; ?>">
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Turn over
                                                :</label>
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <input type="text" class="form-control" id="turn_over" name="turn_over"
                                                    placeholder="Type here in months">
                                                <?php }else{ ?>
                                                <input type="text" class="form-control" id="turn_over" name="turn_over"
                                                    placeholder="Type here in months"
                                                    value="<?php echo $pediatric_case_historyData[0]->Turn_Over; ?>">
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Crawling
                                                :</label>
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <input type="text" class="form-control" id="crawling" name="crawling"
                                                    placeholder="Type here in months">
                                                <?php }else{ ?>
                                                <input type="text" class="form-control" id="crawling" name="crawling"
                                                    placeholder="Type here in months"
                                                    value="<?php echo $pediatric_case_historyData[0]->Crawling; ?>">
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Sitting
                                                :</label>
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <input type="text" class="form-control" id="sitting" name="sitting"
                                                    placeholder="Type here in months">
                                                <?php }else{ ?>
                                                <input type="text" class="form-control" id="sitting" name="sitting"
                                                    placeholder="Type here in months"
                                                    value="<?php echo $pediatric_case_historyData[0]->Sitting; ?>">
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Standing
                                                :</label>
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <input type="text" class="form-control" id="standing" name="standing"
                                                    placeholder="Type here in months">
                                                <?php }else{ ?>
                                                <input type="text" class="form-control" id="standing" name="standing"
                                                    placeholder="Type here in months"
                                                    value="<?php echo $pediatric_case_historyData[0]->Standing; ?>">
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Walking
                                                :</label>
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <input type="text" class="form-control" id="walking" name="walking"
                                                    placeholder="Type here in years">
                                                <?php }else{ ?>
                                                <input type="text" class="form-control" id="walking" name="walking"
                                                    placeholder="Type here in years"
                                                    value="<?php echo $pediatric_case_historyData[0]->Walking; ?>">
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Handedness
                                                :</label>
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <select class="form-select form-control" name="handedness"
                                                    id="handedness" aria-label="Default select example">
                                                    <option disabled>Select</option>
                                                    <option value="Rt">Rt</option>
                                                    <option value="Lt">Lt</option>
                                                    <option value="both">both</option>
                                                    <option value="NA">NA</option>
                                                </select>
                                                <?php }else{ ?>
                                                <select class="form-select form-control" name="handedness"
                                                    id="handedness" aria-label="Default select example">
                                                    <option disabled>Select</option>
                                                    <option value="Rt" <?php echo $pediatric_case_historyData[0]->Handedness == 'Rt' ? ' selected="selected"' : '';?>>Rt</option>
                                                    <option value="Lt" <?php echo $pediatric_case_historyData[0]->Handedness == 'Lt' ? ' selected="selected"' : '';?>>Lt</option>
                                                    <option value="both" <?php echo $pediatric_case_historyData[0]->Handedness == 'both' ? ' selected="selected"' : '';?>>both</option>
                                                    <option value="NA" <?php echo $pediatric_case_historyData[0]->Handedness == 'NA' ? ' selected="selected"' : '';?>>NA</option>
                                                </select>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <h5>Speech & Language Development:</h5><br>
                                    <div class="row mb-3">
                                        <div class="col-sm-4">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Cooing
                                                :</label>
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <input type="text" class="form-control" id="cooing" name="cooing"
                                                    placeholder="Type here in months">
                                                <?php }else{ ?>
                                                <input type="text" class="form-control" id="cooing" name="cooing"
                                                    placeholder="Type here in months"
                                                    value="<?php echo $pediatric_case_historyData[0]->Cooing; ?>">
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Babbling
                                                :</label>
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <input type="text" class="form-control" id="babbling" name="babbling"
                                                    placeholder="Type here in months">
                                                <?php }else{ ?>
                                                <input type="text" class="form-control" id="babbling" name="babbling"
                                                    placeholder="Type here in months"
                                                    value="<?php echo $pediatric_case_historyData[0]->Babbling; ?>">
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">1st word
                                                :</label>
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <input type="text" class="form-control" id="first_word"
                                                    name="first_word" placeholder="Type here in months">
                                                <?php }else{ ?>
                                                <input type="text" class="form-control" id="first_word"
                                                    name="first_word" placeholder="Type here in months"
                                                    value="<?php echo $pediatric_case_historyData[0]->First_Word; ?>">
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">2 word phrases
                                                :</label>
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <input type="text" class="form-control" id="word_phases"
                                                    name="word_phases" placeholder="Type here in years">
                                                <?php }else{ ?>
                                                <input type="text" class="form-control" id="word_phases"
                                                    name="word_phases" placeholder="Type here in years"
                                                    value="<?php echo $pediatric_case_historyData[0]->Word_Phases; ?>">
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Sentence level
                                                :</label>
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <input type="text" class="form-control" id="sentence_level"
                                                    name="sentence_level" placeholder="Type here in years">
                                                <?php }else{ ?>
                                                <input type="text" class="form-control" id="sentence_level"
                                                    name="sentence_level" placeholder="Type here in years"
                                                    value="<?php echo $pediatric_case_historyData[0]->Sentence_Level; ?>">
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Family History</h5><br>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="family_history" name="family_history"
                                                    style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="family_history" name="family_history"
                                                    style="height: 100px"><?php echo $pediatric_case_historyData[0]->Family_History; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <h5>History of illness & previous treatment</h5><br>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="history_IPT"
                                                    name="history_IPT" style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="history_IPT"
                                                    name="history_IPT"
                                                    style="height: 100px"><?php echo $pediatric_case_historyData[0]->History_IPT; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <div class="col-sm-12">
                                                <h5>History of seizures:</h5>
                                            </div>
                                            <div class="col-sm-3">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio"
                                                        name="history_seizures_radio" id="history_seizures_radio1"
                                                        value="Present" onclick="history_seizures_click('Present')"
                                                        checked>
                                                    <label class="form-check-label" for="history_seizures_radio1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio"
                                                        name="history_seizures_radio" id="history_seizures_radio2"
                                                        value="Absent" onclick="history_seizures_click('Absent')">
                                                    <label class="form-check-label" for="history_seizures_radio2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php }else{ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio"
                                                        name="history_seizures_radio" id="history_seizures_radio1"
                                                        value="Present" onclick="history_seizures_click('Present')"
                                                        <?php if($pediatric_case_historyData[0]->History_Seizures_Radio == 'Present') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="history_seizures_radio1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio"
                                                        name="history_seizures_radio" id="history_seizures_radio2"
                                                        value="Absent" onclick="history_seizures_click('Absent')"
                                                        <?php if($pediatric_case_historyData[0]->History_Seizures_Radio == 'Absent') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="history_seizures_radio2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <br>
                                            <div class="col-sm-12" id="history_seizures_section">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="history_seizures" name="history_seizures"
                                                    style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="history_seizures" name="history_seizures"
                                                    style="height: 100px"><?php echo $pediatric_case_historyData[0]->History_Seizures; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <h5>Educational History</h5>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Currently studying in
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="currently_studying_in" name="currently_studying_in"
                                                style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="currently_studying_in" name="currently_studying_in"
                                                style="height: 100px"><?php echo $pediatric_case_historyData[0]->Currently_Studying_In; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Academic Performance
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <select class="form-select form-control" name="academic_performance"
                                                aria-label="Default select example" value="">
                                                <option disabled>Select</option>
                                                <option value="poor">poor</option>
                                                <option value="average">average</option>
                                                <option value="good">good</option>
                                            </select>
                                            <?php }else{ ?>
                                            <select class="form-select form-control" name="academic_performance"
                                                aria-label="Default select example">
                                                <option disabled>Select</option>
                                                <option value="poor" <?php echo $pediatric_case_historyData[0]->Academic_Performance == 'poor' ? ' selected="selected"' : '';?>>poor</option>
                                                <option value="average" <?php echo $pediatric_case_historyData[0]->Academic_Performance == 'average' ? ' selected="selected"' : '';?>>average</option>
                                                <option value="good" <?php echo $pediatric_case_historyData[0]->Academic_Performance == 'good' ? ' selected="selected"' : '';?>>good</option>
                                            </select>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Remarks :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="remarks"
                                                name="remarks" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="remarks"
                                                name="remarks"
                                                style="height: 100px"><?php echo $pediatric_case_historyData[0]->Remarks; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <br>
                                    <h5>Ottological findings</h5>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-4 col-form-label">Does the child
                                            frequently put fingers in ears & tries to scratch :</label>
                                        <div class="col-sm-8">
                                            <?php if($edit === false){ ?>
                                            <select class="form-select form-control" name="DCFET_to_scratch"
                                                aria-label="Default select example" value="">
                                                <option disabled>Select</option>
                                                <option value="No">No</option>
                                                <option value="Rt">Rt</option>
                                                <option value="Lt">Lt</option>
                                                <option value="Both">Both</option>
                                            </select>
                                            <?php }else{ ?>
                                            <select class="form-select form-control" name="DCFET_to_scratch"
                                                aria-label="Default select example">
                                                <option disabled>Select</option>
                                                <option value="No" <?php echo $pediatric_case_historyData[0]->DCFET_To_Scratch == 'No' ? ' selected="selected"' : '';?>>No</option>
                                                <option value="Rt" <?php echo $pediatric_case_historyData[0]->DCFET_To_Scratch == 'Rt' ? ' selected="selected"' : '';?>>Rt</option>
                                                <option value="Lt" <?php echo $pediatric_case_historyData[0]->DCFET_To_Scratch == 'Lt' ? ' selected="selected"' : '';?>>Lt</option>
                                                <option value="Both" <?php echo $pediatric_case_historyData[0]->DCFET_To_Scratch == 'Both' ? ' selected="selected"' : '';?>>Both</option>
                                            </select>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-4 col-form-label">Does the child cry by
                                            holding or putting hand near the ear :</label>
                                        <div class="col-sm-8">
                                            <?php if($edit === false){ ?>
                                            <select class="form-select form-control" name="DCFET_to_putting"
                                                aria-label="Default select example" value="">
                                                <option disabled>Select</option>
                                                <option value="No">No</option>
                                                <option value="Rt">Rt</option>
                                                <option value="Lt">Lt</option>
                                                <option value="Both">Both</option>
                                            </select>
                                            <?php }else{ ?>
                                            <select class="form-select form-control" name="DCFET_to_putting"
                                                aria-label="Default select example">
                                                <option disabled>Select</option>
                                                <option value="No" <?php echo $pediatric_case_historyData[0]->DCFET_To_Putting == 'No' ? ' selected="selected"' : '';?>>No</option>
                                                <option value="Rt" <?php echo $pediatric_case_historyData[0]->DCFET_To_Putting == 'Rt' ? ' selected="selected"' : '';?>>Rt</option>
                                                <option value="Lt" <?php echo $pediatric_case_historyData[0]->DCFET_To_Putting == 'Lt' ? ' selected="selected"' : '';?>>Lt</option>
                                                <option value="Both" <?php echo $pediatric_case_historyData[0]->DCFET_To_Putting == 'Both' ? ' selected="selected"' : '';?>>Both</option>
                                            </select>
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-5 row mb-3">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">History/ Complaint
                                                of Ear discharge:</label>
                                            <div class="col-sm-6 form-group">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCED_status"
                                                        id="HCED_status1" value="Present"
                                                        onclick="ear_discharge_click('Present')" checked>
                                                    <label class="form-check-label" for="HCED_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCED_status"
                                                        id="HCED_status2" value="Absent"
                                                        onclick="ear_discharge_click('Absent')">
                                                    <label class="form-check-label" for="HCED_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php }else{ ?>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCED_status"
                                                        id="HCED_status1" value="Present"
                                                        onclick="ear_discharge_click('Present')"
                                                        <?php if($pediatric_case_historyData[0]->HCED_Status == 'Present') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCED_status1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCED_status"
                                                        id="HCED_status2" value="Absent"
                                                        onclick="ear_discharge_click('Absent')"
                                                        <?php if($pediatric_case_historyData[0]->HCED_Status == 'Absent') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCED_status2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>

                                            <div class="col-sm-6 form-group" id="ear_discharge_section_1">
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
                                                        <?php if($pediatric_case_historyData[0]->HCED_RLB == 'Rt') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCED_rlb1">
                                                        Rt
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCED_rlb"
                                                        id="HCED_rlb2" value="Lt"
                                                        <?php if($pediatric_case_historyData[0]->HCED_RLB == 'Lt') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCED_rlb2">
                                                        Lt
                                                    </label>
                                                </div>
                                                <div class="form-check" style="display: inline-block;margin: 0 5px;">
                                                    <input class="form-check-input" type="radio" name="HCED_rlb"
                                                        id="HCED_rlb3" value="Both"
                                                        <?php if($pediatric_case_historyData[0]->HCED_RLB == 'Both') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="HCED_status3">
                                                        Both
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-7 row" id="ear_discharge_section_2">
                                            <div class="col-sm-12 mb-3">
                                                <label for="inputEmail3" class="col-sm-12">Since :</label>
                                                <div class="col-sm-12">
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control" id="HCED_since"
                                                        name="HCED_since" placeholder="Enter Since" value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control" id="HCED_since"
                                                        name="HCED_since" placeholder="Enter Since"
                                                        value="<?php echo $pediatric_case_historyData[0]->HCED_Since; ?>">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h5>Ear Examination:</h5>
                                    <br>
                                    <div class="row mb-3">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" scope="col"></th>
                                                    <th class="text-center" scope="col">Right ear</th>
                                                    <th class="text-center" scope="col">Left ear</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbody">
                                                <tr>
                                                    <td>Pinna: </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control" id="right_ear_pinna"
                                                            name="right_ear_pinna" placeholder="Type Here">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control" id="right_ear_pinna"
                                                            name="right_ear_pinna" placeholder="Type Here"
                                                            value="<?php echo $pediatric_case_historyData[0]->Right_Ear_Pinna; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control" id="left_ear_pinna"
                                                            name="left_ear_pinna" placeholder="Type Here">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control" id="left_ear_pinna"
                                                            name="left_ear_pinna" placeholder="Type Here"
                                                            value="<?php echo $pediatric_case_historyData[0]->Left_Ear_Pinna; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>EAM: </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control" id="right_ear_EAM"
                                                            name="right_ear_EAM" placeholder="Type Here">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control" id="right_ear_EAM"
                                                            name="right_ear_EAM" placeholder="Type Here"
                                                            value="<?php echo $pediatric_case_historyData[0]->Right_Ear_EAM; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control" id="left_ear_EAM"
                                                            name="left_ear_EAM" placeholder="Type Here">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control" id="left_ear_EAM"
                                                            name="left_ear_EAM" placeholder="Type Here"
                                                            value="<?php echo $pediatric_case_historyData[0]->Left_Ear_EAM; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Tympanic Membrane: </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control"
                                                            id="right_ear_tympanic_membrane"
                                                            name="right_ear_tympanic_membrane" placeholder="Type Here">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control"
                                                            id="right_ear_tympanic_membrane"
                                                            name="right_ear_tympanic_membrane" placeholder="Type Here"
                                                            value="<?php echo $pediatric_case_historyData[0]->Right_Ear_Tympanic_Membrane; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control"
                                                            id="left_ear_tympanic_membrane"
                                                            name="left_ear_tympanic_membrane" placeholder="Type Here">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control"
                                                            id="left_ear_tympanic_membrane"
                                                            name="left_ear_tympanic_membrane" placeholder="Type Here"
                                                            value="<?php echo $pediatric_case_historyData[0]->Left_Ear_Tympanic_Membrane; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4>Any remarks</h4><br>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="any_remarks"
                                                    name="any_remarks" style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="any_remarks"
                                                    name="any_remarks"
                                                    style="height: 100px"><?php echo $pediatric_case_historyData[0]->Any_Remarks; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <h4>ENT findings</h4><br>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="ENT_findings"
                                                    name="ENT_findings" style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="ENT_findings"
                                                    name="ENT_findings"
                                                    style="height: 100px"><?php echo $pediatric_case_historyData[0]->ENT_Findings; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <h4>Recommendations</h4><br>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="recommendations" name="recommendations"
                                                    style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="recommendations" name="recommendations"
                                                    style="height: 100px"><?php echo $pediatric_case_historyData[0]->Recommendations; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            <?php if($action == 1){ ?>
                                <?php if($edit === true): ?>
                                <button type="submit" class="btn btn-primary float-right" name="edit_pediatric_case_history"
                                    id="edit_pediatric_case_history">Submit</button>
                                <?php else: ?>
                                <button type="submit" class="btn btn-primary float-right" name="add_pediatric_case_history"
                                    id="add_pediatric_case_history">Submit</button>
                                <?php endif; ?>
                            <?php } ?>    
                        </div>
                    </div>
                </div>
        </form>
    </div>
</div>



<script>
function ear_discharge_click(name) {
    if (name == 'Present') {
        $("#ear_discharge_section_1").show();
        $("#ear_discharge_section_2").show();
    } else {
        $("#ear_discharge_section_1").hide();
        $("#ear_discharge_section_2").hide();
    }
}

function history_seizures_click(name) {
    if (name == 'Present') {
        $("#history_seizures_section").show();
    } else {
        $("#history_seizures_section").hide();
    }
}

function termChange() {
    let term_select = $('#term_select').val();
    if (term_select == 'time duration') {
        $("#term_section").show();
    } else {
        $("#term_section").hide();
    }
}

function rftChange() {
    let RFI_select = $('#RFI_select').val();
    if (RFI_select == 'present') {
        $("#RFI_section").show();
    } else {
        $("#RFI_section").hide();
    }
}

function anyKOTAChange() {
    let any_KOTA_select = $('#any_KOTA_select').val();
    if (any_KOTA_select == 'present') {
        $("#any_KOTA_section").show();
    } else {
        $("#any_KOTA_section").hide();
    }
}

function anyMedicationChange() {
    let any_medications_select = $('#any_medications_select').val();
    if (any_medications_select == 'present') {
        $("#any_medications_section").show();
    } else {
        $("#any_medications_section").hide();
    }
}

function exposureRadiationChange() {
    let exposure_radiatiopn_select = $('#exposure_radiatiopn_select').val();
    if (exposure_radiatiopn_select == 'present') {
        $("#exposure_radiatiopn_section").show();
    } else {
        $("#exposure_radiatiopn_section").hide();
    }
}

function complaintsChange() {
    let complaints = $('#complaints').val();
    if (complaints == 'other') {
        $("#complaints_other_section").show();
    } else {
        $("#complaints_other_section").hide();
    }
}

function typeResponseChange() {
    let type_of_response = $('#type_of_response').val();
    if (type_of_response == 'other') {
        $("#type_of_response_section").show();
    } else {
        $("#type_of_response_section").hide();
    }
}

function anyIDDChange() {
    let any_IDD_select = $('#any_IDD_select').val();
    if (any_IDD_select == 'present') {
        $("#any_IDD_section").show();
    } else {
        $("#any_IDD_section").hide();
    }
}
</script>

<?php if($edit) { ?>

<?php if($pediatric_case_historyData[0]->HCED_Status == 'Present') { ?>
    <script>
        $(document).ready(function(){
            $("#ear_discharge_section_1").show();
            $("#ear_discharge_section_2").show();
        });
    </script>
<?php }else{ ?>    
    <script>
        $(document).ready(function(){
            $("#ear_discharge_section_1").hide();
            $("#ear_discharge_section_2").hide();
        });
    </script>
<?php } ?>

<?php if($pediatric_case_historyData[0]->HCED_Status == 'Present') { ?>
    <script>
        $(document).ready(function(){
            $("#ear_discharge_section_1").show();
            $("#ear_discharge_section_2").show();
        });
    </script>
<?php }else{ ?>    
    <script>
        $(document).ready(function(){
            $("#ear_discharge_section_1").hide();
            $("#ear_discharge_section_2").hide();
        });
    </script>
<?php } ?>


<?php if($pediatric_case_historyData[0]->History_Seizures_Radio == 'Present') { ?>
    <script>
        $(document).ready(function(){
            $("#history_seizures_section").show();
        });
    </script>
<?php }else{ ?>    
    <script>
        $(document).ready(function(){
            $("#history_seizures_section").hide();
        });
    </script>
<?php } ?>  

<?php if($pediatric_case_historyData[0]->Term_Select == 'time duration') { ?>
    <script>
        $(document).ready(function(){
            $("#term_section").show();
        });
    </script>
<?php }else{ ?>    
    <script>
        $(document).ready(function(){
            $("#term_section").hide();
        });
    </script>
<?php } ?>   


<?php if($pediatric_case_historyData[0]->RFI_Select == 'present') { ?>
    <script>
        $(document).ready(function(){
            $("#RFI_section").show();
        });
    </script>
<?php }else{ ?>    
    <script>
        $(document).ready(function(){
            $("#RFI_section").hide();
        });
    </script>
<?php } ?>   

<?php if($pediatric_case_historyData[0]->Any_Medications_Select == 'present') { ?>
    <script>
        $(document).ready(function(){
            $("#any_medications_section").show();
        });
    </script>
<?php }else{ ?>    
    <script>
        $(document).ready(function(){
            $("#any_medications_section").hide();
        });
    </script>
<?php } ?>   

<?php if($pediatric_case_historyData[0]->Any_Medications_Select == 'present') { ?>
    <script>
        $(document).ready(function(){
            $("#any_medications_section").show();
        });
    </script>
<?php }else{ ?>    
    <script>
        $(document).ready(function(){
            $("#any_medications_section").hide();
        });
    </script>
<?php } ?>   

<?php if($pediatric_case_historyData[0]->Exposure_Radiatiopn_Select == 'present') { ?>
    <script>
        $(document).ready(function(){
            $("#exposure_radiatiopn_section").show();
        });
    </script>
<?php }else{ ?>    
    <script>
        $(document).ready(function(){
            $("#exposure_radiatiopn_section").hide();
        });
    </script>
<?php } ?>   

<?php if($pediatric_case_historyData[0]->Complaints == 'other') { ?>
    <script>
        $(document).ready(function(){
            $("#complaints_other_section").show();
        });
    </script>
<?php }else{ ?>    
    <script>
        $(document).ready(function(){
            $("#complaints_other_section").hide();
        });
    </script>
<?php } ?>    

<?php if($pediatric_case_historyData[0]->Type_Of_Response == 'other') { ?>
    <script>
        $(document).ready(function(){
            $("#type_of_response_section").show();
        });
    </script>
<?php }else{ ?>    
    <script>
        $(document).ready(function(){
            $("#type_of_response_section").hide();
        });
    </script>
<?php } ?>    

<?php if($pediatric_case_historyData[0]->Any_IDD_Select == 'present') { ?>
    <script>
        $(document).ready(function(){
            $("#any_IDD_section").show();
        });
    </script>
<?php }else{ ?>    
    <script>
        $(document).ready(function(){
            $("#any_IDD_section").hide();
        });
    </script>
<?php } ?>    

<?php } ?>