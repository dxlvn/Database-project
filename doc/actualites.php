
<?php
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
print "Connecté en tant que "; 
echo $_SESSION['user'];
?>
<DOCTYPE html>
	<html>
	<head>
		<title>Actualités</title>
		<link rel="stylesheet" type="text/css" href="../css/actualites.css">
		<link rel="shortcut icon" type="image/x-icon" href="../img/nbalogo1.jpg" />
		<meta charset="utf-8">
	</head>
	<body>

		<!-- Haut de page -->

		<header>
			<!-- https://www.bing.com/th?id=OIP.vYLsztCVw0e8QAz82pD0IAHaEo&pid=Api&rs=1 -->
			<img src="../img/headernba.jpg"width="300"height="150">
			<p>
			&nbsp  Actualités de le NBA<br> 
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
	

	<p class="p1">

		<!-- Contenu sous forme de boîte -->

		<div id="content">
			<div class="leftbox">
				
				<h3> Harden et Antetokounmpo dans l'équipe-type de la saison, Gobert dans la troisième </h3>
					<img src="../img/ha.jpg"width="638"height="350"> <br> <br>
				
					 James Harden (Houston) et Giannis Antetokounmpo (Milwaukee) font partie de l'équipe-type de la saison 2018-19, 
					 dévoilée jeudi par la Ligue nord-américaine. Pour la deuxième année consécutive, Rudy Gobert a été nommé dans 
					 la troisième équipe-type après avoir été nommé dans la seconde lors de la saison 2017-2018. <br> <br>
					 
					 La désignation des équipes-types de la saison NBA était attendue ce jeudi, et elle n'a pas déçu. Comme prévu, 
					 James Harden et Giannis Antetokounmpo sont les têtes de proue de l'équipe-type de la saison 2018-2019. 
					 Les deux All-Stars ont reçu le maximum de votes possibles du jury composé de journalistes spécialisés 
					 (100 votes, 500 points). <br> <br>
					 
				<h3> LeBron James seulement dans la troisième équipe-type </h3>
					<img src="../img/lbj.jpg"width="638"height="350"> <br> <br>
				
				
					(Oklahoma City), troisième et dernier joueur qui peut viser le trophée de MVP, 
					apparaît également dans cette équipe-type (433 pts), tout comme Stephen Curry (Golden State, 482 pts) 
					et le pivot serbe de Denver, Nikola Jokic (411 pts).  <br> <br>
					
					
					Le meilleur marqueur cette saison de Golden State, Kevin Durant, n'a été retenu que dans la deuxième équipe-type, 
					tandis que la superstar de la NBA LeBron James apparaît seulement dans la troisième équipe-type après la saison décevante des Lakers 
					(10e de la conférence Ouest). <br> <br>

					C'est la première fois que "King James" apparaît dans la 3e équipe-type, après 12 sélections pour l'équipe-type et deux pour la 2e équipe-type.
		
				
			</div>

			<div class="rightbox">
				
				<h3> Les équipes-type de la saison 2018-19 : </h3>
					<img src="../img/best.jpg"width="638"height="350"> 
					<ol>
						<li> Equipe-type : James Harden (Houston, 500 pts), Giannis Antetokounmpo (Milwaukee, 500 pts), Stephen Curry (Golden State, 482 pts), Paul George (Oklahoma City, 433 pts), Nikola Jokic (Denver, 411 pts)<br> <br>   </li>
						<li> 2e équipe-type : Joël Embiid (Philadelphie, 375 pts), Kevin Durant (Golden State, 358 pts), Damian Lillard (Portland, 306 pts), Kawhi Leonard (Toronto, 242 pts), Kyrie Irving (Boston, 195 pts)<br> <br>   </li>
						<li> 3e équipe-type : Russell Westbrook (Oklahoma City, 178 pts), Blake Griffin (Détroit, 115 pts), LeBron James (LA Lakers, 111 pts), Rudy Gobert (Utah, 89 pts), Kemba Walker (Charlotte, 51 pts).</li>								
					</ol> <br>
					
				<h3> Rudy Gobert encore nommé </h3>
					<img src="../img/rg.jpg"width="638"height="350"> <br> <br>
				
					Le pivot français d'Utah, Rudy Gobert, a été distingué pour la deuxième année consécutive : un an après avoir été sélectionné
					 dans la 2e équipe-type, il apparaît cette fois dans la 3e équipe-type. <br> <br>

					La veille, Gobert qui peut décrocher le titre de meilleur défenseur de NBA pour la deuxième année consécutive, avait été nommé dans la défense-type du Championnat 2018-19.



				
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
