<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Beginner - String manipulation</title>
</head>
<body>--> 
<?php  
$title  = 'String manipulation';
include 'includes/header.php'; ?>
    <h1>PHP String Manipulation</h1>
    <?php
        $phrase1 = "Hey diddle. diddle ";
        $phrase2 = "the cat and the fiddle ";

        $name = "rhenado braham";

        //concatenation- joining strings using dot(.) notation
       // echo $phrase1 . " " . $phrase2;
       echo $phrase1 . " , " . $phrase2;

       echo "<br/>";
       echo '<hr/>';
       //string transformation
       echo 'Uppercase first letter: ' . ucfirst($name) . '<br/>';
       echo 'Uppercase first letter of each word: ' . ucwords($name) . '<br/>';
       echo 'Upper case: ' . strtoupper($name) . '<br/>'; 
       echo 'Upper case: ' . strtolower("THIS WAS ALL UPPERCASE") . '<br/>'; 
       echo '<hr/>';

       echo 'Repeat String: ' . str_repeat('a',10). '<br/>';
       echo 'Repeat String: ' . strtoupper(str_repeat('a',10)). '<br/>';
       echo 'Get a Substring: ' . substr($name, 5,6) . '<br />'; //string variable or string value, 2nd -> starting after the point, 3rd ->how many charater to include after
       echo '<hr/>';

       echo 'Get position of string: ' . strpos($name, 'o') . '<br/>';//string is like an array ;first vale is position 0
       //Returns NULL
       //echo 'Get position of string: ' . strpos($name, 'o') . '<br/>';
       echo 'Find Character "R": ' .strchr($name, 'R') . '<br/>';//there are no capital R inside of the string
       echo 'Find Character "r": ' .strchr($name, 'r') . '<br/>';
       echo 'Find Character "n": ' .strchr($name, 'n') . '<br/>';
       echo 'Find Character "e": ' .strchr($name, 'e') . '<br/>';
       echo '<hr/>';

       echo 'Find Length of string: ' .strlen($name) . '<br/>';//how many there  are including spaces

       echo 'Without Trim: ' . "A" . " B C D " . "E" . '<br/>';
       echo 'Trim spaces on both side: '. "A" . trim(" B C D ") . "E" . '<br/>'; //take off spaces to the left of B and right of D
       echo 'Trim spaces to the left: '. "A" . ltrim(" B C D ") . "E" . '<br/>'; //trim all spaces to the left; the b has lost its space but the D has maintain its own
       echo 'Trim spaces to the right: '. "A" . rtrim(" B C D ") . "E" . '<br/>'; //trim all spaces to the right the D has lost its space but the B has maintain its own

       echo 'Replace string with another: ' . str_replace("stands" , "sits", $phrase2) . '<br/>';

    ?>

 <!--   <br/>
    <br/>
    <li><a href="index.php" style="text-decoration:none">Return to Home</a></li>
</body>
</html>--> 
?>
    <?php  require 'includes/footer.php'; ?>