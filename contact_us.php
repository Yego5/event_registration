<?php

$server ="localhost";
$username ="root";
$password ="";
$database ="Classwork";

$conn = mysqli_connect($server,$username,$password,$database);

    if (!$conn){
       
          echo "error occured".mysqli_error($conn);
      }
  
      if( isset( $_POST["submitButton"]))
        {
              $firstname = $_POST['firstname'];
              $firstname = $_POST['firstname'];
              $phone =$_POST['phone'];
              $email = $_POST['email'];
              $message =$_POST['message'];

              $sql = mysqli_query($conn, "INSERT INTO eventwebsite(firstname,lastname,phone, email,message)
               VALUES('$firstname','$lastname','$phone','$email','$message')");
  
       
          if($sql)
              {
              echo "Data inserted Successfuly";
              }
          else
          {
              echo "error occered";
          }
        }

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
   <!-- Navication bar -->
    <nav class="navbar navbar-expand-lg bg-light shadow " style="background-color: #71B6FD !important;">
        <div class="container-fluid">
            <a href="#" class="navbar-brand text-white">ExpoEvent</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menuitems"
                aria-controls="menuitems" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> 
            </button>
            
            <div class="collapse navbar-collapse" id="menuitems"> 
                <div class="navbar-nav">
                    <a href="index.php" class="nav-link text-white">Home</a>
                    <a href="about_us.php" class="nav-link text-white">About Us</a>
                    <a href="contact_us.php" class="nav-link text-white">Contact Us</a> 
                    <button class="btn btn-primary rounded-0">Register</button>
                </div>
            </div> 
        </div >
    </nav>

    <!-- Hero section -->
    <main class="bg-light py-5" style="background-color: #71B6FD !important;">
        <section style="color:white; padding-left: 30px; text-align: center;" >
            <h2> Contact Us</h2>
            <p style="font-size: large;">
                We are here to help and answer any questions you might have. Looking forward to hearing from you.
            </p>

        </section>
    </main>
    <p>
        <h4 style="text-align: center;">How can we help ?</h4>
    </p>
    <!-- registration form -->
    <div class="container" > 
        <div>
            <h3 style="text-align: center;">Sign up today!</h3>
        <form action ="contact_us.php" method ="POST">
            <div class="row mb-3">
                <div class="col-lg-6">
                    <label for="name" class="form-label">Fist Name</label>
                    <input type="text" id="name" name="fistname" class="form-control" >
                </div>
                <div class="col-lg-6">
                    <label for="name" class="form-label">Last Name</label>
                    <input type="text" id="name" name="lastname" class="form-control" >
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-6">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" id="phone" name="phone" class="form-control" >
                </div>
                <div class="col-lg-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" >
                </div>
            </div>
            <div class="raw">
                <div class="col-12 my-4 ">
                    <label for="message" class="form-label" >Massage</label>
                    <input type="text" id="message" name="message" placeholder="please enter your massage"  class="form-control py-5" >
                </div>
            </div>
            <button class="btn btn-primary my-4" name="submitButton"  style="height: 50px; ">Send a Message<i class="bi bi-send-fill"></i>
        </form>
    </div>

    <!-- Footer -->
    <div class="footer " style="background-color: #71B6FD; color: white;">
        <div class="row p-4" >
            <div class="col-lg-3 col-md-6 col-sm-6">
                <h4>MyEvent Events</h4>
                <p>
                    Bring people together through live experiences. Discover events that 
                    match your passions, or create your own with online ticketing tools.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <h4>Find Events</h4>
                <p>
                    Upcoming events <br> Past event
                </p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <h4>Quick Links</h4>
                <p>
                    Home<br>AboutUs<br>Contact Us<br>Contact Support
                </p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <h4>Let’s connect</h4>
                <p style="color: white;">
                <ul >
                    <li>
                        <a href="#">Facebook</a>
                    </li>
                    <li>
                        <a href="#">Twitter</a>
                    </li>
                    <li>
                        <a href="#">Instagram</a>
                    </li>
                    <li>
                        <a href="#">Ticktok</a>
                    </li>
                </ul>
                </p>
            </div>
            <hr>
            <p style="text-align: center;" >© Company 2023</p>
    </div> 

   <script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>