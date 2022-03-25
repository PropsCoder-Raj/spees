
<style>
    .btn .dropdown-toggle .btn-default {
        display: none !important;
    }
</style>

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-center flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <img src="<?php echo assets_url; ?>media/query.png" class="h-40px  align-self-center"
                        alt=""><span class=" h5 text-dark font-weight-bold my-1 mr-5">Web Contacts</span>
                    <!--end::Page Title-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
        </div>
    </div>

    <div class="d-flex flex-column-fluid">

        <form  action="" method="POST" style="width: 100%">
            <div class="container">
                <div class="row">
                <div class="col-lg-12">
                    <div class="card card-custom  gutter-b">
                        <div class="card-header border-0 pt-1">
                            <h3 class="card-title ml-n6">
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Web Contacts</span>
                            </h3>
                        </div>
                        <div class="card-body d-flex align-items-center justify-content-between pt-0 flex-wrap">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>SR</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Message</th>
                                        <th>Section</th>
                                        <th>Action</th>
                                    </tr>
                                <thead>
                                <tbody>
                                    <?php $i = 1; foreach($webContactsData as $item){ ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $item->Name; ?></td>
                                            <td><?php echo $item->Email; ?></td>
                                            <td><?php echo $item->Phone; ?></td>
                                            <td><?php echo $item->Message; ?></td>
                                            <td><?php echo $item->Root; ?></td>
                                            <td>
                                            	<?php if($item->Status == 1) : ?>
                                            		<b>Read</b>
                                            	<?php else : ?>	
	                                            		<button type="button" onclick="updateStatus(<?php echo $item->Id ?>)" class="btn btn-sm" style="background: transparent;border: unset;">
	                                            			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#1bc5bd" class="bi bi-check-square-fill" viewBox="0 0 16 16">
															  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
															</svg>
	                                            		</button>
	                                            <?php endif; ?>	
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
        </form>       
    </div>    
</div>

<script type="text/javascript">
	function updateStatus(id) {
	    $.ajax({
	        url: "<?php echo base_url ?>update-web-contacts/" + id,
	        success: function (result) {
	        	window.location.reload();
	        }
	    });
	}
</script>

<script>
    $(document).ready(function(){
        $('#table1').DataTable();
    });
</script>