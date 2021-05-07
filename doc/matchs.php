<?php
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
print "Connecté en tant que "; 
echo $_SESSION['user'];
?>
<DOCTYPE html>
	<html>
	<head>
		<title>Matchs</title>
		<link rel="stylesheet" type="text/css" href="../css/matchs.css">
		<link rel="shortcut icon" type="image/x-icon" href="../img/nbalogo1.jpg" />
		<meta charset="utf-8">
	</head>
	<body>

		<!-- Haut de page -->

		<header>
			<!-- https://www.bing.com/th?id=OIP.vYLsztCVw0e8QAz82pD0IAHaEo&pid=Api&rs=1 -->
			<img src="../img/match.jpg"width="300"height="150">
			<p>
			&nbsp &nbsp &nbsp &nbsp Matchs NBA<br> 
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
	
	
		<table class = "aff">
		<td>
		<h2> Voir infos match</h2>
		<form method="post" action = "select_match.php">
			Equipe1	<div><input type=text name=equipe1 /><div>
			 Equipe2 <div ><input type=text name=equipe2 /></div>
			 Date(YYYY-MM-JJ) <div><input type=date min=2018-01-01 max =2019-12-19 name=date /></div>
			<br><input type=submit value="Recherche" /><br>
		</form>
		</td>
		<td>
	<?php 
	if($_SESSION['user'] == 'admin')
	{
			print"<h2> Inserer un match</h2>
			<form method=post action = insert_match.php>";
				
			$link = new mysqli('localhost', 'admin', 'admin');
			if ($link->connect_errno) {
			 die ("Erreur de connexion : errno: " . $link->errno . " error: " . $link->error);
			}
			$link->select_db('NBA') or die("Erreur selection BD: " . $link->error);
			$query = "SELECT * FROM EQUIPE" ;
			$result = $link->query($query) or die("SELECT Error: " . $link->error);
			print "Equipe 1 <br><select name =equipe1 >";
			while ($tuple = mysqli_fetch_object($result))
			{
					print" <option value='$tuple->nomEquipe' >$tuple->nomEquipe</option>";
			}
						
			$query = "SELECT * FROM EQUIPE" ;
			$result = $link->query($query) or die("SELECT Error: " . $link->error);
			print" </select>
			<br>
			Equipe 2 <br><select name =equipe2 >";
			while ($tuple = mysqli_fetch_object($result))
			{
					print" <option value='$tuple->nomEquipe' >$tuple->nomEquipe</option>";
			}
							
			print "</select> <br>
			 Score <div><input required=required type=text name=score /></div>
			 Date <div><input required=required type=date name=date /></div>
			<br><input type=submit value=Inserer /><br> "; 
			}
			?>
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
