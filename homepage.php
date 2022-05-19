<?php

session_start();


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/homepage.css">

	<link rel="stylesheet" type="text/css" href="css/timetable.css">

	<link rel="stylesheet" type="text/css" href=https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css>	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	
		<script type="text/javascript" src="js/show.js"></script>
</head>
<body onload="divrandom();">

	
<div class="anadiv" id="bodym"> 
	<header>
			<img src="images/tilki2.png" class="logo">
			<h1 class="fontdegis">English With <h1 class="renkdegis">Foxy</h1></h1>
			<section class="kullanici-bilgi">
				<h1>Hoşgeldin  <?php 
				if($_SESSION['username'])
				{
					$degisken = $_SESSION['username'];
					echo $degisken;
				}
				else
				{
					header("location: index.html");
				}
				?> 
				!</h1>
			</section>
	</header>



		


	<div class="parent">
		
		


		<section class="orta-kisim">

			<div class="butonlar" id="butonlar" style="display:none;">
				<h1 class="mesaj"><img src="images/dikkat4.png" alt="Dikkat" width="30" height="30"> Henüz bir ders porgramına kayıt olmadın. Programları incelemek için <a href="#" class="span" onclick="toggle();">buraya</a> tıkla. Senin için en doğru olanına karar ver.</h1>


				<a class="renklibuton" id="nobirsec" href="#" onclick="timetablesec1();">Program 1</a>
				<a class="renklibuton" id="noikisec" href="#" onclick="timetablesec2();">Program 2</a>
			</div>
			
			<div class="sutun1" id="tt1" style="display:none;">
				<h1>  </h1>
				<div class="table">
					<div class="table-container">
						<table>
							<tr>
								<th class="saatler"></th>
								<th class="pazartesi baslik">pazartesi</th>
								<th class="sali baslik">salı</th>
								<th class="carsamba baslik">çarşamba</th>
								<th class="persembe baslik">perşembe</th>
								<th class="cuma baslik">cuma</th>
							</tr>
							<tr>
								<th class="saatler">13-14</th>
								<td class="pazartesi">Enes Akyüz<br>Listening</td>
								<td class="sali"></td>
								<td class="carsamba">EnesAkyüz<br>Listening</td>
								<td class="persembe"></td>
								<td class="cuma">EnesAkyüz<br>Listening</td>
							</tr>
							<tr>
								<th class="saatler">14-15</th>
								<td class="pazartesi"></td>
								<td class="sali">Enes Akyüz<br>Listening</td>
								<td class="carsamba">EnesAkyüz<br>Listening</td>
								<td class="persembe"></td>
								<td class="cuma"></td>
							</tr>
							<tr>
								<th class="saatler">14-15</th>
								<td class="pazartesi">Enes Akyüz<br>Listening</td>
								<td class="sali"></td>
								<td class="carsamba"></td>
								<td class="persembe"></td>
								<td class="cuma"></v>
							</tr>
							<tr>
								<th class="saatler">15-16</th>
								<td class="pazartesi"></td>
								<td class="sali">Enes Akyüz<br>Listening</td>
								<td class="carsamba">EnesAkyüz<br>Listening</td>
								<td class="persembe"></td>
								<td class="cuma"></td>
							</tr>
							<tr>
								<th class="saatler">16-17</th>
								<td class="pazartesi">Enes Akyüz<br>Listening</td>
								<td class="sali"></td>
								<td class="carsamba"></td>
								<td class="persembe">EnesAkyüz<br>Listening</td>
								<td class="cuma"></td>
							</tr>
							<tr>
								<th class="saatler">17-18</th>
								<td class="pazartesi">Enes Akyüz<br>Listening</td>
								<td class="sali"></td>
								<td class="carsamba"></td>
								<td class="persembe"></td>
								<td class="cuma">EnesAkyüz<br>Listening</td>
							</tr>
						</table>
					</div>
				</div>
			</div>


			<div class="sutun1" id="tt2" style="display:none;">
				<h1>  </h1>
				<div class="table">
					<div class="table-container">
						<table>
							<tr>
								<th class="saatler"></th>
								<th class="pazartesi baslik">pazartesi</th>
								<th class="sali baslik">salı</th>
								<th class="carsamba baslik">çarşamba</th>
								<th class="persembe baslik">perşembe</th>
								<th class="cuma baslik">cuma</th>
							</tr>
							<tr>
								<th class="saatler">13-14</th>
								<td class="pazartesi">Gülşah<br>Listening</td>
								<td class="sali"></td>
								<td class="carsamba">Gülşah<br>Listening</td>
								<td class="persembe"></td>
								<td class="cuma">Gülşah<br>Listening</td>
							</tr>
							<tr>
								<th class="saatler">14-15</th>
								<td class="pazartesi"></td>
								<td class="sali">Gülşah<br>Listening</td>
								<td class="carsamba">Gülşah<br>Listening</td>
								<td class="persembe"></td>
								<td class="cuma"></td>
							</tr>
							<tr>
								<th class="saatler">14-15</th>
								<td class="pazartesi">Gülşah<br>Listening</td>
								<td class="sali"></td>
								<td class="carsamba"></td>
								<td class="persembe"></td>
								<td class="cuma"></v>
							</tr>
							<tr>
								<th class="saatler">15-16</th>
								<td class="pazartesi"></td>
								<td class="sali">EGülşah<br>Listening</td>
								<td class="carsamba">Gülşah<br>Listening</td>
								<td class="persembe"></td>
								<td class="cuma"></td>
							</tr>
							<tr>
								<th class="saatler">16-17</th>
								<td class="pazartesi">Enes Akyüz<br>Listening</td>
								<td class="sali"></td>
								<td class="carsamba"></td>
								<td class="persembe">EnesAkyüz<br>Listening</td>
								<td class="cuma"></td>
							</tr>
							<tr>
								<th class="saatler">17-18</th>
								<td class="pazartesi">Enes Akyüz<br>Listening</td>
								<td class="sali"></td>
								<td class="carsamba"></td>
								<td class="persembe"></td>
								<td class="cuma">EnesAkyüz<br>Listening</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<?php

			if($_SESSION['deneme'])
			{
				if($_SESSION['deneme'] === "yok")
				{ ?>
					<script> console.log("aaaa"); show0();</script> 
				<?php
				}

				if($_SESSION['deneme'] === "bir")
				{ ?>
					<script>console.log("bbbb"); show1(); </script> 
					<?php
				}

				if($_SESSION['deneme'] === "iki")
				{ ?>
					<script>  console.log("cccc"); show2();</script>
					<?php
				}
			}
		?>
		

			<div class="sutun2" >
				<h1> </h1>
				<div class="container">
					<span><img src="images/funfacts/eng1.png"></span>
					<span><img src="images/funfacts/eng2.png"></span>
					<span><img src="images/funfacts/eng3.png"></span>
					<span><img src="images/funfacts/eng4.png"></span>
					<span><img src="images/funfacts/eng5.png"></span>
					<span><img src="images/funfacts/eng6.png"></span>
					<span><img src="images/funfacts/eng7.png"></span>
					<span><img src="images/funfacts/eng8.png"></span>
					<span><img src="images/funfacts/eng9.png"></span>
					<span><img src="images/funfacts/eng10.png"></span>

				</div>
			</div>

			<div class="sutun3" style="display:none;">
				<h1> </h1>
				<img class="sutun3img" src="images/funfacts/class-rules.jpg">
			</div>
		</section>




		<section class="quiz-kismi">
			<h1><br><br>Quizler</h1>
			<div class="quiz-box"><br>quiz 1<br>-<br>00.00.0000<br><img src="images/quiz1.png"></div>
			<div class="quiz-box"><br>quiz 2<br>-<br>00.00.0000<br><img src="images/quiz1.png"></div>
			<div class="quiz-box"><br>quiz 3<br>-<br>00.00.0000<br><img src="images/quiz1.png"></div>
			<div class="quiz-box"><br>quiz 4<br>-<br>00.00.0000<br><img src="images/quiz1.png"></div>
			<div class="quiz-box"><br>quiz 5<br>-<br>00.00.0000<br><img src="images/quiz1.png"></div>
			<div class="quiz-box"><br>quiz 6<br>-<br>00.00.0000<br><img src="images/quiz1.png"></div>
		</section>
	</div>

	<div class="logoutclass">
		<a href="logout.php" class="cursorver"><i class="fa fa-sign-out" aria-hidden="true">Çıkış</i></a>
		<h8 class="marginver">Herhangi bir problem yaşıyor isen englishwithfoxy@gmail.com mail adresine mail gönderebilirsin.</h8>
	</div>

</div>	

<div id="timetablelar">
	<section class="yeniorta">

			<a href="#" class="span" onclick="toggle();">KAPAT</a>
			<div class="sutun1">
				<div class="table">
					<div class="table-container" id="first">
						<h1> 1. TABLO </h1>
						<table>
							<tr class="baslik">
								<th class="saatler">Saat/Gün</th>
								<th class="pazartesi baslik">pazartesi</th>
								<th class="sali baslik">salı</th>
								<th class="carsamba baslik">çarşamba</th>
								<th class="persembe baslik">perşembe</th>
								<th class="cuma baslik">cuma</th>
							</tr>
							<tr>
								<th class="saatler">10:00 / 11:00</th>
								<td class="pazartesi">Enes Akyüz</td>
								<td class="sali">Şems Hesenli</td>
								<td class="carsamba">Enes Akyüz</td>
								<td class="persembe">Batuhan Aycı</td>
								<td class="cuma">Şems Hesenli</td>
							</tr>
							<tr>
								<th class="saatler">11:00 / 12:00</th>
								<td class="pazartesi">Turgay Seferli</td>
								<td class="sali">Arife Gülşah Erol</td>
								<td class="carsamba">Turgay Seferli</td>
								<td class="persembe">Arife Gülşah Erol</td>
								<td class="cuma">Zeynep Özkayıkcı</td>
							</tr>
							<tr>
								<th class="saatler">12:00 / 13:00</th>
								<td class="pazartesi">Eren Başyemenici</td>
								<td class="sali">Nida Turguteli</td>
								<td class="carsamba">Şüheda Kula</td>
								<td class="persembe">Seher Alizade</td>
								<td class="cuma">Nida Turguteli</v>
							</tr>
							<tr>
								<th class="saatler">16:00 / 17:00</th>
								<td class="pazartesi"></td>
								<td class="sali"></td>
								<td class="carsamba"></td>
								<td class="persembe"></td>
								<td class="cuma"></td>
							</tr>
							<tr>
								<th class="saatler">17:00 / 18:00</th>
								<td class="pazartesi"></td>
								<td class="sali"></td>
								<td class="carsamba"></td>
								<td class="persembe"></td>
								<td class="cuma"></td>
							</tr>
							<tr>
								<th class="saatler">18:00 / 19:00</th>
								<td class="pazartesi"></td>
								<td class="sali"></td>
								<td class="carsamba"></td>
								<td class="persembe"></td>
								<td class="cuma"></td>
							</tr>
						</table>
					</div>


					<div class="table-container" id="second">
						<h1> 2. TABLO </h1>

						<table>
							<tr class="baslik">
								<th class="saatler">Saat/Gün</th>
								<th class="pazartesi baslik">pazartesi</th>
								<th class="sali baslik">salı</th>
								<th class="carsamba baslik">çarşamba</th>
								<th class="persembe baslik">perşembe</th>
								<th class="cuma baslik">cuma</th>
							</tr>
							<tr>
								<th class="saatler">10:00 / 11:00</th>
								<td class="pazartesi"></td>
								<td class="sali"></td>
								<td class="carsamba"></td>
								<td class="persembe"></td>
								<td class="cuma"></td>
							</tr>
							<tr>
								<th class="saatler">11:00 / 12:00</th>
								<td class="pazartesi"></td>
								<td class="sali"></td>
								<td class="carsamba"></td>
								<td class="persembe"></td>
								<td class="cuma"></td>
							</tr>
							<tr>
								<th class="saatler">12:00 / 13:00</th>
								<td class="pazartesi"></td>
								<td class="sali"></td>
								<td class="carsamba"></td>
								<td class="persembe"></td>
								<td class="cuma"></v>
							</tr>
							<tr>
								<th class="saatler">16:00 / 17:00</th>
								<td class="pazartesi">Enes Akyüz</td>
								<td class="sali">Şems Hesenli</td>
								<td class="carsamba">Enes Akyüz</td>
								<td class="persembe">Batuhan Aycı</td>
								<td class="cuma">Şems Hesenli</td>
							</tr>
							<tr>
								<th class="saatler">17:00 / 18:00</th>
								<td class="pazartesi">Turgay Seferli</td>
								<td class="sali">Arife Gülşah Erol</td>
								<td class="carsamba">Turgay Seferli</td>
								<td class="persembe">Arife Gülşah Erol</td>
								<td class="cuma">Zeynep Özkayıkcı</td>
							</tr>
							<tr>
								<th class="saatler">18:00 / 19:00</th>
								<td class="pazartesi">Eren Başyemenici</td>
								<td class="sali">Nida Turguteli</td>
								<td class="carsamba">Şüheda Kula</td>
								<td class="persembe">Seher Alizade</td>
								<td class="cuma">Nida Turguteli</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
	</section>
</div>




	<script type="text/javascript">
		function divrandom()
		{
			
			var divtags = $("span");
			if (divtags.length)
			{
				var display = Math.floor(Math.random() * divtags.length);
				for(var i=0; i<divtags.length; i++)
				{
					if (i!==display) 
					{
						$(divtags[i]).hide();
					}
				}
			}
		}

		function timetablesec1()
		{
			console.log("hi");

			var txt;
			if(confirm("1 Numaralı Ders Programını Seçmek İstediğinize Emin Misiniz?!"))
			{
				txt="1 numaralı ders programını seçtiniz."
				window.alert(txt);
				show1();
				$.post("actionbir.php", {action: true});

			}else
			{
				txt="Seçim yapmadınız. Lütfen yapınız."
				window.alert(txt);
			}
		}


		function timetablesec2()
		{
			console.log("hi");

			<?php $gulsah=1 ?>

			var txt;
			if(confirm("2 Numaralı Ders Programını Seçmek İstediğinize Emin Misiniz?!"))
			{
				txt="2 nolu seçtiniz"
				window.alert(txt);
				show2();
				$.post("actioniki.php", {action: true});
				

			}else
			{
				txt="Seçim yapmadınız. Lütfen yapınız."
				window.alert(txt);
			}
		}
		function show0(){
			document.getElementById("butonlar").style.display = "block";
    	}

		function show1(){
            document.getElementById("tt1").style.display = "block";
			document.getElementById("butonlar").style.display = "none";
    	}

    	function show2(){
            document.getElementById("tt2").style.display = "block";
            document.getElementById("butonlar").style.display = "none";
    	}

		</script>
		
		<script type="text/javascript" src="js/homepage.js"></script>
		


		<script type="text/javascript">
			function toggle(){
				var blur = document.getElementById('bodym');
				blur.classList.toggle('active');
				var popup = document.getElementById('timetablelar');
				popup.classList.toggle('active');
			}
		</script>
	

</body>
</html>