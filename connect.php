<?php 


$con=new mysqli('localhost','root','','obaid');


if (!$con){ 
	die(mysqli_error($con));  
}

// else{
// 	die(mysql_error($con));
//  echo "Connected to the database.yes!!";
// }

?>