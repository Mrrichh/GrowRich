<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GrowRich - Our Services</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/x-icon" href="icon.ico">
</head>

<style>
    /* General Styles */
    body {
        font-family: 'Arial', sans-serif;
    }

    h1, h2 {
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

    .section-title {
        font-size: 2.5rem;
        color: #006400;
        margin-bottom: 30px;
        text-align: center;
    }

    .service-card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background-color: #e9f7e9;
    }

    .service-card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    }

    .service-card img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .service-card-body {
        padding: 20px;
        text-align: center;
    }

    .service-card-body h3 {
        font-size: 1.8rem;
        color: #006400;
        margin-bottom: 15px;
    }

    .service-card-body p {
        font-size: 1rem;
        color: #555;
    }
    .find-more-btn {
        margin-top: 10px;
        background-color: #006400;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 1rem;
        transition: background-color 0.3s ease;
    }

    .find-more-btn:hover {
        background-color: #004d00;
        color: #fff;
    }

    /* Responsive Grid */
    @media (max-width: 768px) {
        .service-card {
            margin-bottom: 20px;
        }
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

    <!-- Header -->
    <header class="py-5 bg-light text-center">
        <div class="container">
            <h1 class="section-title" style="margin-top: 10vh;">Our Services</h1>
            <p>Innovating agriculture through advanced technologies and sustainable solutions.</p>
        </div>
    </header>

    <!-- Services Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Drone Technology -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <img src="https://mpowerlithium.com/cdn/shop/articles/Application_of_Drone_Technology_in_Agriculture_1.jpg?v=1714655552" alt="Drone Technology">
                        <div class="service-card-body">
                            <h3>Drone Technology</h3>
                            <p>Transforming crop monitoring and spraying with precision drones for efficient and sustainable farming practices.</p>
                            <a href="contact.php" class="btn find-more-btn">FIND MORE</a>
                        </div>
                    </div>
                </div>
                <!-- Harvesting Robots -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPyq4xtWG55NzErq0kUCCoAPD8CiJj2HxCJw&s" alt="Harvesting Robots">
                        <div class="service-card-body">
                            <h3>Harvesting Robots</h3>
                            <p>Automating large-scale harvesting with cutting-edge robotics for better efficiency and productivity.</p>
                            <a href="contact.php" class="btn find-more-btn">FIND MORE</a>
                        </div>
                    </div>
                </div>
                <!-- Disease Detection -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkqVrpomxGR2vf71XKQ_FVQ9pP9if84WuQTw&s" alt="Disease Detection">
                        <div class="service-card-body">
                            <h3>Disease Detection</h3>
                            <p>Detect crop diseases early with AI-powered solutions, minimizing losses and improving yields.</p>
                            <a href="contact.php" class="btn find-more-btn">FIND MORE</a>
                        </div>
                    </div>
                </div>
                <!-- Genetically Modified Crops -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <img src="https://blog.biomall.in/wp-content/uploads/2019/09/Untitled-design.png" alt="Genetically Modified Crops">
                        <div class="service-card-body">
                            <h3>Genetically Modified Crops</h3>
                            <p>Developing crops with improved yields and resistance to environmental challenges for a sustainable future.</p>
                            <a href="contact.php" class="btn find-more-btn">FIND MORE</a>
                        </div>
                    </div>
                </div>
                <!-- Sustainable Irrigation -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLxHxwBml2t-H7NOZU2ov2y2xUhtb6Akb-cg&s" alt="Sustainable Irrigation">
                        <div class="service-card-body">
                            <h3>Sustainable Irrigation</h3>
                            <p>Implementing water-efficient irrigation systems to conserve resources while boosting productivity.</p>
                            <a href="contact.php" class="btn find-more-btn">FIND MORE</a>
                        </div>
                    </div>
                </div>
                <!-- Precision Farming -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <img src="https://i0.wp.com/bytesfood.in/wp-content/uploads/2023/12/precision-agri.png?resize=1080%2C675&ssl=1" alt="Precision Farming">
                        <div class="service-card-body">
                            <h3>Precision Farming</h3>
                            <p>Utilizing data-driven farming techniques for maximum efficiency and reduced environmental impact.</p>
                            <a href="contact.php" class="btn find-more-btn">FIND MORE</a>
                        </div>
                    </div>
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
