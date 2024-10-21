<?php
// This is the base class for checking and savings accounts
// It is declared **abstract** so that it can not be instantiated
// Child classes must be derived that 
// implement the withdrawal and getAccountDetails methods

/* Note:
	You should implement all other methods in the class
*/

abstract class Account 
{
	protected $accountId;
	protected $balance;
	protected $startDate;
	protected $str = '';
	
	public function __construct ($id, $bal, $startDate) 
	{
	   $this->id = $id;
	   $this->bal = $bal;
	   $this->startDate = $startDate;
	}
	
	public function deposit ($amount) 
	{
		// write code here
	} // end deposit

	// This is an abstract method. 
	// This method must be defined in all classes
	// that inherit from this class
	abstract public function withdrawal($amount);
	
	public function getStartDate() 
	{
		return $this->startDate;
	} 

	public function getBalance() 
	{
		return $this->bal;
	} 

	public function getAccountId() 
	{
		return $this->id;
	} 

	// Display AccountID, Balance and StartDate in a nice format
	protected function getAccountDetails()
	{
		return '<li>Account ID: ' . $this->getAccountId() . '</li>' . 
		'<li>Balance: ' . $this->getBalance() . '</li>' . 
		'<li>Account Opened: ' . $this->getStartDate() . '</li>';
		
		
	} // end getAccountDetails
	
} // end account

?>
