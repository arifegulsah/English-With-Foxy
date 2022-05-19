<?php
session_start();
	if($_SESSION['username'])
		{
			$degisken = $_SESSION['username'];
		}
		
	include_once 'db.php';
	$birnumara = "UPDATE kayittablosu SET secim='bir' WHERE kullaniciadi = '$degisken' ";
	$birnumarasonuc= mysqli_query($link, $birnumara);

	$kime = 'englishwithfoxy@gmail.com';
	$konu = 'Ders Programı Seçimi';
	$ileti = "1 numaralı ders programını seçen kullanıcı " . $_SESSION['username'] ."\r\n";
	
	mail($kime, $konu, $ileti);
?>