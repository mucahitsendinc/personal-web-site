<html><head><title>Php ile dizi yazdırmak - Mücahit Sendinç'in Blogu</title>  <meta charset="utf-8">

<?php include '../baglanti.php'; ?>



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

  <link rel="stylesheet" href="../css/tasarim.css"></head><?php include'header.php'; ?>

<h1>Diziyi Nasıl Yazdırırım?</h1>
<p>Bu işlem çok basittir arkadaşlar fazla uzatmadan hemen nasıl yapabileceğinizi göstereyim <br> <div class="kodgoruntu">$isimler= array("Ali", "Ayşe", "Mehmet", "Merve"); </div> <br><p>Diyelim yukarıdaki gibi bir diziniz var ve bunları nasıl ekrana yazdıracağız.</p>
 <br> <div class="kodgoruntu">echo $isimler[0];</div>
<p>Bunu yazarsak eğer bize <span class="kirmizi">'Ali'</span> ismini vericek peki hepsini nasıl yazdırabiliriz?</p>
<div class="kodgoruntu">print_r($isimler);</div>
<p>Bu şekilde ise tüm dizideki elemanları kontrol için ekrana yazdırabiliriz.
Dizideki eleman sayısı 1den başlamak yerine 0 dan başlamaktadır bu yüzden 4. sıradaki isimi çağıracaksak köşeli parantez içine 4 yerine 3 yazmalıyız. 


</p>

                <div class="etiket">

                  Etiketler ;<br>

                    <span>#phpdersler</span>

                    <span>#phpdiziolusturma</span>

                    <span>#phpdiziyazdirma</span>

                   

                </div><div>
<?php include'bottom.php'; ?>