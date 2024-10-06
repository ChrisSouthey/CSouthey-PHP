<?php 
include '../includes/header.php';

function fizzBuzz($num){
    if($num %2 == 0 && $num %3 == 0){
        echo 'Fizz Buzz<br>';
    }
    else if ($num %3 == 0){
        echo 'Buzz<br>';
    }
    else if ($num %2 == 0){
        echo 'Fizz<br>';
    }
    else {
        echo "$num<br>";
    }
}


?>

<h1>Week 1 Task G</h1>

<?php

    
   for($i = 1; $i < 101; $i++){
    //echo "$i <br>";
    fizzBuzz($i);
   }

   
?>

    

<?php include '../includes/footer.php' ?>