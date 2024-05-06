<?php
	include_once 'Config.php';
?>
<?php
	$mCardNo=$_POST['cardNo'];
	$mName=$_POST['ownerName'];
	$exDate=$_POST['date'];
	$secureCode=$_POST['sCode'];


	$sql="INSERT INTO payments_tbl(PID, Card_Number, Owner_Name, Expire_Date, Security_Code)VALUES('', $mCardNo,'$mName','$exDate',$secureCode)";
	
	if(mysqli_query($conn,$sql))
	{
		echo "<script>alert('Payment created Successfully')</script>";
	}
	else
	{
		echo "<script>alert('Error in Payment')</script>";
	}
	
	//close the connection
	mysqli_close($conn);
?>

<?php
session_start();

if(isset($_SESSION['SID']) && isset($_SESSION['First_Name'])){

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <script src="Js/paymentsScript.js?v=<?php echo time(); ?>"></script>
    <title> Payments</title>
    <link rel="stylesheet" type="text/css" href="Styles/Web_Style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="Styles/Payments_Style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            width: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url('Images/Image19.jpg');
            background-position: center;
            background-size: cover;
        }
    </style>
</head>
<body>
<header>
<div class="logo">
        <a href="#" ><img src="Images/ss2new.png"></a>
    </div> 
    
    </header>
    <div class="navbar">
    <ul class="navbar">
    <li><a href="Index.php">Home</a></li>
        <li><a href="Search.php">Search</a></li>
        <li><a href="Payments.php">Payments</a></li>
        <li><a href="FAQ_Feedback.php">FAQ & Feedback</a></li>
        <li><a href="Contact.php">Contact Us</a></li>
        <li><a href="About.php" >About us</a></li>
    </ul>
    <div class="main">
        <a href="Login.php"><button id="bttn2" >LogOut</button></a>
        
    </div>
    </div>  
    <center>
    <h1 class="Payments">PAYMENTS</h1>
    <form action="SubmitPayments.php" method="POST">
        <h3>Your Total Payment is, LKR XXXX.00</h3>

        <label>Choose your payment option:</label><br />
            <input type="radio" id="op1" name="op" value="visa" checked/><i class="fa fa-cc-visa" style="color:navy;"></i>
            <input type="radio" id="op2" name="op" value="amex"/><i class="fa fa-cc-amex" style="color:blue;"></i>
            <input type="radio" id="op3" name="op" value="mastercard"/><i class="fa fa-cc-mastercard" style="color:red;"></i>
            <input type="radio" id="op4" name="op" value="discover"/><i class="fa fa-cc-discover" style="color:orange;"></i>
        <br /><br />
        <label>Enter Card Number: </label>
        <input type="text" name="cardNo" id="cardNo" placeholder="  xxxx-xxxx-xxxx-xxxx"  pattern="[0-9]{16}" required/><br /><br />
        <label>Enter Owner's Name: </label>
        <input type="text" name="ownerName" id="ownerName" placeholder="  Full Name" required /><br /><br />
        <label>Expire Date: </label>
        <input type="text" name="date" id="date" placeholder="  MM/YY" pattern="[0-9]{2}+/[0-9]{2}" required /><br /><br />
        <label>Enter Security Code: </label>
        <input type="text" name="sCode" id="sCode" required /><br /><br /><br />
        <div class="note">NOTE: All data are encrypted!</div><br /><br />
        <input type="submit" name="btnn4" id="btnn4" value="Pay" onclick="alertButton()" />
        <input type="reset" name="btnn4" id="btnn4" value="Reset" onclick="promptButton()" />
    </form>

    </center><br /><br />

    <div class="footer-main-div">
    <div class="footer-social">
        <ul>
        <li><a href="#" class="fa fa-facebook"></a></li>
        <li><a href="#" class="fa fa-twitter"></a></li>
        <li><a href="#" class="fa fa-instagram"></a></li>
        <li><a href="#" class="fa fa-youtube"></a></li>
    </div>
    <center>
    
    <table height="20" class="foot-last">
        <tr style="font-weight:bold;">
            <td>Contact Us:</td>
            <td>Quick Links:</td>
        </tr>
        <tr>
          <td>0716363643</td>
          <td>
                    <a href="Terms_Conditions.php">Terms and Conditions</a>
                </td>
                     
        </tr>
        <tr>
        <td>0742348993</td> 
        <td>
        <a href="FAQ_Feedback.php">FAQ & Feedback</a>
        </td>
        </tr>
        <tr>
        <td>0711305386</td> 
        <td>
        <a href="About.php">About Us</a>
        </td>
        </tr>
    </table>
    </center>
    <br>
    <hr>
    <h4 class="footer" >Copyright @ 2024 KingdomOfEbooks | All rights reserved. | <a href="brEngines.com">Powered by BrEngine</a></h5>

</div>

</body>
</html>

<?php
}else{
    header("Location: Login.php");
    exit();
}
?>
