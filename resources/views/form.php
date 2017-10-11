<?php

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

    $emails = file_get_contents('./emails.json');
    $emails = json_decode($emails, true);
    $emails['email-' . count($emails)] = $values;

    file_put_contents('./emails.json', json_encode($emails));

    $to = "tvandervecht@gmail.com";
    $subject = "Portfolio Form Submission From " . $values['first_name'] . ' ' . $values['last_name'];
    $msg = "This is a portfolio submission.\n\n
    name: " . $values['first_name'] . " " . $values['last_name'] . "\n
    email: " . $values['email'] . "\n
    message: " . $values['message'];
    $headers = "From: tvandervecht+portfolio_submission@gmail.com" . "\r\n";

    mail($to,$subject,$msg,$headers);

    $_SESSION['success'] = true;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
