<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Payment Receipt</h5>
                    <!--end::Page Title-->
                </div>
                <!--end::Page Heading-->
            </div>

            <!-- <div class="d-flex align-items-center flex-wrap">
            <button class="btn btn-primary btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3" style="float: right" data-toggle="collapse" data-target="#paymentReceiptCard">Create Payment Receipt</button>   
            </div> -->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="margin-top:20px">
                    <div class="tab-content">
                        <div class="tab-pane containe active" id="Payment">
                            <div class="row collapse" id="paymentReceiptCard">
                                <div class="col-lg-12">
                                    <div class="card card-custom">
                                        <div class="card-header flex-wrap border-0 pt-6 pb-0">
                                            <div class="card-title">
                                                <h3 class="card-label">Payment Receipt</h3>
                                            </div>
                                        </div>
                                        <div class="card-body py-0 mb-1">
                                            <p id="successMsg" style="color:green"><?php echo $success_msg; ?></p>
                                            <p id="errorMsg" style="color:red"><?php echo $error_msg; ?></p>
                                            <form action="" method="POST" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="form-group col-lg-6">
                                                        <label>Patient:</label>
                                                        <select class="selectpicker form-control" id="app_patient" name="patient" data-live-search="true"
                                                            required>
                                                            <option selected disabled>Select Patient</option>
                                                            <?php foreach($this->main_model->getPatientData() as $item): ?>
                                                            <?php echo $item->Name; ?>
                                                                <?php if($item->Branch_Id == $this->session->userdata('Branch_Id')) { ?>
                                                                    <option data-tokens="<?php echo $item->Name.' '.$item->Aadhar.' '.$item->Mobile.' '.$item->Pan; ?>" value="<?php echo $item->Id; ?>"><?php echo $item->Name; ?></option>
                                                                <?php } ?>    
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-lg-6">
                                                        <label>Sum of rupees:</label>
                                                        <input type="number" class="form-control" id="app_sum_of_rupees" name="sum_of_rupees" placeholder="Enter Sum of rupees" required>
                                                    </div>
                                                    
                                                    <div class="form-group col-lg-6">
                                                        <label>Mode of Payment:</label>
                                                        <select class="selectpicker form-control" id="app_mode_of_payment" name="mode_of_payment" data-live-search="true" onchange="changePaymentMode()" required>
                                                            <option selected disabled>Select</option>
                                                            <option value="Cash">Cash</option>
                                                            <option value="Online">Online</option>
                                                            <option value="Cheque">Cheque</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-lg-6" id="cheque_no_section" style="display: none">
                                                        <label>Cheque No.:</label>
                                                        <input type="number" class="form-control" id="app_cheque_no" name="cheque_no" placeholder="Enter Cheque No" value="0" required>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <h4 class="card-label">Procedures</h4>
                                                        <div class="row">
                                                            <div class="form-group col-lg-12">
                                                                <label for="usr">Procedure:</label>
                                                                <select class="form-control" id="app_procedure" onchange="addProcedure()">
                                                                    <option selected disabled>Select Procedures</option>
                                                                    <?php foreach($this->main_model->getProcedures() as $item): ?>
                                                                    <option value="<?php echo $item->Procedures_Id; ?>">
                                                                        <?php echo $item->Procedure_Name.'- ₹'.$item->Fees; ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>    
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="table-responsive">
                                                            <table class="table" id="ProcedureTable">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Procedure Name</th>
                                                                        <th>Fees</th>
                                                                        <th>Professionals</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                <tbody>

                                                                </tbody>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-lg-6">
                                                        <label>Amount :</label>
                                                        <input type="number" class="form-control" id="app_amount" name="amount" placeholder="Enter Amount" value="0" required>
                                                    </div>
                                                    <div class="form-group col-lg-12">
                                                        <button type="button" class="btn btn-warning col-lg-4" onclick="createPaymentReceipt()">Submit</button>
                                                    </div>    
                                                </div>
                                            </form>
                                        </div>            
                                    </div> 
                                </div>  
                            </div> 
                            <br>
                            <div class="row">
                                <div class="col-lg-12" id="AptTable">
                                    <div class="card card-custom  gutter-b">
                                        <div class="card-header border-0 pt-1">
                                            <h3 class="card-title ml-n6">
                                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Payment Receipt List</span>
                                            </h3>
                                        </div>
                                        <div class="card-body d-flex align-items-center justify-content-between pt-0 flex-wrap">
                                            <div class="table-responsive">
                                                <table class="table" id="table1">
                                                    <thead>
                                                        <tr>
                                                            <th>SR</th>
                                                            <th>Patient Name</th>
                                                            <th>Gender</th>
                                                            <th>Age</th>
                                                            <th>Sum Of Rupees</th>
                                                            <th>Mode Of Payment</th>
                                                            <th>Amount</th>
                                                            <th>Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        <thead>
                                                        <tbody>
                                                            <?php $index = 1; foreach($this->main_model->getPaymentReceipt($branchid) as $item){ ?>
                                                            <tr>
                                                                <td><?php echo $index; ?></td>
                                                                <td><?php echo $this->main_model->getBasicAppoitmentById($item->Appointment_Id)[0]->Prefix; ?>. <?php echo $this->main_model->getBasicAppoitmentById($item->Appointment_Id)[0]->Patient_Name; ?></td>
                                                                <td><?php echo $this->main_model->getBasicAppoitmentById($item->Appointment_Id)[0]->Patient_Gender; ?></td>
                                                                <td><?php echo $this->main_model->getBasicAppoitmentById($item->Appointment_Id)[0]->Patient_Age; ?></td>
                                                                <td>
                                                                    <?php 
                                                                        $number = $this->main_model->getBasicAppoitmentById($item->Appointment_Id)[0]->Fees;
                                                                        $no = floor($number);
                                                                        $point = round($number - $no, 2) * 100;
                                                                        $hundred = null;
                                                                        $digits_1 = strlen($no);
                                                                        $i = 0;
                                                                        $str = array();
                                                                        $words = array('0' => '', '1' => 'one', '2' => 'two',
                                                                            '3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',
                                                                            '7' => 'seven', '8' => 'eight', '9' => 'nine',
                                                                            '10' => 'ten', '11' => 'eleven', '12' => 'twelve',
                                                                            '13' => 'thirteen', '14' => 'fourteen',
                                                                            '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',
                                                                            '18' => 'eighteen', '19' =>'nineteen', '20' => 'twenty',
                                                                            '30' => 'thirty', '40' => 'forty', '50' => 'fifty',
                                                                            '60' => 'sixty', '70' => 'seventy',
                                                                            '80' => 'eighty', '90' => 'ninety');
                                                                        $digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
                                                                        while ($i < $digits_1) {
                                                                            $divider = ($i == 2) ? 10 : 100;
                                                                            $number = floor($no % $divider);
                                                                            $no = floor($no / $divider);
                                                                            $i += ($divider == 10) ? 1 : 2;
                                                                            if ($number) {
                                                                                $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
                                                                                $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
                                                                                $str [] = ($number < 21) ? $words[$number] .
                                                                                    " " . $digits[$counter] . $plural . " " . $hundred
                                                                                    :
                                                                                    $words[floor($number / 10) * 10]
                                                                                    . " " . $words[$number % 10] . " "
                                                                                    . $digits[$counter] . $plural . " " . $hundred;
                                                                            } else $str[] = null;
                                                                        }
                                                                        $str = array_reverse($str);
                                                                        $result = implode('', $str);
                                                                        $points = ($point) ?
                                                                            "." . $words[$point / 10] . " " . 
                                                                                $words[$point = $point % 10] : '';
                                                                                echo $result . "rupees";
                                                                    ?>
                                                                </td>
                                                                <td><?php echo $this->main_model->getBasicAppoitmentById($item->Appointment_Id)[0]->Fees_Paid_Type; ?></td>
                                                                <td>₹ <?php echo $this->main_model->getBasicAppoitmentById($item->Appointment_Id)[0]->Fees; ?></td>
                                                                <td><?php echo date_format( date_create($this->main_model->getBasicAppoitmentById($item->Appointment_Id)[0]->Created_on), 'd/m/Y'); ?></td>
                                                                <td><a style="cursor:pointer" class="btn btn-danger btn-sm" href="print-invoice/<?php echo $item->Appointment_Id; ?>" target="_blank" data-toggle="tooltip" title="Print Invoice"><i class="fa fa-print"></i></a></td>
                                                            </tr>
                                                            <?php $index++; } ?>
                                                        </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4" id="paymentCollectionTable" style="display:none">
                                    <div class="card card-custom  gutter-b">
                                        <div class="card-header border-0 pt-1">
                                            <h3 class="card-title ml-n6">
                                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Collect Payment</span>
                                            </h3>
                                        </div>
                                        <div class="card-body">
                                            <form action="" method="POST" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="form-group col-lg-12">
                                                        <label for="usr">Patient Name:</label>
                                                        <input type="text" class="form-control" id="collect_patient_name" readonly="readonly" disabled>
                                                        <br>
                                                        <label for="usr">Amount:</label>
                                                        <input type="number" class="form-control" name="collect_amount" id="collect_amount">
                                                        <input type="hidden" name="apId" id="ApId">
                                                        <br>
                                                        <label for="usr">Type:</label>
                                                        <select class="form-control" id="fees_type" name="fees_type">
                                                                <option selected disabled>--Select--</option>
                                                                <option value="Online">Online</option>
                                                                <option value="Cash">Cash</option>
                                                        </select>
                                                        <br>
                                                        <label>Remark:</label>
                                                        <input type="text" class="form-control" name="remark" id="remark">
                                                    </div>
                                                </div>
                                                <button type="submit" name="add_payment" class="btn btn-primary col-lg-4">Submit</button>
                                                <button onclick="closePaymentCollection()"; class="btn btn-link col-lg-4">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>      
                </div>
            </div>    
        </div>
    </div>        
</div>    

<script>
                                                 

    $(document).ready(function(){
        $('#table1').DataTable();
    });

    var procedureId = []; 
    var total = 0; 
    var successMsg = $("#successMsg");
    var errorMsg = $("#errorMsg");
    var activeTr = 0;
    var srno = 1;
    var procedureList = [];

    function changePaymentMode(){
        let mode = $("#app_mode_of_payment").val();
        if(mode == 'Cheque'){
            $("#cheque_no_section").show();
        }else{
            $("#cheque_no_section").hide();
        }
    }

    function showError(msg){
        errorMsg.text(msg);
        setTimeout(function(){ errorMsg.text(" ") }, 2000);
    }

    function showSuccess(msg){
        successMsg.text(msg);
        setTimeout(function(){ successMsg.text(" ") }, 2000);
    }

    function addProcedure() {
            var proId = $("#app_procedure").val();
            if(proId !== "undefined"){
                $.get("<?php echo base_url; ?>procedure-data-by-id/"+proId, function(data, status){
                    $('#ProcedureTable tbody').append(data);    
                    var trl = (procedureId.length == 0) ? 0 : procedureId.length - 1;
                    procedureId.push({id : proId});  
                    $("#app_procedure").val("");
                    console.log("trl  : "+trl);
                    $("#ProcedureTable tbody tr:eq("+trl+") #rbtn").css("display","none");
                    activeTr = trl + 1;
                    srno++;
                });
            }    
    }

    function removeId(procId,fees){
        console.log("activetr : "+activeTr);
        procedureId.pop(procId);
        $("#ProcedureTable tbody tr:eq("+ activeTr+")").remove();
        let trl = activeTr -1;
        $("#ProcedureTable tbody tr:eq("+ trl +") #rbtn").css("display","block");
        
        total = parseInt(total)-parseInt(fees);
        $("#totalFees").text("₹ "+total);

        activeTr --;
    }

    function createPaymentReceipt(){
        var patient = $("#app_patient").val();
        var sum_of_rupees = $("#app_sum_of_rupees").val();
        var mode_of_payment = $("#app_mode_of_payment").val();
        var cheque_no = $("#app_cheque_no").val();
        var amount = $("#app_amount").val();
        var inputErrorCount = 0;
        var i = 0;

        if(patient != "" && patient != null && sum_of_rupees != "" && sum_of_rupees != null && mode_of_payment != "" && mode_of_payment != null && amount != "0" && amount != null){

            if(procedureId.length === 0){
                showError("Add Procedure");
                return false;
            }

            $.post("<?php echo base_url; ?>create-payment-receipt",
            {
                patient: patient,
                sum_of_rupees: sum_of_rupees,
                mode_of_payment: mode_of_payment,
                cheque_no: cheque_no,
                amount: amount
            },
            function(data, status){
                const obj = JSON.parse(data);
                    if(obj.status == "success"){
                        const recuId = obj.id;
                        for(var i = 0;i<procedureId.length;i++){
                            var trid = procedureId[i]['index'];
                            $.post("<?php echo base_url; ?>create-payment-receipt-procedures",
                            {
                                patient: patient,
                                drid: $("#proId"+procedureId[i]['id']).val(),
                                procedure_id: procedureId[i]['id'],
                                payment_receipt_id: recuId,
                            },
                            function(data, status){
                                showSuccess("Recurring Appointment Created");
                                setTimeout(function(){ location.reload(); }, 2000);

                            });
                        }
                    }
            });   
        } else {
            showError("All fields mandetory");
            return false;
        }

    }
</script>