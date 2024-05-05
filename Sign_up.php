<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <script src="Js/signupScript.js"></script>
    <title>Sign Up | Kindom of Ebooks</title>
    <link rel="stylesheet" type="text/css" href="Styles/Web_Style.css" />
    <link rel="stylesheet" type="text/css" href="Styles/SignUp_Style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            width: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url('Images/Image01.jpg');
            background-position: center;
            background-size: cover;
        }
        header{
            display:flex;
            justify-content:center;
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
        <a href="Login.php"><button id="bttn2" >Login</button></a>
        <a href="Sign_up.php"><button id="bttn2">Sign Up</button></a>
    </div>
    </div>  
        <br /><br />

        <form action="SubmitDetails.php" method="POST" onsubmit="return checkPassword()">
            <table border="0" width="100%">
                <tr>
                    <td colspan="2">
                        <h1 class="Signup">SIGN UP:</h1><br />
                    </td>
                    <td rowspan="8">
                        <div class="vl"></div>
                    </td>
                    <td rowspan="8">
                        <div class="img04"><img src="Images/Image04.png" width="300px" height="300px;"/></div><br />
                        <input type="file" id="file1" /><br />
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
                        <label>Enter your First Name: </label><br />
                        <input type="text" name="fname" id="fname" placeholder="First Name" required />
                    </td>
                    <td>
                        <label>Enter your Last Name: </label><br />
                        <input type="text" name="lname" id="lname" placeholder="Last Name" required />
                    </td>
                </tr>
                <tr>
                    <td>
                        <br />
                        <label>Enter your NIC Number: </label><br />
                        <input type="text" name="nic" id="nic" placeholder="NIC Number" pattern="[0-9]{12}" required />
                    </td>
                    <td>
                        <br />
                        <label>Enter your age: </label><br />
                        <input type="text" name="age" id="age" placeholder="Age" required />
                    </td>
                </tr>
                <tr>
                    <td>
                        <br />
                        <label>Enter your VALID Telephone Number: </label><br />
                        <input type="text" name="tel" id="tel" placeholder="07X XXXXXXX" pattern="[0-9]{10}" required />
                    </td>
                    <td>
                        <br />
                        <label>Enter your EMAIL Address: </label><br />
                        <input type="email" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required />
                    </td>
                </tr>
                <tr>
                    <td>
                        <br />
                        <label>Enter a strong password: </label><br />
                        <input type="password" name="pwd1" id="pwd1" placeholder="Password" required />
                    </td>
                    <td>
                        <br />
                        <label>Re-enter the password: </label><br />
                        <input type="password" name="cfrmpwd1" id="cfrmpwd1" placeholder="Password" required />
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <br />
                        <label>
                            <input type="checkbox" name="TandC" id="TandC" >I accept all Terms and Conditions
                        </label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <br />
                        <div class="note1">NOTE: To verify your account, please check your email.</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br />
                        <input type="submit" id="btnn1" value="Submit" onclick="alertButton()" />
                    </td>
                    <td>
                        <br />
                        <input type="reset" id="btnn1" value="Reset" onclick="promptButton()" />
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <h4 class="link1">Already have an account, <a href="Login.php">Log in</a></h4>
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
    <h4 class="footer" >Copyright @ 2024 KingdomOfEbooks | All rights reserved. | <a href="brEngines.com">Powered by BrEngine</a></h4>
</div>
</body>
</html>