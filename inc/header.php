<?php
include 'lib/session.php';
Session::checkSession();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="inc/bootstrap.min.css">
    <link rel="stylesheet" href="css/crud.css">
    <script src="inc/jquery.min.js"></script>
    <script src="inc/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<nav class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">
<button> <a class="btn btn-primary" href="user-index.php">Home</a></button>


</div>
<ul class="nav navbar-nav pull-right">
<li><a href="profile.php">Profile</a></li>

<?php
if(isset($_SESSION['email'])){
    echo '<li><a href="logout.php">Logout</a></li>';
}else{
    echo '<li><a href="login.php">Login</a></li>';
    echo '<li><a href="register.php">Register</a></li>';
} 
    
?>
<li><a href="admin.php">Admin</a></li>
</ul>

</div>

</nav>