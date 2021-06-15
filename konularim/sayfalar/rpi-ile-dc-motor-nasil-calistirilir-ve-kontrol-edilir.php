<html><head><title>RPi ile dc motor nasıl çalıştırılır ve kontrol edilir? - Mücahit Sendinç'in Blogu</title><?php include '../baglanti.php'; ?>







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



  <link rel="stylesheet" href="../css/tasarim.css"></head><body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">





<?php include'header.php'; ?><div class="col-12"></head><h1>RPi ile dc motor nasıl çalıştırılır ve kontrol edilir?</h1><img src="https://i.hizliresim.com/qyqNQq.jpg" class="img-fluid"><p>İlk olarak motorlarımıza güç vererek işlemimize başlayacağız.Motorumuzun iç kısımlarında bulunan 2 adet çentiklere lehim yardımı ile jumper kablolarımızı takıyoruz ve iki adet kablolu bir motor elde etmiş olacağız. Bu kabloların birisine (+) diğerine (-) güç verdiğimizde motorumuzun çalıştığını göreceksiniz. Hangisine hangi güçü verdiğinizin bir önemi yok sadece motorun dönüş yönünü değiştirir.<br>Şimdi bu motoru Raspberry Pi ile kontrol etme işlemine geçeceğiz.<br> Bu işlem için bize bir motor sürücü gerekmekte ben anlatımımda Pololu DRV8835 motor sürücüsünü kullanacağım.</p><img class="img-fluid" src="https://i.hizliresim.com/qyqNaQ.jpg"><br><p>Sürücümüzün lehim işlemlerini gerçekleştirdikten sonra Bu sürücüyü raspberry pi 'ımızın son 6 pini boş kalacak şekilde takıyoruz üzerindeki portlar içe doğru bakacak şekilde taktıktan emin olduktan sonra yapacağımız işlem motorları takmak.<br>Motorumuza lehimlediğimiz kabloları motor sürücümüzün ilk 2 veya orta 2 pine takmamız gerekiyor. Taktıktan sonra motorlara güç vermemiz gerekmekte. Bu güçleri de RPi den alacağız. 2 adet jumper kabloyu 5V ve GND pinlerine takıyoruz ve motor sürücümüzün en sağındaki giriş bölümüne 5V bir solundaki girişe ise GND kablosunu takıyoruz.<br>Motorumuzu başarı ile bağladık şimdi RPi ile kontrollü çalıştırmaya geldi.Raspberry Pimizi açıyoruz ve sürücümüzün gerekli kütüphanesini indiriyoruz.Terminali açalım ve şu kodları yazalım </p>
<div class="kodgoruntu">
1&emsp;sudo apt-get install python-dev python-pip<br>
2&emsp;sudo pip install wiringpi<br>
3&emsp;git clone https://github.com/pololu/drv8835-motor-driver-rpi.git<br>
4&emsp;cd drv8835-motor-driver-rpi<br>
5&emsp;sudo python setup.py install<br>
</div>
<p>Bu kodları yazdıktan sonra arkadaşlar Raspberry Pi'ımızı resetliyoruz ve sürücünün kablolarının doğru ve sorunsuz takıldığından emin oluyoruz. Sonra ise Pimiz açıldıktan sonra terminali açıyoruz ve şu kodları yazarak motorlarımızı Pi ile çalıştırmış oluyoruz</p>
<div class="kodgoruntu">
1&emsp;sudo python3 drv8835-motor-driver-rpi/example.py<br>
</div>
<p>Motorumuzun sorunsuz çalıştığını göreceksiniz şimdi 2. motor u da aynı şekilde kablolarını ayarlayıp boşta kalan son 2 girişe taktığımızda ise sorunsuz şekilde motorlarımızın Pi ile çalışıp kontrole hazır olduğunu göreceksiniz.<br>Şimdi motorlarımızı bir şasi ile tutturup pimizi de şasi üzerine konumlandırmamız gerekiyor Pimize güç vermek için de PowerBank kullanabilirsiniz.Bir araç haline getirdikten sonra motorlar ile sağ sol işlemi nasıl yapılır bunu anlatacağım mantığını kavrarsanız gerisi çok kolay.<br>Rpi mize indirdiğimiz pololu kütüphanesinde example.py dosyası içerisinde bulunan kodları kopyalayıp başka bir dosyaya yapıştırın, ondan sonra motorlara hız verilen komut satırına gelin. Motorlara hız verirken sağ motora 0 sol motora 480 değerini verirsek ne olur ? deneyip görün. RPi miz sağa dönecektir. Dönüş işlemlerini de bu şekilde sağlıyoruz birtarafın motorunun gücünü keserek diğer tarafa güç verdiğimizde dönüş yapabiliyoruz.<br><h2>4 Motor nasıl bağlarız?</h2><br>Bu işlem ise şöyle oluyor arkadaşlar motor sürücümüzün girişlerine taktığımız motor kablolarının olduğu bölüme geliyoruz sağ taraftaki 2 motorumuzun kablolarını aynı girişlere sol taraftaki motorları da aynı girişlere takarsak Tebrikler artık 4 tekerlekli RPi den bir aracınız var demektir.</p>    <?php include'bottom.php'; ?></body>