<?php
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
print "Connecté en tant que "; 
echo $_SESSION['user'];
?>
<DOCTYPE html>
	<html>
	<head>
		<title>Playoffs</title>
		<link rel="stylesheet" type="text/css" href="../css/playoffs.css">
		<link rel="shortcut icon" type="image/x-icon" href="../img/nbalogo1.jpg" />
		<meta charset="utf-8">
	</head>
	<body>

		<!-- Haut de page -->

		<header>
			<!-- https://www.bing.com/th?id=OIP.vYLsztCVw0e8QAz82pD0IAHaEo&pid=Api&rs=1 -->
			<img src="../img/playoffs3.jpeg"width="300"height="150">
			<p>
			&nbsp &nbsp &nbsp Playoffs NBA<br> 
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
	

<h2> Voir infos Playoffs</h2><br>
	<table class="aff">
	<td>
	<h3> Par équipe</h3>
	<form method="post" action = "select_playoffs.php">
				Vainqueur<div><input type=text name=vainqueur /><div>
				Perdant<div ><input type=text name=perdant /></div>
			<br><input type=submit value="Recherche" /><br>
	</form>
	</td>
	<td>
	<h3> Par phase</h3>
	<form method="post" action = "select_playoffs.php">
				<br><select name =phase>
							  <option value="1er Tour">1er Tour</option>
							  <option value="Demi-finale de conference">Demi-finale de conference</option>
							  <option value="Finale de conference">Finale de conference</option>
							  <option value="Finale NBA">Finale NBA</option>
				   </select>
			<br><br><input type=submit value="Recherche" /><br>
	</form>
	</td>
	
	<td>
	<h3> Par date</h3>
	<form method="post" action = "select_playoffs.php">
			 Date(YYYY-MM-JJ) <div><input type=date required=required  name=date /></div>
			<br><input type=submit value="Recherche" /><br>
	</form>
	</td>
	</table>
	<br>

		<!-- Pied de page -->

<footer>
	<p>
		Copyright &copy; D-M - 2019 .
	</p>
</footer>

	</body>
</html>
