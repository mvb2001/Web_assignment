<?php
	include_once 'config.php';
?>
<?php
	$UserName=$_POST["uname"];
	$mEmail=$_POST["uemail"];
	$faq=$_POST["question"];


	$sql="INSERT INTO faq_tbl(Username, Email, FAQs)VALUES('$UserName','$mEmail','$faq')";
	
	if(mysqli_query($conn,$sql))
	{
		echo "<script>alert('FAQ submitted Successfully')</script>";
		
	}
	else
	{
		echo "<script>alert('Error in Submission')</script>";
	}
	header("Location: showFAQ.php");
	//close the connection
	mysqli_close($conn);
?>

