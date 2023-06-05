<?php
    if(isset($_POST['envoyer'])){
        extract($_POST);
        if((isset($nom))&&(!empty($nom)&&(preg_match("#^[a-zA-Z \-]+$#", $nom)))
            &&(isset($prenom)&& (!empty($prenom)&&(preg_match("#^[a-zA-Z \-]+$#",$prenom))))
            &&(isset($tel)&& (!empty($tel)))
            && (isset($mail))&&(!empty($mail))
           &&(isset($message)&&(!empty($message)))
            
        )
        {
            $to = "loic.tianga@digital-x-sarl.com";
            $subject = "vous avez recu un email de :".$mail;
            
            $messag = "
                        <p>nom de l'expediteu: <strong>".$nom."</strong></p><br>
                        <p>Prenom de l'expediteur: <strong>".$prenom."</strong></p><br>
                        <p>numero de telephone de l'expediteur: <strong>".$tel."</strong></p><br>
                        <p>Adressse mail de l'expediteur: <p><strong>".$mail."</strong></p>
                        <p>Question de l'expediteur: <strong>".$message."</strong></p><br>
                     "
            ;
            
            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
            // More headers
            $headers .= 'From: <billdjomkam99@gmail.com>' . "\r\n";
            
            $envoyer= mail($to,$subject,$messag,$headers);
            
            if($envoyer){
                $info="merci Monsieur/Madame: <strong>".$nom."  ".$prenom.
                ",</strong><br>votre question a ete prise en compte";
                $color="green";
            }
             else{
            $info="message non envoye";
            $color="red";
            }
        }
        else{
            $info="veuillez remplir toutes les cases correctement";
            $color="red";
            }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>question</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include('menu.php');?>
    <?php if (isset($info)) { ?>
        <p class="message" style="color:<?=$color ;?>">
            <?=$info?>
        </p>
    <?php } ?>
    <div class="container"> 
        <form action="" method="POST">
            <h1>Posez votre question</h1>
            <label for="">Nom</label>
            <input type="text" name="nom" id="" >
            <label for="">Prenom</label>
            <input type="text" name="prenom" id="">
            <label for="">Numero de telephone</label>
            <input type="number" name="tel" id="">
            <label for="">Email</label>
            <input type="text" name="mail" id="" required>
            <label for="">Question</label>
            <textarea name="message" id="" cols="30" rows="10"></textarea>
            <button name="envoyer">Envoyer</button>
            <button name="annuler" style="background-color:red;">annuler</button>

        </form>
    </div>
</body>
</html>