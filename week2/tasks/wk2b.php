<?php 

include '../includes/header.php';
include '../includes/functions.php';


$fName = '';
$lName = '';
$married = '';
$birthMonth = '';
$birthDay = '';
$birthYear = '';
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
//Month
if(filter_input(INPUT_POST, 'birthMonth') > '' && filter_input(INPUT_POST, 'birthMonth') > 0 && filter_input(INPUT_POST, 'birthMonth') < 13 ){
    $birthMonth = filter_input(INPUT_POST, 'birthMonth');
}
else{
    $error .= 'Must enter a number between 1 and 12 <br/>';
}

//Day
if(filter_input(INPUT_POST, 'birthDay') > '' && filter_input(INPUT_POST, 'birthDay') > 0 && filter_input(INPUT_POST, 'birthDay') < 32 ){
    $birthDay = filter_input(INPUT_POST, 'birthDay');
}
else{
    $error .= 'Must enter a number between 1 and 31 <br/>';
}

//Year
if(filter_input(INPUT_POST, 'birthYear') > '' && filter_input(INPUT_POST, 'birthYear') > 1899 && filter_input(INPUT_POST, 'birthYear') < 2025 ){
    $birthYear = filter_input(INPUT_POST, 'birthYear');
}
else{
    $error .= 'Must enter a valid birth year (1900 - 2024) <br/>';
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
            <label for="birthDate">Birth Date (Ex. 1/1/2000):</label><br />
            <input type="text" name="birthMonth" size="1" value="<?= $birthMonth; ?>">
            <input type="text" name="birthDay" size="1" value="<?= $birthDay; ?>">
            <input type="text" name="birthYear" size="1"value="<?= $birthYear; ?>">
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
<p>Age: <?= age($birthYear) ?><p><p>
<p>BMI: <?= round(bmi($height, $weight), 1) ?><p>
<p>BMI Classification: <?= bmiDescription(bmi($height, $weight)) ?><p>
</div>





<?php include '../includes/footer.php' ?>