<?php
function get_vendor($vendor_name) {
    global $db;
    $query = 'SELECT * FROM vendors
              WHERE vendorName = :vendor_name';
    $statement = $db->prepare($query);
    $statement->bindValue(':vendor_name', $vendor_name);
    $statement->execute();
    $vendors = $statement->fetchAll();
    $statement->closeCursor();
    return $vendors;    
}

function get_this_user($user_name) {
    global $db;
    $query = 'SELECT userName, password, userType FROM registration
              WHERE userName = :user_name';    
    $statement = $db->prepare($query);
    $statement->bindValue(':user_name', $user_name);
    $statement->execute();    
    $users = $statement->fetchAll();
    $statement->closeCursor();
    return $users;
}

function update_event($event_desc,$start_stamp,$stop_stamp,$location) {
    global $db;
    try { 
    $query = 'INSERT INTO event_details (eventDesc, startTime, stopTime, location)
              VALUES (:event_desc, :start_stamp, :stop_stamp, :location)';
    $statement = $db->prepare($query);
    $statement->bindValue(':event_desc', $event_desc);
    $statement->bindValue(':start_stamp', $start_stamp);
    $statement->bindValue(':stop_stamp', $stop_stamp);
    $statement->bindValue(':location', $location);
    $statement->execute();    
    $statement->closeCursor(); 
    } catch (PDOException $e) {
        $error = $e->getMessage();
        include('../errors/ip_error.php');
        exit();
    }
}


function update_vendor2($vendor_name,$new_name,$category_type) {
    global $db;
    try { 
    $query = 'UPDATE vendors 
                SET vendorName = :new_name, 
                    vendorPhone = NULL,
                    vendorEmail = NULL,
                    vendorWeblink = NULL,
                    categoryType = :category_type
              WHERE 
                    vendorName = :vendor_name';
    $statement = $db->prepare($query);
    $statement->bindValue(':vendor_name', $vendor_name);
    $statement->bindValue(':new_name', $new_name);
    $statement->bindValue(':category_type', $category_type);
    $statement->execute();    
    $statement->closeCursor(); 
    } catch (PDOException $e) {
        $error = $e->getMessage();
        include('../errors/ip_error.php');
        exit();
    }
}

function update_vendor($vendor_name,$new_name,$category_type) {
    global $db;
    $query = 'UPDATE vendors 
                SET vendorName = :new_name, 
                    vendorPhone = NULL,
                    vendorEmail = NULL,
                    vendorWeblink = NULL,
                    categoryID = :category_type
              WHERE 
                    vendorName = :vendor_name';
    $statement = $db->prepare($query);
    $statement->bindValue(':vendor_name', $vendor_name);
    $statement->bindValue(':new_name', $new_name);
    $statement->bindValue(':category_type', $category_type);
    $statement->execute();    
    $statement->closeCursor(); 
}

function update_vendor1($vendor_name,$vendor_phn,$vendor_email,$vendor_weblink) {
    global $db;
    $query = 'UPDATE vendors 
                SET vendorPhone = :vendor_phn, 
                    vendorEmail = :vendor_email,
                    vendorWeblink = :vendor_weblink
              WHERE 
                    vendorName = :vendor_name';
    $statement = $db->prepare($query);
    $statement->bindValue(':vendor_name', $vendor_name);
    $statement->bindValue(':vendor_phn', $vendor_phn);
    $statement->bindValue(':vendor_email', $vendor_email);
    $statement->bindValue(':vendor_weblink', $vendor_weblink);
    $statement->execute();    
    $statement->closeCursor(); 
}

function remove_vendor($vendor_name) {
    global $db;
    $query = 'UPDATE vendors 
                    SET vendorShopNo = NULL,
                        vendorLatitude = NULL,
                        vendorLongitude = NULL
              WHERE 
                    vendorName = :vendor_name';
    $statement = $db->prepare($query);
    $statement->bindValue(':vendor_name', $vendor_name);
    $update_count = $statement->execute();    
    $statement->closeCursor();     
    return $update_count;
}

function update_deals($deal_desc,$vendor_ID,$deal_stime,$deal_etime) {
    global $db;
    $query = 'INSERT INTO deals (dealDesc, vendorID, dealStart, dealEnd)
              VALUES (:deal_desc, :vendor_ID, :deal_stime, :deal_etime)';
    $statement = $db->prepare($query);
    $statement->bindValue(':deal_desc', $deal_desc);
    $statement->bindValue(':vendor_ID', $vendor_ID);
    $statement->bindValue(':deal_stime', $deal_stime);
    $statement->bindValue(':deal_etime', $deal_etime);
    $statement->execute();    
    $statement->closeCursor(); 
}

?>