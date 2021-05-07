<?php
session_start();
print "Connecté en tant que "; 
echo $_SESSION['user'];
?>

<DOCTYPE html>
	<html>
	<head>
		<title>Équipes</title>
		<link rel="stylesheet" type="text/css" href="../css/equipes.css" >
		<meta charset="utf-8">	
		<link rel="shortcut icon" type="image/x-icon" href="../img/nbalogo1.jpg" />

	</head>
	<body>

		<!-- Haut de page -->

		<header>
			<img src="../img/carte.jpg"width="300"height="150">
			<p>
			&nbsp &nbsp &nbsp Équipes NBA<br> 
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
	

	
	<table class ="aff">
		 <thead><h2> Chercher une equipe</h2></thead><br>
	<td>
		<h3> Par nom</h3>
		<form method="post" action = "select_equipe.php">
				NomEquipe <div><input type=text name=nomEquipe /><div>
				<input type=submit value="Recherche" />
		</form>
	</td>
	<td>	
		<h3> Par Conference</h3>
		<form method="post" action = "select_equipe.php">
					Conference
					<br><select name =conf>
								  <option value="West">West</option>
								  <option value="East">East</option>
					   </select>
				<br><input type=submit value="Recherche" />
		</form>
	</td>
	
	<td>
		<h3> Par Ville</h3>
		<form method="post" action = "select_equipe.php">
					Ville <div><input type=text required=required  name=ville /><div>
						<br><input type=submit value="Recherche" /><br>
		</form>
	</td>
	
	<td>
		<h3> Par année de Création</h3>
		<form method="post" action = "select_equipe.php">
					AnneeCreation	<div><input type=number required=required min=1900 name=anneeCreation /><div>
				<br><input type=submit value="Recherche" />
		</form>
	</td>
	</table>
	
	<?php
	$link = new mysqli('localhost', 'admin', 'admin');
	if ($link->connect_errno) {
	 die ("Erreur de connexion : errno: " . $link->errno . " error: " . $link->error);
	}
	$link->select_db('NBA') or die("Erreur selection BD: " . $link->error);
$query = "SELECT * FROM EQUIPE" ;
	$result = $link->query($query) or die("SELECT Error: " . $link->error);
	if($_SESSION['user'] == 'admin')
	{
	print"<table class = aff2>
	<td>
	<h2> Inserer une équipe</h2>
	<form method= post action = insert_equipe.php>
				NomEquipe <div><input type=text required=required name=nomEquipe /><div>
			    Sigle <div><input type=text required=required name=sigle /><div>
				Conference<br><select name =conference >
							  <option value=West> West</option>
							  <option value=East> East</option>
				   </select>
				   <br>
				Ville <div><input type=text required=required name=ville /><div>
				Stade <div><input type=text required=required name=stade /><div>
				Sponsors <div><input type=text required=required name=sponsors /><div>
				NombreTitres <div><input type=number min=0 required=required name=nombreTitres /><div>
				AnneeCreation	<div><input type=number min=1900 required=required name=anneeCreation /><div>
			<br><input type=submit value=Inserer />
	</form>
	</td>
	<br>
	
	<td>
	<h2> Supprimer une équipe</h2>
	<form method=post action = delete_equipe.php>
				Equipe  <br><select name =nom >
							";
							while ($tuple = mysqli_fetch_object($result)){
							print" <option value='$tuple->nomEquipe' >$tuple->nomEquipe</option>";
						 }
							print "
				   </select>
			<br><input type=submit value=Supprimer />
	</form>
	<br>
	</td>
	</table>
	";
}
	
		print "<br><h2>Equipes</h2><br>";
		$link = new mysqli('localhost', 'admin', 'admin');
		if ($link->connect_errno) {
		 die ("Erreur de connexion : errno: " . $link->errno . " error: "
		. $link->error);
		}
		$link->select_db('NBA') or die("Erreur selection BD: " . $link->error);

		$query = "SELECT * FROM EQUIPE" ;
		$result = $link->query($query) or die("SELECT Error: " . $link->error);
		
		
		
		print "<table class >
			  <thead>
					<tr>
						<th >NomEquipe</th>
						<th >Sigle</th>
						<th >Conference</th>
						<th >Ville</th>
						<th >Stade</th>
						<th >Sponsors</th>
						<th >NombreTitres</th>
						<th >AnneeCreation</th>
					</tr>
				</thead>";
		while ($tuple = mysqli_fetch_object($result)){

		print " <tr>
					<th >$tuple->nomEquipe</th>
					<th >$tuple->sigle</th>
					<th >$tuple->conference</th>
					<th >$tuple->ville</th>
					<th >$tuple->stade</th>
					<th >$tuple->sponsor</th>
					<th >$tuple->nombreTitres</th>
					<th >$tuple->anneeCreation</th>
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
