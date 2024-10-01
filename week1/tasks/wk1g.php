<?php 
include '../includes/header.php';

function fizzBuzz($num){
    if($num == 0 %2){
        return 'Fizz';
    }
    else if ($num == 0 %3){
        return 'Buzz';
    }
    else if ($num == 0 %2 && $num == 0 %3){
        return 'Fizz Buzz';
    }
    else {
        return $num;
    }
}


?>

<h1>Week 1 Task G</h1>

<?php

    
   for($i = 1; $i < 101; $i++){
    echo "$i <br>";
   }


?>

    

<?php include '../includes/footer.php' ?>