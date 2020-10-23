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
<?php include "../includes/social_media.php"; ?>
    <!-- <div class="se-pre-con"></div> -->
    <div id="page-wrapper">

    <?php include "../includes/header2.php";?>  
    <?php include "news-menu.php";?>
      </div>
        <section id="cta" class="wrapper style2">
            <div class="container">
                <header>
                    <h2>WHAT'S NEW / COOP CAREER</h2>
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