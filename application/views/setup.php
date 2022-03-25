<?php $this->load->view('head'); ?>
<div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-2 login-signin-on d-flex flex-column flex-column-fluid  position-relative overflow-hidden ">

        <!--begin::Body-->
        <div class="login-body d-flex flex-column-fluid align-items-stretch justify-content-center">
            <div class="container row">
                <div class="col-lg-3"> </div>
                <div class="col-lg-6 d-flex align-items-center">
                    <!--begin::Signin-->
                    <div class="login-form login-signin">
                        <!--begin::Form-->
                        <form class="form w-xxl-550px rounded-lg p-10 bg-white" action="" method="POST">
                            <!--begin::Title-->
                            <div class="text-center">
                                <a href="#" class="">
                                    <img src="<?php echo assets_url; ?>media/images/logo.png" alt="logo" class=" h-50px" />
                                </a>
                            </div>
                            <div class="pb-13 pt-lg-0 pt-5">
                                <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Setup Software</h3>
                            </div>
                            <p style="Color:Red"><?php echo $msg; ?></p>
                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">Name</label>
                                <input class="form-control form-control-solid h-auto p-6 rounded-lg" type="text"
                                    name="name" autocomplete="off" />
                            </div>
                            <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">Username</label>
                                </div>
                                <input class="form-control form-control-solid h-auto p-6 rounded-lg" type="text"
                                    name="username" autocomplete="off" />
                            </div>
                            <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
                                </div>
                                <input class="form-control form-control-solid h-auto p-6 rounded-lg" type="password"
                                    name="password" autocomplete="off" />
                            </div>
                            <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">Email</label>
                                </div>
                                <input class="form-control form-control-solid h-auto p-6 rounded-lg" type="email"
                                    name="email" autocomplete="off" />
                            </div>
                            <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">Mobile</label>
                                </div>
                                <input class="form-control form-control-solid h-auto p-6 rounded-lg" type="number"
                                    name="mobile" autocomplete="off" />
                            </div>
                            <div class="pb-lg-0 pb-5">
                                <button type="submit" name="add_admin" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Submit</button>

                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--end::Body-->
        <!--begin::Footer-->
        <div class="login-footer py-10 flex-column-auto">
            <div class="container d-flex flex-column flex-md-row align-items-center justify-content-center ">
                <div class="font-size-h6 font-weight-bolder order-2 order-md-1 py-2 py-md-0">
                    <span class="text-muted font-weight-bold mr-2">Powered by</span>
                    <a href="#" target="_blank" class="text-dark-50 text-hover-primary">MSquare Software</a>
                </div>
                <div class="font-size-h5 font-weight-bolder order-1 order-md-2 py-2 py-md-0">

                </div>
            </div>
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Login-->
</div>


<script>
$(document).ready(function(){
  $("body").addClass('logbg');
});
</script>
<?php $this->load->view('footer'); ?>