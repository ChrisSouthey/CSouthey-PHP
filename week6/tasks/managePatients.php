<?php 

    include '../includes/header.php';
    include '../model/model_patients.php';


    $fName = '';
    $lName = '';
    $married = '';
    $birthMonth = '';
    $birthDay = '';
    $birthYear = '';
    $birthDate = '';
    $height = '';
    $weight = '';
    $error = '';
    
    if (isset($_GET['Action'])) {
        $action = filter_input(INPUT_GET,'Action');
        $id = filter_input(INPUT_GET,'ID');

        $patient = getPatient($id);
        
        if($patient){
            $fName = $patient['patientFirstName'];
            $lName = $patient['patientLastName'];
            $married = $patient['patientMarried'];
            $birthDate = $patient['patientBirthDate'];
        }
    }




    //First Name
    if(filter_input(INPUT_POST, 'fName') != ''){
    $fName = filter_input(INPUT_POST, 'fName');
    }
    else{
    echo 'Must enter a valid first name <br/>';
    }

    //Last Name
    if(filter_input(INPUT_POST, 'lName') != ''){
    $lName = filter_input(INPUT_POST, 'lName');
    }
    else{
    echo 'Must enter a valid last name <br/>';
    }

    //Married
    if(filter_input(INPUT_POST, 'married') == '1' || filter_input(INPUT_POST, 'married') == '1' || filter_input(INPUT_POST, 'married') == '0'){
    $married = filter_input(INPUT_POST, 'married');
    }
    else{
    echo 'Must enter a valid selection <br/>';
    }

    //Birth Date
    //Month
    if(filter_input(INPUT_POST, 'birthMonth') > '' && filter_input(INPUT_POST, 'birthMonth') > 0 && filter_input(INPUT_POST, 'birthMonth') < 13 ){
    $birthMonth = filter_input(INPUT_POST, 'birthMonth');
    }
    else{
    echo 'Must enter a number between 1 and 12 <br/>';
    }

    //Day
    if(filter_input(INPUT_POST, 'birthDay') > '' && filter_input(INPUT_POST, 'birthDay') > 0 && filter_input(INPUT_POST, 'birthDay') < 32 ){
    $birthDay = filter_input(INPUT_POST, 'birthDay');
    }
    else{
    echo 'Must enter a number between 1 and 31 <br/>';
    }

    //Year
    if(filter_input(INPUT_POST, 'birthYear') > '' && filter_input(INPUT_POST, 'birthYear') > 1899 && filter_input(INPUT_POST, 'birthYear') < 2025 ){
    $birthYear = filter_input(INPUT_POST, 'birthYear');
    }
    else{
    echo 'Must enter a valid birth year (1900 - 2024) <br/>';
    }

    if (isset($_POST['fName'])) {
        $fName = filter_input(INPUT_POST, 'fName');
        $lName = filter_input(INPUT_POST, 'lName');
        $married = filter_input(INPUT_POST, 'married');
        $birthDate = filter_input(INPUT_POST, 'birthYear') . "-" . filter_input(INPUT_POST, 'birthMonth') . "-" . filter_input(INPUT_POST, 'birthDay');

        if ($error == ""){

            if(isset($_POST["add"])){
                addPatient($fName, $lName, $married, $birthDate);
                header('Location: viewPatients.php');
                exit();
            }
            else if(isset($_POST['update'])){
                updatePatient($id, $fName, $lName, $married, $birthDate);
                header('Location: viewPatients.php');
                exit();
            }
            else if(isset($_POST['delete'])){
                deletePatient($id);
                header('Location: viewPatients.php');
                exit();
            }
        }
    }



?>

<?php include '../includes/style.php'; ?>
<h1>Patient Intake Form</h1>
<h2><?= $action ?> Patient Info</h2>

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
            <label for="married">Married (1 or 0):</label><br />
            <input type="text" name="married" value="<?= $married; ?>">
        </div>

        <div class="form-control">
            <label for="birthDate">Birth Date (Ex. 01/01/2000):</label><br />
            <input type="text" name="birthMonth" size="1" value="<?= $birthMonth; ?>">
            <input type="text" name="birthDay" size="1" value="<?= $birthDay; ?>">
            <input type="text" name="birthYear" size="1"value="<?= $birthYear; ?>">
            <br>
            <label for="birthDate">Birth Date: <?= $birthDate ?></label><br />
        </div>


</br>

        <div class="form-submit">
            <?php if ($action == 'Add'): ?>
            <input type="submit" name="add" value="Add Patient">
            <?php else: ?>
            <input type="submit" name="update" value="Update Patient">
            </br>
            <input type="submit" name="delete" value="Delete Patient">
            <?php endif; ?>
        </div>

    </form>

</div>







<?php include '../includes/footer.php' ?>