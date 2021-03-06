<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>	
		<title>Wolfgang's new Corner of the Web</title>	
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="author" content="Wolfgang Vollmer" />
		<meta name="date" content="2020-05-24" />
		<meta property="og:title" content="Wolfgang's new Corner of the Web" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link rel="stylesheet" href="styles/style.css"/>
		<link rel="stylesheet" href="styles/style_php_test.css"/>
	</head>	
	
	<!-- Kommentar ( kann über mehrere
	Zeilen gehen -->
	<!-- <body background="./GRAPHIC/Delfine-915.jpg" bgColor=#ffffff> -->
	<body>
		<!-- 
		<?php
			include ("navigation.php");
		?>  -->
		
		<!-- <header><center>Wolfgang's Corner of the Web</center> </header> -->
		<h1>Ups PHP Welcome PHP Testing !</h1>
		
		<?php 
			/* include ("./includes/messaage_hello.php"); */
			include ("messaage_hello.php");
		?>
		<?php
			echo "Hello Wolfgang via PHP \n";  // \n funktioniert nicht => mit <br> oder </br>
			$Ausgabe_mit_Leerzeile = "Ausgabe mit Leerzeile";  # $... Variablendefinition
			echo "Hello Wolfgang <br>$Ausgabe_mit_Leerzeile !! \n";
			echo "nun Umlaute ü ä ß \n\n geht <br>es \$ \\ so so \" weiter</br>";
			echo 'Hallo Welt!<br>'; 
			echo "Hallo Welt!";
			echo "<br>";
			/* mehrzeiliger
			Kommentas */
		?>
		<table>
			<thead>
				<tr>
					<th>Google, Wikipedia, ...</th>
					<th>Nachrichten</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<ul>
							<li><a href="https://www.google.de">Google Deutschland</a></li>
							<li><a href="https://de.wikipedia.org/wiki/Hauptseite">Wikipedia Enzyklopädie</a></li>
							<li><a href="http://de.pons.eu/englisch-deutsch/">
							PONS Englisch-Deutsch Wörterbuch</a></li>
							<li><a href="http://dict.leo.org/">
							LEO German-English Dictionary</a></li>
						</ul>
					</td>
					<td>
						<ul>
							<li><a href="https://www.tagesschau.de">Tagesschau Online</a> </li>
							<li><a href="https://www.zdf.de/nachrichten">ZDF heute Nachrichten</a></li>
							<li><a href="https://www.sueddeutsche.de/">Süddeutsche Zeitung</a> </li>
							<li><a href="https://www.wetteronline.de/Bayern/Muenchen.htm">Wetter Online</a> </li>
							<li><a href="https://www.wetter.com/deutschland/muenchen/DE0006515.html">Wetter.Com</a> </li>
							<li><a href="https://www.cnn.com">CNN</a> </li>
							<li><a href="https://www.bbc.co.uk/radio/">BBC Radio Homepage</a> </li>
						</ul>	
					</td>
				</tr>
			</tbody>
		</table>
		
		<p></br></p>
		
		<table>
			<thead>
				<tr>
					<th>München</th>
					<th>Kultur</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<ul>
							<li><a href="http://www.muenchen.de">München Stadtportal</a></li> 
							<li><a href="https://www.mvv-muenchen.de/index.html">MVV</a></li>
							<li><a href="https://www.swm.de/">Stadtwerke München</a></li>
							<li><a href="https://www.igsbahn-muenchen.de/ris/mmar.htm">
							S-Bahn Aktuell</a></li>
							<li><a href="https://www.munich-airport.de/">
							München Flughafen</a></li>
						</ul>
					</td>
					<td>
						<ul>
							<li><a href="https://www.mphil.de/">Münchner Philharmoniker</a> </li>
							<li><a href="https://www.staatsoper.de/">Bayerische Staatsoper</a></li>
							<li><a href="https://www.residenztheater.de/">Residenztheater</a> </li>
							<li><a href="https://www.muenchner-kammerspiele.de/">Kammerspiele</a> </li>
							<li><a href="https://www.muenchner-volkstheater.de/">Volkstheater</a> </li>
						</ul>	
					</td>
				</tr>
			</tbody>
		</table>
		</br>
		<p><em>Let's have a look !</em></p>
		
		<footer>
			<hr>
			<script language=JavaScript>
				<!--
				document.write("&nbsp; &copy; WoVo; last Modification: " + document.lastModified);
				//-->
			</script>
		</footer>
		
	</body>	
</html>																																																																																																																																																																												