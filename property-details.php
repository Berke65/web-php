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

  <style>
  /* Görünüm için CSS */
  .tabs-content article {
    display: none;
  }
  .tabs-content article.active {
    display: block;
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
                      <a href="index.php"><img src="assets/images/logo.png" class="img-fluid abc" alt="" style="width: 8%;height: auto;"></a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                        <li><a href="index.php"  title="Anasayfa">Ana sayfa</a></li>
                        <li><a href="properties.php" class="active"  title="Ürünler">Ürünler</a></li>
                        <li><a href="about.php" title="Hakkımızda">Hakkımızda</a></li>
                        <li><a href="gallery.php" title="Galeri" >Galerİ</a></li>
                        <li><a href="contact.php"  title="İletişim">İletİşİm</a></li>
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
                        <h2>Ürün <em>Detayları</em></h2>
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
            <br>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="row">
              <div class="carousel-inner">
              <div class="container">
    <div class="row">
        <!-- Resim -->
        <div class="col-md-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php    
                        include("baglanti.php");

                        $id = $_GET['id'];

                        $sec = "SELECT resim FROM pembe where id = $id LIMIT 1"; // Sadece ilk resmi al
                        $sonuc = $baglan->query($sec);

                        if ($sonuc->num_rows > 0) {
                            $cek = $sonuc->fetch_assoc(); // Sadece ilk resmi al
                            echo "<div class='carousel-item active'>";
                            echo "<img class='d-block img-fluid' src='" . $cek["resim"] . "' alt='Ürün Fotoğrafı' style='width: 100%; border: 1px solid gray; border-radius: 14px;'>";
                            echo "</div>";
                        } else {
                        }
                    ?>
                </div>
            </div>
        </div>
        <!-- Bilgiler -->
        <div class="col-md-6">
            <label for="tabs-select">Ürün Bilgileri:</label>
            <select id="tabs-select" onchange="showTab()" class="form-control">
                <option value="tabs-1" selected>Ürün Detayları</option>
                <option value="tabs-2">Ürün Açıklaması</option>
                <option value="tabs-3">Taksit Seçenekleri</option>
            </select>
            <br>
            <section class="tabs-content">
                <!-- Ürün Detayları -->
                <article id="tabs-1" class="active">
                    <h4>Ürün Detayları</h4>
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Üretici</label>
                            <p>SpeTool</p>
                        </div>
                        <div class="col-sm-6">
                            <label>Ürün Kodu</label>
                            <p>OP2F-D16-D8</p>
                        </div>
                        <div class="col-sm-6">
                            <label>Paket Boyutları</label>
                            <p>15.4 x 8.8 x 1.9 cm; 20 gram</p>
                        </div>
                        <div class="col-sm-6">
                            <label>Marka</label>
                            <p>Yerli Malı Yurdun Malı</p>
                        </div>
                        <div class="col-sm-6">
                            <label>Menşei</label>
                            <p>Türkiye</p>
                        </div>
                        <div class="col-sm-6">
                            <label>ASIN</label>
                            <p>B0C22VPP65</p>
                        </div>
                    </div>
                </article>
                <!-- Ürün Açıklaması -->
                <article id="tabs-2">
                    <h4>Ürün Açıklaması</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia doloremque sit, enim sint odio corporis illum perferendis, unde repellendus aut dolore doloribus minima qui ullam vel possimus magnam ipsa deleniti.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ducimus ab numquam magnam aliquid, odit provident consectetur corporis eius blanditiis alias nulla commodi qui voluptatibus laudantium quaerat tempore possimus esse nam sed accusantium inventore? Sapiente minima dicta sed quia sunt?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum qui, corrupti consequuntur. Officia consectetur error amet debitis esse minus quasi, dicta suscipit tempora, natus, vitae voluptatem quae libero. Sunt nulla culpa impedit! Aliquid cupiditate, impedit reiciendis dolores, illo adipisci, omnis dolor distinctio voluptas expedita maxime officiis maiores cumque sequi quaerat culpa blanditiis. Quia tenetur distinctio rem, quibusdam officiis voluptatum neque!</p>
                </article>
                <!-- Taksit Seçenekleri -->
                <article id="tabs-3">
                    <h4>Taksit Seçenekleri</h4>
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Havale / Eft :</label>
                            <p> Havale İle : 233,96 TL</p>
                        </div>
                        <div class="col-sm-6">
                            <label>Kapıda Ödeme: </label>
                            <p> Kapıda Ödeme ile : 246,27 TL</p>
                        </div>
                        <div class="col-sm-6">
                            <label>Kredi kartı: </label>
                            <p> Tek Çekim : 236,27 TL</p>
                        </div>
                    </div>
                </article>
            </section>
        </div>
    </div>
</div>



<script>
  function showTab() {
    var select = document.getElementById("tabs-select");
    var selectedOption = select.options[select.selectedIndex].value;
    var articles = document.querySelectorAll('.tabs-content article');
    
    // Tüm sekmeleri gizle
    articles.forEach(function(article) {
      article.style.display = 'none';
    });

    // Seçilen sekmeyi göster
    var selectedTab = document.getElementById(selectedOption);
    selectedTab.style.display = 'block';
  }
</script>

            
            <br>
            <br>

    <!-- ***** Fleet Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <hr>
                  <p>
                  steelram.com copyright © 2024 <br> Designed & Developed By - BEKER SOFTWARE
                  </p>
              </div>
          </div>
      </div>
  </footer>
  <hr>
  <br>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Enquiry</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-us">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter full name" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <div class="row">
                             <div class="col-md-6">
                                <fieldset>
                                  <input type="text" class="form-control" placeholder="From date" required="">
                                </fieldset>
                             </div>

                             <div class="col-md-6">
                                <fieldset>
                                  <input type="text" class="form-control" placeholder="To date" required="">
                                </fieldset>
                             </div>
                          </div>
                       </div>
                  </div>
              </form>
           </div>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Send Request</button>
          </div>
        </div>
      </div>
    </div>

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