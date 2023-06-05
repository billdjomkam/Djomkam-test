<?php 
        foreach($_POST as $key=>$val)
        ${$key}=$val;
        $erreur="";
        if(isset($valider)){
            if((empty($nom))||(!preg_match("#^[a-zA-Z \-]+$#", $nom))) $erreur="<li>nom invalide ou nom rempli</li>";
            if(empty($prenom)||(!preg_match("#^[a-zA-Z \-]+$#",$prenom))) $erreur.="<li>prenom laisse vide ou invalide ou om rempli</li>";
            if(empty($tel)) $erreur.="<li>numero de telephone  laissee vide</li>";
            if(empty($mail)|| filter_var($mail,FILTER_VALIDATE_EMAIL)) $erreur.="<li>adresse mail laisse vide</li>";
            if(empty($question)) $erreur.="<li>question laisse vide</li>";
        }
        else
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@100&family=Manrope:wght@200&family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <?php include('header.php');?>
    <?php include('menu.php');?>
    <main>
        <form action="" method="POST">
            <div class="form">
            <fieldset>
                <table>
                    <legend><h1>renseignement</h1></legend>
                    <tr><td><label for="nom">Nom</label></td></tr>
                    <tr><td><input type="text" name="nom" id="nom" value="<?php echo @$nom ?>" placeholder="Entrez votre nom" required ></td></tr>
                    <tr><td><label for="nom">Prenom</label></td></tr>
                    <tr><td><input type="text" name="prenom" id="prenom" value="<?php echo @$prenom ?>"placeholder="Entrez votre prenom" ></td></tr>
                    <tr><td><label for="tel">Numero de telephone</label></td></tr>    
                    <tr><td><input type="number" name="tel" id="tel" value="<?php echo $tel ?>"placeholder="Entrez votre numero de telephone"></td></tr> 
                    <tr><td><label for="mail">Adresse mail</label></td></tr>
                    <tr><td><input type="email" name="mail" id="mail"value="<?php echo @$mail ?>" placeholder="Entrez votre adresse mail" ></td></tr>
                    <tr><td><label for="question">Question</label></td></tr>
                    <tr> <td><textarea name="question" id="question" value="<?php echo $question ?>"cols="32" rows="12"></textarea></td></tr>
                    <tr>
                        <td><input type="submit" value="Envoyer" name="valider"></td>
                        <td><input type="reset" value="annuler"></td>
                    </tr>
                </table>
    </fieldset>
             </div>
        </form>
        <?php
        if(!empty($erreur)){?> 
        <div class="erreur" style="color:red">
            <?=$erreur?>
        </div>
        <?php } ?>

    </main>
    <?php include('footer.php');?>
</body>
</html>