<?php
    include '../../includes/header.php';
    include '../model/model_patients.php';

    $teams = getPatients ();
?>

<div class="container">
                
    <div class="col-sm-12">
        <h1>Patient's list</h1>

        <a href="managePatients.php">Add New Patient</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Married</th>
                    <th>Birth Date</th>
                </tr>
            </thead>
            <tbody>
            
            <?php foreach ($teams as $team):                 
            ?>
                <tr>
                    <td><?= $team['id']; ?></td>
                    <td><?= $team['patientFirstName']; ?></td>
                    <td><?= $team['patientLastName']; ?></td> 
                    <td><?= $team['patientMarried']; ?></td> 
                    <td><?= $team['patientBirthDate']; ?></td>       
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <a href="../../week2/tasks/wk2b.php">Add New Patient</a>

    </div>
</div>

<?php
    include '../../includes/footer.php';
?>