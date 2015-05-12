<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
		<title>Congo Maps | Accueil</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
	</head>
	
	<body>
		<div class="contenair">
		<?php
			include_once('header.php');
		?>
		<section id="sous_contenair">
			<article style="width:70%; max-width:70%;">
			<?php
				$f = fopen("text/index_article.txt", "r");
				while(!feof($f)) 
				{
				echo fgets($f);
				}
				fclose($f);
			?>
			</article>
			
			<aside>
			<?php
				include_once('fonctions.php');
				formulaire();
				echo '<hr>';
			?>
			</aside>
		</section>
		
		<footer>
		</footer>
		</div>
	</body>
</html>