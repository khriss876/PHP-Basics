<?php
$title ='While dowhileloop';
include 'Includes/header.php'?>
<body>
    <h1> <?php echo $title ?> </h1>
<?php
$grade =0;
//Infinit loop
//while ($grade <10){
    //echo'<p>I am Less Than 10</p>';
//}

while($grade <10){
    echo'<p>I am Less than 10</p>';
        $grade++;
    
    }
        echo'Exit Loop';
?>


    <h1>Do-While Loop</h1>

    <?php
//// post condition loop
    $grade=0;
    do{
        echo '<p> I am Do While Loop</p>';
        $grade++;
    }while($grade<10); 
      echo'exit loop'; 
    
    
    
    
    ?>
<?php require 'includes/footer.php'?>