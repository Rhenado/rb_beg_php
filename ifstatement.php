<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Beginner - If satatements</title>
</head>
<body>-->
<?php 
$title = 'If Statement';
include 'includes/header.php'; ?>
<h1>If Statement</h1>
    <?php
        echo '<h2>If Statement</h2>';

        $grade = 30;

        if($grade >= 50){
            echo '<h3 style="color:green">YOU HAVE PASSED!</h3>';
        }else{
            echo '<h3 style="color:red">YOU HAVE FAILED!</h3>';
        }

        $grade = 'A';

        if($grade == 'A'){
            echo '<h2 style="color:green">YOU ARE A SUPERSTAR!</h2>';
        }elseif($grade == 'A'){
            echo '<h2 style="color:orage">YOU DID WELL!</h2>';
        }else{
            echo '<h2 style="color:red">TRY AGAIN!</h2>';
        }

    ?>
<!--    <br/>
    <br/>
    <li><a href="index.php">Return to Home</a></li>
</body>
</html>--> 
?>
    <?php  require 'includes/footer.php'; ?>