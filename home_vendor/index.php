<?php
require('../model/ip_database.php');
require('../model/ip_users_db.php');

$action = filter_input(INPUT_POST, 'action');
//echo "$action";
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'update_vendor1';
    }
}

if ($action == 'update_vendor1') {
 //   echo "halt4";
	$vendor_name = filter_input(INPUT_POST, 'vendor_name');
//	echo $vendor_name;
//	echo "XXX";
    $vendor_phn = filter_input(INPUT_POST, 'vendor_phn');
    $vendor_email = filter_input(INPUT_POST, 'vendor_email');
    $vendor_weblink = filter_input(INPUT_POST, 'vendor_weblink');
    if ($vendor_name == NULL || $vendor_name == FALSE) {
        $error = "Please enter all the required fields correctly.";
        include('../errors/ip_home_error.php');
    } else { 
    //    echo "halt4";
		update_vendor1($vendor_name,$vendor_phn,$vendor_email,$vendor_weblink);
//		echo "Successfully Updated!!";
		//header("Location: .?vendor_name=:vendor_name");
		include('home.php');
    } 
} else if ($action == 'update_deals') {
  //  echo "halt5";
	$deal_desc = filter_input(INPUT_POST, 'deal_desc');
//	echo $deal_desc;
//	echo "XXX";
	$vendor_name = filter_input(INPUT_POST, 'vendor_name');
    $deal_stime = filter_input(INPUT_POST, 'start_stamp');
    $deal_etime = filter_input(INPUT_POST, 'stop_stamp');
    if ($vendor_name == NULL || $vendor_name == FALSE) {
        $error = "Please enter all the required fields correctly.";
        include('../errors/ip_home_error.php');
    } else { 
    //    echo "halt4";
    	$vendors = get_vendor($vendor_name);
    	foreach ($vendors as $vendor) {
    		$vendor_ID = $vendor['vendorID'];
    	}
  //  	echo "$vendor_ID";
		update_deals($deal_desc,$vendor_ID,$deal_stime,$deal_etime);
//		echo "Successfully Updated!!";
		//header("Location: .?vendor_name=:vendor_name");
		include('home.php');
    } 
}

?>
