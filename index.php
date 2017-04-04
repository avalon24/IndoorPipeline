<?php 
require('model/ip_database.php');
echo "x";
require('model/ip_users_db.php');
//require('../model/category_db.php');
echo "y";
$action = filter_input(INPUT_POST, 'action');
echo "$action";
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'user_login';
    }
}
echo "z";
if ($action == 'user_login') {
    echo "halt3";
	$user_name = filter_input(INPUT_POST, 'user_name');
    $password = filter_input(INPUT_POST, 'password');
    $user_type = filter_input(INPUT_POST, 'user_type');
    //echo "$user_name";
    //echo "$password";
    //echo "$user_type";
    if ($user_name == NULL || $user_name == FALSE ||
            $password == NULL || $password == FALSE) {
        $error = "Incorrect UserID or Password entered; please verify.";
        include('errors/ip_error.php');
    } else { 
    //    echo "halt4";
		$users = get_this_user($user_name);
		if ($users == NULL) {
        	$error = "Sorry!! No records found.";
        	include('errors/ip_error.php');
        } else {
        	foreach ($users as $user) {
        		$uname = $user['userName'];
          		echo $uname;
        		$upwd  = $user['password'];
        		echo $upwd;
        		$utype = $user['userType'];
        		echo $utype;
        	}
        	if ($user_name == $uname && $password != $upwd) {
        		$error = "Incorrect Password entered; please verify.";
        		include('errors/ip_error.php');	
        	}
        	if ($user_name == $uname && $password == $upwd && $user_type != $utype) {
        		$error = "Incorrect combination of userID, password and userType specified!! Please verify.";
        		include('errors/ip_error.php');	
        	}
        	if ($user_name == $uname && $password == $upwd && $user_type == $utype)	{
        		echo "halt5";
		
        		if ($user_type == 'ADMIN') {
        			header("Location: ./home_admin/home.php");
        		//	include('./home_admin/index.php');
        		} else {
        			header("Location: ./home_vendor/home.php");
        		}
        	}
        }
    }
} else if ($action == 'user_logout') {
    echo "halt6";
	header("Location: ./logout.php");
}    
?>