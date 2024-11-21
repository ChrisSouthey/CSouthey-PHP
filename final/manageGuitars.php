<?php 
session_start();
include 'includes/header.php';
include 'includes/style.php';
include 'model/model_guitars.php';


$brand = '';
$model = '';
$color = '';
$bridge = '';
$pickups = '';
$strings = '';
$price = '';
$error = '';

if (isset($_GET['Action'])) {
    $action = filter_input(INPUT_GET,'Action');
    $id = filter_input(INPUT_GET,'ID');

    $guitar = getGuitar($id);

    if($guitar){
        $brand = $guitar['brand'];
        $model = $guitar['model'];
        $color = $guitar['color'];
        $bridge = $guitar['bridge'];
        $pickups = $guitar['pickups'];
        $strings = $guitar['strings'];
        $price = $guitar['price'];
    }
}


//--------------------------FILTER STUFF----------------------->
//Brand
if(filter_input(INPUT_POST, 'brand') != ''){
    $brand = filter_input(INPUT_POST, 'brand');
}
else{
    $error .= 'Must enter a valid Brand <br/>';
}
//Model
if(filter_input(INPUT_POST, 'model') != ''){
    $model = filter_input(INPUT_POST, 'model');
}
else{
    $error .= 'Must enter a valid Model <br/>';
}
//Color
if(filter_input(INPUT_POST, 'color') != ''){
    $color = filter_input(INPUT_POST, 'color');
}
else{
    $error .= 'Must enter a valid Color <br/>';
}
//Bridge
if(filter_input(INPUT_POST, 'bridge') != ''){
    $bridge = filter_input(INPUT_POST, 'bridge');
}
else{
    $error .= 'Must enter a valid Bridge <br/>';
}
//Pickups
if(filter_input(INPUT_POST, 'pickups') != ''){
    $pickups = filter_input(INPUT_POST, 'pickups');
}
else{
    $error .= 'Must enter a valid Pickups <br/>';
}
//Strings
if(filter_input(INPUT_POST, 'strings') != '' && filter_input(INPUT_POST, 'strings') >= 4 && filter_input(INPUT_POST, 'strings') <= 8 || filter_input(INPUT_POST, 'strings') == 12){
    $strings = filter_input(INPUT_POST, 'strings');
}
else{
    $error .= 'Strings must be either 12 or between 4 and 8 <br/>';
}
//Price
if(filter_input(INPUT_POST, 'price') != '' && filter_input(INPUT_POST, 'price') < 0){
    $price = filter_input(INPUT_POST, 'price');
}
else{
    $error .= 'Must enter a valid Price <br/>';
}

?>


<!-- ---------------------- FORM STUFF ------------------------>
<nav>
    <h1>Guitar Hub</h1>
    <a href="admin_page.php">Back</a>
</nav>

<section class="main">
    <div class="manage" > 
        <h2>Guitar Info</h2>
        <form method="post">

            <div id="brand" class="man"> <!-- BRAND -->
                <h3>Brand: </h3>
                <input type="text" name="brand" value="">
            </div>

            <div id="model" class="man"> <!-- MODEL -->
                <h3>Model: </h3>
                <input type="text" name="model" value="">
            </div>

            <div id="color" class="man"> <!-- COLOR -->
                <h3>Color: </h3>
                <input type="text" name="color" value="">
            </div>

            <div id="bridge" class="man"> <!-- BRIDGE -->
                <h3>Bridge: </h3>
                <input type="text" name="bridge" value="">
            </div>

            <div id="pickup" class="man"> <!-- PICKUPS -->
                <h3>Pickups: </h3>
                <input type="text" name="pickups" value="">
            </div>

            <div id="string" class="man"> <!-- STRINGS -->
                <h3>Strings: </h3>
                <input type="text" name="strings" value="">
            </div>

            <div id="price" class="man"> <!-- PRICE -->
                <h3>Price: </h3>
                <input type="text" name="price" value="">
            </div>

            <div class="btnerr">
                <div class="sub">
                    <?php if ($action == 'Add'): ?>
                    <input type="submit" name="add" value="Add">
                    <?php else: ?>
                    <input type="submit" name="update" value="Update">
                    </br>
                    <input type="submit" name="delete" value="Delete">
                    <?php endif; ?>
                </div>

                <div class="error">
                    <?= $error ?>
                </div>
            </div>
            
            
        </form>
    </div>
</section>
        

<footer>
    <h3>© Chris Southey</h3>
</footer>




<?php include 'includes/footer.php'; ?>