<?php
include_once 'includes/autoLoader.inc.php';
session_start();
$obj=new SessionContr();
$obj->checkSession();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <title>Investing Advisor</title>
</head>
<body>
    <div id="wrapper">
    <?php include_once("includes/includes2.php"); ?>
    </div>
<!-- Menu Toggle Script -->
<script src="js/menuToggle.js"></script>
</body>
</html>