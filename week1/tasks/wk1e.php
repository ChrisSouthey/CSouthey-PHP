<?php 
include '../includes/header.php';

$task = [
    'title' => 'Finish homework',
    'due' => 'today',
    'assigned_to' => 'Jeffrey',
    'completed' => false
]



?>

<h1>Week 1 Task E</h1>

<h2>Task for the Day</h2>

<ul>

    <li> <!-- Name -->
        <strong>Name: </strong> <?= $task['title']; ?>
    </li>
    <br>

    <li> <!-- Due -->
        <strong>Due Date: </strong> <?= $task['due']; ?>
    </li>
    <br>

    <li> <!-- Person -->
        <strong>Person Responsible: </strong> <?= $task['assigned_to']; ?>
    </li>
    <br>

    <li> <!-- Status -->
        <strong>Status: </strong> 

        <?php

            if ($task['completed']) {
                echo '<span class="icon">&#9989;</span>';
            }
            else {
                echo 'Incomplete';
            }

        ?>
    </li>




</ul>






<?php include '../includes/footer.php' ?>