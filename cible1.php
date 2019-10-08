<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transmissions de données avec les Formulaires</title>
</head>
<body>
    
    
       <?php
       if (isset($_POST['vegetarien']))
       {
           echo '<p>Vous êtes donc végétarien.</p>';
       }
       else
       {
        echo '<p>Vous n\'êtes donc pas végétarien, vous mangez de la viande</p>';
       }
       ?>

</body>
</html>

