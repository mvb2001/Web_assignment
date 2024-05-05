<?php
session_start();

if(isset($_SESSION['SID']) && isset($_SESSION['First_Name'])){

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Search your book | Text Books</title>
    <link rel="stylesheet" type="text/css" href="Styles/Web_Style.css" />
    <link rel="stylesheet" type="text/css" href="Styles/Search_Style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            width: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url('Images/Image18.jpg');
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
    <a href="Login.php"><button id="bttn2" >Login</button></a>
    <a href="Logout.php"><button id="bttn2" >LogOut</button></a>
    </div>
    </div>  


        <br /><br />

        <div class="tbl2">
            <table border="0">
                <tr>
                    <td>
                        <div class="text">CATEGORIES:</div>
                    </td>
                    <td colspan="5">
                        <input type="search" name="srch1" id="srch1" placeholder="   Search the book category you prefer" />
                        <button id="btnn1">Search</button>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="5">
                        <h1 class="topic">TEXT BOOKS</h1>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="Search.php"><button id="btnn2">NOVELS</button></a><br />
                        <a href="Frictions.php"><button id="btnn2">FICTIONS</button></a><br />
                        <a href="H_Frictions.php"><button id="btnn2">HISTORICAL FICTIONS</button></a><br />
                        <a href="S_Frictions.php"><button id="btnn2">SCIENCE FICTIONS</button></a><br />
                        <a href="L_Frictions.php"><button id="btnn2">LITERARY FICTIONS</button></a><br />
                        <a href="S_Stories.php"><button id="btnn2">SHORT STORIES</button></a><br />
                        <a href="#"><button id="btnn2">FANTACY STORIES</button></a><br />
                        <a href="T_Books.php"><button id="btnn2">TEXT BOOKS</button></a><br />
                        <a href="P_Books.php"><button id="btnn2">PICTURE BOOKS</button></a><br />
                    </td>
                    <td>
                        <div class="vl"></div>
                    </td>
                    <td>
                        <img class="book" src="Images/N124.jpg" />
                        <img class="book" src="Images/N125.jpg" />
                        <img class="book" src="Images/N126.jpg" />
                        <img class="book" src="Images/N127.jpg" />
                        <img class="book" src="Images/N128.jpg" />
                        <img class="book" src="Images/N129.jpg" />
                        <img class="book" src="Images/N130.jpg" />
                        <img class="book" src="Images/N131.jpg" />
                        <img class="book" src="Images/N132.jpg" />
                        <img class="book" src="Images/N133.jpg" />
                        <img class="book" src="Images/N134.jpg" />
                        <img class="book" src="Images/N135.jpg" />
                        <img class="book" src="Images/N136.jpg" />
                        <img class="book" src="Images/N137.jpg" />
                        <img class="book" src="Images/N138.jpg" />
                        <img class="book" src="Images/N139.jpg" />
                        <img class="book" src="Images/N140.jpg" />
                        <img class="book" src="Images/N141.jpg" />
                    </td>
                </tr>
            </table>
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
    <h4 class="footer" >Copyright @ 2024 KingdomOfEbooks | All rights reserved. | <a href="brEngines.com">Powered by BrEngine</a></h5>

</div>


</body>
</html>

<?php
}else{
    header("Location: Login.php");
    exit();
}