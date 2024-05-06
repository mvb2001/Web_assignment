<?php
session_start();

if(isset($_SESSION['SID']) && isset($_SESSION['First_Name'])){

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Terms & Conditions</title>
    <link rel="stylesheet" type="text/css" href="Styles/Web_Style.css" />
    <link rel="stylesheet" type="text/css" href="Styles/About_Style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            width: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url('Images/Image20.jpg');
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
    <br />
    <div class="tbl2">
        <table border="0">
            <tr>
                <td>
                    <a href="About.php"><button id="btnn2" class="tdspace">ABOUT US</button></a><br />
                    <a href="#"><button id="btnn2"  class="tdspace">TERMS AND CONDITIONS</button></a><br />
                    <a href="Privacy_Policy.php" class="tdspace"><button id="btnn2">PRIVACY AND POLICIES</button></a><br />
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
                <td colspan="5">
                    <h1 class="topic">TERMS & CONDITIONS</h1>

                    <p class="para2">
                        <span class="main2">User Accounts:</span> Users are required to create an account to access the online library management system. They may need to provide accurate and up-to-date information during the registration process.
                    </p>
                    <p class="para2">
                        <span class="main2">User Responsibilities:</span> Users are responsible for maintaining the confidentiality of their account credentials and for all activities that occur under their account. They should not share their login information with others or use another person's account.
                    </p>
                    <p class="para2">
                        <span class="main2">Access and Usage:</span> Users are granted a non-exclusive, non-transferable right to access and use the online library management system for personal or educational purposes. Unauthorized use, including unauthorized access, modification, or distribution of the system's content, is strictly prohibited.
                    </p>
                    <p class="para2">
                        <span class="main2">Content:</span> The online library management system may provide access to various types of content, such as books, journals, articles, and multimedia resources. The system may specify the permitted use of these resources, including any restrictions on downloading, copying, printing, or distributing the content.
                    <p>
                    <p class="para2">
                        <span class="main2">Intellectual Property:</span> The intellectual property rights of the online library management system, including its content and software, are typically protected by copyright or other applicable laws. Users are expected to respect these rights and not engage in any activities that infringe upon them.
                    </p>
                    <p class="para2">
                        <span class="main2">Privacy and Data Security:</span> The system should outline its privacy policy, detailing how user data is collected, stored, and used. It should also address any security measures implemented to protect user information.
                    </p>
                    <p class="para2">
                        <span class="main2">Termination:</span> The system may specify conditions under which user accounts can be terminated or suspended, such as violation of terms and conditions or misuse of the system. Users may also have the right to terminate their account at any time.
                    </p>
                    <p class="para2">
                        <span class="main2">Limitation of Liability:</span> The system provider typically includes disclaimers regarding the accuracy, completeness, and availability of the system's content. They may also limit their liability for any damages or losses incurred while using the system.
                    </p>
                    <p class="para2">
                        <span class="main2">Governing Law and Jurisdiction:</span> The terms and conditions should specify the applicable law and jurisdiction that govern any disputes arising from the use of the online library management system.
                    </p>


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