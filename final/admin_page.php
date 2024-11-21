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