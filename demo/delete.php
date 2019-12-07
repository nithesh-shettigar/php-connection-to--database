<?php 
include("connection.php");
error_reporting(0);
 $usn=$_GET['us'];
 $query="DELETE FROM STUDENT WHERE USN='$usn'";
	$data=mysqli_query($conn,$query);
	if($data){
	
	echo"data successfully deleted.<a href='display.php'>check updated list here</a>";
}

	else{
		echo"not deleted";
	}
?>