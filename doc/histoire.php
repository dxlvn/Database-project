<?php
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
print "Connecté en tant que "; 
echo $_SESSION['user'];
?>
<DOCTYPE html>
	<html>
	<head>
		<title>Histoire</title>
		<link rel="stylesheet" type="text/css" href="../css/histoire.css">
		<link rel="shortcut icon" type="image/x-icon" href="../img/nbalogo1.jpg" />
		<meta charset="utf-8">
	</head>
	<body>

		<!-- Haut de page -->

		<header>
			<img src="../img/jordan.jpeg"width="300"height="150">
			<p>
			&nbsp &nbsp Histoire de la NBA<br> 
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
				
				<h3> Le 2 mars 1962, Wilt Chamberlain réalisait l’impossible : 100 points en un match...</h3>
							<img src="../img/wiltc.jpg"width="638"height="350">
							
							 <br> <br>
							Il y a 57 ans, le pivot vedette des Warriors réalisait l’un des plus grands exploits du sport :
							inscrire 100 points en un match ! Un chiffre tout rond immortalisé par une photo. <br> 
							
						<h3>Rappel des faits</h3>
							
							Né le 21 août 1936, Wilt Chamberlain (2m16, 125 kg) est drafté en 1959 par les Philadelphia Warriors
							 après un tour par les Harlem Globe Trotters. <br>
							 Il débute sa carrière le 24 octobre, et finit sa saison rookie avec 37.6 pts et 27 rebonds par match !
							 <br> <br>
							 Il est évidemment élu rookie de l’année mais aussi MVP, une première dans l’histoire 
							 (Wes Unseld sera le second à réaliser cet exploit en 68-69). La saison suivante, 
							 Chamberlain score 38.4 pts et prend 27 rebonds par match, 
							 et on comprend alors que ce joueur va laisser son empreinte dans ce sport. <br>
							 
						<h3>Un soir d’histoire</h3>
						
						
							Le 2 mars 1962, Wilt et ses Warriors accueillent à Hersey, en Pennsylvanie, les Knicks de New York. 
							Après un quart temps, l’échassier (son surnom) a déjà scoré 23 points, et à la mi-temps, il en est à 41 unités. 
							C’est énorme mais dans la lignée de ses cartons habituels. Mais la deuxième mi-temps va le faire entrer dans les livres d’histoire.
						
		
			</div>	

			<div class="rightbox">
						
						<h3> De 1946 à nos jours...</h3>

					<br> <br>
					
					La NBA tire son origine de la Basketball Association of America (BAA) créée en 1946 à New York.
					A cette époque, deux autres championnats américains concurrencent la future NBA, l’American Basketball League (ABL), et le National Basketball League (NBL).
					Si le niveau est équivalent dans les trois Ligues, les dirigeants de la BAA privilégient l’implantation des équipes dans les grandes villes. Un choix stratégique gagnant.
					En 1950, la BAA et la NBL fusionnent pour devenir la NBA. Les premiers champions de ce nouveau championnat de 17 équipes sont les Lakers de Minneapolis.
					<br> <br>
					La NBA se développe…en réduisant son nombre d’équipe pour atteindre huit franchises situées dans des métropoles en 1955.
					Pour la petite histoire, ces huit franchises sont toujours membres de la NBA aujourd’hui.
					Les Celtics (Boston) et les Knicks (New York) restent les deux seules à ne pas avoir changé de ville.
					
					<br> <br> 
					
					<h3> Transferts, argent, internationalisation : la NBA poursuit son évolution</h3>

					<br> <br>
				
					La NBA poursuit son développement dans les années 2000 avec notamment l’arrivée de plus en plus massive de joueurs étrangers.
					Ceux-ci se présentent le plus souvent directement à la Draft sans passer par le championnat universitaire américain (NCAA), voie de passage obligatoire dans le passé.
					De nombreux joueurs étrangers s’imposent en NBA comme Dirk Nowitzki (Allemagne), Tony Parker (France), Yao Ming (Chine), Manu Ginobili (Argentine) et Pau Gasol (Espagne).
						
					<br> <br>
					
					La NBA vit actuellement un période prospère avec un nouveau contrat de droits télévisés astronomique depuis 2016 (2.4 milliards de dollars par saison).
					L’augmentation des revenus de la Ligue a un impact sur le salary cap (montant maximum que chaque équipe peut utiliser pour les salaires de son effectif).
					Les joueurs en profitent pour signer des contrats juteux comme le pivot français des Jazz d’Utah Gobert (102 millions de dollars sur quatre ans).
					La NBA est devenu le championnat mondial le plus généreux en salaires pour ses joueurs.
			
							
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
