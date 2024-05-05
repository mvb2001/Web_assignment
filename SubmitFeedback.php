<?php
	include_once 'config.php';
?>
<?php
	$UserName=$_POST["uname"];
	$mEmail=$_POST["uemail"];
	$feedback=$_POST["question"];


	$sql="INSERT INTO feedback_tbl(Username, Email, Feedback)VALUES('$UserName','$mEmail','$feedback')";
	
	if(mysqli_query($conn,$sql))
	{
		echo "<script>alert('Feedback Submitted Successfully')</script>";
		//header("Location:Login_Page.html");
	}
	else
	{
		echo "<script>alert('Error in Submission')</script>";
	}
	
    header("Location: showFeedbacks.php");
	//close the connection
	mysqli_close($conn);
?>

