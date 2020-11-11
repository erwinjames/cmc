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
            const basak = { lat: 10.298259, lng: 123.963543 };
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
<div class="se-pre-con"></div>
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
                            <h2>Basak Branch</h2>

                        </header>

                        <span class="image featured ">
                            
                        <div class="col-6 picture" style="position: absolute;width:600px;z-index:1;"><img src="../images/building_nav.png" alt="" /></div>   
                        <div class="col-6" id="map"></div>
                        </span>

                        <article>
                            <div class="row gtr-200">
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/basak/atan.png" alt=""></i>
                                    </div>  
                                <div class="info">
                                        <h4>Jonathan C. Amorin</h4>
                                        <p>Branch Manager</p>
                                </div>
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/basak/" alt=""></i>
                                    </div>  
                                <div class="info">
                                        <h4>Queenie C. Ompad</h4>
                                        <p>Bookkeepper</p>
                                </div>
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/basak/" alt=""></i>
                                    </div>  
                                <div class="info">
                                        <h4>Marichu R. Vequizo</h4>
                                        <p>Loan Officer</p>
                                </div>
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/basak/" alt=""></i>
                                    </div>  
                                <div class="info">
                                        <h4>Vergel A. Abaquita</h4>
                                        <p>Loan Assistant</p>
                                </div>
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/basak/" alt=""></i>
                                    </div>  
                                <div class="info">
                                        <h4>Michael D. Nunez</h4>
                                        <p>Credit Investigator</p>
                                </div>
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/basak/" alt=""></i>
                                    </div>  
                                <div class="info">
                                        <h4>Jorey John E. Javate</h4>
                                        <p>Accounts Officer</p>
                                </div>
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/basak/" alt=""></i>
                                    </div>  
                                <div class="info">
                                        <h4>Laryane D. Salimbagat</h4>
                                        <p>New Accounts</p>
                                </div>
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/basak/" alt=""></i>
                                    </div>  
                                <div class="info">
                                        <h4>Irish May M. Eyas</h4>
                                        <p>Teller</p>
                                </div>
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/basak/" alt=""></i>
                                    </div>  
                                <div class="info">
                                        <h4>Paul B. Lomotos</h4>
                                        <p>Collector</p>
                                </div>
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/basak/" alt=""></i>
                                    </div>  
                                <div class="info">
                                        <h4>Christian P. Sumagang</h4>
                                        <p>Collector</p>
                                </div>
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/basak/" alt=""></i>
                                    </div>  
                                <div class="info">
                                        <h4>Mark Kevin C. Sumagang</h4>
                                        <p>Collector</p>
                                </div>
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/basak/" alt=""></i>
                                    </div>  
                                <div class="info">
                                        <h4>Ruel Ybanez</h4>
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
    <script src="../assets/js/loading.js"></script>
</body>

</html>