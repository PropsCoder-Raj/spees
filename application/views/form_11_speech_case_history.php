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
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Languages known/used
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="languages_known"
                                                name="languages_known" placeholder="Enter languagesknown">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="languages_known"
                                                name="languages_known" placeholder="Enter languagesknown"
                                                value="<?php echo $formRecordsData[0]->Languages_Known; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Informant Name
                                            :</label>
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
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Relation with patient
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="relation_with_patient"
                                                name="relation_with_patient" placeholder="Enter Relation with patient"
                                                value="">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="relation_with_patient"
                                                name="relation_with_patient" placeholder="Enter Relation with patient"
                                                value="<?php echo $formRecordsData[0]->Relation_With_Patient; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Mobile No.
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="number" class="form-control" id="mobile"
                                                name="mobile" placeholder="Enter Mobile Number"
                                                value="">
                                            <?php }else{ ?>
                                            <input type="number" class="form-control" id="mobile"
                                                name="mobile" placeholder="Enter Mobile Number"
                                                value="<?php echo $formRecordsData[0]->Mobile; ?>">
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
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="complaints"
                                                name="complaints" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="complaints"
                                                name="complaints"
                                                style="height: 100px"><?php echo $speech_case_historyData[0]->Complaints; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Family History
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="family_history"
                                                name="family_history" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="family_history"
                                                name="family_history"
                                                style="height: 100px"><?php echo $speech_case_historyData[0]->Family_History; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Birth History</h4>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <h5>Prenatal</h5>
                                        <br>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Mother’s health
                                                during pregnancy :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="mother_health_pregrancy" name="mother_health_pregrancy"
                                                    style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="mother_health_pregrancy" name="mother_health_pregrancy"
                                                    style="height: 100px"><?php echo $speech_case_historyData[0]->Mother_Health_Pregrancy; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> Any medications
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="any_medications" name="any_medications"
                                                    style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="any_medications" name="any_medications"
                                                    style="height: 100px"><?php echo $speech_case_historyData[0]->Any_Medications; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> Any kind of trauma
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="any_kind_of_trauma" name="any_kind_of_trauma"
                                                    style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="any_kind_of_trauma" name="any_kind_of_trauma"
                                                    style="height: 100px"><?php echo $speech_case_historyData[0]->Any_Kind_Of_Trauma; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> X-Ray exposure
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="x_ray_exposure" name="x_ray_exposure"
                                                    style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="x_ray_exposure" name="x_ray_exposure"
                                                    style="height: 100px"><?php echo $speech_case_historyData[0]->X_Ray_Exposure; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> Rh factor
                                                incompatibility :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="rh_factor"
                                                    name="rh_factor" style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="rh_factor"
                                                    name="rh_factor"
                                                    style="height: 100px"><?php echo $speech_case_historyData[0]->Rh_Factor; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> Hypertension
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="hypertension"
                                                    name="hypertension" style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="hypertension"
                                                    name="hypertension"
                                                    style="height: 100px"><?php echo $speech_case_historyData[0]->Hypertension; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> BP :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="BP" name="BP"
                                                    style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="BP" name="BP"
                                                    style="height: 100px"><?php echo $speech_case_historyData[0]->BP; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> Others :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="others_prenatal" name="others_prenatal"
                                                    style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="others_prenatal" name="others_prenatal"
                                                    style="height: 100px"><?php echo $speech_case_historyData[0]->Others_Prenatal; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div>
                                        <h5>Perinatal</h5>
                                        <br>
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
                                                        <option value="home"
                                                            <?php echo $speech_case_historyData[0]->Delivery_Place == 'home' ? ' selected="selected"' : '';?>>
                                                            home</option>
                                                        <option value="hospital"
                                                            <?php echo $speech_case_historyData[0]->Delivery_Place == 'hospital' ? ' selected="selected"' : '';?>>
                                                            hospital</option>
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
                                                        <option value="pro longed">pro longed</option>
                                                    </select>
                                                    <?php }else{ ?>
                                                    <select class="form-select form-control" name="term_select"
                                                        id="term_select" aria-label="Default select example"
                                                        onchange="termChange()">
                                                        <option disabled>Select</option>
                                                        <option value="full term"
                                                            <?php echo $speech_case_historyData[0]->Term_Select == 'full term' ? ' selected="selected"' : '';?>>
                                                            full term</option>
                                                        <option value="per term"
                                                            <?php echo $speech_case_historyData[0]->Term_Select == 'per term' ? ' selected="selected"' : '';?>>
                                                            per term</option>
                                                        <option value="pro longed"
                                                            <?php echo $speech_case_historyData[0]->Term_Select == 'pro longed' ? ' selected="selected"' : '';?>>
                                                            pro longed</option>
                                                    </select>
                                                    <?php } ?>
                                                </div>
                                                <div class="col-sm-12">
                                                    <?php if($edit === false){ ?>
                                                    <input type="number" class="form-control" id="no_of_weeks"
                                                        name="no_of_weeks" placeholder="Enter No of Weeks">
                                                    <?php }else{ ?>
                                                    <input type="number" class="form-control" id="no_of_weeks"
                                                        name="no_of_weeks" placeholder="Enter No of Weeks"
                                                        value="<?php echo $speech_case_historyData[0]->No_Of_Weeks; ?>">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="inputEmail3" class="col-sm-12 col-form-label">Type of
                                                    delivery
                                                    :</label>
                                                <div class="col-sm-12">
                                                    <?php if($edit === false){ ?>
                                                    <select class="form-select form-control" name="type_of_delivery"
                                                        id="type_of_delivery" aria-label="Default select example">
                                                        <option disabled>Select</option>
                                                        <option value="normal">normal</option>
                                                        <option value="LSCS">LSCS</option>
                                                        <option value="forceps">forceps</option>
                                                        <option value="breach">breach</option>
                                                    </select>
                                                    <?php }else{ ?>
                                                    <select class="form-select form-control" name="type_of_delivery"
                                                        id="type_of_delivery" aria-label="Default select example">
                                                        <option disabled>Select</option>
                                                        <option value="normal"
                                                            <?php echo $speech_case_historyData[0]->Type_Of_Delivery == 'normal' ? ' selected="selected"' : '';?>>
                                                            normal</option>
                                                        <option value="LSCS"
                                                            <?php echo $speech_case_historyData[0]->Type_Of_Delivery == 'LSCS' ? ' selected="selected"' : '';?>>
                                                            LSCS</option>
                                                        <option value="forceps"
                                                            <?php echo $speech_case_historyData[0]->Type_Of_Delivery == 'forceps' ? ' selected="selected"' : '';?>>
                                                            forceps</option>
                                                        <option value="breach"
                                                            <?php echo $speech_case_historyData[0]->Type_Of_Delivery == 'breach' ? ' selected="selected"' : '';?>>
                                                            breach</option>
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
                                                        <option value="normal"
                                                            <?php echo $speech_case_historyData[0]->Birth_Color == 'normal' ? ' selected="selected"' : '';?>>
                                                            normal</option>
                                                        <option value="yellow"
                                                            <?php echo $speech_case_historyData[0]->Birth_Color == 'yellow' ? ' selected="selected"' : '';?>>
                                                            yellow</option>
                                                        <option value="blue"
                                                            <?php echo $speech_case_historyData[0]->Birth_Color == 'blue' ? ' selected="selected"' : '';?>>
                                                            blue</option>
                                                    </select>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="inputEmail3" class="col-sm-12 col-form-label">Birth Cry
                                                    :</label>
                                                <div class="col-sm-12">
                                                    <?php if($edit === false){ ?>
                                                    <select class="form-select form-control" name="birth_cry"
                                                        id="birth_cry" aria-label="Default select example">
                                                        <option disabled>Select</option>
                                                        <option value="immediate">immediate</option>
                                                        <option value="delayed">delayed</option>
                                                    </select>
                                                    <?php }else{ ?>
                                                    <select class="form-select form-control" name="birth_cry"
                                                        id="birth_cry" aria-label="Default select example">
                                                        <option disabled>Select</option>
                                                        <option value="immediate"
                                                            <?php echo $speech_case_historyData[0]->Birth_Cry == 'immediate' ? ' selected="selected"' : '';?>>
                                                            immediate</option>
                                                        <option value="delayed"
                                                            <?php echo $speech_case_historyData[0]->Birth_Cry == 'delayed' ? ' selected="selected"' : '';?>>
                                                            delayed</option>
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
                                                        value="<?php echo $speech_case_historyData[0]->Birth_Weight; ?>">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row mtb-5">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Other :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="other_perinatal" name="other_perinatal"
                                                    style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="other_perinatal" name="other_perinatal"
                                                    style="height: 100px"><?php echo $speech_case_historyData[0]->Other_Perinatal; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div>
                                        <h5>Postnatal</h5>
                                        <br>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Feeding :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <select class="form-select form-control" name="feeding" id="feeding"
                                                    aria-label="Default select example" onchange="feeding_change()">
                                                    <option disabled>Select</option>
                                                    <option value="breast feeding"> breast feeding</option>
                                                    <option value="bottle">bottle</option>
                                                    <option value="spoon">spoon</option>
                                                    <option value="other">other</option>
                                                </select>
                                                <?php }else{ ?>
                                                <select class="form-select form-control" name="feeding" id="feeding"
                                                    aria-label="Default select example" onchange="feeding_change()">
                                                    <option disabled>Select</option>
                                                    <option value="breast feeding"
                                                        <?php echo $speech_case_historyData[0]->Feeding == 'breast feeding' ? ' selected="selected"' : '';?>>
                                                        breast feeding</option>
                                                    <option value="bottle"
                                                        <?php echo $speech_case_historyData[0]->Feeding == 'bottle' ? ' selected="selected"' : '';?>>
                                                        bottle</option>
                                                    <option value="spoon"
                                                        <?php echo $speech_case_historyData[0]->Feeding == 'spoon' ? ' selected="selected"' : '';?>>
                                                        spoon</option>
                                                    <option value="other"
                                                        <?php echo $speech_case_historyData[0]->Feeding == 'other' ? ' selected="selected"' : '';?>>
                                                        other</option>
                                                </select>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3" id="other_feeding_section" style="display: none;">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Other Feeding
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="other_feeding" name="other_feeding"
                                                    style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="other_feeding" name="other_feeding"
                                                    style="height: 100px"><?php echo $speech_case_historyData[0]->Other_Feeding; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Any complications
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="any_complications" name="any_complications"
                                                    style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="any_complications" name="any_complications"
                                                    style="height: 100px"><?php echo $speech_case_historyData[0]->Any_Complications; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Any Remarks
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="any_remarks"
                                                    name="any_remarks" style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="any_remarks"
                                                    name="any_remarks"
                                                    style="height: 100px"><?php echo $speech_case_historyData[0]->Any_Remarks; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div>
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
                                                        value="<?php echo $speech_case_historyData[0]->Neck_Control; ?>">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="inputEmail3" class="col-sm-12 col-form-label">Turn over
                                                    :</label>
                                                <div class="col-sm-12">
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control" id="turn_over"
                                                        name="turn_over" placeholder="Type here in months">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control" id="turn_over"
                                                        name="turn_over" placeholder="Type here in months"
                                                        value="<?php echo $speech_case_historyData[0]->Turn_Over; ?>">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="inputEmail3" class="col-sm-12 col-form-label">Crawling
                                                    :</label>
                                                <div class="col-sm-12">
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control" id="crawling"
                                                        name="crawling" placeholder="Type here in months">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control" id="crawling"
                                                        name="crawling" placeholder="Type here in months"
                                                        value="<?php echo $speech_case_historyData[0]->Crawling; ?>">
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
                                                        value="<?php echo $speech_case_historyData[0]->Sitting; ?>">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="inputEmail3" class="col-sm-12 col-form-label">Standing
                                                    :</label>
                                                <div class="col-sm-12">
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control" id="standing"
                                                        name="standing" placeholder="Type here in months">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control" id="standing"
                                                        name="standing" placeholder="Type here in months"
                                                        value="<?php echo $speech_case_historyData[0]->Standing; ?>">
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
                                                        value="<?php echo $speech_case_historyData[0]->Walking; ?>">
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
                                                        <option value="Rt"
                                                            <?php echo $speech_case_historyData[0]->Handedness == 'Rt' ? ' selected="selected"' : '';?>>
                                                            Rt</option>
                                                        <option value="Lt"
                                                            <?php echo $speech_case_historyData[0]->Handedness == 'Lt' ? ' selected="selected"' : '';?>>
                                                            Lt</option>
                                                        <option value="both"
                                                            <?php echo $speech_case_historyData[0]->Handedness == 'both' ? ' selected="selected"' : '';?>>
                                                            both</option>
                                                        <option value="NA"
                                                            <?php echo $speech_case_historyData[0]->Handedness == 'NA' ? ' selected="selected"' : '';?>>
                                                            NA</option>
                                                    </select>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Toilet control
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <select class="form-select form-control" name="toilet_control"
                                                    id="toilet_control" aria-label="Default select example">
                                                    <option disabled>Select</option>
                                                    <option value="partial">partial</option>
                                                    <option value="complete">complete</option>
                                                    <option value="Ambidextrous">not achived</option>
                                                </select>
                                                <?php }else{ ?>
                                                <select class="form-select form-control" name="toilet_control"
                                                    id="toilet_control" aria-label="Default select example">
                                                    <option disabled>Select</option>
                                                    <option value="partial"
                                                        <?php echo $speech_case_historyData[0]->Toilet_Control == 'partial' ? ' selected="selected"' : '';?>>
                                                        partial</option>
                                                    <option value="complete"
                                                        <?php echo $speech_case_historyData[0]->Toilet_Control == 'complete' ? ' selected="selected"' : '';?>>
                                                        complete</option>
                                                    <option value="not achived"
                                                        <?php echo $speech_case_historyData[0]->Toilet_Control == 'not achived' ? ' selected="selected"' : '';?>>
                                                        not achived</option>
                                                </select>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Hand preference
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <select class="form-select form-control" name="hand_preference"
                                                    id="hand_preference" aria-label="Default select example">
                                                    <option disabled>Select</option>
                                                    <option value="Right">Right</option>
                                                    <option value="Left">Left</option>
                                                    <option value="Ambidextrous">Ambidextrous</option>
                                                    <option value="NA">NA</option>
                                                </select>
                                                <?php }else{ ?>
                                                <select class="form-select form-control" name="hand_preference"
                                                    id="hand_preference" aria-label="Default select example">
                                                    <option disabled>Select</option>
                                                    <option value="Right"
                                                        <?php echo $speech_case_historyData[0]->Hand_Preference == 'Right' ? ' selected="selected"' : '';?>>
                                                        Right</option>
                                                    <option value="Left"
                                                        <?php echo $speech_case_historyData[0]->Hand_Preference == 'Left' ? ' selected="selected"' : '';?>>
                                                        Left</option>
                                                    <option value="Ambidextrous"
                                                        <?php echo $speech_case_historyData[0]->Hand_Preference == 'Ambidextrous' ? ' selected="selected"' : '';?>>
                                                        Ambidextrous</option>
                                                    <option value="NA"
                                                        <?php echo $speech_case_historyData[0]->Hand_Preference == 'NA' ? ' selected="selected"' : '';?>>
                                                        NA</option>
                                                </select>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Undressing
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="undressing"
                                                    name="undressing" style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="undressing"
                                                    name="undressing"
                                                    style="height: 100px"><?php echo $speech_case_historyData[0]->Undressing; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Dressing
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="dressing"
                                                    name="dressing" style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="dressing"
                                                    name="dressing"
                                                    style="height: 100px"><?php echo $speech_case_historyData[0]->Dressing; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Remarks
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="remarks_motor" name="remarks_motor"
                                                    style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="remarks_motor" name="remarks_motor"
                                                    style="height: 100px"><?php echo $speech_case_historyData[0]->Remarks_Motor; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    <div>
                                        <h5>Fine motor skills</h5>
                                        <br>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Pincer grasp
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <select class="form-select form-control" name="pincer_grasp"
                                                    id="pincer_grasp" aria-label="Default select example">
                                                    <option disabled>Select</option>
                                                    <option value="possible">possible</option>
                                                    <option value="not possible">not possible</option>
                                                </select>
                                                <?php }else{ ?>
                                                <select class="form-select form-control" name="pincer_grasp"
                                                    id="pincer_grasp" aria-label="Default select example">
                                                    <option disabled>Select</option>
                                                    <option value="possible"
                                                        <?php echo $speech_case_historyData[0]->Pincer_Grasp == 'possible' ? ' selected="selected"' : '';?>>
                                                        possible</option>
                                                    <option value="not possible"
                                                        <?php echo $speech_case_historyData[0]->Pincer_Grasp == 'not possible' ? ' selected="selected"' : '';?>>
                                                        not possible</option>
                                                </select>
                                                <?php } ?>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Palmer grasp
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <select class="form-select form-control" name="palmer_grasp"
                                                    id="palmer_grasp" aria-label="Default select example">
                                                    <option disabled>Select</option>
                                                    <option value="possible">possible</option>
                                                    <option value="not possible">not possible</option>
                                                </select>
                                                <?php }else{ ?>
                                                <select class="form-select form-control" name="palmer_grasp"
                                                    id="palmer_grasp" aria-label="Default select example">
                                                    <option disabled>Select</option>
                                                    <option value="possible"
                                                        <?php echo $speech_case_historyData[0]->Palmer_Grasp == 'possible' ? ' selected="selected"' : '';?>>
                                                        possible</option>
                                                    <option value="not possible"
                                                        <?php echo $speech_case_historyData[0]->Palmer_Grasp == 'not possible' ? ' selected="selected"' : '';?>>
                                                        not possible</option>
                                                </select>
                                                <?php } ?>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Eye hand
                                                coordination
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <select class="form-select form-control" name="eye_hand_coordination"
                                                    id="eye_hand_coordination" aria-label="Default select example">
                                                    <option disabled>Select</option>
                                                    <option value="adequate">adequate</option>
                                                    <option value="inadequate">inadequate</option>
                                                </select>
                                                <?php }else{ ?>
                                                <select class="form-select form-control" name="eye_hand_coordination"
                                                    id="eye_hand_coordination" aria-label="Default select example">
                                                    <option disabled>Select</option>
                                                    <option value="adequate"
                                                        <?php echo $speech_case_historyData[0]->Eye_Hand_Coordination == 'adequate' ? ' selected="selected"' : '';?>>
                                                        adequate</option>
                                                    <option value="inadequate"
                                                        <?php echo $speech_case_historyData[0]->Eye_Hand_Coordination == 'inadequate' ? ' selected="selected"' : '';?>>
                                                        inadequate</option>
                                                </select>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div>
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
                                                        value="<?php echo $speech_case_historyData[0]->Cooing; ?>">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="inputEmail3" class="col-sm-12 col-form-label">Babbling
                                                    :</label>
                                                <div class="col-sm-12">
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control" id="babbling"
                                                        name="babbling" placeholder="Type here in months">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control" id="babbling"
                                                        name="babbling" placeholder="Type here in months"
                                                        value="<?php echo $speech_case_historyData[0]->Babbling; ?>">
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
                                                        value="<?php echo $speech_case_historyData[0]->First_Word; ?>">
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
                                                        value="<?php echo $speech_case_historyData[0]->Word_Phases; ?>">
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
                                                        value="<?php echo $speech_case_historyData[0]->Sentence_Level; ?>">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Remarks
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="remarks_sl_dev" name="remarks_sl_dev"
                                                    style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="remarks_sl_dev" name="remarks_sl_dev"
                                                    style="height: 100px"><?php echo $speech_case_historyData[0]->Remarks_Sl_Dev; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div>
                                        <h5>History of illness & previous treatment</h5><br>
                                        <div class="row mb-3">
                                            <div class="col-sm-12">
                                                <div class="col-sm-12">
                                                    <?php if($edit === false){ ?>
                                                    <textarea class="form-control" placeholder="Type Here"
                                                        id="history_IPT" name="history_IPT"
                                                        style="height: 100px"></textarea>
                                                    <?php }else{ ?>
                                                    <textarea class="form-control" placeholder="Type Here"
                                                        id="history_IPT" name="history_IPT"
                                                        style="height: 100px"><?php echo $speech_case_historyData[0]->History_IPT; ?></textarea>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    <div>
                                        <h5>Postnatal</h5>
                                        <br>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Vision :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <select class="form-select form-control" name="vision" id="vision"
                                                    aria-label="Default select example">
                                                    <option disabled>Select</option>
                                                    <option value="Normal"> Normal</option>
                                                    <option value="Affected">Affected</option>
                                                </select>
                                                <?php }else{ ?>
                                                <select class="form-select form-control" name="vision" id="vision"
                                                    aria-label="Default select example">
                                                    <option disabled>Select</option>
                                                    <option value="Normal"
                                                        <?php echo $speech_case_historyData[0]->Vision == 'Normal' ? ' selected="selected"' : '';?>>
                                                        Normal</option>
                                                    <option value="Affected"
                                                        <?php echo $speech_case_historyData[0]->Vision == 'Affected' ? ' selected="selected"' : '';?>>
                                                        Affected</option>
                                                </select>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Remarks
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="remarks_vision" name="remarks_vision"
                                                    style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="remarks_vision" name="remarks_vision"
                                                    style="height: 100px"><?php echo $speech_case_historyData[0]->Remarks_Vision; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Hearing :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <select class="form-select form-control" name="hearing" id="hearing"
                                                    aria-label="Default select example">
                                                    <option disabled>Select</option>
                                                    <option value="Normal"> Normal</option>
                                                    <option value="Affected">Affected</option>
                                                </select>
                                                <?php }else{ ?>
                                                <select class="form-select form-control" name="hearing" id="hearing"
                                                    aria-label="Default select example">
                                                    <option disabled>Select</option>
                                                    <option value="Normal"
                                                        <?php echo $speech_case_historyData[0]->Hearing == 'Normal' ? ' selected="selected"' : '';?>>
                                                        Normal</option>
                                                    <option value="Affected"
                                                        <?php echo $speech_case_historyData[0]->Hearing == 'Affected' ? ' selected="selected"' : '';?>>
                                                        Affected</option>
                                                </select>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Remarks
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="remarks_hearing" name="remarks_hearing"
                                                    style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="remarks_hearing" name="remarks_hearing"
                                                    style="height: 100px"><?php echo $speech_case_historyData[0]->Remarks_Hearing; ?></textarea>
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
                                    <div>
                                        <h5>Vegetative skills</h5>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Blowing :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <input type="text" class="form-control" id="blowing" name="blowing"
                                                    placeholder="Enter Blowing">
                                                <?php }else{ ?>
                                                <input type="text" class="form-control" id="blowing" name="blowing"
                                                    placeholder="Enter Blowing"
                                                    value="<?php echo $speech_case_historyData[0]->Blowing; ?>">
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Swallowing :
                                            </label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <input type="text" class="form-control" id="swallowing"
                                                    name="swallowing" placeholder="Enter Swallowing">
                                                <?php }else{ ?>
                                                <input type="text" class="form-control" id="swallowing"
                                                    name="swallowing" placeholder="Enter Swallowing"
                                                    value="<?php echo $speech_case_historyData[0]->Swallowing; ?>">
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Chewing :
                                            </label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <input type="text" class="form-control" id="v_chewing" name="v_chewing"
                                                    placeholder="Enter Chewing">
                                                <?php }else{ ?>
                                                <input type="text" class="form-control" id="v_chewing" name="v_chewing"
                                                    placeholder="Enter Chewing"
                                                    value="<?php echo $speech_case_historyData[0]->V_Chewing; ?>">
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Sucking :
                                            </label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <input type="text" class="form-control" id="sucking" name="sucking"
                                                    placeholder="Enter Sucking">
                                                <?php }else{ ?>
                                                <input type="text" class="form-control" id="sucking" name="sucking"
                                                    placeholder="Enter Sucking"
                                                    value="<?php echo $speech_case_historyData[0]->Sucking; ?>">
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Biting :
                                            </label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <input type="text" class="form-control" id="v_biting" name="v_biting"
                                                    placeholder="Enter Biting">
                                                <?php }else{ ?>
                                                <input type="text" class="form-control" id="v_biting" name="v_biting"
                                                    placeholder="Enter Biting"
                                                    value="<?php echo $speech_case_historyData[0]->V_Biting; ?>">
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div>
                                        <h5>Oral Peripheral Mechanism Examination (OPME)</h5>
                                        <br>
                                        <div class="row mb-3">

                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" scope="col">ORGAN</th>
                                                        <th class="text-center" scope="col">SRUCTURE</th>
                                                        <th class="text-center" scope="col">FUNCTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tbody">
                                                    <tr>
                                                        <td>Lip </td>
                                                        <td>
                                                            <?php if($edit === false){ ?>
                                                            <textarea class="form-control"
                                                                placeholder="Enter Lip Structure" id="lip_structure"
                                                                name="lip_structure" style="height: 100px"></textarea>
                                                            <?php }else{ ?>
                                                            <textarea class="form-control"
                                                                placeholder="Enter Lip Structure" id="lip_structure"
                                                                name="lip_structure"
                                                                style="height: 100px"><?php echo $speech_case_historyData[0]->Lip_Structure; ?></textarea>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <div class="row mb-3">
                                                                <label for="inputEmail3"
                                                                    class="col-sm-2 col-form-label">Puckering :</label>
                                                                <div class="col-sm-10">
                                                                    <?php if($edit === false){ ?>
                                                                    <input type="text" class="form-control"
                                                                        id="puckering" name="puckering"
                                                                        placeholder="Enter Puckering Function" value="">
                                                                    <?php }else{ ?>
                                                                    <input type="text" class="form-control"
                                                                        id="puckering" name="puckering"
                                                                        placeholder="Enter Puckering Function"
                                                                        value="<?php echo $speech_case_historyData[0]->Puckering; ?>">
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="inputEmail3"
                                                                    class="col-sm-2 col-form-label">Rounding :</label>
                                                                <div class="col-sm-10">
                                                                    <?php if($edit === false){ ?>
                                                                    <input type="text" class="form-control"
                                                                        id="rounding" name="rounding"
                                                                        placeholder="Enter Rounding Function" value="">
                                                                    <?php }else{ ?>
                                                                    <input type="text" class="form-control"
                                                                        id="rounding" name="rounding"
                                                                        placeholder="Enter Rounding Function"
                                                                        value="<?php echo $speech_case_historyData[0]->Rounding; ?>">
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="inputEmail3"
                                                                    class="col-sm-2 col-form-label">Spreading :</label>
                                                                <div class="col-sm-10">
                                                                    <?php if($edit === false){ ?>
                                                                    <input type="text" class="form-control"
                                                                        id="spreading" name="spreading"
                                                                        placeholder="Enter Spreading Function" value="">
                                                                    <?php }else{ ?>
                                                                    <input type="text" class="form-control"
                                                                        id="spreading" name="spreading"
                                                                        placeholder="Enter Spreading Function"
                                                                        value="<?php echo $speech_case_historyData[0]->Spreading; ?>">
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Teeth </td>
                                                        <td>
                                                            <?php if($edit === false){ ?>
                                                            <textarea class="form-control"
                                                                placeholder="Enter Teeth Structure" id="teeth_structure"
                                                                name="teeth_structure" style="height: 100px"></textarea>
                                                            <?php }else{ ?>
                                                            <textarea class="form-control"
                                                                placeholder="Enter Teeth Structure" id="teeth_structure"
                                                                name="teeth_structure"
                                                                style="height: 100px"><?php echo $speech_case_historyData[0]->Teeth_Structure; ?></textarea>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <div class="row mb-3">
                                                                <label for="inputEmail3"
                                                                    class="col-sm-2 col-form-label">Biting :</label>
                                                                <div class="col-sm-10">
                                                                    <?php if($edit === false){ ?>
                                                                    <input type="text" class="form-control"
                                                                        id="t_biting" name="t_biting"
                                                                        placeholder="Enter Biting Function" value="">
                                                                    <?php }else{ ?>
                                                                    <input type="text" class="form-control"
                                                                        id="t_biting" name="t_biting"
                                                                        placeholder="Enter Biting Function"
                                                                        value="<?php echo $speech_case_historyData[0]->T_Biting; ?>">
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="inputEmail3"
                                                                    class="col-sm-2 col-form-label">Chewing :</label>
                                                                <div class="col-sm-10">
                                                                    <?php if($edit === false){ ?>
                                                                    <input type="text" class="form-control"
                                                                        id="t_chewing" name="t_chewing"
                                                                        placeholder="Enter Chewing Function" value="">
                                                                    <?php }else{ ?>
                                                                    <input type="text" class="form-control"
                                                                        id="t_chewing" name="t_chewing"
                                                                        placeholder="Enter Chewing Function"
                                                                        value="<?php echo $speech_case_historyData[0]->T_Chewing; ?>">
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Tongue </td>
                                                        <td>
                                                            <?php if($edit === false){ ?>
                                                            <textarea class="form-control"
                                                                placeholder="Enter Tongue Structure"
                                                                id="tongue_structure" name="tongue_structure"
                                                                style="height: 100px"></textarea>
                                                            <?php }else{ ?>
                                                            <textarea class="form-control"
                                                                placeholder="Enter Tongue Structure"
                                                                id="tongue_structure" name="tongue_structure"
                                                                style="height: 100px"><?php echo $speech_case_historyData[0]->Tongue_Structure; ?></textarea>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <div class="row mb-3">
                                                                <label for="inputEmail3"
                                                                    class="col-sm-2 col-form-label">Elevation :</label>
                                                                <div class="col-sm-10">
                                                                    <?php if($edit === false){ ?>
                                                                    <input type="text" class="form-control"
                                                                        id="elevation" name="elevation"
                                                                        placeholder="Enter Elevation Function" value="">
                                                                    <?php }else{ ?>
                                                                    <input type="text" class="form-control"
                                                                        id="elevation" name="elevation"
                                                                        placeholder="Enter Elevation Function"
                                                                        value="<?php echo $speech_case_historyData[0]->Elevation; ?>">
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="inputEmail3"
                                                                    class="col-sm-2 col-form-label">Lateral movements
                                                                    :</label>
                                                                <div class="col-sm-10">
                                                                    <?php if($edit === false){ ?>
                                                                    <input type="text" class="form-control"
                                                                        id="lateral_movements" name="lateral_movements"
                                                                        placeholder="Enter Lateral movements Function"
                                                                        value="">
                                                                    <?php }else{ ?>
                                                                    <input type="text" class="form-control"
                                                                        id="lateral_movements" name="lateral_movements"
                                                                        placeholder="Enter Lateral movements Function"
                                                                        value="<?php echo $speech_case_historyData[0]->Lateral_Movements; ?>">
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="inputEmail3"
                                                                    class="col-sm-2 col-form-label">Protrusion :</label>
                                                                <div class="col-sm-10">
                                                                    <?php if($edit === false){ ?>
                                                                    <input type="text" class="form-control"
                                                                        id="protrusion" name="protrusion"
                                                                        placeholder="Enter Protrusion Function"
                                                                        value="">
                                                                    <?php }else{ ?>
                                                                    <input type="text" class="form-control"
                                                                        id="protrusion" name="protrusion"
                                                                        placeholder="Enter Protrusion Function"
                                                                        value="<?php echo $speech_case_historyData[0]->Protrusion; ?>">
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="inputEmail3"
                                                                    class="col-sm-2 col-form-label">Retraction :</label>
                                                                <div class="col-sm-10">
                                                                    <?php if($edit === false){ ?>
                                                                    <input type="text" class="form-control"
                                                                        id="retraction" name="retraction"
                                                                        placeholder="Enter Retraction Function"
                                                                        value="">
                                                                    <?php }else{ ?>
                                                                    <input type="text" class="form-control"
                                                                        id="retraction" name="retraction"
                                                                        placeholder="Enter Retraction Function"
                                                                        value="<?php echo $speech_case_historyData[0]->Retraction; ?>">
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Hard palate </td>
                                                        <td>
                                                            <?php if($edit === false){ ?>
                                                            <textarea class="form-control"
                                                                placeholder="Enter Hard palate Structure"
                                                                id="hard_palate_structure" name="hard_palate_structure"
                                                                style="height: 100px"></textarea>
                                                            <?php }else{ ?>
                                                            <textarea class="form-control"
                                                                placeholder="Enter Hard palate Structure"
                                                                id="hard_palate_structure" name="hard_palate_structure"
                                                                style="height: 100px"><?php echo $speech_case_historyData[0]->Hard_Palate_Structure; ?></textarea>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <?php if($edit === false){ ?>
                                                            <textarea class="form-control"
                                                                placeholder="Enter Hard palate Function"
                                                                id="hard_palate_function" name="hard_palate_function"
                                                                style="height: 100px"></textarea>
                                                            <?php }else{ ?>
                                                            <textarea class="form-control"
                                                                placeholder="Enter Hard palate Function"
                                                                id="hard_palate_function" name="hard_palate_function"
                                                                style="height: 100px"><?php echo $speech_case_historyData[0]->Hard_Palate_Function; ?></textarea>
                                                            <?php } ?>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Soft palate</td>
                                                        <td>
                                                            <?php if($edit === false){ ?>
                                                            <textarea class="form-control"
                                                                placeholder="Enter Soft Palate Structure"
                                                                id="soft_palate_structure" name="soft_palate_structure"
                                                                style="height: 100px"></textarea>
                                                            <?php }else{ ?>
                                                            <textarea class="form-control"
                                                                placeholder="Enter Soft Palate Structure"
                                                                id="soft_palate_structure" name="soft_palate_structure"
                                                                style="height: 100px"><?php echo $speech_case_historyData[0]->Soft_Palate_Structure; ?></textarea>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <div class="row mb-3">
                                                                <label for="inputEmail3"
                                                                    class="col-sm-2 col-form-label">Symmetrical
                                                                    movements :</label>
                                                                <div class="col-sm-10">
                                                                    <?php if($edit === false){ ?>
                                                                    <input type="text" class="form-control"
                                                                        id="symmetrical_movements"
                                                                        name="symmetrical_movements"
                                                                        placeholder="Enter Symmetrical Movements Function"
                                                                        value="">
                                                                    <?php }else{ ?>
                                                                    <input type="text" class="form-control"
                                                                        id="symmetrical_movements"
                                                                        name="symmetrical_movements"
                                                                        placeholder="Enter Symmetrical Movements Function"
                                                                        value="<?php echo $speech_case_historyData[0]->Symmetrical_Movements; ?>">
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Uvula </td>
                                                        <td>
                                                            <?php if($edit === false){ ?>
                                                            <textarea class="form-control"
                                                                placeholder="Enter Uvula Structure" id="uvula_structure"
                                                                name="uvula_structure" style="height: 100px"></textarea>
                                                            <?php }else{ ?>
                                                            <textarea class="form-control"
                                                                placeholder="Enter Uvula Structure" id="uvula_structure"
                                                                name="uvula_structure"
                                                                style="height: 100px"><?php echo $speech_case_historyData[0]->Uvula_Structure; ?></textarea>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <?php if($edit === false){ ?>
                                                            <textarea class="form-control"
                                                                placeholder="Enter Uvula Function" id="uvula_function"
                                                                name="uvula_function" style="height: 100px"></textarea>
                                                            <?php }else{ ?>
                                                            <textarea class="form-control"
                                                                placeholder="Enter Uvula Function" id="uvula_function"
                                                                name="uvula_function"
                                                                style="height: 100px"><?php echo $speech_case_historyData[0]->Uvula_Function; ?></textarea>
                                                            <?php } ?>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Jaw </td>
                                                        <td>
                                                            <?php if($edit === false){ ?>
                                                            <textarea class="form-control"
                                                                placeholder="Enter Jaw Structure" id="jaw_structure"
                                                                name="jaw_structure" style="height: 100px"></textarea>
                                                            <?php }else{ ?>
                                                            <textarea class="form-control"
                                                                placeholder="Enter Jaw Structure" id="jaw_structure"
                                                                name="jaw_structure"
                                                                style="height: 100px"><?php echo $speech_case_historyData[0]->Jaw_Structure; ?></textarea>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <?php if($edit === false){ ?>
                                                            <textarea class="form-control"
                                                                placeholder="Enter Jaw Function" id="jaw_function"
                                                                name="jaw_function" style="height: 100px"></textarea>
                                                            <?php }else{ ?>
                                                            <textarea class="form-control"
                                                                placeholder="Enter Jaw Function" id="jaw_function"
                                                                name="jaw_function"
                                                                style="height: 100px"><?php echo $speech_case_historyData[0]->Jaw_Function; ?></textarea>
                                                            <?php } ?>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="2">IOBP: </td>
                                                        <td>
                                                            <div class="row mb-3">
                                                                <label for="inputEmail3"
                                                                    class="col-sm-2 col-form-label">Drooling :</label>
                                                                <div class="col-sm-10">
                                                                    <?php if($edit === false){ ?>
                                                                    <input type="text" class="form-control"
                                                                        id="drooling" name="drooling"
                                                                        placeholder="Enter Drooling Function" value="">
                                                                    <?php }else{ ?>
                                                                    <input type="text" class="form-control"
                                                                        id="drooling" name="drooling"
                                                                        placeholder="Enter Drooling Function"
                                                                        value="<?php echo $speech_case_historyData[0]->Drooling; ?>">
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Pre linguistic skills</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Attention :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="attention" name="attention"
                                                placeholder="Enter Attention">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="attention" name="attention"
                                                placeholder="Enter Attention"
                                                value="<?php echo $speech_case_historyData[0]->Attention; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Eye contact :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="eye_contact" name="eye_contact"
                                                placeholder="Enter Eye contact">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="eye_contact" name="eye_contact"
                                                placeholder="Enter Eye contact"
                                                value="<?php echo $speech_case_historyData[0]->Eye_Contact; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Name call response :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="name_call_response"
                                                name="name_call_response" placeholder="Enter Name call response">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="name_call_response"
                                                name="name_call_response" placeholder="Enter Name call response"
                                                value="<?php echo $speech_case_historyData[0]->Name_Call_Response; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Sitting tolerance :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="sitting_tolerance"
                                                name="sitting_tolerance" placeholder="Enter Sitting tolerance">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="sitting_tolerance"
                                                name="sitting_tolerance" placeholder="Enter Sitting tolerance"
                                                value="<?php echo $speech_case_historyData[0]->Sitting_Tolerance; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Compliance :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="compliance" name="compliance"
                                                placeholder="Enter Compliance">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="compliance" name="compliance"
                                                placeholder="Enter Compliance"
                                                value="<?php echo $speech_case_historyData[0]->Compliance; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Pointing :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="pointing" name="pointing"
                                                placeholder="Enter Pointing">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="pointing" name="pointing"
                                                placeholder="Enter Pointing"
                                                value="<?php echo $speech_case_historyData[0]->Pointing; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Turn taking :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="turn_taking" name="turn_taking"
                                                placeholder="Enter Turn taking">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="turn_taking" name="turn_taking"
                                                placeholder="Enter Turn taking"
                                                value="<?php echo $speech_case_historyData[0]->Turn_Taking; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Language skills</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Language comprehension
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Enter Language comprehension"
                                                id="language_comprehension" name="language_comprehension"
                                                style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Enter Language comprehension"
                                                id="language_comprehension" name="language_comprehension"
                                                style="height: 100px"><?php echo $speech_case_historyData[0]->Language_Comprehension; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Language expression :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Enter Language expression"
                                                id="language_expression" name="language_expression"
                                                style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Enter Language expression"
                                                id="language_expression" name="language_expression"
                                                style="height: 100px"><?php echo $speech_case_historyData[0]->Language_Expression; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Mode of communication :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <select class="form-select form-control" name="mode_of_communication"
                                                aria-label="Default select example" value="">
                                                <option disabled>Select</option>
                                                <option value="Verbal">Verbal</option>
                                                <option value="Non-Verbal">Non-Verbal</option>
                                            </select>
                                            <?php }else{ ?>
                                            <select class="form-select form-control" name="mode_of_communication"
                                                aria-label="Default select example">
                                                <option disabled>Select</option>
                                                <option value="Verbal"
                                                    <?php echo $speech_case_historyData[0]->Mode_Of_Communication == 'Verbal' ? ' selected="selected"' : '';?>>
                                                    Verbal</option>
                                                <option value="Non-Verbal"
                                                    <?php echo $speech_case_historyData[0]->Mode_Of_Communication == 'Non-Verbal' ? ' selected="selected"' : '';?>>
                                                    Non-Verbal</option>
                                            </select>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Pragmatic skills</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Greetings :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="greetings" name="greetings"
                                                placeholder="Enter Greetings">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="greetings" name="greetings"
                                                placeholder="Enter Greetings"
                                                value="<?php echo $speech_case_historyData[0]->Greetings; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <h4>Social interaction</h4>
                                    <br>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Engages in interaction
                                            :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="engages_in_interaction"
                                                name="engages_in_interaction"
                                                placeholder="Enter Engages in interaction">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="engages_in_interaction"
                                                name="engages_in_interaction" placeholder="Enter Engages in interaction"
                                                value="<?php echo $speech_case_historyData[0]->Engages_In_Interaction; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Initiate interaction :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="initiate_interaction"
                                                name="initiate_interaction" placeholder="Enter Initiate interaction">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="initiate_interaction"
                                                name="initiate_interaction" placeholder="Enter Initiate interaction"
                                                value="<?php echo $speech_case_historyData[0]->Initiate_Interaction; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Social smile :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="social_smile"
                                                name="social_smile" placeholder="Enter Social smile">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="social_smile"
                                                name="social_smile" placeholder="Enter Social smile"
                                                value="<?php echo $speech_case_historyData[0]->Social_Smile; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <h4>Play</h4>
                                    <br>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Solo play :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="solo_play" name="solo_play"
                                                placeholder="Enter Solo play">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="solo_play" name="solo_play"
                                                placeholder="Enter Solo play"
                                                value="<?php echo $speech_case_historyData[0]->Solo_Play; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Peer play :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="peer_play" name="peer_play"
                                                placeholder="Enter Peer play">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="peer_play" name="peer_play"
                                                placeholder="Enter Peer play"
                                                value="<?php echo $speech_case_historyData[0]->Peer_Play; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Instrumental play :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="instrumental_play"
                                                name="instrumental_play" placeholder="Enter Instrumental play">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="instrumental_play"
                                                name="instrumental_play" placeholder="Enter Instrumental play"
                                                value="<?php echo $speech_case_historyData[0]->Instrumental_Play; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Imaginative play :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="imaginative_play"
                                                name="imaginative_play" placeholder="Enter Imaginative play">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="imaginative_play"
                                                name="imaginative_play" placeholder="Enter Imaginative play"
                                                value="<?php echo $speech_case_historyData[0]->Imaginative_Play; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Narration :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="narration" name="narration"
                                                placeholder="Enter Narration">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="narration" name="narration"
                                                placeholder="Enter Narration"
                                                value="<?php echo $speech_case_historyData[0]->Narration; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Topic initiation :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="topic_initiation"
                                                name="topic_initiation" placeholder="Enter Topic initiation">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="topic_initiation"
                                                name="topic_initiation" placeholder="Enter Topic initiation"
                                                value="<?php echo $speech_case_historyData[0]->Topic_Initiation; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Topic maintenance :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="topic_maintenance"
                                                name="topic_maintenance" placeholder="Enter Topic maintenance">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="topic_maintenance"
                                                name="topic_maintenance" placeholder="Enter Topic maintenance"
                                                value="<?php echo $speech_case_historyData[0]->Topic_Maintenance; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Topic termination :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="topic_termination"
                                                name="topic_termination" placeholder="Enter Topic termination">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="topic_termination"
                                                name="topic_termination" placeholder="Enter Topic termination"
                                                value="<?php echo $speech_case_historyData[0]->Topic_Termination; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Cognitive skills</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Object permanence
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="object_permanence"
                                                name="object_permanence" placeholder="Enter Object permanence">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="object_permanence"
                                                name="object_permanence" placeholder="Enter Object permanence"
                                                value="<?php echo $speech_case_historyData[0]->Object_Permanence; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Object use :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="object_use" name="object_use"
                                                placeholder="Enter Object use">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="object_use" name="object_use"
                                                placeholder="Enter Object use"
                                                value="<?php echo $speech_case_historyData[0]->Object_Use; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Sequencing :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="sequencing" name="sequencing"
                                                placeholder="Enter Sequencing">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="sequencing" name="sequencing"
                                                placeholder="Enter Sequencing"
                                                value="<?php echo $speech_case_historyData[0]->Sequencing; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Selection :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="selection" name="selection"
                                                placeholder="Enter Selection">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="selection" name="selection"
                                                placeholder="Enter Selection"
                                                value="<?php echo $speech_case_historyData[0]->Selection; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Matching :
                                        </label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-6 mb-3">
                                                    <div class="row mb-3">
                                                        <label for="inputEmail3" class="col-sm-3 col-form-label">object
                                                            to object:
                                                        </label>
                                                        <div class="col-sm-9">
                                                            <?php if($edit === false){ ?>
                                                            <input type="text" class="form-control"
                                                                id="object_to_object" name="object_to_object"
                                                                placeholder="Enter object to object">
                                                            <?php }else{ ?>
                                                            <input type="text" class="form-control"
                                                                id="object_to_object" name="object_to_object"
                                                                placeholder="Enter object to object"
                                                                value="<?php echo $speech_case_historyData[0]->Object_To_Object; ?>">
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-3">
                                                    <div class="row mb-3">
                                                        <label for="inputEmail3" class="col-sm-3 col-form-label">object
                                                            to Picture:
                                                        </label>
                                                        <div class="col-sm-9">
                                                            <?php if($edit === false){ ?>
                                                            <input type="text" class="form-control"
                                                                id="object_to_picture" name="object_to_picture"
                                                                placeholder="Enter Object to Picture">
                                                            <?php }else{ ?>
                                                            <input type="text" class="form-control"
                                                                id="object_to_picture" name="object_to_picture"
                                                                placeholder="Enter Object to Picture"
                                                                value="<?php echo $speech_case_historyData[0]->Object_To_Picture; ?>">
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Categorization :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="categorization"
                                                name="categorization" placeholder="Enter Categorization">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="categorization"
                                                name="categorization" placeholder="Enter Categorization"
                                                value="<?php echo $speech_case_historyData[0]->Categorization; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Reasoning :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="reasoning" name="reasoning"
                                                placeholder="Enter Reasoning">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="reasoning" name="reasoning"
                                                placeholder="Enter Reasoning"
                                                value="<?php echo $speech_case_historyData[0]->Reasoning; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Judgment :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="judgment" name="judgment"
                                                placeholder="Enter Judgment">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="judgment" name="judgment"
                                                placeholder="Enter Judgment"
                                                value="<?php echo $speech_case_historyData[0]->Judgment; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Gender concept :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="gender_concept"
                                                name="gender_concept" placeholder="Enter Gender concept">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="gender_concept"
                                                name="gender_concept" placeholder="Enter Gender concept"
                                                value="<?php echo $speech_case_historyData[0]->Gender_Concept; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Money concept :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="money_concept"
                                                name="money_concept" placeholder="Enter Money concept">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="money_concept"
                                                name="money_concept" placeholder="Enter Money concept"
                                                value="<?php echo $speech_case_historyData[0]->Money_Concept; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Semantic relations</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label for="inputEmail3"
                                            class="col-sm-2 col-form-label">Appearance/Disappearance :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="appearance_disappearance"
                                                name="appearance_disappearance" placeholder="Enter Object permanence">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="appearance_disappearance"
                                                name="appearance_disappearance" placeholder="Enter Object permanence"
                                                value="<?php echo $speech_case_historyData[0]->Appearance_Disappearance; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Possession :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="possession" name="possession"
                                                placeholder="Enter Possession">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="possession" name="possession"
                                                placeholder="Enter Possession"
                                                value="<?php echo $speech_case_historyData[0]->Possession; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Rejection :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="rejection" name="rejection"
                                                placeholder="Enter Rejection">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="rejection" name="rejection"
                                                placeholder="Enter Rejection"
                                                value="<?php echo $speech_case_historyData[0]->Rejection; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Location :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="location" name="location"
                                                placeholder="Enter Location">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="location" name="location"
                                                placeholder="Enter Location"
                                                value="<?php echo $speech_case_historyData[0]->Location; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Denial :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="denial" name="denial"
                                                placeholder="Enter Denial">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="denial" name="denial"
                                                placeholder="Enter Denial"
                                                value="<?php echo $speech_case_historyData[0]->Denial; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Imitation :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="imitation" name="imitation"
                                                placeholder="Enter Imitation">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="imitation" name="imitation"
                                                placeholder="Enter Imitation"
                                                value="<?php echo $speech_case_historyData[0]->Imitation; ?>">
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
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Language Test Results
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Enter Language Test Results"
                                                id="language_test_results" name="language_test_results"
                                                style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Enter Language Test Results"
                                                id="language_test_results" name="language_test_results"
                                                style="height: 100px"><?php echo $speech_case_historyData[0]->Language_Test_Results; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <h4>Speech skills</h4>
                                    <br>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Articulation :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Enter Articulation"
                                                id="articulation" name="articulation" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Enter Articulation"
                                                id="articulation" name="articulation"
                                                style="height: 100px"><?php echo $speech_case_historyData[0]->Articulation; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Voice :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Enter Voice" id="voice"
                                                name="voice" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Enter Voice" id="voice"
                                                name="voice"
                                                style="height: 100px"><?php echo $speech_case_historyData[0]->Voice; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Fluency :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Enter Fluency" id="fluency"
                                                name="fluency" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Enter Fluency" id="fluency"
                                                name="fluency"
                                                style="height: 100px"><?php echo $speech_case_historyData[0]->Fluency; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Speech test results :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Enter Speech test results"
                                                id="speech_test_results" name="speech_test_results"
                                                style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Enter Speech test results"
                                                id="speech_test_results" name="speech_test_results"
                                                style="height: 100px"><?php echo $speech_case_historyData[0]->Speech_Test_Results; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Academic skils :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Enter Academic skils"
                                                id="academic_skils" name="academic_skils"
                                                style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Enter Academic skils"
                                                id="academic_skils" name="academic_skils"
                                                style="height: 100px"><?php echo $speech_case_historyData[0]->Academic_Skils; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Reading :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Enter Reading" id="reading"
                                                name="reading" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Enter Reading" id="reading"
                                                name="reading"
                                                style="height: 100px"><?php echo $speech_case_historyData[0]->Reading; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Writing :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Enter Writing" id="writing"
                                                name="writing" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Enter Writing" id="writing"
                                                name="writing"
                                                style="height: 100px"><?php echo $speech_case_historyData[0]->Writing; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Arithmetic :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Enter Arithmetic"
                                                id="arithmetic" name="arithmetic" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Enter Arithmetic"
                                                id="arithmetic" name="arithmetic"
                                                style="height: 100px"><?php echo $speech_case_historyData[0]->Arithmetic; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Copying :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Enter Copying" id="copying"
                                                name="copying" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Enter Copying" id="copying"
                                                name="copying"
                                                style="height: 100px"><?php echo $speech_case_historyData[0]->Copying; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Behavioural skills :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Enter Behavioural skills"
                                                id="behavioural_skills" name="behavioural_skills"
                                                style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Enter Behavioural skills"
                                                id="behavioural_skills" name="behavioural_skills"
                                                style="height: 100px"><?php echo $speech_case_historyData[0]->Behavioural_Skills; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Provisional Diagnosis :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Enter Diagnostic formulation"
                                                id="diagnostic_formulation" name="diagnostic_formulation"
                                                style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Enter Diagnostic formulation"
                                                id="diagnostic_formulation" name="diagnostic_formulation"
                                                style="height: 100px"><?php echo $speech_case_historyData[0]->Diagnostic_Formulation; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Provisional Diagnosis :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Enter Provisional Diagnosis"
                                                id="provisionalDiagnosis" name="provisionalDiagnosis"
                                                style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Enter Provisional Diagnosis"
                                                id="provisionalDiagnosis" name="provisionalDiagnosis"
                                                style="height: 100px"><?php echo $formRecordsData[0]->ProvisionalDiagnosis; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Recommendations :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Enter Recommendations"
                                                id="recommendations" name="recommendations"
                                                style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Enter Recommendations"
                                                id="recommendations" name="recommendations"
                                                style="height: 100px"><?php echo $speech_case_historyData[0]->Recommendations; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <?php if($action == 1){ ?>
                            <?php if($edit === true): ?>
                            <button type="submit" class="btn btn-primary float-right" name="edit_speech_case_history"
                                id="edit_speech_case_history">Submit</button>
                            <?php else: ?>
                            <button type="submit" class="btn btn-primary float-right" name="add_speech_case_history"
                                id="add_speech_case_history">Submit</button>
                            <?php endif; ?>
                        <?php } ?>    
                    </div>
                </div>
            </div>
        </form>    
    </div>       
</div>

<script>
function feeding_change() {
    let feeding = $("#feeding").val();
    if (feeding == 'other') {
        $("#other_feeding_section").show();
    } else {
        $("#other_feeding_section").hide();
    }
}
</script>


<?php if($edit) { ?>

<?php if($speech_case_historyData[0]->Feeding == 'other') { ?>
<script>
$(document).ready(function() {
    $("#other_feeding_section").show();
});
</script>
<?php }else{ ?>
<script>
$(document).ready(function() {
    $("#other_feeding_section").hide();
});
</script>
<?php } ?>


<?php } ?>