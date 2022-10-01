<?php 
$title ='Switchstatement';
include 'Includes/header.php'?>
<body>
    <h1> <?php echo $title ?> </h1>
    <?php
    $Grade ='A';
    switch($Grade){
        case'A': 
            echo'<h2 style="color:gold">You are A SUPERSTAR</h2>';
            break;
        case 'B':
            echo'<h2 style="color:green">You Have Done WEll</h2>';
            break;
        default:
        echo'<h3 style="color:red">You Have Failed</h3>';
        break;        
    }
    
    
    
    ?>

<?php require 'includes/footer.php'?>