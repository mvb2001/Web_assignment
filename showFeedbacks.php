<?php
    include_once 'Config.php';
?>
<?php
session_start();

if(isset($_SESSION['SID']) && isset($_SESSION['First_Name'])){

?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title> Feedbacks | Kindom of Ebooks</title>
    <link rel="stylesheet" type="text/css" href="Styles/Web_Style.css" />
    <link rel="stylesheet" type="text/css" href="Styles/Login_Style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

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
    <center>
        <div class="container my-5">
            <h1>Members' Feedbacks</h1>
            <h4 style="font-family: Calibri;">Your Feedbacks are valuable for us forever!</h4><br>
            <table class="table">
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Feedback</th>
            </tr>
            <?php
                $sql="SELECT * FROM feedback_tbl";
                $result=$conn->query($sql);

                if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
                        echo "
                        <tr>
                            <td>$row[Username]</td>
                            <td>$row[Email]</td>
                            <td>$row[Feedback]</td>
                            <td>
                                <a class='btn btn-danger btn-sm' href='deleteFeedback.php?Email=$row[Email]'>Delete</a>
                            </td>

                        </tr>";

                        
                    }
                }else{
                    echo "Empty Rows!";
                }
                echo "<script>alert('Task Completed!')</script>";

            echo "</table>";

            mysqli_close($conn);

            ?>
            <br>
            <a href="Feedbacks.php"><button id="btnn1">Go Back</button></a>
        </div>

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