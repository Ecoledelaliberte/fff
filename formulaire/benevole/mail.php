<?php
    if(isset($_POST['message'])){
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['email'] . "\r\n";

        $message = '<h1>Bénévole</h1>
        <p><b>Nom : </b>' . $_POST['name'] . '<br>
        <b>Email : </b>' . $_POST['email'] . '<br>
        <b>ville : </b>' . $_POST['ville'] . '</p>
        <b>Message : </b>' . $_POST['message'] . '</p>
        <b>Oui : </b>' . $_POST['oui'] . '</p>';

        $retour = mail('buchezpierric@gmail.com', 'Bénévole', $message, $entete);
        if($retour) {
            echo '<p>Merci</p>';
        }
    }
    ?>