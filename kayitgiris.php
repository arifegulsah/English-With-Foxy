<!DOCTYPE html>
<?php

////////////////////////////////////session start
session_start();


include_once 'db.php';

if(isset($_POST["giris"]))
{
	//giris için yapıyorum

	$kullaniciadi = $_POST["kullaniciadi"];
	$parola = $_POST["parola"];

	


	if(!empty($kullaniciadi) && !empty($parola))
	{
		$girissorgu = mysqli_query($link, "SELECT * FROM kayittablosu WHERE kullaniciadi='$kullaniciadi' AND parola='$parola'");
		$girissorguonay = mysqli_num_rows($girissorgu);

		$result = mysqli_query($link, "SELECT secim FROM kayittablosu WHERE kullaniciadi='$kullaniciadi' AND parola='$parola'");
		$row = mysqli_fetch_row($result);
		$base_pay = $row[0];
		$_SESSION['deneme']=$base_pay;

		if($girissorguonay == 1)
		{

			$_SESSION['username']=$kullaniciadi;

			
			





			?>
			echo<script>window.onload = function() 
			{
				alert("Giriş başarılı. Sayfanıza yönlendiriliyorsunuz.");
			}</script>; 



			<?php 
			header("location: homepage.php");
		}

		else
		{
			?>
			echo<script>window.onload = function() 
			{
				alert("Hatalı giriş yaptınız. Lütfen tekrar deneyiniz.");
			}</script>

			<?php
		}
	}
}

//kayit olabilmek için yapıyorum
if(isset($_POST["kayit"]))
{
	$kullaniciadik = $_POST["kullaniciadik"];
	$parolak = $_POST["parolak"];
	$adsoyadk = $_POST["adsoyadk"];
	$emailk = $_POST["emailk"];

	if(!empty($kullaniciadik) && !empty($parolak) && !empty($adsoyadk) && !empty($emailk)) 
	{

		$kullaniciadikontrol = mysqli_query($link, "SELECT * FROM kayittablosu WHERE kullaniciadi='$kullaniciadik'");
		$kullaniciadikontrolonay = mysqli_num_rows($kullaniciadikontrol);
		if($kullaniciadikontrolonay==1)
		{
			?>
			echo<script>window.onload = function() 
			{
				alert("Bu kullanıcı adını alamazsınız. Farklı bir kullanıcı adı deneyiniz.");
			}</script>

			<?php
		}
		
		else
			{
				$girissorgu = mysqli_query($link, "INSERT INTO kayittablosu (adsoyad, kullaniciadi, email, parola) VALUES('$adsoyadk','$kullaniciadik','$emailk','$parolak')");
		?>
			echo<script>window.onload = function() 
			{
				alert("Kaydınız tamamlandı. Lütfen Giriş yapınız.");
			}</script>

			<?php
		}
	}
}
?>	










<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<!-- Poppins-google-fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/log-reg.css">
	<link rel="stylesheet" type="text/css" href=https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css>	


	
</head>


<body>


	<div class="hero">
		<div class="gobackk">
			<a href="index.html" class="goback"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
			<a href="index.html" class="goback2">ANA SAYFAYA DÖN</a>
		</div>
		<div class="tilkiotur">
			<img src="images/tilki3.png">
		</div>
		<!--
		<div class="tilkikalk">
			<img src="images/tilki2.png">
		</div>
		-->
		<div class="form-box">
			<div class="welcoming-text">
				
				<h1>Hoşgeldin!</h1>
			</div>
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()">Giriş Yap</button>
				<button type="button" class="toggle-btn" onclick="register()">Kayıt Ol</button>
			</div><br>


			<form id="login" class="input-group" method="post" action="kayitgiris.php"><br>
				<input type="text" name="kullaniciadi" class="input-field" placeholder="Kullanıcı Adınız" required>
				<input type="password" name="parola" class="input-field" placeholder="Parolanız" required>
				<button type="submit" class="submit-btn" name="giris" onclick="quizpage()">GİRİŞ</button>
			</form>

			<form id="register" class="input-group" method="post" action="kayitgiris.php">
				<input type="text" name="adsoyadk" class="input-field" placeholder="Adınız Soyadınız" required>
				<input type="email" name="emailk" class="input-field" placeholder="Email Adresiniz" required>
				<input type="text" name="kullaniciadik" class="input-field" placeholder="Kullanıcı Adınız" required>
				<input type="password" name="parolak" class="input-field" placeholder="Parolanız" required><br>
				<h9>Doğum tarihiniz:  <input type="date" name="date"></h9>
				<input type="text" class="input-field" placeholder="Okulunuz" required>
				<br><br>
				<button type="submit" name="kayit" class="submit-btn">KAYIT</button>
			</form>
		</div>
		</div>
	</div>

	

	<script>
		var x = document.getElementById("login");
		var y = document.getElementById("register");
		var z = document.getElementById("btn");

		function register(){
			x.style.left = "-500px";
			y.style.left = "109px";
			z.style.left = "130px";
		}

		function login(){
			x.style.left = "105px";
			y.style.left = "550px";
			z.style.left = "0";
		}

		

	</script>
</body>





</html>