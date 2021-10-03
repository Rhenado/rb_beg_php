<?php  
$title  = 'String manipulation';
include 'includes/header.php'; ?>
    <h1>Switch Statements</h1>
    <?php

    //variable Declaration
        $grade = 'F';
        //Switch($variable) will scrutinize the value of the variable against the cited cases
        switch($grade){
            case 'A':
                echo '<h2 style="color: green">EXCELLENT!</h2>';
                break;
            case 'B':
                echo '<h2 style="color: blue">VERY GOOD!</h2>';
                break;
            case 'C';
                echo '<h2 style="color: orange">GOOD!</h2>';
                break;
            case 'D';
                echo '<h2 style="color: yellow">POOR!</h2>';
                break;
            case 'E';
                echo '<h2 style="color: yellow">VERY POOR!</h2>';
                break;
            default:
                 echo '<h2 style="color: red">FAILED!</h2>';
                 break;
        }

    ?>