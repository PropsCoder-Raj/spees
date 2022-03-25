<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Sales</h5>
                    <!--end::Page Title-->

                </div>
                <!--end::Page Heading-->
            </div>
            <div class="d-flex align-items-center flex-wrap">
                <button class="btn btn-primary btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3"
                    data-toggle="collapse" data-target="#branchCard">Apply Filter</button>

            <?php if($start_date != ""): ?>
                <a href="<?php echo base_url; ?>sales" class="btn btn-danger btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3">Clear Filter</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="row collapse" id="branchCard">
            <div class="col-lg-6">
                    <div class="card card-custom">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-2">
                            <div class="table-responsive">
                                <form action="" method="post">
                                <table class="table table-hover table-striped" id="table1">
                                    <tbody>
                                        <tr>
                                            <td class="py-5 pl-0">
                                                <label for="usr">Start Date:</label>
                                                <input type="date" class="form-control" name="start_date">   
                                            </td>
                                            <td class="py-5 pl-0">
                                                <label for="usr">End Date:</label>
                                                <input type="date" class="form-control" name="end_date">   
                                            </td>
                                            <td class="text-right">
                                            <br>
                                                <button class="btn btn-success" type="submit" name="apply_filter">
                                                Apply
                                                </button>
                                            </td>

                                        </tr>


                                    </tbody>
                                </table>
                                </form>
                            </div>
                        </div>

                        <!--end::Header-->
                        <!--begin::Body-->

                    </div>
                    <!--end::Stats Widget 2-->
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4">
                    <!--begin::Stats Widget 2-->
                    <div class="card card-custom ">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-2">
                            <div class="table-responsive">
                                <table class="table table-borderless table-vertical-center" id="table2">
                                    <thead>
                                        <tr>
                                            <th class="p-0 w-30px"></th>
                                            <th class="p-0 min-w-159px"></th>
                                            <th class="p-0 min-w-58px"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="py-5 pl-0">
                                                <div class="symbol symbol-45  mr-2">
                                                    <span class="">
                                                        <img src="<?php echo assets_url; ?>media/images/weeklysales.png"
                                                            class="h-40px align-self-center" alt="">

                                                    </span>
                                                </div>
                                            </td>
                                            <td class="pl-0 text-left">
                                                <a href="#"
                                                    class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-h5">Total Collection</a>

                                            </td>
                                            <td class="text-right">

                                                <span class="mblu font-weight-bolder d-block display5"><?php echo $this->main_model->getSalesSum($start_date,$end_date)->Fees; ?></span>
                                            </td>

                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-custom">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-2">
                            <div class="table-responsive">
                                <table class="table table-borderless table-vertical-center" id="table3">
                                    <thead>
                                        <tr>
                                            <th class="p-0 w-30px"></th>
                                            <th class="p-0 min-w-159px"></th>
                                            <th class="p-0 min-w-58px"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="py-5 pl-0">
                                                <div class="symbol symbol-45 symbol-light mr-2">
                                                    <span class="">
                                                        <img src="<?php echo assets_url; ?>media/images/overallpatients.png"
                                                            class="h-40px align-self-center" alt="">
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="pl-0 text-left">
                                                <a href="#"
                                                    class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-h5">Total Cases</a>

                                            </td>
                                            <td class="text-right">

                                                <span
                                                    class="text-danger font-weight-bolder d-block display5"><?php echo $this->main_model->getCasesCount($start_date,$end_date)->Cases; ?></span>
                                            </td>

                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!--end::Header-->
                        <!--begin::Body-->

                    </div>
                    <!--end::Stats Widget 2-->
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12" id="attendedBox">
                    <div class="card card-custom  gutter-b">
                        <div class="card-header border-0 pt-1">
                            <h3 class="card-title ml-n6">
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Fees
                                    Collection</span>
                            </h3>
                        </div>
                        <div class="card-body d-flex align-items-center justify-content-between pt-0 flex-wrap">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped" id="table4">
                                    <thead>
                                        <tr>
                                            <th>SR</th>
                                            <th>Patient Name</th>
                                            <th>Branch</th>
                                            <th>Professional Name</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                        </tr>
                                        <thead>
                                        <tbody>
                                            <?php $i = 1; foreach($this->main_model->getSalesAppoiment($start_date,$end_date) as $item){ ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $item->Patient_Name; ?></td>
                                                <td><?php echo $this->main_model->getBranchData($item->Branch_Id)[0]->Name; ?>
                                                </td>
                                                <td><?php echo $item->Doctor_Name; ?></td>
                                                <td><?php echo $item->Date; ?></td>
                                                <td>Rs. <?php echo $item->Fees; ?></td>

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
        $('#table2').DataTable();
        $('#table3').DataTable();
        $('#table4').DataTable();
    });
</script>