<?php
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "soccerlive175@gmail.com";
    $headers = "From: " . $mailFrom;
    $txt = "Je hebt een email van " . $name . ".\n\n" . $message;



    mail($mailTo, $headers, $txt);
    header("Location: contact.html?bravosixgoingDark");
    require_once '/path/to/recaptcha/src/autoload.php';
    $recaptchaSecret = '6LeEh94ZAAAAAOlqicm6R9vDusKeqDh5jZG0psXn';
    $response = $_POST['g-recaptcha-response'];
    $url = 'https://www.google.com/recaptcha/api/siteverify?$recaptchaSecret=$response';
}
