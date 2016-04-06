
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

<?php
	function get_ip()
	{ 
		if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
		{ $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];} 
		elseif (isset($_SERVER['HTTP_CLIENT_IP']))
		{$ip = $_SERVER['HTTP_CLIENT_IP'];}
		else
		{ $ip = $_SERVER['REMOTE_ADDR'];} 
		return $ip;
	}

	// Sur le serveur lheure est décallée de -2h (gmt + 2?)
	$logfile = "logs";
	$fd = fopen($logfile, 'a');
	if ($fd !== false)
	{
		$stringData = "[" . date('l jS F Y H:i:s') . "] - " . get_ip() . "\r\n";
		fwrite($fd, $stringData);
		fclose($fd);
	}
	include("header.php");

?>

<body>


<div class="container">

		<?php
		include("bandeau.php");		
		include("menu_gauche.php");
		include("corps.php");
		?>

	<div class="receptacle_footer">
		
		<?php 
			include("footer.php");
		?>
		
	</div>

</div>	

</body>

</html>