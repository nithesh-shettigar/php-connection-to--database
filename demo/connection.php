
<?php
$servername= "localhost";
$username= "root";
$password= "";
$dbname= "demo2";

$conn= mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
	
	echo"connection successfull";
}
else
{
	die("connection failed because:".mysqli_connect_error());
}


?>
