<html><head><title>Php ile veri tabanı bağlantısı ve sorgu çalıştırmak - Mücahit Sendinç'in Blogu</title>  <meta charset="utf-8">

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

<h1>Veri Tabanına Nasıl Bağlanırım?</h1>
<p>Php ile veri tabanına bağlanırken bazen belirli sorunlar ile karşılaşabiliyoruz ve stabil çalışması gereken sistemlerde oldukça büyük sorun ve hatalara yol açabiliyor. Bu sorunu çözüp sizlere bağlantı ve sorguyu anlatacağım. <br> <br>İlk olarak Arkadaşlar 1. kural diyebiliriz buna PHP versiyonumuzu 5.0.2 ye düşürmeliyiz bu stabil kullandığım ve hiçbir sorun ile karşılaşmadığım bir sürümüdür.
<br><br>
Sürümümüzü ayarladıktan sonra veri tabanına bağlanmak için şu kodları yazmamız gerekmekte ;</p>
<div class="kodgoruntu">
1&emsp;mysql_connect('host','id','pass') or die('Baglanti Hatasi');<br>
2&emsp;mysql_select_db('vt')or die('veri tabani hatasi');
</div>
<p>
Yukarıda <span class="kirmizi">host</span> yazan bölüme veri tabanı sunucu adresini <span class="kirmizi">id</span> yazan yere veri tabanı kullanıcı adınızı <span class="kirmizi">pass</span> yerine ise veri tabanı parolasını yazıyoruz alt satırda ise <span class="kirmizi">vt</span> yazan yere ise veri tabanımızın adını yazıyoruz
<br><br>bunu örnek bir php dosyasına yazıp o sayfayı açınız ekranda bir hata mesajı vs yok ise tebrikler başarı ile bağlandınız demektir.</p>
<h1>Sorgu nasıl Çalıştırırım?</h1>
<p>
Sorgu çalıştırmak için şu şekilde yazmalısınız ;</p>
<div class="kodgoruntu">
1&emsp;$sorgu="insert into kullanici(isim,soyisim) values('Ali','Mehmet')";<br>
2&emsp;if(mysql_query($sorgu)){<br>
3&emsp;&emsp;echo 'sorgu başarılı';<br>
4&emsp;}else{<br>
5&emsp;&emsp;echo 'sorgu başarısız';<br>
6&emsp;}
</div>
<p>Bu şekilde de sorgunuzu çalıştırabilir ve hata mesajı da verdirebilirsiniz arkadaşlar.
</p>

                <div class="etiket">

                  Etiketler ;<br>

                    <span>#internettenparakazanmak</span>

                    <span>#kolayrublekazanma</span>

                    <span>#rublenasilkazanilir</span>

                    <span>#rublendir</span>

                    <span>#yatirimsizkazanc</span>

                    <span>#yatirimsizruble</span>

                </div><div>
<?php include'bottom.php'; ?>