<!DOCTYPE html>
<html lang="pl">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=500; user-scalable=0;" />
    <title>Nikola Zdrodowska</title>
    <meta name="description" content="makijaz bialystok, wykonywanie makijazu, makijaż, makijaż dla dziewczyn, makijaż dla kobiet"/>
    <meta name="keywords" content="makeup-bialystok, makijaż białystok, makijażystka białystok, makeup artist białystok, Nikola Zdrodowska" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="author" content="Bartosz Ryfa"/>
    <link rel="stylesheet" href="mail.css" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Actor&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Abyssinica+SIL&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fontello.css" type="text/css"/>
    
        
        
</head>


<?php

$to      = 'kontakt@nikolazdrodowskamakeup.pl';
$imie    = $_POST['imie'];
$email   = $_POST['email'];
$subject = 'Nowy e-mail od ' . $imie . ' (' . $email . ')';
$message = $_POST['message'];
$headers = 'From: ' . $name . ' (' . $email. ')';
$headers .= "Content-Type: text/html; charset=utf-8/r/n";

mail($to, $subject, $message, $headers);

?>

<body>
    
<div id="container">
    
    <div class="nav">
        <div id="logo">
            <h1><a href="index.html"style="color:#000;">NIKOLA ZDRODOWSKA</a></h1>
<p>MAKE - UP ARTIST</p>
        </div>
        
        <div class="wrapper">
            <div id="menu">
                <li><a href="index.html">Prace</a></li>
                <li><a href="cennik.html">Cennik</a></li>
                <li><a href="omnie.html">O mnie</a></li>
                <li><a href="kontakt.html">Kontakt</a></li>
                
            </div>
        </div>
    
                <h2>Dziękuje :)</h2>
</div>

    <div class="social">
        <div class="soc">
            <a href="https://www.facebook.com/profile.php?id=100077348964154"target="_blank"style="color:#000;">
                <i class="icon-facebook"></i>
            </a>
        </div>
        <a href="https://www.instagram.com/nikolazdrodowskamakeup/"target="_blank"style="color:#000;">
            <i class="icon-instagram"></i>
        </a>
    </div>
</div>
</body>
