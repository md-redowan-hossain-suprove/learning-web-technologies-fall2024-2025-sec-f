<?php
session_start();
require_once('../model/db.php');

if (isset($_REQUEST['submit'])) {
    $username = trim($_REQUEST['username']);
    $fullname = trim($_REQUEST['fullname']);
    $password = trim($_REQUEST['password']);
    $phone = trim($_REQUEST['phone']);

    
    if (empty($username) || empty($fullname) || empty($password) || empty($phone)) {
        echo "null error"; 
    } else {
       
        $status = updateUser($_SESSION['update_id'], $username, $fullname, $password, $phone);
        
        if ($status) {
            echo "success";
            unset($_SESSION['update_id']);  
            exit();
        } else {
            echo "error";  
        }
    }
} else {
    echo "submit error"; 
}

?>