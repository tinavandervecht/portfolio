<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';

$errors = array();
$values = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    if (isset($_SESSION['errors'])) {
        unset($_SESSION['errors']);
    }

    if (isset($_SESSION['values'])) {
        unset($_SESSION['values']);
    }

    //check first_name input
    if (empty(strip_tags($_POST["first_name"]))) {
        $errors['first_name'] = "empty";
    }
    $values['first_name'] = strip_tags($_POST["first_name"]);

    //check last_name input
    if (empty(strip_tags($_POST["last_name"]))) {
        $errors['last_name'] = "empty";
    }
    $values['last_name'] = strip_tags($_POST["last_name"]);

    //check email input
    if (empty(strip_tags($_POST["email"]))) {
        $errors['email'] = "empty";
    } else if (!filter_var(strip_tags($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "invalid";
    }
    $values['email'] = strip_tags($_POST["email"]);

    //check message input
    if (empty(strip_tags($_POST["message"]))) {
        $errors['message'] = "empty";
    }
    $values['message'] = strip_tags($_POST["message"]);

    //check website input
    if (! empty(strip_tags($_POST["website"]))) {
        $errors['website'] = "exists";
    }


    if (count($errors) > 0) {
        $_SESSION['errors'] = $errors;
        $_SESSION['values'] = $values;
        header('Location: ' . $_SERVER['HTTP_REFERER'] . '#contactSection');
        exit;
    }

    try {
        $mail = new PHPMailer(true);
        $mail->Host       = "mail.tinavv.com";
    	$mail->Port       = 143;
    	$mail->SMTPDebug  = 0;
    	$mail->SMTPSecure = "none";
    	$mail->SMTPAuth   = false;
    	$mail->Username   = "_mainaccount@tinavv.com";
       	$mail->Password = "winter!Soldier97";

        $mail->setFrom('_mainaccount@tinavv.com');
        $mail->addAddress('tvandervecht@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = "Portfolio Form Submission From " . $values['first_name'] . ' ' . $values['last_name'];
        $mail->Body    = "<h1>This is a portfolio submission.</h1>
            <h3>Name: " . $values['first_name'] . " " . $values['last_name'] . "</h3>\n
            <h3>Email: " . $values['email'] . "</h3>\n
            <h3>Message: " . $values['message'] . "</h3>";
        $mail->AltBody = "Name: " . $values['first_name'] . " " . $values['last_name'] . " \n
        Email: " . $values['email'] . "\n
        Message: " . $values['message'];

        $mail->send();
        $values['sent'] = true;
    } catch (Exception $e) {
        $values['sent'] = false;
        $values['reason'] = $mail->ErrorInfo;
    }

    $emails = file_get_contents('./emails.json');
    $emails = json_decode($emails, true);
    $emails['email-' . count($emails)] = $values;

    file_put_contents('./emails.json', json_encode($emails));

    $_SESSION['success'] = true;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
