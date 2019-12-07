<?php
include("connection.php");
error_reporting(0);
?>
<html>
<head>
</head>
<body>
<form  action="" method="GET">
usn<input type="text" name="usn" value=""/><br></br>
name<input type="text" name="name" value=""/><br></br>
branch<input type="text" name="branch" value=""/><br></br>
sem<input type="text" name="sem" value=""/><br></br>
<input type="submit" name="submit" value="submit"/><br></br>
</form>
<?php 

if($_GET['submit']){
	$us=$_GET['usn'];
	$nm=$_GET['name'];
    $br=$_GET['branch'];
    $sm=$_GET['sem'];
	if($us!=""&&$nm!=""&&$br!=""&&$sm!=""){
		
		$query="INSERT INTO STUDENT VALUES ('$us','$nm','$br','$sm')";
        $data=mysqli_query($conn,$query);
         if($data){
	
	echo"data successfully inserted";
}
	
}else{
	   echo"all fields are required";
}

}


?>
</body>
</html>




