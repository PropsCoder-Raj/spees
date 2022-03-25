<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Patients</h5>
                    <!--end::Page Title-->

                </div>
                <!--end::Page Heading-->
            </div>
            <?php if($this->session->userdata('Role') == 1 || $this->session->userdata('Role') == 4 || $this->session->userdata('Role') == 6): ?>
            <div class="d-flex align-items-center flex-wrap">
                <a href="<?php echo base_url; ?>add-patients"
                    class="btn btn-primary btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3">Add
                    Patient</a>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="row">
            <?php if($this->session->userdata('Role') == 4 || $this->session->userdata('Role') == 6): ?>
                <div class="col-lg-12">
                    <div class="card card-custom  gutter-b">
                        <div class="card-header border-0 pt-1">
                            <h3 class="card-title ml-n6">
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Lead to Patient</span>
                            </h3>
                        </div>
                        
                        <div class="card-body">
                            <table class="table table-hover table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>SR</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Telecaller</th>
                                        <th>Action</th>
                                    </tr>
                                    <thead>
                                    <tbody>
                                        <?php $i = 1; foreach($this->main_model->getNewPatientDataByBranch($this->session->userdata('Branch_Id')) as $item){ ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $item->Name; ?></td>
                                            <td><?php echo $item->Mobile; ?></td>
                                            <td><?php echo $item->Email; ?></td>
                                            <td><?php echo ($item->Telecaller_Id != null)  ? $this->main_model->getTelecallerData($item->Telecaller_Id)[0]->Name : ""; ?></td>
                                            <td>
                                                <a href="<?php echo base_url; ?>edit-patients/<?php echo $item->Id; ?>"
                                                    class="btn btn-warning">Edit</a>
                                                <a href="<?php echo base_url; ?>delete-patients/<?php echo $item->Id; ?>"
                                                    class="btn btn-danger">DELETE</a>
                                                    </td>
                                        </tr>
                                        <?php $i++; } ?>
                                    </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
                <?php endif; ?>
                <div class="col-lg-12">
                    <div class="card card-custom  gutter-b">
                        <div class="card-header border-0 pt-1">
                            <h3 class="card-title ml-n6">
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Patient</span>
                            </h3>
                        </div>
                        <?php if($this->session->userdata('Role') == 1): ?>
                        <div class="card-body">
                            <table class="table table-hover table-striped" id="table2">
                                <thead>
                                    <tr>
                                        <th>SR</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Mobile</th>
                                        <th>Branch</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    <thead>
                                    <tbody>
                                        <?php $i = 1; foreach($this->main_model->getPatientData() as $item){ ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $item->Prefix; ?>. <?php echo $item->Name; ?></td>
                                            <td><?php echo $item->Age; ?></td>
                                            <td><?php echo $item->Gender; ?></td>
                                            <td><?php echo $item->Mobile; ?></td>
                                            <td><?php echo $this->main_model->getBranchData($item->Branch_Id)[0]->Name; ?>
                                            </td>
                                            <td><?php echo ($item->Is_Active == 1) ? '<span class="btn btn-success">A</span>' : '<span class="btn btn-danger">I</span>'; ?>
                                            </td>
                                            <td>
                                                
                                                <a href="<?php echo base_url; ?>patient-details/<?php echo $item->Id; ?>"
                                                    class="btn btn-info"><i class="fa fa-eye"></i></a>
                                                <?php if($this->session->userdata('Role') == 1 || $this->session->userdata('Role') == 4 || $this->session->userdata('Role') == 6): ?>
                                                <a href="<?php echo base_url; ?>edit-patients/<?php echo $item->Id; ?>"
                                                    class="btn btn-warning">Edit</a></td>
                                                    <?php endif; ?>
                                        </tr>
                                        <?php $i++; } ?>
                                    </tbody>
                            </table>
                        </div>

                        <?php elseif($this->session->userdata('Role') == 2 || $this->session->userdata('Role') == 3): ?>
                        <div class="card-body">
                            <table class="table table-hover table-striped" id="table2">
                                <thead>
                                    <tr>
                                        <th>SR</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    <thead>
                                    <tbody>
                                        <?php $i = 1; foreach($this->main_model->getPatientDataByDoctor($this->session->userdata('Id')) as $item){ ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $item->Prefix; ?>. <?php echo $item->Name; ?></td>
                                            <td><?php echo $item->Age; ?></td>
                                            <td><?php echo $item->Gender; ?></td>
                                            </td>
                                            <td><?php echo ($item->Is_Active == 1) ? '<span class="btn btn-success">A</span>' : '<span class="btn btn-danger">I</span>'; ?>
                                            </td>
                                            <td>
                                                
                                                <a href="<?php echo base_url; ?>patient-details/<?php echo $item->Id; ?>"
                                                    class="btn btn-info"><i class="fa fa-eye"></i></a>
                                        </tr>
                                        <?php $i++; } ?>
                                    </tbody>
                            </table>
                        </div>

                        <?php else: ?>
                        <div class="card-body">
                            <table class="table table-hover table-striped" id="table3">
                                <thead>
                                    <tr>
                                        <th>SR</th>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Aadhar No</th>
                                        <th>Mobile</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    <thead>
                                    <tbody>
                                        <?php $i = 1; foreach($this->main_model->getPatientHistoryList($this->session->userdata('Branch_Id')) as $item){ ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><img src="<?php echo upload_url.$item->Profile_Image; ?>" /
                                                    width="30px"></td>
                                            <td><?php echo $item->Patient_Name; ?></td>
                                            <td><?php echo $item->Patient_Aadhar; ?></td>
                                            <td><?php echo $item->Patient_Mobile; ?></td>
                                            <td><?php echo ($item->Is_Active == 1) ? '<span class="btn btn-success">A</span>' : '<span class="btn btn-danger">I</span>'; ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url; ?>patient-details/<?php echo $item->Id; ?>"
                                                    class="btn btn-info"><i class="fa fa-eye"></i></a>
                                                    <?php if($this->session->userdata('Role') == 1 && $this->session->userdata('Role') == 4): ?>
                                                <a href="<?php echo base_url; ?>edit-patients/<?php echo $item->Id; ?>"
                                                    class="btn btn-warning">Edit</a></td>
                                                    <?php endif; ?>
                                        </tr>
                                        <?php $i++; } ?>
                                    </tbody>
                            </table>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
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