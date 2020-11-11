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
            const basak = { lat: 10.265973, lng: 124.048347 };
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
        <?php include "../includes/header2.php" ;?>
            <!-- Nav -->
            <?php include "AboutUs-menu.php"?>
        </div>

        <!-- Main -->
        <section class="wrapper style1">
            <div class="container">
                <div class="col-8  col-12-narrower imp-narrower">
                    <div id="content">
                        <header>
                            <h2>Olango Branch</h2>
                        </header>
                        <span class="image featured">
                            <div class="col-6 picture" style="position: absolute;width:400px;z-index:1;"><img src="../images/building_nav.png" alt="" /></div>   
                            <div class="col-6" id="map"></div>
                            </span>
                        <article>
                            <div class="row gtr-200">
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/olango/renato.png" alt=""></i>
                                    </div>  
                                <div class="info">
                                        <h4>Renato O. Mejasco</h4>
                                        <p>Branch Manager</p>
                                </div>
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/olango/rayca.png" alt=""></i>
                                    </div>  
                                <div class="info">
                                        <h4>Rayca R. Copio</h4>
                                        <p>Bookkeeper</p>
                                </div>
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/olango/rolando.png" alt=""></i>
                                    </div>  
                                <div class="info">
                                        <h4>Rolando O. Dano</h4>
                                        <p>Loan Officer</p>
                                </div>
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/olango/patrick.png" alt=""></i>
                                    </div>  
                                <div class="info">
                                        <h4>Patricio T. Tagsip</h4>
                                        <p>Loan Assistant</p>
                                </div>
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/olango/" alt=""></i>
                                    </div>  
                                <div class="info">
                                        <h4>Joseph Ponce</h4>
                                        <p>Credit Investigator</p>
                                </div>
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/olango/keneth.png" alt=""></i>
                                    </div>  
                                <div class="info">
                                        <h4>Kenneth Rex Ybanez</h4>
                                        <p>Accounts Officer</p>
                                </div>
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/olango/michael.png" alt=""></i>
                                    </div>  
                                <div class="info">
                                        <h4>Jan Michael A. Mendoza</h4>
                                        <p>New Accounts</p>
                                </div>
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/olango/marites.png" alt=""></i>
                                    </div>  
                                <div class="info">
                                        <h4>Marites Ompad</h4>
                                        <p>Teller</p>
                                </div>
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/olango/ranil.png" alt=""></i>
                                    </div>  
                                <div class="info">
                                        <h4>Ranil A. Cabucos</h4>
                                        <p>Collector</p>
                                </div>
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/olango/zidney.png" alt=""></i>
                                    </div>  
                                <div class="info">
                                        <h4>Zidney Clen R. Paquibot</h4>
                                        <p>Collector</p>
                                </div>
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/olango/" alt=""></i>
                                    </div>  
                                <div class="info">
                                        <h4>Albert Jay U. Tatoy</h4>
                                        <p>Collector</p>
                                </div>
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/olango/joelito.png" alt=""></i>
                                    </div>  
                                <div class="info">
                                        <h4>Joelito G. Tisoy</h4>
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