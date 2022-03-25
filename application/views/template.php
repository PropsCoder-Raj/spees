<?php $this->load->view('head'); ?>


<!--begin::Header Mobile-->
<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed" style="background:#ffffff;">
    <!--begin::Logo-->
    <a href="#">
        <img alt="Logo" src="<?php echo assets_url; ?>media/images/logo.png" class="h-50px mt-2">
    </a>
    <!--end::Logo-->
    <!--begin::Toolbar-->
    <div class="d-flex align-items-center">
        <!--begin::Aside Mobile Toggle-->
        <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
            <span></span>
        </button>
        <!--end::Aside Mobile Toggle-->
        <!--begin::Header Menu Mobile Toggle-->
        <button class="btn p-0 burger-icon ml-5" id="kt_header_mobile_toggle">
            <span></span>
        </button>
        <!--end::Header Menu Mobile Toggle-->
        <!--begin::Topbar Mobile Toggle-->
        <button class="btn btn-hover-text-primary p-0 ml-3" id="kt_header_mobile_topbar_toggle">
            <span class="svg-icon svg-icon-xl">
                <!--begin::Svg Icon | path:/keen/theme/demo1/<?php echo assets_url; ?>media/svg/icons/General/User.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path
                            d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                        <path
                            d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                            fill="#000000" fill-rule="nonzero" />
                    </g>
                </svg>
                <!--end::Svg Icon-->
            </span>
        </button>
        <!--end::Topbar Mobile Toggle-->
    </div>
    <!--end::Toolbar-->
</div>
<!--end::Header Mobile-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        <!--begin::Aside-->
        <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
            <!--begin::Brand-->

            <!--end::Brand-->
            <!--begin::Aside Menu-->
            <div class="aside-menu-wrapper mt-0 flex-column-fluid" id="kt_aside_menu_wrapper">
                <!--begin::Menu Container-->
                <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1"
                    data-menu-dropdown-timeout="500">
                    <!--begin::Menu Nav-->
                    <ul class="menu-nav">
                        <li class="menu-item" aria-haspopup="true">
                            <a href="<?php echo base_url ?>dashboard" class="menu-link ">
                                <img src="<?php echo assets_url; ?>media/images/Dashboard.png" class="h-40px">
                                <span class="menu-text">Dashboard</span>
                            </a>

                        </li>
                        <?php if($this->session->userdata('Role') != 5): ?>
                        <li class="menu-item" aria-haspopup="true">
                            <a href="<?php echo base_url ?>patients" class="menu-link">
                                <img src="<?php echo assets_url; ?>media/images/PatientHis.png" class="h-40px">
                                <span class="menu-text">Patients</span>
                            </a>
                        </li>
                        <?php endif; ?>

                        <?php if($this->session->userdata('Role') == 1): ?>


                        <li class="menu-item" aria-haspopup="true">
                            <a href="#masters" data-toggle="collapse" class="menu-link">
                                <img src="<?php echo assets_url; ?>media/masters.png" class="h-40px"
                                    style="padding:8px;">
                                <span class="menu-text">Masters</span>
                                <span class="pull-right-container"><i style="top:35%; position:absolute;"
                                        class="fa fa-angle-down pull-right"></i></span>
                            </a>
                        </li>



                        <div id="masters" class="collapse">
                            <ul class="menu-nav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="<?php echo base_url ?>branches" class="menu-link">
                                        <img src="<?php echo assets_url; ?>media/images/topBranches.png" class="h-40px">
                                        <span class="menu-text">Branches</span>
                                    </a>
                                </li>


                                <li class="menu-item" aria-haspopup="true">
                                    <a href="<?php echo base_url ?>departments" class="menu-link">
                                        <img src="<?php echo assets_url; ?>media/images/Department.png" class="h-40px">
                                        <span class="menu-text">Departments</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="<?php echo base_url ?>holiday" class="menu-link ">
                                        <img src="<?php echo assets_url; ?>media/sunbed.png" class="h-40px"
                                            style="padding:8px">
                                        <span class="menu-text">Holiday</span>
                                    </a>

                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="<?php echo base_url ?>referral" class="menu-link">
                                        <img src="<?php echo assets_url; ?>media/images/topEmployees.png"
                                            class="h-40px">
                                        <span class="menu-text">Referred Master</span>
                                    </a>
                                </li>

                                <li class="menu-item" aria-haspopup="true">
                                    <a href="<?php echo base_url ?>procedure" class="menu-link">
                                        <img src="<?php echo assets_url; ?>media/work-process.png" class="h-40px" style="padding:8px">
                                        <span class="menu-text">Procedures</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="<?php echo base_url ?>forms-master" class="menu-link">
                                        <img src="<?php echo assets_url; ?>media/query.png" class="h-40px"
                                            style="padding:8px">
                                        <span class="menu-text">Forms Master</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="<?php echo base_url ?>supplier" class="menu-link">
                                        <img src="<?php echo assets_url; ?>media/inventory.png" class="h-40px"
                                            style="padding:8px">
                                        <span class="menu-text">Supplier Master</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="<?php echo base_url ?>item" class="menu-link">
                                        <img src="<?php echo assets_url; ?>media/trolley.png" class="h-40px"
                                            style="padding:8px">
                                        <span class="menu-text">Item Master</span>
                                    </a>
                                </li>
                            </ul>
                        </div>


                        <li class="menu-item" aria-haspopup="true">
                            <a href="#staff" data-toggle="collapse" class="menu-link">
                                <img src="<?php echo assets_url; ?>media/staff.png" class="h-40px" style="padding:8px;">
                                <span class="menu-text">Staff</span>
                                <span class="pull-right-container"><i style="top:35%; position:absolute;"
                                        class="fa fa-angle-down pull-right"></i></span>
                            </a>
                        </li>

                        <div id="staff" class="collapse">
                            <ul class="menu-nav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="<?php echo base_url ?>internal-doctors" class="menu-link">
                                        <img src="<?php echo assets_url; ?>media/images/internalDoctors.png"
                                            class="h-40px">
                                        <span class="menu-text">Internal Professionals</span>
                                    </a>
                                </li>

                                <li class="menu-item" aria-haspopup="true">
                                    <a href="<?php echo base_url ?>external-doctors" class="menu-link">
                                        <img src="<?php echo assets_url; ?>media/images/externalDoctors.png"
                                            class="h-40px">
                                        <span class="menu-text">External Professionals</span>
                                    </a>
                                </li>

                                <li class="menu-item" aria-haspopup="true">
                                    <a href="<?php echo base_url ?>trc-manager" class="menu-link">
                                        <img src="<?php echo assets_url; ?>media/images/topEmployees.png"
                                            class="h-40px">
                                        <span class="menu-text">TRC Managers</span>
                                    </a>
                                </li>

                                <li class="menu-item" aria-haspopup="true">
                                    <a href="<?php echo base_url ?>receptionist" class="menu-link">
                                        <img src="<?php echo assets_url; ?>media/images/information-desk.png"
                                            class="h-40px" style="padding:5px">
                                        <span class="menu-text">Receptionist</span>
                                    </a>
                                </li>

                                <li class="menu-item" aria-haspopup="true">
                                    <a href="<?php echo base_url ?>telecaller" class="menu-link">
                                        <img src="<?php echo assets_url; ?>media/images/mobile-phone.png" class="h-40px"
                                            style="padding:8px">
                                        <span class="menu-text">Telecaller</span>
                                    </a>
                                </li>
                            </ul>
                        </div>





                        <?php endif; ?>

                        <?php if($this->session->userdata('Role') != 5): ?>
                        <li class="menu-item" aria-haspopup="true">
                            <a href="<?php echo base_url ?>waiting-appointment-list" class="menu-link ">
                                <img src="<?php echo assets_url; ?>media/appointment.png" class="h-40px"
                                    style="padding:8px">
                                <span class="menu-text">Waiting Appointments</span>
                            </a>
                        </li>
                        <li class="menu-item" aria-haspopup="true">
                            <a href="<?php echo base_url ?>attending-appointment-list" class="menu-link ">
                                <img src="<?php echo assets_url; ?>media/appointment.png" class="h-40px"
                                    style="padding:8px">
                                <span class="menu-text">Attended Appointments</span>
                            </a>
                        </li>
                        <li class="menu-item" aria-haspopup="true">
                            <a href="<?php echo base_url ?>canceled-appointment-list" class="menu-link ">
                                <img src="<?php echo assets_url; ?>media/appointment.png" class="h-40px"
                                    style="padding:8px">
                                <span class="menu-text">Canceled Appointments</span>
                            </a>
                        </li>
                        <?php if($this->session->userdata('Role') == 1 || $this->session->userdata('Role') == 4): ?>
                        <li class="menu-item" aria-haspopup="true">
                            <a href="<?php echo base_url ?>recurring-appointment-list" class="menu-link ">
                                <img src="<?php echo assets_url; ?>media/appointment.png" class="h-40px"
                                    style="padding:8px">
                                <span class="menu-text">Recurring Appointments</span>
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php endif; ?>

                        <li class="menu-item" aria-haspopup="true">
                            <a href="<?php echo base_url ?>leave-management" class="menu-link ">
                                <img src="<?php echo assets_url; ?>media/sunbed.png" class="h-40px" style="padding:8px">
                                <span class="menu-text">Leave</span>
                            </a>

                        </li>


                        <?php if($this->session->userdata('Role') == 1 || $this->session->userdata('Role') == 4 || $this->session->userdata('Role') == 6): ?>
                        <li class="menu-item" aria-haspopup="true">
                            <a href="<?php echo base_url ?>sales" class="menu-link">
                                <img src="<?php echo assets_url; ?>media/images/weeklysales.png" class="h-40px">
                                <span class="menu-text">Sales</span>
                            </a>
                        </li>
                        <?php endif; ?>

                        <?php if($this->session->userdata('Role') == 1 || $this->session->userdata('Role') == 5): ?>
                        <li class="menu-item" aria-haspopup="true">
                            <a href="<?php echo base_url ?>leads" class="menu-link">
                                <img src="<?php echo assets_url; ?>media/lead.png" class="h-40px" style="padding:8px">
                                <span class="menu-text">All Leads</span>
                            </a>
                        </li>
                        <?php endif; ?>

                        <?php if($this->session->userdata('Role') == 5): ?>
                        <li class="menu-item" aria-haspopup="true">
                            <a href="<?php echo base_url ?>follow-leads" class="menu-link">
                                <img src="<?php echo assets_url; ?>media/lead.png" class="h-40px" style="padding:8px">
                                <span class="menu-text">Follow up Leads</span>
                            </a>
                        </li>
                        <li class="menu-item" aria-haspopup="true">
                            <a href="<?php echo base_url ?>won-leads" class="menu-link">
                                <img src="<?php echo assets_url; ?>media/lead.png" class="h-40px" style="padding:8px">
                                <span class="menu-text">Won Leads</span>
                            </a>
                        </li>
                        <li class="menu-item" aria-haspopup="true">
                            <a href="<?php echo base_url ?>lost-leads" class="menu-link">
                                <img src="<?php echo assets_url; ?>media/lead.png" class="h-40px" style="padding:8px">
                                <span class="menu-text">Lost Leads</span>
                            </a>
                        </li>
                        <li class="menu-item" aria-haspopup="true">
                            <a href="<?php echo base_url ?>hold-leads" class="menu-link">
                                <img src="<?php echo assets_url; ?>media/lead.png" class="h-40px" style="padding:8px">
                                <span class="menu-text">Hold Leads</span>
                            </a>
                        </li>
                        <?php endif; ?>


                        <?php if($this->session->userdata('Role') == 1): ?>

                        <li class="menu-item" aria-haspopup="true">
                            <a href="<?php echo base_url ?>rewards" class="menu-link">
                                <img src="<?php echo assets_url; ?>media/reward.png" class="h-40px" style="padding:8px">
                                <span class="menu-text">Rewards</span>
                            </a>
                        </li>
                        <li class="menu-item" aria-haspopup="true">
                            <a href="<?php echo base_url ?>web-contacts" class="menu-link">
                                <img src="<?php echo assets_url; ?>media/contact-book.png" class="h-40px"
                                    style="padding:8px">
                                <span class="menu-text">Web Contacts</span>
                            </a>
                        </li>

                        <?php endif; ?>
                        <?php if($this->session->userdata('Role') == 2 || $this->session->userdata('Role') == 3 || $this->session->userdata('Role') == 4 || $this->session->userdata('Role') == 6): ?>
                        <li class="menu-item" aria-haspopup="true">
                            <a href="<?php echo base_url ?>recommended-patients" class="menu-link">
                                <img src="<?php echo assets_url; ?>media/lead.png" class="h-40px" style="padding:8px">
                                <span class="menu-text">Recommended Patients</span>
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php if($this->session->userdata('Role') == 2 || $this->session->userdata('Role') == 3): ?>
                        <li class="menu-item" aria-haspopup="true">
                            <a href="<?php echo base_url ?>calendar/<?php echo $this->session->userdata('Id'); ?>" class="menu-link">
                                <img src="<?php echo assets_url; ?>media/appointment.png" class="h-40px" style="padding:8px">
                                <span class="menu-text">Calendar</span>
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php if($this->session->userdata('Role') == 1 || $this->session->userdata('Role') == 4): ?>
                        <li class="menu-item" aria-haspopup="true">
                            <a href="<?php echo base_url ?>payment-receipt" class="menu-link">
                                <img src="<?php echo assets_url; ?>media/receipt.png" class="h-40px" style="padding:8px">
                                <span class="menu-text">Payment Receipt</span>
                            </a>
                        </li>
                        <li class="menu-item" aria-haspopup="true">
                            <a href="<?php echo base_url ?>invoice" class="menu-link">
                                <img src="<?php echo assets_url; ?>media/invoice.png" class="h-40px" style="padding:8px">
                                <span class="menu-text">Invoice</span>
                            </a>
                        </li>
                        <?php endif; ?>
                        <hr>
                        <?php if($this->session->userdata('Role') != ""):   ?>
                        <li class="menu-item" area-haspopup="true">
                            <div class="d-flex align-items-center bg-success brd  pl-3 pr-3 mr-9 my-0 p-0"
                                style="width: 100%;">
                                <span class="pl-2 pr-2 text-light font-size-h4 font-weight-bold">Sundays</span>
                                <br>
                                <?php
                                $month  = date('m');
                                $year  = date('Y');
                                $days = cal_days_in_month(CAL_GREGORIAN, $month,$year);
                                for($i = 1; $i<= $days; $i++){
                                   $day  = date('Y-m-'.$i);
                                   $result = date("l", strtotime($day));
                                   if($result == "Sunday"){
                                   echo '<span class="display6  p-3 text-light font-weight-bold">'.date("d", strtotime($day)).'</span>';
                                   }
                                }
                                ?>
                            </div>
                        </li>
                        <br>
                        <li class="menu-item" area-haspopup="true">
                            <div class="d-flex align-items-center  pl-3 pr-3 bg_dblu brd  mr-9 my-0 p-0"
                                style="width: 100%;">
                                <span class="pl-3 pr-3 text-light font-size-h4 font-weight-bold">Holidays</span>
                                <?php foreach($this->main_model->getHolidayData() as $item): ?>
                                <span
                                    class="display6 p-3  text-light font-weight-bold brd"><?php echo date("d", strtotime($item->Date)); ?></span>
                                <?php endforeach; ?>
                            </div>
                        </li>
                        <?php endif; ?>
                    </ul>
                    <!--end::Menu Nav-->
                </div>
                <!--end::Menu Container-->
            </div>
            <!--end::Aside Menu-->
        </div>
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" class="header header-fixed">
                <!--begin::Container-->
                <div class="container-fluid d-flex align-items-stretch justify-content-between">
                    <!--begin::Header Menu Wrapper-->
                    <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                        <!--begin::Header Menu-->
                        <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                            <!--begin::Header Nav-->
                            <a href="#" class="brand-logo">
                                <img alt="Logo" src="<?php echo assets_url; ?>media/images/logo.png"
                                    class="h-50px mt-2">
                            </a>
                            <?php if($this->session->userdata('Role') != 3 && $this->session->userdata('Role') != 4): ?>
                            <ul class="menu-nav text-center ml-10">
                                <li class="menu-item  menu-item-rel ">
                                    <a href="#" class="menu-link ">
                                        <img alt="branches"
                                            src="<?php echo assets_url; ?>media/images/TotalBranches.png"
                                            class="h-60px mt-0">
                                        <span class="menu-text font-size-h6">Total Branches</span> <span
                                            class="label font-weight-bold label-lg font-size-h5 label-light-info label-inline h-40px display5 mt-4 ml-4"><?php echo $this->main_model->getBranchCount(); ?></span>

                                    </a>

                                </li>
                                <li class="menu-item ">
                                    <a href="#" class="menu-link">
                                        <span class="menu-text font-size-h6">Active</span> <span
                                            class="label font-weight-bold label-lg font-size-h5 text-light bg_dblu label-inline h-40px display5 mt-n1 ml-4"><?php echo $this->main_model->getBranchCount(true); ?></span>

                                    </a>

                                </li>
                                <?php if($this->session->userdata('Role') == 1): ?>
                                <li class="menu-item bg_lred pl-3 pr-3">
                                    <a href="#" class="menu-link">
                                        <span class="menu-text font-size-h6">Inventory <span class="text-danger pl-1">
                                                Shortage</span></span> <span
                                            class="label font-weight-bold label-lg font-size-h5 text-light label-danger  label-inline h-40px display5 mt-n1 ml-4">0</span>

                                    </a>

                                </li>
                                <?php endif; ?>

                            </ul>
                            <?php endif; ?>
                            <!--end::Header Nav-->
                        </div>
                        <!--end::Header Menu-->
                    </div>
                    <!--end::Header Menu Wrapper-->
                    <!--begin::Topbar-->
                    <div class="topbar">
                        <!--begin::Search-->


                        <!--begin::User-->
                        <div class="topbar-item ml-4">
                            <span class="pl-2 pr-3">Hi <?php echo $this->session->userdata('Name'); ?> </span>
                            <div class="btn btn-icon btn-light-primary h-40px w-40px p-0" id="kt_quick_user_toggle">
                                <img src="<?php echo assets_url; ?>media/images/user.png" class="h-40px align-self-end"
                                    alt="" />
                            </div>


                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::Topbar-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Content-->
            <?php $this->load->view($content); ?>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
                <!--begin::Container-->
                <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <!--begin::Copyright-->
                    <div class="text-dark order-2 order-md-1 ">
                        <span class="text-muted font-weight-bold mr-2">Powered by</span>
                        <a href="#" target="_blank" class="text-dark-75 text-hover-primary">MSquare Software</a>
                    </div>
                    <!--end::Copyright-->
                    <!--begin::Nav-->
                    <!--end::Nav-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->
<!-- begin::User Panel-->
<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
    <!--begin::Header-->
    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
        <h3 class="font-weight-bold m-0">User Profile
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div class="offcanvas-content pr-5 mr-n5">
        <!--begin::Header-->
        <div class="d-flex align-items-center mt-5">
            <div class="symbol symbol-100 mr-5">
                <div class="symbol-label"
                    style="background-image:url(' <?php echo assets_url; ?>media/users/150-6.jpg')"></div>
                <i class="symbol-badge bg-success"></i>
            </div>
            <div class="d-flex flex-column">
                <a href="#"
                    class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary"><?php echo $this->session->userdata("Name"); ?></a>
                <div class="text-muted mt-1">
                    <?php if($this->session->userdata('Role') == 1): ?>
                    Admin
                    <?php elseif($this->session->userdata('Role') == 2): ?>
                    Internal Professional
                    <?php elseif($this->session->userdata('Role') == 3): ?>
                    External Professional
                    <?php elseif($this->session->userdata('Role') == 4 || $this->session->userdata('Role') == 6): ?>
                    Receptionist
                    <?php elseif($this->session->userdata('Role') == 5): ?>
                    Telecaller
                    <?php endif; ?>
                </div>
                <div class="navi mt-1">
                    <a href="#" class="navi-item">
                        <span class="navi-link p-0 pb-2">
                            <span class="navi-icon mr-1">
                                <span class="svg-icon svg-icon-lg svg-icon-primary">
                                    <!--begin::Svg Icon | path:/keen/theme/demo1/<?php echo assets_url; ?>media/svg/icons/Communication/Mail-notification.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                                fill="#000000" />
                                            <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                            <span
                                class="navi-text text-muted text-hover-primary"><?php echo $this->session->userdata("Email"); ?></span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Separator-->
        <div class="separator separator-dashed mt-8 mb-5"></div>
        <!--end::Separator-->
        <!--begin::Nav-->
        <?php if($this->session->userdata('Role') != 1): ?>
        <div class="navi navi-spacer-x-0 p-0">
            <span class="navi-item mt-2">
                <span class="navi-link">
                    <a href="<?php echo base_url; ?>profile"
                        class="btn btn-sm btn-warning btn-block font-weight-bolder py-3 px-6">Profile</a>
                </span>
            </span>
        </div>
        <?php endif; ?>
        <div class="navi navi-spacer-x-0 p-0">
            <span class="navi-item mt-2">
                <span class="navi-link">
                    <a href="<?php echo base_url; ?>signout"
                        class="btn btn-sm btn-light-primary btn-block font-weight-bolder py-3 px-6">Sign Out</a>
                </span>
            </span>
        </div>
        <!--end::Nav-->
        <!--begin::Separator-->
        <div class="separator separator-dashed my-7"></div>
        <!--end::Separator-->
        <!--begin::Notifications-->
    </div>
    <!--end::Content-->
</div>

<script>
if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}
</script>
<?php $this->load->view('footer'); ?>