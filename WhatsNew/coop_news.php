<!DOCTYPE HTML>
<html>

<head>
    <title>Cordova Multipupose Cooperative</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <!-- <link href="../assets/css/aos.css" rel="stylesheet"> -->
</head>

<body class="is-preload">
<div class="se-pre-con"></div>
<?php include "../includes/social_media.php"; ?>
    <!-- <div class="se-pre-con"></div> -->
    <div id="page-wrapper">

        <!-- Header -->
        <?php include "../includes/header2.php";?>  
        <?php include "news-menu.php";?>
      </div>
        <!-- Main -->
        <section id="cta" class="wrapper style2">
            <div class="container">
                <header>
                    <h2>WHAT'S NEW / COOP NEWS</h2>
                </header>
            </div>
        </section>
        <section class="wrapper style1">
        <div class="container">
        <?php
                include "../includes/connection.php";
                $sql= "SELECT * FROM blog where p_type=0";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $resultSet = $stmt->get_result();
                $result = $resultSet->fetch_all();
                foreach($result as $row){   $extractDateTime = $row[5]; ?>
            <div class="row gtr-50">
                <div class="col-6 col-12-narrower">
                    <div class='hover'>
                        <div class='module'>
                            <div class='thumbnail'>
                                <img src="../images/post_news/<?php echo $row[6]; ?>">
                                <div class='date'>
                                    <div><?php echo DateTime::createFromFormat("Y-m-d H:i:s",$extractDateTime)->format("m/d/Y");?></div>
                                </div>
                            </div>
                            <div class='content'>
                                <div class="category">Photos</div>
                                <h1 class='title'><?php echo $row[1]; ?></h1>
                                <h2 class='sub-title'><?php echo $row[2]; ?></h2>
                                <p class="description"><?php echo $row[3]; ?></p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <?php }?>
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
<!-- <script src="../assets/js/aos.js"></script>
<script>
    AOS.init();
  </script> -->
</html>