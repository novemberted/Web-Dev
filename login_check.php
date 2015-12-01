<?php
session_start();
include "connection.php";
	
$email = $_POST['email'];
$password = $_POST['password'];

//$email = stripslashes($email);
//$password = stripslashes($password);
$email = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);


//$sql="SELECT count(*) FROM signin WHERE email='" . $email. "' and password='" . $password. "'";
//$result=mysql_query($sql);
//$count = mysql_num_rows($result);
//if($count == 1){
//	session_start();
//$_SESSION['loggedin'] = true;
//$_SESSION['email'] = $email;
//}
//elseif ($count==0)
//{
//echo "there is no such record";
//$_SESSION['loggedin'] = false;
//}
//else
//echo "there is a problem";

$isUserLoggedIn = $_SESSION['user_logged_in'] = isset( $_SESSION['user_logged_in'] )? : FALSE;
$userEmail = $_SESSION['email'] = isset( $_SESSION['email'] )? $_SESSION['email'] : '';
// Inform the users if they're logged in or not
if( $isUserLoggedIn && !empty($userEmail))
{
    $result = mysql_query( "
    SELECT 'email' FROM signin WHERE email = '" . $userEmail . "'");
    $resultCount = mysql_num_rows($result);
    //if( $resultCount != 1){
	//echo "to login to see this page";
//}

} else {
    echo "you have to login to see this page";
}
header("Location: redirect.php");

	
