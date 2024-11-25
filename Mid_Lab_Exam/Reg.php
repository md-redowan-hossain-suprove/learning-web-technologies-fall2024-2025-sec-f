<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];

    if (!isset($_SESSION['users'])) {
        $_SESSION['users'] = [];
    }

    $user_data = [
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'dob' => $dob,
        'gender' => $gender,
    ];

    $_SESSION['users'][$name] = $user_data;

    $_SESSION['user'] = $user_data;

    $_SESSION['status'] = true;

    header('Location: login.html');
    exit();
} else {
    echo "Invalid Request!";
}
?>