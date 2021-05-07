
<?php
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
print "Connecté en tant que "; 
echo $_SESSION['user'];
?>
<DOCTYPE html>
	<html>
	<head>
		<title>Classement</title>
		<link rel="stylesheet" type="text/css" href="../css/equipes.css">
		<link rel="shortcut icon" type="image/x-icon" href="../img/nbalogo1.jpg" />
		<meta charset="utf-8">
	</head>
	<body>

		<!-- Haut de page -->

		<header>
			<!-- https://www.bing.com/th?id=OIP.vYLsztCVw0e8QAz82pD0IAHaEo&pid=Api&rs=1 -->
			<img src="../img/playoffs.jpg"width="300"height="150">
			<p>
			&nbsp &nbsp Classement NBA<br> 
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
	
	<br>
	<h3> Le classement à l'issue de la saison 2018-2019 est le suivant: <br> <br> </h3>
		 
	

	<?php
	/*
	 * rajouter formulaire
	 * 
	 * 
	 * 
	 * 
	 * */
	
	
	
	
	
	$link = new mysqli('localhost', 'admin', 'admin');
	if ($link->connect_errno) {
	 die ("Erreur de connexion : errno: " . $link->errno . " error: "
	. $link->error);
	}
	$link->select_db('NBA') or die("Erreur selection BD: " . $link->error);
	$query = "SELECT * FROM CLASSEMENT" ;
		$result = $link->query($query) or die("SELECT Error: " . $link->error);
		
		print "<table>
			  <thead>
					<tr>
						 <th >Ligue </th>
						 <th > Conference  </th>
						 <th >Equipe  </th>
						 <th >Victoires  </th>
						 <th >Defaites  </th>
					</tr>
				</thead>";
		while ($tuple = mysqli_fetch_object($result)){

		print " <tr>
					  <td>$tuple->CLASSEMENTLigue </td>
					  <td> $tuple->CLASSEMENTConference </td>
					  <td> $tuple->equipe </td>
					  <td> $tuple->victoires </td>
					  <td> $tuple->defaites </td>
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
