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
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Address :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="address" name="address"
                                                placeholder="Enter Address"
                                                value="<?php echo $patientData->Address; ?>">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="address" name="address"
                                                placeholder="Enter Address"
                                                value="<?php echo $formRecordsData[0]->Address; ?>">
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
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Convcern :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Enter Convcern" id="convcern"
                                                name="convcern" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Enter Convcern" id="convcern"
                                                name="convcern"
                                                style="height: 100px"><?php echo $caseHistoryData[0]->Convcern; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Birth History :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Enter Birth History"
                                                id="birth_history" name="birth_history"
                                                style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Enter Birth History"
                                                id="birth_history" name="birth_history"
                                                style="height: 100px"><?php echo $caseHistoryData[0]->Birth_History; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Development History</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Neck Holding :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="neck_holding" name="neck_holding"
                                                placeholder="Enter Neck Holding"
                                                value="">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="neck_holding" name="neck_holding"
                                                placeholder="Enter Neck Holding"
                                                value="<?php echo $caseHistoryData[0]->Neck_Holding; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Crawling :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="crawling" name="crawling"
                                                placeholder="Enter Crawling"
                                                value="">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="crawling" name="crawling"
                                                placeholder="Enter Crawling"
                                                value="<?php echo $caseHistoryData[0]->Crawling; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Walking :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="walking" name="walking"
                                                placeholder="Enter Walking"
                                                value="">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="walking" name="walking"
                                                placeholder="Enter Walking"
                                                value="<?php echo $caseHistoryData[0]->Walking; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Speech :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="speech" name="speech"
                                                placeholder="Enter Speech"
                                                value="">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="speech" name="speech"
                                                placeholder="Enter Speech"
                                                value="<?php echo $caseHistoryData[0]->Speech; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Sentence :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="sentence" name="sentence"
                                                placeholder="Enter Sentence"
                                                value="">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="sentence" name="sentence"
                                                placeholder="Enter Sentence"
                                                value="<?php echo $caseHistoryData[0]->Sentence; ?>">
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
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Past History :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Enter Past History" id="past_history"
                                                name="past_history" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Enter Past History" id="past_history"
                                                name="past_history"
                                                style="height: 100px"><?php echo $caseHistoryData[0]->Past_History; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">School History :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Enter School History"
                                                id="school_history" name="school_history"
                                                style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Enter School History"
                                                id="school_history" name="school_history"
                                                style="height: 100px"><?php echo $caseHistoryData[0]->School_History; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Present Class :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="present_class" name="present_class"
                                                placeholder="Enter Present Class"
                                                value="">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="present_class" name="present_class"
                                                placeholder="Enter Present Class"
                                                value="<?php echo $caseHistoryData[0]->Present_Class; ?>">
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
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Observations :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Enter Observations" id="observations"
                                                name="observations" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Enter Observations" id="observations"
                                                name="observations"
                                                style="height: 100px"><?php echo $caseHistoryData[0]->Observations; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Plan :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Enter Plan"
                                                id="plan" name="plan"
                                                style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Enter Plan"
                                                id="plan" name="plan"
                                                style="height: 100px"><?php echo $caseHistoryData[0]->Plan; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Recommendation :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Enter Recommendation"
                                                id="recommendation" name="recommendation"
                                                style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Enter Recommendation"
                                                id="recommendation" name="recommendation"
                                                style="height: 100px"><?php echo $caseHistoryData[0]->Recommendation; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php if($action == 1){ ?>
                            <?php if($edit === true): ?>
                            <button type="submit" class="btn btn-primary float-right" name="edit_case_history"
                                id="edit_case_history">Submit</button>
                            <?php else: ?>
                            <button type="submit" class="btn btn-primary float-right" name="add_case_history"
                                id="add_case_history">Submit</button>
                            <?php endif; ?>
                        <?php } ?>    
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>