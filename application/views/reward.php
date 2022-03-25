<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Rewards</h5>
                    <!--end::Page Title-->

                </div>
                <!--end::Page Heading-->
            </div>
            <div class="d-flex align-items-center flex-wrap">
				<?php if($edit): ?>
                    <a href="<?php echo base_url; ?>branches" class="btn btn-danger btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3">Back</a>
                <?php else: ?>
				    <button class="btn btn-primary btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3" data-toggle="collapse" data-target="#branchCard">Settle Points</button>
                <?php endif; ?>
			</div>
        </div>
    </div>
    
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <p style="Color:Red"><?php echo $error_msg; ?></p>
            <p style="Color:green"><?php echo $success_msg; ?></p>
            <div class="row <?php if(!$edit) echo "collapse"; ?> " id="branchCard">
                <div class="col-lg-12">
                    <div class="card card-custom  gutter-b">
                        <div class="card-header border-0 pt-1">
                            <h3 class="card-title ml-n6">
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Settle Points</span>
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="usr">Professional Name:</label>
                                    <select class="selectpicker form-control" name="doctorId" data-live-search="true" required onchange="getRewards(this.value)">
                                        <option selected disabled>Select Professional</option>
                                        <?php foreach($this->main_model->getDoctors() as $item): ?>
                                        <option
                                            data-tokens="<?php echo $item->Name.' '.$item->Aadhar.' '.$item->Mobile.' '.$item->Pan; ?>"
                                            value="<?php echo $item->Id; ?>"><?php echo $item->Name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="pwd">Balance Points:</label>
                                    <input type="number" class="form-control" id="rewardPointInput" readonly disabled>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-4">
                                    <label for="pwd">Settle Points:</label>
                                    <input type="number" class="form-control" name="settlePoints" required value="" id="settlePoints">
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="pwd">Per Point Amount:</label>
                                    <input type="number" class="form-control" onkeyup="calculateAmount(this.value)" name="perPointCost" id="perPointCost" required value="">
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="pwd">Total Amount:</label>
                                    <input type="number" class="form-control" name="totalAmount" id="totalAmount" required readonly>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="pwd">Remark</label>
                                    <textarea type="number" class="form-control" name="remark"></textarea>
                                </div>
                            </div>
                            
                            <div class="row">
                                <button type="submit" name="add_rewards" class="btn btn-primary col-lg-2">Submit</button>
                            </div>     
                            </form>                       
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-custom  gutter-b">
                        <div class="card-header border-0 pt-1">
                            <h3 class="card-title ml-n6">
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Settlement
                                    Transactions</span>
                            </h3>
                        </div>
                        <div class="card-body d-flex align-items-center justify-content-between pt-0 flex-wrap">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>SR</th>
                                        <th>Professional Name</th>
                                        <th>Settled Points</th>
                                        <th>PPC</th>
                                        <th>Total</th>
                                        <th>Date</th>
                                    </tr>
                                <thead>
                                <tbody>
                                    <?php $i = 1; foreach($this->main_model->getRewardSettlementTrans() as $item){ ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $this->main_model->getUserDataById($item->User_Id)[0]->Name; ?></td>
                                            <td><?php echo $item->Points; ?></td>
                                            <td><?php echo $item->Per_Point; ?></td>
                                            <td><?php echo $item->Total_Amount; ?></td>
                                            <td><?php echo $item->Created_On; ?></td>
                                        </tr>
                                    <?php $i++; } ?>
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
var rewardInput = $("#rewardPointInput");

function getRewards(id) {
    rewardInput.val("");
    $.ajax({
        url: "<?php echo base_url ?>getDoctorReward/" + id,
        success: function (result) {
            console.log(result);
            rewardInput.val(result);
        }
    });
}

    function calculateAmount(amount) {
        var settlePoints = $("#settlePoints").val();

        $("#totalAmount").val(settlePoints*amount);
    }
</script>


<script>
    $(document).ready(function(){
        $('#table1').DataTable();
        $('#table2').DataTable();
        $('#table3').DataTable();
    });
</script>