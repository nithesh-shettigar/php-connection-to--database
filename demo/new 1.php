<?php
include("connection.php");
error_reporting(0);
$query="SELECT * FROM STUDENT" ;
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total !=0){
	?>
	
	
	<table border='1'>
	<tr>
	<td>user_id</td>
	<td>name</td>
	<td>branch</td>
	<td>sem</td>
	
	</tr>
	
	<?php
	while($result=mysqli_fetch_assoc($data)){
		
		
	echo "<tr>
	<td>".$result['usn']."</td>
	<td>".$result['name']."</td>
	<td>".$result['branch']."</td>
	<td>".$result['sem']."</td>
	</tr>";
	
	}
}
	else
	{
		echo"no record found";
	}
	
?>
</table>