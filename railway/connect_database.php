<link rel="stylesheet" href="style.css" />
<?php
	$con=mysqli_connect("localhost","root","","railway");
	if ($con->connect_error) 
	{
 		die("Connection failed: " . $con->connect_error);
	} 
?>
