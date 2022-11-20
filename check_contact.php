<?php 
    session_start ();

    unset($_SESSION['username']);
    unset($_SESSION['mail']);
    unset($_SESSION['subject']);
    unset($_SESSION['text']);

    unset($_SESSION['error_username']);
    unset($_SESSION['error_mail']);
    unset($_SESSION['error_subject']);
    unset($_SESSION['error_text']);
    unset($_SESSION['success_mail']);


    function redirect() {
        header('Location:contact.php');
        exit;
    }

    $username = htmlspecialchars(trim($_POST['username']));
    $mail = htmlspecialchars(trim($_POST['mail']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $text = htmlspecialchars(trim($_POST['text']));

    $_SESSION['username'] = $username;
    $_SESSION['mail'] = $mail;
    $_SESSION['subject'] = $subject;
    $_SESSION['text'] = $text;

    if(strlen($username) <= 1) {
        $_SESSION['error_username'] = "Введите корретное имя";
        redirect();
    }
    else if (strlen($mail) <= 5 || strpos($mail, "@") == false) {
        $_SESSION['error_mail'] = "Введите корректный email";
        redirect();
    }
    else if (strlen($subject) >= 30) {
        $_SESSION['error_subject'] = "Максимум 30 символов";
        redirect();
    }
    else if (strlen($text) >= 250) {
        $_SESSION['error_text'] = "Максимум 250 символов";
        redirect();
    }
    else {
        $subject = "=?utf-8?B?" .base64_encode($subject)."?=";
        $headers = "From : $mail\r\nReply-to: $mail\r\nContent-type:text/plain; charset=utf-8\r\n";
        mail("polovinka.andrey.w@mail.ru");
        $_SESSION['success_mail'] = "Сообщение успешно отправлено";
        redirect();
        
    }
