<?php
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
print "Connecté en tant que "; 
echo $_SESSION['user'];
?>
<DOCTYPE html>
	<html>
	<head>
		<title>Joueurs</title>
		<link rel="stylesheet" type="text/css" href="../css/joueurs.css">
		<link rel="shortcut icon" type="image/x-icon" href="../img/nbalogo1.jpg" />
		<meta charset="utf-8">
	</head>
	<body>

		<!-- Haut de page -->

		<header>
			<!-- https://www.bing.com/th?id=OIP.vYLsztCVw0e8QAz82pD0IAHaEo&pid=Api&rs=1 -->
			<img src="../img/curry2.jpeg"width="300"height="150">
			<p>
			&nbsp &nbsp &nbsp Joueurs NBA<br> 
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
		
	<h2> Chercher un joueur</h2>
	<table class="aff">
		<td>
	<h3>Par nom</h3>
	<form method="post" action = "select_joueur.php">
			 Nom	<div><input type=text required=required name=nom /><div>
			<br><input type=submit value="Recherche" /><br>
	</form>
	</td>
	<td>
	<h3>Par numero</h3>
	<form method="post" action = "select_joueur.php">
			 Numero <div><input type=number required=required min=0 name=numero /></div>
			<br><input type=submit value="Recherche" /><br>
	</form>
	</td>
	<td>
	<h3>Par equipe</h3>
	<form method="post" action = "select_joueur.php">
			 Equipe <div><input type=text required=required name=equipe /></div>
			<br><input type=submit value="Recherche" /><br>
	</form>
	</td>
	
	<td>
	<h3>Par pays</h3>
	<form method="post" action = "select_joueur.php">

			 Pays   <div><input type=text required=required name=pays /></div>
			<br><input type=submit value="Recherche" /><br>
	</form>
	</td>
	<td>
	<h3>Par poste</h3>
	<form method="post"  action = "select_joueur.php">

			 Poste<br><select  name=poste >
							  <option value=Point Guard>Point Guard</option>
							  <option value=Shooting Guard>Shooting Guard</option>
							  <option value=Small Forward>Small Forward</option>
							  <option value=Power Forward>Power Forward</option>
							  <option value=Center>Center</option>
				   </select>
				   <br>
			<br><input type=submit value="Recherche" /><br>
	</form>
	</td>
	
	<td>
	<h3>Par age</h3>
	<form method="post" action = "select_joueur.php">
			 Age    <div><input type=number required=required min=0 name=age /></div>
			<br><input type=submit value="Recherche" /><br>
	</form>
	</td>
	</table>
	<br>
	
<?php
$link = new mysqli('localhost', 'admin', 'admin');
	if ($link->connect_errno) {
	 die ("Erreur de connexion : errno: " . $link->errno . " error: " . $link->error);
	}
	$link->select_db('NBA') or die("Erreur selection BD: " . $link->error);
$query = "SELECT * FROM EQUIPE" ;
	$result = $link->query($query) or die("SELECT Error: " . $link->error);
	
	if(($_SESSION['user'] != 'spectateur' ))
	{
	print"
	<table class =aff2>
	<td>
	<h2> Inserer un joueur</h2>
	<form method=post action = insert_joueur.php>
			 Nom	<div><input type=text required=required name=nom /><div>
			 Prenom <div ><input type=text required=required name=prenom /></div>
			 Numero <div><input type=number min=0 required=required name=numero /></div>
			 Equipe  <br><select name =equipe >
							";
							while ($tuple = mysqli_fetch_object($result)){
							print" <option value='$tuple->nomEquipe' >$tuple->nomEquipe</option>";
						 }
							print "
				   </select>
				   <br>
			 Pays   <div><input type=text required=required name=pays /></div>
			 Poste<br><select name =poste >
							  <option value='Point Guard' >Point Guard</option>
							  <option value='Shooting Guard' >Shooting Guard</option>
							  <option value='Small Forward'>Small Forward</option>
							  <option value='Power Forward'>Power Forward</option>
							  <option value='Center'>Center</option>
				   </select>
				   <br>
			 Age    <div><input type=number min=0 required=required name=age /></div>
			<br><input type=submit value=Inserer /><br>
	</form>
	</td>
	
	<td>
	<h2> Supprimer un joueur</h2>
	<form method=post action = delete_joueur.php>
			 ID	<div><input type=number required=required min=1 name=ID /><div>
			<br><input type=submit value=Supprimer /><br>
	</form>
	</td>
	</table>
	<br>";
}
	
	
	

	$query = "SELECT * FROM JOUEURS" ;
	$result = $link->query($query) or die("SELECT Error: " . $link->error);

	print "<table>
			  <thead>
					<tr>
						<th >ID</th>
						<th >Nom</th>
						<th >Prenom</th>
						<th >Numero</th>
						<th >Equipe</th>
						<th >Pays</th>
						<th >Poste</th>
						<th >Age</th>
					</tr>
				</thead>";
	  
	  

	while ($tuple = mysqli_fetch_object($result)){

	print " <tr>
				<td>$tuple->idJoueur</td>
				<td>$tuple->nom</td>
				<td>$tuple->prenom</td>
				<td>$tuple->numero</td>
				<td>$tuple->equipe</td>
				<td>$tuple->pays</td>
				<td>$tuple->poste</td>
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
