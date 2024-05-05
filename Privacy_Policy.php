<?php
session_start();

if(isset($_SESSION['SID']) && isset($_SESSION['First_Name'])){

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Privacy & Policies</title>
    <link rel="stylesheet" type="text/css" href="Styles/Web_Style.css" />
    <link rel="stylesheet" type="text/css" href="Styles/Home_Style.css" />
    <link rel="stylesheet" type="text/css" href="Styles/About_Style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
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
    
    <a href="Logout.php"><button id="bttn2" >Log Out</button></a>
        
    </div>
    </div>  
    <br />
    <div class="tbl2">
        <table border="0">
            <tr>
                <td>
                    <a href="About.php"><button id="btnn2" class="tdspace">ABOUT US</button></a><br />
                    <a href="Terms_Conditions.php"><button id="btnn2" class="tdspace">TERMS AND CONDITIONS</button></a><br />
                    <a href="#"><button id="btnn2" class="tdspace">PRIVACY AND POLICIES</button></a><br />
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
                    <h1 class="topic">PRIVACY & POLICIES</h1>
                    <p class="para2">
                        <span class="main2">Data Collection:</span> The privacy policy should clearly outline the types of data that the library management system collects from its users. This may include personal information such as names, contact details, and account credentials, as well as transactional data related to library activities.
                    </p>
                    <p class="para2">
                        <span class="main2">Data Usage:</span> The policy should explain how the collected data is used by the library management system. This may involve utilizing personal information to create user accounts, process transactions, improve services, and provide personalized recommendations.
</p>
                    <p class="para2">
                        <span class="main2">Data Storage and Security:</span> The policy should describe how the system handles the storage and security of user data. It should address measures taken to protect data against unauthorized access, breaches, or loss. This may include encryption, firewalls, access controls, and regular data backups.
</p>

                    <p class="para2">
                        <span class="main2">Third-Party Sharing:</span> If the library management system shares user data with third parties, such as library partners or service providers, the policy should disclose the nature of such sharing and the purpose behind it. It should also specify if any user consent is required for such sharing.
</p>
                    <p class="para2">
                        <span class="main2">Cookies and Tracking:</span> If the system uses cookies or other tracking technologies, the policy should inform users about their purpose and the information they collect. It should also mention if users have the option to disable or manage these technologies.
</p>
                    <p class="para2">
                        <span class="main2">User Rights and Choices:</span> The policy should inform users about their rights regarding their personal data, such as the right to access, rectify, or delete their information. It should also explain how users can exercise these rights and manage their privacy preferences within the system.
</p>
                    <p class="para2">
                        <span class="main2">Legal Compliance:</span> The policy should outline how the library management system complies with relevant laws and regulations, such as data protection and privacy laws in the jurisdiction(s) where it operates. It may include information about data transfer mechanisms, lawful bases for data processing, and procedures for handling data subject requests.
</p>
                    <p class="para2">
                        <span class="main2">Updates to the Policy:</span> The policy should clarify how updates or changes to the privacy policy will be communicated to users. It is important for users to be aware of any modifications that may affect their privacy rights.
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