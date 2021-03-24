<?php
	$today = date('Y-m-d');
	$now = date('H:i:s'); 
?>
</main>	
<footer>
	<hr>		
	<p>
		&copy; Wolfgang &nbsp; Site visited on <?=$today?> at <?=$now?>&nbsp;
		<?PHP
			echo 'Last file modification: ' . date( 'Y-m-d - H:i:s', getlastmod () );
		?>
	</p>
</footer>

</body>	
</html>