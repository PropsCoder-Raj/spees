<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'website';
$route['gallery'] = 'website/gallery';
$route['about'] = 'website/about';
$route['career'] = 'website/career';
$route['enquiry'] = 'website/enquiry';
$route['contact-us'] = 'website/contact_us';
$route['partner-with-us'] = 'website/partner_with_us';
$route['physiotherapy'] = 'website/physiotherapy';
$route['services-simple'] = 'website/services_simple';
$route['speech-therapy'] = 'website/speech_therapy';
$route['team'] = 'website/team';
$route['support-and-after-care'] = 'website/support_and_after_care';
$route['online-audio-logical-evaluation'] = 'website/online_audio_logical_evaluation';


$route['dashboard'] = 'welcome';
$route['progressreport'] = 'welcome/progress_report';

$route['reception/dashboard'] = 'reception';
$route['telecaller/dashboard'] = 'telecaller';
$route['internal/dashboard'] = 'doctors/internal';
$route['external/dashboard'] = 'doctors/external';
$route['rehab/dashboard'] = 'doctors/rehab';

$route['login'] = 'auth/login';
$route['signout'] = 'auth/signout';

$route['setup'] = 'setup/setup';

$route['branches'] = 'admin/branch';
$route['branches/(:num)'] = 'admin/branch/$1';
$route['procedure'] = 'admin/procedure';
$route['procedure/(:num)'] = 'admin/procedure/$1';
$route['referral'] = 'admin/referred_master';
$route['referral/(:num)'] = 'admin/referred_master/$1';
$route['forms-master'] = 'admin/forms';
$route['forms-master/(:num)'] = 'admin/forms/$1';
$route['delete-department-formstrans/(:num)/(:num)'] = 'admin/deletedepartmentformstrans/$1/$2';
$route['supplier'] = 'admin/supplier';
$route['supplier/(:num)'] = 'admin/supplier/$1';
$route['item'] = 'admin/item';
$route['item/(:num)'] = 'admin/item/$1';
$route['holiday'] = 'admin/holiday';
$route['holiday/(:num)'] = 'admin/holiday/$1';
$route['departments'] = 'admin/departments';
$route['departments/(:num)'] = 'admin/departments/$1';
$route['internal-doctors'] = 'admin/internal_doctors'; 
$route['internal-doctors/(:num)'] = 'admin/edit_internal_doctors/$1';
$route['add-internal-doctors'] = 'admin/edit_internal_doctors';
$route['edit-internal-doctors-slot/(:any)/(:any)/(:any)/(:any)'] = 'admin/edit_internal_doctors_slot/$1/$2/$3/$4';
$route['delete-internal-doctors-slot/(:any)/(:any)'] = 'admin/delete_internal_doctors_slot/$1/$2';
$route['external-doctors'] = 'admin/external_doctors';
$route['external-doctors/(:num)'] = 'admin/edit_external_doctors/$1';
$route['edit-external-doctors-slot/(:any)/(:any)/(:any)/(:any)'] = 'admin/edit_external_doctors_slot/$1/$2/$3/$4';
$route['delete-external-doctors-slot/(:any)/(:any)'] = 'admin/delete_external_doctors_slot/$1/$2';
$route['add-external-doctors'] = 'admin/edit_external_doctors';
$route['trc-manager'] = 'admin/rehab_professionals';
$route['trc-manager/(:num)'] = 'admin/rehab_professionals/$1';
$route['receptionist'] = 'admin/receptionist';
$route['receptionist/(:any)'] = 'admin/receptionist/$1';
$route['telecaller'] = 'admin/telecaller';
$route['telecaller/(:any)'] = 'admin/telecaller/$1';
$route['rewards'] = 'admin/rewards';
$route['rewards/(:any)'] = 'admin/rewards/$1';
$route['grant-leave/(:any)'] = 'admin/grantLeave/$1';
$route['web-contacts'] = 'admin/web_contacts';
$route['update-web-contacts/(:num)'] = 'admin/update_web_contacts/$1';


$route['follow-leads'] = 'telecaller/follow_leads';
$route['won-leads'] = 'telecaller/won_leads';
$route['lost-leads'] = 'telecaller/lost_leads';
$route['hold-leads'] = 'telecaller/hold_leads';

$route['patients'] = 'comman/patients';
$route['edit-patients/(:num)'] = 'comman/editPatients/$1';
$route['delete-patients/(:num)'] = 'comman/deletePatients/$1';
$route['add-patients'] = 'comman/editPatients';
$route['patient-details/(:num)'] = 'comman/patient_details/$1';
$route['profile'] = 'comman/profile';
$route['mark-online'] = 'comman/markOnline';
$route['mark-offline'] = 'comman/markOffline';
$route['sales'] = 'comman/sales';
$route['sales/(:any)/(:any)'] = 'comman/sales/$1/$2';
$route['leads'] = 'comman/leads';
$route['check_aadhaar_patient/(:any)'] = 'comman/check_aadhaar_patient/$1';
$route['check_pan_patient/(:any)'] = 'comman/check_pan_patient/$1';
$route['check_aadhaar/(:any)'] = 'comman/check_aadhaar/$1';
$route['check_pan/(:any)'] = 'comman/check_pan/$1';
$route['check_username/(:any)'] = 'comman/check_username/$1';
$route['forms/(:any)/(:any)/(:any)'] = 'comman/forms/$1/$2/$3';
$route['appoitment-list'] = 'comman/appoitment_list';
$route['waiting-appointment-list'] = 'comman/waiting_appoitment_list';
$route['attending-appointment-list'] = 'comman/attending_appoitment_list';
$route['canceled-appointment-list'] = 'comman/canceled_appoitment_list';
$route['recurring-appointment-list'] = 'comman/recurring_appoitment_list';
$route['recurring-appointment-view/(:any)'] = 'comman/recurring_appoitment_view/$1';
$route['delete-procedures/(:any)/(:any)'] = 'comman/delete_procedure/$1/$2';
$route['leave-management'] = 'comman/leave_list';
$route['getDoctorReward/(:num)'] = 'comman/getDoctorReward/$1';
$route['cancel-appoitment/(:any)'] = 'comman/cancelAppoitment/$1';
$route['cancel-leave/(:any)'] = 'comman/cancelLeave/$1';
$route['procedure-data-by-id/(:any)'] = 'comman/procedureDataById/$1';
$route['procedure-data-by-id-with-index/(:any)/(:any)'] = 'comman/procedureDataById/$1/$2';
$route['create-appointment'] = 'comman/createAppointment';
$route['create-recurring-appointment'] = 'comman/create_recurring_appoiment';
$route['cancel-recurring-appoitment/(:any)/(:any)'] = 'comman/cancelRecurringAppoitment/$1/$2';
$route['recommended-patients'] = 'comman/recommendedList';
$route['payment-receipt'] = 'comman/payment_receipt';
$route['create-payment-receipt'] = 'comman/create_payment_receipt';
$route['create-payment-receipt-procedures'] = 'comman/createPaymentReceiptProcedures';
$route['print-invoice/(:any)'] = 'comman/print_invoice/$1';

$route['procedure-data-by-id-without-fees/(:any)/(:any)/(:any)'] = 'comman/procedureDataByIdWithoutFees/$1/$2/$3';
$route['getDoctorAvailableSlots/(:any)/(:any)/(:any)'] = 'comman/getDoctorAvailableSlots/$1/$2/$3';
$route['calendar'] = 'comman/calendar';
$route['calendar/(:any)'] = 'comman/calendar/$1';
$route['calendar/(:any)/(:any)'] = 'comman/calendar/$1/$2';
$route['create-r-appointment'] = 'comman/createRAppointment';

$route['invoice'] = 'comman/invoice';
$route['create-invoice'] = 'comman/create_invoice';
$route['print-invoice-items/(:any)'] = 'comman/print_invoice_items/$1';
$route['patient-data-by-id/(:any)'] = 'comman/patientDataById/$1';
$route['item-data-by-id/(:any)'] = 'comman/itemDataById/$1';
$route['create-invoice-database'] = 'comman/create_invoice_database';
$route['create-invoice-items'] = 'comman/create_invoice_items';
$route['update-invoice-items-stock/(:any)/(:any)'] = 'comman/update_invoice_items_stock/$1/$2';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
