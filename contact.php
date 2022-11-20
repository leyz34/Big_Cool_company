<?php session_start()?>
<!DOCTYPE html>
<html lang="en, ru" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" href="style_m.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Jura:wght@400;500;600;700&display=swap" rel="stylesheet">
  <title>Big Cool company</title>
  <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
  <link rel="manifest" href="favicons/site.webmanifest">
  <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <meta name="description" content="Описание страницы" />
  <meta name="keywords" content="создание сайтов, верстка сайтов" />
  <meta name="google" content="notranslate" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
</head>
<body>

<!-- HEADER -->

<div class="head_m">
    <div class="title_m container-fluid">
        <div class="text_m"><a class="main_m" href="index.php">Главная страница</a></div>
    </div>
</div>

<!-- FORM -->

<form action="check_contact.php" method="post" class="form_m">
  <input type="text" name="username" <?=$_SESSION['username']?> placeholder="Введите имя" class="form-control form_input">
  <div class="text-danger"><?=$_SESSION['error_username']?></div><br>
  <input type="text" name="mail" <?=$_SESSION['mail']?> placeholder="Введите электронную почту" class="form-control form_input">
  <div class="text-danger"><?=$_SESSION['error_mail']?></div><br>
  <input type="text" name="subject" <?=$_SESSION['subject']?> placeholder="Тема сообщения" class="form-control form_input">
  <div class="text-danger"><?=$_SESSION['error_subject']?></div><br>
  <textarea type="text" name="text" <?=$_SESSION['text']?> placeholder="Ваше сообщение" class="form-control form_input"></textarea>
  <div class="text-danger"><?=$_SESSION['error_text']?></div><br>
  <button type="submit" class="btn_m">Отправить</button>
  <div class="success_mail"><?=$_SESSION['success_mail']?></div>  
</form>
