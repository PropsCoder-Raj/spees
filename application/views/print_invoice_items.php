

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
                                            <td colspan="2" style="border-right: 1px solid black;padding-right: 1rem;width: 30%">
                                                <img src="<?php echo assets_url; ?>media/images/logo.png" alt="logo" style="height: 100px" />
                                                <h6 style="margin-top: 30px;font-size: small;">AN ISO 9001:2015 CERTIFIED COMPANY</h6>
                                            </td>
                                            <td colspan="4" style="padding-left: 1rem;width: 50%">
                                                <h2 style="font-weight: bold; text-transform: uppercase;line-height: 1em;transform:scale(1,1.1);color: #34437a;font-size: 30px">
                                                    Early<br>
                                                    Intervention<br>
                                                    Center
                                                </h2>
                                            </td>
                                            <td colspan="1">
                                            </td>    
                                            <td colspan="1">
                                                <div style="background: linear-gradient(to right, #0d88c3, #34437a);height: 50px;width: 50px;border-radius: 50px;text-align: center;margin-right: 20px">
                                                    <i class="fa fa-globe" style="color: #fff;font-size: x-large;margin: 13px 0;"></i>
                                                </div>
                                                <br>
                                                <div style="background: linear-gradient(to right, #0d88c3, #34437a);height: 50px;width: 50px;border-radius: 50px;text-align: center;">
                                                    <i class="fa fa-mobile" style="color: #fff;font-size: x-large;margin: 13px 0;"></i>
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <h4 style="padding-top: 5px;margin: unset">www.speeshearing.com</h4>
                                                <h4 style="padding-top: 5px;margin: unset">Info@speeshearing.com</h4>
                                                <br>
                                                <h4 style="padding-top: 5px;">
                                                    +91 9697353510 <br>
                                                    +91 7410713510
                                                </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: solid 2px #34437a;padding-top: 20px;" colspan="12"></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-lg-12" style="padding-top: 10px;">
                                    <table style="width: 100%;">
                                        <tr>
                                            <td style="width: 33.33%">
                                                <h4>No : <?php echo $unique_id; ?></h4>
                                            </td>
                                            <td style="width: 33.33%">
                                            </td>
                                            <td style="width: 33.33%">
                                                <h4 style="text-align: right;">Date : <?php echo date_format( date_create($Created_At), 'd.m.Y'); ?></h4>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-lg-12" style="padding-top: 10px;">
                                    <table style="width: 100%;">
                                        <tr>
                                            <td style="width: 33.33%">
                                            </td>
                                            <td style="width: 33.33%">
                                                <h4 style="text-align: center;font-size: 30px;">Invoice</h4>
                                            </td>
                                            <td style="width: 33.33%">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-lg-12" style="padding-top: 30px;">
                                    <table>
                                        <tr>
                                            <td>
                                                <h4 style="font-size: 22px;margin-bottom: 2px;margin-left: 40px"><b style="font-weight: bold">Name : </b> <?php echo $patient_data[0]->Name; ?></h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4 style="font-size: 22px;margin-bottom: 2px;margin-left: 40px"><b style="font-weight: bold">Age : </b> <?php echo $patient_data[0]->Age; ?></h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4 style="font-size: 22px;margin-bottom: 2px;margin-left: 40px"><b style="font-weight: bold">Gender : </b> <?php echo $patient_data[0]->Gender; ?></h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4 style="font-size: 22px;margin-bottom: 2px;margin-left: 40px"><b style="font-weight: bold">Address : </b> <?php echo $patient_data[0]->Address; ?></h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4 style="font-size: 22px;margin-bottom: 2px;margin-left: 40px"><b style="font-weight: bold">Mobile : </b> <?php echo $patient_data[0]->Mobile; ?></h4>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                
                                <div class="col-lg-12" style="padding-top: 30px;">
                                    <table width="100%" style="border-collapse: collapse;border: solid 1px gray;font-size: large;">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th style="padding-top: 7px;padding-bottom: 7px;border-collapse: collapse;border: solid 1px gray;">Sr.No</th>
                                                <th style="padding-top: 7px;padding-bottom: 7px;border-collapse: collapse;border: solid 1px gray;">Item</th>
                                                <th style="padding-top: 7px;padding-bottom: 7px;border-collapse: collapse;border: solid 1px gray;">MRP</th>
                                                <th style="padding-top: 7px;padding-bottom: 7px;border-collapse: collapse;border: solid 1px gray;">GST</th>
                                                <th style="padding-top: 7px;padding-bottom: 7px;border-collapse: collapse;border: solid 1px gray;">Qty</th>
                                                <th style="padding-top: 7px;padding-bottom: 7px;border-collapse: collapse;border: solid 1px gray;">Total</th>
                                                <th style="padding-top: 7px;padding-bottom: 7px;border-collapse: collapse;border: solid 1px gray;">Discount</th>
                                                <th style="padding-top: 7px;padding-bottom: 7px;border-collapse: collapse;border: solid 1px gray;">Final Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; foreach ($items_data as $item) : ?>
                                                <tr style="text-align: center;">
                                                    <td style="padding-top: 7px;padding-bottom: 7px;border-collapse: collapse;border: solid 1px gray;border-top: unset;border-bottom: unset;"><?php echo $i; ?></td>
                                                    <td style="padding-top: 7px;padding-bottom: 7px;border-collapse: collapse;border: solid 1px gray;border-top: unset;border-bottom: unset;"><?php echo $item->Item_Name; ?></td>
                                                    <td style="padding-top: 7px;padding-bottom: 7px;border-collapse: collapse;border: solid 1px gray;border-top: unset;border-bottom: unset;">₹ <?php echo $item->MRP; ?></td>
                                                    <td style="padding-top: 7px;padding-bottom: 7px;border-collapse: collapse;border: solid 1px gray;border-top: unset;border-bottom: unset;"><?php echo $this->main_model->getItemData($item->Item_Id)[0]->GST; ?> %</td>
                                                    <td style="padding-top: 7px;padding-bottom: 7px;border-collapse: collapse;border: solid 1px gray;border-top: unset;border-bottom: unset;"><?php echo $item->Qty; ?></td>
                                                    <td style="padding-top: 7px;padding-bottom: 7px;border-collapse: collapse;border: solid 1px gray;border-top: unset;border-bottom: unset;">₹ <?php echo $item->Total; ?></td>
                                                    <td style="padding-top: 7px;padding-bottom: 7px;border-collapse: collapse;border: solid 1px gray;border-top: unset;border-bottom: unset;"><?php echo $item->Discount; ?> %</td>
                                                    <td style="padding-top: 7px;padding-bottom: 7px;border-collapse: collapse;border: solid 1px gray;border-top: unset;border-bottom: unset;">₹ <?php echo $item->Final_Amount; ?></td>
                                                </tr>    
                                            <?php $i++; endforeach; ?>
                                            
                                                <tr style="text-align: center;">
                                                    <td style="padding-top: 20px;padding-bottom: 20px;border-collapse: collapse;border: solid 1px gray;border-top: unset;border-bottom: unset;"></td>
                                                    <td style="padding-top: 20px;padding-bottom: 20px;border-collapse: collapse;border: solid 1px gray;border-top: unset;border-bottom: unset;"></td>
                                                    <td style="padding-top: 20px;padding-bottom: 20px;border-collapse: collapse;border: solid 1px gray;border-top: unset;border-bottom: unset;"></td>
                                                    <td style="padding-top: 20px;padding-bottom: 20px;border-collapse: collapse;border: solid 1px gray;border-top: unset;border-bottom: unset;"></td>
                                                    <td style="padding-top: 20px;padding-bottom: 20px;border-collapse: collapse;border: solid 1px gray;border-top: unset;border-bottom: unset;"></td>
                                                    <td style="padding-top: 20px;padding-bottom: 20px;border-collapse: collapse;border: solid 1px gray;border-top: unset;border-bottom: unset;"></td>
                                                    <td style="padding-top: 20px;padding-bottom: 20px;border-collapse: collapse;border: solid 1px gray;border-top: unset;border-bottom: unset;"></td>
                                                    <td style="padding-top: 20px;padding-bottom: 20px;border-collapse: collapse;border: solid 1px gray;border-top: unset;border-bottom: unset;"></td>
                                                </tr>    
                                        </tbody>
                                        <tfoot>
                                            <tr style="text-align: center;">
                                                <td colspan="4" style="padding-top: 7px;padding-bottom: 7px;border-collapse: collapse;border: solid 1px gray;">Total</td>
                                                <td style="padding-top: 7px;padding-bottom: 7px;border-collapse: collapse;border: solid 1px gray;"><?php echo $Total_Qty; ?></td>
                                                <td style="padding-top: 7px;padding-bottom: 7px;border-collapse: collapse;border: solid 1px gray;">₹ <?php echo $Total_Total; ?></td>
                                                <td style="padding-top: 7px;padding-bottom: 7px;border-collapse: collapse;border: solid 1px gray;"><?php echo $Total_Discount; ?> %</td>
                                                <td style="padding-top: 7px;padding-bottom: 7px;border-collapse: collapse;border: solid 1px gray;">₹ <?php echo $Total_Final_Amount; ?></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                                <div class="col-lg-12" style="padding-top: 30px;">
                                    <table width="100%" style="font-size: large;">
                                        <tr>
                                            <td>
                                                <ul style="list-style-type:disc">
                                                    <li>Received the goods in good condition</li>
                                                    <li>Goods once sold will not be taken back</li>
                                                    <li>NO exchange without bill</li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="col-lg-12" style="padding-top: 30px;">
                                    <table style="width: 100%;">
                                        <tr>
                                            <td style="width: 33.33%">
                                                <h4 style="color: red;font-size: 20px;">THANK YOU, VISIT AGAIN!</h4>   
                                            </td>
                                            <td style="width: 33.33%">
                                                <h5 style="text-align: center;margin-top: 40px;">Receiver's Signature</h5>
                                            </td>
                                            <td style="width: 33.33%">
                                                <h5 style="text-align: center;margin-top: 40px;">For: Spees Hearing Hub Pvt. Ltd.</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: solid 2px #34437a;padding-top: 20px;" colspan="12"></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-lg-12" style="padding-top: 10px;">
                                    <table style="width: 100%;">
                                        <tr>
                                            <td style="width: 5%">
                                                <div style="background: linear-gradient(to right, #0d88c3, #34437a);height: 50px;width: 50px;border-radius: 50px;text-align: center;">
                                                    <i class="fa fa-map-marker" style="color: #fff;font-size: x-large;margin: 13px 0;"></i>
                                                </div>
                                            </td>
                                            <td style="width: 95%;padding-left: 10px">
                                                <h4 style="text-align: center;padding-top: 5px;"> 
                                                    Reg. off.: Plot No. 3, Vijay Nagar, Jalna Road, Opp. Nupur (Mukta) Talkies, Seven Hiils, Aurangabad 431001
                                                </h4>
                                                <h4 style="text-align: center;padding-top: 5px;">
                                                र.जि. ऑफिस: प्लॉट क्र. 3, विजय नगर, जालना रोड, समोर. नुपूर (मुक्ता) टॉकीज, सेव्हन हिल्स, औरंगाबाद 431001
                                                </h4>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
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