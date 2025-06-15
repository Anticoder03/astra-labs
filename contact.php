<?php include 'includes/header.php'; ?>

<!-- Contact Hero Section -->
<section class="relative bg-gradient-to-r from-blue-600 to-blue-800 text-white py-24">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 animate-fade-in">Contact Us</h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">Get in touch with our team for any inquiries or to schedule a consultation</p>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0">
        <svg class="w-full h-16 text-white" viewBox="0 0 1440 100" preserveAspectRatio="none">
            <path fill="currentColor" d="M0,0 C150,100 350,0 500,100 C650,0 850,100 1000,100 C1150,0 1350,100 1440,100 L1440,100 L0,100 Z"></path>
        </svg>
    </div>
</section>

<!-- Contact Information Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Contact Card 1 -->
            <div class="bg-gray-50 rounded-xl p-8 text-center hover:shadow-lg transition duration-300">
                <div class="text-blue-600 mb-4">
                    <i class="fas fa-map-marker-alt text-4xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Visit Us</h3>
                <p class="text-gray-600">
                    123 Science Street<br>
                    Lab City, LC 12345<br>
                    United States
                </p>
            </div>
            <!-- Contact Card 2 -->
            <div class="bg-gray-50 rounded-xl p-8 text-center hover:shadow-lg transition duration-300">
                <div class="text-blue-600 mb-4">
                    <i class="fas fa-phone-alt text-4xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Call Us</h3>
                <p class="text-gray-600">
                    Main: (555) 123-4567<br>
                    Support: (555) 987-6543<br>
                    Fax: (555) 456-7890
                </p>
            </div>
            <!-- Contact Card 3 -->
            <div class="bg-gray-50 rounded-xl p-8 text-center hover:shadow-lg transition duration-300">
                <div class="text-blue-600 mb-4">
                    <i class="fas fa-envelope text-4xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Email Us</h3>
                <p class="text-gray-600">
                    info@astralabs.com<br>
                    support@astralabs.com<br>
                    careers@astralabs.com
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Send Us a Message</h2>
                <form action="process_contact.php" method="POST" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                            <input type="text" id="first_name" name="first_name" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                            <input type="text" id="last_name" name="last_name" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" id="email" name="email" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                        <select id="subject" name="subject" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            <option value="">Select a subject</option>
                            <option value="general">General Inquiry</option>
                            <option value="services">Services Information</option>
                            <option value="support">Technical Support</option>
                            <option value="partnership">Partnership Opportunity</option>
                            <option value="careers">Career Opportunities</option>
                        </select>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea id="message" name="message" rows="4" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="privacy" name="privacy" required class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="privacy" class="ml-2 block text-sm text-gray-700">
                            I agree to the <a href="#" class="text-blue-600 hover:text-blue-800">privacy policy</a>
                        </label>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                        Send Message
                    </button>
                </form>
            </div>
            <!-- Map and Business Hours -->
            <div class="space-y-8">
                <!-- Map -->
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Our Location</h3>
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.30591910525!2d-74.25986432970718!3d40.697149422113014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1645564750981!5m2!1sen!2s" 
                            width="100%" 
                            height="300" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy"
                            class="rounded-lg">
                        </iframe>
                    </div>
                </div>
                <!-- Business Hours -->
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Business Hours</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Monday - Friday</span>
                            <span class="text-gray-900 font-medium">9:00 AM - 6:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Saturday</span>
                            <span class="text-gray-900 font-medium">10:00 AM - 4:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Sunday</span>
                            <span class="text-gray-900 font-medium">Closed</span>
                        </div>
                    </div>
                </div>
                <!-- Social Media -->
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Connect With Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-600 hover:text-blue-600 transition duration-300">
                            <i class="fab fa-facebook-f text-2xl"></i>
                        </a>
                        <a href="#" class="text-gray-600 hover:text-blue-600 transition duration-300">
                            <i class="fab fa-twitter text-2xl"></i>
                        </a>
                        <a href="#" class="text-gray-600 hover:text-blue-600 transition duration-300">
                            <i class="fab fa-linkedin-in text-2xl"></i>
                        </a>
                        <a href="#" class="text-gray-600 hover:text-blue-600 transition duration-300">
                            <i class="fab fa-instagram text-2xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?> 