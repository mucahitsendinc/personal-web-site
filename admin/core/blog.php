<?php 
function b($m){
	echo "<script>alert('".$m."');</script>";
	header("Refresh:0; url=http://mucahitcreator.rf.gd/admin/panel.php?i=1");
}
if (empty($_POST)) {
	header("Location:http://mucahits.tk");
}
$b=mb_strtolower($_POST['baslik']);
$sonuc = str_replace('ü', 'u', $b);
$sonuc = str_replace('ğ', 'g', $sonuc);
$sonuc = str_replace('ı', 'i', $sonuc);
$sonuc = str_replace('ç', 'c', $sonuc);
$sonuc = str_replace(' ', '-', $sonuc);
$sonuc = str_replace('ş', 's', $sonuc);
$sonuc = str_replace("'", '', $sonuc);
$sonuc = str_replace("ö", 'o', $sonuc);
$sonuc = str_replace('"', '', $sonuc);
$sonuc = str_replace('|', '', $sonuc);
$sonuc = str_replace('!', '', $sonuc);
$sonuc = str_replace('.', '', $sonuc);
$sonuc = str_replace(',', '', $sonuc);
$sonuc = str_replace(':', '', $sonuc);
$sonuc = str_replace(';', '', $sonuc);
$sonuc = str_replace('(', '', $sonuc);
$sonuc = str_replace(')', '', $sonuc);
$sonuc = str_replace('?', '', $sonuc);
$sonuc = str_replace('=', '', $sonuc);
$sonuc = str_replace('^', '', $sonuc);
$sonuc = str_replace('+', '', $sonuc);
$sonuc = str_replace('%', '', $sonuc);
$sonuc = str_replace('&', '', $sonuc);
$sonuc = str_replace('/', '', $sonuc);
$sonuc = str_replace('£', '', $sonuc);
$sonuc = str_replace('$', '', $sonuc);
$sonuc = str_replace('	', '-', $sonuc);
$sonuc = str_replace('.html', '', $sonuc);
$sonuc = str_replace('html', '', $sonuc);
$sonuc = $sonuc.".php";

if (file_exists("../../konularim/sayfalar/".$sonuc)) {
   b("Bu dosya zaten mevcut!");
} else {
	if ($_POST['vip']!="1" and $_POST['vip']!="0") {
		$_POST['vip']=="0";
	}
	print("<h1>".$sonuc."</h1><br><br><br>");
	$kategori=$_POST['kategori'];
	$baslik=$_POST['baslik'];
	$icerik=$sonuc;
	$yazi=$_POST['textarea'];
	$tanitim=$_POST['tanitim'];
	$resim=$_POST['resim'];
	$tarih=$_POST['tarih'];
	$ekleyen="Mücahit Sendinç";
	$vip=$_POST['vip'];
	if (strlen($kategori)<=1 or strlen($baslik)<=1 or strlen($icerik)<=1 or strlen($yazi)<=1 or strlen($tanitim)<=1 or strlen($resim)<=1 or strlen($tarih)<=1) {
		b("küçüklük var");
		
	}else{
		include '../baglanti.php';
		if (mysql_query("select * from konular")) {
			$sayi=mysql_num_rows(mysql_query("select * from konular where icerik='".$icerik."'"));
			$sayi2=mysql_num_rows(mysql_query("select * from konular where baslik='".$baslik."'"));
			$sayi3=mysql_num_rows(mysql_query("select * from konular where yazi='".$yazi."'"));
			$sayi4=mysql_num_rows(mysql_query("select * from konular where icerik='".$icerik."'"));
			$sayi5=mysql_num_rows(mysql_query("select * from konular where tanitim='".$tanitim."'"));
			$sayi6=mysql_num_rows(mysql_query("select * from konular where resim='".$resim."'"));
			if ($sayi<1 or $sayi2<1 or $sayi3<1 or $sayi4<1 or $sayi5<1 or $sayi6<1){
				if (mysql_query("insert into konular(kategori,baslik,icerik,yazi,tanitim,resim,tarih,ekleyen,vip) values('".$kategori."','".$baslik."','".$icerik."','".$yazi."','".$tanitim."','".$resim."','".$tarih."','".$ekleyen."',".$vip.")")) {
					if ($c=mysql_fetch_assoc(mysql_query("select * from sayfalar where id=1"))) {
						echo $c['head'];
						$b="<html><head><title>".$baslik." - Mücahit Sendinç'in Blogu</title>".$c['head'];
						$bb="</head>".$c['body'];
						$bbb=$c['bodyson']."</body>";
						$indexis=$b.$bb.$yazi.$bbb;
						touch("../../konularim/sayfalar/".$sonuc);
						$dosya = fopen("../../konularim/sayfalar/".$sonuc, 'w');
						fwrite($dosya, $indexis);
						fclose($dosya);
					}else{
						b("Hata oldu");
					}
					b("Kayıt Başarılı");
				}else{
					
					b("Kayıt Başarısız");
				}
				
				
			}else{
				b("Veri tabanında bu kayıt bulunuyor");
			}
		}else{
			b("Veri Tabanı ile ilgili bir sorun oluştu");
		}
	}
}
?>