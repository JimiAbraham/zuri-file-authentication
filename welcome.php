<?php
session_start();
if (!isset($_SESSION['username'])) {
    echo '<script>alert("Please verify your username and password.");</script>';
    header('location: login.php');
  }
 
  

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>You are welcome in Here, Thank You</h2>


<a href="logout.php">Log Out Here</a>
</body>
</html>