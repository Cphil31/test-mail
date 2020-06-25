<?php

function sendmail () {
        
    $subject = "Nouveau mail test";
    //$prenom = $_POST['prenom'];
    //$nom = $_POST['nom'];
    $monEmail = "phil31780@live.fr";
    //$email_eleve = $_POST['log'];
    //$formule = $_POST['id_formule'];

    // $message 
    $message = "Hello Philippe";

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

sendmail();

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