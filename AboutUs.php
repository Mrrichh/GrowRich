<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - GrowRich</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/x-icon" href="icon.ico">
</head>

<style>
    /* General Styles */
    body {
        font-family: 'Arial', sans-serif;
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

    .about-section {
        background-color: #f9f9f9;
        padding: 50px 0;
    }

    .about-section h1 {
        font-size: 3rem;
        color: #006400;
        text-align: center;
        margin-bottom: 20px;
        font-weight: bold;
    }

    .about-text {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #555;
        margin-top: 20px;
    }

    .carousel-item img {
        border-radius: 15px;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        width: 100%;
        height: auto;
    }

    .vision-mission {
        margin-top: 50px;
    }

    .vision-mission h2 {
        font-size: 2.2rem;
        color: #006400;
        font-weight: bold;
    }

    .vision-mission p {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #555;
    }

    /* Footer */
    footer {
        background-color: #006400;
        color: white;
        padding: 20px;
        text-align: center;
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
                    <li class="nav-item"><a class="nav-link active" href="AboutUs.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- About Section -->
    <section class="about-section" style="margin-top: 10vh;">
        <div class="container">
            <h1>About Us</h1>
            <div class="row align-items-center">
                <!-- Carousel -->
                <div class="col-md-6">
                    <div id="aboutCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="height: 420px;">
                                <img src="https://dailyguidenetwork.com/wp-content/uploads/2024/10/AgriTech-642x406.jpg" class="d-block w-100">
                            </div>
                            <div class="carousel-item"style="height: 420px;">
                                <img src="https://media.licdn.com/dms/image/D4D12AQG9P9SmhNg-uQ/article-cover_image-shrink_720_1280/0/1722251188138?e=2147483647&v=beta&t=kixefNAh_CKX8pQT9Up14-MsLYzFEKbGDVmUNq0gi1c" class="d-block w-100">
                            </div>
                            <div class="carousel-item"style="height: 420px;">
                                <img src="https://media.licdn.com/dms/image/v2/C4D22AQH_CdWHZ9g7YQ/feedshare-shrink_800/feedshare-shrink_800/0/1663756805422?e=2147483647&v=beta&t=pbUlN9JPbU0fzaubfSBxgtCkd0LnvZEHjTzwsu8_3uM" class="d-block w-100">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#aboutCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#aboutCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <!-- About Text -->
                <div class="col-md-6">
                    <div class="about-text">
                        <p>
                            GrowRich is an Agritech engineering hub that merges innovation and technology to revolutionize agriculture. 
                            Founded with a mission to transform farming practices, we strive to create sustainable solutions 
                            for farmers, businesses, and communities. From drone technology and precision farming to disease detection and 
                            genetically modified crops, we are committed to advancing agriculture in ways that promote efficiency and sustainability.
                        </p>
                        <p>
                            With a passionate team of engineers, scientists, and agriculture experts, we aim to empower farmers 
                            to embrace modern practices and increase productivity while preserving the environment. Our vision 
                            is to build a future where agriculture thrives, hunger diminishes, and resources are used responsibly.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Vision and Mission -->
            <div class="row vision-mission">
                <div class="col-md-6">
                    <h2>Our Vision</h2>
                    <p>
                        To create a world where innovation and sustainability redefine agriculture, ensuring prosperity for farmers 
                        and food security for all.
                    </p>
                </div>
                <div class="col-md-6">
                    <h2>Our Mission</h2>
                    <p>
                        To empower the agricultural sector through cutting-edge technology, research, and education, while addressing 
                        global challenges such as food insecurity, climate change, and resource scarcity.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 GrowRich. All Rights Reserved.</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
