<?php 
	$conn=mysqli_connect("localhost","root","","gym");
	$Email=$_POST['Email'];
	$Password=$_POST['Password'];
	$sql="select * from tblgym where Email='$Email'";
	$query=mysqli_query($conn,$sql); 
	
	while($res= mysqli_fetch_array($query))
	{
		$Email= $res["Email"];
	    $Pass= $res["Password"];
	}
	
	if($Email==$Email && $Pass==$Password)
	{
		header("location:Homepage.php");
	}
	else{
		echo("NOT VALID INPUT");
	}
?>