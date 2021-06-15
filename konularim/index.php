<?php 
include 'baglanti.php';
$c="'"; 
if($_GET['adminim']=="15359769768aa5"){header("Location:../admin/");}
if($_GET['i']==1){header("Location:sayfalar/internetten-para-kazanmak.php");}
if($_GET['i']==2){header("Location:sayfalar/yazilim.php");}
if($_GET['i']==3){header("Location:sayfalar/eglence.php");}
if($_GET['i']==4){header("Location:sayfalar/rpi.php");}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shortcut icon" href="../img/logo.png">
  <title>Konularım - Mücahit Sendinç'in Blogu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-157302467-1');
  </script>

  <link href="https://fonts.googleapis.com/css?family=B612+Mono|Cabin:400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/tasarim.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    
    <div class="header-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-lg-6 d-flex">
            <a href="index.php" class="site-logo">
              MÜCAHİT
            </a>

            <a href="#" class="ml-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>

          </div>
          <div class="col-12 col-lg-6 ml-auto d-flex">
            <div class="ml-md-auto top-social d-none d-lg-inline-block">
              <a href="http://instagram.com/mucahitsndc" class="d-inline-block p-3" target="_blank"><span class="icon-facebook"></span></a>
                <a href="http://instagram.com/mucahitsndc" class="d-inline-block p-3" target="_blank"><span class="icon-twitter"></span></a>
                <a href="http://instagram.com/mucahitsndc" class="d-inline-block p-3" target="_blank"><span class="icon-instagram"></span></a>
            </div>
            

            
          </div>
          <div class="col-6 d-block d-lg-none text-right">
            
          </div>
        </div>
      </div>
      


      
      <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                <li class="active" id="checked">
                  <a href="index.php" class="nav-link text-left">Ana Sayfa</a>
                </li>
                <li>
                  <a href="index.php?i=1" class="nav-link text-left">İnternetten Para Kazanmak</a>
                </li>
                <li>
                  <a href="index.php?i=2" class="nav-link text-left">Yazılım</a>
                </li>
                
                <li><a href="index.php?i=4" class="nav-link text-left">Raspberry Pi</a></li>
               <li><form action="ara.php" class="search-form d-inline-block" method="POST">

              <div class="d-flex">
                <input type="text" class="form-control" name="deger" placeholder="Ara...">
                <button type="submit" class="btn btn-secondary" ><span class="icon-search"></span></button>
              </div>
            </form></li>
              </ul>                                                                                                                                                                                                                                                                                         
            </nav>

          </div>
         
        </div>
      </div>

    </div>
    
    </div>

    <div class="site-section py-0">
      <div class="owl-carousel hero-slide owl-style">

      <?php 
        $sayi=mysql_num_rows(mysql_query("select * from konular"));
        for ($i=0; $i < $sayi; $i++) { 
          $q=mysql_query("select * from konular where konu_id=".($sayi-$i)." and vip=1");
          if ($bak=mysql_fetch_assoc($q)) {
            $resim=$bak['resim'];
            $baslik=$bak['baslik'];
            $kategori=$bak['kategori'];
            if($kategori=="ipk"){ $kategori="İNTERNETTEN PARA KAZANMAK"; }
            $tanitim=$bak['tanitim'];
            $tarih=$bak['tarih'];
            $ekleyen=$bak['ekleyen'];
            $icerikid=$bak['icerik'];
            echo '<div class="site-section">
            <div class="container">
              <div class="half-post-entry d-block d-lg-flex bg-light">
                <div class="img-bg" style="background-image: url('.$c.$resim.$c.')"></div>
                <div class="contents">
                  <span class="caption">'.$kategori.'</span>
                  <h2><a href="sayfalar/'.$icerikid.'">'.$baslik.'</a></h2>
                  <p class="mb-3">'.$tanitim.'</p>
                   <a href="sayfalar/'.$icerikid.'"><span style="color:lightblue;font-weight:bold;cursor:pointer;">devamını okumak için tıklayın...</span></a>
                  <div class="post-meta">
                    <span class="d-block"><a href="http://mucahits.tk/">'.$ekleyen.'</a> ekledi <a href="#">'.$kategori.'</a></span>
                    <span class="date-read">'.$tarih.' <span class="mx-1">&bullet;</span> </span>
                  </div>

                </div>
              </div>
            </div>
          </div>';
          }
          
        }
      ?>

       




      </div>
    </div>
  
<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
              <h2>Son Konular</h2>
            </div>
          
            <?php 
            $query=mysql_query("select * from konular");
            for ($i=0; $i <= $sayi; $i++) { 
              $q2=mysql_query("select * from konular where konu_id=".($sayi-$i));
              if ($bak=mysql_fetch_assoc($q2)) {
                  $resim=$bak['resim'];
                  $baslik=$bak['baslik'];
                  $kategori=$bak['kategori'];
                  if($kategori=="ipk"){ $kategori="İNTERNETTEN PARA KAZANMAK"; }
                  $tanitim=$bak['tanitim'];
                  $tarih=$bak['tarih'];
                  $ekleyen=$bak['ekleyen'];
                  $icerikid=$bak['icerik'];
                echo '<div class="post-entry-2 d-flex">
              <div class="thumbnail" style="background-image: url('.$c.$resim.$c.')"></div>
              <div class="contents">
                <h2><a href="sayfalar/'.$icerikid.'">'.$baslik.'</a></h2>
                <p class="mb-3">'.$tanitim.'</p>  
                <a href="sayfalar/'.$icerikid.'"><span style="color:lightblue;font-weight:bold;cursor:pointer;">devamını okumak için tıklayın...</span></a>
                <div class="post-meta">
                  <span class="d-block"><a href="sayfalar/'.$icerikid.'">'.$ekleyen.'</a> ekledi <a href="sayfalar/'.$icerikid.'">'.$kategori.'</a></span>
                  <span class="date-read">'.$tarih.' <span class="mx-1">&bullet;</span></span>
                </div>
              </div>
            </div>';
              }
            }

            ?>
            
           
          </div>
      
        </div>
      </div>
    </div>

   

    
    <div class="footer">
      <div class="container">
        

        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tüm Hakları Saklıdır | Bu Blog   <a href="http://mucahitcreator.rf.gd/?open=instagram" target="_blank" >MÜCAHİT SENDİNÇ</a>in dir
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>

</body>

</html>