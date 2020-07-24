<?php
if ($lvl < 1) {
    header("Location: index.php");
}


     $to      = 'maqmed@msn.com';
     $subject = 'confirmation inscription';
     $message = 'Bonjour !\r\nNous avons bien recu votre demande d\'inscription\r\nVeuillez cliquer sur le lien suivant\r\nhttp://host/antreDuJouetStage/index.php?action=ok';
     $headers = 'From: maqmed@msn.com' . "\r\n" ;

     mail($to, $subject, $message, $headers);
 ?>