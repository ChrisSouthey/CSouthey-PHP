<?php

require_once "./account.php";

class CheckingAccount extends Account 
{
    const overdrawLimit = -200;  // Minimum allowed balance

    // Method to withdraw money
    public function withdrawal($amount)
    {
        if ($amount <= 0) {
            echo "Withdrawal amount must be greater than 0<br>";
            return;
        }

        if ($this->bal - $amount < self::overdrawLimit) {
            $formattedOverdrawLimit = "$" . self::overdrawLimit;
            echo "Checking account cannot go below $formattedOverdrawLimit<br>";
            return;
        }

        // Subtract the amount from the current balance
        $this->bal -= $amount;

        // Show the updated balance
        echo "New balance after withdrawal: $" . $this->bal . "<br>";
    }

    // Freebie: returning account details
    public function getAccountDetails() 
    {
        $accountDetails = "<h2>Checking Account</h2>";
        $accountDetails .= parent::getAccountDetails();

        return $accountDetails;
    }
}

// Create a new CheckingAccount object
$checking = new CheckingAccount('C123', 1000, '12-20-2019');


// Uncomment these for additional functionality testing
// echo $checking->getAccountDetails();
// echo $checking->getStartDate();

?>