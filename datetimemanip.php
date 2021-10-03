<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Beginner - Date and Time Manipulation</title>
</head>
<body>-->
<?php  
$title  = 'Date and Time Manipulation';
include 'includes/header.php'; ?>
    <h2>Date and Time Manipulation</h2>

    <?php

        //get the current now
        $datenow = getdate();//return an array
        echo "Today's date: <br/>";
        echo $datenow['mday'] . '<br/>';
        echo $datenow['mon'] . '<br/>';
        echo $datenow['year'] . '<br/>';

        echo "Today's date: " . $datenow['mday'] . '/' .  $datenow['mon'] . '/'. $datenow['year'] . '<br/>' ;

        echo time();

        print date("d/m/y G.i:s<br>", time()) . '<br/>';
        print "Today is ";
        print date("j of F Y, \a\\t g/i a", time());
 

    ?>
    

 <!--   <br/>
    <br/>
    <li><a href="index.php" style="text-decoration:none">Return to Home</a></li>

</body>
</html>-->

?>
    <?php  require 'includes/footer.php'; ?>