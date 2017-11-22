<?php
$firstname = $_POST['firstname'];

$other = $_POST['other'];

$email = $_POST['email'];
$to = 'donotreply@menouernobach.nl';
$subject = 'Bericht van'. $email;
$msg = "Naam :$firstname\n" .
    "Email: $email\n".
    "Opmerkingen: $other\n";
$from = $_POST['email'];
echo 'Bedankt voor uw bericht, we nemen zo snel mogelijk contact met u op.<br>';
echo  '<a href="index.php">Ga terug naar home</a>';
mail($to, $subject, $msg, 'From: ' . $from);