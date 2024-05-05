<?php
session_start();

if(isset($_SESSION['SID']) && isset($_SESSION['First_Name'])){

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Search your book | Fantacy Stories</title>
    <link rel="stylesheet" type="text/css" href="Styles/Web_Style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="Styles/Search_Style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
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
    
    <a href="Logout.php"><button id="bttn2" >Log Out</button></a>
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
                        <h1 class="topic">FANTACY STORIES</h1>
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
                        <img class="book" src="Images/N106.jpg" />
                        <img class="book" src="Images/N107.jpg" />
                        <img class="book" src="Images/N108.jpg" />
                        <img class="book" src="Images/N109.jpg" />
                        <img class="book" src="Images/N110.jpg" />
                        <img class="book" src="Images/N111.jpg" />
                        <img class="book" src="Images/N112.jpg" />
                        <img class="book" src="Images/N113.jpg" />
                        <img class="book" src="Images/N114.jpg" />
                        <img class="book" src="Images/N115.jpg" />
                        <img class="book" src="Images/N116.jpg" />
                        <img class="book" src="Images/N117.jpg" />
                        <img class="book" src="Images/N118.jpg" />
                        <img class="book" src="Images/N119.jpg" />
                        <img class="book" src="Images/N120.jpg" />
                        <img class="book" src="Images/N121.jpg" />
                        <img class="book" src="Images/N122.jpg" />
                        <img class="book" src="Images/N123.jpg" />
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
?>