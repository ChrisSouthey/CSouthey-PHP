<?php 
session_start();
include 'includes/header.php';
include 'includes/style.php';
include 'model/model_guitars.php';

$guitars = getGuitars();
$brand = '';
$model = '';
$color = '';
$bridge = '';
$pickups = '';

?>

<nav>
    <h1>Guitar Hub</h1>
    <a href="logoff.php">Log Out</a>
</nav>

<section class="main">
    <div class="side">
        <div class="filt"> <!-- FILTER LABEL -->
            <h3>Filter</h3>
        </div>
        <form method="post">
            <div id="brand" class="sea"> <!-- BRAND SEARCH -->
                <h3>Brand</h3>
                <input type="text" name="brand" value="">
            </div>
            <div id="model" class="sea"> <!-- MODEL SEARCH -->
                <h3>Model</h3>
                <input type="text" name="model" value="">
            </div>
            <div id="strings" class="sea"> <!-- STRINGS SEARCH -->
                <h3>Strings</h3>
                <input type="text" name="strings" value="">
            </div>
            <div class="sea"> <!-- SEARCH BUTTON -->
                <input type="submit" name="search" value="Search">
            </div>
        <form>
    </div>
    <div class="info" > 
        <h2>Welcome <?= $_SESSION['username']; ?>,</h2>
        <h3 class="addlink"><a href="manageGuitars.php?Action=Add">Add Guitar to Stock</a></h3>
        <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Color</th>
                        <th>Bridge</th>
                        <th>Pickups</th>
                        <th>Strings</th>
                        <th>Price</th>
                        <th>Admin</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach( $guitars as $guitar ): ?>
                        <tr>
                            <td><?= $guitar['id']; ?></td>
                            <td><?= $guitar['brand']; ?></td>
                            <td><?= $guitar['model']; ?></td>
                            <td><?= $guitar['color']; ?></td>
                            <td><?= $guitar['bridge']; ?></td>
                            <td><?= $guitar['pickups']; ?></td>
                            <td><?= $guitar['strings']; ?></td>
                            <td><?= $guitar['price']; ?></td>
                            <td><a href="manageGuitars.php?Action=Edit&ID=<?= $guitar['id']; ?>">Edit</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
</section>
        

<footer>
    <h3>© Chris Southey</h3>
</footer>




<?php include 'includes/footer.php'; ?>