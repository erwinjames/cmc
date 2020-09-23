<!DOCTYPE HTML>
<html>

<head>
    <title>Cordova Multipupose Cooperative</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link href="../assets/css/aos.css" rel="stylesheet">


</head>

<body class="is-preload">
    <!-- <div class="se-pre-con"></div> -->
    <div id="page-wrapper">

    <?php include "../includes/header2.php";?>  
    <nav id="nav">
    <ul>
        <li ><a href="index.php">Home</a></li>
        <li class="current">
            <a href="#">Blog</a>
            <ul>
                <li><a href="coop_news.php">Coop News</a></li>
                <li><a href="coop_career.php">Coop Career</a></li>

            </ul>
        </li>
        <li>
            <a href="#">Products and Services</a>
            <ul>
                <li><a href="savings_products.php">Savings</a></li>
                <li><a href="loans_products.php">Loans</a></li>
                <li><a href="youlabco.php">YOULABCO</a></li>
                <li><a href="mortuary_services.php">Mortaury</a></li>
                <li><a href="healthcare_products.php">Health care</a></li>
                <li><a href="lumberAndcunsumer.php">Lumber and Cosumer</a></li>
            </ul>
        </li>
        <li>
            <a>Contact Us</a>
            <ul>
                <li>
                    <a href="contact_details.php">Contact Details</a>
                </li>
                <li><a href="message_us.php">Message Us</a></li>

            </ul>
        </li>
        <!-- <li><a href="right-sidebar.html">About us</a></li> -->
        <li >
            <a >About Us</a>
            <ul>
                <li>
                    <a href="#">Branches And Offices</a>
                    <ul>
                        <li><a href="branches/coop_ho.php">Head Office</a></li>
                        <li><a href="branches/coop_main.php">Main Office</a></li>
                        <li><a href="branches/coop_llc.php">Lapu-Lapu Branch</a></li>
                        <li><a href="branches/coop_basak.php">Basak Branch</a></li>
                        <li><a href="branches/coop_olango.php">Olango Branch</a></li>
                        <li><a href="branches/coop_mandaue.php">Mandaue Office</a></li>
                        <li><a href="branches/coop_be.php">Business Enterprise</a></li>

                    </ul>
                </li>
                <li><a href="coop_history.php">Coop History</a></li>
                <li><a href="officers/coop_VMG.php">Mission,Vision,Goals</a></li>
                <li><a href="#">Awards and Recognations</a></li>
                <li><a href="#">Officers</a></li>
                <li><a href="#">Organization Structure</a></li>
                <li><a href="gallery.php">Gallery</a></li>
            </ul>
        </li>
        <li>
            <a href="">Membership</a>
            <ul>
                <li>
                    <a href="regular_membership.php">Regular Membership</a>
                </li>
                <li><a href="Online_Membership.php">Online Membership</a></li>
            </ul>
        </li>
        <li><a href="downloads.php">Downloads</a></li>
        <!-- <li><a href="two-sidebar.html">Two Sidebar</a></li>
        <li><a href="no-sidebar.html">No Sidebar</a></li> -->
    </ul>
</nav>
      </div>
        <section id="cta" class="wrapper style2">
            <div class="container">
                <header>
                    <h2>BLOG / COOP CAREER</h2>
                </header>
            </div>
        </section>
        <section class="wrapper style1">
            <div class="container">
                <div class="row gtr-200">
                    <div class="col-12 col-12-narrower">
                        <div class="cpbody">
                            <div class="positiontest">
                                <div class="containimage">
                                    <div class="slidecontainer">
                                        <div id="slideshows">
                                            <img class="imageflex" src="https://res.cloudinary.com/huda-tariq-design/image/upload/v1484581124/iStock-test2_n37c7a.jpg">
                                            <img class="imageflex" src="https://res.cloudinary.com/huda-tariq-design/image/upload/v1484578659/iStock-475690164_bfxqhu.jpg">
                                            <img class="imageflex" src="https://res.cloudinary.com/huda-tariq-design/image/upload/v1484671451/iStock-test3_i8awzu.jpg">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
              
                <div class="accordion">
                    <span class="target-fix" id="accordion"></span>
                    <?php
                include "../includes/connection.php";
                $sql= "SELECT * FROM career where stats=1";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $resultSet = $stmt->get_result();
                $result = $resultSet->fetch_all();
                foreach($result as $row){    ?>
                  <div>
                        <span class="target-fix" id="accordion<?php echo $row[0]; ?>"></span>
                        <a href="#accordion<?php echo $row[0]; ?>" id="open-accordion<?php echo $row[0]; ?>" title="open"><?php echo $row[1]; ?>:&nbsp;&nbsp;<small><?php echo $row[4];?></small></a>
                        <a href="#accordion" id="close-accordion<?php echo $row[0]; ?>" title="close"><?php echo $row[1]; ?>:&nbsp;&nbsp;<small style="color:gray"><?php echo $row[4];?></small></a>
                        <div class="accordion-content">
                           <h4>Description</h4>
                            <p><?php echo $row[2]; ?></p><br>
                            <h4>Qualifications</h4>
                            <p><?php echo $row[3]; ?></p>
                        </div>
                    </div>
                    
                    <?php }?>
                    
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
  <script src="../assets/js/loading.js"></script>

</body>

</html>