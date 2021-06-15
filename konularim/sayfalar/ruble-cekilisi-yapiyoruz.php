<html><head><title>Ruble Çekilişi Yapıyoruz - Mücahit Sendinç'in Blogu</title>  <meta charset="utf-8">

<?php include '../baglanti.php'; 
date_default_timezone_set('Europe/Istanbul');
if (empty($_POST)==false ) {
	$sayi=mysql_num_rows(mysql_query("select * from cekilis where ip='".$_SERVER['REMOTE_ADDR']."'"));
	$sayi2=mysql_num_rows(mysql_query("select * from cekilis where ytabone='".$_POST['ytabone']."'"));
	$sayi3=mysql_num_rows(mysql_query("select * from cekilis where web='".$_POST['web']."'"));
	$sayi4=mysql_num_rows(mysql_query("select * from cekilis where ytyorum='".$_POST['ytyorum']."'"));
	$sayi5=mysql_num_rows(mysql_query("select * from cekilis where payid='".$_POST['payid']."'"));
	if ($sayi>0 or $sayi2>0 or $sayi3>0 or $sayi4>0 or $sayi5>0) {
		echo "<script>alert('Hali hazırda zaten bir başvurunuz bulunmakta');</script>";
	}else if(empty($_POST['payid'])==false && empty($_POST['ytabone'])==false && empty($_POST['web'])==false && empty($_POST['ytyorum'])==false){
		if (mysql_query("insert into cekilis(ip,ytabone,web,ytyorum,payid,tarih) values('".$_SERVER['REMOTE_ADDR']."','".$_POST['ytabone']."','".$_POST['web']."','".$_POST['ytyorum']."','".$_POST['payid']."','".date('d.m.Y H:i:s')."')")) {
			echo "<script>alert('Başvurunuz Gönderildi');</script>";
		}else{
			echo "<script>alert('Başvurunuz gönderilirken bir sorun oluştu.');</script>";
		}
		
	}else{
		echo "<script>alert('Tüm koşulları sağlamadan katılazsın!.');</script>";
	}
	
}
 ?>



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
            	<h1>Ruble Çekilişi Yapıyoruz</h1>
            	<br><br><iframe width="660" height="330" src="https://www.youtube.com/embed/2Th9CUJoyUg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br><br><p>Çekilişe Katılma Koşulları Aşağıdadır ; <br>
            		<span class="kirmizi"><a href="https://www.youtube.com/channel/UC-fnVhr2o3sxrkvA2wCO3sA?view_as=subscriber">->YouTube kanalıma abone olmak</a></span><br>
            		<span class="kirmizi"><a href="http://instagram.com/mcreator_project">->İnstagram hesabımı takip et</a></span><br>
            		<span class="kirmizi"><a href="https://www.youtube.com/watch?v=2Th9CUJoyUg">->Videoyu beğenip güzel bir yorum at</a></span><br>
            		<h2 style="color:black;font-size:22px;margin-top:15px;">Yukarıdaki şartları yerine getirdiyseniz aşağıdaki formu düzgün şekilde doldurup göndererek çekilişe katılmaya hak kazanabilirsiniz.</h2>
            		<h2  style="color:red;font-size:32px;font-weight:bold;margin:15px;">Çekiliş Yenilenmiştir Bir önceki Çekiliş sonuçları aşağıdaki vidoedadır.</h3>
            		<br><br><iframe width="660" height="330" src="https://www.youtube.com/embed/6CMyW3RujKE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br><br>
            		<center><form method="POST" action="ruble-cekilisi-yapiyoruz.php" style="margin-bottom: 130px;border-radius: 38px;border: 4px solid black;background-color: black;color:lightblue;font-weight: bold;font-size:17px;">
            			<h1 style="margin-top: 15px;margin-bottom: 10px;color:red;">Başvuru Formu</h1>
            			PAYEER :<br> <input type="text" name="payid" placeholder="yazın"><br>
            			Youtube kanalıma abone olduğun kanal adı :<br> <input type="text" name="ytabone" placeholder="yazın"><br>
            			İnstagram hesabımı takip et : <br><input type="text" name="web" placeholder="yazın"><br>
            			YouTube videoyu beğenip yorum attığın kanal adı : <br><input type="text" name="ytyorum" placeholder="yazın"><br>
            			<button style="margin:10px">Başvuruyu Gönder</button>
            			<h1 style="margin-top: 15px;margin-bottom: 10px;color:darkcyan;">Çekilişe yapılan toplam başvuru : <span style="color:cyan"><?php echo "".mysql_num_rows(mysql_query("select * from cekilis")); ?></span></h1>
            		</form></center>
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