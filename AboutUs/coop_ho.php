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
            const cordova = { lat: 10.252751, lng: 123.949263 };
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 20,
          center: cordova,
        });
        const marker = new google.maps.Marker({
          position: cordova,
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
                        <header>
                            <h2>Head Office</h2>

                        </header>

                        <span class="image featured">
                        <div class="col-6 picture" style="position:absolute;width:600px;z-index:1;"><img src="../images/building_nav.png" alt="" /></div>   
                        <div class="col-6" id="map"></div>
                          </span>
                        <article>
                            <div class="row gtr-200">  
                            <div class="col-12 col-12-narrower">
                            <h3>Office of the General Manager</h3>
                                </div>
                                <div class="col-5 col-12-narrower">
                               
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/HeadOffice/" alt=""></i>
                                        <div class="info">
                                        <h4>Neomelito D. Nunez</h4>
                                        <p>General Manager</p>
                                    </div>
                                    </div> 
                                     </div>
                                <div class="col-5 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/HeadOffice/" alt=""></i>
                                        <div class="info">
                                        <h4>Beth Clyden N. Quinaging</h4>
                                        <p>Secretary</p>
                                    </div>   
                                    </div>   
                                     
                                </div>
                              
                                <div class="col-4 col-12-narrower">
                                <h3>Internal Audit Department</h3><br><br><br>
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/HeadOffice/" alt=""></i>
                                        <div class="info"> 
                                        <h4>Leonardo D. Jurial</h4>
                                        <p>Internal Auditor</p>
                                     </div>
                                    </div>  
                                </div>
                       
                                <section class="col-4 col-12-narrower">
                                <h3>Treasury Department</h3><br><br><br>
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/HeadOffice/" alt=""></i>
                                        <div class="info">
                                        <h4>Delia B. Tampus</h4>
                                        <p>Treasury Head</p>
                                      </div>
                                       </div> 
                                     
                                        
                                </section>
                                <section class="col-4 col-12-narrower">
                                <h3>Credit and Saving Department</h3><br><br><br>
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/HeadOffice/dindin.png" alt=""></i>
                                        <div class="info">
                                            <h3>Henedina T. Sumalinog</h3>
                                        <p>Credit and Savings Head</p>
                                       </div>
                                         
                                    </div>

                                </section>
                                <section class="col-9 col-12-narrower">
                                    <h3>Credit and Collection Department</h3>
                                </section>
                                <section class="col-5 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/HeadOffice/elen.png" alt=""></i>
                                        <div class="info">
                                            <h4>Ellen T. Casquejo</h4>
                                        <p>Credit and Collection Head</p>
                                      </div>
                                      </div>  
                                     
                                </section>
                                <section class="col-5 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/HeadOffice/epe.png" alt=""></i>
                                        <div class="info">
                                          <h4>Fernando S. Rosani Jr.</h4>
                                        <p>Remedial Managment Officer</p>
                                     </div>
                                    </div>  
                                </section>

                                <section class="col-4 col-12-narrower">
                                <h3>Business Development Center</h3><br><br><br>
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/HeadOffice/" alt=""></i>
                                        <div class="info">
                                            <h4>Merylyn T. Dumusmog</h4>
                                        <p>Business Development Head</p>
                                      </div>  
                                    </div>      
                                </section>
                                <section class="col-4 col-12-narrower">
                                <h3>Business Enterprise Department</h3><br><br><br>
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/HeadOffice/" alt=""></i>
                                        <div class="info">
                                           <h4>Maria Divina Baguio</h4>
                                        <p>Business Enterprise Head</p>
                                      </div>   
                                    </div>
                  
                                </section>
                                <section class="col-12 col-12-narrower">
                                    <h3>Human Resources Department</h3>
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/HeadOffice/" alt=""></i>
                                        <div class="info">
                                          <h4>Jules Jun Y. Baguio</h4>
                                        <p>HR Officer</p>
                                     </div>
                                        
                                    </div>              
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/HeadOffice/" alt=""></i>
                                        <div class="info">
                                           <h4>Shaira T. Cabije</h4>
                                        <p>HR Staff</p>
                                    
                                     </div> 
                                    </div>  
         
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/HeadOffice/" alt=""></i>
                                        <div class="info">
                                         <h4>Corazon I. Lagahid</h4>
                                        <p>Laison Officer</p>
                                     </div>
                                    </div>    
                                   
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss ">
                                        <i class=""><img src="../images/branches/HeadOffice/junrey.png" alt=""></i>
                                        <div class="info">
                                           <h4>Junrey D. Amasula</h4>
                                        <p>Messenger / Liaison Officer</p>
                                       </div>   
                                    </div>   
                                    
                                </section>
                                <section class="col-9 col-12-narrower">
                                    <h3>Accounting Department</h3>
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/HeadOffice/ruthie.png" alt=""></i>
                                    
                                        <div class="info">
                                            <h4>Ruthie F. Villaflor</h4>
                                        <p>Accounting Head</p>
                                      </div>
                                    </div> 
                                        
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/HeadOffice/richmond.png" alt=""></i>
                                     
                                        <div class="info">
                                           <h4>Richmond I. Casquejo</h4>
                                        <p>Accounting Staff</p>
                                      </div>
                                    </div>  
                                     
                                       
                                    
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/HeadOffice/nino.png" alt=""></i>
                                        <div class="info">
                                        <h4>Nino Ruje G. Galeos</h4>
                                        <p>IT Officer</p>
                                    </div>
                                    </div>     
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/HeadOffice/" alt=""></i>
                                        <div class="info">
                                         <h4>Erwin James B. Manugas</h4>
                                        <p>IT Staff</p>
                                     </div>      
                                    </div> 
                                </section>
                        
                                <section class="col-9 col-12-narrower">
                                    <h3>Membership Department</h3>
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/HeadOffice/" alt=""></i>
                                        <div class="info">
                                          <h4>Florenda N. Cartilla</h4>
                                        <p>MRDO</p>
                                    </div> 
                                    </div>     
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/HeadOffice/hydie.png" alt=""></i>
                                        <div class="info">
                                          <h4>Hydie Jane M. Degamo</h4>
                                        <p>Marketing Staff</p>
                                      </div>  
                                    </div>  
                                </section>
                                <section class="col-9 col-12-narrower">
                                    <h3>General Support and Services Department</h3>
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/HeadOffice/chinot.png" alt=""></i>
                                        <div class="info">
                                              <h4>Lochinvar P. Nunez</h4>
                                        <p>GSS Head</p>
                                       </div> 
                                    </div>  
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/HeadOffice/cesar.png" alt=""></i>
                                        <div class="info">
                                            <h4>Cesar A. Pinote Jr.</h4>
                                        <p>Property Custodian</p>
                                       </div>
                                        
                                    </div>    
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/HeadOffice/" alt=""></i>
                                        <div class="info">
                                           <h4>Shiela Taneo</h4>
                                        <p>Utility</p>
                                    
                                     </div>
                                    </div>   
   
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/HeadOffice/" alt=""></i>
                                        <div class="info">
                                          <h4>Sorin Labad</h4>
                                        <p>Utility</p>
                                     </div>   
                                    </div>  
                                </section>
                                <section class="col-4 col-12-narrower">
                                    <div class="cardsss">
                                        <i class=""><img src="../images/branches/HeadOffice/" alt=""></i>
                                        <div class="info">
                                          <h4>Francisco P. Digamo Jr.</h4>
                                        <p>Utility</p>
                                     </div>  
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