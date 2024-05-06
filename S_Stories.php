<?php
session_start();

if(isset($_SESSION['SID']) && isset($_SESSION['First_Name'])){

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Search your book | Short Stories</title>
    <link rel="stylesheet" type="text/css" href="Styles/Web_Style.css" />
    <link rel="stylesheet" type="text/css" href="Styles/Search_Style.css" />
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
                        <h1 class="topic">SHORT STORIES</h1>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="Search.php"><button id="btnn2">NOVELS</button></a><br />
                        <a href="Frictions.php"><button id="btnn2">FRICTIONS</button></a><br />
                        <a href="H_Frictions.php"><button id="btnn2">HISTORICAL FRICTIONS</button></a><br />
                        <a href="S_Frictions.php"><button id="btnn2">SCIENCE FRICTIONS</button></a><br />
                        <a href="L_Frictions.php"><button id="btnn2">LITERARY FRICTIONS</button></a><br />
                        <a href="#"><button id="btnn2">SHORT STORIES</button></a><br />
                        <a href="F_Stories.php"><button id="btnn2">FANTACY STORIES</button></a><br />
                        <a href="T_Books.php"><button id="btnn2">TEXT BOOKS</button></a><br />
                        <a href="P_Books.php"><button id="btnn2">PICTURE BOOKS</button></a><br />
                    </td>
                    <td>
                        <div class="vl"></div>
                    </td>
                    <td>
                        <img class="book" src="Images/N88.jpg" />
                        <img class="book" src="Images/N89.jpg" />
                        <img class="book" src="Images/N90.jpg" />
                        <img class="book" src="Images/N91.jpg" />
                        <img class="book" src="Images/N92.jpg" />
                        <img class="book" src="Images/N93.jpg" />
                        <img class="book" src="Images/N94.jpg" />
                        <img class="book" src="Images/N95.jpg" />
                        <img class="book" src="Images/N96.jpg" />
                        <img class="book" src="Images/N97.jpg" />
                        <img class="book" src="Images/N98.jpg" />
                        <img class="book" src="Images/N99.jpg" />
                        <img class="book" src="Images/N100.jpg" />
                        <img class="book" src="Images/N101.jpg" />
                        <img class="book" src="Images/N102.jpg" />
                        <img class="book" src="Images/N103.jpg" />
                        <img class="book" src="Images/N104.jpg" />
                        <img class="book" src="Images/N105.jpg" />
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