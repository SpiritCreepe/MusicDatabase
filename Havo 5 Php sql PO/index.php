<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="index.css">
		<title>Website</title>
	</head>
<body>
<header id="top_header">
	<h1> Home page </h1>
</header>
	<section id="zoeken">
		<header id="h_zoeken">
			<h2> Zoeken </h2>
		</header>
		<section class="i_zoeken">

	<nav id="menu">
	<ul>
		<li><input type="text" name="zoeken" placeholder="Zoeken"></li>
		<li><label><input type="radio" name="categorie" value="artiest" id="Categorie_0" /> Artiest</label>	<br /></li>
		<li><label><input type="radio" name="categorie" value="titel" id="Categorie_1" /> Titel</label>	<br /></li>
		<li><label><input type="radio" name="categorie" value="album" id="Categorie_2" /> Album</label>	<br /></li>
		<!-- <li><label><input type="radio" name="categorie" value="genre" id="Categorie_3" /> Genre</label>	<br /></li> -->
			<br>
		<li><button type="submit" name="submit"> Zoekknop </button></li>
	</ul>
	</nav>
		</section>
	</section>

	<!-- <form name="form2" method="post" action="zoeken.php" >  -->
<!-- <p> <input type="text" name="zoekwoord" />  </p> -->

<aside id="main_side">
			<section id="inloggen">
				<header id="h_inlog"> 
					<h2> Inloggen </h2>
				</header>
				<section id="i_inlog">					
						<ul>
					<p><h3> Gebruikersnaam </h3></p>
						<li><input type="text" name="Gebruiker" placeholder="Gebruiker"></li><br>
					<p><h3> Wachtwoord </h3></p>
						<li><input type="text" name="Wachtwoord" placeholder="Wachtwoord"></li><br>
						<li><button type="submit" name="submit"> Inloggen </button></li>
						</ul>
				</section>
			</section>
		</aside>
		<div id="main_info">
		<section id="main">
			<header id="h_main">
				<h2> Index </h2>
			</header>
			<section class="i_main">
				<article>
					<header>
						<h3> Article</h3>
					</header>
					<p>
						<?php
							echo "Hello world";
						?>
					</p>
					<br>	
				</article>
			</section>
		</section>
		</div>
</body>
</html>