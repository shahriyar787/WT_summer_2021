<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); }
?>


<!DOCTYPE html>
<html>
<body>
<h2>Home</h2>
Hello, <h3> <?php echo $_SESSION["username"];?></h3>
<br/><h5>Welcome to home page.</h5>


<h5>Do you want to go to <a href="secondpage.php"> MY Profile</a></h5>

<br/>
 <h5>Do you want to <a href="../control/logout.php">logout</a></h5>

</body>
</html>