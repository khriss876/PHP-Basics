<?php
$title ='Ifststement';
include 'Includes/header.php'?>
<body>
  <h1> <?php echo $title ?> </h1>
    <?php
    echo '<h2>If Statement</h2>';
    $Grade=6;
    if($Grade >=50){
        echo'<h3 style="color:green">You Have Passed</h3>';
      }
      else{
        echo'<h3 style="color: red">You Have failed</h3>';

      }
      $Grade = 'A';
      //If-Else If-Else
      If($Grade =='A'){
        echo'<h2 style="color:gold">You are A SUPERSTAR</h2>';
      }
      elseif($Grade =='B'){
        echo'<h2 style="color:green">You Have Done WEll</h2>';
      }
      else{
        echo'<h3 style="color:red">You Have Failed</h3>';
      }


    ?>
    <?php require 'includes/footer.php'?>
