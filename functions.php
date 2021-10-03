<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Beginner - Functions</title>
</head>
<body>--> 
<?php  
$title = 'Functions';
include 'includes/header.php'; ?>
    <h1>Functions</h1>
    <?php

        //Defining a function
        function writeMessage(){
            echo "This is my function";
        }

        /* Calling the function-*/
        writeMessage();

        echo "<br/>";

        //function with parameters

        function addNumbers($num1, $num2){
            $sum = $num1 +  $num2;
            echo "The sum of $num1 and $num2 is: $sum <br/>";
        }


        addNumbers(10,20);

        //Pass by value
        function unchangeNum($num){
            $num = $num + 10;
        }


        //Pass by reference
        function changeNum(&$num){
            $num = $num + 10;
        }

        $num = 500;
        //echo $num; //this is global scope
        echo '<hr/>';

        unchangeNum($num);
        echo 'Pass by Value - Original Value is 500:' . $num .'<br/>' ;
        echo "The orinal value is 500: $num";
        changeNum($num);
        echo '<hr/>';
        echo 'Pass by refence - Original Value is 500:' . $num .'<br/>';
        echo "The orinal value is 500: $num";
        echo '<hr/>';
        function returnProduct($num1, $num2){
            $prod = $num1 * $num2;
            return $prod;
        }
        $return_value = returnProduct(200, 15);
        //echo '<br/>';
        echo 'The Value Return: ' . $return_value . '<br/>'; 


        
        ?>
    
<!--    <br/>
    <br/>
    <li><a href="index.php" style="text-decoration:none">Return to Home</a></li>
    
</body>
</html>--
?>
<?php  require 'includes/footer.php'; ?>