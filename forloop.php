<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Beginner - For Loop</title>
</head>
<body>--> 
<?php 
$title = 'For Loops';
include 'includes/header.php'; ?>
    <h1>For Loops</h1>
    <?php
        for($count = 0; $count < 10; $count++ ){
            echo '<p>'.$count.': Hello Wolrd!</p>';
        }

    ?>


 <!--  <br/>
    <br/>
    <li><a href="index.php" style="text-decoration:none">Return to Home</a></li>
    
</body>
</html>-->

?>
    <?php  require 'includes/footer.php'; ?>