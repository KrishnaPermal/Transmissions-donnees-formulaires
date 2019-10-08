<!-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transmissions de données avec les Formulaires</title>
</head>
<body>
    

   <form action="cible.php" method="POST">
       <p><label>Êtes-vous végétarien? <input type="checkbox" name="vegetarien" /></label></p>
       <p><input type="submit"></p>
   </form>

</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EXO FORMULAIRE</title>
</head>
<body>

<p>MON FORMULAIRE</p><br><br>

<form method="POST" action="cible.php">

<label for="nom">Nom : <input type="text" name="nom" size="30" maxlength="55"></label> <br><br>

<label for="prenom">Prénom : <input type="text" name="prenom" size="30" maxlength="55"></label><br><br>

<label for="mail">Adresse e-mail : <input type="text" name="mail" size="30" maxlength="55"></label><br><br>

<label for="date of born">Date de naissance : <input type="date" name="date" size="30" maxlength="55"></label><br><br><br><br>




Nombre de Personnes :
<select name="Personnes">
<option selected="selected">2-4</option>
<option selected="selected">4-8</option>
<option selected="selected">6-12</option>
</select><br><br>

Choississez un Menu :<br><br>
<input type="checkbox" name="menu"/><label>Poulet sauce d'huître</label><br><br>
<input type="checkbox" name="menu"/><label>Poisson chili</label><br><br>
<input type="checkbox" name="menu"/><label>Rougail saucisse</label><br><br>
<input type="checkbox" name="menu"/><label>Cabri Massalé</label><br><br>
<input type="button" value="Valider">


</form>



</body>
</html>