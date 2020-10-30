<?php
//error_reporting(1);

include("db_config.php");
include("../classes/class_user.php");

$user= new USER('','','','','','','');
//User login
if(isset($_POST['mode']) && $_POST['mode']=='userLogin'){
	
	$user->setUserEmail($_POST['txt_username']);
	$user->setUserPassword($_POST['txt_password']);
	$checkOrgUserLogin=$user->getUserByIDLoginDetails();
	$numcount=mysqli_num_rows($checkOrgUserLogin);
	
	if($numcount > 0) 
	{	
		$userData=mysqli_fetch_assoc($checkOrgUserLogin);
		
		$_SESSION['user_id']=$userData['user_id'];
		$_SESSION['user_fname']=$userData['user_fname'];
		$_SESSION['user_lname']=$userData['user_lname'];
		$_SESSION['user_email']=$userData['user_email'];
		$_SESSION['user_phno']=$userData['user_phno'];
		$_SESSION['user_name'] = $userData['user_name'];
		$_SESSION['loggedin']=1;
		
		//Setting in cookies
		if(!empty($_POST["remember"])) 
		{
			setcookie ("memberlogin",$_POST["txt_username"],time()+ (10 * 365 * 24 * 60 * 60), '/');
			setcookie ("memberpassword",$_POST["txt_password"],time()+ (10 * 365 * 24 * 60 * 60),'/');
		} 
		else 
		{
			if(isset($_COOKIE["memberlogin"])) {
				setcookie ("memberlogin","");
			}
			if(isset($_COOKIE["memberpassword"])) {
				setcookie ("memberpassword","");
			}
		}
		echo json_encode(1);
		
	}
	else 
	{
		$_SESSION['loggedin']=0;
		echo json_encode(0);
		exit;
	}
}

?>
