<?php 
session_start();
if($_SESSION['admin']!="true"){ session_destroy();}
$c="'";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mücahit SENDİNÇ</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="css/tasarim.css">
	<script>
		function blogolustur(){
			men=document.getElementById("icerik");
			var biz="'";
			window.location="panel.php?i=1";
		}
		function blogduzenle(){
			men=document.getElementById("icerik");
			men.innerHTML="2"; 
		}
		function projeler(){
			men=document.getElementById("icerik");
			men.innerHTML="3";
		}
	</script>
	<script>
		function gizle(){
			document.getElementById("submit").style.display="none";
			document.getElementById("eklenecek").style.display="none";
			document.getElementById("resimekle").style.display="none";
			document.getElementById("paragrafekle").style.display="none";
			document.getElementById("linkyazisimetin").style.display="none";
			document.getElementById("linkyazisilink").style.display="none";
			document.getElementById("baslikekle").style.display="none";
			document.getElementById("videoyazisi").style.display="none";

			document.getElementById("resimyazisi").value="";
			document.getElementById("paragrafyazisi").value="";
			document.getElementById("linkyazisilink").value="";
			document.getElementById("linkyazisimetin").value="";
			document.getElementById("baslikyazisi").value="";
			document.getElementById("videoyazisi").value="";
		}
		function onizle(){
			document.getElementById("submit").style.display="none";
			document.getElementById("onizleme").innerHTML=document.getElementById("yazi").value;
			return false;
		}
		function onizlendi(){
			document.getElementById("onizleme").innerHTML=document.getElementById("yazi").value;
			document.getElementById("submit").style.display="block";
		}
		function itemleriekle(){
			document.getElementById("submit").style.display="none";
			var a = document.getElementById("yazi");
			if (document.getElementById("resimyazisi").value.length>0) {
				
				a.innerHTML=a.value+'<img src="'+document.getElementById("resimyazisi").value+'" class="img-fluid">';
			}else if (document.getElementById("paragrafyazisi").value.length>0) {
				a.innerHTML=a.value+'<p>'+document.getElementById("paragrafyazisi").value+'</p>';	
			}else if (document.getElementById("linkyazisimetin").value.length>0) {
				a.innerHTML=a.value+'<a href="'+document.getElementById("linkyazisilink").value+'">'+document.getElementById("linkyazisimetin").value+'</a>';	
			}else if (document.getElementById("baslikyazisi").value.length>0) {
				a.innerHTML=a.value+'<h1>'+document.getElementById("baslikyazisi").value+'</h1>';	
			}else if (document.getElementById("videoyazisi").value.length>0) {
				a.innerHTML=a.value+'<iframe width="560" height="315" src="https://www.youtube.com/embed/'+document.getElementById("videoyazisi").value+'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';	
			}
			
			gizle();
		}
		function ekle(item){
			gizle();
			document.getElementById("submit").style.display="none";
			if (item=="resim") {
				document.getElementById("eklenecek").style.display="block";
				document.getElementById("submit").style.display="none";
				document.getElementById("resimekle").style.display="block";
			}else if (item=="paragraf") {
				document.getElementById("eklenecek").style.display="block";
				document.getElementById("submit").style.display="none";
				document.getElementById("paragrafekle").style.display="block";
			}else if (item=="baslik") {
				document.getElementById("eklenecek").style.display="block";
				document.getElementById("submit").style.display="none";
				document.getElementById("baslikekle").style.display="block";
			}else if (item=="video") {
				document.getElementById("eklenecek").style.display="block";
				document.getElementById("submit").style.display="none";
				document.getElementById("videoyazisi").style.display="block";
			}else if (item=="link") {
				document.getElementById("eklenecek").style.display="block";
				document.getElementById("linkyazisilink").style.display="block";
				document.getElementById("linkyazisimetin").style.display="block";
				document.getElementById("submit").style.display="none";
			}
		} 
	</script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-12 col-sm-12">
				<div id="menu">
					<ul>
						<li onclick="blogolustur()">Blog Oluştur</li>
						<li onclick="blogduzenle()">Blog Düzenle</li>
						<li onclick="projeler()">Projeler</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-12 col-sm-12">
				<div id="icerik">
					<?php
						if ($_GET['i']==1) {
							include 'pi/1.php';
						}elseif ($_GET['i']==2) {
							include 'pi/2.php';
						}elseif ($_GET['i']==3) {
							include 'pi/3.php';
						}
					?>
				</div>
			</div>
		</div>
	</div>

</body>
</html>