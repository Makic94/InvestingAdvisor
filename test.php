<?php
include_once("includes/autoLoader.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <title>Document</title>
</head>
<body>
    
    <?php
    $testObj = new Test();
    $testObj->getUsers("makic94");
    ?>
 
</body>
</html>