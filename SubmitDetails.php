<?php
	include_once 'Config.php';
?>
<?php
	$mFname=$_POST["fname"];
	$mLname=$_POST["lname"];
	$mNic=$_POST["nic"];
	$mAge=$_POST["age"];
	$mTel=$_POST["tel"];
	$mEmail=$_POST["email"];
	$mPwd=$_POST["pwd1"];
	$mCfrmPwd=$_POST["cfrmpwd1"];


	$sql="INSERT INTO signup_tbl(SID, First_Name, Last_Name, NIC, Age, Telephone_Number, Email, Password, Re_Password)VALUES('','$mFname','$mLname','$mNic',$mAge,$mTel, '$mEmail', '$mPwd', '$mCfrmPwd')";
	
	if(mysqli_query($conn,$sql))
	{
		echo "<script>alert('Record Inserted Successfully')</script>";
	}
	else
	{
		echo "<script>alert('Error in Insertion')</script>";
	}
	header("Location:Login.php");
	//close the connection
	mysqli_close($conn);
?>


