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
                                <div class="card-header">
                                    <h4>Language History</h4>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center" scope="col">Baseline</th>
                                                <th class="text-center" scope="col" colspan="4">Premorbid</th>
                                                <th class="text-center" scope="col" colspan="4">Postmorbid</th>
                                            </tr>
                                            <tr>
                                                <th class="text-center" scope="col">Language known</th>
                                                <th class="text-center" scope="col">comprehend</th>
                                                <th class="text-center" scope="col">speak</th>
                                                <th class="text-center" scope="col">Read</th>
                                                <th class="text-center" scope="col">write</th>
                                                <th class="text-center" scope="col">comprehend</th>
                                                <th class="text-center" scope="col">speak</th>
                                                <th class="text-center" scope="col">speak</th>
                                                <th class="text-center" scope="col">write</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody">
                                            <?php if($edit){ ?>
                                            <?php foreach($languageHistoryData as $item): ?>
                                            <tr>
                                                <td><input type="text" class="form-control" value="<?php echo $item->Language_Known; ?>" id="language_known` + items + `" name="language_known[]" placeholder="Enter Language known">
                                                <input type="text" style="display: none;" name="formId[]" value="<?php echo $item->Id; ?>"></td>
                                                <td><input type="text" class="form-control" value="<?php echo $item->Pre_Comprehend; ?>" id="pre_comprehend` + items + `" name="pre_comprehend[]" placeholder="Enter comprehend"></td>
                                                <td><input type="text" class="form-control" value="<?php echo $item->Pre_Speak; ?>" id="pre_speak` + items + `" name="pre_speak[]" placeholder="Enter speak"></td>
                                                <td><input type="text" class="form-control" value="<?php echo $item->Pre_Read	; ?>" id="pre_read` + items + `" name="pre_read[]" placeholder="Enter read"></td>
                                                <td><input type="text" class="form-control" value="<?php echo $item->Pre_Write; ?>" id="pre_write` + items + `" name="pre_write[]" placeholder="Enter write"></td>
                                                <td><input type="text" class="form-control" value="<?php echo $item->Post_Comprehend; ?>" id="post_comprehend` + items + `" name="post_comprehend[]" placeholder="Enter comprehend"></td>
                                                <td><input type="text" class="form-control" value="<?php echo $item->Post_Speak; ?>" id="post_speak` + items + `" name="post_speak[]" placeholder="Enter speak"></td>
                                                <td><input type="text" class="form-control" value="<?php echo $item->Post_Read; ?>" id="post_read` + items + `" name="post_read[]" placeholder="Enter read"></td>
                                                <td><input type="text" class="form-control" value="<?php echo $item->Post_Write; ?>" id="post_write` + items + `" name="post_write[]" placeholder="Enter write"></td>
                                            </tr>
                                            <?php endforeach; ?>
                                            <?php } ?>
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

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Language commonly used
                                            at home and out side :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                                <input type="text" class="form-control" id="language_commonly_use"
                                                    name="language_commonly_use"
                                                    placeholder="Enter Language commonly used at home and out side"
                                                    value="">
                                            <?php }else{ ?>
                                                <input type="text" class="form-control" id="language_commonly_use"
                                                    name="language_commonly_use"
                                                    placeholder="Enter Language commonly used at home and out side"
                                                    value="<?php echo $aoData[0]->Language_Commonly_Use; ?>">
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
                                                    placeholder="Enter Occupation" value="<?php echo $aoData[0]->Occupation; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Motor/Physical status
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                                <input type="text" class="form-control" id="motor_physical_status"
                                                name="motor_physical_status" placeholder="Enter Motor/Physical status"
                                                value="">
                                            <?php }else{ ?>
                                                <input type="text" class="form-control" id="motor_physical_status"
                                                name="motor_physical_status" placeholder="Enter Motor/Physical status"
                                                value="<?php echo $aoData[0]->Motor_Shysical_Status; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Gait :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                                <input type="text" class="form-control" id="gait" name="gait"
                                                placeholder="Enter Gait" value="">
                                            <?php }else{ ?>
                                                <input type="text" class="form-control" id="gait" name="gait"
                                                placeholder="Enter Gait" value="<?php echo $aoData[0]->Gait; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Hobbies & intrests</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Premorbid :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                                <textarea class="form-control"
                                                placeholder="Enter Premorbid Hobbies & intrests" id="premorbidHooby"
                                                name="premorbidHooby" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                                <textarea class="form-control"
                                                placeholder="Enter Premorbid Hobbies & intrests" id="premorbidHooby"
                                                name="premorbidHooby" style="height: 100px"><?php echo $aoData[0]->Premorbid_Hobbies_Intrests; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Postmorbid :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                                <textarea class="form-control"
                                                placeholder="Enter Postmorbid Hobbies & intrests" id="postmorbidHobby"
                                                name="postmorbidHobby" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                                <textarea class="form-control"
                                                placeholder="Enter Postmorbid Hobbies & intrests" id="postmorbidHobby"
                                                name="postmorbidHobby" style="height: 100px"><?php echo $aoData[0]->Postmorbid_Hobbies_Intrests; ?></textarea>
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
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Communication Behaviour
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Enter Communication Behaviour"
                                                id="communication_behaviour" name="communication_behaviour"
                                                style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Enter Communication Behaviour"
                                                id="communication_behaviour" name="communication_behaviour"
                                                style="height: 100px"><?php echo $aoData[0]->Communication_Behaviour; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Changes in speech
                                            mechanism :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                                <textarea class="form-control"
                                                placeholder="Enter Changes in speech mechanism"
                                                id="changes_in_speech_mechanism" name="changes_in_speech_mechanism"
                                                style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                                
                                                <textarea class="form-control"
                                                placeholder="Enter Changes in speech mechanism"
                                                id="changes_in_speech_mechanism" name="changes_in_speech_mechanism"
                                                style="height: 100px"><?php echo $aoData[0]->Changes_In_Speech_Mechanism; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Associated problem
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                                <textarea class="form-control" placeholder="Enter Associated problem"
                                                id="associated_problem" name="associated_problem"
                                                style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                                <textarea class="form-control" placeholder="Enter Associated problem"
                                                id="associated_problem" name="associated_problem"
                                                style="height: 100px"><?php echo $aoData[0]->Associated_Problem; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="card" style="width: 100%;">
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Provisional Diagnosis :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="provisionalDiagnosis"
                                                name="provisionalDiagnosis" placeholder="Enter Provisional Diagnosis">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="provisionalDiagnosis"
                                                name="provisionalDiagnosis" placeholder="Enter Provisional Diagnosis"
                                                value="<?php echo $formRecordsData[0]->ProvisionalDiagnosis; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if($action == 1){ ?>
                            <?php if($edit === true): ?>
                            <button type="submit" class="btn btn-primary float-right" name="edit_aphasia_other_neuro_disorder_poforma"
                                id="edit_aphasia_other_neuro_disorder_poforma">Submit</button>
                            <?php else: ?>
                            <button type="submit" class="btn btn-primary float-right" name="add_aphasia_other_neuro_disorder_poforma"
                                id="add_aphasia_other_neuro_disorder_poforma">Submit</button>
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
            <td><input type="text" class="form-control" id="language_known` + items +
        `" name="language_known[]" placeholder="Enter Language known"><input type="text" style="display: none;" name="formId[]" value="empId` +
        items + `"></td>
            <td><input type="text" class="form-control" id="pre_comprehend` + items +
        `" name="pre_comprehend[]" placeholder="Enter comprehend"></td>
            <td><input type="text" class="form-control" id="pre_speak` + items +
        `" name="pre_speak[]" placeholder="Enter speak"></td>
            <td><input type="text" class="form-control" id="pre_read` + items +
        `" name="pre_read[]" placeholder="Enter read"></td>
            <td><input type="text" class="form-control" id="pre_write` + items +
        `" name="pre_write[]" placeholder="Enter write"></td>
            <td><input type="text" class="form-control" id="post_comprehend` + items +
        `" name="post_comprehend[]" placeholder="Enter comprehend"></td>
            <td><input type="text" class="form-control" id="post_speak` + items +
        `" name="post_speak[]" placeholder="Enter speak"></td>
            <td><input type="text" class="form-control" id="post_read` + items +
        `" name="post_read[]" placeholder="Enter read"></td>
            <td><input type="text" class="form-control" id="post_write` + items +
        `" name="post_write[]" placeholder="Enter write"></td>

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