<?php include 'account.php' ?>
<?php include 'checking.php' ?>
<?php include 'savings.php' ?>
<?php

    if (isset ($_POST['withdrawChecking'])) 
    {
        $amount = $_POST['checkingWithdrawAmount'];
        $checking->withdrawal($amount);
        


    } 
    else if (isset ($_POST['depositChecking'])) 
    {
        echo "I pressed the checking deposit button";
    } 
    else if (isset ($_POST['withdrawSavings'])) 
    {
        echo "I pressed the savings withdrawal button";
    } 
    else if (isset ($_POST['depositSavings'])) 
    {
        echo "I pressed the savings deposit button";
    }  

    $checkAmt = 1000;
    $savingAmt = 5000;

    if(isset($_POST["checking"])){;
        $checkAmt = $_POST["$checking->bal"];
        $checking->bal = $checkAmt;
    }

    if(isset($_POST["savings"])){
        $savingAmt = $_POST["savings"];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM</title>
    <style type="text/css">
        body {
            margin-left: 120px;
            margin-top: 50px;
        }
       .wrapper {
            display: grid;
            grid-template-columns: 300px 300px;
        }
        .account {
            border: 1px solid black;
            padding: 10px;
        }
        .label {
            text-align: right;
            padding-right: 10px;
            margin-bottom: 5px;
        }
        label {
           font-weight: bold;
        }
        input[type=text] {width: 80px;}
        .error {color: red;}
        .accountInner {
            margin-left:10px;margin-top:10px;
        }
    </style>
</head>
<body>

    <form method="post">
               
    <h1>ATM</h1>
        <div class="wrapper">
            
            <div class="account">
              
                <div><?= $checking->getAccountDetails() ?></div>
                    
                    <div class="accountInner">
                        <div></div>
                        <input type="text" name="checkingWithdrawAmount" value="" />
                        <input type="submit" name="withdrawChecking" value="Withdraw" />
                    </div>
                    <div class="accountInner">
                        <input type="text" name="checkingDepositAmount" value="" />
                        <input type="submit" name="depositChecking" value="Deposit" /><br />
                    </div>
            
            </div>

            <div class="account">
               
                
                <div><?= $savings->getAccountDetails() ?></div>
                    <div class="accountInner">
                        <input type="text" name="savingsWithdrawAmount" value="" />
                        <input type="submit" name="withdrawSavings" value="Withdraw" />
                    </div>
                    <div class="accountInner">
                        <input type="text" name="savingsDepositAmount" value="" />
                        <input type="submit" name="depositSavings" value="Deposit" /><br />
                    </div>
            
            </div>
            
        </div>
    </form>
</body>
</html>
