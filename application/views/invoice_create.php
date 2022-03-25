<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-center flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <span class=" h5 text-dark font-weight-bold my-1 mr-5">Create Invoice</span>
                </div>
            </div>
        </div>
    </div>

    


    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <div class="card card-custom">
                        <div class="card-header flex-wrap border-0 pt-6 pb-0">
                            <div class="card-title">
                                <h3 class="card-label">Create Invoice</h3>
                            </div>
                        </div>
                        <div class="card-body py-0 mb-1">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="usr">Patient:</label>
                                        <select class="selectpicker form-control" id="app_patient" name="patient" onchange="patient_change()" data-live-search="true"
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
                                    <div class="form-group col-lg-3">
                                        <label for="sel1">Gender:</label>
                                        <select disabled class="form-control" id="app_gender" name="gender" required>
                                        <option selected disabled>Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label for="usr">Age:</label>
                                        <input disabled type="text" class="form-control" id="app_age" name="age" required>
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label for="usr">Mobile:</label>
                                        <input disabled type="number" class="form-control" id="app_mobile" name="mobile" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="usr">Address:</label>
                                        <input disabled type="text" class="form-control" id="app_address" name="address" required>
                                    </div>
                                </div>
                                <hr><br>
                                <div class="row">
                                    <div class="form-group col-lg-3">
                                        <label for="usr">Select Item:</label>
                                        <select class="selectpicker form-control" id="app_item" name="item" onchange="item_change()" data-live-search="true"
                                            required>
                                            <option selected disabled>Select Item</option>
                                            <?php foreach($this->main_model->getItemData() as $item): ?>
                                            <?php echo $item->Item_Name; ?>
                                            <option
                                                value="<?php echo $item->Item_Id; ?>"><?php echo $item->Item_Name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="table-responsive">
                                            <table class="table" id="itemTable">
                                                <thead>
                                                    <tr>
                                                        <th>Item Id</th>
                                                        <th>Item</th>
                                                        <th>MRP</th>
                                                        <th>GST (%)</th>
                                                        <th style="width: 13%">Qty</th>
                                                        <th style="width: 13%">Total</th>
                                                        <th style="width: 13%">Discount (%)</th>
                                                        <th style="width: 13%">Final Amount</th>
                                                    </tr>    
                                                </thead> 
                                                <tbody> 
                                                </tbody>   
                                                <tfoot>
                                                    <tr>
                                                        <th>Total: </th>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><input type="number" class="form-control" value="0" name="totalQty" id="totalQty" disabled></td>
                                                        <td><input type="number" class="form-control" value="0" name="totalTotal" id="totalTotal" disabled></td>
                                                        <td><input type="number" class="form-control" value="0" name="totalDiscount" id="totalDiscount" disabled></td>
                                                        <td><input type="number" class="form-control" value="0" name="totalFinalAmount" id="totalFinalAmount" disabled></td>
                                                    </tr>
                                                </tfoot>       
                                            </table>
                                        </div>        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p id="successMsg" style="color:green"><?php echo $success_msg; ?></p>
                                        <p id="errorMsg" style="color:red"><?php echo $error_msg; ?></p>
                                        <button type="button" onclick="createInvoice()" class="btn btn-primary w-100">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>

<script>

    let itemArr = []; 
    var successMsg = $("#successMsg");
    var errorMsg = $("#errorMsg");
    
    function showError(msg){
        errorMsg.text(msg);
        setTimeout(function(){ errorMsg.text(" ") }, 2000);
    }

    function showSuccess(msg){
        successMsg.text(msg);
        setTimeout(function(){ successMsg.text(" ") }, 2000);
    }

    function patient_change() {
        let pid = $("#app_patient").val();
        console.log("patient_change call : " + pid);
            if(pid !== "undefined"){
                $.get("<?php echo base_url; ?>patient-data-by-id/"+pid, function(data, status){
                    console.log(JSON.parse(data));
                    let jdata = JSON.parse(data);
                    $("#app_gender").val(jdata['Gender']);
                    $("#app_age").val(jdata['Age']);
                    $("#app_mobile").val(jdata['Mobile']);
                    $("#app_address").val(jdata['Address']);
                });
            }    
    }
    

    function item_change() {
        let iid = $("#app_item").val();
        console.log("item_change call : " + iid);
            if(iid !== "undefined"){
                $.get("<?php echo base_url; ?>item-data-by-id/"+iid, function(data, status){
                    let jdata = JSON.parse(data);
                   if(Number(jdata['Available_Stock']) > 0){  
                        itemArr.push({ ...jdata, qty: 0, dicount: 0, finalAmount: Number(jdata['MRP']) });
                        let index = itemArr.length;
                        let total = Number(jdata['MRP']);
                        let per = Number(total) / 100; 
                        let gstAmount = Number(jdata['GST']) * Number(per);
                        total += Number(gstAmount);

                        let trdata = `
                            <tr>
                                <td><span id="`+ index +`app_itemId">`+ jdata['Item_Id'] +`</span></td>
                                <td><span id="`+ index +`app_itemName">`+ jdata['Item_Name'] +`</span><span></span>
                                <td><span id="`+ index +`app_mrp">`+ jdata['MRP'] +`</span></td>
                                <td><span id="`+ index +`app_gst">`+ jdata['GST'] +`</span></td>
                                <td><input type="number" class="form-control" value="1" id="`+ index +`app_qty" onkeyup="qtychange(`+ index +`)"></td>
                                <td><input type="number" class="form-control" value="`+total+`" id="`+ index +`app_total" disabled></td>
                                <td><input type="number" class="form-control" value="0" id="`+ index +`app_discount" onkeyup="discountchange(`+ index +`)"></td>
                                <td><input type="number" class="form-control" value="`+total+`" id="`+ index +`app_finalAmount" disabled></td>
                            </tr>
                        `;
                        $('#itemTable tbody').append(trdata); 
                        calculatTotal()
                   }else{
                        showError(jdata['Item_Name'] +" has out of stock.");
                        return false;
                   }  
                });
            }    
    }

    function qtychange(id) {
        let item_id = $("#"+id+'app_itemId').text();
        let mrp = $("#"+id+'app_mrp').text();
        let gst = $("#"+id+'app_gst').text();
        let qty = $("#"+id+'app_qty').val();
        let total = $("#"+id+'app_total').val();
        let discount = $("#"+id+'app_discount').val();
        let finalAmount = $("#"+id+'app_finalAmount').val();

        $.get("<?php echo base_url; ?>item-data-by-id/"+item_id, function(data, status){
            let jdata = JSON.parse(data);
            if(Number(jdata['Available_Stock']) >= Number(qty)){  
                if(qty !== 0 && qty !== undefined && qty !== null && qty !== ''){
                    console.log(gst);
                    if(Number(gst) > 0){
                        total = Number(qty) * Number(mrp); 
                        let per = Number(total) / 100;
                        let gstAmount = Number(gst) * Number(per);
                        total += Number(gstAmount);
                        console.log(total);
                        $("#"+id+'app_total').val(total)
                    }else{
                        total = Number(qty) * Number(mrp); 
                        $("#"+id+'app_total').val(total)
                    }
                    if(discount > 0){
                        let per = Number(total) / 100;
                        let cutDiscount = Number(discount) * Number(per);
                        let totalAmt = Number(total) - Number(cutDiscount);
                        $("#"+id+'app_finalAmount').val(totalAmt);
                    }else{
                        $("#"+id+'app_finalAmount').val(total);
                    }
                    calculatTotal();
                }else{
                    $("#"+id+'app_total').val(0);
                    $("#"+id+'app_discount').val(0);
                    $("#"+id+'app_finalAmount').val(0);
                    calculatTotal();
                }
            }else{
                showError(jdata['Item_Name'] +" has out of stock.");
                return false;
            }  
        })    
    }

    function calculatTotal() {
            let totalQty = 0;
            let totalTotal = 0;
            let totalDiscount = 0;
            let totalFinalAmount = 0;
            itemArr.forEach((element, index, array) =>{
                let ind = index + 1;
                let _qty = $("#"+ind+'app_qty').val();
                let _total = $("#"+ind+'app_total').val();
                let _discount = $("#"+ind+'app_discount').val();
                let _finalAmount = $("#"+ind+'app_finalAmount').val();
                
                totalQty += Number(_qty);
                totalTotal += Number(_total);
                totalDiscount += Number(_discount);
                totalFinalAmount += Number(_finalAmount);
            });


            $("#totalQty").val(totalQty);
            $("#totalTotal").val(totalTotal);
            $("#totalDiscount").val(totalDiscount);
            $("#totalFinalAmount").val(totalFinalAmount);
    }
    

    function discountchange(id) {
        let mrp = $("#"+id+'app_mrp').text();
        let qty = $("#"+id+'app_qty').val();
        let total = $("#"+id+'app_total').val();
        let discount = $("#"+id+'app_discount').val();
        let finalAmount = $("#"+id+'app_finalAmount').val();

        let per = Number(total) / 100;
        if(discount > 0){
            let cutDiscount = Number(discount) * Number(per);
            let totalAmt = Number(total) - Number(cutDiscount);
            $("#"+id+'app_finalAmount').val(totalAmt);
            calculatTotal()
        }else{
            $("#"+id+'app_finalAmount').val(total);
            calculatTotal()
        }
    }

    function createInvoice(){
        var patient = $("#app_patient").val();
        var totalQty = $("#totalQty").val();
        var totalTotal = $("#totalTotal").val();
        var totalDiscount = $("#totalDiscount").val();
        var totalFinalAmount = $("#totalFinalAmount").val();

        if(patient != "" && patient != null){

            if(itemArr.length === 0){
                showError("Please Add Items");
                return false;
            }

            itemArr.forEach((element, index, array) => {
                let ind = index + 1;
                let itemId = $("#"+ind+'app_itemId').text();
                let qty = $("#"+ind+'app_qty').val();
                console.log(itemId)
                $.get("<?php echo base_url; ?>item-data-by-id/"+itemId, function(data, status){
                    let jdata = JSON.parse(data);
                    if(Number(jdata['Available_Stock']) == 0){
                        showError(jdata['Item_Name'] +" has out of stock.");
                        return false;
                    }
                    if(Number(jdata['Available_Stock']) < Number(qty)){
                        showError(jdata['Item_Name'] +" has remaining "+ jdata['Available_Stock'] +" stock.");
                        return false;
                    }
                })    
            })

            $.post("<?php echo base_url; ?>create-invoice-database",
            {
                patient: patient,
                totalQty: totalQty,
                totalTotal: totalTotal,
                totalDiscount: totalDiscount,
                totalFinalAmount: totalFinalAmount
            },
            function(data, status){
                const obj = JSON.parse(data);
                    if(obj.status == "success"){
                        var invoiceId = obj.id;
                        for(var index = 1; index<=itemArr.length; index++){
                            let itemId = $("#"+index+'app_itemId').text();
                            let mrp = $("#"+index+'app_mrp').text();
                            let itemName = $("#"+index+'app_itemName').text();
                            let qty = $("#"+index+'app_qty').val();
                            let total = $("#"+index+'app_total').val();
                            let discount = $("#"+index+'app_discount').val();
                            let finalAmount = $("#"+index+'app_finalAmount').val();

                            $.post("<?php echo base_url; ?>create-invoice-items",
                            {
                                Invoice_Id: invoiceId,
                                Item_Id: itemId,
                                Item_Name: itemName,
                                MRP: mrp,
                                Qty: qty,
                                Total: total,
                                Discount: discount,
                                Final_Amount: finalAmount
                            },
                            function(data, status){
                                $.get("<?php echo base_url; ?>item-data-by-id/"+itemId, function(data, status){
                                    let jdata = JSON.parse(data);
                                    let Available_Stock = Number(jdata['Available_Stock']);
                                    let remainStock = Number(Available_Stock) - Number(qty);
                                    $.post("<?php echo base_url; ?>update-invoice-items-stock/"+itemId+"/"+remainStock,function(data, status){
                                    });    
                                })    
                                showSuccess("Invoice Created");
                                setTimeout(function(){ 
                                    location.replace("<?php echo base_url; ?>invoice");
                                }, 2000);
                            });
                        }    
                    }
                    
            });  
        } else {
            showError("Select Patient");
            return false;
        }

    }   
</script>