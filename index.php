<?php echo date('d/m/Y h:i:s'); ?> <br>
<?php
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
if(isset($_SESSION['mdp'])){}
else{
$_SESSION['user']="spectateur";
$_SESSION['mdp']="spectateur";
}

print "Connecté en tant que "; 
echo $_SESSION['user'];
?>

<DOCTYPE html>
	<html>
	<head>
		<title>NBA</title>
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<link rel="shortcut icon" type="image/x-icon" href="img/nbalogo1.jpg" />
		<meta charset="utf-8">
	
	</head>
	<body>

		<!-- Haut de page -->

		<header>
			<img src="img/hd.jpg" width="300"height="150">
			<p>
			&nbsp &nbsp &nbsp  Bienvenue sur le<br> 
			&nbsp &nbsp &nbsp   site de la NBA !
			</p>
		</header>


		<!-- Menu de navigation -->

	<nav class="menu-nav">
			<ul>
				<li class="btn">
				    <a href="index.php">
				    	Accueil / Connexion
				    </a>
				</li>
				<li class="btn">
                	<a href="doc/actualites.php">
                		Actualités
                	</a>
                </li>
				<li class="btn">
				    <a href="doc/equipes.php">
				    	Équipes
				    </a>
				</li>               
                </li>
                <li class="btn">
					<a href="doc/joueurs.php">
                		Joueurs
					</a>
                </li>	
				<li class="btn">
                	<a href="doc/classement.php">
                		Classement
                	</a>
                </li>
                <li class="btn">
                	<a href="doc/playoffs.php">
                		Playoffs
                	</a>
                </li>
                <li class="btn">
                	<a href="doc/draft.php">
                		Draft
                	</a>
                </li>
                <li class="btn">
                	<a href="doc/coach.php">
                		Coach
                	</a>
                </li>
                <li class="btn">
                	<a href="doc/transferts.php">
                		Transferts
                	</a>
                </li>
                <li class="btn">
                	<a href="doc/matchs.php">
                		Matchs
                	</a>
                </li>
                <li class="btn">
                	<a href="doc/histoire.php">
                		Un peu d'histoire
                	</a>
                </li>
                <li class="btn">
                	<a href="doc/contact.php">
                		Contact
                	</a>
                </li>
			</ul>
	</nav>
	
	<form method="post" action="doc/connexion.php" >
			 Nom d'utilisateur<div><input type=text  name=user /><div>
			 Mot de passe<div><input type=password  name=mdp /><div>
			<br><input type=submit value="Se connecter" /><br>
	</form>

	<h1 class="headline">
			Récapitulatif de la saison
	</h1>

	<p class="recap">
		Le Championnat NBA 2018/2019 est la 74ème édition de cette épreuve. La compétition a eu lieu du 17 octobre 2018 au 11 avril 2019 .<br>
		Le vainqueur de l'édition 2018/2019 est Toronto Raptors. <br>

		Le calendrier de saison est le suivant: <br>
		- 28 septembre 2018 : Début de la pré-saison.<br>
		- 16 octobre 2018 : Ouverture de la saison régulière 2018-2019.<br>
		- 17 février 2019 : NBA All-Star Game 2019, à Charlotte.<br>
		- 10 avril 2019 : Dernier jour de la saison régulière.<br>
		- 13 avril 2019 : Début des Playoffs NBA.<br>

	</p>



	<p class="p1">

		<!-- Contenu sous forme de boîte -->

		<div id="content">
			<div class="leftbox">
				<div class="Programme">
					<p>
						Meilleur scorer: <br> <br>
						James Harden, 2818 pts, 36,1 /matchs
					</p>
				</div>
				<div class="Programme">
					<p>
						Meilleur passeur: <br> <br>
						Russel Westbrook, 784 passes,	10,74/matchs
					</p>
				</div>
				<div class="Programme">
					<p>
						Meilleur rebondeur: <br> <br>
						Andre Drummond, 1232 rebonds, 15.59/matchs
					</p>
				</div>
				
			</div>

			<div class="rightbox">

				<h4> Le MVP de la saison régulière, Giannis Antetokounmpo, en action.</h4>




				<video controls poster="css/fd1.jpg" width="614" height="405">
				    <source src="img/giannis.ogv">
				</video>
				
			</div>


		</div>

	</p>

		<!-- Pied de page -->

<footer>
	<p>
		Copyright &copy; D-M - 2019 .
	</p>
</footer>

	</body>
</html>
