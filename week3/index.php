<?php

include 'person.php';

$person = new Person('Chris', 'Southey');

?>

<h1><?= $person->getFirst(); ?></h1>


