<?php
session_start();

// if($_POST){
// $servername = "localhost";
// $username = "root";
// $password = "root";
// $dbname = "OneWay";

// // Create connection
// $conn = new mysqli($servername, $username, $password,$dbname);


// if (isset($_POST['submit'])){
//     if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['password'])){
    
//         $email = $_POST['email'];
//         $password = $_POST['password'];
//         $query = "SELECT * from CUSTOMERS where EMAIL='$email' and PWD='$password'";
//         $result = mysqli_query($conn,$query);
//         if(mysqli_num_rows($result)==1){
//             session_start();
//             // $_SESSION['OneWay'] = 'true';
//             $_SESSION['user'] = $email;

//             header('location:flights.php?login=success');
//         } else{
//             header('location:login.php?login=failed');
//         }
// // }

    
    

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>One-Way</title>  
</head>
<body class="paymentBody">

    <div class="headerBar">
        <img src="img/logo.png" alt="">
        <a href="./Profile.html">
          <img src="img/user.png" class="user" alt="">
        </a>
    </div>
        <br> <br> 
        <div class="userCard">
            <img src="img/profile.png" alt="">

            <p><?php 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "OneWay";


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

$query= mysqli_query($connection, "SELECT FNAME from CUSTOMERS where EMAIL='$_SESSION[‘user’]' ");

$fetch=mysqli_fetch_assoc($connection, $query);

$name= $fetch['FNAME'];

// $result = mysqli_query( "SELECT FNAME from CUSTOMERS where EMAIL='dl@gmail.com' ");
// $row = mysqli_fetch_row($result);
// echo $row[0];
 ?> </p>

            <p class="email"><?php echo $_SESSION['user']; ?>.</p>
            <p> <span>3</span> Past Flights</p>
        </div>
        <div class="acctHeader">
            Past Flights
        </div>
        <div class="accountInfo">
            <div class="item">
                <div class="itemImg">
                    <img src="img/plane.png" alt="">
                </div>
                <div class="previous"> 
                    <p><span class="prevFlight">Flight 25695 (04/21/2021)</span> 
                    </p> 
                    <br>
                    <div class="depArr">
                        <p><span class="city">Depature: Barcelona (10:30 AM) </span> <img src="img/arrow.png" alt=""> </p>
                        <p><span class="city">Arrival: Rome (3:30 PM) </span> </p>
                    </div>
                    
                </div>
                <div class="paidAmount">
                    <p>*****4568</p>
                    <p class="price price2"><sup>$</sup>93<sub>USD</sub></p>

                </div>
                
            </div>
            <div class="item">
                <div class="itemImg">
                    <img src="img/plane.png" alt="">
                </div>
                <div class="previous">
                    <p><span class="prevFlight">Flight 41555 (03/18/2021)</span> 
                    </p> 
                    <br>
                    <div class="depArr">
                        <p><span class="city">Depature: New York (11:30 AM) </span> <img src="img/arrow.png" alt=""> </p>
                        <p><span class="city">Arrival: Atlanta (1:00 PM) </span> </p>
                    </div>
                    
                </div>
                <div class="paidAmount">
                    <p>*****4568</p>
                    <p class="price price2"><sup>$</sup>93<sub>USD</sub></p>

                </div>
                
            </div>
            <div class="item">
                <div class="itemImg">
                    <img src="img/plane.png" alt="">
                </div>
                <div class="previous">
                    <p><span class="prevFlight">Flight 12188 (12/28/2020)</span> 
                    </p> 
                    <br>
                    <div class="depArr">
                        <p><span class="city">Depature: New York (11:30 AM) </span> <img src="img/arrow.png" alt=""> </p>
                        <p><span class="city">Arrival: Atlanta (1:00 PM) </span> </p>
                    </div>
                </div>
                <div class="paidAmount">
                    <p>*****4568</p>
                    <p class="price price2"><sup>$</sup>93<sub>USD</sub></p>

                </div>
                
            </div>
           
        </div>
       
    
</body>
</html>