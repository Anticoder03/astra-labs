<?php
require_once 'includes/config.php';
require_once __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Function to sanitize input data
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function to send email using PHPMailer
function sendAppointmentEmail($to, $firstName, $lastName, $appointmentDate, $appointmentTime, $testType) {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP host
        $mail->SMTPAuth = true;
        $mail->Username = 'your-email@gmail.com'; // Replace with your email
        $mail->Password = 'your-app-password'; // Replace with your app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('appointments@astralabs.com', 'Astra Labs');
        $mail->addAddress($to, $firstName . ' ' . $lastName);
        $mail->addReplyTo('appointments@astralabs.com', 'Astra Labs');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Appointment Confirmation - Astra Labs';
        
        // Email body
        $body = "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background-color: #2563eb; color: white; padding: 20px; text-align: center; }
                .content { padding: 20px; background-color: #f9fafb; }
                .footer { text-align: center; padding: 20px; font-size: 12px; color: #666; }
                .button { display: inline-block; padding: 10px 20px; background-color: #2563eb; color: white; text-decoration: none; border-radius: 5px; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h1>Appointment Confirmation</h1>
                </div>
                <div class='content'>
                    <p>Dear {$firstName} {$lastName},</p>
                    <p>Thank you for booking an appointment with Astra Labs. Here are your appointment details:</p>
                    
                    <h2>Appointment Information</h2>
                    <ul>
                        <li><strong>Date:</strong> " . date('F j, Y', strtotime($appointmentDate)) . "</li>
                        <li><strong>Time:</strong> " . date('g:i A', strtotime($appointmentTime)) . "</li>
                        <li><strong>Test Type:</strong> " . ucwords(str_replace('_', ' ', $testType)) . "</li>
                    </ul>

                    <h2>Important Reminders</h2>
                    <ul>
                        <li>Please arrive 15 minutes before your scheduled time</li>
                        <li>Bring a valid photo ID</li>
                        <li>Bring any relevant medical history or previous test results</li>
                        <li>Wear comfortable clothing that allows easy access to your arm for blood tests</li>
                    </ul>

                    <p>If you need to reschedule or have any questions, please contact us:</p>
                    <ul>
                        <li>Phone: (555) 123-4567</li>
                        <li>Email: appointments@astralabs.com</li>
                    </ul>

                    <p style='text-align: center; margin-top: 30px;'>
                        <a href='http://yourwebsite.com/appointment.php' class='button text-white' style='text-decoration: none; color: white;'   >Reschedule Appointment</a>
                    </p>
                </div>
                <div class='footer'>
                    <p>This is an automated message, please do not reply directly to this email.</p>
                    <p>&copy; " . date('Y') . " Astra Labs. All rights reserved.</p>
                </div>
            </div>
        </body>
        </html>";

        $mail->Body = $body;
        $mail->AltBody = "Dear {$firstName} {$lastName},\n\n" .
                         "Thank you for booking an appointment with Astra Labs.\n\n" .
                         "Appointment Details:\n" .
                         "Date: " . date('F j, Y', strtotime($appointmentDate)) . "\n" .
                         "Time: " . date('g:i A', strtotime($appointmentTime)) . "\n" .
                         "Test Type: " . ucwords(str_replace('_', ' ', $testType)) . "\n\n" .
                         "Please arrive 15 minutes before your scheduled time.\n\n" .
                         "Best regards,\nAstra Labs Team";

        $mail->send();
        return true;
    } catch (Exception $e) {
        error_log("Email Error: " . $mail->ErrorInfo);
        return false;
    }
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Get database connection
        $conn = getDBConnection();
        if (!$conn) {
            throw new Exception("Database connection failed.");
        }

        // Sanitize and validate input data
        $firstName = sanitize_input($_POST['firstName']);
        $lastName = sanitize_input($_POST['lastName']);
        $email = filter_var(sanitize_input($_POST['email']), FILTER_VALIDATE_EMAIL);
        $phone = sanitize_input($_POST['phone']);
        $testType = sanitize_input($_POST['testType']);
        $appointmentDate = sanitize_input($_POST['appointmentDate']);
        $appointmentTime = sanitize_input($_POST['appointmentTime']);
        $notes = sanitize_input($_POST['notes']);

        // Validate required fields
        if (!$firstName || !$lastName || !$email || !$phone || !$testType || !$appointmentDate || !$appointmentTime) {
            throw new Exception("All required fields must be filled out.");
        }

        // Validate email
        if (!$email) {
            throw new Exception("Invalid email format.");
        }

        // Validate date (must be future date)
        $appointmentDateTime = strtotime($appointmentDate . ' ' . $appointmentTime);
        if ($appointmentDateTime < time()) {
            throw new Exception("Appointment date must be in the future.");
        }

        // Check if the time slot is available
        $stmt = $conn->prepare("SELECT COUNT(*) FROM appointments WHERE appointment_date = ? AND appointment_time = ? AND status != 'cancelled'");
        if (!$stmt) {
            throw new Exception("Database error: " . $conn->error);
        }
        
        $stmt->bind_param("ss", $appointmentDate, $appointmentTime);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();

        if ($count > 0) {
            throw new Exception("This time slot is already booked. Please select another time.");
        }

        // Insert the appointment into the database
        $stmt = $conn->prepare("INSERT INTO appointments (first_name, last_name, email, phone, test_type, appointment_date, appointment_time, notes) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        if (!$stmt) {
            throw new Exception("Database error: " . $conn->error);
        }

        $stmt->bind_param("ssssssss", $firstName, $lastName, $email, $phone, $testType, $appointmentDate, $appointmentTime, $notes);
        
        if ($stmt->execute()) {
            // Store appointment details in session
            $_SESSION['appointment_details'] = [
                'first_name' => $firstName,
                'last_name' => $lastName,
                'email' => $email,
                'phone' => $phone,
                'test_type' => $testType,
                'appointment_date' => $appointmentDate,
                'appointment_time' => $appointmentTime,
                'notes' => $notes
            ];

            // Send confirmation email using PHPMailer
            if (!sendAppointmentEmail($email, $firstName, $lastName, $appointmentDate, $appointmentTime, $testType)) {
                error_log("Failed to send confirmation email to: " . $email);
            }

            // Redirect to success page
            header("Location: appointment_success.php");
            exit();
        } else {
            throw new Exception("Error booking appointment: " . $stmt->error);
        }

    } catch (Exception $e) {
        // Log the error
        error_log("Appointment Error: " . $e->getMessage());
        
        // Redirect back to appointment page with error message
        header("Location: appointment.php?error=" . urlencode($e->getMessage()));
        exit();
    } finally {
        // Close the statement if it exists
        if (isset($stmt)) {
            $stmt->close();
        }
        // Close the connection
        if (isset($conn)) {
            $conn->close();
        }
    }
} else {
    // If not a POST request, redirect to appointment page
    header("Location: appointment.php");
    exit();
}
?> 