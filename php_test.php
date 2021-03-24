<?php 
	$site_name = "PHP Test Page";
	include("./includes/header.inc.php"); 
?>
<?php 
	include("./includes/navigation.inc.php"); 
?>

<!-- Here we go - <body>, <html> and <main> already included -->
<link rel="stylesheet" href="styles/style_php_test.css"/>
<h1><?=$site_name?></h1>

<div class="grid_table">
	<section>	
		<h3>Google, Wikipedia, ...</h3>
		<ul>
			<li><a href="https://www.google.de">Google Deutschland</a></li>
			<li><a href="https://de.wikipedia.org/wiki/Hauptseite">Wikipedia Enzyklopädie</a></li>
			<li><a href="http://de.pons.eu/englisch-deutsch/">
			PONS Englisch-Deutsch Wörterbuch</a></li>
			<li><a href="http://dict.leo.org/">
			LEO German-English Dictionary</a></li>
		</ul>
	</section>
	<section>		
		<h3>Nachrichten</h3>
		<ul>
			<li><a href="https://www.tagesschau.de">Tagesschau Online</a> </li>
			<li><a href="https://www.zdf.de/nachrichten">ZDF heute Nachrichten</a></li>
			<li><a href="https://www.sueddeutsche.de/">Süddeutsche Zeitung</a> </li>
			<li><a href="https://www.wetteronline.de/Bayern/Muenchen.htm">Wetter Online</a> </li>
			<li><a href="https://www.wetter.com/deutschland/muenchen/DE0006515.html">Wetter.Com</a> </li>
			<li><a href="https://www.cnn.com">CNN</a> </li>
			<li><a href="https://www.bbc.co.uk/radio/">BBC Radio Homepage</a> </li>
		</ul>	
	</section>
</div>

<img src="./picture/langkofel.jpg" alt="Langkofel Picture sollte erscheinen" id="langkofel_picture" />

<div class="grid_table">
	<section>					
		<h3>München</h3>
		<ul>
			<li><a href="http://www.muenchen.de">München Stadtportal</a></li> 
			<li><a href="https://www.mvv-muenchen.de/index.html">MVV</a></li>
			<li><a href="https://www.swm.de/">Stadtwerke München</a></li>
			<li><a href="https://www.igsbahn-muenchen.de/ris/mmar.htm">
			S-Bahn Aktuell</a></li>
			<li><a href="https://www.munich-airport.de/">
			München Flughafen</a></li>
		</ul>
	</section>
	<section>		
		<h3>Kultur</h3>
		<ul>
			<li><a href="https://www.mphil.de/">Münchner Philharmoniker</a> </li>
			<li><a href="https://www.staatsoper.de/">Bayerische Staatsoper</a></li>
			<li><a href="https://www.residenztheater.de/">Residenztheater</a> </li>
			<li><a href="https://www.muenchner-kammerspiele.de/">Kammerspiele</a> </li>
			<li><a href="https://www.muenchner-volkstheater.de/">Volkstheater</a> </li>
		</ul>	
	</section>
</div>

<div class="middle_text">
	<p><em>Let's have a PHP look !</em></p>
</div>

<p>
	<?php 
		include ("./messaage_hello.php");
	?>
</p>

<!-- Here comes the footer - also with </main>, </body> and </html> closing tags -->
<?php 
	include("./includes/footer.inc.php"); 
?>																																																																																																																																																																												