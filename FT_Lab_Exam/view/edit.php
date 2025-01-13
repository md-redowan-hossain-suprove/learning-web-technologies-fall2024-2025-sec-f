<?php
session_start();
require_once('../model/db.php');

$user = getUser($_REQUEST['id']);
$_SESSION['update_id'] = $_REQUEST['id'];
?>

<html>
<head>
    <title>Edit Page</title>
</head>
<body>
    <h2>Edit Author</h2>
    <form id="editForm" onsubmit="return false;">
    Full Name:
    <input type="text" id="fullname" name="fullname" value="<?= $user['fullname'] ?>" onkeyup="validateFullname()" />
    <p id="fullnameMessage"> </p> 

    Username:
    <input type="text" id="username" name="username" value="<?= $user['username'] ?>" onkeyup="validateUsername()" />
    <p id="usernameMessage"></p> 

    Password:
    <input type="password" id="password" name="password" value="<?= $user['password'] ?>" onkeyup="validatePassword()" />
    <p id="passwordMessage"></p> 

    Contact No:
    <input type="number" id="phone" name="phone" value="<?= $user['contact'] ?>" onkeyup="validatePhone()" />
    <p id="phoneMessage"> </p> 

    <input type="button" value="Submit" onclick="ajaxUpdate()" />
</form>
    <script src="../asset/edit.js"></script>
</body>
</html>