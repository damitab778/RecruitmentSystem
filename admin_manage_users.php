<?php
session_start();

if ($_SESSION['id_role'] != 1) {
    header("Location: /index.php");
    exit();
}
require "php/connect.php";
require_once "php/admin/ManageUsers.php";
$man = new ManageUsers($host, $db_user, $db_pass, $db_name);
$man->getUsers();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recruitment System - Admin panel</title>
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <link rel="stylesheet" href="/font/stylesheet.css" type="text/css" charset="utf-8" />
    <link href="css/jquery-ui.css" rel="stylesheet" />
    <script src="script/jquery-1.11.1.js"></script>
    <script src="script/jquery-ui.js"></script>

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
    <div class="small-title"> Manage users </div>
    <a href="admin_create_user.php" target="_blank">
        <div class="list-row bottom-row" id="btn-report">
            <div class="btn-add ">
                <div class="btn-border">
                    <div class="btn-icon">
                        +
                    </div>
                </div>
                <div class="btn-text">
                        Add new user
                </div>
            </div>
        </div>
    </a>
</div>
</body>
<script src="script/main.js"></script>
<script src="script/burger.js"></script>
<script src="script/userRecognizer.js"></script>
<script src="script/manageUsers.js"></script>
<script src="script/loadManageUsers.js"></script>

</html>

