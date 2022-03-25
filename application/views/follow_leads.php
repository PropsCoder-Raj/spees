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
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Follow up Leads</span>
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
                                            <th>Follow Date-Time</th>
                                            <th>Remark</th>
                                            <th>Action</th>
                                        </tr>
                                        <thead>
                                        <tbody>
                                            <?php $i = 1; foreach($this->main_model->getFollowLeadData(($this->session->userdata('Role') != 1) ? $this->session->userdata('Id') : "") as $item){ ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $item->Name; ?></td>
                                                <td><?php echo $item->Mobile; ?></td>
                                                <td><?php echo $item->Email; ?></td>
                                                <td><?php echo $item->City; ?></td>
                                                <td><?php echo $item->Near_Branch; ?></td>
                                                <td><?php echo $item->Date; ?></td>
                                                <td><?php echo ($item->Follow_Date != "0000-00-00") ? $item->Follow_Date : ""; ?>-<?php echo ($item->Follow_Time != "00:00:00") ? $item->Follow_Time : ""; ?></td>
                                                
                                                <td>
                                                    <p>
                                                        <i class="fa fa-eye" data-toggle="tooltip" title="<?php echo $item->Remark; ?>"></i>
                                                        </p>
                                                </td>
                                                <td>
                                                    <?php if($this->session->userdata('Role') == 5 ): ?>
                                                        <a class="text-success" onclick="openModal('<?php echo $item->Name; ?>','<?php echo $item->Mobile; ?>','<?php echo $item->Id; ?>')"><i class="fa fa-plus text-success"></i></a></td>
                                                    <?php endif; ?>

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
<div id="myModal" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Lead Remark</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row">

                        <div class="form-group col-lg-12">
                            <label for="usr">Lead Name:</label>
                            <input type="text" class="form-control" id="lead_name" name="lead_name" readonly="readonly"
                                disabled>
                            <input type="hidden" name="leadid" id="leadid">
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="usr">Mobile:</label>
                            <input type="text" class="form-control" id="lead_mobile" name="lead_mobile" readonly="readonly"
                                disabled>
                        </div>

                        <div class="form-group col-lg-12">
                            <label for="usr">Status:</label>
                            <select name="lead_status" class="form-control" onchange="showdatatime(this.value)">
                                <option value="1">Counseled</option>
                                <option value="2">Visting H.Q.</option>
                                <option value="3">Visting Branch</option>
                                <option value="4">Postponed</option>
                                <option value="5" selected>Follow-up</option>
                                <option value="6">Unable to Counseled</option>
                                <option value="7">Escalate</option>
                            </select>
                        </div>
                    </div>
                    <div id="followDate" class="row">
                        <div class="form-group col-lg-6">
                            <label for="usr">Follow Up Date:</label>
                            <input type="date" class="form-control" id="follow_date" name="follow_date">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="usr">Follow Up Time:</label>
                            <input type="time" class="form-control" id="follow_time" name="follow_time">
                        </div>
                    </div>
                    <div class="form-group col-lg-12" style="display: none;" id="branchSelection">
                        <label for="usr">Visiting at</label>
                        <select class="form-control" name="branch">
                        <option selected disabled>Select Branch</option>
                        <?php foreach($this->main_model->getBranchData() as $item): ?>
                            <option value="<?php echo $item->Id; ?>" ><?php echo $item->Name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-12">
                            <label for="usr">Remark:</label>
                            <textarea type="date" class="form-control" name="lead_remark"></textarea>
                        </div>
                    </div>
                    <button type="submit" name="add_lead_remark" class="btn btn-primary col-lg-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#table1').DataTable();
        $('#table2').DataTable();
        $('#table3').DataTable();
    });
</script>


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