<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transmissions de données avec les Formulaires</title>
</head>

<body>




    <!-- A TERMINER AVEC LES $_POST[.........] -->


    <form method="POST" action="index.php">

        <label for="nom">Nom : <input type="text" name="nom" size="30" maxlength="55" value="<?php echo $_POST['name'] ?>"></label> <br><br>

        <label for="prenom">Prénom : <input type="text" name="prenom" size="30" maxlength="55" value="<?php echo $_POST['firstname'] ?>"></label><br><br>

        <label for="date of born">Date de naissance : <input type="date " name="annif" size="30" maxlength="55" value="<?php echo $_POST['date'] ?>"></label><br><br><br>

        <label for="mail">Adresse e-mail : <input type="text" name="email" size="30" maxlength="55" value="<?php echo $_POST['google'] ?>"></label><br><br>


        <select name="choix">
            <p>
                <?php echo $_POST['Menu'] ?>
            </p>
            <option value="2-4">2-4</option>
            <option value="4-8">4-8</option>
            <option value="612">6-12</option>
        </select><br><br>


        
            <p>
                <?php echo $_POST['repas'] ?>
            </p>

        <input type="checkbox" name="menu1" /><label>Poulet sauce d'huître</label><br><br>
        <input type="checkbox" name="menu2" /><label>Poisson à la chinoise</label><br><br>
        <input type="checkbox" name="menu3" /><label>Rougail saucisse</label><br><br>
        <input type="checkbox" name="menu4" /><label>Cabri Massalé</label><br><br>
        <input type="submit" value="Valider">


        <input type="submit" value="Valider">

    </form>

</body>

</html>