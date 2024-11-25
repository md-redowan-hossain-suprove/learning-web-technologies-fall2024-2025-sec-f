<?php
session_start();

if (!isset($_SESSION['status']) || $_SESSION['status'] !== true) {
    header('Location: Login.html');
    exit();
}

$user = $_SESSION['user'];
?>

<html>
<head>
    <title>Home</title>
</head>
<body>
    <fieldset style="width:50%">
    <h1>Welcome Home <br></h1>
    <b>Dear, <?php echo $user['name']; ?></b>

   
    <ul>
        Email: <?php echo $user['email']; ?> <br>
        Date of Birth: <?php echo $user['dob']; ?> <br>
        Gender: <?php echo $user['gender']; ?>
    </ul>

    <form method="post" action="home.php">
        <button type="submit" name="logout">Logout</button>
    </form>

    <?php
    if (isset($_POST['logout'])) {
        unset($_SESSION['status']); 
        unset($_SESSION['user']);

        header('Location: Login.html');
        exit();
    }
    ?>
    </fieldset>
</body>
</html>