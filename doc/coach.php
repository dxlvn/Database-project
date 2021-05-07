<?php
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
print "Connecté en tant que "; 
echo $_SESSION['user'];
?>
<DOCTYPE html>
	<html>
	<head>
		<title>Coach</title>
		<link rel="stylesheet" type="text/css" href="../css/coach.css">
		<link rel="shortcut icon" type="image/x-icon" href="../img/nbalogo1.jpg" />
		<meta charset="utf-8">
	</head>
	<body>

		<!-- Haut de page -->

		<header>
			<!-- https://www.bing.com/th?id=OIP.vYLsztCVw0e8QAz82pD0IAHaEo&pid=Api&rs=1 -->
			<img src="../img/tc.jpg"width="300"height="150">
			<p>
			&nbsp &nbsp &nbsp Coachs en NBA<br> 
			</p>
		</header>

		<!-- Menu de navigation -->

	<nav class="menu-nav">
			<ul>
				<li class="btn">
				    <a href="../index.php">
				    	Accueil / Connexion
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
	

	
	<h2> Chercher un coach</h2>
	<table class = "aff">
		<td>
	<h3>Par nom</h3>
	<form method="post" action = "select_coach.php">
			 Nom	<div><input type=text name=nom /><div>
					<input type=hidden name=choix value=1>

			<br><input type=submit value="Recherche" /><br>
	</form>
	</td>
	
	<td>
	<h3>Par équipe</h3>
	<form method="post" action = "select_coach.php">
			 Equipe <div><input type=text  name=equipe /></div>
						<input type=hidden name=choix value=2>
			<br><input type=submit  value="Recherche" /><br>
	</form>
	</td>
	
	<td>
	<h3>Par titre</h3>
	<form method="post" action = "select_coach.php">
			 Titres <div><input type=number  name=titre min = 0 /></div>
						<input type=hidden name=choix value=3>
			<br><input type=submit  value="Recherche" /><br>
	</form>
	</td>
	</table>
	</p>
	
	<br>
	<?php
	$link = new mysqli('localhost', 'admin', 'admin');
	if ($link->connect_errno) {
	 die ("Erreur de connexion : errno: " . $link->errno . " error: " . $link->error);
	}
	$link->select_db('NBA') or die("Erreur selection BD: " . $link->error);
	$query = "SELECT * FROM EQUIPE" ;
	$result = $link->query($query) or die("SELECT Error: " . $link->error);
	if(($_SESSION['user'] == 'admin') || ($_SESSION['user'] == 'coach' ))
	{
		print"
		<table class=aff>
			<td>
			<h2> Inserer un Coach</h2>
			<form method=post action = insert_coach.php>
					 Nom	<div><input type=text  required=required name=nom /><div>
					 Prenom <div ><input type=text required=required name=prenom /></div>
					 Equipe <br><select name =equipe >
							";
							while ($tuple = mysqli_fetch_object($result)){
							print" <option value='$tuple->nomEquipe' >$tuple->nomEquipe</option>";
						 }
						print "
						
				   </select>	
				   <br>
					 Titres<div><input type=number min=0 required=required name=titres /></div>
					 Age    <div><input type=number min=0 required=required name=age /></div>
					<br><input type=submit value=Insert /><br>
			</form>
			</td>
			</table>
			<br>";
		}
	
	

	$query = "SELECT * FROM COACH" ;
	$result = $link->query($query) or die("SELECT Error: " . $link->error);

	print "<table>
			  <thead>
					<tr>
						<th >ID</th>
						<th >Nom</th>
						<th >Prenom</th>
						<th >Equipe</th>
						<th >Titres</th>
						<th >Âge</th>
					</tr>
				</thead>";
	  
	  

	while ($tuple = mysqli_fetch_object($result)){

	print " <tr>
				<td>$tuple->idCoach</td>
				<td>$tuple->nom</td>
				<td>$tuple->prenom</td>
				<td>$tuple->equipe</td>
				<td>$tuple->titres</td>
				<td>$tuple->age</td>
			
			</tr>";
	} 

		print "</table>";
		
		$link->close();
		?>

		<!-- Pied de page -->

<footer>
	<p>
		Copyright &copy; D-M - 2019 .
	</p>
</footer>

	</body>
</html>
