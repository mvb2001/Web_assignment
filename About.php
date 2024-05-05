<?php
session_start();

if(isset($_SESSION['SID']) && isset($_SESSION['First_Name'])){

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>About Us</title>
    <link rel="stylesheet" type="text/css" href="Styles/Web_Style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="Styles/Home_Style.css" />
    <link rel="stylesheet" type="text/css" href="Styles/About_Style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            width: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url('Images/Image20.jpg');
            background-position: center;
            background-size: cover;
        }
           
            .slideimg{
                width: 950px; height: 400px; margin-top: -30px;
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
        <li><a href="#" >About us</a></li>
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
                    <a href="#" class="tdspace"><button id="btnn2">ABOUT US</button></a><br/>
                    <a href="Terms_Conditions.php" class="tdspace"><button id="btnn2">TERMS AND CONDITIONS</button></a><br />
                    <a href="Privacy_Policy.php" class="tdspace"><button id="btnn2">PRIVACY AND POLICIES</button></a><br />
                </td>
                <td>
                    <div class="vl"></div>
                </td>
                <td>

                </td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                <td colspan="5">
                    <h1 class="topic">ABOUT US</h1>
                
                    <!-- Slideshow container -->
                    <div class="slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                            <div class="numbertext">1 / 4</div>
                            <div class="text"></div><br /><span class="text3">The <span class="maintxt">LARGEST</span> Online Book store<br />Covering<br />Entire world.</span>
                            <img src="Images/Image05.jpg" class="slideimg" >
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">2 / 4</div>
                            <div class="text"></div><br /><span class="text3">All books at <br /><span class="maintxt">ONE PLACE.</span></span>
                            <img src="Images/Image06.jpg" class="slideimg">
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">3 / 4</div>
                            <div class="text"></div><br /><span class="text3">Can access <br /><span class="maintxt">EASILY.</span></span>
                            <img src="Images/Image07.jpg" class="slideimg">
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">4 / 4</div>
                            <div class="text"></div><br /><span class="text3"><span class="maintxt">EASY</span><br />And<br /><span class="maintxt">TRUSTABLE</span><br />Payment Gateway.</span>
                            <img src="Images/Image19.jpg" class="slideimg" >
                        </div>

                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <br>

                    <!-- The dots/circles -->
                    <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                        <span class="dot" onclick="currentSlide(4)"></span>
                    </div>
                    <br />

                    <script>
                        let slideIndex = 1;
                        showSlides(slideIndex);

                        function plusSlides(n) {
                            showSlides(slideIndex += n);
                        }

                        function currentSlide(n) {
                            showSlides(slideIndex = n);
                        }

                        function showSlides(n) {
                            let i;
                            let slides = document.getElementsByClassName("mySlides");
                            let dots = document.getElementsByClassName("dot");
                            if (n > slides.length) { slideIndex = 1 }
                            if (n < 1) { slideIndex = slides.length }
                            for (i = 0; i < slides.length; i++) {
                                slides[i].style.display = "none";
                            }
                            for (i = 0; i < dots.length; i++) {
                                dots[i].className = dots[i].className.replace(" active", "");
                            }
                            slides[slideIndex - 1].style.display = "block";
                            dots[slideIndex - 1].className += " active";
                        }
                    </script><br />
                    <p class="para1">
                        Kingdom of Ebooks online library is the largest book store who is covering the entire world. We are carring,</p><div class="main1">20M+ USER BASE</div><div class="main1">20M+ BOOK SERIES</div>
                    <p class="para1">
                        We have an ability to introduce a whopping experience for our readers
                        from our resources. Not only that, we provided a huge, secure and easy payment gateway platform for our users. We have a huge publisher base who are covering
                        the entire world. We are protecting our users and their person informations since starting point. Our user payments details are also encrypted since 2000s. 
                        So, we are proud to say that Kingdom of Ebooks is the famous online library among people now.
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