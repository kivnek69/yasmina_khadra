﻿<?php	
	session_start();
	if(isset($_SESSION['user'])){
		
		echo "<div align='right'>Bienvenu ".$_SESSION['user'].', <a href="logout.php">se deconnecter</a></div>';
	}else{
		
		header('Location: logout.php');
		
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Yasmina Khadra</title>
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
	       <!-- <li><a href="Article.html">Article</a></li>-->
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
	<img src="images/page3-img5.png" alt=""><br/>
     &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
       <a> <iframe width="236" height="150" src="http://www.youtube.com/embed/2QdxCupMsMk"> </iframe> </a>&nbsp;&nbsp;                          
       <a> <iframe width="236" height="150" src="http://www.youtube.com/embed/NO9KrlLdA04"> </iframe></a> &nbsp;&nbsp;                
       <a> <iframe width="236" height="150" src="http://www.youtube.com/embed/2QdxCupMsMk"> </iframe> </a>&nbsp;&nbsp; 
       <a> <iframe width="236" height="150" src="http://www.youtube.com/embed/NO9KrlLdA04"> </iframe> </a> <br/>
                               

</article>



<section id="content">
  <div class="main">
    <div class="container_12">
      <div class="wrapper">
        <article class="grid_12">
          <br/>
          <div class="wrapper indent-bot">
            
              <div class="wrapper">
              <article></article>
             
                </div>
               </div>
               </article>
           <!-- <article class="grid_4 omega">
              <div class="indent-left_A">
                <div class="wrapperActu">
                  <figure class="img-indent2"><img alt="" src="images/page3-img3.png"></figure>
                    <div class="extra-wrap">
                     <marquee width="330" height="340" direction="up">                           
                         VIDEO. L'auteur Yasmina Khadra, parrain du festival PriMed, invité du journal de 12h<br>
                         <img alt="yasmina khadra" src="images/equation.jpg"> <br>                         
                      </marquee>                   
                  </div>
                </div>
              </div>   
            </article> -->  
          </div>
        
          <br/>
          <div class="wrapper">
            <article class="grid_4 alpha"> <strong class="circle">A</strong>
              <div class="extra-wrap">
                  <div class="indent-top3"> <strong class="title-1 color-2"> </strong> <strong>L'auteur Yasmina Khadra, parrain du festival PriMed </strong> </div>
              </div>               
               
              <img src ="images/article1.PNG"  alt=""/>   
              <br/> L'auteur Yasmina Khadra, parrain du festival PriMed,
                 invité du journal de 12h L'auteur algérien Yasmina ...<br/> 
                 
                <a href="Articles/article1.php" target = "_blank">
                <input type="submit" value="Lire l'article" class="lireArticle"/></a> 
                    
               </article>
          
            <article class="grid_4">
              <div class="indent-left"> <strong class="circle">B</strong>
                <div class="extra-wrap">
                  <div class="indent-top3"><strong>La ira de los pueblos es más fuerte que cualquier</strong> </div>
                </div>    
                
                <div>
                 <img src ="images/article2.PNG"  alt=""/> <br/>
                A qué esperan los monos… nace como una fábula. La de una bella durmiente que no despertará jamás. Para entender el por qué de ese ... <br/><a href="" target="_blank"><input type="submit" value="Lire l'article" class="lireArticle"/></a> 
                </div>          
                       
              </div>
            </article>
            <article class="grid_4 omega">
              <div class="indent-left"> <strong class="circle">C</strong>
                <div class="extra-wrap">
                  <div class="indent-top3"> <strong>Le régime algérien est un zombie</strong> </div>
                </div>
                               
               <div>
                <img src ="images/article3.PNG"  alt=""/>  <br/>
                INTERVIEW - Yasmina Khadra est l'auteur algérien le plus connu au monde
                depuis ses premiers romans policiers ... <br/>
                
                <a href="article3.html" target="_blank"><input type="submit" value="Lire l'article" class="lireArticle"/></a> 
               </div>        
              </div>
            </article>
          </div>
          <br/>
      </div>
    </div>
   
</section>
<!--==============================footer=================================-->
<footer>
  <div class="main">
    <div class="container_12">
      <div class="wrapper">
        <article class="grid_3">
          <ul class="list-services">
            <li class="item-1"><a class="tooltips" href="#"></a></li>
            <li class="item-2"><a class="tooltips" href="#"></a></li>
            <li class="item-3"><a class="tooltips" href="#"></a></li>
            <li class="item-4"><a class="tooltips" href="#"></a></li>
          </ul>
        </article>
        <article class="grid_3">
          <div class="indent-left2">
            <h5>Navigation</h5>
            <ul class="list-1">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="Biographie.php">Biographie</a></li>
                <li><a href="News.html">News</a></li>
                <li><a href="Video.html">Videos</a></li>
                <li><a href="mailto:boukellarafik@hotmail.fr">Contact</a></li>
            </ul>
          </div>
        </article>
        <article class="grid_3_A">
          <h5>Contact</h5>
          <dl class="contact">
            <dt>Université Paris VIII<br>
              Vincennes, Saint-Denis<br>
              2 Rue de la Liberté,<br> 93526 Saint-Denis
              </dt>
            <dd><span>Phone:</span> 062-335-6538</dd>
         
          </dl>
        </article>
       
      </div>
    </div>
  </div>
</footer>

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
</html>
