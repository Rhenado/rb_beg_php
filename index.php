<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Beginner - Index</title>
</head>
<body>
    <h2>Follow each link to the page example</h2>
    <ul>
       <li><a href="array.php">Simple Array and Printouts</a></li>
       <li><a href="forloop.php">Simple For loop</a></li>
       <li><a href="whiledowhileloop.php">Simple While / DoWhile Loop</a></li>
       <li><a href="ifstatement.php">Simple If Statement</a></li>       
       <li><a href="switchstatement.php">Simple Swicth Statement</a></li>
       <li><a href="stringmanip.php">Simple String manipulation </a></li>
       <li><a href="datetimemanip.php">Simple Date and Time manipulation </a></li>
       <li><a href="functions.php">Simple User Defined Functions </a></li>
      
    </ul>-->

    <?php  
        $title ='Index';
    include 'includes/header.php'; ?>
    <!-- Basic HTML -->
    <h1>Hello World!</h1>
    <br/>
    <?php
        //Printing to html using echo
        echo "PHP";
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';

    ?>

    <?php 
        $my_name = 'Rhenado';
        $age = 30;

        echo $my_name;
       // echo '<h1>My name is: </h1>'
       echo '<h1>My name is: '.$my_name.' </h1>';
       echo '<h1>My age is: '.$age.' </h1>';

       echo "<h1>My name is: $my_name </h1>";

    ?>
    <?php  require 'includes/footer.php'; ?>
