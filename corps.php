<div class="corps">
	<?php 
		$page_name = "presentation.php";
		if (isset($_GET["page"]))
			$page_name = $_GET["page"] . ".php";
		if (!file_exists($page_name))
			$page_name = "404.php";	
		include($page_name);
	?>	
</div>