<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Beginner - While / Do-While Loop</title>
</head>
<body>--> 
<?php  
$title  = 'While and DoWhile Loop';
include 'includes/header.php'; ?>
    <h3>While Loop</h3>
    <?php
    $count = 0;
        while($count < 10){
            echo "<p>$count is LESS TAHN 10!</p>";
            $count++;
        }
        echo '<p style="color:green">Exit loop!</p>';
    ?>


    <h3>Do-While Loop</h3>
    <?php
        $count = 0;
        do{
            echo "<p>Count is $count</p>"; 
            $count++;
        }while($count < 10);
        echo '<p style="color:blue">Exit loop!</p>';
    ?>

 <!--   <br/>
    <br/>
    <li><a href="index.php" style="text-decoration:none">Return to Home</a></li>
    
</body>
</html>--> 
?>
    <?php  require 'includes/footer.php'; ?>