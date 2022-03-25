<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container row">
            <!--begin::Info-->
            <div class="col-lg-4">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Calendar</h5>
                </div>
                <!--end::Page Heading-->
            </div>
            </div>
            <div class=" col-lg-8">
                <div class="row">
                    <?php if($this->session->userdata('Role') != 2 && $this->session->userdata('Role') != 3): ?>
                    <div class="form-group col-lg-4">
                        <label for="usr">Doctor:</label>
                        <select class="selectpicker form-control" id="app_patient" name="patient" data-live-search="true"
                            required onchange="location.replace('<?php echo base_url; ?>calendar/'+this.value)">
                            <option selected disabled>Select Doctor</option>
                            <?php foreach($this->main_model->getDoctorsData($this->session->userdata('Branch_Id')) as $item): ?>
                                <option data-tokens="<?php echo $item->Name; ?>"value="<?php echo $item->Id; ?>"><?php echo $item->Name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <?php endif; ?>
                    <?php if($doctorId != ""): ?>
                    <div class="form-group col-lg-4">
                        <label for="usr">Month:</label>
                        <input type="month" class="form-control" onchange="location.replace('<?php echo base_url; ?>calendar/<?php echo $doctorId; ?>/'+this.value)">
                    </div>
                    <?php endif; ?>
                    
                    <div class="col-lg-4">
                        <?php if($doctorId){ ?>
                        <a onclick="window.history.go(-1)" class="btn btn-danger mt-8">Back</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <p id="errorMsg" style="Color:Red"><?php echo $error_msg; ?></p>
            <p id="successMsg" style="Color:green"><?php echo $success_msg; ?></p>
            <?php if($doctorId != ""): ?>
                <div class="row">
                    <div class="col-lg-12" id="AptTable">
                        <div class="card card-custom  gutter-b">
                            <div class="card-header border-0 pt-1">
                                <h3 class="card-title ml-n6">
                                    <span class="card-label font-weight-bolder font-size-h4 text-dark-75">
                                    Monthly Calendar - 
                                    <?php 
                                        foreach($this->main_model->getDoctorsData($this->session->userdata('Branch_Id')) as $item):
                                            if ($item->Id === $doctorId) {
                                                echo $item->Name;
                                            }
                                        endforeach;        
                                    ?>
                                    <small>(Showing Results for  <?php echo $month,'-'.$year; ?>)</small>
                                    </span>
                                </h3>
                            </div>
                            <div class="card-body d-flex align-items-center justify-content-between pt-0 flex-wrap">
                                <?php
                                    $slots = $this->main_model->getSlotData($doctorId);
                                ?>
                                <table class="table table-bordered">
                                    <thead>
                                        
                                            <tr>
                                                <th class="text-center"><i class="fa fa-long-arrow-down" aria-hidden="true"></i> Date / Slots <i class="fa fa-long-arrow-right" aria-hidden="true"></i></th>
                                                <?php foreach($slots as $item): ?>
                                                <th class="text-center"><?php echo $item->Open_Time; ?> -  <?php echo $item->Close_Time; ?></th>
                                                <?php endforeach; ?>
                                            </tr>
                                    </thead>
                                    <tbody>
                                        <?php for($i = 1;$i<=$days;$i++){ ?>
                                        <tr >
                                            <td class="text-center"><?php echo $i. '-'.$month.'-'.$year ; ?></td>

                                            <?php foreach($slots as $item): 
                                                $q = $this->main_model->getAllocatedSlots($item->Id,$year.'-'.$month.'-'.$i);
                                                ?>
                                                
                                                <?php if(count($q) > 0): ?>
                                                    <td>
                                                        <?php foreach($q as $item) : ?>
                                                            <?php if($item->Status == -1){ ?>
                                                                <a class="btn btn-danger btn-sm" style="width: 100%;"> 
                                                                    <?php echo $item->Patient_Name; ?>
                                                                </a>
                                                            <?php } else if($item->Status == 1 || $item->Status == 2) { ?>
                                                                <a class="btn btn-primary btn-sm" style="width: 100%;"> 
                                                                    <?php echo $item->Patient_Name; ?>
                                                                </a>
                                                            <?php } ?>    
                                                        <?php endforeach; ?>
                                                    </td>
                                                <?php else: ?>
                                                    <td style="background:#ffffff"></td>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>


