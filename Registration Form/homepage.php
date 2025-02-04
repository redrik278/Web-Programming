<?php
session_start();

if (!isset($_SESSION['userID']) || !isset($_SESSION['userName'])) {
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1>Welcome, <?php echo $_SESSION['userName']; ?>!</h1>

    <div class="mt-4">
        <a href="profile.php" class="btn btn-info">Profile</a>
        <a href="change_password.php" class="btn btn-warning">Change Password</a>
        <a href="view_users.php" class="btn btn-primary">View Users</a>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
