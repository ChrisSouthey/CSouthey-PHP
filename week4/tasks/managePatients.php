<?php 

include '../includes/header.php';
include '../model/model_patients.php';


$fName = '';
$lName = '';
$married = '';
$birthMonth = '';
$birthDay = '';
$birthYear = '';
$birthDate = $birthYear . '/' . $birthMonth . '/' . $birthDay;
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

if (isset($_POST['submit'])) {
    $fName = filter_input(INPUT_POST, 'fName');
    $lName = filter_input(INPUT_POST, 'lName');
    $married = filter_input(INPUT_POST, 'married');
    $birthDate = filter_input(INPUT_POST, 'birthDate');
    /*
    if ($teamName == "") $error .= "<li>Please provide team name</li>";
    if ($teamConference == "") $error .= "<li>Please provide team conference</li>";
    if ($teamDivision == "") $error .= "<li>Please provide team division</li>";
    if ($teamPoints == "") $error .= "<li>Please provide team points (#)</li>";*/
    
    if ($error == ""){
        addTeam ($fName, $lName, $married, $birthDate);
        header('Location: viewPatients.php');
        exit();
    }
}



?>


<h1>Patient Intake Form</h1>

<a href="viewPatients.php">Back to Patient List</a>
<hr>
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


</br>

        <div class="form-submit">
            <input type="submit" name="submit" value="Submit">
        </div>

    </form>

</div>







<?php include '../includes/footer.php' ?>