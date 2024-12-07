<?php
// Include the PHPMailer autoloader
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Path to PHPMailer's autoload file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();                                      // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                   // Set the SMTP server to use (Gmail)
        $mail->SMTPAuth   = true;                               // Enable SMTP authentication
        $mail->Username   = 'opokug523@gmail.com';             // Your Gmail email address
        $mail->Password   = 'ydkthozaskzhylih';          // Your Gmail App Password (use App Password if 2FA is enabled)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;     // Enable TLS encryption
        $mail->Port       = 587;                               // TCP port for TLS (587 for Gmail)

        // Recipients
        $mail->setFrom('opokug523@gmail.com', 'GrowRich');
        $mail->addAddress('opokug523@gmail.com');               // Add the recipient email

        // Content
        $mail->isHTML(true);                                    // Set email format to HTML
        $mail->Subject = 'New message from ' . $name;
        $mail->Body    = "<strong>Name:</strong> $name<br><strong>Email:</strong> $email<br><strong>Message:</strong><br>$message";
        $mail->AltBody = "Name: $name\nEmail: $email\nMessage:\n$message";

       // Send email
        if ($mail->send()) {
            echo "<script>
                    window.onload = function() {
                        showToast('success', 'Your message has been sent successfully!');
                    }
                  </script>";
        } else {
            echo "<script>
                    window.onload = function() {
                        showToast('error', 'There was an issue sending your message.');
                    }
                  </script>";
        }
    } catch (Exception $e) {
        echo "<script>
                window.onload = function() {
                    showToast('error', 'Message could not be sent. Error: {$mail->ErrorInfo}');
                }
              </script>";
    }
}

?>
