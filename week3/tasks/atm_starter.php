<?php include 'account.php'; ?>
<?php include 'checking.php'; ?>
<?php include 'savings.php'; ?>

<?php
    // Initialize default balances (these should only be used if no values are provided in the form)
    $checkAmt = 1000;
    $savingAmt = 5000;

    // Check if form is submitted and balances are provided via hidden fields
    if (isset($_POST['checkingBalance'])) {
        $checkAmt = $_POST['checkingBalance']; // Get the current checking balance from the hidden input
    }

    if (isset($_POST['savingsBalance'])) {
        $savingAmt = $_POST['savingsBalance']; // Get the current savings balance from the hidden input
    }

    // Create CheckingAccount and SavingsAccount objects with the updated balances
    $checking = new CheckingAccount('C123', $checkAmt, '12-20-2019');
    $savings = new SavingsAccount('S123', $savingAmt, '12-20-2019');

    // Handle form actions (withdrawals, deposits)
    if (isset($_POST['withdrawChecking'])) {
        $amount = $_POST['checkingWithdrawAmount'];
        $checking->withdrawal($amount);
    } elseif (isset($_POST['depositChecking'])) {
        $amount = $_POST['checkingDepositAmount'];
        $checking->deposit($amount);
    } elseif (isset($_POST['withdrawSavings'])) {
        $amount = $_POST['savingsWithdrawAmount'];
        $savings->withdrawal($amount);
    } elseif (isset($_POST['depositSavings'])) {
        $amount = $_POST['savingsDepositAmount'];
        $savings->deposit($amount);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM</title>
    <style type="text/css">
        body { margin-left: 120px; margin-top: 50px; }
        .wrapper { display: grid; grid-template-columns: 300px 300px; }
        .account { border: 1px solid black; padding: 10px; }
        label { font-weight: bold; }
        input[type=text] { width: 80px; }
    </style>
</head>
<body>

    <form method="post">

        <h1>ATM</h1>
        <div class="wrapper">

            <div class="account">
                <div><?= $checking->getAccountDetails(); ?></div>

                <div class="accountInner">
                    <input type="text" name="checkingWithdrawAmount" value=""/>
                    <input type="submit" name="withdrawChecking" value="Withdraw" />
                </div>
                <div class="accountInner">
                    <input type="text" name="checkingDepositAmount" value=""  />
                    <input type="submit" name="depositChecking" value="Deposit" />
                </div>

                <!-- Hidden field to persist checking balance -->
                <input type="hidden" name="checkingBalance" value="<?= $checking->bal ?>" />
            </div>

            <div class="account">
                <div><?= $savings->getAccountDetails(); ?></div>

                <div class="accountInner">
                    <input type="text" name="savingsWithdrawAmount" value="" />
                    <input type="submit" name="withdrawSavings" value="Withdraw" />
                </div>
                <div class="accountInner">
                    <input type="text" name="savingsDepositAmount" value=""  />
                    <input type="submit" name="depositSavings" value="Deposit" />
                </div>

                <!-- Hidden field to persist savings balance -->
                <input type="hidden" name="savingsBalance" value="<?= $savings->bal ?>" />
            </div>

        </div>
    </form>

</body>
</html>