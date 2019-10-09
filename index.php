<!-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transmissions de données avec les Formulaires</title>
</head>
<body>
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

        <label for="nom">Nom : <input type="text" name="name" size="30" maxlength="55" value="<?php echo $_POST['nom'] ?>"></label><br><br> <!-- Récupère la valeur du name dans cible.php -->

        <label for="prenom">Prénom : <input type="text" name="firstname" size="30" maxlength="55" value="<?php echo $_POST['prenom'] ?>"></label><br><br>

        <label for="date of born">Date de naissance : <input type="date" name="date" size="30" maxlength="55" value="<?php echo $_POST['annif'] ?>"></label><br><br>

        <label for="mail">Adresse e-mail : <input type="text" name="google" size="30" maxlength="55" value="<?php echo $_POST['email'] ?>"></label><br><br>

        <p>
            <?php if (isset($_POST['choix'])) { // isset($_POST['choix']) = si 'choix' a une valeur autre que NUL alors execute la condition.
                echo "tu a choisi " . $_POST['choix'];    
            } ?>
        </p>


        Nombre de Personnes : <br>
        <select name="Menu"><br>
            <option value="2-4">2-4</option>
            <option value="4-8">4-8</option>
            <option value="6-12">6-12</option>
        </select><br><br>

        Choississez un Menu :<br><br>
        name
        <input type="checkbox" name="repas" /><label>Poulet sauce d'huître</label><br><br>
        <input type="checkbox" name="repas" /><label>Poisson à la chinoise</label><br><br>
        <input type="checkbox" name="repas" /><label>Rougail saucisse</label><br><br>
        <input type="checkbox" name="repas" /><label>Cabri Massalé</label><br><br>
        <input type="submit" value="Valider">


    </form>

</body>

</html>