<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
        <link rel="stylesheet" href="css.css" />
        <link rel="stylesheet" href="../css/inscription.css" type="text/css" media="screen">
		<!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
		<title>Inscription</title>
	</head>
	<body>
	<?php
	if(isset($_POST['submit']))
	{
		$nom = htmlspecialchars(trim($_POST['nom']));
		$prenom = htmlspecialchars(trim($_POST['prenom']));
		$user = htmlspecialchars(trim($_POST['user']));
		$pass = htmlspecialchars(trim($_POST['pass']));
		$email = htmlspecialchars(trim($_POST['email']));
		
		// verifier que tous les champs sont saisis
		if($nom && $prenom && $user && $pass && $email){
			
			if ((preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email'])) && strlen($pass)>5)	{
				//echo 'L\'adresse ' . $_POST['email'] . ' est <strong>valide</strong> !';
				//}else{
					//echo 'L\'adresse ' . $_POST['email'] . ' n\'est pas valide, recommencez !';
				
			
			$pass = sha1($pass);
			error_reporting(E_ALL ^ E_DEPRECATED);
			$db = mysql_connect('127.0.0.1','root','');
			if(!$db){die("la connexion ne peut pas se faire" .mysql_error());}
			
			mysql_select_db('identification', $db);		
			
			$query = mysql_query("SELECT * FROM inscription WHERE user='$user'");
			$rows = mysql_num_rows($query);
			
			if($rows == 0){
				$reg = mysql_query("INSERT INTO inscription VALUES('','$nom','$prenom','$user','$pass','$email')");			
				//header('Location: test.php');
				echo '<h1 align= "center"> inscription réussie </h1>';
			
			  }else{echo '<h1 align= "center">Ce compte existe déjà !</h1>'; }
			}else{echo '<h1 align= "center">Mot de passe ou E-mail incorrect !</h1>';	}
						
		}else{
			echo '<h1 align= "center">Veuillez saisir tous les champs !</h1>';
		}
		
		
	}
	
	?>
		<form method="POST" action="inscription.php"><br/><br/><br/><br/><br/><br/><br/><br/>
			<fieldset><br>
						<input type="text" name="nom" id="nom" size="35" placeholder="Nom" /><br/><br/>
						<input type="text" name="prenom" id="prenom" size="35" placeholder="Prénom"  /><br/><br/>
						<input type="text" name="user" id="user" size="35" placeholder="Nom d'utilisateur"/><br/><br/>
						<input type="password" name="pass" id="pass" size="35" placeholder="******"  /><br/><br/>
						<input type="text" name="email" id="email" size="35" placeholder="E-mail"><br/><br/>
						
						<br/><br/><input type="submit" value="Envoyer" name ="submit" />
			</fieldset>
		</form>				
	</body>
</html>