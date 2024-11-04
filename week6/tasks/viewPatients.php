<?php
    session_start();
    include '../../includes/header.php';
    include '../model/model_patients.php';

    $patients = getPatients ();

    $patientFirstName = '';
    $patientLastName = '';
    $patientMarried = '';

    if(isset($_POST['searchPatients'])){
        $patientFirstName = filter_input(INPUT_POST,'fName');
        $patientLastName = filter_input(INPUT_POST,'lName');
        $patientMarried = filter_input(INPUT_POST,'married');
        
        $patients = searchPatients($patientFirstName, $patientLastName, $patientMarried);
    }
?>

<?php include '../includes/style.php'; ?>

<div class="container">

<div class="wrapper">
    <?php if(isset($_SESSION['isLoggedIn'])): ?>
    <h1>Welcome <?= $_SESSION['username']; ?></h1>
    <a href="logoff.php">Log Out</a>
    <?php else: ?>
    <a href="login.php">Log In</a>
    <?php endif; ?>
</div>

        

    <div class="col-sm-12">
        <h1>Patient's list</h1>
            
        <form method="POST" name='searchPatients'>
            <h3>Patient Search</h3>
            <label>First Name: </label><input type="text" name="fName"><br>
            <label>Last Name: </label><input type="text" name="lName"><br>
            <label>Married: </label><input type="text" name="married"><br>
            <input class="btn btn-info" type="submit" name="searchPatients" value="Search" style="margin-top: 0.5rem;"/>
        </form>
        <br>

        <a href="managePatients.php?Action=Add">Add New Patient</a>
        <hr>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Married</th>
                    <th>Birth Date</th>
                    <th>Admin</th>
                </tr>
            </thead>
            <tbody>
            
            
            <?php foreach ($patients as $patient):                 
            ?>
                <tr>
                    <td><?= $patient['id']; ?></td>
                    <td><?= $patient['patientFirstName']; ?></td>
                    <td><?= $patient['patientLastName']; ?></td> 
                    <td><?= $patient['patientMarried']; ?></td> 
                    <td><?= $patient['patientBirthDate']; ?></td>  
                    <td><a href="managePatients.php?Action=Edit&ID=<?= $patient['id']; ?>">Edit</a></td>     
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>

<?php
    include '../../includes/footer.php';
?>