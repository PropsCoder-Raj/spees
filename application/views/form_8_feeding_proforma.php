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
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Feeding
                                            concerns:</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="feeding_concerns"
                                                name="feeding_concerns" placeholder="Enter Feeding concerns" value="">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="feeding_concerns"
                                                name="feeding_concerns" placeholder="Enter Feeding concerns"
                                                value="<?php echo $formRecordsData[0]->Feeding_Concerns; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">When was the problem
                                            noticed first:</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <input type="text" class="form-control" id="problem_noticed_first"
                                                name="problem_noticed_first" placeholder="Enter problem" value="">
                                            <?php }else{ ?>
                                            <input type="text" class="form-control" id="problem_noticed_first"
                                                name="problem_noticed_first" placeholder="Enter problem"
                                                value="<?php echo $formRecordsData[0]->Problem_Noticed_First; ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 mb-3">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Nasal
                                                regurgitation:</label>
                                            <div class="col-sm-12 form-group">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="nasal_regurgitation" id="nasal_regurgitation1"
                                                        value="Present" checked>
                                                    <label class="form-check-label" for="nasal_regurgitation1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="nasal_regurgitation" id="nasal_regurgitation2"
                                                        value="Absent">
                                                    <label class="form-check-label" for="nasal_regurgitation2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php }else{ ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="nasal_regurgitation" id="nasal_regurgitation1"
                                                        value="Present"
                                                        <?php if($formRecordsData[0]->Nasal_Regurgitation == 'Present') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="nasal_regurgitation1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="nasal_regurgitation" id="nasal_regurgitation2"
                                                        value="Absent"
                                                        <?php if($formRecordsData[0]->Nasal_Regurgitation == 'Absent') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="nasal_regurgitation2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-3">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Pneumonia:</label>
                                            <div class="col-sm-12 form-group">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="pneumonia"
                                                        id="pneumonia1" value="Present" checked>
                                                    <label class="form-check-label" for="pneumonia1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="pneumonia"
                                                        id="pneumonia2" value="Absent">
                                                    <label class="form-check-label" for="pneumonia2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php }else{ ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="pneumonia"
                                                        id="pneumonia1" value="Present"
                                                        <?php if($formRecordsData[0]->Pneumonia == 'Present') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="pneumonia1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="pneumonia"
                                                        id="pneumonia2" value="Absent"
                                                        <?php if($formRecordsData[0]->Pneumonia == 'Absent') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="pneumonia2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-3">
                                            <label for="inputEmail3"
                                                class="col-sm-12 col-form-label">Aspiration:</label>
                                            <div class="col-sm-12 form-group">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="aspiration"
                                                        id="aspiration1" value="Present" checked>
                                                    <label class="form-check-label" for="aspiration1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="aspiration"
                                                        id="aspiration2" value="Absent">
                                                    <label class="form-check-label" for="aspiration2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php }else{ ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="aspiration"
                                                        id="aspiration1" value="Present"
                                                        <?php if($formRecordsData[0]->Aspiration == 'Present') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="aspiration1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="aspiration"
                                                        id="aspiration2" value="Absent"
                                                        <?php if($formRecordsData[0]->Aspiration == 'Absent') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="aspiration2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-3">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Ear
                                                infection:</label>
                                            <div class="col-sm-12 form-group">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="ear_infection"
                                                        id="ear_infection1" value="Present" checked>
                                                    <label class="form-check-label" for="ear_infection1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="ear_infection"
                                                        id="ear_infection2" value="Absent">
                                                    <label class="form-check-label" for="ear_infection2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php }else{ ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="ear_infection"
                                                        id="ear_infection1" value="Present"
                                                        <?php if($formRecordsData[0]->Ear_Infection == 'Present') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="ear_infection1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="ear_infection"
                                                        id="ear_infection2" value="Absent"
                                                        <?php if($formRecordsData[0]->Ear_Infection == 'Absent') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="ear_infection2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-sm-3 mb-3">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">URTI:</label>
                                            <div class="col-sm-12 form-group">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="URTI" id="URTI1"
                                                        value="Present" checked>
                                                    <label class="form-check-label" for="URTI1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="URTI" id="URTI2"
                                                        value="Absent">
                                                    <label class="form-check-label" for="URTI2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php }else{ ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="URTI" id="URTI1"
                                                        value="Present"
                                                        <?php if($formRecordsData[0]->URTI == 'Present') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="URTI1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="URTI" id="URTI2"
                                                        value="Absent"
                                                        <?php if($formRecordsData[0]->URTI == 'Absent') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="URTI2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-3">
                                            <label for="inputEmail3"
                                                class="col-sm-12 col-form-label">Respiratory_stridor:</label>
                                            <div class="col-sm-12 form-group">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="respiratory_stridor" id="respiratory_stridor1"
                                                        value="Present" checked>
                                                    <label class="form-check-label" for="respiratory_stridor1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="respiratory_stridor" id="respiratory_stridor2"
                                                        value="Absent">
                                                    <label class="form-check-label" for="respiratory_stridor2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php }else{ ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="respiratory_stridor" id="respiratory_stridor1"
                                                        value="Present"
                                                        <?php if($formRecordsData[0]->Respiratory_Stridor == 'Present') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="respiratory_stridor1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="respiratory_stridor" id="respiratory_stridor2"
                                                        value="Absent"
                                                        <?php if($formRecordsData[0]->Respiratory_Stridor == 'Absent') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="respiratory_stridor2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-3">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Wheezing:</label>
                                            <div class="col-sm-12 form-group">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="wheezing"
                                                        id="wheezing1" value="Present" checked>
                                                    <label class="form-check-label" for="wheezing1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="wheezing"
                                                        id="wheezing2" value="Absent">
                                                    <label class="form-check-label" for="wheezing2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php }else{ ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="wheezing"
                                                        id="wheezing1" value="Present"
                                                        <?php if($formRecordsData[0]->Wheezing == 'Present') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="wheezing1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="wheezing"
                                                        id="wheezing2" value="Absent"
                                                        <?php if($formRecordsData[0]->Wheezing == 'Absent') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="wheezing2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-3">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Asthma:</label>
                                            <div class="col-sm-12 form-group">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="asthma"
                                                        id="asthma1" value="Present" checked>
                                                    <label class="form-check-label" for="asthma1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="asthma"
                                                        id="asthma2" value="Absent">
                                                    <label class="form-check-label" for="asthma2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php }else{ ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="asthma"
                                                        id="asthma1" value="Present"
                                                        <?php if($formRecordsData[0]->Asthma == 'Present') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="asthma1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="asthma"
                                                        id="asthma2" value="Absent"
                                                        <?php if($formRecordsData[0]->Asthma == 'Absent') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="asthma2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3 mb-3">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Nasal chest
                                                congestion:</label>
                                            <div class="col-sm-12 form-group">
                                                <?php if($edit === false){ ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="nasal_chest_congestion" id="nasal_chest_congestion1"
                                                        value="Present" checked>
                                                    <label class="form-check-label" for="nasal_chest_congestion1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="nasal_chest_congestion" id="nasal_chest_congestion2"
                                                        value="Absent">
                                                    <label class="form-check-label" for="nasal_chest_congestion2">
                                                        Absent
                                                    </label>
                                                </div>
                                                <?php }else{ ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="nasal_chest_congestion" id="nasal_chest_congestion1"
                                                        value="Present"
                                                        <?php if($formRecordsData[0]->Nasal_Chest_Congestion == 'Present') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="nasal_chest_congestion1">
                                                        Present
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="nasal_chest_congestion" id="nasal_chest_congestion2"
                                                        value="Absent"
                                                        <?php if($formRecordsData[0]->Nasal_Chest_Congestion == 'Absent') { echo "checked"; } ?>>
                                                    <label class="form-check-label" for="nasal_chest_congestion2">
                                                        Absent
                                                    </label>
                                                </div>
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
                                    <h4>Feeding milestones</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Was the child able to
                                            effectively breast feed ? :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="feeding_milestones_1" name="feeding_milestones_1"
                                                style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="feeding_milestones_1" name="feeding_milestones_1"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Feeding_Milestones_1; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">At what age bottle
                                            feeding was initiated :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="feeding_milestones_2" name="feeding_milestones_2"
                                                style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="feeding_milestones_2" name="feeding_milestones_2"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Feeding_Milestones_2; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">At what age bottle
                                            feeding was stopped :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="feeding_milestones_3" name="feeding_milestones_3"
                                                style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="feeding_milestones_3" name="feeding_milestones_3"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Feeding_Milestones_3; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Can the child drink
                                            water from a bottle without coughing/ regurgitation liquid from nose, if the
                                            bottle is held by the adult :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="feeding_milestones_4" name="feeding_milestones_4"
                                                style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="feeding_milestones_4" name="feeding_milestones_4"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Feeding_Milestones_4; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">At what age semi liquid
                                            food introduced to the child’s diet? :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="feeding_milestones_5" name="feeding_milestones_5"
                                                style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="feeding_milestones_5" name="feeding_milestones_5"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Feeding_Milestones_5; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">At what age was the
                                            child allowed to feed himself :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="feeding_milestones_6" name="feeding_milestones_6"
                                                style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="feeding_milestones_6" name="feeding_milestones_6"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Feeding_Milestones_6; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">By what age he was able
                                            to eat all textures of food? :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="feeding_milestones_7" name="feeding_milestones_7"
                                                style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="feeding_milestones_7" name="feeding_milestones_7"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Feeding_Milestones_7; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Which utensils can your
                                            child use with/without help ? :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="feeding_milestones_8" name="feeding_milestones_8"
                                                style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here"
                                                id="feeding_milestones_8" name="feeding_milestones_8"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Feeding_Milestones_8; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Sensory issues in feeding</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Does the child have any
                                            strong food preferance? :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="sensory_issue_1"
                                                name="sensory_issue_1" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="sensory_issue_1"
                                                name="sensory_issue_1"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Sensory_Issue_1; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Does he/she strongly
                                            like/dislike any particular task? :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="sensory_issue_2"
                                                name="sensory_issue_2" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="sensory_issue_2"
                                                name="sensory_issue_2"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Sensory_Issue_2; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Does he/she strongly
                                            like/dislike any particular food texture?:</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="sensory_issue_3"
                                                name="sensory_issue_3" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="sensory_issue_3"
                                                name="sensory_issue_3"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Sensory_Issue_3; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Does he/she strongly
                                            like/dislike any particular temperature of food?:</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="sensory_issue_4"
                                                name="sensory_issue_4" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="sensory_issue_4"
                                                name="sensory_issue_4"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Sensory_Issue_4; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Does he/she spit
                                            frequently during feeding?:</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="sensory_issue_5"
                                                name="sensory_issue_5" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="sensory_issue_5"
                                                name="sensory_issue_5"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Sensory_Issue_5; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Mouthing of inedible
                                            objects: </label>
                                        <div class="col-sm-1">
                                            <?php if($edit === false){ ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="sensory_issue_6_checked" id="sensory_issue_6_checked1"
                                                    value="Present" checked>
                                                <label class="form-check-label" for="sensory_issue_6_checked1">
                                                    Present
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="sensory_issue_6_checked" id="sensory_issue_6_checked2"
                                                    value="Absent">
                                                <label class="form-check-label" for="sensory_issue_6_checked2">
                                                    Absent
                                                </label>
                                            </div>
                                            <?php }else{ ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="sensory_issue_6_checked" id="sensory_issue_6_checked1"
                                                    value="Present"
                                                    <?php if($formRecordsData[0]->Sensory_Issue_6_Checked == 'Present') { echo "checked"; } ?>>
                                                <label class="form-check-label" for="sensory_issue_6_checked1">
                                                    Present
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="sensory_issue_6_checked" id="sensory_issue_6_checked2"
                                                    value="Absent"
                                                    <?php if($formRecordsData[0]->Sensory_Issue_6_Checked == 'Absent') { echo "checked"; } ?>>
                                                <label class="form-check-label" for="nasal_regurgitation2">
                                                    Absent
                                                </label>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <div class="col-sm-9">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="sensory_issue_6"
                                                name="sensory_issue_6" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="sensory_issue_6"
                                                name="sensory_issue_6"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Sensory_Issue_6; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Meal time behaviour checklist</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <table class="table table-bordered">
                                            <tbody id="tbody">
                                                <tr>
                                                    <td style="width: 20%">Spits food</td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control"
                                                            id="meal_time_behaviour_checklist_1"
                                                            name="meal_time_behaviour_checklist_1"
                                                            placeholder="Type Here" value="">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control"
                                                            id="meal_time_behaviour_checklist_1"
                                                            name="meal_time_behaviour_checklist_1"
                                                            placeholder="Type Here"
                                                            value="<?php echo $formRecordsData[0]->Meal_Time_Behaviour_Checklist_1; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 20%">Pushes food away</td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control"
                                                            id="meal_time_behaviour_checklist_2"
                                                            name="meal_time_behaviour_checklist_2"
                                                            placeholder="Type Here" value="">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control"
                                                            id="meal_time_behaviour_checklist_2"
                                                            name="meal_time_behaviour_checklist_2"
                                                            placeholder="Type Here"
                                                            value="<?php echo $formRecordsData[0]->Meal_Time_Behaviour_Checklist_2; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 20%">Turns Head</td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control"
                                                            id="meal_time_behaviour_checklist_3"
                                                            name="meal_time_behaviour_checklist_3"
                                                            placeholder="Type Here" value="">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control"
                                                            id="meal_time_behaviour_checklist_3"
                                                            name="meal_time_behaviour_checklist_3"
                                                            placeholder="Type Here"
                                                            value="<?php echo $formRecordsData[0]->Meal_Time_Behaviour_Checklist_3; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 20%">Keep mouth shut</td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control"
                                                            id="meal_time_behaviour_checklist_4"
                                                            name="meal_time_behaviour_checklist_4"
                                                            placeholder="Type Here" value="">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control"
                                                            id="meal_time_behaviour_checklist_4"
                                                            name="meal_time_behaviour_checklist_4"
                                                            placeholder="Type Here"
                                                            value="<?php echo $formRecordsData[0]->Meal_Time_Behaviour_Checklist_4; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 20%">Screams/cries</td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control"
                                                            id="meal_time_behaviour_checklist_5"
                                                            name="meal_time_behaviour_checklist_5"
                                                            placeholder="Type Here" value="">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control"
                                                            id="meal_time_behaviour_checklist_5"
                                                            name="meal_time_behaviour_checklist_5"
                                                            placeholder="Type Here"
                                                            value="<?php echo $formRecordsData[0]->Meal_Time_Behaviour_Checklist_5; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 20%">Over stuffs</td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control"
                                                            id="meal_time_behaviour_checklist_6"
                                                            name="meal_time_behaviour_checklist_6"
                                                            placeholder="Type Here" value="">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control"
                                                            id="meal_time_behaviour_checklist_6"
                                                            name="meal_time_behaviour_checklist_6"
                                                            placeholder="Type Here"
                                                            value="<?php echo $formRecordsData[0]->Meal_Time_Behaviour_Checklist_6; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 20%">Leaves the table</td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control"
                                                            id="meal_time_behaviour_checklist_7"
                                                            name="meal_time_behaviour_checklist_7"
                                                            placeholder="Type Here" value="">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control"
                                                            id="meal_time_behaviour_checklist_7"
                                                            name="meal_time_behaviour_checklist_7"
                                                            placeholder="Type Here"
                                                            value="<?php echo $formRecordsData[0]->Meal_Time_Behaviour_Checklist_7; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td style="width: 20%">Hold the food in mouth</td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control"
                                                            id="meal_time_behaviour_checklist_8"
                                                            name="meal_time_behaviour_checklist_8"
                                                            placeholder="Type Here" value="">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control"
                                                            id="meal_time_behaviour_checklist_8"
                                                            name="meal_time_behaviour_checklist_8"
                                                            placeholder="Type Here"
                                                            value="<?php echo $formRecordsData[0]->Meal_Time_Behaviour_Checklist_8; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 20%">Eats too fast/slow</td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control"
                                                            id="meal_time_behaviour_checklist_9"
                                                            name="meal_time_behaviour_checklist_9"
                                                            placeholder="Type Here" value="">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control"
                                                            id="meal_time_behaviour_checklist_9"
                                                            name="meal_time_behaviour_checklist_9"
                                                            placeholder="Type Here"
                                                            value="<?php echo $formRecordsData[0]->Meal_Time_Behaviour_Checklist_9; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 20%">Throws food</td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control"
                                                            id="meal_time_behaviour_checklist_10"
                                                            name="meal_time_behaviour_checklist_10"
                                                            placeholder="Type Here" value="">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control"
                                                            id="meal_time_behaviour_checklist_10"
                                                            name="meal_time_behaviour_checklist_10"
                                                            placeholder="Type Here"
                                                            value="<?php echo $formRecordsData[0]->Meal_Time_Behaviour_Checklist_10; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 20%">Tantrum</td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control"
                                                            id="meal_time_behaviour_checklist_11"
                                                            name="meal_time_behaviour_checklist_11"
                                                            placeholder="Type Here" value="">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control"
                                                            id="meal_time_behaviour_checklist_11"
                                                            name="meal_time_behaviour_checklist_11"
                                                            placeholder="Type Here"
                                                            value="<?php echo $formRecordsData[0]->Meal_Time_Behaviour_Checklist_11; ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 20%">Tantrum</td>
                                                    <td>
                                                        <?php if($edit === false){ ?>
                                                        <input type="text" class="form-control"
                                                            id="meal_time_behaviour_checklist_12"
                                                            name="meal_time_behaviour_checklist_12"
                                                            placeholder="Type Here" value="">
                                                        <?php }else{ ?>
                                                        <input type="text" class="form-control"
                                                            id="meal_time_behaviour_checklist_12"
                                                            name="meal_time_behaviour_checklist_12"
                                                            placeholder="Type Here"
                                                            value="<?php echo $formRecordsData[0]->Meal_Time_Behaviour_Checklist_12; ?>">
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
                                <div class="card-header">
                                    <h4>OPME</h4>
                                </div>
                                <div class="card-body">
                                    <h5>Lip</h5>
                                    <br>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">mouth posture :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="opme_lip_1"
                                                name="opme_lip_1" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="opme_lip_1"
                                                name="opme_lip_1"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Opme_Lip_1; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Spillage of liquid
                                            while drinking :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="opme_lip_2"
                                                name="opme_lip_2" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="opme_lip_2"
                                                name="opme_lip_2"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Opme_Lip_2; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Symmetry :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="opme_lip_3"
                                                name="opme_lip_3" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="opme_lip_3"
                                                name="opme_lip_3"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Opme_Lip_3; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <h5>Jaw</h5>
                                    <br>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Symmetry :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="opme_jaw_1"
                                                name="opme_jaw_1" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="opme_jaw_1"
                                                name="opme_jaw_1"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Opme_Jaw_1; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Mastication movement
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="opme_jaw_2"
                                                    id="opme_jaw_21" value="Adequate" checked>
                                                <label class="form-check-label" for="opme_jaw_21">
                                                    Adequate
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="opme_jaw_2"
                                                    id="opme_jaw_22" value="Inadequate">
                                                <label class="form-check-label" for="opme_jaw_22">
                                                    Inadequate
                                                </label>
                                            </div>
                                            <?php }else{ ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="opme_jaw_2"
                                                    id="opme_jaw_21" value="Adequate"
                                                    <?php if($formRecordsData[0]->Opme_Jaw_2 == 'Adequate') { echo "checked"; } ?>>
                                                <label class="form-check-label" for="opme_jaw_21">
                                                    Adequate
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="opme_jaw_2"
                                                    id="opme_jaw_22" value="Inadequate"
                                                    <?php if($formRecordsData[0]->Opme_Jaw_2 == 'Inadequate') { echo "checked"; } ?>>
                                                <label class="form-check-label" for="opme_jaw_22">
                                                    Inadequate
                                                </label>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Can the child use jaw
                                            for sucking while breast feeding :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="opme_jaw_3"
                                                name="opme_jaw_3" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="opme_jaw_3"
                                                name="opme_jaw_3"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Opme_Jaw_3; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <h5>Tongue</h5>
                                    <br>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Symmetry :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="opme_tongue_1"
                                                name="opme_tongue_1" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="opme_tongue_1"
                                                name="opme_tongue_1"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Opme_Tongue_1; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Does the child often
                                            bite his tongue while chewing :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="opme_tongue_2"
                                                name="opme_tongue_2" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="opme_tongue_2"
                                                name="opme_tongue_2"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Opme_Tongue_2; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Is the child able to
                                            effectively manipulate food in his/her mouth :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="opme_tongue_3"
                                                name="opme_tongue_3" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="opme_tongue_3"
                                                name="opme_tongue_3"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Opme_Tongue_3; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <h5>Oral cavity</h5>
                                    <br>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Pocketing of food
                                            :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="oral_cavity_1"
                                                name="oral_cavity_1" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="oral_cavity_1"
                                                name="oral_cavity_1"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Oral_Cavity_1; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Are there food residue
                                            even after swallowing :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="oral_cavity_2"
                                                name="oral_cavity_2" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="oral_cavity_2"
                                                name="oral_cavity_2"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Oral_Cavity_2; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Posture while feeding</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Is the child able to sit while eating? :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="poster_while_feeding_1"
                                                name="poster_while_feeding_1" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="poster_while_feeding_1"
                                                name="poster_while_feeding_1"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Poster_While_Feeding_1; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Posture maintained during feeding :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="poster_while_feeding_2"
                                                name="poster_while_feeding_2" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="poster_while_feeding_2"
                                                name="poster_while_feeding_2"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Poster_While_Feeding_2; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>OPME</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">

                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" scope="col"></th>
                                                    <th class="text-center" scope="col">Food Used</th>
                                                    <th class="text-center" scope="col">Trial 1</th>
                                                    <th class="text-center" scope="col">Trial 2</th>
                                                    <th class="text-center" scope="col">Trial 3</th>
                                                    <th class="text-center" scope="col">Posture While Feeding</th>
                                                    <th class="text-center" scope="col">Assistive Utensils Used</th>
                                                    <th class="text-center" scope="col">Remarks</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbody">
                                                <tr>
                                                    <td class="text-center" scope="col">
                                                        Dry
                                                    </td>
                                                    <td class="text-center" scope="col">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="dry_1" name="dry_1"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="dry_1" name="dry_1"
                                                            style="height: 100px"><?php echo $formRecordsData[0]->Dry_1; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-center" scope="col">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="dry_2" name="dry_2"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="dry_2" name="dry_2"
                                                            style="height: 100px"><?php echo $formRecordsData[0]->Dry_2; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-center" scope="col">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="dry_3" name="dry_3"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="dry_3" name="dry_3"
                                                            style="height: 100px"><?php echo $formRecordsData[0]->Dry_3; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-center" scope="col">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="dry_4" name="dry_4"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="dry_4" name="dry_4"
                                                            style="height: 100px"><?php echo $formRecordsData[0]->Dry_4; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-center" scope="col">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="dry_5" name="dry_5"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="dry_5" name="dry_5"
                                                            style="height: 100px"><?php echo $formRecordsData[0]->Dry_5; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-center" scope="col">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="dry_6" name="dry_6"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="dry_6" name="dry_6"
                                                            style="height: 100px"><?php echo $formRecordsData[0]->Dry_6; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-center" scope="col">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="dry_7" name="dry_7"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="dry_7" name="dry_7"
                                                            style="height: 100px"><?php echo $formRecordsData[0]->Dry_7; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" scope="col">
                                                    Semiliquid
                                                    </td>
                                                    <td class="text-center" scope="col">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="semiliquid_1" name="semiliquid_1"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="semiliquid_1" name="semiliquid_1"
                                                            style="height: 100px"><?php echo $formRecordsData[0]->Semiliquid_1; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-center" scope="col">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="semiliquid_2" name="semiliquid_2"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="semiliquid_2" name="semiliquid_2"
                                                            style="height: 100px"><?php echo $formRecordsData[0]->Semiliquid_2; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-center" scope="col">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="semiliquid_3" name="semiliquid_3"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="semiliquid_3" name="semiliquid_3"
                                                            style="height: 100px"><?php echo $formRecordsData[0]->Semiliquid_3; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-center" scope="col">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="semiliquid_4" name="semiliquid_4"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="semiliquid_4" name="semiliquid_4"
                                                            style="height: 100px"><?php echo $formRecordsData[0]->Semiliquid_4; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-center" scope="col">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="semiliquid_5" name="semiliquid_5"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="semiliquid_5" name="semiliquid_5"
                                                            style="height: 100px"><?php echo $formRecordsData[0]->Semiliquid_5; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-center" scope="col">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="semiliquid_6" name="semiliquid_6"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="semiliquid_6" name="semiliquid_6"
                                                            style="height: 100px"><?php echo $formRecordsData[0]->Semiliquid_6; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-center" scope="col">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="semiliquid_7" name="semiliquid_7"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="semiliquid_7" name="semiliquid_7"
                                                            style="height: 100px"><?php echo $formRecordsData[0]->Semiliquid_7; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" scope="col">
                                                    Semiliquid
                                                    </td>
                                                    <td class="text-center" scope="col">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="liquid_1" name="liquid_1"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="liquid_1" name="liquid_1"
                                                            style="height: 100px"><?php echo $formRecordsData[0]->Liquid_1; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-center" scope="col">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="liquid_2" name="liquid_2"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="liquid_2" name="liquid_2"
                                                            style="height: 100px"><?php echo $formRecordsData[0]->Liquid_2; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-center" scope="col">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="liquid_3" name="liquid_3"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="liquid_3" name="liquid_3"
                                                            style="height: 100px"><?php echo $formRecordsData[0]->Liquid_3; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-center" scope="col">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="liquid_4" name="liquid_4"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="liquid_4" name="liquid_4"
                                                            style="height: 100px"><?php echo $formRecordsData[0]->Liquid_4; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-center" scope="col">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="liquid_5" name="liquid_5"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="liquid_5" name="liquid_5"
                                                            style="height: 100px"><?php echo $formRecordsData[0]->Liquid_5; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-center" scope="col">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="liquid_6" name="liquid_6"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="liquid_6" name="liquid_6"
                                                            style="height: 100px"><?php echo $formRecordsData[0]->Liquid_6; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-center" scope="col">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="liquid_7" name="liquid_7"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="liquid_7" name="liquid_7"
                                                            style="height: 100px"><?php echo $formRecordsData[0]->Liquid_7; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" scope="col">
                                                    Solid
                                                    </td>
                                                    <td class="text-center" scope="col">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="solid_1" name="solid_1"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="solid_1" name="solid_1"
                                                            style="height: 100px"><?php echo $formRecordsData[0]->Solid_1; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-center" scope="col">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="solid_2" name="solid_2"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="solid_2" name="solid_2"
                                                            style="height: 100px"><?php echo $formRecordsData[0]->Solid_2; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-center" scope="col">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="solid_3" name="solid_3"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="solid_3" name="solid_3"
                                                            style="height: 100px"><?php echo $formRecordsData[0]->Solid_3; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-center" scope="col">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="solid_4" name="solid_4"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="solid_4" name="solid_4"
                                                            style="height: 100px"><?php echo $formRecordsData[0]->Solid_4; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-center" scope="col">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="solid_5" name="solid_5"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="solid_5" name="solid_5"
                                                            style="height: 100px"><?php echo $formRecordsData[0]->Solid_5; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-center" scope="col">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="solid_6" name="solid_6"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="solid_6" name="solid_6"
                                                            style="height: 100px"><?php echo $formRecordsData[0]->Solid_6; ?></textarea>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-center" scope="col">
                                                        <?php if($edit === false){ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="solid_7" name="solid_7"
                                                            style="height: 100px"></textarea>
                                                        <?php }else{ ?>
                                                        <textarea class="form-control" placeholder="Type Here"
                                                            id="solid_7" name="solid_7"
                                                            style="height: 100px"><?php echo $formRecordsData[0]->Solid_7; ?></textarea>
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
                                <div class="card-header">
                                    <h4>Compensatory feeding strategies</h4>
                                </div>
                                <div class="card-body">
                                    <h5>Tube feeding information</h5>
                                    <br>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Current tube type :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="tube_feeding_info_1"
                                                name="tube_feeding_info_1" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="tube_feeding_info_1"
                                                name="tube_feeding_info_1"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Tube_Feeding_Info_1; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> % of calories intake :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="tube_feeding_info_2"
                                                name="tube_feeding_info_2" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="tube_feeding_info_2"
                                                name="tube_feeding_info_2"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Tube_Feeding_Info_2; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Type of formula :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="tube_feeding_info_3"
                                                name="tube_feeding_info_3" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="tube_feeding_info_3"
                                                name="tube_feeding_info_3"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Tube_Feeding_Info_3; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Bolus or continuous food :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="tube_feeding_info_4"
                                                name="tube_feeding_info_4" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="tube_feeding_info_4"
                                                name="tube_feeding_info_4"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Tube_Feeding_Info_4; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Vomiting or other problem during feeding :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="tube_feeding_info_5"
                                                name="tube_feeding_info_5" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="tube_feeding_info_5"
                                                name="tube_feeding_info_5"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Tube_Feeding_Info_5; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <h5>Tube feeding shedule</h5>
                                    <br>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Time :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="tube_feeding_shedule_1"
                                                name="tube_feeding_shedule_1" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="tube_feeding_shedule_1"
                                                name="tube_feeding_shedule_1"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Tube_Feeding_Shedule_1; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Amount :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="tube_feeding_shedule_2"
                                                name="tube_feeding_shedule_2" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="tube_feeding_shedule_2"
                                                name="tube_feeding_shedule_2"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Tube_Feeding_Shedule_2; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Nutrition</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Current weight of child :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="nutrition_1"
                                                name="nutrition_1" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="nutrition_1"
                                                name="nutrition_1"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Nutrition_1; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Current height of child :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="nutrition_2"
                                                name="nutrition_2" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="nutrition_2"
                                                name="nutrition_2"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Nutrition_2; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Remarks on the child’s body built :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="nutrition_3"
                                                name="nutrition_3" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="nutrition_3"
                                                name="nutrition_3"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Nutrition_3; ?></textarea>
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
                                            <textarea class="form-control" placeholder="Type Here" id="remarks"
                                                name="remarks" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="remarks"
                                                name="remarks"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Remarks; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Recommendations :</label>
                                        <div class="col-sm-10">
                                            <?php if($edit === false){ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="recommendations"
                                                name="recommendations" style="height: 100px"></textarea>
                                            <?php }else{ ?>
                                            <textarea class="form-control" placeholder="Type Here" id="recommendations"
                                                name="recommendations"
                                                style="height: 100px"><?php echo $formRecordsData[0]->Recommendations; ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <?php if($action == 1){ ?>
                            <?php if($edit === true): ?>
                            <button type="submit" class="btn btn-primary float-right" name="edit_feeding_proforma"
                                id="edit_feeding_proforma">Submit</button>
                            <?php else: ?>
                            <button type="submit" class="btn btn-primary float-right" name="add_feeding_proforma"
                                id="add_feeding_proforma">Submit</button>
                            <?php endif; ?>
                        <?php } ?>    
                    </div>
                </div>
            </div>
        </form>
    </div>


</div>