<?php 
include '../includes/header.php';

$animals = array('Dog', 'Cat', 'Bird', 'Horse', 'Cow', 'Chicken')



?>

<h1>Week 1 Task C</h1>

<ul>
    <?php foreach($animals as $a): ?>
        <li><?= $a; ?></li>
    <?php endforeach; ?>
    </ul>






<?php include '../includes/footer.php' ?>