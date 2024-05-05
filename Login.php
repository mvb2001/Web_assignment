<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title> Login | Kindom of Ebooks</title>
    <link rel="stylesheet" type="text/css" href="Styles/Web_Style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="Styles/Login_Style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            width: 100%;
            background: linear-gradient(to top, rgba(41,37,37,0.5)50%,rgba(41,37,37,0.5)50%),url('Images/BackImg2.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        header{
            display:flex;
            justify-content:center;
        }
        .logo img{
            padding-left:0px;
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
       
        <a href="Sign_up.php"><button id="bttn2">Sign Up</button></a>
    </div>
    </div>  
    
    
    

    
    
        <br/><br/>
            
                <form action="action.php" method="POST">
                    <center>
                        <font class="Login">LOG IN</font><br>
                        <h3 class="txt1">Enter your Login credentials</h3>
                        <?php if(isset($_GET['error'])) {?>
                            <p class="error" style="color: red;"><?php echo $_GET['error']; ?></p>
                        <?php }?>
                        <input type="text" placeholder="   Enter your First Name as your username" name="uname" id="uname"><br /><br />
                        <input type="password" placeholder="   Password" name="pwd" id="pwd" ><br /><br />
                        <label>
                            <input type="checkbox" name="remember">Remember me
                        </label><br/>
                        <span class="psw"><a href="User_Details.php" style="color:#FD2D1B;"><h3 class="txt1">Forgot password?</h3></a></span>
                        <button type="submit" id="btnn1">Log in</button>
                        <br/>
                        <h3 class="txt1">If you don't have an account,</h3>
                        <a href="Sign_up.php"><input type="button" id="btnn1" value="Sign up"/></a>
                    </center>
                </form>
    <br/><br/><br/>



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




















