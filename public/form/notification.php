    <?php
    $retour = mail('cbujalance69@gmail.com', 'Demande de contact', $_POST['message'], 'From : webmaster@moncv.fr');
    if ($retour) {
        echo '<p>Votre message a bien été envoyé.</p>';
    }
