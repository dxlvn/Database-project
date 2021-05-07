<?php
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
print "Connecté en tant que "; 
echo $_SESSION['user'];
?>
<DOCTYPE html>
	<html>
	<head>
		<title>Contact</title>
		<link rel="stylesheet" type="text/css" href="../css/contact.css">
		<link rel="shortcut icon" type="image/x-icon" href="../img/nbalogo1.jpg" />
		<meta charset="utf-8">
	</head>
	<body>

		<!-- Haut de page -->

		<header>
			<!-- https://www.bing.com/th?id=OIP.vYLsztCVw0e8QAz82pD0IAHaEo&pid=Api&rs=1 -->
			<img src="../img/lovebasket.jpg"width="300"height="150">
			<p>
			&nbsp &nbsp &nbsp &nbsp &nbsp Contactez nous<br> 
			</p>
		</header>

		<!-- Menu de navigation -->

	<nav class="menu-nav">
			<ul>
				<li class="btn">
				    <a href="../index.php">
				    	Accueil / Connexion
				    </a>
				</li>
				<li class="btn">
                	<a href="actualites.php">
                		Actualités
                	</a>
                </li>
				<li class="btn">
				    <a href="equipes.php">
				    	Équipes
				    </a>
				</li>               
                </li>
                <li class="btn">
					<a href="joueurs.php">
                		Joueurs
					</a>
                </li>	
				<li class="btn">
                	<a href="classement.php">
                		Classement
                	</a>
                </li>
                <li class="btn">
                	<a href="playoffs.php">
                		Playoffs
                	</a>
                </li>
                <li class="btn">
                	<a href="draft.php">
                		Draft
                	</a>
                </li>
                <li class="btn">
                	<a href="coach.php">
                		Coach
                	</a>
                </li>
                <li class="btn">
                	<a href="transferts.php">
                		Transferts
                	</a>
                </li>
                <li class="btn">
                	<a href="matchs.php">
                		Matchs
                	</a>
                </li>
                <li class="btn">
                	<a href="histoire.php">
                		Un peu d'histoire
                	</a>
                </li>
                <li class="btn">
                	<a href="contact.php">
                		Contact
                	</a>
                </li>
			</ul>
	</nav>
	

<!-- <A HREF="mailto:dylersdd@gmail.com">Envoyer un mail</A> -->



	

		<!-- Contenu sous forme de boîte -->

		<div id="content">
			<div class="leftbox">
				<h4> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Adhésion </h4>

					Vous souhaitez nous rejoindre en tant que membre ou developpeur? Nous sommes à votre écoute. <br>
					Contactez nous depuis votre messagerie personnelle. <br> <br>
					
					<a href="mailto:dylersdd@gmail.com?subject=Demande%20inscription%20Membre&body=Inscrivez-moi%20%C3%Sur0%20votre%20Site%20%21%0D%0A%0D%0ANom%20complet%20%3A%0D%0A%0D%0AO%C3%B9%20avez-vous%20entendu%20parler%20de%20nous%20%3F">
					Ouvir messagerie.
					</a>
			</div>

			<div class="rightbox">

				
				
			</div> 


		</div>
	

		<!-- Pied de page -->

<footer>
	<p>
		Copyright &copy; D-M - 2019 .
	</p>
</footer>

	</body>
</html>
