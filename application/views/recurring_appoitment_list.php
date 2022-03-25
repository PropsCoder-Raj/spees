<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Appointments</h5>
                    

                </div>
                <!--end::Page Heading-->
            </div>
            
            
                <div class="d-flex align-items-center flex-wrap">
                    <?php if($this->session->userdata('Role') == 4 || $this->session->userdata('Role') == 1): ?>    
                        <a class="btn btn-warning btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3" href="<?php echo base_url; ?>calendar">Calendar</a>        
                    <?php endif; ?>
                    <?php if($this->session->userdata('Role') == 4 || $this->session->userdata('Role') == 6): ?>
                        
                        <button class="btn btn-primary btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3"
                            data-toggle="collapse" data-target="#appoitmentCard">Schedule Recurring Appointment</button>
                    <?php endif; ?>
                </div>
            
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            
            <p id="successMsg" style="Color:green"><?php echo $success_msg; ?></p>
            <div class="row collapse" id="appoitmentCard">
                <div class="col-xl-12 col-xxl-12">
                    <div class="card card-custom">
                        <div class="card-header flex-wrap border-0 pt-6 pb-0">
                            <div class="card-title">
                                <h3 class="card-label">Schedule Recurring Appointment
                                </h3>
                            </div>
                        </div>
                        <div class="card-body py-0 mb-1">
                            <p style="Color:Red"><?php echo $error_msg; ?></p>
                            <p style="Color:green"><?php echo $success_msg; ?></p>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="usr">Patient:</label>
                                        <select class="selectpicker form-control" id="app_patient" name="patient" data-live-search="true"
                                            required>
                                            <option selected disabled>Select Patient</option>
                                            <?php foreach($this->main_model->getPatientData() as $item): ?>
                                            <?php echo $item->Name; ?>
                                            <option
                                                data-tokens="<?php echo $item->Name.' '.$item->Aadhar.' '.$item->Mobile.' '.$item->Pan; ?>"
                                                value="<?php echo $item->Id; ?>"><?php echo $item->Name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <label for="usr">Referred From:</label>
                                        <select class="selectpicker form-control" id="app_referred" name="referredFrom"
                                            data-live-search="true" required>
                                            <option value="-" selected>None</option>
                                            <?php foreach($this->main_model->getReferredData() as $item): ?>
                                            <?php echo $item->Name; ?>
                                            <option
                                                data-tokens="<?php echo $item->Hospital_Name.' '.$item->Doctor_Name; ?>"
                                                value="<?php echo $item->Id; ?>"><?php echo $item->Hospital_Name.' - '.$item->Doctor_Name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <label for="usr">Start Date:</label>
                                        <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>"
                                            name="app_startDate" id="app_startDate" required>
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <label for="usr">Fees:</label>
                                        <input type="number" class="form-control"
                                            name="app_fees" id="app_fees" required>
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <label for="usr">Note:</label>
                                        <textarea type="text" class="form-control" value="" name="note" id="app_note"
                                            required></textarea>
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <label for="usr">Status :</label>
                                        <select class="selectpicker form-control" id="app_status" name="status"
                                            data-live-search="true" required>
                                            <option value="1" selected>Active</option>
                                        </select>
                                    </div>2

                                </div>
                                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h3>Add Procedure</h3>
                                        <br>
                                        <div class="row">
                                            <div class="form-group col-lg-12">
                                                <label for="usr">Date:</label>
                                                <input type="date" class="form-control" id="app_date">
                                            </div>
                                            <div class="form-group col-lg-12">
                                                <label for="usr">Procedure:</label>
                                                <select class="form-control" id="app_procedure">
                                                    <option selected disabled>Select Procedures</option>
                                                    <?php foreach($this->main_model->getProcedures() as $item): ?>
                                                    <option value="<?php echo $item->Procedures_Id; ?>">
                                                        <?php echo $item->Procedure_Name.'- ₹'.$item->Fees; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-12">
                                                <label for="usr">Repeat No. of Days :</label>
                                                <input type="number" class="form-control" id="app_daycount" onkeyup="getDatesAll()">
                                            </div>
                                            <div class="form-group col-lg-12">
                                                <label for="usr">Interval Days :</label>
                                                <input type="number" class="form-control" value="0" id="app_intervalDay" onkeyup="intervalDay()">
                                            </div>
                                            <div class="form-group col-lg-12">
                                                <div id="dateListShow"></div>
                                            </div>    
                                            <div class="form-group col-lg-12">
                                                <button type="button" onclick="addProcedure()" class="btn btn-warning col-lg-4">Add</button>
                                                <button type="button" id="CopyProcedure" style="display: none;" onclick="copyProcedure()" class="btn btn-warning col-lg-4">Copy last row</button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-8">
                                        <div class="table-responsive">
                                            <table class="table" id="ProcedureTable">
                                                <thead>
                                                    <tr>
                                                        <!-- <th>SR</th> -->
                                                        <th>Date</th>
                                                        <th>Procedure Name</th>
                                                        <th>Professionals</th>
                                                        <th></th>
                                                    </tr>
                                                <tbody>

                                                </tbody>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                                <bR>
                                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                                <br>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p id="errorMsg" style="Color:Red"><?php echo $error_msg; ?></p>
                                        <button type="button" onclick="createAppointment()" class="btn btn-primary w-100">Submit</button>
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
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Recurring Appointments</span>
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
                                            <th>Referred From</th>
                                            <th>Start Date</th>
                                            <th>Fees</th>
                                            <th>Payment Collected</th>
                                            <th>Note</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        <thead>
                                        <tbody>
                                            <?php $i = 1; foreach($this->main_model->getFullRecurringAppoitment($this->session->userdata('Branch_Id')) as $item){ ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $item->Prefix; ?>. <?php echo $item->Patient_Name; ?></td>
                                                <td><?php echo $item->Patient_Gender; ?></td>
                                                <td><?php echo $item->Patient_Age; ?></td>
                                                <td><?php echo ($item->Referred_From !== "0" && $item->Referred_From !== "-" && $item->Referred_From !== "" && $item->Referred_From !== "null") ? $this->main_model->getReferredData($item->Referred_From)[0]->Doctor_Name : "-"; ?></td>
                                                <td><?php echo $item->Start_Date; ?></td>
                                                <td>₹ <?php echo $item->Fees; ?></td>
                                                <td>₹ <?php echo $this->main_model->getRecurringAppPaymentById($item->Id)[0]->Fees; ?></td>
                                                <td>
                                                    <p data-toggle="tooltip" title="<?php echo $item->Note; ?>"><?php echo $item->Note; ?> </p>
                                                </td>
                                                <td>
                                                            <?php if($item->Status == 1) { ?>
                                                                <div class="mb-2 mr-2 badge text-white badge-success">Active</div>
                                                            <?php } ?>
                                                            <?php if($item->Status == 0) { ?>
                                                                <div class="mb-2 mr-2 badge text-white badge-danger">Cancelled</div>
                                                            <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if($this->session->userdata("Role") == 4){ ?>
                                                        <button onclick="showPaymentCollection('<?php echo $item->Id; ?>','<?php echo $item->Patient_Name; ?>')" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></button>
                                                        <button onclick="viewRP('<?php echo $item->Id; ?>')" class="btn btn-danger btn-sm"><i class="fa fa-eye"></i></button>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <?php $i++; } ?>
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


<script>

    let intervalDayCount = 0;                                                   

    $(document).ready(function(){
        $('#table1').DataTable();
        $('#table2').DataTable();
        $('#table3').DataTable();
    });

    function viewRP(id) {
        window.location.replace('<?php echo base_url; ?>recurring-appointment-view/'+id);
    }

    var selectDateArray = [];
    var procedureList = [];

    function intervalDay() {
        intervalDayCount = $("#app_intervalDay").val();
        getDatesAll();
    }

    Date.prototype.addDays = function(days) {
       var dat = new Date(this.valueOf())
       dat.setDate(dat.getDate() + days);
       return dat;
    }

    function getDates(startDate, stopDate) {
        var num = Number(intervalDayCount) + 1;  
        var dateArray = new Array();
        var currentDate = startDate;
        while (currentDate <= stopDate) {
                var str = formatDate(currentDate);
                if(Number(currentDate.getDay()) != 0){ dateArray.push({date: str, status: true}) }
                currentDate = currentDate.addDays(num);
        }
        return dateArray;
    }

    function formatDate(date) {
        var d = new Date(date),
            month = '' + (d.getMonth() + 1),
            day = '' + d.getDate(),
            year = d.getFullYear();

        if (month.length < 2) 
            month = '0' + month;
        if (day.length < 2) 
            day = '0' + day;

        var _date = [day, month, year].join('-');
        var weekday=new Array(7);
        weekday[0]="Monday";
        weekday[1]="Tuesday";
        weekday[2]="Wednesday";
        weekday[3]="Thursday";
        weekday[4]="Friday";
        weekday[5]="Saturday";
        weekday[6]="Sunday";
        var _str1 = _date;
        var _str2 = _date + " " + weekday[d.getDay() -1];
        var str = { date: _str1, dateDay: _str2 };
        return str;
    }

    let alldates = [];

    function removeDate(id){
        selectDateArray[id]['status'] = false;
        $("#selectDate"+id).hide()
    }

    function getDatesAll() {
        alldates = [];
        var count = $("#app_daycount").val();
        var proId = $("#app_procedure").val();
        var date = $("#app_date").val();
        if(date !== "undefined" && date !== ''){
            var dateFormat = new Date(date);
            var sectionIs = $("#dateListShowContent").val();
            selectDateArray = getDates(dateFormat, (dateFormat).addDays(Number(count)));
            if(sectionIs !== "undefined" && sectionIs !== null){
                $("#dateListShowContent").remove();
            }
            var showData = '';
            showData += '<div id="dateListShowContent">';
            for (let index = 0; index < selectDateArray.length; index++) {
                showData = showData + `<div style="margin: 10px;text-align: center;" id="selectDate`+index+`"> Date : ` + selectDateArray[index]['date']['dateDay'] + ` <i class="fa fa-times" onclick="removeDate(`+index+`)" aria-hidden="true" style="margin-left: 25px;cursor: pointer;"></i> </div>`;
            }
            showData += '</div>';
            $("#dateListShow").append(showData);
        }
    }


    function showAttendBox(id,name){
        $("#waitingAppot").removeClass('col-lg-12');
        $("#waitingAppot").addClass('col-lg-8');
        $("#remark_patient_name").val(name);
        $("#RemarkApId").val(id);
        $("#addRemark").css('display',"block");
    }

    function closeAddRemark(){
        $("#addRemark").css('display',"none");
        $("#waitingAppot").addClass('col-lg-12');
    }

    function showPaymentCollection(id,name){
        $("#AptTable").removeClass('col-lg-12');
        $("#AptTable").addClass('col-lg-8');
        $("#collect_patient_name").val(name);
        $("#ApId").val(id);
        $("#paymentCollectionTable").css('display',"block");
    }

    function closePaymentCollection(){
        $("#paymentCollectionTable").css('display',"none");
        $("#AptTable").addClass('col-lg-12');
    }

    function showFeesBox(id,name){
        $("#attendedBox").removeClass('col-lg-12');
        $("#attendedBox").addClass('col-lg-8');
        $("#fees_patient_name").val(name);
        $("#feesApId").val(id);
        $("#addFees").css('display',"block");
    }

    function closeFeesBox(){
        $("#addFees").css('display',"none");
        $("#attendedBox").addClass('col-lg-12');
    }

    var procedureId = []; 
    var total = 0; 
    var successMsg = $("#successMsg");
    var errorMsg = $("#errorMsg");
    var activeTr = 0;
    var srno = 1;
    function addProcedure() {
            var proId = $("#app_procedure").val();
            var date = $("#app_date").val();
            var inTime = $("#app_in_time").val();
            var outTime = $("#app_out_time").val();
        if(selectDateArray.length > 1){
            var interval = 500; // how much time should the delay between two iterations be (in milliseconds)?
            
            selectDateArray.forEach((element, index, array) => {
                if(element['status'] === true){
                    setTimeout(function () {
                        procedureList.push({prodId: proId, date: element['date']['date'], status: true });
                        $("#CopyProcedure").show();
                        $.get("<?php echo base_url; ?>procedure-data-by-id-without-fees/"+proId+"/"+element['date']['date']+"/"+srno, function(data, status){
                            $('#ProcedureTable tbody').append(data);    
                            var trl = (procedureId.length == 0) ? 0 : procedureId.length - 1;
                            procedureId.push({id: proId, index: srno});
                            var tempt = $("#feesId"+proId).text();
                            $("#app_procedure").val("");
                            // $("#ProcedureTable tbody tr:eq("+ trl+") #rbtn").css("display","none");
                            activeTr = trl + 1;
                            srno ++;
                            if(index == array.length - 1){
                                $("#app_daycount").val('');
                                $("#app_intervalDay").val('0');
                                getDatesAll();
                            }
                            console.log(procedureId);
                            wait(1000);
                        });
                    }, index * interval);
                }    
            })
        }else{
            procedureList.push({ prodId: proId, date: date, status: true });
            if(proId !== "undefined"){
                $("#CopyProcedure").show();
                $.get("<?php echo base_url; ?>procedure-data-by-id-without-fees/"+proId+"/"+date+"/"+srno, function(data, status){
                    $('#ProcedureTable tbody').append(data);    
                    var trl = (procedureId.length == 0) ? 0 : procedureId.length - 1;
                    procedureId.push({id: proId, index: srno});
                    var tempt = $("#feesId"+proId).text();
                    $("#app_procedure").val("");
                    $("#ProcedureTable tbody tr:eq("+ trl+") #rbtn").css("display","none");
                    activeTr = trl + 1;
                    srno ++;
                    $("#app_daycount").val('');
                    $("#app_intervalDay").val('0');
                    getDatesAll();
                });
            }
        }
        
    }

    function copyProcedure() {
        var cnt = procedureList.length - 1;
        console.log(procedureList[cnt].prodId);
        console.log(procedureList[cnt].date);
        if(procedureList[cnt].proId !== "undefined"){
            $.get("<?php echo base_url; ?>procedure-data-by-id-without-fees/"+procedureList[cnt].prodId+"/"+procedureList[cnt].date+"/"+srno, function(data, status){
                $('#ProcedureTable tbody').append(data);    
                var trl = (procedureId.length == 0) ? 0 : procedureId.length - 1;
                procedureId.push({id:procedureList[cnt].prodId, index: srno});
                var tempt = $("#feesId"+procedureList[cnt].prodId).text();
                $("#app_procedure").val("");
                $("#ProcedureTable tbody tr:eq("+ trl+") #rbtn").css("display","none");
                activeTr = trl + 1;
                srno ++;
                procedureList.push({ prodId: procedureList[cnt].prodId, date: procedureList[cnt]['date'], status: true });
                $("#app_daycount").val('');
                $("#app_intervalDay").val('0');
                getDatesAll();
            });
        }
        
    }

    function createAppointment(){

        var patient = $("#app_patient").val();
        var referredFrom = $("#app_referred").val();
        var startDate = $("#app_startDate").val();
        var fees = $("#app_fees").val();
        var note = $("#app_note").val();
        var status = $('#app_status').val();
        var inputErrorCount = 0;
        var i = 0;
        
        if(patient != "" && patient != null && startDate != "" && startDate != null && fees != "" && fees != null && status != "" && status != null){

            if(procedureId.length === 0){
                showError("Add Procedure");
                return false;
            }
            
            for(i = 0;i<procedureId.length;i++){
                    var trid = procedureId[i]['index'];
                    var input = $("input[name=radio"+trid+"]:checked").val();
                    if(input == undefined || input == null || input == ""){
                        showError("Please Select Slot");
                        return false;
                    }
            }

            $.post("<?php echo base_url; ?>create-recurring-appointment",
            {
                patient: patient,
                referredFrom: referredFrom,
                startDate: startDate,
                fees: fees,
                days: "",
                bufferDays: "",
                note: note,
                status: status
            },
            function(data, status){
                const obj = JSON.parse(data);

                    if(obj.status == "success"){
                        const recuId = obj.id;
                        for(var i = 0;i<procedureId.length;i++){
                            var trid = procedureId[i]['index'];
                            $.post("<?php echo base_url; ?>create-r-appointment",
                            {
                                patient: patient,
                                drid: $("#proId"+procedureId[i]['id']).val(),
                                note: note,
                                date: procedureList[i]['date'],
                                slotId: $("input[name=radio"+trid+"]:checked").val(),
                                referredFrom:referredFrom,
                                procedure_Id: procedureId[i]['id'],
                                fees: 0,
                                Recurring_Appointment_Id: recuId,
                                Appointment_Type: 2
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

    function GetFormattedDate(date) {
        var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

        if (month.length < 2) 
            month = '0' + month;
        if (day.length < 2) 
            day = '0' + day;

        return [year, month, day].join('-');
    }

    function removeId(procId){
        let number = Number(procId) - 1;
        $("#tr" + procId).hide();

        procedureId.forEach((element, index, array) =>{
            console.log(element['index'] +"-"+ procId);
            if(Number(element['index']) == Number(procId)){
                procedureId.splice(index, 1);
                procedureList.splice(index, 1);   
            }
        })
        // console.log("activetr : "+procId);
        // procedureId.pop(procId);
        // $("#ProcedureTable tbody tr:eq("+ activeTr+")").remove();
        // let trl = activeTr -1;
        // // $("#ProcedureTable tbody tr:eq("+ trl +") #rbtn").css("display","block");
        // procedureList.splice(activeTr, 1);
        // if(procedureList.length === 0){
        //     $("#CopyProcedure").hide();
        // }
        // activeTr --;
        // srno --;
    }

    function showError(msg){
        errorMsg.text(msg);
        setTimeout(function(){ errorMsg.text(" ") }, 2000);
    }

    function showSuccess(msg){
        successMsg.text(msg);
        setTimeout(function(){ successMsg.text(" ") }, 2000);
    }


    function checkAvail(row,proId){
        $('#avail'+row).empty();    
        var doctorId = $("#ProcedureTable tbody #tr"+row+" select").val();
        var date = $("#ProcedureTable tbody #tr"+row+" #dateId"+proId).text().trim();

        $.get("<?php echo base_url; ?>getDoctorAvailableSlots/"+doctorId+"/"+date+"/"+row, function(data, status){
            
            $('#avail'+row).append(data);    
            
            console.log(data);
        });

        
        console.log(date);
    }
</script>