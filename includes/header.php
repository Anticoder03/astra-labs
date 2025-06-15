<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astra Labs - Advanced Laboratory Testing</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="font-sans">
    <!-- Header -->
    <header class="bg-white shadow-md fixed w-full top-0 z-50">
        <nav class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="index.php" class="text-2xl font-bold text-blue-600">Astra Labs</a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="index.php" class="text-gray-800 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300">Home</a>
                    <a href="about.php" class="text-gray-800 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300">About</a>
                    <a href="services.php" class="text-gray-800 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300">Services</a>
                    <a href="team.php" class="text-gray-800 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300">Our Team</a>
                    <a href="contact.php" class="text-gray-800 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300">Contact</a>
                    <a href="appointment.php" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300">Book Appointment</a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" class="mobile-menu-button text-gray-500 hover:text-gray-600 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation -->
            <div class="mobile-menu hidden md:hidden">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="index.php" class="block text-gray-800 hover:text-blue-600 px-3 py-2 rounded-md text-base font-medium">Home</a>
                    <a href="about.php" class="block text-gray-800 hover:text-blue-600 px-3 py-2 rounded-md text-base font-medium">About</a>
                    <a href="services.php" class="block text-gray-800 hover:text-blue-600 px-3 py-2 rounded-md text-base font-medium">Services</a>
                    <a href="team.php" class="block text-gray-800 hover:text-blue-600 px-3 py-2 rounded-md text-base font-medium">Our Team</a>
                    <a href="contact.php" class="block text-gray-800 hover:text-blue-600 px-3 py-2 rounded-md text-base font-medium">Contact</a>
                    <a href="appointment.php" class="block bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300 text-center">Book Appointment</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Add margin to account for fixed header -->
    <div class="h-20"></div>

    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-menu-button').addEventListener('click', function() {
            document.querySelector('.mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html> 