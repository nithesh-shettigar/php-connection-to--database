<?php
include("connection.php");
error_reporting(0);
 $_GET['us'];
 $_GET['nm'];
 $_GET['br'];
 $_GET['sm'];
?>
<html>
<head>
</head>
<body>
<form  action="" method="GET">
usn<input type="text" name="usn" value="<?php echo $_GET['us'];?>"/><br></br>
name<input type="text" name="name" value="<?php echo $_GET['nm'];?>"/><br></br>
branch<input type="text" name="branch" value="<?php echo $_GET['br'];?>"/><br></br>
sem<input type="text" name="sem" value="<?php echo $_GET['sm'];?>"/><br></br>
<input type="submit" name="submit" value="update"/><br></br>
</form>
<?php 

if($_GET['submit']){
$usn=	$_GET['usn'];
$name =   $_GET['name'];
 $branch=   $_GET['branch'];
  $sem=  $_GET['sem'];
	$query="UPDATE STUDENT SET NAME='$name',BRANCH='$branch',SEM=' $sem' WHERE USN='$usn'";
	$data=mysqli_query($conn,$query);
	 if($data){
	
	echo"data successfully updated.<a href='display.php'>check updated list here</a>";
}
}
else{
	echo"not updated";
}


?>
</body>
</html>




