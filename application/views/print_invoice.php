<style>
    .new-chat-window {
  position: relative;
  width: 200px;
  display: block;
  margin: 10px auto;
  text-align: center;
  z-index: 2;
}

.new-chat-window .fa {
  position: absolute;
  top: 7px;
  left: 10px;
  font-weight: bold;
  font-style: normal;
}

input:focus {
  outline-color: $blue;
}

.new-chat-window-input {
  border: 1px solid black;
  line-height: 30px;
  padding-left: 30px;
  width: 100%;
  z-index: 1;
}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
  font-size: large;
  border: 2px solid black;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
}
</style>

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <table style="width: 100%;">
                                        <tr>
                                            <td colspan="2" style="border-right: 1px solid black;padding-right: 1rem;width: 10%">
                                                <img src="<?php echo assets_url; ?>media/images/logo.png" alt="logo" />
                                            </td>
                                            <td colspan="4" style="padding-left: 1rem;">
                                                <h2 style="font-weight: bold; text-transform: uppercase;line-height: 1em;transform:scale(1,1.1);color: #34437a;">
                                                    Early<br>
                                                    Intervention<br>
                                                    Center
                                                </h2>
                                            </td>
                                            <td colspan="3">
                                            </td>
                                            <td colspan="3">
                                                <h4>Receipt No : <?php echo $unique_id; ?></h4>
                                                <h4>Date: <?php $timezone = date_default_timezone_set("Asia/Calcutta"); $date = date('d.m.Y', time()); echo $date; ?></h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: solid 2px #34437a;padding-top: 20px;" colspan="12"></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-lg-12" style="padding-top: 30px;">
                                    <table>
                                        <tr>
                                            <td>
                                                <h4 style="font-size: 22px;margin-bottom: 2px;"><b style="font-weight: bold">Received with thanks from : </b> <?php echo $patient_data[0]->Name; ?></h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4 style="font-size: 22px;margin-bottom: 2px;"><b style="font-weight: bold">Sum of rupees : </b> <?php echo $sum_of_rupees; ?></h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4 style="font-size: 22px;margin-bottom: 2px;"><b style="font-weight: bold">Mode of payment : </b> <?php echo $payment_mode; ?></h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4 style="font-size: 22px;margin-bottom: 2px;"><b style="font-weight: bold">Date : </b> <?php echo date_format( date_create($date), 'd.m.Y'); ?></h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4 style="font-size: 22px;margin-bottom: 2px;"><b style="font-weight: bold">Procedure : </b> <?php echo $procedure_data[0]->Procedure_Name; ?></h4>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-lg-12" style="padding-top: 30px;">
                                    <table style="width: 100%;">
                                        <tr>
                                            <td colspan="3">
                                                <div class="input-container" style="margin-top: 150px">
                                                    <i class="fa fa-rupee icon" style="background: black;color: white;
                                                    padding: 10px;min-width: 50px;font-size: x-large;text-align: center;border-top-left-radius: 10px;border-bottom-left-radius: 10px;"></i>
                                                    <input class="input-field" type="text" name="amount" value="<?php echo $fees; ?>" disabled>
                                                </div>
                                            </td>
                                            <td colspan="9">
                                                <br><br>
                                                <h5 style="padding-left: 40px;text-align: right;margin-top: 150px;margin-right: 80px;">Sign & Stamp</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: solid 2px black;padding-top: 20px;" colspan="12"></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-lg-12" style="padding-top: 10px;">
                                    <table style="width: 100%;">
                                        <tr>
                                            <td style="width: 5%">
                                                <div style="background: linear-gradient(to right, #0d88c3, #34437a);height: 50px;width: 50px;border-radius: 50px;text-align: center;">
                                                    <i class="fa fa-mobile" style="color: #fff;font-size: x-large;margin: 13px 0;"></i>
                                                </div>
                                            </td>
                                            <td style="width: 25%;padding-left: 10px">
                                                <h4 style="padding-top: 5px;">
                                                    +91 9697353510 <br>
                                                    +91 7410713510
                                                </h4>
                                            </td>
                                            <td style="width: 5%">
                                                <div style="background: linear-gradient(to right, #0d88c3, #34437a);height: 50px;width: 50px;border-radius: 50px;text-align: center;">
                                                    <i class="fa fa-globe" style="color: #fff;font-size: x-large;margin: 13px 0;"></i>
                                                </div>
                                            </td>
                                            <td style="width: 25%;padding-left: 10px">
                                                <h4 style="padding-top: 5px;">www.speeshearing.com</h4>
                                            </td>
                                            <td style="width: 5%">
                                                <div style="background: linear-gradient(to right, #0d88c3, #34437a);height: 50px;width: 50px;border-radius: 50px;text-align: center;">
                                                    <i class="fa fa-map-marker" style="color: #fff;font-size: x-large;margin: 13px 0;"></i>
                                                </div>
                                            </td>
                                            <td style="width: 35%;padding-left: 10px">
                                                <h4 style="padding-top: 5px;">Reg. off.: At seven hills signal, jalna-aurangabad road,
                                                    opp.napur (mukta) talkies, aurangabad 431001
                                                </h4>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <!-- <div class="col-lg-2" style="border-right: solid 1px black;">
                                    <img src="<?php echo assets_url; ?>media/images/logo.png" alt="logo" class="h-60px" />
                                </div>
                                <div class="col-lg-2">
                                    <h2 style="font-weight: bold; text-transform: uppercase;line-height: 1em;transform:scale(1,1.1);color: #34437a">
                                        Early
                                        Intervention
                                        Center
                                    </h2>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>        
</div>

<script>
        $('#kt_header').hide();
        $('#kt_aside').hide();
        $('#kt_aside_menu_wrapper').hide();
        $('#kt_footer').hide(); 

        window.print();
        setTimeout(() =>{
            window.close();
        }, 1000)
</script>