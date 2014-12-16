<head> 
    <title> Afficher Pdf </title>
</head>
<?php
    @mysql_connect('localhost','root','');
    mysql_select_db('test'); 
    $reponse =  mysql_query("SELECT * from article");
         while ($donnees = mysql_fetch_array($reponse)) {                      
                    $idarticle = $donnees['id_article'];
                    $titre = $donnees['titre'];
                    $lien =  $donnees['lien'];
                    $image = $donnees['images'];
                   echo "<a href='$lien'> <img src ='images/pdf.jpg'  alt=''/>  $titre  </a> </br>";
                 
                          }
                          
     
        @$mysql_close();
    
        
?>