<?php include 'includes/header.php'; ?>

<!-- Success Section -->
<section class="py-20 bg-white">
    <div class="max-w-3xl mx-auto px-4 text-center">
        <div class="mb-8">
            <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                <i class="fas fa-check text-4xl text-green-500"></i>
            </div>
            <h1 class="text-3xl font-bold text-gray-900 mb-4">Appointment Booked Successfully!</h1>
            <p class="text-xl text-gray-600 mb-8">
                Thank you for choosing Astra Labs. We've sent a confirmation email with your appointment details.
            </p>
        </div>

        <div class="bg-gray-50 rounded-xl p-8 mb-8">
            <h2 class="text-xl font-semibold text-gray-900 mb-4">What's Next?</h2>
            <ul class="space-y-4 text-left">
                <li class="flex items-start">
                    <i class="fas fa-envelope text-blue-600 mt-1 mr-3"></i>
                    <span>Check your email for appointment confirmation and instructions</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-clock text-blue-600 mt-1 mr-3"></i>
                    <span>Please arrive 15 minutes before your scheduled time</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-id-card text-blue-600 mt-1 mr-3"></i>
                    <span>Bring your ID and any required documents</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-phone text-blue-600 mt-1 mr-3"></i>
                    <span>Contact us if you need to reschedule or have questions</span>
                </li>
            </ul>
        </div>

        <!-- Appointment Details -->
        <?php
        if (isset($_SESSION['appointment_details'])) {
            $details = $_SESSION['appointment_details'];
            echo '<div class="bg-blue-50 rounded-xl p-8 mb-8">
                    <h2 class="text-xl font-semibold text-gray-900 mb-4">Your Appointment Details</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-left">
                        <div>
                            <p class="text-gray-600"><strong>Date:</strong> ' . date('F j, Y', strtotime($details['appointment_date'])) . '</p>
                            <p class="text-gray-600"><strong>Time:</strong> ' . date('g:i A', strtotime($details['appointment_time'])) . '</p>
                            <p class="text-gray-600"><strong>Test Type:</strong> ' . ucwords(str_replace('_', ' ', $details['test_type'])) . '</p>
                        </div>
                        <div>
                            <p class="text-gray-600"><strong>Name:</strong> ' . htmlspecialchars($details['first_name'] . ' ' . $details['last_name']) . '</p>
                            <p class="text-gray-600"><strong>Email:</strong> ' . htmlspecialchars($details['email']) . '</p>
                            <p class="text-gray-600"><strong>Phone:</strong> ' . htmlspecialchars($details['phone']) . '</p>
                        </div>
                    </div>
                </div>';
        }
        ?>

        <!-- Important Reminders -->
        <div class="bg-yellow-50 rounded-xl p-8 mb-8">
            <h2 class="text-xl font-semibold text-gray-900 mb-4">Important Reminders</h2>
            <ul class="space-y-3 text-left">
                <li class="flex items-start">
                    <i class="fas fa-exclamation-circle text-yellow-500 mt-1 mr-3"></i>
                    <span>Fasting may be required for certain tests. Please check your email for specific instructions.</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-exclamation-circle text-yellow-500 mt-1 mr-3"></i>
                    <span>Bring any relevant medical history or previous test results.</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-exclamation-circle text-yellow-500 mt-1 mr-3"></i>
                    <span>Wear comfortable clothing that allows easy access to your arm for blood tests.</span>
                </li>
            </ul>
        </div>

        <!-- Action Buttons -->
        <div class="space-x-4">
            <a href="index.php" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                Return Home
            </a>
            <a href="contact.php" class="inline-block bg-gray-200 text-gray-800 px-8 py-3 rounded-lg font-semibold hover:bg-gray-300 transition duration-300">
                Contact Us
            </a>
        </div>

        <!-- Download Instructions -->
        <div class="mt-8">
            <a href="#" class="text-blue-600 hover:text-blue-800 flex items-center justify-center">
                <i class="fas fa-download mr-2"></i>
                Download Appointment Instructions
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?> 