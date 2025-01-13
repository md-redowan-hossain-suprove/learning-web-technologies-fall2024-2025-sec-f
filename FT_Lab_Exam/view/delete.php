<?php
session_start();
require_once('../model/userModel.php');
if (!isset($_COOKIE['status'])) {
    header('location: login.html');
}

$user = getUser($_REQUEST['id']);
$_SESSION['delete_id'] = $_REQUEST['id'];
?>

<html>
<head>
    <title>DELETE USER</title>
</head>
<body>
    <h2>Delete User</h2>
    <form id="deleteForm"> 
        <table border=1 cellspacing=0>
            <tr>
                <td>
                    Fullname: <?=$user["fullname"]?>
                </td>
                <td>
                    Username: <?=$user["username"]?>
                </td>
                <td>
                    Password: <?=$user["password"]?>
                </td>
                <td>
                    Contact: <?=$user["contact"]?>
                </td>
            </tr>
        </table>
        <hr>
        <input type="button" value="Confirm Deletion" onclick="ajaxDelete()" />
    </form>
    <br>
    <a href="userlist.php">Cancel</a>
    <script src="../asset/delete.js"></script> 
</body>
</html>