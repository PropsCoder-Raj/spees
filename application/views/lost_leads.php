<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Leads</h5>
                    <!--end::Page Title-->

                </div>
                <!--end::Page Heading-->
            </div>
        </div>
    </div>
    
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!-- <p style="Color:Red"><?php // echo $error_msg; ?></p>
            <p style="Color:green"><?php // echo $success_msg; ?></p> -->

            <div class="row">
                <div class="col-lg-12" id="attendedBox">
                    <div class="card card-custom  gutter-b">
                        <div class="card-header border-0 pt-1">
                            <h3 class="card-title ml-n6">
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Lost Leads</span>
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped" id="table2">
                                    <thead>
                                        <tr>
                                            <th>SR</th>
                                            <th>Name</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>City</th>
                                            <th>Near Branch</th>
                                            <th>Last Update Date</th>
                                            <th>Remark</th>
                                        </tr>
                                    <thead>
                                        <tbody> 
                                            <?php $i = 1; foreach($this->main_model->getLostLeadData(($this->session->userdata('Role') != 1) ? $this->session->userdata('Id') : "") as $item){ ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $item->Name; ?></td>
                                                <td><?php echo $item->Mobile; ?></td>
                                                <td><?php echo $item->Email; ?></td>
                                                <td><?php echo $item->City; ?></td>
                                                <td><?php echo $item->Near_Branch; ?></td>
                                                <td><?php echo $item->Date; ?></td>
                                                <td>
                                                    <p>
                                                        <i class="fa fa-eye" data-toggle="tooltip" title="<?php echo $item->Remark; ?>"></i>
                                                        </p>
                                                </td>

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
function openModal(name,mobile,id){

    $("#lead_name").val(name);
    $("#lead_mobile").val(mobile);
    $("#leadid").val(id);

    $('#myModal').modal({
        backdrop: 'static',
        keyboard: false
    });

}
</script>

<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });

    function showdatatime(stausid){
        switch (stausid){
            case "1":
                $("#followDate").css('display','none');
                $("#branchSelection").css('display','unset');
                break;
            case "2":
                $("#followDate").css('display','none');
                $("#branchSelection").css('display','unset');
                break;
            case "3":
                $("#followDate").css('display','none');
                $("#branchSelection").css('display','unset');
                break;
            case "5": 
                $("#followDate").css('display','flex');
                $("#branchSelection").css('display','none');
                break;

            default:
                $("#followDate").css('display','none');
                $("#branchSelection").css('display','none');
                break;
        }
    }
</script>

<script>
    $(document).ready(function(){
        $('#table1').DataTable();
        $('#table2').DataTable();
        $('#table3').DataTable();
    });
</script>