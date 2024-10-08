<?php 

include '../includes/header.php';
include '../includes/functions.php';


$fName = '';
$lName = '';
$married = '';
$birthDate = '';
$height = '';
$weight = '';
$error = '';

//First Name
if(filter_input(INPUT_POST, 'fName') != ''){
    $fName = filter_input(INPUT_POST, 'fName');
}
else{
    $error .= 'Must enter a valid first name <br/>';
}

//Last Name
if(filter_input(INPUT_POST, 'lName') != ''){
    $lName = filter_input(INPUT_POST, 'lName');
}
else{
    $error .= 'Must enter a valid last name <br/>';
}

//Married
if(filter_input(INPUT_POST, 'married') == 'Yes' || filter_input(INPUT_POST, 'married') == 'Yes' || filter_input(INPUT_POST, 'married') == 'No'){
    $married = filter_input(INPUT_POST, 'married');
}
else{
    $error .= 'Must enter a valid selection <br/>';
}

//Birth Date
if(isDate($birthDate) == true){
    $birthDate = filter_input(INPUT_POST, 'height');
}
else{
    $error .= 'Must enter a number valid date <br/>';
}

//Height
if(filter_input(INPUT_POST, 'height') > '' && filter_input(INPUT_POST, 'height') > 0 && filter_input(INPUT_POST, 'height') < 81 ){
    $height = filter_input(INPUT_POST, 'height');
}
else{
    $error .= 'Must enter a number between 0 and 80 Inches <br/>';
}

//Weight
if(filter_input(INPUT_POST, 'weight') > '' && filter_input(INPUT_POST, 'weight') > 0 && filter_input(INPUT_POST, 'weight') < 301 ){
    $weight = filter_input(INPUT_POST, 'weight');
}
else{
    $error .= 'Must enter a number between 0 and 300 Pounds <br/>';
}




?>

<h1>Week 2 Task B</h1>


<h2>Patient Intake Form</h2>
<div class="form-wrapper">

    <form name="patient_intake" method="post">

        <div class="form-control">
            <label for="fName">First Name:</label><br/>
            <input type="text" id="fName" name="fName" value="<?= $fName; ?>">
        </div>

        <div class="form-control">
            <label for="lName">Last Name:</label><br />
            <input type="text" name="lName" value="<?= $lName; ?>">
        </div>

        <div class="form-control">
            <label for="married">Married:</label><br />
            <input type="text" name="married" value="<?= $married; ?>">
        </div>

        <div class="form-control">
            <label for="birthDate">Birth Date (mm/dd/yyyy):</label><br />
            <input type="text" name="birthDate" value="<?= $birthDate; ?>">
        </div>

        <div class="form-control">
            <label for="height">Height (In Inches):</label><br />
            <input type="text" name="height" value="<?= $height; ?>">
        </div>

        <div class="form-control">
            <label for="Weight">Weight (In Pounds):</label><br />
            <input type="text" name="weight" value="<?= $weight; ?>">
        </div>

        <div class="form-submit">
            <input type="submit" name="submit" value="Submit">
        </div>

    </form>

</div>

<div>
<p style="color:red"><?= $error; ?></p>
<h2>Form Results</h2>
<p>Age: <p>
<p>BMI: <?= round(bmi($height, $weight), 1) ?><p>
<p>BMI Classification: <?= bmiDescription(bmi($height, $weight)) ?><p>
</div>





<?php include '../includes/footer.php' ?>