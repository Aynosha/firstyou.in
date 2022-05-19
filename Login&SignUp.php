<?php
if(isset($_POST['Name'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        died("connection to this database failed due to " . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    $name = $_POST['Name'];
    $state = $_POST['State'];
    $address =$_POST['Address'];
    $problem=$_POST['Problem'];
    $city =$_POST['City'];
    $pincode =$_POST['Pincode'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $sql = "INSERT INTO `firstyou`.`client` (`Name`, `email`, `phone`, `address`, `state`, `city`, `pincode`,`problem`,`date`) VALUES ('$name', '$email', '$phone', '$address', '$state', '$city', '$pincode', '$problem', current_timestamp());";
    // echo $sql;

    $con->query($sql) == true;

    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="./Style/Login&SignUp/L-S-style.css">
    <link rel="icon" href="./Style/img/favicon.ico">
</head>
<body>
        <nav class="navbar">
            <img src="./style/img/favicon.ico" alt="Logo" class="Logo">
            <div class="Logo-content"><p>FirstYou <br>Company</p></div>
            <div class="navbar-a">
            <a href="#">Blog</a>
            <a href="./Login&SignUp.php">Login/Sign + 50Rs Offer</a>
            </div>
        </nav>
    <div id="bg-form-two">
        <h1>Your Details</h1>
        <p>PLease share your details.<br> You can also call any number in these numbers: 8051211958,8002142454</p>
        <form action="Login&SignUp.php" method="post" id="home-form">
            <input type="text" name="Name" id="Name" class="bg-form-name" placeholder="Name: (required)">
            <input type="email" name="Email" id="Email" class="bg-form-name" placeholder="Email: (required)">
            <input type="text" name="Phone" id="Phone" class="bg-form-name" placeholder="Phone Number: (required)">
            <input type="text" name="Address" id="Address" class="bg-form-name" placeholder="Address: (required)">
            <input type="text" name="City" id="City" class="bg-form-name" placeholder="City: (required)">
            <input type="text" name="Pincode" id="Pincode" class="bg-form-name" placeholder="PinCode: (required)">
            <input type="text" name="State" id="State" class="bg-form-name" placeholder="State: (required)">
            <input type="text" name="Problem" id="Problem" class="bg-form-name" placeholder="Mention the Problem:">
            <br>
            <button class="btn" id="submit">Submit</button>
        </form>   
</body>
</html>
 