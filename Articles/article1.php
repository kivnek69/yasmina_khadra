
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PriMed</title>

<link rel="stylesheet" href="../css/article.css" type="text/css" media="screen">
</head>
<body>
<!--==============================header=================================-->
<header>
<div class="main">
<div class="prev-indent-bot2">
<h1><a href="../index.php">Yasmina Khadra</a></h1>

				
				</div>
				</div>
				<div class="slider-wrapper">
				<div class="slider">
						&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; <img src="../images/khadra1.png" alt="">
								
		</div>
		</div>
	</header>

<!--==============================content================================-->

	

<div>
	<?php 
	error_reporting(E_ALL ^ E_DEPRECATED);
	$db = mysql_connect('127.0.0.1','root','');
	//on s�l�ctionne notre base de donn�es 'identification'
	mysql_select_db('identification', $db);
	//on s�l�ctionne dans la table 'inscription' l'utilisateur si existe
	$data=mysql_fetch_array (mysql_query("SELECT * FROM  article WHERE id = 1")); 
	if(!$data){die("la connexion ne peut pas se faire" .mysql_error());}
	//renvoie la ligne avec les informations de l'utilisateur si elles existent
		
	echo '<p>'.utf8_encode ($data['titre']).'</p>'; 
	echo ' &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
     	   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
           <img src="../images/yasmina_9.jpg"  width="640" height="360" alt="L&amp;#039;auteur algÃ©rien Yasmina Khadra est le parrain du festival PriMed 2014, ce vendredi Ã  la villa MÃ©diterranÃ©e Ã  Marseille. Â© AFP" /></div>';
	echo '<p>'.utf8_encode ($data['texte']).'</p>';
	
	mysql_close();
	?>
</div>



</body>
</html>