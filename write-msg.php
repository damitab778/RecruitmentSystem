<?php
session_start();
require_once "php/chat.php";
require_once "php/FormsValidation.php";
require_once "php/connect.php";
require_once "php/getRole.php";
getRole($host, $db_user, $db_pass, $db_name);
$err = new FormsValidation(true);
$usr = $_GET['uid'];
if (isset($_POST['message-field']))
{
    $mess = $_POST['message-field'];
    addMessage($mess, $usr);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recruitment System - Write message</title>
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <link rel="stylesheet" href="/font/stylesheet.css" type="text/css" charset="utf-8" />
</head>
<body>
    <nav>
        <div class="nav-bar">
            <div class="logo-nav">myCompany</div>
            <ul class="nav-links">
                <li id="menu">Menu</li>
            </ul>
            <div id="btn-burger" class="btn-nav">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </div>
        <div id="nav-help"></div>
    </nav>
    <div id="container">
        <form action="" method="post">
        <div class="small-title">
            <div class="position">Front-end Developer</div>
            <div class="name">John Smith</div>
            <button type="submit" name="submit" value="Send"></button>
            <a href="javascript:history.back();"><div class="back"></div></a>
        </div>
            <div class="message-wrapper">
                <div class="form-row">
                    <label for="msg-topic">Topic</label>
                    <div class="msg-topic">Reply: FrontEnd bla bla bla</div>
                </div>
                <div class="form-row">
                    <?php $err->setError("err_message") ?>
                    <label for="message-field">Message</label>
                    <textarea name="message-field" placeholder="Type your message here.."></textarea>
                </div>
            </div>
            
        </form>

    </div>
</body>

<script src="script/burger.js"></script>
<script src="script/main.js"></script>
<script src="script/userRecognizer.js"></script>

</html>