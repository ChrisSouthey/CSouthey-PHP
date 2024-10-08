<?php 

include '../includes/header.php'; 


function age ($bdate) {
    $date = new DateTime($bdate);
    $now = new DateTime();
    $interval = $now->diff($date);
    return $interval->y;
}
 
function isDate($dt) {
$date_arr  = explode('-', $dob);
return checkdate($date_arr[1], $date_arr[2], $date_arr[0]);
}
 
function bmi ($inch, $weight) {
    $meter = $inch * 0.0254;
    $kg = $weight / 2.20462;
    $bmi = $kg / ($meter * $meter);
    return $bmi;
}
 
function bmiDescription ($bmi) {
    if($bmi < 18.5){
        $class = 'Underweight';
    }
    else if($bmi >= 18.5 && $bmi <= 24.9){
        $class = 'Normal Weight';
    }
    else if($bmi >= 25.0 && $bmi <= 29.9){
        $class = 'Overweight';
    }
    else{
        $class = 'Obese';
    }

    return $class;
}




?>




<?php include '../includes/footer.php'; ?>
