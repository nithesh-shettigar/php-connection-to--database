<?php
include("connection.php");
error_reporting(0);
$query="SELECT * FROM STUDENT" ;
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total !=0){
	?>
	
	
	<table >
	<tr>
	<th>usn</th>
	<th>name</th>
	<th>branch</th>
	<th>sem</th>
	<th colspan="2">operations</th>
	</tr>
	
	<?php
	while($result=mysqli_fetch_assoc($data)){
			
	echo "<tr>
	       <th>".$result['usn']."</th>
	       <th>".$result['name']."</th>
	       <th>".$result['branch']."</th>
	       <th>".$result['sem']."</th>
	<td><a href='update.php?us=$result[usn]&nm=$result[name]&br=$result[branch]&sm=$result[sem]'>EDIT</a></td>
	<td><a href='delete.php?us=$result[usn]'>DELETE</a></td>
	</tr>";
	
	}
}
	else
	{
		echo"no record found";
	}
	
?>
</table>