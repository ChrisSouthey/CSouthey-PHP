<?php 
include '../includes/header.php';

function checkAge($age){
  

    if ($age >= 21){
        return true;
    }
    else if($age < 21){
        return false;
    }
}


?>

<h1>Week 1 Task F</h1>

<?php

    $age = 10;


    if(checkAge($age) == true){
        echo "<h2>Can Enter</h2>";
    }
    else if (checkAge($age) == false){
        echo "<h2>Cannot Enter</h2>";
    }



?>

    

<?php include '../includes/footer.php' ?>