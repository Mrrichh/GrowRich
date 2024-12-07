<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GrowRich - Contact Us</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/x-icon" href="icon.ico">
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: white;
            transition: background-color 0.5s;
            border-bottom: 3px solid #006400;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #006400 !important;
        }

        .navbar-nav .nav-link {
            color: #006400 !important;
        }

        /* Header */
        .page-header {
            background-color: #006400;
            color: white;
            padding: 60px 0;
            text-align: center;
        }

        .page-header h1 {
            font-size: 3rem;
            margin: 0;
        }
         .toast {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1050;
        }

        .page-header p {
            font-size: 1.2rem;
            margin-top: 10px;
        }

        /* Contact Form */
        .contact-form {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .form-control {
            border-radius: 10px;
        }

        .btn-submit {
            background-color: #006400;
            color: white;
            border-radius: 10px;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #004d00;
        }

        /* Info Section */
        .contact-info {
            background-color: #e9f7e9;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .contact-info h3 {
            color: #006400;
            margin-bottom: 20px;
        }

        .contact-info p {
            font-size: 1.1rem;
        }

        .contact-info a {
            color: #006400;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .contact-info a:hover {
            color: #004d00;
        }

        /* WhatsApp Button */
        .whatsapp-btn {
            margin-top: 20px;
            display: inline-block;
            background-color: #25d366;
            color: white;
            font-size: 1.2rem;
            padding: 10px 20px;
            border-radius: 10px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            font-weight: bold;
        }

        .whatsapp-btn:hover {
            background-color: #1da853;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 2.5rem;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">GrowRich</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="AboutUs.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link active" href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="page-header">
        <h1>Contact Us</h1>
        <p>We’d love to hear from you! Reach out to us with any questions or inquiries.</p>
    </header>

    <!-- Main Content -->
    <main class="container py-5">
        <div class="row g-5">
            <!-- Contact Form -->
            <div class="col-md-7">
                <div class="contact-form">
                    <h2 class="mb-4">Get in Touch</h2>
                    <form action="process_contact.php" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Write your message here..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-submit w-100">Send Message</button>
                    </form>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-md-5">
                <div class="contact-info">
                    <h3>Contact Details</h3>
                    <p><strong>Phone:</strong> +233 123 456 789</p>
                    <p><strong>Email:</strong> <a href="mailto:info@growrich.com">info@growrich.com</a></p>
                    <p><strong>Address:</strong> GrowRich Headquarters, Accra, Ghana</p>
                    <p><strong>Working Hours:</strong> Mon-Fri, 9 AM - 5 PM</p>
                    <a href="https://wa.me/233202049506" class="whatsapp-btn" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="text-center py-4" style="background-color: #006400; color: white;">
        <p>&copy; 2024 GrowRich. All Rights Reserved.</p>
    </footer>
 <!-- Toast notification -->
    <div id="toast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body"></div>
    </div>

    <!-- Bootstrap JS and custom toast function -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Function to show toast
        function showToast(type, message) {
            const toast = document.getElementById('toast');
            const toastBody = toast.querySelector('.toast-body');
            toastBody.textContent = message;

            // Set toast class based on type (success or error)
            if (type === 'success') {
                toast.classList.add('bg-success', 'text-white');
            } else {
                toast.classList.add('bg-danger', 'text-white');
            }

            // Show the toast
            const bootstrapToast = new bootstrap.Toast(toast);
            bootstrapToast.show();

            // Remove toast class after hiding
            toast.addEventListener('hidden.bs.toast', function () {
                toast.classList.remove('bg-success', 'bg-danger', 'text-white');
            });
        }
    </script>
    
</body>

</html>
