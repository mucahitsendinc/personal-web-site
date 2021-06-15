<?php
error_reporting(false);

try {
	mysql_connect('sql311.epizy.com','epiz_28850226','TgWA45MsVpcjug') or die('Baglanti Hatasi');
	mysql_select_db('epiz_28850226_blog')or die('veri tabani hatasi');
	mysql_query("set names 'utf8'");
} catch (Exception $e) {
	echo $e;
}

?>
