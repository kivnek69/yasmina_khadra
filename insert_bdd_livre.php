

<?php
     $titre = $_POST['titre'];
     $chemin = $_POST['chemin'];
     $images = $_POST['image'];
     $nvchemin = 'Livres/' . $chemin;
     $nvimages = 'images/' . $images;
     @mysql_connect('localhost','root','');
     mysql_select_db('identification');
    
     $sql= "insert into livre values ('','$titre' , '$nvchemin' , '$nvimages')";
     $resultat = mysql_query($sql);
     echo $resultat;
     


?>