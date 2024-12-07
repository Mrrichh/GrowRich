<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GrowRich - Agritech Engineering Hub</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/x-icon" href="icon.ico">

</head>

<style>
    /* General Styles */
    body {
        font-family: 'Arial', sans-serif;
    }

    h1, h2, h3 {
        font-weight: bold;
    }

    /* Navbar Styles */
    .navbar {
        background-color: #006400;
        transition: background-color 0.5s;
    }

    .navbar-brand {
        font-size: 1.5rem;
        font-weight: bold;
        color: #fff !important;
    }

    .navbar-nav .nav-link {
        color: #fff !important;
    }

    /* Hero Section */
    #hero {
        position: relative;
        min-height: 100vh; /* Adjusts the section to fill the screen height */
        background: linear-gradient(to bottom, rgba(0, 100, 0, 0.8), rgba(0, 100, 0, 0.5));
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        overflow: hidden; /* Ensures no extra space around the carousel */
    }

    /* Carousel Black Overlay */
    .carousel-item {
        position: relative;
    }

    .carousel-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black */
        z-index: 2; /* Ensures overlay is above the image but below the text */
    }

    /* Adjust Carousel Captions */
    .carousel-caption {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 3; /* Ensures text is above the overlay */
        text-align: center;
        color: white;
        text-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
    }

    .carousel-caption h1 {
        font-size: 5rem;
        font-weight: bold;
        margin-top: -15vh;
    }

    .carousel-caption p {
        font-size: 2rem;
        margin-top: -1vh;
    }

    /* Ensures Images Cover the Entire Carousel Area */
    .carousel-item img {
        width: 100%;
        height: 100vh; /* Full screen height */
        object-fit: cover;
    }

     .carousel-control-prev,
    .carousel-control-next {
        z-index: 4; /* Ensures controls are above everything else */
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.5); /* Dark background for better visibility */
        border-radius: 50%;

    }

    /* About Us Section */
    #about {
        background-color: #f8f9fa;
        padding: 50px 20px;
    }

    #about img {
        max-width: 100%;
        border-radius: 10px;
    }

    /* Services Section */
    #services {
        padding: 50px 20px;
    }

    .service-card {
        background-color: #e9f7e9;
        border: none;
        text-align: center;
        padding: 20px;
        border-radius: 10px;
        transition: transform 0.3s ease;
    }
     /* Find More Styles */
    .find-more-link {
        display: inline-flex;
        align-items: center;
        text-decoration: none;
        font-size: 1.5rem;
        font-weight: bold;
        color: #006400;
        transition: color 0.3s ease;
    }

    .find-more-link:hover {
        color: #004d00;
    }

    .arrow-text {
        margin-right: 10px;
    }

    .arrow-icon {
        display: inline-block;
        transition: transform 0.3s ease;
    }

    .find-more-link:hover .arrow-icon {
        transform: translateX(10px);
    }

    .service-card:hover {
        transform: scale(1.05);
    }

     #did-you-know {
        background-color: #f9f9f9; /* Light background for better readability */
        color: #333;
    }

    #did-you-know h2 {
        font-size: 4rem;
        font-weight: bold;
        color: #006400; /* Match GrowRich theme */
    }

    #did-you-know p {
        font-style: italic;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        font-size: 2rem;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.2); /* Transparent icons */
        border-radius: 50%;
    }
    .carousel-control-next-icon{
        margin-right: -10vh;
    }

    /* Footer */
    footer {
        background-color: #006400;
        color: white;
        padding: 30px 20px;
        text-align: center;
    }

    footer p {
        margin-bottom: 10px;
        font-size: 0.9rem;
        line-height: 1.5;
    }

    footer a {
        text-decoration: none;
        font-weight: bold;
    }
</style>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">GrowRich</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    
                    <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="AboutUs.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <!-- Carousel Items -->
        <div class="carousel-inner" style="height: 450px;">
            <div class="carousel-item active">
                <img src="images/hub.png" class="w-100" alt="Welcome to GrowRich">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption">
                    <h1>Welcome to GrowRich</h1>
                    <p>Innovating Agriculture with Technology</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/hub.png" class="w-100" alt="Cutting Edge Technology">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption">
                    <h1>Cutting-Edge Technology</h1>
                    <p>Empowering Farmers with Advanced Solutions</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/hub.png" class="w-100" alt="Sustainable Farming">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption">
                    <h1>Sustainable Farming</h1>
                    <p>Building a Greener Future for Agriculture</p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- About Section -->
   <!-- Did You Know Section -->
<section id="did-you-know" class="text-center py-5">
    <div class="container">
        <h2 class="mb-4">Did You Know?</h2>
        <div id="didYouKnowCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-inner">
                <!-- Fact 1 -->
                <div class="carousel-item active">
                    <p class="fs-4">Over 50% of the world's population depends on agriculture for their livelihood.</p>
                </div>
                <!-- Fact 2 -->
                <div class="carousel-item">
                    <p class="fs-4">Agritech solutions can increase crop yield by up to 30% using precision farming techniques.</p>
                </div>
                <!-- Fact 3 -->
                <div class="carousel-item">
                    <p class="fs-4">Drones in agriculture can reduce pesticide usage by 20% while improving crop monitoring efficiency.</p>
                </div>
                <!-- Fact 4 -->
                <div class="carousel-item">
                    <p class="fs-4">Artificial intelligence is being used to predict crop diseases and weather patterns with high accuracy.</p>
                </div>
            </div>
            <!-- Controls -->
            
                
        </div>
    </div>
</section>


    <!-- Services Section -->
    <section id="services" class="text-center">
    <div class="container">
        <h2>Our Services</h2>
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="service-card">
                    <h3>Drone Technology</h3>
                    <p>Transforming crop monitoring and spraying with precision drones.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card">
                    <h3>Harvesting Robots</h3>
                    <p>Efficient, automated solutions for large-scale harvesting.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card">
                    <h3>Disease Detection</h3>
                    <p>Early disease detection through AI and machine learning.</p>
                </div>
            </div>
            <div class="col-md-3" style="margin-top: 10vh;">
            <a href="services.php" class="find-more-link">
                <span class="arrow-text">Find More</span>
                <span class="arrow-icon">→</span>
            </a>
        </div>
        </div>

        <!-- Animated Find More Arrow -->
        
    </div>
</section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 GrowRich. All Rights Reserved.</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
