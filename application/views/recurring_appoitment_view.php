
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Recurring Appointment Details</h5>
                </div>
            </div>
            <div class="d-flex align-items-center flex-wrap">
                <?php if($this->main_model->getRecurringAppById($apt_id)[0]->Status == 1) { ?>
                    <a onclick="openModal()" class="btn btn-danger mt-8" style="float: right">Cancel</a>&nbsp;&nbsp;
                <?php } ?>
                <a href="<?php echo base_url;?>recurring-appointment-list" class="btn btn-warning mt-8" style="float: right">Back</a>
            </div>
        </div>
    </div>

    
<div id="myModal" class="modal fade lg" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" style="width: 80% !important;">
        <?php 

            $countSheduleDates = 0;
            $countAttend = 0;
            $feesAmount = 0;
            $advenceAmount = 0;
            $refund = 0;
            $collect = 0;

            $countSheduleDates = $this->main_model->getCountSheduleDates($apt_id);
            $countAttend = $this->main_model->getCountAttend($apt_id);
            $feesAmount = $list[0]->Fees;
            $advenceAmount = $this->main_model->getRecurringAppPaymentById($apt_id)[0]->Fees;
            $refund = $this->main_model->getRecurringAppPaymentById($apt_id)[0]->Fees - $list[0]->Fees;

            if($countAttend > 0){
                $perAmount = $feesAmount / $countSheduleDates;
                $let_collect = $perAmount * $countAttend;
                if($advenceAmount > 0){
                    if($feesAmount > $advenceAmount){
                        if($advenceAmount > $let_collect){
                            $collect = $advenceAmount - $let_collect;
                        }else{
                            $collect = $let_collect - $advenceAmount;
                        }
                    }else if($feesAmount == $advenceAmount){
                        if($advenceAmount > $let_collect){
                            $refund = $advenceAmount - $let_collect;
                        }
                    }else{
                        $refund = $advenceAmount - $let_collect;
                    }
                }else{
                    $collect = $let_collect;
                }
            }else{
                if($advenceAmount > 0){
                    if($feesAmount > $advenceAmount){
                        $refund = $advenceAmount;
                    }else{
                        $refund = $advenceAmount;
                    }
                }
            }

        ?>
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Cancel Appointment</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-lg-2">
                            <label for="usr">Shedules Dates</label>
                            <p><?php echo $countSheduleDates; ?></p>
                        </div>
                        <div class="form-group col-lg-2">
                            <label for="usr">Attend </label>
                            <p><?php echo $countAttend; ?></p>
                        </div>
                        <div class="form-group col-lg-2">
                            <label for="usr">Recurring Fees </label>
                            <p><?php echo $feesAmount; ?></p>
                        </div>
                        <div class="form-group col-lg-2">
                            <label for="usr">Advanced </label>
                            <p><?php echo $advenceAmount; ?></p>
                        </div>
                        <div class="form-group col-lg-2">
                            <label for="usr">Refund </label>
                            <p id="refund">
                                <?php 
                                    if($refund > 0){
                                        echo $refund;
                                    }else{
                                        echo 0;
                                    } 
                                ?>
                            </p>
                        </div>
                        <div class="form-group col-lg-2">
                            <label for="usr">Collect </label>
                            <p id="collect">
                                <?php 
                                    if($collect > 0){
                                        echo $collect;
                                    }else{
                                        echo 0;
                                    }
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-7"></div>
                    <button type="submit" class="btn btn-danger col-lg-3" onclick="deleteAppointment(<?php echo $apt_id; ?>)">Cancel Appointment</button>
                    <button data-dismiss="modal" class="btn col-lg-2">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>

    
    <div class="d-flex flex-column-fluid">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <div class="card card-custom">
                        <?php foreach($list as $item): ?>
                        <div class="card-body mb-1">
                                <div class="row">
                                    <div class="form-group col-lg-3">
                                        <label for="usr">Patient Name:</label>
                                        <div><b><?php echo $item->Patient_Name; ?></b></div>
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label for="usr">Gender:</label>
                                        <div><b><?php echo $item->Patient_Gender; ?></b></div>
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label for="usr">Age:</label>
                                        <div><b><?php echo $item->Patient_Age; ?></b></div>
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label for="usr">Referred From:</label>
                                        <div><b><?php echo ($item->Referred_From !== "0" && $item->Referred_From !== "-" && $item->Referred_From !== "" && $item->Referred_From !== "null") ? $this->main_model->getReferredData($item->Referred_From)[0]->Doctor_Name : "-"; ?></b></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-3">
                                        <label for="usr">Start Date:</label>
                                        <div><b><?php echo $item->Start_Date; ?></b></div>
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label for="usr">Fees:</label>
                                        <div><b>₹ <?php echo $item->Fees; ?></b></div>
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label for="usr">Payment Collected:</label>
                                        <div><b>₹ <?php echo $this->main_model->getRecurringAppPaymentById($item->Id)[0]->Fees; ?></div>
                                    </div>
                                    <div class="form-group col-lg-3" style="max-width: unset;">
                                        <label for="usr">Note:</label>
                                        <div><b><?php echo $item->Note; ?></b></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3 class="card-title ml-n6">
                                            <span class="card-label font-weight-bolder font-size-h4 text-dark-75" style="margin-left: 15px;">Procedure List</span>
                                        </h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="table-responsive">
                                        <table class="table" id="table1">
                                            <thead>
                                                <tr>
                                                    <th>SR</th>
                                                    <th>Date</th>
                                                    <th>Procedure Name</th>
                                                    <th>Professional Name</th>
                                                    <th>Status</th>
                                                </tr>
                                            <thead>
                                            <tbody>
                                                <?php $i=1; foreach ($procedure_list as $item): ?>
                                                    <?php if($item->Status !== '-1'){ ?>
                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $item->Date; ?></td>
                                                        <td>
                                                            <?php
                                                                foreach($this->main_model->getProcedureById($item->Procedure_Id) as $procedure) :
                                                                    echo $procedure->Procedure_Name;
                                                                endforeach;
                                                            ?>
                                                        </td>
                                                        
                                                        <td>
                                                            <?php
                                                                foreach($this->main_model->getDoctorById($item->Doctor_Id) as $doctor) :
                                                                    echo $doctor->Name;
                                                                endforeach;
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php if($item->Status == 2) { ?>
                                                                <div class="mb-2 mr-2 badge text-white badge-warning">Awaiting</div>
                                                            <?php } ?>
                                                            <?php if($item->Status == 0) { ?>
                                                                <div class="mb-2 mr-2 badge text-white badge-danger">Cancelled</div>
                                                            <?php } ?>
                                                            <?php if($item->Status == 1) { ?>
                                                                <div class="mb-2 mr-2 badge text-white badge-success">Attended</div>
                                                            <?php } ?>
                                                        </td>
                                                    </tr>
                                                    <?php } else { $i--; } ?>
                                                <?php $i++; endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>        
</div>    



<script>

        function openModal(){
            $('#myModal').modal({
                backdrop: 'static',
                keyboard: false
            });
        }

        function deleteProcedure(id, apt_id) {
            $.ajax({
                url: "<?php echo base_url ?>delete-procedures/" + id + '/' + apt_id,
                success: function (result) {
                    window.location.reload();
                }
            });
        }

        function deleteAppointment(id, apt_id) {

            let amount = 0;
            if(Number($("#refund").text()) > 0){
                amount = Number($("#refund").text());
            }

            if(Number($("#collect").text()) > 0){
                amount = Number($("#collect").text());
            }

            let url = "<?php echo base_url ?>";
            $.ajax({
                url: "<?php echo base_url ?>cancel-recurring-appoitment/" + id + "/" + amount,
                success: function (result) {
                    location.replace(url+'recurring-appointment-list');
                }
            });
        }
</script