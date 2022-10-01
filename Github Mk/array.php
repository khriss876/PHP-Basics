<?php
$title ='Array & Printouts';
include 'Includes/header.php'?>
<body>
    <h1> <?php echo $title ?> </h1>

    <?php
    // A variable
    $sum = 3;
    // an array
    // only one data type

    $numbers = array(1,2,3,4,5,6,7,8,9,10,55,44,33,23,23,44,55,66,77,32,76,85,34,44,3,1,277,);
    
    echo $numbers[5];

    echo "<p>$numbers[9]</p>";

    $size= count($numbers);
    echo "<p>Array Numbers is size: $size</p>";
     for($count = 0; $count <$size; $count++){
         echo "<p>$numbers[$count]</p>";
     }
    



    
    ?>
 <?php require 'includes/footer.php'?>