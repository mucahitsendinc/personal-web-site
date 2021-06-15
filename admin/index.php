<?php 
session_start();
include 'baglanti.php';
if(empty($_GET['cikis'])==false){session_destroy();}
if (empty($_POST)==false) {
	$query=mysql_num_rows(mysql_query("select * from admin where nick='".$_POST['nick']."' and pass='".$_POST['pass']."'"));
	if ($query>0) {
		echo "<script>alert('Bilgiler doğru');</script>";
		$_SESSION['admin']="true";
		header("Location:panel.php");
	}else{
		echo "<script>alert('HATA".$_POST['nick'].$_POST['pass']."--".$query."');</script>";
		
	}
}
if ($_SESSION['admin']=="true") {
	header("Location:panel.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		form{
			margin-top:40vh;
			width: auto;

		}
		input{margin-top:7px;font-size: 30px;padding: 20px;border-bottom: 0px solid gold;}
		body{background-color: black;color:white;font-weight: bold;font-size: 30px;}
		#button{padding: 20px 125px 20px 125px;background-color: green;border: none;color:white;transition: 300ms all;}
		#button:hover{cursor: pointer;background-color: lightgreen;color:gold;transition: scale(1.6);}
	</style>
	<script type="text/javascript">
		function degisti(){
			var b=(document.getElementById("input").value).length;
			if (b>4){
				document.getElementById("input").style.border="6px solid gold";
			}else{
				document.getElementById("input").style.border="6px solid red";

			}
			if (b>6) {
				document.getElementById("input").style.border="6px solid green";
			}
			if(b<1){
				document.getElementById("input").style.border="6px solid red";
			}	
		}
		function degisti2(){
			var b=(document.getElementById("input2").value).length;
			if (b>4){
				document.getElementById("input2").style.border="6px solid gold";
			}else{
				document.getElementById("input2").style.border="6px solid red";

			}
			if (b>6) {
				document.getElementById("input2").style.border="6px solid green";
			}
			if(b<1){
				document.getElementById("input2").style.border="6px solid red";
			}	
		}
	</script>
	<title>Admin Girişi</title>
</head>
<body><center>
<form action="#" method="POST">
	<input type="text" name="nick" id="input" onkeypress="degisti()" onchange="degisti()" onclick="degisti()" placeholder="KULLANICI ADI"><br>
	<input type="password" name="pass" id="input2" onkeypress="degisti2()"  onchange="degisti2()" onclick="degisti2()" placeholder="PAROLA"><br>
	<input id="button" type="submit" value="Giriş Yap">
</form></center>
</body>
</html>
