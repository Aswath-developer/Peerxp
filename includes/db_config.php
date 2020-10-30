<?php 

error_reporting(1);
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

/**** DB CONFIG ****/
$org_servername = 'localhost';
$org_dbusername = 'aparuni1_Forms';
$org_dbpassword = '1V7N${g5A{yT';
$org_dbname = 'aparuni1_Forms';
$org_tablePrefix = 'ap_';
$globalDBConnection='';
$org_name ="Peer XP";



 
/**** DB GLOBAL VARIABLES ****/
define('DB_HOST_1',$org_servername);
define('DB_USER_1',$org_dbusername);
define('DB_PASSWORD_1',$org_dbpassword);
define('DB_NAME_1',$org_dbname);
define('DB_CONN_1','');
define('ORG_NAME',$org_name);



/**** TABLE PREFIX CONFIG ****/
define('admin_db_prefix',$org_dbname.'.'.$org_tablePrefix);
 
/*** COMMON DB TABLE NAME CONFIG***/ 
define('USER_MASTER',admin_db_prefix.'user_master');


/**** SQL CONNECTION START ****/
connecttodb($org_servername,$org_dbname,$org_dbusername,$org_dbpassword);
mysqli_query($GLOBALS["___mysqli_ston"], "SET @@global.sql_mode= ''");

function connecttodb($org_servername,$org_dbname,$org_dbusername,$org_dbpassword)
{
	global $org_link;
	$org_link=($GLOBALS["___mysqli_ston"] = mysqli_connect($org_servername, $org_dbusername, $org_dbpassword));
	if(!$org_link)
	{
		die("could not connect to mysql");
	}

	mysqli_select_db($org_link, $org_dbname) or die ("could not open database".mysqli_error($GLOBALS["___mysqli_ston"]));
	((bool)mysqli_set_charset($GLOBALS["___mysqli_ston"], "utf8"));

}
/**** SQL CONNECTION END ****/
?>
