<?php
session_start();


if (isset($_SESSION['SID']) && isset($_SESSION['First_Name'])) {
    $id = $_SESSION['SID'];
    $fname = $_SESSION['First_Name'];
} else {
    $id = "Not set";
    $fname = "";
}
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Home | Welcome to KINDOM OF eBOOKS Online Library</title>
    <link rel="stylesheet" type="text/css" href="Styles/Web_Style.css" />
    <link rel="stylesheet" type="text/css" href="Styles/Home_Style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            width: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.5)50%, rgba(0, 0, 0, 0.5)50%), url('Images/Image02.jpg');
            background-position: center;
            background-size: cover;

        }

        header {
            justify-content: left;
        }

        .welcome {
            width: 440px;
            padding-left: 20px;
            /* Add some padding to the left of the text for spacing */
        }

        .welcome h1 {
            text-align: left;
        }

        .logo img {
            padding-left: 90px;
        }
    </style>
</head>

<body>
    <header>

        <div class="welcome">
            <h1>Welcome Back, <?php echo $fname; ?></h1>To see your account, <a href="User_Details.php" id="user">Click Here!</a>
        </div>
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
            <li><a href="Contact.php">Contact Us</a></li>
            <li><a href="About.php">About us</a></li>
        </ul>
        <div class="main">
            <a href="Login.php"><button id="bttn2">Login</button></a>
            <a href="Logout.php"><button id="bttn4">LogOut</button></a>

        </div>

        <?php
        if (isset($_SESSION['SID']) && isset($_SESSION['First_Name'])) {
            echo "
                    <script>
                        document.getElementById('bttn4').classList.add('show');
                        document.getElementById('bttn2').classList.add('hide');
                    </script>
                ";
        } else {
            echo "
                    <script>
                        document.getElementById('bttn2').classList.add('show');
                        document.getElementById('bttn4').classList.add('hide');
                    </script>
                ";
        }

        ?>
    </div>


    <center>
        <br />
        <input type="search" name="srch" id="srch" placeholder="Search the option what you need to find" />
        <a href="Search.php"><input type="button" name="bttn2" id="bttn2" value="Search" style="margin-left: 10px;" /></a>
    </center>
    <br /><br />
    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <div class="text">MORE ABOUT US</div><br /><span class="text3">The <span class="maintxt">LARGEST</span> Online Book store<br />Covering<br />Entire world.</span>
            <img src="Images/Image05.jpg" style="width: 100%; height: 400px;">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <div class="text">MORE ABOUT US</div><br /><span class="text3">All books at <br /><span class="maintxt">ONE PLACE.</span></span>
            <img src="Images/Image06.jpg" style="width: 100%; height: 400px;">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <div class="text">MORE ABOUT US</div><br /><span class="text3">Can access <br /><span class="maintxt">EASILY.</span></span>
            <img src="Images/Image07.jpg" style="width: 100%; height: 400px; ">
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
    </div><br />

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
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>

    <div class="text">POPULAR BOOKS</div><br />
    <div class="book-container">
        <div class="book zoom">
            <img src="Images/Image08.jpg" />
        </div>
        <div class="book zoom">
            <img src="Images/Image09.jpg" />
        </div>
        <div class="book zoom">
            <img src="Images/Image10.jpg" />
        </div>
        <div class="book zoom">
            <img src="Images/Image11.jpg" />
        </div>
        <div class="book zoom">
            <img src="Images/Image12.jpg" />
        </div>
        <div class="book zoom">
            <img src="Images/Image13.jpg" />
        </div>

        <h4 class="link2 link-container"><a href="Search.php">Click here </a>For More Books</h4>

    </div>


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
        <h4 class="footer">Copyright @ 2024 KingdomOfEbooks | All rights reserved. | <a href="brEngines.com">Powered by BrEngine</a></h5>
</body>

</html>