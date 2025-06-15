<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-blue-600 to-blue-800 text-white">
    <div class="max-w-7xl mx-auto px-4 py-24">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight animate-fade-in">
                    Advancing Science Through Innovation
                </h1>
                <p class="text-xl text-blue-100">
                    State-of-the-art laboratory services for research, testing, and analysis.
                </p>
                <div class="flex space-x-4">
                    <a href="#contact" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-blue-50 transition duration-300">
                        Contact Us
                    </a>
                    <a href="#services" class="border-2 border-white text-white px-6 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition duration-300">
                        Our Services
                    </a>
                </div>
            </div>
            <div class="hidden md:block">
                <img src="assets/images/lab-hero.jpg" alt="Laboratory" class="rounded-lg shadow-2xl">
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0">
        <svg class="w-full h-16 text-white" viewBox="0 0 1440 100" preserveAspectRatio="none">
            <path fill="currentColor" d="M0,0 C150,100 350,0 500,100 C650,0 850,100 1000,100 C1150,0 1350,100 1440,100 L1440,100 L0,100 Z"></path>
        </svg>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Services</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Comprehensive laboratory services tailored to meet your research and testing needs.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Service Card 1 -->
            <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition duration-300">
                <div class="text-blue-600 mb-4">
                    <i class="fas fa-flask text-4xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-4">Chemical Analysis</h3>
                <p class="text-gray-600">Advanced chemical analysis and testing services for various industries.</p>
            </div>
            <!-- Service Card 2 -->
            <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition duration-300">
                <div class="text-blue-600 mb-4">
                    <i class="fas fa-dna text-4xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-4">DNA Testing</h3>
                <p class="text-gray-600">State-of-the-art DNA analysis and genetic testing services.</p>
            </div>
            <!-- Service Card 3 -->
            <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition duration-300">
                <div class="text-blue-600 mb-4">
                    <i class="fas fa-microscope text-4xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-4">Microscopy</h3>
                <p class="text-gray-600">High-resolution microscopy and imaging services for detailed analysis.</p>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <img src="assets/images/lab-about.jpg" alt="Laboratory Equipment" class="rounded-lg shadow-xl">
            </div>
            <div class="space-y-6">
                <h2 class="text-3xl font-bold text-gray-900">About Astra Labs</h2>
                <p class="text-gray-600">
                    Astra Labs is a leading research and testing laboratory dedicated to providing accurate and reliable results. 
                    Our team of experienced scientists and state-of-the-art equipment ensure the highest quality of service.
                </p>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <h4 class="font-semibold text-blue-600">20+ Years</h4>
                        <p class="text-gray-600">Industry Experience</p>
                    </div>
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <h4 class="font-semibold text-blue-600">1000+</h4>
                        <p class="text-gray-600">Projects Completed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Doctors Section -->
<section id="doctors" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Expert Team</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Meet our team of experienced professionals dedicated to providing the highest quality laboratory services.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Doctor 1 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                <img src="assets/images/doctor1.jpg" alt="Dr. Sarah Johnson" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Dr. Sarah Johnson</h3>
                    <p class="text-blue-600 mb-4">Chief Laboratory Director</p>
                    <p class="text-gray-600 mb-4">Ph.D. in Biochemistry with 15+ years of experience in clinical research and laboratory management.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-blue-600 hover:text-blue-800">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="text-blue-600 hover:text-blue-800">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Doctor 2 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                <img src="assets/images/doctor2.jpg" alt="Dr. Michael Chen" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Dr. Michael Chen</h3>
                    <p class="text-blue-600 mb-4">Head of Research</p>
                    <p class="text-gray-600 mb-4">Specialized in Molecular Biology with expertise in genetic testing and DNA analysis.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-blue-600 hover:text-blue-800">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="text-blue-600 hover:text-blue-800">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Doctor 3 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                <img src="assets/images/doctor3.jpg" alt="Dr. Emily Rodriguez" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Dr. Emily Rodriguez</h3>
                    <p class="text-blue-600 mb-4">Clinical Laboratory Specialist</p>
                    <p class="text-gray-600 mb-4">Expert in clinical diagnostics with a focus on advanced microscopy and cellular analysis.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-blue-600 hover:text-blue-800">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="text-blue-600 hover:text-blue-800">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">What Our Clients Say</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Read testimonials from our satisfied clients and partners.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-gray-50 rounded-xl p-8 shadow-lg hover:shadow-xl transition duration-300">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                        <img src="assets/images/client1.jpg" alt="John Smith" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900">John Smith</h4>
                        <p class="text-gray-600 text-sm">Research Director, PharmaCorp</p>
                    </div>
                </div>
                <p class="text-gray-600 italic">"Astra Labs has been instrumental in our research projects. Their attention to detail and accuracy in results have helped us achieve breakthrough discoveries."</p>
                <div class="mt-4 text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <!-- Testimonial 2 -->
            <div class="bg-gray-50 rounded-xl p-8 shadow-lg hover:shadow-xl transition duration-300">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                        <img src="assets/images/client2.jpg" alt="Dr. Lisa Wang" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900">Dr. Lisa Wang</h4>
                        <p class="text-gray-600 text-sm">Clinical Researcher, MedTech</p>
                    </div>
                </div>
                <p class="text-gray-600 italic">"The team at Astra Labs is exceptional. Their state-of-the-art equipment and expert staff have significantly contributed to our clinical trials' success."</p>
                <div class="mt-4 text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <!-- Testimonial 3 -->
            <div class="bg-gray-50 rounded-xl p-8 shadow-lg hover:shadow-xl transition duration-300">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                        <img src="assets/images/client3.jpg" alt="Robert Johnson" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900">Robert Johnson</h4>
                        <p class="text-gray-600 text-sm">CEO, BioInnovate</p>
                    </div>
                </div>
                <p class="text-gray-600 italic">"Working with Astra Labs has been a game-changer for our company. Their innovative approach and reliable results have helped us maintain our industry leadership."</p>
                <div class="mt-4 text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Contact Us</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Get in touch with our team for any inquiries or to schedule a consultation.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div class="bg-white rounded-xl shadow-lg p-8">
                <form action="process_contact.php" method="POST" class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" id="name" name="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea id="message" name="message" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                        Send Message
                    </button>
                </form>
            </div>
            <div class="space-y-8">
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h3 class="text-xl font-semibold mb-4">Visit Us</h3>
                    <div class="space-y-4">
                        <p class="flex items-center text-gray-600">
                            <i class="fas fa-map-marker-alt w-6 text-blue-600"></i>
                            123 Science Street, Lab City
                        </p>
                        <p class="flex items-center text-gray-600">
                            <i class="fas fa-phone w-6 text-blue-600"></i>
                            (555) 123-4567
                        </p>
                        <p class="flex items-center text-gray-600">
                            <i class="fas fa-envelope w-6 text-blue-600"></i>
                            info@astralabs.com
                        </p>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h3 class="text-xl font-semibold mb-4">Business Hours</h3>
                    <div class="space-y-2 text-gray-600">
                        <p>Monday - Friday: 9:00 AM - 6:00 PM</p>
                        <p>Saturday: 10:00 AM - 4:00 PM</p>
                        <p>Sunday: Closed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?> 