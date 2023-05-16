<?php

    $server ="localhost";
    $username ="root";
    $password ="";
    $database ="Classwork";
    $message ="";
 
//database connection using mysql_connect
    $conn = mysqli_connect($server,$username,$password,$database);

//test if connection is successfull
    if ($conn){
      // echo "Database connected successfuly";
    }
    else
    {
        echo "error occured".mysqli_error($conn);
    }

 //isset function to submit our form
    if( isset( $_POST["submitbtn"]))
    {

        //fetch form data
            $fullname = $_POST['fullname'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $course = $_POST['course'];

        //submit to database
            $sql = mysqli_query($conn, "INSERT INTO register_your_details(fullname,phone,email,gender,course) VALUES('$fullname','$phone','$email','$gender','$course')");

        //cheking if success
        if($sql)
            {
            $message = "Data inserted Successfuly";
            }
        else
        {
            $message = "error occered";
        }
    }
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enroll</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
   <!-- Navication bar -->
    <nav class="navbar navbar-expand-lg bg-light shadow " style="background-color: #71B6FD !important;">
        <div class="container-fluid">
            <a href="#" class="navbar-brand text-white">Salegram <br>Event</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menuitems"
                aria-controls="menuitems" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> 
            </button>
            
            <div class="collapse navbar-collapse" id="menuitems"> 
                <div class="navbar-nav">
                    <a href="index.php" class="nav-link text-white">Home</a>
                    <a href="about_us.php" class="nav-link text-white">About Us</a>
                    <a href="contact_us.php" class="nav-link text-white">Contact Us</a> 
                </div>
                <button  class="btn btn-primary rounded-0"> <a href="register.html" class="nav-link text-white"></a> Register</button>
            </div> 
        </div >
     </nav>

    <!-- Hero section -->
    <main class="bg-light py-5" style="background-color: #71B6FD !important;">
        <section style="color:white; padding-left: 30px;" >
           
            <h2 style="font-size: large;" class="text-center">
                Associate Software  Engineering Bootcamp
            </h2>

        </section>
    </main>
    

<!-- Hero section -->
    <main class="bg-light py-5">
        <section >
            <p class="text-center font-family poppins">
                Explore all the tools you need to start, run, and grow your business with events. 
                Subscribe to get information, latest news about Zalegram Events
            </p>
            
            <div class="container">
                <div class="text-center">
                    <p>
                        Looking for a place to kickstart your career in Technology ? Whether you're a local, 
                        new in town or just cruising through we've got loads of great tips and events for you.
                    </p>
                    <h3>Sign up today!</h3>
                    <?php
                        echo $message
                    ?>
                </div>
                <form action ="register.php" method ="POST">
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" id="name" name ="fullname" class="form-control" placeholder="Enter your name">
                        </div>
                        <div class="col-lg-6">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="Enter your phone number">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email">
                        </div>
                        <div class="col-lg-6">
                            <label for="gender" class="form-label">Whats your gender</label>
                            <select class="form-select" id="gender" name ="gender">
                                <option value="">Select-gender--</option>
                                <option >Male</option>
                                <option >Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <p>
                            In order to complete your registration to the bootcamp, you are required to select one course you will be undertaking. 
                            Please NOTE that this will be your learning track during the 2-weeks immersion. 
                        </p>
                        <div class="col-lg-6">
                            <label for="gender" class="form-label">Whats your preffered course ?</label>
                            <select class="form-select" id="" name = "course">
                                <option value="">Select-course--</option>
                                <option >Web</option>
                                <option >Mobile</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <p>
                            You agree by providing your information you understand all our data privacy and protection policy outlined in our Terms & condition and the Privacy Policy statements.
                            You allow Zalegram to use your data for communication purposes on any information related to this event.
                        </p>
                        <div class="col-lg-6">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkbox">
                                <label for="checkbox" class="form-check-label">Agree Terms and Condition. </label>
                            </div>
                        </div>
                    </div>
                    <div class="row py-4">
                        <div class="col-lg-4">
                            <button type="submit" name="submitbtn" class="btn btn-primary">Submit application</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>

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