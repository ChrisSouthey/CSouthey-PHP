<?php
    include '../../includes/header.php';
    include '../model/model_patients.php';

    $patients = getPatients ();
?>

<div class="container">
                
    <div class="col-sm-12">
        <h1>Patient's list</h1>

        <a href="managePatients.php?Action=Add">Add New Patient</a>

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