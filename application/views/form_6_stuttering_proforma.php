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
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Onset :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <select class="form-select form-control" name="onset"
                                                aria-label="Default select example">
                                                <option disabled>Select</option>
                                                <option value="gradual">gradual</option>
                                                <option value="sudden">sudden</option>
                                            </select>
                                            <?php }else{ ?>
                                            <select class="form-select form-control" name="onset"
                                                aria-label="Default select example">
                                                <option disabled>Select</option>
                                                <option value="gradual" <?php echo $stuttering_proformaData[0]->Onset == 'gradual' ? ' selected="selected"' : '';?>>gradual</option>
                                                <option value="sudden" <?php echo $stuttering_proformaData[0]->Onset == 'sudden' ? ' selected="selected"' : '';?>>sudden</option>
                                            </select>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Age of onset :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="number" class="form-control" id="age_onset" name="age_onset"
                                                placeholder="Enter Age of onset"
                                                value="">
                                            <?php }else{ ?>
                                            <input type="number" class="form-control" id="age_onset" name="age_onset"
                                                placeholder="Enter Age of onset"
                                                value="<?php echo $stuttering_proformaData[0]->Age_Onset; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">1st noticed by
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="first_notice_by"
                                                name="first_notice_by" placeholder="Enter 1st Noticed By"
                                                value="">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="first_notice_by"
                                                name="first_notice_by" placeholder="Enter 1st Noticed By"
                                                value="<?php echo $stuttering_proformaData[0]->First_Notice_By; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <h4>H/O contact with stutterer</h4>
                                    <br>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Relationship :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="relationship"
                                                name="relationship" placeholder="Enter Relationship" value="">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="relationship"
                                                name="relationship" placeholder="Enter Relationship"
                                                value="<?php echo $stuttering_proformaData[0]->Relationship; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">How long :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="how_long" name="how_long"
                                                placeholder="Enter How long">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="how_long" name="how_long"
                                                placeholder="Enter How long"
                                                value="<?php echo $stuttering_proformaData[0]->How_Long; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">When :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="when" name="when"
                                                placeholder="Enter When">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="when" name="when"
                                                placeholder="Enter When"
                                                value="<?php echo $stuttering_proformaData[0]->When_Do; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <hr>

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
                                                            <td>Reaction to the problem: </td>
                                                            <td>
                                                                <?php if($edit === false){ ?>
                                                                <input type="text" class="form-control"
                                                                    id="self_reaction_to_the_problem"
                                                                    name="self_reaction_to_the_problem"
                                                                    placeholder="Enter Problem" value="">
                                                                <?php }else{ ?>
                                                                <input type="text" class="form-control"
                                                                    id="self_reaction_to_the_problem"
                                                                    name="self_reaction_to_the_problem"
                                                                    placeholder="Enter Problem"
                                                                    value="<?php echo $stuttering_proformaData[0]->Self_Reaction_to_the_problem; ?>">
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
                                                                    value="<?php echo $stuttering_proformaData[0]->Parent_Reaction_to_the_problem; ?>">
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
                        </div>


                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Variation in stutterig</h4>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center" scope="col"></th>
                                                <th class="text-center" scope="col">More</th>
                                                <th class="text-center" scope="col">Less</th>
                                                <th class="text-center" scope="col">Same</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody">
                                            <tr>
                                                <td>Situations: </td>
                                                <td>
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control" id="more_situations"
                                                        name="more_situations" placeholder="Enter Situations" value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control" id="more_situations"
                                                        name="more_situations" placeholder="Enter Situations"
                                                        value="<?php echo $stuttering_proformaData[0]->More_Situations; ?>">
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control" id="less_situations"
                                                        name="less_situations" placeholder="Enter Situations" value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control" id="less_situations"
                                                        name="less_situations" placeholder="Enter Situations"
                                                        value="<?php echo $stuttering_proformaData[0]->Less_Situations; ?>">
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control" id="same_situations"
                                                        name="same_situations" placeholder="Enter Situations" value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control" id="same_situations"
                                                        name="same_situations" placeholder="Enter Situations"
                                                        value="<?php echo $stuttering_proformaData[0]->Same_Situations; ?>">
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Individuals: </td>
                                                <td>
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control" id="more_individuals"
                                                        name="more_individuals" placeholder="Enter Individuals"
                                                        value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control" id="more_individuals"
                                                        name="more_individuals" placeholder="Enter Individuals"
                                                        value="<?php echo $stuttering_proformaData[0]->More_Individuals; ?>">
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control" id="less_individuals"
                                                        name="less_individuals" placeholder="Enter Individuals"
                                                        value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control" id="less_individuals"
                                                        name="less_individuals" placeholder="Enter Individuals"
                                                        value="<?php echo $stuttering_proformaData[0]->Less_Individuals; ?>">
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if($edit === false){ ?>
                                                    <input type="text" class="form-control" id="same_individuals"
                                                        name="same_individuals" placeholder="Enter Individuals"
                                                        value="">
                                                    <?php }else{ ?>
                                                    <input type="text" class="form-control" id="same_individuals"
                                                        name="same_individuals" placeholder="Enter Individuals"
                                                        value="<?php echo $stuttering_proformaData[0]->Same_Individuals; ?>">
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
                                    <h4>Stutter more on:</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">At the begninig/other
                                            speciic phrases/sentences :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="number" class="form-control" id="at_begining_other_sentence"
                                                name="at_begining_other_sentence"
                                                placeholder="Enter At the begninig/other speciic phrases/sentences"
                                                value="">
                                            <?php }else{ ?>
                                            <input type="number" class="form-control" id="at_begining_other_sentence"
                                                name="at_begining_other_sentence"
                                                placeholder="Enter At the begninig/other speciic phrases/sentences"
                                                value="<?php echo $stuttering_proformaData[0]->At_Begining_Other_Sentence; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Some specific
                                            sounds/words/languages
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="some_spcific_swl"
                                                name="some_spcific_swl"
                                                placeholder="Enter Some specific sounds/words/languages" value="">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="some_spcific_swl"
                                                name="some_spcific_swl"
                                                placeholder="Enter Some specific sounds/words/languages"
                                                value="<?php echo $stuttering_proformaData[0]->Some_Spcific_SWL; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Anticipation :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="anticipation"
                                                name="anticipation" placeholder="Enter Anticipation" value="">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="anticipation"
                                                name="anticipation" placeholder="Enter Anticipation"
                                                value="<?php echo $stuttering_proformaData[0]->Anticipation; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Avoidance behaviour
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="avoidance_behaviour"
                                                name="avoidance_behaviour" placeholder="Enter Avoidance behaviour">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="avoidance_behaviour"
                                                name="avoidance_behaviour" placeholder="Enter Avoidance behaviour"
                                                value="<?php echo $stuttering_proformaData[0]->Avoidance_Behaviour; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <h4>Coping mechanism used:</h4>
                                    <br>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Reported :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="reported" name="reported"
                                                placeholder="Enter Reported">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="reported" name="reported"
                                                placeholder="Enter Reported"
                                                value="<?php echo $stuttering_proformaData[0]->Reported; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Observed :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="observed" name="observed"
                                                placeholder="Enter Observed">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="observed" name="observed"
                                                placeholder="Enter Observed"
                                                value="<?php echo $stuttering_proformaData[0]->Observed; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Recording date:</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="date" class="form-control" id="recording_date"
                                                name="recording_date" placeholder="Enter Recording date" value="">
                                            <?php }else{ ?>
                                            <input type="date" class="form-control" id="recording_date"
                                                name="recording_date" placeholder="Enter Recording date"
                                                value="<?php echo $stuttering_proformaData[0]->Recording_Date; ?>">
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
                                                value="<?php echo $stuttering_proformaData[0]->Reference_No; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <h4>Analysis of symptoms:</h4>
                                    <br>
                                    <div class="row mb-3">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" scope="col"></th>
                                                    <th class="text-center" scope="col">Speaking</th>
                                                    <th class="text-center" scope="col">Reading</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbody">
                                                <tr>
                                                    <td>No.of Prolongations: </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="speak_no_of_prolongations"
                                                            name="speak_no_of_prolongations" placeholder="Enter Number"
                                                            value="0" onkeyup="count()">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="speak_no_of_prolongations"
                                                            name="speak_no_of_prolongations" placeholder="Enter Number"
                                                            value="<?php echo $stuttering_proformaData[0]->Speak_No_Of_Prolongations; ?>"
                                                            onkeyup="count()">
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="read_no_of_prolongations"
                                                            name="read_no_of_prolongations" placeholder="Enter Number"
                                                            value="0" onkeyup="count()">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="read_no_of_prolongations"
                                                            name="read_no_of_prolongations" placeholder="Enter Number"
                                                            value="<?php echo $stuttering_proformaData[0]->Read_No_Of_Prolongations; ?>"
                                                            onkeyup="count()">
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>No.of Repetitions: </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="speak_no_of_repetitions" name="speak_no_of_repetitions"
                                                            placeholder="Enter Number" value="0" onkeyup="count()">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="speak_no_of_repetitions" name="speak_no_of_repetitions"
                                                            placeholder="Enter Number"
                                                            value="<?php echo $stuttering_proformaData[0]->Speak_No_Of_Repetitions; ?>"
                                                            onkeyup="count()">
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="read_no_of_repetitions" name="read_no_of_repetitions"
                                                            placeholder="Enter Number" value="0" onkeyup="count()">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="read_no_of_repetitions" name="read_no_of_repetitions"
                                                            placeholder="Enter Number"
                                                            value="<?php echo $stuttering_proformaData[0]->Read_No_Of_Repetitions; ?>"
                                                            onkeyup="count()">
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>No.of Hesitations: </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="speak_no_of_hesitations" name="speak_no_of_hesitations"
                                                            placeholder="Enter Number" value="0" onkeyup="count()">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="speak_no_of_hesitations" name="speak_no_of_hesitations"
                                                            placeholder="Enter Number"
                                                            value="<?php echo $stuttering_proformaData[0]->Speak_No_Of_Hesitations; ?>"
                                                            onkeyup="count()">
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="number" class="form-control"
                                                            id="read_no_of_hesitations" name="read_no_of_hesitations"
                                                            placeholder="Enter Number" value="0" onkeyup="count()">
                                                        <?php }else{ ?>
                                                        <input type="number" class="form-control"
                                                            id="read_no_of_hesitations" name="read_no_of_hesitations"
                                                            placeholder="Enter Number"
                                                            value="<?php echo $stuttering_proformaData[0]->Read_No_Of_Hesitations; ?>"
                                                            onkeyup="count()">
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Total No.of Blocks: </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control"
                                                            id="speak_total_no_of_blocks"
                                                            name="speak_total_no_of_blocks" placeholder="Enter Number"
                                                            value="0" onkeyup="count()">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control"
                                                            id="speak_total_no_of_blocks"
                                                            name="speak_total_no_of_blocks" placeholder="Enter Number"
                                                            value="<?php echo $stuttering_proformaData[0]->Speak_Total_No_Of_Blocks; ?>"
                                                            onkeyup="count()">
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control"
                                                            id="read_total_no_of_blocks" name="read_total_no_of_blocks"
                                                            placeholder="Enter Number" value="0" onkeyup="count()">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control"
                                                            id="read_total_no_of_blocks" name="read_total_no_of_blocks"
                                                            placeholder="Enter Number"
                                                            value="<?php echo $stuttering_proformaData[0]->Read_Total_No_Of_Blocks; ?>"
                                                            onkeyup="count()">
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Rate of speech
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="rate_of_speech"
                                                name="rate_of_speech" placeholder="Enter Rate of speech">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="rate_of_speech"
                                                name="rate_of_speech" placeholder="Enter Rate of speech"
                                                value="<?php echo $stuttering_proformaData[0]->Rate_Of_Speech; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Behaviour observed
                                            during silent reading :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control"
                                                id="behaviour_observed_during_silent_reading"
                                                name="behaviour_observed_during_silent_reading"
                                                placeholder="Enter Behaviour observed during silent reading">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control"
                                                id="behaviour_observed_during_silent_reading"
                                                name="behaviour_observed_during_silent_reading"
                                                placeholder="Enter Behaviour observed during silent reading"
                                                value="<?php echo $stuttering_proformaData[0]->Behaviour_Observed_During_Silent_Reading; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">MPD :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="mpd" name="mpd"
                                                placeholder="Enter MPD">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="mpd" name="mpd"
                                                placeholder="Enter MPD" value="<?php echo $stuttering_proformaData[0]->MPD; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Secondaries :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="secondaries" name="secondaries"
                                                placeholder="Enter Secondaries">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="secondaries" name="secondaries"
                                                placeholder="Enter Secondaries"
                                                value="<?php echo $stuttering_proformaData[0]->Secondaries; ?>">
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
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Remarks :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="remarks" name="remarks"
                                                placeholder="Enter Remarks">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="remarks" name="remarks"
                                                placeholder="Enter Remarks" value="<?php echo $stuttering_proformaData[0]->Remarks; ?>">
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
                                </div>
                            </div>
                        </div>



                        
                        <?php if($action == 1){ ?>
                            <?php if($edit === true): ?>
                            <button type="submit" class="btn btn-primary float-right" name="edit_stuttering_proforma"
                                id="edit_stuttering_proforma">Submit</button>
                            <?php else: ?>
                            <button type="submit" class="btn btn-primary float-right" name="add_stuttering_proforma"
                                id="add_stuttering_proforma">Submit</button>
                            <?php endif; ?>
                        <?php } ?>    
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<script>
function count() {
    var speak_no_of_prolongations = $("#speak_no_of_prolongations").val();
    var speak_no_of_repetitions = $("#speak_no_of_repetitions").val();
    var speak_no_of_hesitations = $("#speak_no_of_hesitations").val();
    var speak_total_no_of_blocks = $("#speak_total_no_of_blocks").val();


    var read_no_of_prolongations = $("#read_no_of_prolongations").val();
    var read_no_of_repetitions = $("#read_no_of_repetitions").val();
    var read_no_of_hesitations = $("#read_no_of_hesitations").val();
    var read_total_no_of_blocks = $("#read_total_no_of_blocks").val();

    var total_speak = Number(speak_no_of_prolongations) + Number(speak_no_of_repetitions) + Number(
        speak_no_of_hesitations);
    var total_read = Number(read_no_of_prolongations) + Number(read_no_of_repetitions) + Number(read_no_of_hesitations);

    $("#speak_total_no_of_blocks").val(total_speak);
    $("#read_total_no_of_blocks").val(total_read);
}
</script>