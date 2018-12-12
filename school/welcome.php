<?php
// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link href="/css/stylesphp.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
  <div class="header">
    <a href="#default" class="logo" style="font-family:verdana"; >Speno4</a>
      <div class="header-right">
        <a class="active" href="\index" style="font-family:verdana";>Home</a>
        <a href="temp" style="font-family:verdana";>Twitch</a>
        <a href="temp" style="font-family:verdana";>YouTube</a>
        <a href="temp" style="font-family:verdana";>Discord</a>
        <a href="\school\admin\login.php" style="font-family:verdana";>Admin Login</a>
      </div>
  </div>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>. Welcome.</h1>
    </div>
    <p><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>
</body>
</html>
