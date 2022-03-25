
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Invoice List</h5>
                </div>
            </div>
            <div class="d-flex align-items-center flex-wrap">
                <!-- <a onclick="openModal()" class="btn btn-danger mt-8" style="float: right">Cancel</a>&nbsp;&nbsp; -->
                <a href="<?php echo base_url;?>create-invoice" class="btn btn-primary mt-8" style="float: right">Create Invoice</a>
            </div>
        </div>
    </div>    

    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12" id="AptTable">
                    <div class="card card-custom  gutter-b">
                        <div class="card-header border-0 pt-1">
                            <h3 class="card-title ml-n6">
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Invoice List</span>
                            </h3>
                        </div>
                        <div class="card-body d-flex align-items-center justify-content-between pt-0 flex-wrap">
                            <div class="table-responsive">
                                <table class="table" id="table1">
                                    <thead>
                                        <tr>
                                            <th>SR</th>
                                            <th>Patient Name</th>
                                            <th>Total Qty</th>
                                            <th>Total Amount</th>
                                            <th>Total Discount</th>
                                            <th>Total Final Amount</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                        <thead>
                                        <tbody>
                                            <?php $i = 1; foreach($this->main_model->getInvoiceDataBranch($branchid) as $item){ ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $this->main_model->getPatientById($item->Patient_Id)[0]->Prefix; ?>. <?php echo $this->main_model->getPatientById($item->Patient_Id)[0]->Name; ?></td>
                                                <td><?php echo $item->Total_Qty; ?></td>
                                                <td><?php echo $item->Total_Total; ?></td>
                                                <td><?php echo $item->Total_Discount; ?></td>
                                                <td><?php echo $item->Total_Final_Amount; ?></td>
                                                <td><?php echo $item->Created_At; ?></td>
                                                <td><a style="cursor:pointer" class="btn btn-danger btn-sm" href="print-invoice-items/<?php echo $item->Id; ?>" target="_blank" data-toggle="tooltip" title="Print Invoice"><i class="fa fa-print"></i></a></td>
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
    
    $(document).ready(function(){
        $('#table1').DataTable();
    });

</script>

