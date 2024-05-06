<?php
	include_once'Config.php';
?>

<?php
session_start();

if(isset($_SESSION['SID']) && isset($_SESSION['First_Name'])){

$name = $_SESSION['First_Name'];
				
				$sql = "SELECT * FROM signup_tbl WHERE First_Name='$name'";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <script src="Js/signupScript.js"></script>
    <title>Kindom of Ebooks | User Profile</title>
    <link rel="stylesheet" type="text/css" href="Styles/Web_Style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="Styles/SignUp_Style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            width: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url('Images/Image23.png');
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
        <a href="Logout.php"><button id="bttn2" >LogOut</button></a>
        
    </div>
    </div>  
        <br /><br />

        <form action="editUser.php" method="POST" onsubmit="return checkPassword()">

        <?php
				
				
				$name = $_SESSION['First_Name'];
				
				$sql = "SELECT * FROM signup_tbl WHERE First_Name='$name'";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);
    	?>
            <table border="0" width="100%">
                <tr>
                    <td colspan="2">
                        <h1 class="Signup">USER PROFILE:</h1><br />
                    </td>
                    <td rowspan="8">
                        <div class="vl"></div>
                    </td>
                    <td rowspan="8">
                        <div class="img04"><img src="Images/Image04.png" width="300px" height="300px;"/></div><br />
                        <br /><br /><br />
                        <div class="note2">NOTE:</div><br />
                        <div class="subNote2">
                            01. Size of the image should be under 2MB.<br />
                            02. You can upload the image in JPG or PNG format.
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>First Name: </label><br />
                        <input type="text" name="fname" id="fname" value="<?php echo $row['First_Name']; ?>" />
                    </td>
                    <td>
                        <label>Last Name: </label><br />
                        <input type="text" name="lname" id="lname" value="<?php echo $row['Last_Name']; ?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <br />
                        <label>NIC Number: </label><br />
                        <input type="text" name="nic" id="nic" value="<?php echo $row['NIC']; ?>" />
                    </td>
                    <td>
                        <br />
                        <label>Age: </label><br />
                        <input type="text" name="age" id="age" value="<?php echo $row['Age']; ?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <br />
                        <label>VALID Telephone Number: </label><br />
                        <input type="text" name="tel" id="tel" pattern="[0-9]{10}" value="<?php echo $row['Telephone_Number']; ?>" />
                    </td>
                    <td>
                        <br />
                        <label>EMAIL Address: </label><br />
                        <input type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" value="<?php echo $row['Email']; ?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <br />
                        <label>Your password: </label><br />
                        <input type="password" name="pwd1" id="pwd1" value="<?php echo $row['Password']; ?>" />
                    </td>
                    <td>
                        <br />
                        <label>Re-entered password: </label><br />
                        <input type="password" name="cfrmpwd1" id="cfrmpwd1" value="<?php echo $row['Re_Password']; ?>"/>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2">
                        <br />
                        <input type="submit" style="margin-left: 175px;" id="btnn1" value="Update Profile" onclick="alertButton()" />
                    </td>
                    
                </tr>
               
            </table><br />
        </form>


        <br /><br />
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