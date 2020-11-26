<?php
function genererChaineAleatoire($longueur = 10)
{
 $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 $longueurMax = strlen($caracteres);
 $chaineAleatoire = '';
 for ($i = 0; $i < $longueur; $i++)
 {
 $chaineAleatoire .= $caracteres[rand(0, $longueurMax - 1)];
 }
 return $chaineAleatoire;
}
//Utilisation de la fonction

$chaine = genererChaineAleatoire(20);
$s= strval($chaine);
//var_dump(strval ( genererChaineAleatoire(20))) ;

function sendmail ($s) {
        
    $subject = "confirmation code";
    //$prenom = $_POST['prenom'];
    //$nom = $_POST['nom'];
    //$monEmail = "phil31780@live.fr";
    $monEmail = "contact@defouloir.fr";
    //$email_eleve = $_POST['log'];
    //$formule = $_POST['id_formule'];

    // $message 
    $message = "confirmation de code : $s";

    $content=" \n\n Message: $message ";
    $destinataire = "cecilephilippe31@gmail.com";
    $mailheader = "From: $monEmail";


    if (mail($destinataire, $subject, $content,$mailheader)) {
        $sendmail = 'ok';
        echo 'ok';

    } else {
        $sendmail = 'pas ok';
        echo 'pas ok ';
    }

    return $sendmail;
}

sendmail($s);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>