<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
		<title>Congo Maps | Tourisme</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
	</head>
	
	<body>
		<div class="contenair">
		<?php
			include_once('header.php');
		?>
		<section id="sous_contenair">
			<article style="width:96%;	max-width:96%; margin:auto;">
			<?php
				$f = fopen("text/tourisme_text.txt", "r");
				while(!feof($f)) 
				{
				echo fgets($f);
				}
				fclose($f);
			?>
			</article>
		</section>
		
		<footer>
		</footer>
		</div>
	</body>
</html>