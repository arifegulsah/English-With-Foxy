<?php
session_start();
	if($_SESSION['username'])
		{
			$degisken = $_SESSION['username'];
		}
		
	include_once 'db.php';
	$ikinumara = "UPDATE kayittablosu SET secim='iki' WHERE kullaniciadi = '$degisken' ";
	$ikinumarasonuc= mysqli_query($link, $ikinumara);

	$kime      = 'englishwithfoxy@gmail.com';
	$konu      = 'Ders Programı Seçimi';
	$ileti = "2 numaralı ders programını seçen kullanıcı " . $_SESSION['username'] ."\r\n";
	
	mail($kime, $konu, $ileti);
?>