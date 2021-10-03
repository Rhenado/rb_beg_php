<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Beginner - Array</title>
</head>
<body>-->
<?php  
$title  = 'Array';
include 'includes/header.php'; ?>
    
    <!--<h1>Arrays</h1>--> 
    <h1><?php echo $title; ?></h1>

    <?php
         //a variable
         $num = 3;

         //an array
         $numbers =  array(1, 2, 3 , 4, 5, 6, 7, 8, 9, 10 ); //homogenous- only one data type
         //starts at zero and ends at n-1
         echo $numbers[5];//print the number 6

         echo "<p>$numbers[9]</p>";//n-1 -> 10-1; print the last number

         //how many values are in my array
         $size = count($numbers);//calling the function to count and assign it to the variable size
         echo "<p>Array number is size: $size</p>";


         //printing out all the values of the array using a loop
         for($count = 0; $count < $size; $count++){
             echo "<p>$numbers[$count]</p>";
         }

    ?>

  <!--  <br/>
    <br/>
    <li><a href="index.php" style="text-decoration:none">Return to Home</a></li>
        
</body>
</html>--> 
?>
    <?php  require 'includes/footer.php'; ?>