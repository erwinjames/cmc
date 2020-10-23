<!DOCTYPE HTML>
<html>

<head>
    <title>Cordova Multipupose Cooperative</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   

</head>

<body class="is-preload">
<?php include "../includes/social_media.php"; ?>
    <div class="se-pre-con"></div>
    <div id="page-wrapper">

        <!-- Header -->
        <?php include "../includes/header2.php";?>  
       <?php include "membership-menu.php";?>
      </div>

        <!-- Main -->
        <section id="cta" class="wrapper style2">
            <div class="container">
                <header>
                    <h2>Membership/Online Pre Membership Orientation</h2>
                </header>
            </div>
        </section>
        <section class="wrapper style1">
                <div class="container mt-2">
                    <div class="row gtr-200">   
                            <div class="col-12">
                            <form class="online__pre_memberhsip_container">
                            <div class="row gtr-50">
                                <div class="col-4 col-12-mobilep">
                                    <h6 class="online_pre_fonts">First Name *</h6>
                                    <input type="text" name="first_name" id="name" placeholder="First Name" />
                                </div>
                                <div class="col-4 col-12-mobilep">
                                <h6 class="online_pre_fonts">Middle Name</h6>
                                    <input type="text" name="mid_name" id="mid_name" placeholder="Middle Name" />
                                </div>
                                <div class="col-4 col-12-mobilep">
                                <h6 class="online_pre_fonts">Last Name</h6>
                                    <input type="text" name="Last_name" id="l_name" placeholder="Last Name" />
                                </div>
                                <div class="col-4 col-12-mobilep">
                                <h6 class="online_pre_fonts">Gender</h6>
                                <div class="input-radio">
                                <input type="radio" id="radio-1" name="sex" value="male" checked="checked">
                                <label for="radio-1">Male</label>
                                </div>
                            <div class="input-radio">
                                <input type="radio" id="radio-2" name="sex" value="female">
                                <label for="radio-2">Female</label>
                            </div>
                                </div>
                                <div class="col-4 col-12-mobilep">
                                <h6 class="online_pre_fonts">Birthdate *</h6>
                                <input class="calendar" id="datepicker">
                                </div>
                                <div class="col-4 col-12-mobilep">
                                <h6 class="online_pre_fonts">Email Address</h6>
                                <input type="email" name="email" id="email" placeholder="Email" />
                                </div>
                                <div class="col-12 col-12-mobilep">
                                <h6 class="online_pre_fonts">Present Address *</h6>
                                <input type="text" name="present_add" id="present_address" placeholder="Present Address" />
                                </div>
                              
                                <div class="col-6 col-12-mobilep">
                                <h6 class="online_pre_fonts">Occupation</h6>
                                <input type="text" name="occupation" id="occupation" placeholder="Occupation" />
                                </div>
                                
                                <div class="col-6 col-12-mobilep">
                                <h6 class="online_pre_fonts">Name of Employer/Business Name</h6>
                                <input type="text" name="employer_name" id="employer_name" placeholder="Name of Employer/Business Name" />
                                </div>
                                <div class="col-4 col-12-mobilep">
                                    <h6 class="online_pre_fonts">Preferred Branch Office</h6>
                                <select name="branch">
                                <option value="Main">Main Branch</option>
                                <option value="LLC">Lapu-Lapu Branch</option>
                                <option value="Basak">Basak Branch</option>
                                <option value="Olango">Olango Branch</option>
                                <option value="Mandaue">Mandaue</option>
                                </select>
                                </div>
                                <div class="col-4 col-12-mobilep">
                                    <h6 class="online_pre_fonts">Preferred Time (Philippine Time, PHT, GMT +8)</h6>
                                <select name="preferd_time">
                                <option value="10am">10:00 AM</option>
                                <option value="1pm">1:00 PM</option>
                                </select>
                                </div>
                                <div class="col-4 col-12-mobilep">
                                    <h6 class="online_pre_fonts">Contact number *</h6>
                                <input type="text" name="Contact_num" id="contact_num" placeholder="Contact Number" />
                                </div>
                                <div class="col-12 col-12-mobilep">
                                <b>Data Privacy Consent</b> <br>
                                    "In compliance with the Data Privacy Act (DPA) of 2012 and Credit Information Corporation (CIC), and its Implementing Rules and Regulations, I agree and authorize Cordova Multipupose Cooperative to use my Personal Information to process any transaction related in the availment of Cordova Cooperative's Products and Services, including the insurance services and administer the benefits as stated in the policy and other service agreements and inform me of future customer campaigns and base its offer using the personal information I shared with the company." *
                                </div>
                                <div class="col-4 col-12-mobilep">
                                <input type="checkbox" id="agree" name="fruit-1" value="Apple">
                               <label for="agree">&nbsp; I AGREE</label>
                                </div>
                                <div class="col-12">
                                    <ul class="actions">
                                        <li><input type="submit" class="button alt" value="Submit" /></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                             </div>
                  </div>

        </section>  

        <!-- Footer -->
        <?php include "../includes/footer.php"?>

   

    <!-- Scripts -->
  <!-- <script src="assets/js/jquery.min.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="../assets/js/jquery.dropotron.min.js"></script>
  <script src="../assets/js/browser.min.js"></script>
  <script src="../assets/js/breakpoints.min.js"></script>
  <script src="../assets/js/util.js"></script>
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/carousel.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
  <script src="../assets/js/loading.js"></script>
  <script>
       $(function() {
$( "#datepicker").datepicker();
});
  </script>
</body>

</html>