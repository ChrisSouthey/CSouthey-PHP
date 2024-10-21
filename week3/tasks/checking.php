<?php
 
require_once "./account.php";

class CheckingAccount extends Account 
{
	const overdrawLimit = -200;

	public function withdrawal($amount): void
	{
		if($amount <= 0){
			echo "Withdrawal amount must be greater than 0";
		}
	

		else if($this->bal - $amount < self::overdrawLimit){
			$formattedOverdrawLimit = "$" . self::overdrawLimit;
			echo "Checking account cannot go below $formattedOverdrawLimit.";
		}
		$this->bal -= $amount;
		/*if($this->bal < -200){
			echo "Balance cannot go lower than -200";
		}*/
		
	} // end withdrawal

	//freebie. I am giving you this code.
	public function getAccountDetails() 
	{
		$accountDetails = "<h2>Checking Account</h2>";
		$accountDetails .= parent::getAccountDetails();
		
		return $accountDetails;
	}
}


// The code below runs everytime this class loads and 
// should be commented out after testing.

$checking = new CheckingAccount ('C123', 1000, '12-20-2019');
/*
$checking->withdrawal(200);
$checking->deposit(500);

echo $checking->getAccountDetails();
echo $checking->getStartDate();*/
    
?>
