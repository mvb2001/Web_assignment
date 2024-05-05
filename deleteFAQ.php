<?php
	include_once 'config.php';
?>

<?php
	$mEmail = $_GET['Email'];

	$query = "DELETE FROM faq_tbl WHERE Email = '$mEmail'";

	$data = mysqli_query($conn, $query);

	if($data){
		echo "<script>alert('FAQ Deleted Successfully!')</script>";
		
	}else{
		echo "<script>alert('Error in Delete!')</script>";
	}

	header("Location:showFAQ.php");
	exit();

	mysqli_close($conn);

?>
