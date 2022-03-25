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
                                                    <input type="text" class="form-control" id="patientName" name="patientName" placeholder="Enter Patient Name" value="<?php echo $patientData->Name; ?>">
                                                <?php }else{ ?>
                                                    <input type="text" class="form-control" id="patientName" name="patientName" placeholder="Enter Patient Name" value="<?php echo $formRecordsData[0]->PatientName; ?>">
                                                <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Patient ID :</label>
                                        <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control" id="patientId" name="patientId" placeholder="Enter Patient Id" value="<?php echo $patientData->Id; ?>">
                                                <?php }else{ ?>
                                                    <input type="text" class="form-control" id="patientId" name="patientId" placeholder="Enter Patient Id" value="<?php echo $formRecordsData[0]->PatientId; ?>">
                                                <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Age :</label>
                                        <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                    <input type="number" class="form-control" id="age" name="age" placeholder="Enter Age" value="<?php echo $patientData->Age; ?>">
                                                <?php }else{ ?>
                                                    <input type="number" class="form-control" id="age" name="age" placeholder="Enter Age" value="<?php echo $formRecordsData[0]->Age; ?>">
                                                <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Gender :</label>
                                        <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                    <select class="form-select form-control" name="gender" aria-label="Default select example" value="<?php echo $patientData->Gender;?>">
                                                        <option disabled>Select</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                <?php }else{ ?>
                                                    <select class="form-select form-control" name="gender" aria-label="Default select example">
                                                        <option disabled>Select</option>
                                                        <option value="Male" <?php echo $formRecordsData[0]->Gender == 'Male' ? ' selected="selected"' : '';?>>Male</option>
                                                        <option value="Female" <?php echo $formRecordsData[0]->Gender == 'Female' ? ' selected="selected"' : '';?>>Female</option>
                                                        <option value="Other" <?php echo $formRecordsData[0]->Gender == 'Other' ? ' selected="selected"' : '';?>>Other</option>
                                                    </select>
                                                <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Clinician :</label>
                                        <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control" id="clinician" name="clinician" placeholder="Enter Clinician Name" value="">
                                                    <?php }else{ ?>
                                                        <input type="text" class="form-control" id="clinician" name="clinician" placeholder="Enter Clinician Name" value="<?php echo $formRecordsData[0]->Clinician; ?>">
                                                <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Provisional Diagnosis :
                                        </label>
                                        <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control" id="provisional_diagnosis" name="provisional_diagnosis" placeholder="Enter Provisional Diagnosis">
                                                <?php }else{ ?>
                                                    <input type="text" class="form-control" id="provisional_diagnosis" name="provisional_diagnosis" placeholder="Enter Provisional Diagnosis"  value="<?php echo $formRecordsData[0]->ProvisionalDiagnosis; ?>">
                                                <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">No.of sessions/week
                                            :</label>
                                        <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                    <input type="number" class="form-control" id="no_of_session_weeks" name="no_of_session_weeks" placeholder="Enter No.of sessions/week">
                                                <?php }else{ ?>
                                                    <input type="number" class="form-control" id="no_of_session_weeks" name="no_of_session_weeks" placeholder="Enter No.of sessions/week" value="<?php echo $formRecordsData[0]->NumberOfWeeksSession; ?>">
                                                <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Date :</label>
                                        <div class="col-sm-10">
                                                <?php if($edit === false){ ?>
                                                    <input type="date" class="form-control" id="date" name="date" placeholder="Enter Date">
                                                <?php }else{ ?>
                                                    <input type="date" class="form-control" id="date" name="date" placeholder="Enter Date" value="<?php echo $formRecordsData[0]->Date; ?>">
                                                <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card" style="width: 100%;">
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Goal Selected</th>
                                                <th scope="col">Baseline</th>
                                                <th scope="col">Activity</th>
                                                <th scope="col">Reinforcement</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody">
                                            <tr>
                                            <?php $i = 0; foreach($speechLessonPlanData as $item): ?>
                                                <tr>
                                                    <td><input type="text" class="form-control" id="goal_update_<?php echo $i; ?>" name="goal[]" placeholder="Enter Goal" value="<?php echo $item->Goal; ?>"></td>
                                                    <td><input type="text" class="form-control" id="baseLine_update_<?php echo $i; ?>" name="baseLine[]" placeholder="Enter Baseline" value="<?php echo $item->BaseLine;?>"><input type="text" style="display: none;" name="formId[]" value="<?php echo $item->Id; ?>"></td>
                                                    <td><input type="text" class="form-control" id="activity_update_<?php echo $i; ?>" name="activity[]" placeholder="Enter Activity" value="<?php echo $item->Activity; ?>"></td>
                                                    <td><input type="text" class="form-control" id="reinforcement_update_<?php echo $i; ?>" name="reinforcement[]" placeholder="Enter Reinforcement" value="<?php echo $item->Reinforcement; ?>"></td>
                                                    <td></td>
                                                </tr>
                                            <?php $i++; endforeach; ?> 
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                    <?php if($action == 1){ ?>
                                        <div>
                                            <button type='button' class="btn btn-primary float-right"
                                                onclick="addItem();"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" class="bi bi-plus-circle-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                </svg>
                                            </button>
                                        </div>
                                    <?php } ?>    
                                </div>
                            </div>
                        </div>
                        
                        <?php if($action == 1){ ?>
                            <?php if($edit === true): ?>
                            <button type="submit" class="btn btn-primary float-right" name="edit_speech_lesson_plan"
                                id="edit_speech_lesson_plan">Submit</button>
                            <?php else: ?>
                            <button type="submit" class="btn btn-primary float-right" name="add_speech_lesson_plan"
                                id="add_speech_lesson_plan">Submit</button>
                            <?php endif; ?>
                        <?php } ?>    
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>



<script>

var items = 0;

function addItem() {
    items++;

    var html = `
        <tr>
            <td><input type="text" class="form-control" id="goal` + items + `" name="goal[]" placeholder="Enter Goal Selected"></td>
            <td><input type="text" class="form-control" id="baseLine` + items + `" name="baseLine[]" placeholder="Enter Baseline"><input type="text" style="display: none;" name="formId[]" value="empId`+ items + `"></td>
            <td><input type="text" class="form-control" id="activity` + items + `" name="activity[]" placeholder="Enter Acitivity"></td>
            <td><input type="text" class="form-control" id="reinforcement` + items + `" name="reinforcement[]" placeholder="Enter Reinforcement"></td>
            <td><button type='button' class="btn btn-danger" onclick='deleteRow(this);'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
                  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
                    </svg></button></td>
        </tr>`

    var row = document.getElementById("tbody").insertRow();
    row.innerHTML = html;
}

function deleteRow(button) {
    items--;
    button.parentElement.parentElement.remove();
}
</script>