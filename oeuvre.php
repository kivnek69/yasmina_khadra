
<!DOCTYPE html>
<html lang="en">
<head>
<title>Oeuvres</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Kozuka_Gothic_Pro_OpenType_300.font.js" type="text/javascript"></script>
<script src="js/Kozuka_Gothic_Pro_OpenType_700.font.js" type="text/javascript"></script>
<script src="js/Kozuka_Gothic_Pro_OpenType_900.font.js" type="text/javascript"></script>
<script src="js/FF-cash.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/tms-0.3.js"></script>
<script type="text/javascript" src="js/tms_presets.js"></script>
<script type="text/javascript" src="js/easyTooltip.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>
<body id="page1">

<!--==============================header=================================-->
<header>
  <div class="main">
    <div class="prev-indent-bot2">
      <h1><a href="registredUser.php">Yasmina Khadra</a></h1>
       <nav>
        <ul class="menu">
	        <li><a class="active" href="registredUser.php">Accueil</a></li>
	        <li><a href="Biographie.php">Biographie</a></li>
	        <li><a href="oeuvre.php">Oeuvres</a></li>
	       <!--   <li><a href="Oeuvres.html">Oeuvres</a></li>-->
	       <!--  <li><a href="Article.html">Article</a></li> -->
	        <li><a href="news.php">News</a></li>
	        <li><a href="video.html">Videos</a></li>
	        <li><a href="mailto:boukellarafik@hotmail.fr">Contact</a></li>
        </ul>
      </nav>
      <div class="clear"></div>
    </div>
  </div>
  <div class="slider-wrapper">
    <div class="slider">    
       <ul class="items">      
        <li> <img src="images/khadra1.png" alt="">
     	  <div class="banner"> <em>"[...] croire en quelque chose, c'est d'abord et surtout ne jamais y renoncer."</em> </div>
       </li>
        <li> <img src="images/tag.jpg" alt=""> </li>
      <!--   <li> <img src="images/slider-img3.jpg" alt="">
          <div class="banner"> <strong>LET US <strong>COOPERATE!</strong></strong> <em>Let’s create your company’s growth strategy together!</em> <span class="button"> <a href="#"><strong>Read More</strong></a> </span> </div>
        </li> -->
      </ul> 
    </div>
  </div>
</header>
<!--==============================content================================-->
<br/><br/>


<article>

	<img src="images/page3-img4.png" alt="" id="logoBio"><br/>
	
	<?php
      	error_reporting(E_ALL ^ E_DEPRECATED);
	$db = mysql_connect('127.0.0.1','root','');
	//on s�l�ctionne notre base de donn�es 'identification'
	mysql_select_db('identification', $db);
	//on s�l�ctionne dans la table 'inscription' l'utilisateur si existe
	$data=mysql_query("SELECT * from livre"); 
	while ($donnees = mysql_fetch_array($data)) {                      
                    $idarticle = $donnees['id'];
                    $titre = $donnees['titre'];
                    $lien =  $donnees['chemin'];
                    $image = $donnees['image'];                    
                   echo "&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; <a href='$lien'><img src ='$image' width='250px' height='250' alt=''/>  </a> ";   
                                     
                          }
	//renvoie la ligne avec les informations de l'utilisateur si elles existent
	mysql_close();
	
    
        
?>
	
	<!-- 
     &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
        -->                 

</article>




<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript">
$(window).load(function () {
    $('.slider')._TMS({
        duration: 800,
        easing: 'easeOutQuad',
        preset: 'simpleFade',
        pagination: true, //'.pagination',true,'<ul></ul>'
        pagNums: false,
        slideshow: 7000,
        banners: 'fade', // fromLeft, fromRight, fromTop, fromBottom
        waitBannerAnimation: false
    })
})
</script>
</body>
</html>
