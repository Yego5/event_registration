<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boostrap Event Website</title>
    <link rel="stylesheet" href="style.css">    
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <!-- navication bar -->
    <nav class="navbar navbar-expand-lg bg-light" style="background-color: #71B6FD !important;">
        <div class="container-fluid">
            <a href="#" class="navbar-brand text-white">ExpoEvent </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menuitems"
                aria-controls="menuitems" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuitems">
                <div class="navbar-nav">
                    <a href="#" class="nav-link text-white">Home</a>
                    <a href="about_us.php" class="nav-link text-white">About Us</a>
                    <a href="contact_us.php" class="nav-link text-white">Contact Us</a>
                </div>
                <button class="btn btn-primary rounded-0">Register</button>
            </div>
        </div>
    </nav>

    <!-- Hero section -->
    <main class="bg-light py-5">
        <section class="text-center">
            <h1 class="fw-light">Event Exclusive for you</h1>
            <p>
                Bring the event closer to you.on a top of a button. Find all event
            </p>
            <a href="#" class="btn btn-primary rounded-0">Register for out event</a>
            <a href="#" class="btn btn-primary rounded-0" style="background-color: #0E9C3E;">
                <i class="bi bi-envelope-fill"></i>Subscrbe</a>

        </section>
    </main>
    <!-- Feture event section -->

    <div class="container-fluid">
        <h3>Featured Event</h3>
        <div class="row py-4">
            <div class="col-lg-6">
                <img src="images/featured-event.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6">
                <button class="btn btn-danger">Dec, 24th 2023</button>
                <h4>Associate Software Engineering Bootcamp</h4>
                <div class="py-4">
                    <i class="bi bi-calendar-check-fill text-primary"></i><span>Date and Time</span>
                    <h6>Mon, December 24, 2023</h6>
                    <h6>7:00 PM - 10:00 PM EAT</h6>
                </div>
                <div class="pt-2">
                    <h6>Free</h6>
                    <a href="Register.html" class="btn btn-primary rounded-0">Register for this Event</a>
                </div>
            </div>
        </div>
        <div class="row py-4">
            <!-- card border -->
            <p>Other Upcoming Events</p>
            <div class="col-lg-3 col-md-6  col-sm-6">
                <div class="card border-0 shadow">
                    <img src="images/Rectangle 15(1).png">
                    <div class="card-body">
                        <h5>Software Development Bootcamp</h5>
                        <p style="color: #FE7F0A;">Sat, Oct 29, 10:00 AM</p>
                        <p>NOIR Gallery • Village Market, Nairobi County </p>
                        <a href="register.php" class="btn btn-outline-primary">RSVP this Event <i
                                class="bi bi-box"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6  col-sm-6">
                <div class="card border-0 shadow">
                    <img src="images/seminor-event.png">
                    <div class="card-body">
                        <h5>Web 3 Developer Roadshow 2022 Summit</h5>
                        <p style="color: #FE7F0A;">Sat, Oct 29, 10:00 AM</p>
                        <p>NOIR Gallery • Village Market, Nairobi County </p>
                        <a href="register.php" class="btn btn-outline-primary">RSVP this Event <i
                                class="bi bi-box"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6  col-sm-6">
                <div class="card border-0 shadow">
                    <img src="images/AWS.png">
                    <div class="card-body">
                        <h5>AWS Re:Invent Summit</h5>
                        <p style="color: #FE7F0A;">Sat, Oct 29, 10:00 AM</p>
                        <p>Las Vegas , Nevada, USA </p>
                        <a href="register.php" class="btn btn-outline-primary">RSVP this Event <i
                                class="bi bi-box"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6  col-sm-6">
                <div class="card border-0 shadow">
                    <img src="images/wedding-event1.png">
                    <div class="card-body">
                        <h5>Grand Wdding </h5>
                        <p style="color: #FE7F0A;">Sat, Oct 29, 10:00 AM</p>
                        <p>Safaripark • Lang'ata Road, Nairobi County </p>
                        <a href="register.php" class="btn btn-outline-primary">RSVP this Event <i
                                class="bi bi-box"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Footer -->
    <div class="footer " style="background-color: #71B6FD; color: white;">
        <div class="row p-4">
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
                <div class="social media">
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>  <br>
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> <br>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a><br>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a><br>
                    <a href="#" class="youtube"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
            <hr>
            <p style="text-align: center;">© Company 2023</p>
        </div>
    </dev>
        <script src="Bootstrap/js/bootstrap.min.js"></script>
    
</body>

</html>