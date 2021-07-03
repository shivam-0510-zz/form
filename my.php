<?php

	$server_name="localhost";
	$username="root";
	$password="";
	$database_name="test1";

	

	$conn =mysqli_connect($server_name,$username,$password,$database_name)
	;

	if(!$conn)
	{
		die("Connection Failed : ". mysqli_connect_error());
	} 

	if(isset($_POST['submit']))
	{
		$sname = $_POST['sname'];
		$u_id = $_POST['u_id'];
		$semail = $_POST['semail'];
		$sphone = $_POST['sphone'];
		$aphone = $_POST['aphone'];
		$Preference = $_POST['Preference'];
		$Seater = $_POST['Seater'];

		$sql_query = "INSERT INTO entry_detail(sname,u_id,semail,aphone,sphone,Preference,Seater)
		VALUES('$sname','$u_id','$semail','$sphone','$aphone','$Preference','$Seater')";

		if (mysqli_query($conn,$sql_query))
		{
			echo "New Details Entry inserted successfully!";
		}
		else
		{
			echo "Error: " . $sql . "" . mysqli_error($conn);
		}
		
		mysqli_close($conn);

	}
?>