<!DOCTYPE HTML>
<html>

<head>
    <title>Cordova Multipupose Cooperative</title>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKLzuUoXmmeAjXfrHV4SEnq_wFjeFNn_g&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <script>
      function initMap() {
            const basak = { lat: 10.327362, lng: 123.943836 };
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 20,
          center: basak,
        });
        const marker = new google.maps.Marker({
          position: basak,
          map: map,
        });
      }
    </script>
</head>

<body class="is-preload">
<?php include "../includes/social_media.php"; ?>
    <div id="page-wrapper">

        <!-- Header -->
        <?php include "../includes/header2.php";?>
            <!-- Nav -->
            <?php include "AboutUs-menu.php"?>
        </div>

        <!-- Main -->
        <section class="wrapper style1">
            <div class="container">


                <div class="col-8  col-12-narrower imp-narrower">
                    <div id="content">

                        <!-- Content -->


                        <header>
                            <h2>Mandaue Office</h2>

                        </header>

                        <span class="image featured picture">
                            
                            <div class="col-6" style="position: absolute;width:600px;z-index:1;"><img src="../images/building_nav.png" alt="" /></div>   
                            <div class="col-6" id="map"></div>
                            </span>
                        <article>
                            <div class="row gtr-200">
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/mandaue/" alt=""></i>
                                    </div>  
                                <div class="info">
                                        <h4>Debbie T. Flores</h4>
                                        <p>Branch Manager</p>
                                </div>
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/mandaue/ian.png" alt=""></i>
                                    </div>  
                                <div class="info">
                                        <h4>Michael Ian P. Tajanlangit</h4>
                                        <p>Loan Officer</p>
                                </div>
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/mandaue/alex.png" alt=""></i>
                                    </div>  
                                <div class="info">
                                        <h4>Alexander Shien Crisosto</h4>
                                        <p>Loan Assistant</p>
                                </div>
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/mandaue/" alt=""></i>
                                    </div>  
                                <div class="info">
                                        <h4>Junriel G. Cutab</h4>
                                        <p>Credit Investigator</p>
                                </div>
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/mandaue/louie.png" alt=""></i>
                                    </div>  
                                <div class="info">
                                        <h4>Louie Jones L. Inoc</h4>
                                        <p>New Accounts</p>
                                </div>
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/mandaue/" alt=""></i>
                                    </div>  
                                <div class="info">
                                        <h4>Bonifacio S. Libaton</h4>
                                        <p>Collector</p>
                                </div>
                                </section>
                            </div>
                        </article>

                    </div>
                </div>

            </div>
        </section>

        <!-- Footer -->
        <?php include "../includes/footer.php"?>

    <!-- Scripts -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/jquery.dropotron.min.js"></script>
    <script src="../assets/js/browser.min.js"></script>
    <script src="../assets/js/breakpoints.min.js"></script>
    <script src="../assets/js/util.js"></script>
    <script src="../assets/js/main.js"></script>

</body>

</html>