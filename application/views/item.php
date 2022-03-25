<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Items</h5>
                    <!--end::Page Title-->

                </div>
                <!--end::Page Heading-->
            </div>
            <div class="d-flex align-items-center flex-wrap">
                <?php if($edit): ?>
                <a href="<?php echo base_url; ?>item"
                    class="btn btn-danger btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3">Back</a>
                <?php else: ?>
                <button class="btn btn-primary btn-fixed-height font-weight-bolder font-size-sm px-5 my-1 mr-3"
                    data-toggle="collapse" data-target="#branchCard">Add Item</button>
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
                                <span
                                    class="card-label font-weight-bolder font-size-h4 text-dark-75"><?php echo ($edit) ?  "Edit" : "Add"; ?>
                                    Item</span>
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST" class="row">
                                <div class="form-group col-lg-6">
                                    <label for="usr">Item Code:</label>
                                    <input type="number" class="form-control" name="Item_Code"
                                        value="<?php echo $item->Item_Code; ?>" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="usr">Item Name:</label>
                                    <input type="text" class="form-control" name="Item_Name" required
                                        value="<?php echo $item->Item_Name; ?>">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="pwd">Description:</label>
                                    <textarea type="text" class="form-control" name="Description"
                                        ><?php echo $item->Description; ?></textarea>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="pwd">Item Company:</label>
                                    <input type="text" class="form-control" name="Item_Company"
                                        value="<?php echo $item->Item_Company; ?>">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="pwd">Model:</label>
                                    <input type="number" class="form-control" name="Item_Model"
                                        value="<?php echo $item->Item_Model; ?>"></input>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="pwd">Sale Rate:</label>
                                    <input type="number" class="form-control" name="Sale_Rate"
                                        value="<?php echo $item->Sale_Rate; ?>">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="pwd">MRP:</label>
                                    <input type="number" class="form-control" name="MRP"
                                        value="<?php echo $item->MRP; ?>">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Available Stock:</label>
                                    <input type="number" class="form-control" name="Available_Stock" value="<?php echo $item->Available_Stock; ?>">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="pwd">Min Stock:</label>
                                    <input type="number" class="form-control" name="Min_Stock"
                                        value="<?php echo $item->Min_Stock; ?>">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="pwd">Max Stock:</label>
                                    <input type="number" class="form-control" name="Max_Stock"
                                        value="<?php echo $item->Max_Stock; ?>">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="pwd">GST Applicable?</label>
                                    <!-- <input type="text" class="form-control" name="GST_Applicable"
                                        value="<?php // echo $item->GST_Applicable; ?>"> -->
                                    <select class="form-control" name="GST_Applicable" required>
                                        <?php if($item->GST_Applicable == "Yes"): ?>
                                        <option value="Yes" selected>Yes</option>
                                        <option value="No">No</option>
                                        <?php else: ?>
                                        <option value="Yes">Yes</option>
                                        <option value="No" selected>No</option>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="pwd">GST %:</label>
                                    <input type="number" class="form-control" name="GST"
                                        value="<?php echo $item->GST; ?>" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="pwd">Category:</label>
                                    <input type="text" class="form-control" name="Category"
                                        value="<?php echo $item->Category; ?>" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="pwd">Platform:</label>
                                    <input type="text" class="form-control" name="Platform"
                                        value="<?php echo $item->Platform; ?>">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="pwd">Serial_Number:</label>
                                    <input type="text" class="form-control" name="Serial_Number"
                                        value="<?php echo $item->Serial_Number; ?>" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="pwd">Supplier Selection:</label>
                                    <select class="form-control" name="Supplier_Selection" required>
                                        <?php $i = 1; foreach($this->main_model->getSupplierData() as $supplier){ ?>
                                            <option value="<?php echo $supplier->Supplier_Id; ?>" <?php echo ($item->Supplier_Selection == $supplier->Supplier_Id)? "selected" : ""; ?>><?php echo $supplier->Name; ?></option>
                                        <?php }?>
                                    </select>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <?php if($edit): ?>
                                        <button type="submit" name="edit_item"
                                            class="btn btn-primary col-lg-2">Submit</button>
                                        <?php else: ?>
                                        <button type="submit" name="add_item"
                                            class="btn btn-primary col-lg-2">Submit</button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-custom  gutter-b">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-sm table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>SR</th>
                                            <th>Code</th>
                                            <th>Item Name</th>
                                            <th>Company</th>
                                            <th>Model</th>
                                            <th>Sale Rate</th>
                                            <th>MRP</th>
                                            <th>Min Stock</th>
                                            <th>Max Stock</th>
                                            <th>GST Applicable</th>
                                            <th>GST</th>
                                            <th>Platform</th>
                                            <th>Serial Number</th>
                                            <th>Action</th>
                                        </tr>
                                        <thead>
                                        <tbody>
                                            <?php $i = 1; foreach($this->main_model->getItemData() as $item){ ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $item->Item_Code; ?></td>
                                                <td><?php echo $item->Item_Name; ?></td>
                                                <td><?php echo $item->Item_Company; ?></td>
                                                <td><?php echo $item->Item_Model; ?></td>
                                                <td><?php echo $item->Sale_Rate; ?></td>
                                                <td><?php echo $item->MRP; ?></td>
                                                <td><?php echo $item->Min_Stock; ?></td>
                                                <td><?php echo $item->Max_Stock; ?></td>
                                                <td><?php echo $item->GST_Applicable; ?></td>
                                                <td><?php echo $item->GST; ?></td>
                                                <td><?php echo $item->Platform; ?></td>
                                                <td><?php echo $item->Serial_Number; ?></td>

                                                <td><a href="<?php echo base_url; ?>item/<?php echo $item->Item_Id; ?>"
                                                        class="btn btn-warning">Edit</a></td>
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
$(document).ready(function() {
    $('#table1').DataTable();
    $('#table2').DataTable();
    $('#table3').DataTable();
});
</script>