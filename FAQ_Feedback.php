<?php
include_once 'Config.php';
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
    <script src="Js/FaqFeedbackScript.js?v=<?php echo time(); ?>"></script>
    <title> FAQ & Feedbacks | FAQs</title>
    <link rel="stylesheet" type="text/css" href="Styles/Web_Style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="Styles/FAQ_Feedback_Style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            width: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url('Images/Image22.jpg');
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
    <br />
    <div class="tbl2">

        <table border="0">
            <tr>
                <td>
                    <a href="#" class="tdspace"><button id="btnn2">FAQs</button></a><br />
                    <a href="Feedbacks.php" class="tdspace"><button id="btnn2">Feedbacks</button></a><br />
                </td>
                <td>
                    <div class="vl"></div>
                </td>
                <td>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td colspan="2">
                    <form action="submitFAQ.php" method="post">
                        <h1 class="topic">FAQs</h1>
                        <h4 class="topic">Do you need a help?</h4>
                        <label>Enter your username: </label>
                        <input type="text" name="uname" id="uname" value="<?php echo $row['First_Name']; ?>" /><br /><br />
                        <label>Enter your Email: </label>
                        <input type="text" name="uemail" id="uemail"  value="<?php echo $row['Email']; ?>" style="margin-left: 280px;"  /><br /><br />
                        <label>Type your problem what you need to solve: </label><br /><br />
                        <textarea name="question" id="question" placeholder="Your problem"></textarea><br /><br />
                        <input type="submit" id="btnn5" value="Submit" onclick="alertButton()" />
                        <input type="reset" id="btnn5" value="Reset" onclick="promptButton()" /><br />
                    </form>
                    <h4 class="topic2">Answered Questions: </h4>
                    <table border="0" style="background-color: black; width: 950px; height: 100px;">
                        <tr>
                            <td>
                                <div class="num">Q1.</div>
                            </td>
                            <td>
                                <div style="text-align: justify; color: white; font-weight: bold; margin-left: 200px;">How do we log in to  the system?</div>
                            </td>
                        </tr>
                    </table><br />
                    <table border="0" style="background-color: white; width: 950px; height: 100px;">
                        <tr>
                            <td>
                                <div class="num" style="color: black;">A1.</div>
                            </td>
                            <td>
                                <div style="text-align: justify; font-weight: bold;">
                                    First, you need to sign up for the system by clicking on the sign up button. After that, you need to give the
                                    details what is asking from you. Then, you need to click on submit button. After that, you will be shown the successful message.
                                    Finally, you can log in to the system.
                                </div>
                            </td>
                        </tr>
                    </table>

                </td>


        </table>
    </div><br />


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