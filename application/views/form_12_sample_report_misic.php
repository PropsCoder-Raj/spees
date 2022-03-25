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
                                    <p>From a presented list parents identified concerns in the following areas:</p>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Academic :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="academic"
                                                name="academic" style="height: 80px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="academic"
                                                name="academic"
                                                style="height: 80px"><?php echo $sample_report_misicData[0]->Academic; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Below age school
                                            performance :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="below_age_school"
                                                name="below_age_school" style="height: 80px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="below_age_school"
                                                name="below_age_school"
                                                style="height: 80px"><?php echo $sample_report_misicData[0]->Below_Age_School; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Difficulty with math’s
                                            calculations :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="diff_math_cal"
                                                name="diff_math_cal" style="height: 80px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="diff_math_cal"
                                                name="diff_math_cal"
                                                style="height: 80px"><?php echo $sample_report_misicData[0]->Diff_Math_Cal; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Weak English and Hindi
                                            Vocabulary :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="weak_english_hindi" name="weak_english_hindi"
                                                style="height: 80px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="weak_english_hindi" name="weak_english_hindi"
                                                style="height: 80px"><?php echo $sample_report_misicData[0]->Weak_English_Hindi; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Poor writing skills
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="poor_write_skill"
                                                name="poor_write_skill" style="height: 80px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="poor_write_skill"
                                                name="poor_write_skill"
                                                style="height: 80px"><?php echo $sample_report_misicData[0]->Poor_Write_Skill; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Poor attention span
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="poor_attent_span"
                                                name="poor_attent_span" style="height: 80px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="poor_attent_span"
                                                name="poor_attent_span"
                                                style="height: 80px"><?php echo $sample_report_misicData[0]->Poor_Attent_Span; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Comprehension below
                                            age :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="comprehensio_below_age" name="comprehensio_below_age"
                                                style="height: 80px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="comprehensio_below_age" name="comprehensio_below_age"
                                                style="height: 80px"><?php echo $sample_report_misicData[0]->Comprehensio_Below_Age; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Behavior :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="behavior"
                                                name="behavior" style="height: 80px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="behavior"
                                                name="behavior"
                                                style="height: 80px"><?php echo $sample_report_misicData[0]->Behavior; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Medical History: </h5>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="medical_histroy"
                                                name="medical_histroy" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="medical_histroy"
                                                name="medical_histroy"
                                                style="height: 100px"><?php echo $sample_report_misicData[0]->Medical_Histroy; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Development History: </h5>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Head Control :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="head_control"
                                                name="head_control" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="head_control"
                                                name="head_control"
                                                style="height: 100px"><?php echo $sample_report_misicData[0]->Head_Control; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Neck holding
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="neck_holding"
                                                name="neck_holding" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="neck_holding"
                                                name="neck_holding"
                                                style="height: 100px"><?php echo $sample_report_misicData[0]->Neck_Holding; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Crawling
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="crawling"
                                                name="crawling" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="crawling"
                                                name="crawling"
                                                style="height: 100px"><?php echo $sample_report_misicData[0]->Crawling; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Walking
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="walking"
                                                name="walking" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="walking"
                                                name="walking"
                                                style="height: 100px"><?php echo $sample_report_misicData[0]->Walking; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Speech
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="speech_1"
                                                name="speech_1" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="speech_1"
                                                name="speech_1"
                                                style="height: 100px"><?php echo $sample_report_misicData[0]->Speech_1; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Educational Background: </h5>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Schooling started at
                                            the age :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="schooling_age"
                                                name="schooling_age" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="schooling_age"
                                                name="schooling_age"
                                                style="height: 100px"><?php echo $sample_report_misicData[0]->Schooling_Age; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Play group
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="play_group"
                                                name="play_group" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="play_group"
                                                name="play_group"
                                                style="height: 100px"><?php echo $sample_report_misicData[0]->Play_Group; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Sr, Kg to 3 rd
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="SRKG" name="SRKG"
                                                style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="SRKG" name="SRKG"
                                                style="height: 100px"><?php echo $sample_report_misicData[0]->SRKG; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Present Class
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="present_class"
                                                name="present_class" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="present_class"
                                                name="present_class"
                                                style="height: 100px"><?php echo $sample_report_misicData[0]->Present_Class; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Medium at school
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="medium_school"
                                                name="medium_school" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="medium_school"
                                                name="medium_school"
                                                style="height: 100px"><?php echo $sample_report_misicData[0]->Medium_School; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Testing observation: </h5>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Hearing :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="hearing"
                                                name="hearing" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="hearing"
                                                name="hearing"
                                                style="height: 100px"><?php echo $sample_report_misicData[0]->Hearing; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Speech
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="speech_2"
                                                name="speech_2" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="speech_2"
                                                name="speech_2"
                                                style="height: 100px"><?php echo $sample_report_misicData[0]->Speech_2; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Sitting span
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="sitting_span"
                                                name="sitting_span" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="sitting_span"
                                                name="sitting_span"
                                                style="height: 100px"><?php echo $sample_report_misicData[0]->Sitting_Span; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Assessment Done: </h5>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Malin’s Intelligence
                                            scale for Indian Children (MISIC) :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="assessment_done"
                                                name="assessment_done" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="assessment_done"
                                                name="assessment_done"
                                                style="height: 100px"><?php echo $sample_report_misicData[0]->Assessment_Done; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Malin’s Intelligence scale for Indian Children (MISIC)</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" scope="col">Verbal Scale</th>
                                                    <th class="text-center" scope="col">Row Score</th>
                                                    <th class="text-center" scope="col">IQ</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbody">
                                                <tr>
                                                    <td>Information: </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control" id="information_1"
                                                            name="information_1" placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control" id="information_1"
                                                            name="information_1" placeholder="Type here"
                                                            value="<?php echo $sample_report_misicData[0]->Information_1; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control" id="information_2"
                                                            name="information_2" placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control" id="information_2"
                                                            name="information_2" placeholder="Type here"
                                                            value="<?php echo $sample_report_misicData[0]->Information_2; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Comprehension: </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control" id="comprehension_1"
                                                            name="comprehension_1" placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control" id="comprehension_1"
                                                            name="comprehension_1" placeholder="Type here"
                                                            value="<?php echo $sample_report_misicData[0]->Comprehension_1; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control" id="comprehension_2"
                                                            name="comprehension_2" placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control" id="comprehension_2"
                                                            name="comprehension_2" placeholder="Type here"
                                                            value="<?php echo $sample_report_misicData[0]->Comprehension_2; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Arithmetic: </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control" id="arithmetic_1"
                                                            name="arithmetic_1" placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control" id="arithmetic_1"
                                                            name="arithmetic_1" placeholder="Type here"
                                                            value="<?php echo $sample_report_misicData[0]->Arithmetic_1; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control" id="arithmetic_2"
                                                            name="arithmetic_2" placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control" id="arithmetic_2"
                                                            name="arithmetic_2" placeholder="Type here"
                                                            value="<?php echo $sample_report_misicData[0]->Arithmetic_2; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Similarities: </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control" id="similarities_1"
                                                            name="similarities_1" placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control" id="similarities_1"
                                                            name="similarities_1" placeholder="Type here"
                                                            value="<?php echo $sample_report_misicData[0]->Similarities_1; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control" id="similarities_2"
                                                            name="similarities_2" placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control" id="similarities_2"
                                                            name="similarities_2" placeholder="Type here"
                                                            value="<?php echo $sample_report_misicData[0]->Similarities_2; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Digits Span: </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control" id="digits_span_1"
                                                            name="digits_span_1" placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control" id="digits_span_1"
                                                            name="digits_span_1" placeholder="Type here"
                                                            value="<?php echo $sample_report_misicData[0]->Digits_Span_1; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control" id="digits_span_2"
                                                            name="digits_span_2" placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control" id="digits_span_2"
                                                            name="digits_span_2" placeholder="Type here"
                                                            value="<?php echo $sample_report_misicData[0]->Digits_Span_2; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <hr>
                                    <div class="row mb-3">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" scope="col">Performance Scale</th>
                                                    <th class="text-center" scope="col">Row Score</th>
                                                    <th class="text-center" scope="col">IQ</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbody">
                                                <tr>
                                                    <td>Picture Completion : </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control"
                                                            id="picture_completion_1" name="picture_completion_1"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control"
                                                            id="picture_completion_1" name="picture_completion_1"
                                                            placeholder="Type here"
                                                            value="<?php echo $sample_report_misicData[0]->Picture_Completion_1; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control"
                                                            id="picture_completion_2" name="picture_completion_2"
                                                            placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control"
                                                            id="picture_completion_2" name="picture_completion_2"
                                                            placeholder="Type here"
                                                            value="<?php echo $sample_report_misicData[0]->Picture_Completion_2; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Block Design : </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control" id="block_design_1"
                                                            name="block_design_1" placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control" id="block_design_1"
                                                            name="block_design_1" placeholder="Type here"
                                                            value="<?php echo $sample_report_misicData[0]->Block_Design_1; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control" id="block_design_2"
                                                            name="block_design_2" placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control" id="block_design_2"
                                                            name="block_design_2" placeholder="Type here"
                                                            value="<?php echo $sample_report_misicData[0]->Block_Design_2; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Object Assembly : </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control" id="object_assembly_1"
                                                            name="object_assembly_1" placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control" id="object_assembly_1"
                                                            name="object_assembly_1" placeholder="Type here"
                                                            value="<?php echo $sample_report_misicData[0]->Object_Assembly_1; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control" id="object_assembly_2"
                                                            name="object_assembly_2" placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control" id="object_assembly_2"
                                                            name="object_assembly_2" placeholder="Type here"
                                                            value="<?php echo $sample_report_misicData[0]->Object_Assembly_2; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Coding: </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control" id="coding_1"
                                                            name="coding_1" placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control" id="coding_1"
                                                            name="coding_1" placeholder="Type here"
                                                            value="<?php echo $sample_report_misicData[0]->Coding_1; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control" id="coding_2"
                                                            name="coding_2" placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control" id="coding_2"
                                                            name="coding_2" placeholder="Type here"
                                                            value="<?php echo $sample_report_misicData[0]->Coding_2; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Mazes: </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control" id="mazes_1"
                                                            name="mazes_1" placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control" id="mazes_1"
                                                            name="mazes_1" placeholder="Type here"
                                                            value="<?php echo $sample_report_misicData[0]->Mazes_1; ?>">
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control" id="mazes_2"
                                                            name="mazes_2" placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control" id="mazes_2"
                                                            name="mazes_2" placeholder="Type here"
                                                            value="<?php echo $sample_report_misicData[0]->Mazes_2; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <hr>
                                    <div class="row mb-3">
                                        <table class="table table-bordered">
                                            <tbody id="tbody">
                                                <tr>
                                                    <td>Verbal Performance Index : </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control"
                                                            id="verbal_performance_index"
                                                            name="verbal_performance_index" placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control"
                                                            id="verbal_performance_index"
                                                            name="verbal_performance_index" placeholder="Type here"
                                                            value="<?php echo $sample_report_misicData[0]->Verbal_Performance_Index; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nonverbal Performance index : </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control"
                                                            id="nonverbal_performance_index"
                                                            name="nonverbal_performance_index" placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control"
                                                            id="nonverbal_performance_index"
                                                            name="nonverbal_performance_index" placeholder="Type here"
                                                            value="<?php echo $sample_report_misicData[0]->Nonverbal_Performance_Index; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Global IQ : </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control" id="global_iq"
                                                            name="global_iq" placeholder="Type here">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control" id="global_iq"
                                                            name="global_iq" placeholder="Type here"
                                                            value="<?php echo $sample_report_misicData[0]->Global_Iq; ?>">
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

                                    <div class="row mb-3">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" scope="col">Test scale</th>
                                                    <th class="text-center" scope="col">Interpretation</th>
                                                    <th class="text-center" scope="col">Performance</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbody">
                                                <tr style="background: lightgray;">
                                                    <td class="text-center">Verbal</td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center"></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Information </td>
                                                    <td class="text-center">Factual Knowledge, long term memory, recall
                                                    </td>
                                                    <td class="text-center">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="performance_info" name="performance_info"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="performance_info" name="performance_info"
                                                            style="height: 100px"><?php echo $sample_report_misicData[0]->Performance_Info; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Comprehension </td>
                                                    <td class="text-center">Social & practical judgment & common sense
                                                    </td>
                                                    <td class="text-center">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="performance_comp" name="performance_comp"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="performance_comp" name="performance_comp"
                                                            style="height: 100px"><?php echo $sample_report_misicData[0]->Performance_Comp; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Arithmetic </td>
                                                    <td class="text-center">Numerical reasoning, attention,
                                                        concentration</td>
                                                    <td class="text-center">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="performance_arith" name="performance_arith"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="performance_arith" name="performance_arith"
                                                            style="height: 100px"><?php echo $sample_report_misicData[0]->Performance_Arith; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Similarities </td>
                                                    <td class="text-center">Abstract reasoning, verbal categories &
                                                        concepts</td>
                                                    <td class="text-center">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="performance_simi" name="performance_simi"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="performance_simi" name="performance_simi"
                                                            style="height: 100px"><?php echo $sample_report_misicData[0]->Performance_Simi; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Digits Span </td>
                                                    <td class="text-center">Short term & auditory memory concentration
                                                    </td>
                                                    <td class="text-center">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="performance_digit" name="performance_digit"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="performance_digit" name="performance_digit"
                                                            style="height: 100px"><?php echo $sample_report_misicData[0]->Performance_Digit; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr style="background: lightgray;">
                                                    <td class="text-center">Performance</td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center"></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Picture Completion </td>
                                                    <td class="text-center">Alertness to detail, visual discrimination
                                                    </td>
                                                    <td class="text-center">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="performance_picture" name="performance_picture"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="performance_picture" name="performance_picture"
                                                            style="height: 100px"><?php echo $sample_report_misicData[0]->Performance_Picture; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Block Design </td>
                                                    <td class="text-center">Spatial analysis, abstract visual problem
                                                        solving</td>
                                                    <td class="text-center">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="performance_block" name="performance_block"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="performance_block" name="performance_block"
                                                            style="height: 100px"><?php echo $sample_report_misicData[0]->Performance_Block; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Object Assembly </td>
                                                    <td class="text-center">Visual analysis & construction of objects
                                                    </td>
                                                    <td class="text-center">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="performance_object" name="performance_object"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="performance_object" name="performance_object"
                                                            style="height: 100px"><?php echo $sample_report_misicData[0]->Performance_Object; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Coding </td>
                                                    <td class="text-center">Visual motor coordination , speed
                                                        concentration</td>
                                                    <td class="text-center">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="performance_coding" name="performance_coding"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="performance_coding" name="performance_coding"
                                                            style="height: 100px"><?php echo $sample_report_misicData[0]->Performance_Coding; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Mazes </td>
                                                    <td class="text-center">Fine motor coordination</td>
                                                    <td class="text-center">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="performance_mazes" name="performance_mazes"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="performance_mazes" name="performance_mazes"
                                                            style="height: 100px"><?php echo $sample_report_misicData[0]->Performance_Mazes; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Interpretation : </h5>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">was brought for
                                            evaluation by his parents due to his difficulties in developmental &
                                            academic coping :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="interpretation_1"
                                                name="interpretation_1" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="interpretation_1"
                                                name="interpretation_1"
                                                style="height: 100px"><?php echo $sample_report_misicData[0]->Interpretation_1; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Evaluation of his
                                            ability
                                            on IQ testing indicates that he has Borderline Intelligence :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="interpretation_2"
                                                name="interpretation_2" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="interpretation_2"
                                                name="interpretation_2"
                                                style="height: 100px"><?php echo $sample_report_misicData[0]->Interpretation_2; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">His academic
                                            difficulties
                                            are thus obvious due to his borderline IQ :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="interpretation_3"
                                                name="interpretation_3" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="interpretation_3"
                                                name="interpretation_3"
                                                style="height: 100px"><?php echo $sample_report_misicData[0]->Interpretation_3; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">He needs Intensive
                                            Cognitive skills development & Remedial education help to cope up his
                                            academic
                                            difficulties :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="interpretation_4"
                                                name="interpretation_4" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="interpretation_4"
                                                name="interpretation_4"
                                                style="height: 100px"><?php echo $sample_report_misicData[0]->Interpretation_4; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">His progress needs to
                                            be
                                            monitored periodically :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="interpretation_5"
                                                name="interpretation_5" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="interpretation_5"
                                                name="interpretation_5"
                                                style="height: 100px"><?php echo $sample_report_misicData[0]->Interpretation_5; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Conclusion : </h5>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Verbal Index IQ
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="verbal_index"
                                                name="verbal_index" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="verbal_index"
                                                name="verbal_index"
                                                style="height: 100px"><?php echo $sample_report_misicData[0]->Verbal_Index; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Performance Index IQ
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="performance_index" name="performance_index"
                                                style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="performance_index" name="performance_index"
                                                style="height: 100px"><?php echo $sample_report_misicData[0]->Performance_Index; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Global Index IQ
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="global_index"
                                                name="global_index" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="global_index"
                                                name="global_index"
                                                style="height: 100px"><?php echo $sample_report_misicData[0]->Global_Index; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Recommendation : </h5>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <h5>1) Family counseling and Guidance:</h5>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Role of need based scientific academic intervention
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_1_1"
                                                    name="recommendation_1_1" style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_1_1"
                                                    name="recommendation_1_1"
                                                    style="height: 100px"><?php echo $sample_report_misicData[0]->Recommendation_1_1; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Encourage sports & physical activities and Brain Gym activities to improve motor coordination and concentration
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="recommendation_1_2" name="recommendation_1_2"
                                                    style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="recommendation_1_2" name="recommendation_1_2"
                                                    style="height: 100px"><?php echo $sample_report_misicData[0]->Recommendation_1_2; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">To encourage and support extracurricular interests and hobbies
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_1_3"
                                                    name="recommendation_1_3" style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_1_3"
                                                    name="recommendation_1_3"
                                                    style="height: 100px"><?php echo $sample_report_misicData[0]->Recommendation_1_3; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Encouragement of communication and soft skills
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_1_4"
                                                    name="recommendation_1_4" style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_1_4"
                                                    name="recommendation_1_4"
                                                    style="height: 100px"><?php echo $sample_report_misicData[0]->Recommendation_1_4; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Use of positive discipline strategies will be beneficial in the home environment
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_1_5"
                                                    name="recommendation_1_5" style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_1_5"
                                                    name="recommendation_1_5"
                                                    style="height: 100px"><?php echo $sample_report_misicData[0]->Recommendation_1_5; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Importance of regular and frequent review of information that must be remembered
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_1_6"
                                                    name="recommendation_1_6" style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_1_6"
                                                    name="recommendation_1_6"
                                                    style="height: 100px"><?php echo $sample_report_misicData[0]->Recommendation_1_6; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Supporting efforts in completing homework while avoiding an overemphasis on high grades
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_1_7"
                                                    name="recommendation_1_7" style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_1_7"
                                                    name="recommendation_1_7"
                                                    style="height: 100px"><?php echo $sample_report_misicData[0]->Recommendation_1_7; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>    
                                    <div>
                                        <h5>2) Evaluation of the academic achievement and study skills:</h5>
                                        <div class="row mb-3">
                                            <div class="col-sm-12">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_2_1"
                                                    name="recommendation_2_1" style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_2_1"
                                                    name="recommendation_2_1"
                                                    style="height: 100px"><?php echo $sample_report_misicData[0]->Recommendation_2_1; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>    
                                    <div>
                                        <h5>3) Remedial Education Program with focus on his areas of difficulty:</h5>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Cognitive skills – attention, speed of working, working memory
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_3_1"
                                                    name="recommendation_3_1" style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_3_1"
                                                    name="recommendation_3_1"
                                                    style="height: 100px"><?php echo $sample_report_misicData[0]->Recommendation_3_1; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Help with reading and writing skills
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="recommendation_3_2" name="recommendation_3_2"
                                                    style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="recommendation_3_2" name="recommendation_3_2"
                                                    style="height: 100px"><?php echo $sample_report_misicData[0]->Recommendation_3_2; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Fine motor skills and coordination
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_3_3"
                                                    name="recommendation_3_3" style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_3_3"
                                                    name="recommendation_3_3"
                                                    style="height: 100px"><?php echo $sample_report_misicData[0]->Recommendation_3_3; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Self study skills
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_3_4"
                                                    name="recommendation_3_4" style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_3_4"
                                                    name="recommendation_3_4"
                                                    style="height: 100px"><?php echo $sample_report_misicData[0]->Recommendation_3_4; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Improving simultaneous and sequential processing skills
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_3_5"
                                                    name="recommendation_3_5" style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_3_5"
                                                    name="recommendation_3_5"
                                                    style="height: 100px"><?php echo $sample_report_misicData[0]->Recommendation_3_5; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>    
                                    <div>
                                        <h5>4) While studying at home or school::</h5>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Prefer seating close to the teacher and blackboard
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_4_1"
                                                    name="recommendation_4_1" style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_4_1"
                                                    name="recommendation_4_1"
                                                    style="height: 100px"><?php echo $sample_report_misicData[0]->Recommendation_4_1; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Allow copying from the neighbor study buddy
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="recommendation_4_2" name="recommendation_4_2"
                                                    style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="recommendation_4_2" name="recommendation_4_2"
                                                    style="height: 100px"><?php echo $sample_report_misicData[0]->Recommendation_4_2; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Always combine auditory input with visual input while studying
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_4_3"
                                                    name="recommendation_4_3" style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_4_3"
                                                    name="recommendation_4_3"
                                                    style="height: 100px"><?php echo $sample_report_misicData[0]->Recommendation_4_3; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Adequate practice of written expression to improve quality
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_4_4"
                                                    name="recommendation_4_4" style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_4_4"
                                                    name="recommendation_4_4"
                                                    style="height: 100px"><?php echo $sample_report_misicData[0]->Recommendation_4_4; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Self-revision of read topics in a systematic manne
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_4_5"
                                                    name="recommendation_4_5" style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_4_5"
                                                    name="recommendation_4_5"
                                                    style="height: 100px"><?php echo $sample_report_misicData[0]->Recommendation_4_5; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Need to understand the importance of accuracy and neatness of expression
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_4_6"
                                                    name="recommendation_4_6" style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_4_6"
                                                    name="recommendation_4_6"
                                                    style="height: 100px"><?php echo $sample_report_misicData[0]->Recommendation_4_6; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>    
                                    <div>
                                        <h5>5) Behavior modification program with focus on:</h5>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Interest for academic tasks
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_5_1"
                                                    name="recommendation_5_1" style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_5_1"
                                                    name="recommendation_5_1"
                                                    style="height: 100px"><?php echo $sample_report_misicData[0]->Recommendation_5_1; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Oppositional behavior, Rule breaking behaviors
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="recommendation_5_2" name="recommendation_5_2"
                                                    style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="recommendation_5_2" name="recommendation_5_2"
                                                    style="height: 100px"><?php echo $sample_report_misicData[0]->Recommendation_5_2; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Motivation building
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_5_3"
                                                    name="recommendation_5_3" style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_5_3"
                                                    name="recommendation_5_3"
                                                    style="height: 100px"><?php echo $sample_report_misicData[0]->Recommendation_5_3; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">To build discipline and cooperation
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_5_4"
                                                    name="recommendation_5_4" style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_5_4"
                                                    name="recommendation_5_4"
                                                    style="height: 100px"><?php echo $sample_report_misicData[0]->Recommendation_5_4; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>  
                                    <div>
                                        <h5>6) EQ & Life skills Training:</h5>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">To improve eye contact, assertive behaviors
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_6_1"
                                                    name="recommendation_6_1" style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_6_1"
                                                    name="recommendation_6_1"
                                                    style="height: 100px"><?php echo $sample_report_misicData[0]->Recommendation_6_1; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Critical thinking and decision making
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="recommendation_6_2" name="recommendation_6_2"
                                                    style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here"
                                                    id="recommendation_6_2" name="recommendation_6_2"
                                                    style="height: 100px"><?php echo $sample_report_misicData[0]->Recommendation_6_2; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Social Aptitude and peer relations
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_6_3"
                                                    name="recommendation_6_3" style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_6_3"
                                                    name="recommendation_6_3"
                                                    style="height: 100px"><?php echo $sample_report_misicData[0]->Recommendation_6_3; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Leadership qualities
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_6_4"
                                                    name="recommendation_6_4" style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_6_4"
                                                    name="recommendation_6_4"
                                                    style="height: 100px"><?php echo $sample_report_misicData[0]->Recommendation_6_4; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Motivation building
                                                :</label>
                                            <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_6_5"
                                                    name="recommendation_6_5" style="height: 100px"></textarea>
                                                <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Type Here" id="recommendation_6_5"
                                                    name="recommendation_6_5"
                                                    style="height: 100px"><?php echo $sample_report_misicData[0]->Recommendation_6_5; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>      
                                </div>
                            </div>
                        </div>

                        
                        <?php if($action == 1){ ?>
                            <?php if($edit === true): ?>
                            <button type="submit" class="btn btn-primary float-right" name="edit_sample_report_misic"
                                id="edit_sample_report_misic">Submit</button>
                            <?php else: ?>
                            <button type="submit" class="btn btn-primary float-right" name="add_sample_report_misic"
                                id="add_sample_report_misic">Submit</button>
                            <?php endif; ?>
                        <?php } ?>    
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>