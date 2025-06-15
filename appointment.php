<?php include 'includes/header.php'; ?>

<!-- Appointment Hero Section -->
<section class="relative bg-gradient-to-r from-blue-600 to-blue-800 text-white py-24">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 animate-fade-in">Book an Appointment</h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">Schedule your laboratory test or consultation with our experts</p>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0">
        <svg class="w-full h-16 text-white" viewBox="0 0 1440 100" preserveAspectRatio="none">
            <path fill="currentColor" d="M0,0 C150,100 350,0 500,100 C650,0 850,100 1000,100 C1150,0 1350,100 1440,100 L1440,100 L0,100 Z"></path>
        </svg>
    </div>
</section>

<!-- Appointment Form Section -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4">
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <form id="appointmentForm" action="process_appointment.php" method="POST" class="space-y-6">
                <!-- Personal Information -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="firstName" class="block text-sm font-medium text-gray-700 mb-2">First Name *</label>
                        <input type="text" id="firstName" name="firstName" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="lastName" class="block text-sm font-medium text-gray-700 mb-2">Last Name *</label>
                        <input type="text" id="lastName" name="lastName" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number *</label>
                        <input type="tel" id="phone" name="phone" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>

                <!-- Test Selection -->
                <div>
                    <label for="testType" class="block text-sm font-medium text-gray-700 mb-2">Select Test Type *</label>
                    <select id="testType" name="testType" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Select a test type</option>
                        <option value="blood_test">Blood Test</option>
                        <option value="urine_test">Urine Test</option>
                        <option value="genetic_test">Genetic Test</option>
                        <option value="microbiology">Microbiology Analysis</option>
                        <option value="hormone_test">Hormone Testing</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <!-- Date and Time Selection -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="appointmentDate" class="block text-sm font-medium text-gray-700 mb-2">Preferred Date *</label>
                        <input type="date" id="appointmentDate" name="appointmentDate" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="appointmentTime" class="block text-sm font-medium text-gray-700 mb-2">Preferred Time *</label>
                        <select id="appointmentTime" name="appointmentTime" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Select a time slot</option>
                            <option value="09:00">09:00 AM</option>
                            <option value="10:00">10:00 AM</option>
                            <option value="11:00">11:00 AM</option>
                            <option value="12:00">12:00 PM</option>
                            <option value="14:00">02:00 PM</option>
                            <option value="15:00">03:00 PM</option>
                            <option value="16:00">04:00 PM</option>
                        </select>
                    </div>
                </div>

                <!-- Additional Notes -->
                <div>
                    <label for="notes" class="block text-sm font-medium text-gray-700 mb-2">Additional Notes</label>
                    <textarea id="notes" name="notes" rows="4"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Any specific requirements or concerns..."></textarea>
                </div>

                <!-- Terms and Conditions -->
                <div class="flex items-start">
                    <input type="checkbox" id="terms" name="terms" required
                        class="mt-1 h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="terms" class="ml-2 block text-sm text-gray-700">
                        I agree to the <a href="privacy.php" class="text-blue-600 hover:text-blue-800">privacy policy</a> and 
                        <a href="terms.php" class="text-blue-600 hover:text-blue-800">terms of service</a>
                    </label>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit"
                        class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                        Book Appointment
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Information Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Preparation -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="text-blue-600 mb-4">
                    <i class="fas fa-info-circle text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Before Your Visit</h3>
                <ul class="space-y-2 text-gray-600">
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Fast for 8-12 hours if required</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Bring your ID and insurance card</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Arrive 15 minutes early</span>
                    </li>
                </ul>
            </div>

            <!-- What to Bring -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="text-blue-600 mb-4">
                    <i class="fas fa-briefcase text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">What to Bring</h3>
                <ul class="space-y-2 text-gray-600">
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Valid photo ID</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Insurance information</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Doctor's referral (if any)</span>
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="text-blue-600 mb-4">
                    <i class="fas fa-phone-alt text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Need Help?</h3>
                <ul class="space-y-2 text-gray-600">
                    <li class="flex items-start">
                        <i class="fas fa-phone text-green-500 mt-1 mr-2"></i>
                        <span>Call: (555) 123-4567</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-envelope text-green-500 mt-1 mr-2"></i>
                        <span>Email: appointments@astralabs.com</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-clock text-green-500 mt-1 mr-2"></i>
                        <span>Hours: Mon-Fri, 9AM-5PM</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?> 