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
    <div class="se-pre-con"></div>
    <div id="page-wrapper">

        <!-- Header -->
        <?php include "../includes/header.php";?>  
        <?php include "AboutUs-menu.php"?>
      </div>

        <!-- Main -->
        <section id="cta" class="wrapper style2">
            <div class="container">
                <header>
                    <h2>GALLERY</h2>
                </header>
            </div>
        </section>
        <section class="wrapper style1">
            <div class="container">
                <div class="row gtr-200">
                    <a href="#" class="prev">&lt;</a>
                    <a href="#" class="next">&gt;</a>
                    <main class="containerss">
                    <?php
                include "../includes/connection.php";
                $sql= "SELECT * FROM blog";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $resultSet = $stmt->get_result();
                $result = $resultSet->fetch_all();
                foreach($result as $row){    ?>
                        <div class="horizontal picture">
                            <img src="../images/post_news/<?php echo $row[6]; ?>" alt="">
                        </div>
                <?php } ?>
                    </main>
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
     <script src="../assets/js/loading.js"></script>
    <script src="../assets/js/gallery.js"></script>

</body>

</html>