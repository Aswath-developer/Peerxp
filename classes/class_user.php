<?php

class User {

	public $user_id;
	public $user_name;
	public $user_email;
	public $user_phno;
	public $user_password;
	public $user_status;
	

	//accessor (or) getter
	
	public function getUserId() 
	{
        return $this->user_id;
	}
	public function getUserName() 
	{
        return $this->user_name;
	}
	public function getUserEmail() 
	{
        return $this->user_email;
	}
	public function getUserPhno() 
	{
        return $this->user_phno;
	}
	public function getUserPassword() 
	{
        return $this->user_password;
	}
	public function getUserStatus() 
	{
        return $this->user_status;
	}
	
	
    
	//settor (or) modifier
	public function setUserId($m_user_id) 
	{
        $this->user_id = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $m_user_id);
	}
	public function setUserName($m_user_name) 
	{
        $this->user_name = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $m_user_name);
	}
	public function setUserEmail($m_user_email) 
	{
        $this->user_email = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $m_user_email);
	}
	public function setUserPhno($m_user_phno) 
	{
        $this->user_phno = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $m_user_phno);
	}
	public function setUserPassword($m_user_password) 
	{
        $this->user_password = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $m_user_password);
	}
	public function setUserStatus($m_user_status) 
	{
        $this->user_status = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $m_user_status);
	}
	
   
	public function __construct($c_user_id,$c_user_name,$c_user_email,$c_user_phno,$c_user_password,$user_status) {
		$this->user_id=mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $c_user_id);
		$this->user_name=mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $c_user_name);
		$this->user_email=mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $c_user_email);
		$this->user_phno=mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $c_user_phno);
		$this->user_password=mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $c_user_password);
		$this->user_status=mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $c_user_status);
		 
		
   }
   
	
	function getUserByID(){
		$query = "SELECT user_id,user_name,user_email,user_phno,user_password,user_status FROM ".USER_MASTER." where user_status != '0' ";
		$result = mysqli_query($GLOBALS["___mysqli_ston"], $query);
		return $result;
	}
	function getUserByIDLoginDetails(){
		$query = "SELECT user_id,user_name,user_email,user_phno,user_password,user_status FROM ".USER_MASTER." WHERE user_status != '0' and ( user_name = '".$this->user_email."'  OR user_email = '".$this->user_email."' ) AND user_password = '".md5($this->user_password)."' AND user_visibility = 1";
		$result = mysqli_query($GLOBALS["___mysqli_ston"], $query);
		return $result;
	}
	
	
	
}

?>