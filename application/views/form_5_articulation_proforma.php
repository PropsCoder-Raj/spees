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
                                    <div class="row mb-3 form-group">
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
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Articulatory errors
                                            associated with structural deficits:</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control"
                                                placeholder="Enter Articulatory errors associated with structural deficits"
                                                id="articulatory_errors_associated_with_structural_deficits"
                                                name="articulatory_errors_associated_with_structural_deficits"
                                                style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control"
                                                placeholder="Enter Articulatory errors associated with structural deficits"
                                                id="articulatory_errors_associated_with_structural_deficits"
                                                name="articulatory_errors_associated_with_structural_deficits"
                                                style="height: 100px"><?php echo $articulation_proformaData[0]->Articulatory_errors_associated_with_structural_deficits; ?>
                                                </textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center" scope="col"></th>
                                                <th class="text-center" scope="col">Self</th>
                                                <th class="text-center" scope="col">Parents</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody">
                                            <tr>
                                                <td>Awareness about the problem: </td>
                                                <td>
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control"
                                                        id="self_awareness_about_the_problem"
                                                        name="self_awareness_about_the_problem"
                                                        placeholder="Enter Problem" value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control"
                                                        id="self_awareness_about_the_problem"
                                                        name="self_awareness_about_the_problem"
                                                        placeholder="Enter Problem"
                                                        value="<?php echo $articulation_proformaData[0]->Self_Awareness_about_the_problem; ?>">
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control"
                                                        id="parent_awareness_about_the_problem"
                                                        name="parent_awareness_about_the_problem"
                                                        placeholder="Enter Problem" value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control"
                                                        id="parent_awareness_about_the_problem"
                                                        name="parent_awareness_about_the_problem"
                                                        placeholder="Enter Problem"
                                                        value="<?php echo $articulation_proformaData[0]->Parent_Awareness_about_the_problem; ?>">
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Reaction to the problem: </td>
                                                <td>
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control"
                                                        id="self_reaction_to_the_problem"
                                                        name="self_reaction_to_the_problem" placeholder="Enter Problem"
                                                        value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control"
                                                        id="self_reaction_to_the_problem"
                                                        name="self_reaction_to_the_problem" placeholder="Enter Problem"
                                                        value="<?php echo $articulation_proformaData[0]->Self_Reaction_to_the_problem; ?>">
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control"
                                                        id="parent_reaction_to_the_problem"
                                                        name="parent_reaction_to_the_problem"
                                                        placeholder="Enter Problem" value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control"
                                                        id="parent_reaction_to_the_problem"
                                                        name="parent_reaction_to_the_problem"
                                                        placeholder="Enter Problem"
                                                        value="<?php echo $articulation_proformaData[0]->Parent_Reaction_to_the_problem; ?>">
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Avoidance behaviour: </td>
                                                <td>
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control"
                                                        id="self_avoidance_behaviour" name="self_avoidance_behaviour"
                                                        placeholder="Enter Behaviour" value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control"
                                                        id="self_avoidance_behaviour" name="self_avoidance_behaviour"
                                                        placeholder="Enter Behaviour"
                                                        value="<?php echo $articulation_proformaData[0]->Self_Avoidance_Behaviour; ?>">
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control"
                                                        id="parent_avoidance_behaviour"
                                                        name="parent_avoidance_behaviour" placeholder="Enter Behaviour"
                                                        value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control"
                                                        id="parent_avoidance_behaviour"
                                                        name="parent_avoidance_behaviour" placeholder="Enter Behaviour"
                                                        value="<?php echo $articulation_proformaData[0]->Parent_Avoidance_Behaviour; ?>">
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Does the articulation defect show in writing also?: </td>
                                                <td>
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control"
                                                        id="self_articulation_defect" name="self_articulation_defect"
                                                        placeholder="Enter" value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control"
                                                        id="self_articulation_defect" name="self_articulation_defect"
                                                        placeholder="Enter"
                                                        value="<?php echo $articulation_proformaData[0]->Self_Articulation_Defect; ?>">
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control"
                                                        id="parent_articulation_defect"
                                                        name="parent_articulation_defect" placeholder="Enter" value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control"
                                                        id="parent_articulation_defect"
                                                        name="parent_articulation_defect" placeholder="Enter"
                                                        value="<?php echo $articulation_proformaData[0]->Parent_Articulation_Defect; ?>">
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Phonological awareness</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Rhyming:</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="rhyming" name="rhyming"
                                                placeholder="Enter Rhyming" value="">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="rhyming" name="rhyming"
                                                placeholder="Enter Rhyming"
                                                value="<?php echo $articulation_proformaData[0]->Rhyming; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Blending :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="blending" name="blending"
                                                placeholder="Enter Blending" value="">
                                            <?php }else{ ?>

                                            <input type="text" class="form-control" id="blending" name="blending"
                                                placeholder="Enter Blending"
                                                value="<?php echo $articulation_proformaData[0]->Blending; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3"
                                            class="col-sm-2 col-form-label">Syllabification/segmentation
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="syllabification_segmentation"
                                                name="syllabification_segmentation"
                                                placeholder="Enter Syllabification/segmentation" value="">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="syllabification_segmentation"
                                                name="syllabification_segmentation"
                                                placeholder="Enter Syllabification/segmentation"
                                                value="<?php echo $articulation_proformaData[0]->Syllabification_Segmentation; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Articulation test results</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Consistancy of
                                            errors:</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="Consistancy_errors"
                                                name="Consistancy_errors" placeholder="Enter Word/Min" value="">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="Consistancy_errors"
                                                name="Consistancy_errors" placeholder="Enter Word/Min"
                                                value="<?php echo $articulation_proformaData[0]->Consistancy_errors; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Rate of speech
                                            :</label>
                                        <div class="col-sm-5">
                                            <?php if($edit === false){ ?>
                                            <select class="form-select form-control" name="rate_speech"
                                                aria-label="Default select example" value="">
                                                <option disabled>Select</option>
                                                <option value="slow">slow</option>
                                                <option value="normal">normal</option>
                                                <option value="fast">fast</option>
                                            </select>
                                            <?php }else{ ?>

                                            <select class="form-select form-control" name="rate_speech"
                                                aria-label="Default select example">
                                                <option disabled>Select</option>
                                                <option value="slow" <?php echo $articulation_proformaData[0]->Rate_Speech == 'slow' ? ' selected="selected"' : '';?>>slow</option>
                                                <option value="normal" <?php echo $articulation_proformaData[0]->Rate_Speech == 'normal' ? ' selected="selected"' : '';?>>normal</option>
                                                <option value="fast" <?php echo $articulation_proformaData[0]->Rate_Speech == 'fast' ? ' selected="selected"' : '';?>>fast</option>
                                            </select>
                                            <?php } ?>
                                        </div>
                                        <div class="col-sm-5">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="rate_speech_word"
                                                name="rate_speech_word" placeholder="Enter Word/Min" value="">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="rate_speech_word"
                                                name="rate_speech_word" placeholder="Enter Word/Min"
                                                value="<?php echo $articulation_proformaData[0]->Rate_Speech_Word; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Intelligibility
                                            according to AYJNIHH ratin scale
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <select class="form-select form-control" name="Intelligibility_Ratin_Scale"
                                                aria-label="Default select example" value="">
                                                <option disabled>Select</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                            <?php }else{ ?>
                                            <select class="form-select form-control" name="Intelligibility_Ratin_Scale"
                                                aria-label="Default select example">
                                                <option disabled>Select</option>
                                                <option value="0" <?php echo $articulation_proformaData[0]->Intelligibility_Ratin_Scale == '0' ? ' selected="selected"' : '';?>>0</option>
                                                <option value="1" <?php echo $articulation_proformaData[0]->Intelligibility_Ratin_Scale == '1' ? ' selected="selected"' : '';?>>1</option>
                                                <option value="2" <?php echo $articulation_proformaData[0]->Intelligibility_Ratin_Scale == '2' ? ' selected="selected"' : '';?>>2</option>
                                                <option value="3" <?php echo $articulation_proformaData[0]->Intelligibility_Ratin_Scale == '3' ? ' selected="selected"' : '';?>>3</option>
                                                <option value="4" <?php echo $articulation_proformaData[0]->Intelligibility_Ratin_Scale == '4' ? ' selected="selected"' : '';?>>4</option>
                                                <option value="5" <?php echo $articulation_proformaData[0]->Intelligibility_Ratin_Scale == '5' ? ' selected="selected"' : '';?>>5</option>
                                                <option value="6" <?php echo $articulation_proformaData[0]->Intelligibility_Ratin_Scale == '6' ? ' selected="selected"' : '';?>>6</option>
                                            </select>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Auditory
                                            discrimination:</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="auditory_discrimination"
                                                name="auditory_discrimination"
                                                placeholder="Enter Auditory discrimination" value="">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="auditory_discrimination"
                                                name="auditory_discrimination"
                                                placeholder="Enter Auditory discrimination"
                                                value="<?php echo $articulation_proformaData[0]->Auditory_Discrimination; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <h5>Stimulability:</h5>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Auditory:</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="auditory" name="auditory"
                                                placeholder="Enter Auditory" value="">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="auditory" name="auditory"
                                                placeholder="Enter Auditory"
                                                value="<?php echo $articulation_proformaData[0]->Auditory; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Audio/visual:</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="audio_visual"
                                                name="audio_visual" placeholder="Enter Audio/visual" value="">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="audio_visual"
                                                name="audio_visual" placeholder="Enter Audio/visual"
                                                value="<?php echo $articulation_proformaData[0]->Audio_Visual; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3"
                                            class="col-sm-2 col-form-label">Audio/visual/graphic:</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="Audio_visual_graphic"
                                                name="Audio_visual_graphic" placeholder="Enter Audio/visual/graphic"
                                                value="">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="Audio_visual_graphic"
                                                name="Audio_visual_graphic" placeholder="Enter Audio/visual/graphic"
                                                value="<?php echo $articulation_proformaData[0]->Audio_Visual_Graphic; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3"
                                            class="col-sm-2 col-form-label">Motokinesthetic:</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="motokinesthetic"
                                                name="motokinesthetic" placeholder="Enter Motokinesthetic" value="">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="motokinesthetic"
                                                name="motokinesthetic" placeholder="Enter Motokinesthetic"
                                                value="<?php echo $articulation_proformaData[0]->Motokinesthetic; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">DDK rate:</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="ddk_rate" name="ddk_rate"
                                                placeholder="Enter DDK rate" value="">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="ddk_rate" name="ddk_rate"
                                                placeholder="Enter DDK rate"
                                                value="<?php echo $articulation_proformaData[0]->DDK_Rate; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Phonological process/
                                            error analysis:</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control"
                                                id="phonological_process_error_analysis"
                                                name="phonological_process_error_analysis"
                                                placeholder="Enter Phonological process/ error analysis" value="">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control"
                                                id="phonological_process_error_analysis"
                                                name="phonological_process_error_analysis"
                                                placeholder="Enter Phonological process/ error analysis"
                                                value="<?php echo $articulation_proformaData[0]->Phonological_Process_Error_Analysis; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Recording date:</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="date" class="form-control" id="recording_date"
                                                name="recording_date" placeholder="Enter Recording date" value="">
                                            <?php }else{ ?>
                                            <input type="date" class="form-control" id="recording_date"
                                                name="recording_date" placeholder="Enter Recording date"
                                                value="<?php echo $articulation_proformaData[0]->Recording_Date; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Reference No:</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="reference_no"
                                                name="reference_no" placeholder="Enter Reference No" value="">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="reference_no"
                                                name="reference_no" placeholder="Enter Reference No"
                                                value="<?php echo $articulation_proformaData[0]->Reference_No; ?>">
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
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Remarks :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="remarks"
                                                name="remarks" placeholder="Enter Remarks">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="remarks"
                                                name="remarks" placeholder="Enter Remarks"
                                                value="<?php echo $articulation_proformaData[0]->Remarks; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Provisional diagnosis :
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
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Recommendations :
                                        </label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="recommendations"
                                                name="recommendations" placeholder="Enter Recommendations">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="recommendations"
                                                name="recommendations" placeholder="Enter Recommendations"
                                                value="<?php echo $articulation_proformaData[0]->Recommendations; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <?php if($action == 1){ ?>
                            <?php if($edit === true): ?>
                            <button type="submit" class="btn btn-primary float-right"
                                name="edit_articulation_proformaData"
                                id="edit_articulation_proformaData">Submit</button>
                            <?php else: ?>
                            <button type="submit" class="btn btn-primary float-right"
                                name="add_articulation_proformaData"
                                id="add_articulation_proformaData">Submit</button>
                            <?php endif; ?>
                        <?php } ?>    
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>