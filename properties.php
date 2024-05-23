<!DOCTYPE html>
<html lang="tr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300italic,600,600italic" rel="stylesheet">

    <title>Web Sayfa Prototip v1.0</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php"><img src="assets/images/logo.png" class="img-fluid" alt="" style="width: 8%;height: auto;"></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.php"  title="Anasayfa">Ana sayfa</a></li>
                          <li><a href="properties.php" class="active" title="Ürünler">Ürünler</a></li>
                          <li><a href="about.php" title="Hakkımızda">Hakkımızda</a></li>
                          <li><a href="gallery.php" title="Galeri" >Galerİ</a></li>
                          <li><a href="contact.php"   title="İletişim">İletİşİm</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menü</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Ürünlerimiz</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
   
  <section class="section" id="trainers">
    <div class="container">
 <br>
      <hr>

      <!-- Buraya banner gelecek -->

<br>
<h2 class="onecikan" style="    
      margin-bottom: 25px;
    font-size: 25px;
    text-transform: uppercase;
    font-weight: 600;
    color: black;
    letter-spacing: 1px;
    text-align: center;" 
    >ÜRÜNLER</h2>
      <div class="row">
        <?php
        include("baglanti.php");

        $sec = "select * from pembe";
        $sonuc = $baglan->query($sec);

        if ($sonuc->num_rows > 0) {
          while ($cek = $sonuc->fetch_assoc()) {
            echo "
                        <div class='col-lg-4'>
                            <div class='trainer-item'>
                                <div class='image-thumb'>
                                    <img src='" . $cek['resim'] . "' alt=''>
                                </div>
                                <div class='down-content'>
                                <span></span>
                                    <h4>" . $cek['isim'] . "</h4>
                                    <p>" . $cek['aciklama'] . "</p>
                                    <ul class='social-icons'>
                        <li><a href='property-details.php?id=" . $cek['id'] . "'>Detaylı bilgi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        ";
          }
        } else {
          echo "<div class='col-lg-12'><p>Veri yok dayı</p></div>";
        }
        ?>
      </div>
    </div>
    <hr>
  </section>

    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner">
                    <ul class="icons">
                        <li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
                    </ul>
                    </div>
                    <hr>
                    <p>
                    steelram.com copyright © 2024 <br> Designed & Developed By - BEKER SOFTWARE
                    </p>
                    <hr>
                    <br>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>