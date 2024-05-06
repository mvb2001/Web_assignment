<?php
session_start();
include "Config.php";

if(isset($_POST['uname']) && isset($_POST['pwd'])){

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$uname = validate($_POST['uname']);
	$pass = validate($_POST['pwd']);

	if(empty($uname)){
		echo "<script>location.replace('Login.php');</script>";
		
	}else if(empty($pass)){
		echo "<script>location.replace('Login.php');</script>";
	}else{
		$sql = "SELECT * FROM signup_tbl WHERE First_Name = '$uname' AND Password = '$pass'";

		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result)){
			$row = mysqli_fetch_assoc($result);
			if($row['First_Name'] === $uname && $row['Password'] === $pass){
				$_SESSION['First_Name'] = $row['First_Name'];
				$_SESSION['Last_Name'] = $row['Last_Name'];
				$_SESSION['SID'] = $row['SID'];
				echo "<script>location.replace('index.php');</script>";
		        
			}else{
			    echo "<script>location.replace(Login.php);</script>";
		}
		}else{
			echo "<script>location.replace(Login.php);</script>";
		}
	}

}else{
	echo "<script>location.replace(Login.php);</script>";
}

header_remove();
?>