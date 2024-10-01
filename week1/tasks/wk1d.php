<?php 
include '../includes/header.php';

$animals = array('Dog', 'Cat', 'Bird', 'Horse', 'Cow', 'Chicken') ;

$anmls = array(
    'Dog' => 'Barks a lot',
    'Cat' => 'Meows and sleeps',
    'Bird' => 'Can fly',
    'Horse' => 'Very cool animal',
    'Cow' => 'Good for milk',
    'Chicken' => 'Provides good food',
)


?>

<h1>Week 1 Task D</h1>

<ul>
    <?php foreach($anmls as $an => $desc): ?>
        <li><?= $an . ' : ' . $desc; ?></li>
    <?php endforeach; ?>
    </ul>






<?php include '../includes/footer.php' ?>