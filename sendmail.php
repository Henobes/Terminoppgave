<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "mottaker@example.com";
    $subject = "Ny melding fra $name";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
    
    echo "Meldingen ble sendt.";
} else {
    echo "Ugyldig forespørsel.";
}
?>
