<?php 
require('../model/ip_database.php');
echo "x";
require('../model/ip_users_db.php');
//require('../model/category_db.php');
echo "y";
$action = filter_input(INPUT_POST, 'action');
echo "$action";
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
    	echo "default";
        $action = 'update_event';
    }
} 
echo "z";
if ($action == 'update_event') {
    echo "halt3";
    $event_desc = filter_input(INPUT_POST, 'event_desc');
    $start_stamp = filter_input(INPUT_POST, 'start_stamp');
    $stop_stamp = filter_input(INPUT_POST, 'stop_stamp');
    $location = filter_input(INPUT_POST, 'location');
    echo "$event_desc";
    echo "$start_stamp";
    echo "$stop_stamp";
    //echo "$location";
    if ($event_desc == NULL || $event_desc == FALSE ||
            $start_stamp == NULL ) {
        $error = "Please enter proper start time n date.";
        include('../errors/ip_home_error.php');
    } else { 
        echo "halt3x";
		update_event($event_desc,$start_stamp,$stop_stamp,$location);
		echo "Successfully Updated!!";
		//header("Location: ./");
        include("home.php");
    } 
} else if ($action == 'update_vendor') {
    echo "halt4";
	$vendor_name = filter_input(INPUT_POST, 'vendor_name');
    $new_name = filter_input(INPUT_POST, 'new_name');
    $category_type = filter_input(INPUT_POST, 'category_type');
    if ($vendor_name == NULL || $vendor_name == FALSE ||
            $new_name == NULL || $new_name == FALSE ||
            $category_type == NULL || $category_type == FALSE) {
        $error = "Please enter all the required fields correctly.";
        include('../errors/ip_error.php');
    } else { 
        echo $vendor_name;
        echo $new_name;
        echo $category_type;
        update_vendor($vendor_name,$new_name,$category_type);
		echo "Successfully Updated!!";
    	//header("Location: ./");
        include("home.php");
    } 
} else if ($action == 'remove_vendor') {
    echo "halt5";
    $vendor_name = filter_input(INPUT_POST, 'vendor_name');
    if ($vendor_name == NULL || $vendor_name == FALSE) {
        $error = "Please select a vendor";
        include('../errors/ip_error.php');
    } else { 
    //    echo "halt4";
		$update_count = remove_vendor($vendor_name);
		echo "Successfully removed!!";
        echo "Count: $update_count";
		//header("Location: ./");
        include("home.php");
    } 
} 

?>