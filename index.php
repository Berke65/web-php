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

  <link rel="stylesheet" href="assets/icofont/icofont.min.css">


  <style>
    .deneme div {
      margin: 10px;
      border: 1px solid #ccc;
      padding: 10px;
      text-align: center;
      border-radius: 20px;
    }

    .deneme div img {
      max-width: 100%;
      height: auto;
      border-radius: 20px;
    }

    .deneme div p {
      margin-top: 10px;
      font-size: 16px;
      font-weight: bold;
    }

    .altkisim {
      display: flex;
    flex-wrap: wrap;
    margin: 0 -15px;
    justify-content: center;
}

.aa,
.bb,
.cc,
.dd {
  width: calc(25% - 35px);
  margin: 5px;
  text-align: center;
  background-color: #f2f2f2;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.aa i,
.bb i,
.cc i,
.dd i {
  font-size: 3rem;
  margin-bottom: 10px;
}

.ab {
  font-size: 1.2rem;
  color: #333;
  margin-bottom: 10px;
  
}
@media (max-width: 768px) {
  .aa,
  .bb,
  .cc,
  .dd {
    width: calc(100% - 30px); /* Tek sütunlu */
  }
}

.abc{
  width: 8%;
  height: auto;
}

@media (max-width: 990px) {
  .abc {
    width: 12%; /* Oranı %20 olarak değiştirdim */
  }
}

@media (max-width: 760px) {
  .abc {
    width: 15%; /* Oranı %20 olarak değiştirdim */
  }
}

@media (max-width: 606px) {
  .abc {
    width: 25%; /* Oranı %20 olarak değiştirdim */
  }
}

  </style>

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
            <a href="index.php"><img src="assets/images/logo.png" class="abc" alt=""></a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="index.php" class="active" title="Anasayfa">Ana sayfa</a></li>
              <li><a href="properties.php" title="Ürünler">Ürünler</a></li>
              <li><a href="about.php" title="Hakkımızda">Hakkımızda</a></li>
              <li><a href="gallery.php" title="Galeri">Galerİ</a></li>
              <li><a href="contact.php" title="İletişim">İletİşİm</a></li>
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

  <!-- ***** Main Banner Area Start ***** -->
  <div class="main-banner" id="top">
    <video autoplay muted loop id="bg-video">
      <source src="assets/images/video.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
      <div class="caption">
        <h2>Steelram</h2>
      </div>
    </div>
  </div>
  <!-- ***** Main Banner Area End ***** -->

  <!-- ***** Featured Products Start ***** -->

  <!-- BURAYA BANNER GELECEK  -->

  <!-- ***** Featured Products ends Here ***** -->
  <br>

  <!-- ***** Cars Starts ***** -->

  <section class="section" id="trainers">
    <div class="container">
      <h2 class="onecikan" style="    
    margin-bottom: 25px;
    font-size: 25px;
    text-transform: uppercase;
    font-weight: 600;
    color: black;
    letter-spacing: 1px;" 
    >ÖNE ÇIKAN KATEGORİLER</h2>

      <div class="deneme" style="display: flex; overflow-x: auto;">
        <div>
          <img src="assets/images/a.png" alt="">
          <p>Ürün A</p>
        </div>
        <div>
          <img src="assets/images/b.png" alt="">
          <p>Ürün B</p>
        </div>
        <div>
          <img src="assets/images/c.png" alt="">
          <p>Ürün C</p>
        </div>
        <div>
          <img src="assets/images/d.png" alt="">
          <p>Ürün D</p>
        </div>
        <div>
          <img src="assets/images/e.png" alt="">
          <p>Ürün E</p>
        </div>
        <div>
          <img src="assets/images/f.png" alt="">
          <p>Ürün F</p>
        </div>
        <div>
          <img src="assets/images/g.png" alt="">
          <p>Ürün G</p>
        </div>
      </div>
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
    >En Çok Tercih Edilenler</h2>
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
  <!-- ***** Cars Ends ***** -->
        <!-- Buraya banner gelecek -->

<div class="altkisim">

      <div class="aa">
      <i class="icofont-fast-delivery"></i> <div class="ab"><strong>Hızlı Ve Güvenli</strong> <br>Güvenlik Teminatı Altında Satın Alın</div>
      </div>

       <div class="bb">
       <i class="icofont-shopping-cart"></i> <div class="ab"><strong>Rekabetçi Fiyat</strong> <br> Sürdürülebilir Kaliteyi Rekabetçi Kullanın</div>
       </div>

       <div class="cc">
       <i class="icofont-dart"></i> <div class="ab"><strong>Kalite</strong> <br>Yüksek Kalite Standartlarında Ürünler</div>
       </div>

       <div class="dd">
       <i class="icofont-ssl-security"></i> <div class="ab"><strong>Güvenlik</strong><br>Güvenli Ödeme Yöntemleri İle Satın Alın</div>
       </div>

       </div>
  
<br>
  <hr>
  <br>
  <br>
  <br>
  <!-- ***** Call to Action Start ***** -->
  <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/contact.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="cta-content">
            <h2>İletişim</h2>
            <p>Sorularınız mı var, geri bildirimde bulunmak mı istiyorsunuz veya işbirliği fırsatları hakkında daha fazla bilgi almak mı istiyorsunuz? Bizimle iletişime geçmekten çekinmeyin!</p>
            <div class="main-button">
              <a href="contact.html">Bizimle İletişime Geç</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Call to Action End ***** -->



  <hr>

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
        </div>
      </div>
    </div>
  </footer>
  <hr>
  <!-- ***** Footer End ***** -->

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
