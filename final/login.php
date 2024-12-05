<?php 
    session_start();

    include 'model/model_admin.php';

    //insert into guitars (`brand`, `model`, `color`, `bridge`, `pickups`, `strings`, `price`) values ('Epiphone', 'Pro-1', 'Vintage Sunburst', 'Granadillo', 'None', 6, '159.99');

        $_SESSION['isLoggedIn'] = false;
        $_SESSION['username'] = '';
        $error = '';

        if(isset($_POST['login'])){

            $username = filter_input(INPUT_POST,'username', FILTER_SANITIZE_STRING);
            $password = filter_input(INPUT_POST,'password', FILTER_SANITIZE_STRING);
            
            
            if(login($username, $password)){
                $_SESSION['isLogginIn'] = true;
                $_SESSION['username'] = $username;
                header('Location: admin_page.php');
            }
            else{
                $error = "Error! Incorrect credentials.";
            }
        }

    include 'includes/header.php';
    include 'includes/style.php';
?>


<nav>
    <h1>Guitar Hub</h1>
    <a href="view_guitars.php">Back</a>
</nav>

<section class="main">
    
    <div class="login" > 
        <h2>Enter Login Info</h2>
        <form method="post">
            <div class="loginf" id="user"> 
                <h3>Username: </h3>
                <input type="text" name="username" value="">
            </div>
            <div class="loginf" id="pass"> 
                <h3>Password: </h3>
                <input type="password" name="password" value="">
            </div>
            <input type="submit" value="Login" name="login">
            <?php
            if ($error != "") {
            ?>
            <div class="error"><?php echo $error; ?></div>
            <?php
                }
            ?>
        </form>
    </div>
</section>
        

<footer>
    <h3>© Chris Southey</h3>
</footer>