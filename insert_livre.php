<head>
    <title> Insertion des Livres </title>
</head>

<body>
    <form action="insert_bdd_livre.php" method="post">
        <table> 
            <tr> <td> Titre </td> <td> <input type="text" name="titre" size="50"/> </td>
        <tr> <td> chemin </td> <td> <input type="text" name="chemin" size="50" /> </td>
        <tr> <td> image </td> <td> <input type="text" name="image"  size="50"/> </td>
        
        </tr></table>      
        <input type="submit" value="save livre" />
    </form>
</body>