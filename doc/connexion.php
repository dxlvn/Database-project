<?php
		session_start();
		$user = $_POST['user'];
		$mdp = $_POST['mdp'];	
		$link = new mysqli('localhost',$user, $mdp);
		if ($link->connect_errno) {
			 header('Location: ../index.php'); 
			 die ("Erreur de connexion : errno: " . $link->errno . " error: "
			. $link->error);
			}
				
		/*session is started if you don't write this line can't use $_Session  global variable*/
		$_SESSION['user']=$user;
		$_SESSION['mdp']=$mdp;
		echo $_SESSION['user'];
		echo $_SESSION['mdp'];
			header('Location: ../index.php'); 
		?>
<html>
	<form action="../index.php">
		<input type =submit value="Revenir à l'accueil">
			
	</form>
</html>
