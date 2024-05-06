<?php
include_once 'Config.php';

session_start();

if (isset($_SESSION['SID']) && isset($_SESSION['First_Name'])) {

    $name = $_SESSION['First_Name'];
    $sql = "SELECT * FROM signup_tbl WHERE First_Name='null'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
} else {
    $name = "Not Set until log";
    echo "<script>alert('You need to log first');</script>";
}




?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <script src="Js/contactScript.js?v=<?php echo time(); ?>"></script>
    <link rel="stylesheet" type="text/css" href="Styles/Web_Style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="Styles/Contact_Style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contact Us </title>
    <style>
        body {
            width: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.5)50%, rgba(0, 0, 0, 0.5)50%), url('Images/Image21.jpg');
            background-position: center;
            background-size: cover;

        }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <a href="#"><img src="Images/ss2new.png"></a>
        </div>

    </header>
    <div class="navbar">
        <ul class="navbar">
            <li><a href="Index.php">Home</a></li>
            <li><a href="Search.php">Search</a></li>
            <li><a href="Payments.php">Payments</a></li>
            <li><a href="FAQ_Feedback.php">FAQ & Feedback</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="About.php">About us</a></li>
        </ul>
        <div class="main">
            <a href="Login.php"><button id="bttn2">LogOut</button></a>
        </div>
    </div>


    <br />
    <center>
        <table border="0" width="100%">
            <tr>
                <td colspan="2">
                    <h1 class="contact">CONTACT US</h1>
                </td>
            </tr>
            <tr>
                <td>
                    <form action="SubmitContact.php" method="POST">
                        <label>Enter your First Name: </label>
                        <Input type="text" name="fname" id="fname" value="<?php if(isset($row["First_Name"])){
                            echo $row["First_Name"];
                        }else{
                            echo "Not Set";
                        }?>"><br><br>

                        <label>Enter your Last Name: </label>
                        <Input type="text" name="lname" id="lname" style="margin-left: 55px;" value="<?php if(isset($row["First_Name"])){
                            echo $row["Last_Name"];
                        }else{
                            echo "Not Set";
                        }?>"><br><br>

                        <label>Enter your T.P Number: </label>
                        <input type="text" name="tel" id="tel" style="margin-left: 47px;" value="<?php if(isset($row["First_Name"])){
                            echo $row["Telephone_Number"];
                        }else{
                            echo "Not Set";
                        }?>"><br><br>

                        <label>Enter your Email: </label>
                        <input type="email" name="email" id="email" style="margin-left: 88px;" value="<?php if(isset($row["First_Name"])){
                            echo $row["Email"];
                        }else{
                            echo "Not Set";
                        }?>"><br><br>

                        <label>Any Issues: </label><br>
                        <textarea name="issue" id="issue" placeholder="What you need?"></textarea><br><br><br>

                        <input type="submit" id="btnn4" name="btnn4" value="Submit">
                        <input type="reset" id="btnn4" name="btnn4" value="Reset" onclick="promptButton()">
                </td>
                <td>
                    <table border="0" style="background-color: rgba(250,250, 250, 0.5); width: 650px; height: 520px; font-family: Calibri; font-size: 19px;">
                        <tr>
                            <td colspan="2">
                                <h3>If you have any issues, please contact us!</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="fa fa-phone"></a><span class="title1">Contact us:</span><br>
                                <div class="tel">

                                    071-6363643<br>
                                    074-2348993<br>
                                    071-1305386<br>
                                </div><br>
                            </td>
                            <td>
                                <a href="#" class="fa fa-map"></a><span class="title1">Location:</span><br>
                                <div class="location">
                                    Customer Care Services,<br>
                                    422/1/A,<br>
                                    Colombo 07,<br>
                                    Sri Lanka<br>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="fa fa-envelope"></a><span class="title1">Email:</span><br>
                                <div class="cEmail">kindomofebooks39@gmail.com</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="fa fa-facebook"></a>/kindomofebooks<br>
                                <a href="#" class="fa fa-twitter"></a> kindomofebooks_Feedbacks<br>
                                <a href="#" class="fa fa-instagram"></a> kindomofebooks_Public<br>
                                <a href="#" class="fa fa-youtube"></a> KindomOfEbooks<br>
                            </td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                        </tr>
                    </table>
                </td>
            </tr>


        </table>
    </center>
    <br><br>
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
        <h4 class="footer">Copyright @ 2024 KingdomOfEbooks | All rights reserved. | <a href="brEngines.com">Powered by BrEngine</a></h5>

    </div>

</body>

</html>