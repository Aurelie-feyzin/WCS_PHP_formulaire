<?php declare(strict=1)
session_start();
// define variables and set to empty values
$user_lastname = $user_firstname = $user_mail = $user_phone = $subject = $message = "";
$user_lastname_err = $user_firstname_err = $user_mail_err = $user_phone_err = $subject_err = $message_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["user_lastname"])) {
        $user_lastname_err = "Le nom est obligatoire";
    } else {
        $user_lastname = test_input($_POST["user_lastname"]);
        $user_lastname_err = check_text($user_lastname);
    }

    if (empty($_POST["user_firstname"])) {
        $user_firstname_err = "Le prénom est obligatoire";
    } else {
        $user_firstname = test_input($_POST["user_firstname"]);
        $user_firstname_err = check_text($user_firstname);
    }

    if (empty($_POST["user_mail"])) {
        $user_mail_err = "L'émail est obligatoire";
    } else {
        $user_mail = test_input($_POST["user_mail"]);
        $user_mail_err = check_email($user_mail);
    }

    if (empty($_POST["user_phone"])) {
        $user_phone_err = "Le numéro de téléphone est obligatoire";
    } else {
        $user_phone = test_input($_POST["user_phone"]);
    }

    if (empty($_POST["subject"])) {
        $subject_err = "Le sujet est obligatoire";
    } else {
        $subject = test_input($_POST["subject"]);
        $subject_err = check_text($subject);
    }

    if (empty($_POST["message"])) {
        $message_err = "Le message est obligatoire";
    } else {
        $message = test_input($_POST["message"]);
        $message_err = strlen($_POST["message"]) < 5 ? 'Le message doit faire plus de 5 charactères' : '';
        $message_err = strlen($_POST["message"]) > 256 ? 'Le message doit faire moins de 256 charactères' : '';
    }

    if (strlen($user_lastname_err) === 0 && strlen($user_firstname_err) === 0 && strlen($user_mail_err) === 0 && strlen($user_phone_err) === 0 && strlen($subject_err) === 0 && strlen($message_err) === 0) {
        include_once 'thanks.php';
    } else {
        $_SESSION['user_lastname_err'] = $user_lastname_err;
        $_SESSION['user_firstname_err'] = $user_firstname_err;//on stocke les erreurs
        $_SESSION['user_mail_err'] = $user_mail_err;//on stocke les erreurs
        $_SESSION['user_phone_err'] = $user_phone_err;//on stocke les erreurs
        $_SESSION['subject_err'] = $subject_err;//on stocke les erreurs
        $_SESSION['message_err'] = $message_err;//on stocke les erreurs
        $_SESSION['inputs'] = $_POST;
        header('Location: form.php');
    }

}

function test_input($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}

function check_text($data): ?string
{
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/", $data)) {
        return "Only letters and white space allowed";
    }
    return '';
}

function check_email($email): ?string
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Le format de l'email est invalid";
    }
    return '';
}
