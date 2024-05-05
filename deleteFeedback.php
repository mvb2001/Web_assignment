<?php
	include_once 'config.php';
?>

<?php
	$mEmail = $_GET['Email'];

	$query = "DELETE FROM feedback_tbl WHERE Email = '$mEmail'";

	$data = mysqli_query($conn, $query);

	if($data){
		echo "<script>alert('Feedback Deleted Successfully!')</script>";
		
	}else{
		echo "<script>alert('Error in Delete!')</script>";
	}

	header("Location: showFeedbacks.php");
	exit();

	mysqli_close($conn);

?>
