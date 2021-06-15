<?php include '../baglanti.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>İnternetten para kazanmak - Mücahit Sendinç'in Blogu</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="../../img/logo.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-157302467-1');
  </script>

  <link href="https://fonts.googleapis.com/css?family=B612+Mono|Cabin:400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../fonts/icomoon/style.css">

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/jquery-ui.css">
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">

  <link rel="stylesheet" href="../css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="../css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="../css/aos.css">
  <link href="../css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/tasarim.css">

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <?php include'header.php'; ?>
            <?php 
            $sayi=mysql_num_rows(mysql_query("select * from konular"));
            $query=mysql_query("select * from konular");
            for ($i=0; $i <= $sayi; $i++) { 
              $q2=mysql_query("select * from konular where kategori='ipk' and konu_id=".($sayi-$i));
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
                <h2><a href="'.$icerikid.'">'.$baslik.'</a></h2>
                <p class="mb-3">'.$tanitim.'</p>  
                <a href="'.$icerikid.'"><span style="color:lightblue;font-weight:bold;cursor:pointer;">devamını okumak için tıklayın...</span></a>
                <div class="post-meta">
                  <span class="d-block"><a href="'.$icerikid.'">'.$ekleyen.'</a> ekledi <a href="'.$icerikid.'">'.$kategori.'</a></span>
                  <span class="date-read">'.$tarih.' <span class="mx-1">&bullet;</span></span>
                </div>
              </div>
            </div>';
              }
            }

            ?>
      
          <div>
            <?php include'bottom.php'; ?>