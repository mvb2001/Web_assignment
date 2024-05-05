<?php
	include_once 'config.php';
?>
<?php
	$firstName=$_POST["fname"];
	$lastName=$_POST["lname"];
	$telNum=$_POST["tel"];
	$eAddress=$_POST["email"];
	$problems=$_POST["issue"];
	
	$sql="INSERT INTO contact_tbl(First_Name, Last_Name, Telephone_Number, Email, Issues)VALUES('$firstName','$lastName','$telNum','$eAddress','$problems')";
	
	if(mysqli_query($conn,$sql))
	{
		echo "<script>alert('Issues submitted Successfully')</script>";
	}
	else
	{
		echo "<script>alert('Error in Insertion')</script>";
	}
	
    header("Location: showContact.php");

	//close the connection
	mysqli_close($conn);
?>
