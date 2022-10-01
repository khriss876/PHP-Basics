<?php 
$title ='Fuctions';
include 'Includes/header.php'?>
<body>
    <h1> <?php echo $title ?> </h1>
    <?php
    function writeMessage(){
        echo "You Are a nice person. remain that way!!!!!!!!!!!!!!!<br/>";   
    } 
    
    
        writeMessage();
       print "<hr/>";

        writeMessage();

        function addFuction($num1, $num2){
            $sum = $num1 = $num2;
            print "The sum of $num1 and $num2 is: $sum <be/>";
        }
        function changeNum(&$num){

            $num = $num + 10;
        }
        function returnProduct($num1, $num2){

            $prod= $num1 * $num2;
             return $prod;
        }

        $num = 500;
        addFuction(10,20);
        addFuction(10, $num);
        addFuction('10', "55");
        changeNum($num);
        echo $num.'<br/>';
        $return_Value= returnProduct(10, 200);
        echo $return_Value. '<br/>';
    
    
    ?>
  <?php require 'includes/footer.php'?>