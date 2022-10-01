<?php 
$title ='String Manipulation';
include 'Includes/header.php'?>
<body>
    <h1> <?php echo $title ?> </h1>

    <?php
    
    $phrase1 = "Student who are late for class";
    $phrase2 = "Are subjected to detention ";
    $name = "chevaun mcintosh";
    echo $phrase1 . ",named hennry,".$phrase2;
    echo '<br/>';
    echo'<hr/>';

    //String Transefromation 

    echo 'Uppercase First letter:'. ucfirst($name).'<br/>';
    echo 'Uppercase First letter of each word:'. ucwords($name).'<br/>';
    echo 'Upper Case:'. strtoupper($name).'<br/>';
    echo 'Lower Case:'. strtolower($name).'<br/>';
    echo'<hr/>';

    echo 'Find Character "A":' . strchr($name, 'A').'<br/>';
    echo 'Repeat String: ' . str_repeat('a',10). '<br/>';
    echo 'Repeat String - Nested Fuction:' .strtoupper(str_repeat('a',10)). '<br/>';


    echo 'Get a Substring:' .substr($name, 2, 5).'<br/>';

    echo'Get Position of String: ' . strpos($name,'v').'<br/>';

    echo 'Find Character "a":' . strchr($name, 'a').'<br/>';
    echo 'Find Character "h":' . strchr($name, 'h').'<br/>';
    echo 'Find Character "e":' . strchr($name, 'e').'<br/>';
    echo 'Find Character "o":' . strchr($name, 'o').'<br/>';

    echo 'Find Length of String: ' . strlen($name). '<br/>';


echo'Without Trim:'. "A". "B C D" . "E". '<br/>';
echo'Trim Space on both Sides:'. "A". trim("B C D"). "E". '<br/>';
echo'Trim Space on the Left:'. "A". ltrim("B C D"). "E". '<br/>';
echo'Trim Space on the Right:'. "A". rtrim("B C D"). "E". '<br/>';

echo 'Replace string with another:'. str_replace("class", "Practice", $phrase1) . '<br/>';



    ?>
  <?php require 'includes/footer.php'?>