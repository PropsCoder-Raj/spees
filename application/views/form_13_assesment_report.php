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
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Examinee Name :</label>
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
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Language spoken at home
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
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Reason for Assessment
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="reason_for_assessment"
                                                name="reason_for_assessment" placeholder="Type here">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="reason_for_assessment"
                                                name="reason_for_assessment" placeholder="Type here"
                                                value="<?php echo $formRecordsData[0]->Reason_For_Assessment; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Date of Birth :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="date" class="form-control" id="dob" name="dob"
                                                placeholder="Enter DOB" value="<?php echo $patientData->DOB; ?>">
                                            <?php }else{ ?>
                                            <input type="date" class="form-control" id="dob" name="dob"
                                                placeholder="Enter DOB" value="<?php echo $formRecordsData[0]->DOB; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Date of testing
                                            :</label>
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
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Age At Testing
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="number" class="form-control" id="age" name="age"
                                                placeholder="Enter Age in Years"
                                                value="<?php echo $patientData->Age; ?>">
                                            <?php }else{ ?>
                                            <input type="number" class="form-control" id="age" name="age"
                                                placeholder="Enter Age in Years"
                                                value="<?php echo $formRecordsData[0]->Age; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Concern</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Does not sit in one
                                            place :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="concern_1"
                                                name="concern_1" style="height: 80px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="concern_1"
                                                name="concern_1"
                                                style="height: 80px"><?php echo $assesment_reportData[0]->Concern_1; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Self-harming behavior
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="concern_2"
                                                name="concern_2" style="height: 80px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="concern_2"
                                                name="concern_2"
                                                style="height: 80px"><?php echo $assesment_reportData[0]->Concern_2; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Temper tantrums,
                                            stubborn behavior :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="concern_3"
                                                name="concern_3" style="height: 80px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="concern_3"
                                                name="concern_3"
                                                style="height: 80px"><?php echo $assesment_reportData[0]->Concern_3; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Sensory- avoids
                                            sharper voice :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="concern_4"
                                                name="concern_4" style="height: 80px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="concern_4"
                                                name="concern_4"
                                                style="height: 80px"><?php echo $assesment_reportData[0]->Concern_4; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Speech delay &
                                            Echolalic speech
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="concern_5"
                                                name="concern_5" style="height: 80px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="concern_5"
                                                name="concern_5"
                                                style="height: 80px"><?php echo $assesment_reportData[0]->Concern_5; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Poor attention
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="concern_6"
                                                name="concern_6" style="height: 80px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="concern_6"
                                                name="concern_6"
                                                style="height: 80px"><?php echo $assesment_reportData[0]->Concern_6; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Clinical Background: </h5>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="clinical_background" name="clinical_background"
                                                style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="clinical_background" name="clinical_background"
                                                style="height: 100px"><?php echo $assesment_reportData[0]->Clinical_Background; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Motor & Speech Development</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Neck holding :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="motor_speech_development_1" name="motor_speech_development_1"
                                                style="height: 80px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="motor_speech_development_1" name="motor_speech_development_1"
                                                style="height: 80px"><?php echo $assesment_reportData[0]->Motor_Speech_Development_1; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Crawling :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="motor_speech_development_2" name="motor_speech_development_2"
                                                style="height: 80px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="motor_speech_development_2" name="motor_speech_development_2"
                                                style="height: 80px"><?php echo $assesment_reportData[0]->Motor_Speech_Development_2; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Walking :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="motor_speech_development_3" name="motor_speech_development_3"
                                                style="height: 80px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="motor_speech_development_3" name="motor_speech_development_3"
                                                style="height: 80px"><?php echo $assesment_reportData[0]->Motor_Speech_Development_3; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Speech :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="motor_speech_development_4" name="motor_speech_development_4"
                                                style="height: 80px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="motor_speech_development_4" name="motor_speech_development_4"
                                                style="height: 80px"><?php echo $assesment_reportData[0]->Motor_Speech_Development_4; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Academic History: </h5>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="academic_history"
                                                name="academic_history" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="academic_history"
                                                name="academic_history"
                                                style="height: 100px"><?php echo $assesment_reportData[0]->Academic_History; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <h5>Tests Administered: </h5>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="tests_administered" name="tests_administered"
                                                style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="tests_administered" name="tests_administered"
                                                style="height: 100px"><?php echo $assesment_reportData[0]->Tests_Administered; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Observations</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Follow simple commands
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="observations_1"
                                                name="observations_1" style="height: 80px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="observations_1"
                                                name="observations_1"
                                                style="height: 80px"><?php echo $assesment_reportData[0]->Observations_1; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Need repetitive
                                            instruction :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="observations_2"
                                                name="observations_2" style="height: 80px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="observations_2"
                                                name="observations_2"
                                                style="height: 80px"><?php echo $assesment_reportData[0]->Observations_2; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Does not sit at one
                                            place :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="observations_3"
                                                name="observations_3" style="height: 80px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="observations_3"
                                                name="observations_3"
                                                style="height: 80px"><?php echo $assesment_reportData[0]->Observations_3; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Screen time :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="observations_4"
                                                name="observations_4" style="height: 80px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="observations_4"
                                                name="observations_4"
                                                style="height: 80px"><?php echo $assesment_reportData[0]->Observations_4; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Eye contact :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="observations_5"
                                                name="observations_5" style="height: 80px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="observations_5"
                                                name="observations_5"
                                                style="height: 80px"><?php echo $assesment_reportData[0]->Observations_5; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Self :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="observations_6"
                                                name="observations_6" style="height: 80px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="observations_6"
                                                name="observations_6"
                                                style="height: 80px"><?php echo $assesment_reportData[0]->Observations_6; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Vocabulary :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="observations_7"
                                                name="observations_7" style="height: 80px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="observations_7"
                                                name="observations_7"
                                                style="height: 80px"><?php echo $assesment_reportData[0]->Observations_7; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Fine motor :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="observations_8"
                                                name="observations_8" style="height: 80px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="observations_8"
                                                name="observations_8"
                                                style="height: 80px"><?php echo $assesment_reportData[0]->Observations_8; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Identify Color & shape
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="observations_9"
                                                name="observations_9" style="height: 80px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="observations_9"
                                                name="observations_9"
                                                style="height: 80px"><?php echo $assesment_reportData[0]->Observations_9; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Alphabet recognition
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="observations_10"
                                                name="observations_10" style="height: 80px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="observations_10"
                                                name="observations_10"
                                                style="height: 80px"><?php echo $assesment_reportData[0]->Observations_10; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Right handedness
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="observations_11"
                                                name="observations_11" style="height: 80px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="observations_11"
                                                name="observations_11"
                                                style="height: 80px"><?php echo $assesment_reportData[0]->Observations_11; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Results of Vineland Adaptive Behavior Scales – III Edition</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-sm-12">

                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 25%">Domain</th>
                                                        <th>Sub Domain</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tbody">
                                                    <tr>
                                                        <td>Receptive : </td>
                                                        <td>
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here" id="sub_domain_1"
                                                            name="sub_domain_1" style="height: 80px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here" id="sub_domain_1"
                                                            name="sub_domain_1"
                                                            style="height: 80px"><?php echo $assesment_reportData[0]->Sub_Domain_1; ?></textarea>
                                                        <?php } ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Expressive : </td>
                                                        <td>
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here" id="sub_domain_2"
                                                            name="sub_domain_2" style="height: 80px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here" id="sub_domain_2"
                                                            name="sub_domain_2"
                                                            style="height: 80px"><?php echo $assesment_reportData[0]->Sub_Domain_2; ?></textarea>
                                                        <?php } ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Written : </td>
                                                        <td>
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here" id="sub_domain_3"
                                                            name="sub_domain_3" style="height: 80px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here" id="sub_domain_3"
                                                            name="sub_domain_3"
                                                            style="height: 80px"><?php echo $assesment_reportData[0]->Sub_Domain_3; ?></textarea>
                                                        <?php } ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Personal : </td>
                                                        <td>
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here" id="sub_domain_4"
                                                            name="sub_domain_4" style="height: 80px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here" id="sub_domain_4"
                                                            name="sub_domain_4"
                                                            style="height: 80px"><?php echo $assesment_reportData[0]->Sub_Domain_4; ?></textarea>
                                                        <?php } ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Domestic : </td>
                                                        <td>
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here" id="sub_domain_5"
                                                            name="sub_domain_5" style="height: 80px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here" id="sub_domain_5"
                                                            name="sub_domain_5"
                                                            style="height: 80px"><?php echo $assesment_reportData[0]->Sub_Domain_5; ?></textarea>
                                                        <?php } ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Community : </td>
                                                        <td>
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here" id="sub_domain_6"
                                                            name="sub_domain_6" style="height: 80px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here" id="sub_domain_6"
                                                            name="sub_domain_6"
                                                            style="height: 80px"><?php echo $assesment_reportData[0]->Sub_Domain_6; ?></textarea>
                                                        <?php } ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Interpersonal Relationships : </td>
                                                        <td>
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here" id="sub_domain_7"
                                                            name="sub_domain_7" style="height: 80px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here" id="sub_domain_7"
                                                            name="sub_domain_7"
                                                            style="height: 80px"><?php echo $assesment_reportData[0]->Sub_Domain_7; ?></textarea>
                                                        <?php } ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Play & leisure time : </td>
                                                        <td>
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here" id="sub_domain_8"
                                                            name="sub_domain_8" style="height: 80px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here" id="sub_domain_8"
                                                            name="sub_domain_8"
                                                            style="height: 80px"><?php echo $assesment_reportData[0]->Sub_Domain_8; ?></textarea>
                                                        <?php } ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Coping Skills : </td>
                                                        <td>
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here" id="sub_domain_9"
                                                            name="sub_domain_9" style="height: 80px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here" id="sub_domain_9"
                                                            name="sub_domain_9"
                                                            style="height: 80px"><?php echo $assesment_reportData[0]->Sub_Domain_9; ?></textarea>
                                                        <?php } ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gross : </td>
                                                        <td>
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here" id="sub_domain_10"
                                                            name="sub_domain_10" style="height: 80px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here" id="sub_domain_10"
                                                            name="sub_domain_10"
                                                            style="height: 80px"><?php echo $assesment_reportData[0]->Sub_Domain_10; ?></textarea>
                                                        <?php } ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fine : </td>
                                                        <td>
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here" id="sub_domain_11"
                                                            name="sub_domain_11" style="height: 80px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here" id="sub_domain_11"
                                                            name="sub_domain_11"
                                                            style="height: 80px"><?php echo $assesment_reportData[0]->Sub_Domain_11; ?></textarea>
                                                        <?php } ?>
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
                                    <h4>Table</h4>
                                </div>
                                <div class="card-body">
                                    
                                <div class="row mb-3">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" scope="col">Sub domain & Domain</th>
                                                    <th class="text-center" scope="col">Row Score</th>
                                                    <th class="text-center" scope="col">V-scale Score</th>
                                                    <th class="text-center" scope="col">Std score</th>
                                                    <th class="text-center" scope="col">Adaptive Level</th>
                                                    <th class="text-center" scope="col">Age</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbody">
                                                <tr>
                                                    <td class="text-center">Receptive : </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_1_1" name="table_1_1"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_1_1" name="table_1_1"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_1_1; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_1_2" name="table_1_2"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_1_2" name="table_1_2"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_1_2; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_1_3" name="table_1_3"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_1_3" name="table_1_3"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_1_3; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Expressive : </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_2_1" name="table_2_1"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_2_1" name="table_2_1"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_2_1; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_2_2" name="table_2_2"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_2_2" name="table_2_2"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_2_2; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_2_3" name="table_2_3"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_2_3" name="table_2_3"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_2_3; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr> 
                                                <tr>
                                                    <td class="text-center">Written : </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_3_1" name="table_3_1"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_3_1" name="table_3_1"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_3_1; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_3_2" name="table_3_2"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_3_2" name="table_3_2"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_3_2; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_3_3" name="table_3_3"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_3_3" name="table_3_3"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_3_3; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr> 
                                                <tr style="background: lightgray;">
                                                    <td class="text-center">Communication : </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_4_1" name="table_4_1"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_4_1" name="table_4_1"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_4_1; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td>Moderately Low</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Personal : </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_5_1" name="table_5_1"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_5_1" name="table_5_1"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_5_1; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_5_2" name="table_5_2"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_5_2" name="table_5_2"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_5_2; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_5_3" name="table_5_3"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_5_3" name="table_5_3"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_5_3; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Domestic : </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_6_1" name="table_6_1"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_6_1" name="table_6_1"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_6_1; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_6_2" name="table_6_2"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_6_2" name="table_6_2"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_6_2; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_6_3" name="table_6_3"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_6_3" name="table_6_3"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_6_3; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr> 
                                                <tr>
                                                    <td class="text-center">Community : </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_7_1" name="table_7_1"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_7_1" name="table_7_1"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_7_1; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_7_2" name="table_7_2"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_7_2" name="table_7_2"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_7_2; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_7_3" name="table_7_3"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_7_3" name="table_7_3"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_7_3; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr> 
                                                <tr style="background: lightgray;">
                                                    <td class="text-center">Daily Living Skills : </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_8_1" name="table_8_1"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_8_1" name="table_8_1"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_8_1; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td>Moderately Low</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Interpersonal : </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_9_1" name="table_9_1"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_9_1" name="table_9_1"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_9_1; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_9_2" name="table_9_2"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_9_2" name="table_9_2"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_9_2; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_9_3" name="table_9_3"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_9_3" name="table_9_3"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_9_3; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Play and leisure time : </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_10_1" name="table_10_1"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_10_1" name="table_10_1"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_10_1; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_10_2" name="table_10_2"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_10_2" name="table_10_2"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_10_2; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_10_3" name="table_10_3"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_10_3" name="table_10_3"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_10_3; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr> 
                                                <tr>
                                                    <td class="text-center">Coping Skills : </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_11_1" name="table_11_1"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_11_1" name="table_11_1"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_11_1; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_11_2" name="table_11_2"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_11_2" name="table_11_2"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_11_2; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_11_3" name="table_11_3"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_11_3" name="table_11_3"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_11_3; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr> 
                                                <tr style="background: lightgray;">
                                                    <td class="text-center">Socialization: </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_12_1" name="table_12_1"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_12_1" name="table_12_1"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_12_1; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td>Moderately Low</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Gross : </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_13_1" name="table_13_1"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_13_1" name="table_13_1"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_13_1; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_13_2" name="table_13_2"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_13_2" name="table_13_2"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_13_2; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_13_3" name="table_13_3"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_13_3" name="table_13_3"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_13_3; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr> 
                                                <tr>
                                                    <td class="text-center">Fine : </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_14_1" name="table_14_1"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_14_1" name="table_14_1"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_14_1; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_14_2" name="table_14_2"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_14_2" name="table_14_2"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_14_2; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_14_3" name="table_14_3"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_14_3" name="table_14_3"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_14_3; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr> 
                                                <tr style="background: lightgray;">
                                                    <td class="text-center">Motor Skills: </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_15_1" name="table_15_1"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="table_15_1" name="table_15_1"
                                                            placeholder="Type here"
                                                            value="<?php echo $assesment_reportData[0]->Table_15_1; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td>Adequate</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Observations on VABS</h4>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <h5>Communication</h5>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Able to understand meaning of ‘what & who’
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="observations_communication_1"
                                                    name="observations_communication_1" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="observations_communication_1"
                                                    name="observations_communication_1"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Observations_Communication_1; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> Able to understand meaning of ‘what & who’ :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="observations_communication_2"
                                                    name="observations_communication_2" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="observations_communication_2"
                                                    name="observations_communication_2"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Observations_Communication_2; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> Unable to understand ‘why’ :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="observations_communication_3"
                                                    name="observations_communication_3" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="observations_communication_3"
                                                    name="observations_communication_3"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Observations_Communication_3; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> Can’t copy her first name :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="observations_communication_4"
                                                    name="observations_communication_4" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="observations_communication_4"
                                                    name="observations_communication_4"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Observations_Communication_4; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>    
                                    <hr>
                                    <div>
                                        <h5>Daily Living Skills</h5>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Able to clean teeth 
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="observations_dailyliving_1"
                                                    name="observations_dailyliving_1" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="observations_dailyliving_1"
                                                    name="observations_dailyliving_1"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Observations_Dailyliving_1; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> Wipes or blows nose using tissue : </label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="observations_dailyliving_2"
                                                    name="observations_dailyliving_2" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="observations_dailyliving_2"
                                                    name="observations_dailyliving_2"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Observations_Dailyliving_2; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> Unable to button or unbutton (Coat) :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="observations_dailyliving_3"
                                                    name="observations_dailyliving_3" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="observations_dailyliving_3"
                                                    name="observations_dailyliving_3"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Observations_Dailyliving_3; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> Do not understand the function of money :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="observations_dailyliving_4"
                                                    name="observations_dailyliving_4" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="observations_dailyliving_4"
                                                    name="observations_dailyliving_4"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Observations_Dailyliving_4; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>    
                                    <hr>
                                    <div>
                                        <h5>Socialization</h5>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Able to understand relationship of family member
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="observations_socialization_1"
                                                    name="observations_socialization_1" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="observations_socialization_1"
                                                    name="observations_socialization_1"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Observations_Socialization_1; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> Shares toys or possessions without being asked : </label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="observations_socialization_2"
                                                    name="observations_socialization_2" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="observations_socialization_2"
                                                    name="observations_socialization_2"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Observations_Socialization_2; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> Can’t play simple cards or board game :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="observations_socialization_3"
                                                    name="observations_socialization_3" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="observations_socialization_3"
                                                    name="observations_socialization_3"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Observations_Socialization_3; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> Can’t say ‘Please’ or ‘Thank you’ verbally or nonverbally :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="observations_socialization_4"
                                                    name="observations_socialization_4" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="observations_socialization_4"
                                                    name="observations_socialization_4"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Observations_Socialization_4; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>    
                                    <hr>
                                    <div>
                                        <h5>Motor Skills</h5>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Catches ball of any size from a distance of 6 feet
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="observations_motorskill_1"
                                                    name="observations_motorskill_1" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="observations_motorskill_1"
                                                    name="observations_motorskill_1"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Observations_Motorskill_1; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> Use eraser without tearing the paper : </label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="observations_motorskill_2"
                                                    name="observations_motorskill_2" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="observations_motorskill_2"
                                                    name="observations_motorskill_2"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Observations_Motorskill_2; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> Unable to hop forward even 1 feet without holding :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="observations_motorskill_3"
                                                    name="observations_motorskill_3" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="observations_motorskill_3"
                                                    name="observations_motorskill_3"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Observations_Motorskill_3; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> Can’t draw square freehand while looking at sample :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="observations_motorskill_4"
                                                    name="observations_motorskill_4" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="observations_motorskill_4"
                                                    name="observations_motorskill_4"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Observations_Motorskill_4; ?></textarea>
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
                                    <h4>Recommendations: </h4>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <h5>Parental Counseling regarding</h5>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Handling the difficult behaviors of the child
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_1_1"
                                                    name="recommendations_1_1" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_1_1"
                                                    name="recommendations_1_1"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Recommendations_1_1; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> Need of ongoing therapy :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_1_2"
                                                    name="recommendations_1_2" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_1_2"
                                                    name="recommendations_1_2"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Recommendations_1_2; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> Inclusive education options :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_1_3"
                                                    name="recommendations_1_3" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_1_3"
                                                    name="recommendations_1_3"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Recommendations_1_3; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>    
                                    <hr>
                                    <div>
                                        <h5>Intensive training to improve speech & communication </h5>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Picture talk and picture expression activities 
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_2_1"
                                                    name="recommendations_2_1" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_2_1"
                                                    name="recommendations_2_1"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Recommendations_2_1; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> Listening comprehension exercises :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_2_2"
                                                    name="recommendations_2_2" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_2_2"
                                                    name="recommendations_2_2"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Recommendations_2_2; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> To improve structure of language with proper use of verb & pronouns :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_2_3"
                                                    name="recommendations_2_3" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_2_3"
                                                    name="recommendations_2_3"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Recommendations_2_3; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> Training for social communication with peers :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_2_4"
                                                    name="recommendations_2_4" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_2_4"
                                                    name="recommendations_2_4"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Recommendations_2_4; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>    
                                    <hr>
                                    <div>
                                        <h5>Social Skills intervention to improve</h5>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Social Skills intervention to improve
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_3_1"
                                                    name="recommendations_3_1" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_3_1"
                                                    name="recommendations_3_1"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Recommendations_3_1; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> Social Skills intervention to improve :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_3_2"
                                                    name="recommendations_3_2" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_3_2"
                                                    name="recommendations_3_2"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Recommendations_3_2; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Rule governance :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_3_3"
                                                    name="recommendations_3_3" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_3_3"
                                                    name="recommendations_3_3"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Recommendations_3_3; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> Rule governance :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_3_4"
                                                    name="recommendations_3_4" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_3_4"
                                                    name="recommendations_3_4"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Recommendations_3_4; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> Emotional and social reciprocity :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_3_5"
                                                    name="recommendations_3_5" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_3_5"
                                                    name="recommendations_3_5"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Recommendations_3_5; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>    
                                    <hr>
                                    <div>
                                        <h5>Cognitive skills intervention to improve </h5>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Attention and interest
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_4_1"
                                                    name="recommendations_4_1" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_4_1"
                                                    name="recommendations_4_1"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Recommendations_4_1; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> Speed of working :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_4_2"
                                                    name="recommendations_4_2" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_4_2"
                                                    name="recommendations_4_2"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Recommendations_4_2; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> Visual skills :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_4_3"
                                                    name="recommendations_4_3" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_4_3"
                                                    name="recommendations_4_3"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Recommendations_4_3; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>    
                                    <hr>
                                    <div>
                                        <h5>Occupational Therapy</h5>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Fine motor skills
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_5_1"
                                                    name="recommendations_5_1" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_5_1"
                                                    name="recommendations_5_1"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Recommendations_5_1; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Hand eye coordination :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_5_2"
                                                    name="recommendations_5_2" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_5_2"
                                                    name="recommendations_5_2"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Recommendations_5_2; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Writing skills :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_5_3"
                                                    name="recommendations_5_3" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_5_3"
                                                    name="recommendations_5_3"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Recommendations_5_3; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> Auditory and visual integration :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_5_4"
                                                    name="recommendations_5_4" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_5_4"
                                                    name="recommendations_5_4"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Recommendations_5_4; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> Attention building :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_5_5"
                                                    name="recommendations_5_5" style="height: 80px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendations_5_5"
                                                    name="recommendations_5_5"
                                                    style="height: 80px"><?php echo $assesment_reportData[0]->Recommendations_5_5; ?></textarea>
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
                                    <h4>Impression</h4>
                                </div>
                                <div class="card-body">
                                    <h5>Moderately Low level of Adaptive Behavior: </h5>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="impression"
                                                name="impression" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="impression"
                                                name="impression"
                                                style="height: 100px"><?php echo $assesment_reportData[0]->Impression; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                                  
                        
                        <?php if($action == 1){ ?>
                            <?php if($edit === true): ?>
                            <button type="submit" class="btn btn-primary float-right" name="edit_assesment_report"
                                id="edit_assesment_report">Submit</button>
                            <?php else: ?>
                            <button type="submit" class="btn btn-primary float-right" name="add_assesment_report"
                                id="add_assesment_report">Submit</button>
                            <?php endif; ?>
                        <?php } ?>    
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>