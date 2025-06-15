# Astra Labs - Laboratory Management System

A modern web-based laboratory management system built with PHP, MySQL, and Tailwind CSS.

## Features

- Modern, responsive design using Tailwind CSS
- Appointment booking system
- Email notifications using PHPMailer
- Team management
- Service catalog
- Contact management
- Admin dashboard
- Mobile-friendly interface

## Requirements

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Apache/Nginx web server
- Composer (for dependency management)
- SMTP server (for email functionality)

## Installation

1. Clone the repository:
```bash
git clone https://github.com/Anticoder03/astra-labs.git
cd astra_pharma
```

2. Install dependencies:
```bash
composer install
```



4. Configure the database connection:
- Copy `includes/config.example.php` to `includes/config.php`
- Update the database credentials in `config.php`

5. Configure email settings:
- Update SMTP settings in `process_appointment.php`
- Set your email credentials

6. Set up your web server:
- Point your web server to the project directory
- Ensure the web server has write permissions for uploads

## Configuration

### Database Configuration
Edit `includes/config.php`:
```php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'your_username');
define('DB_PASSWORD', 'your_password');
define('DB_NAME', 'your_database');
```

### Email Configuration
Edit `process_appointment.php`:
```php
$mail->Host = 'smtp.gmail.com';
$mail->Username = 'your-email@gmail.com';
$mail->Password = 'your-app-password';
```

## Usage

1. Access the website through your web browser
2. Navigate to the appointment page to book tests
3. Use the admin panel to manage appointments and users

## Security

- All user inputs are sanitized
- Passwords are hashed
- CSRF protection implemented
- XSS prevention measures in place
- SQL injection prevention

## Contributing

1. Fork the repository
2. Create your feature branch
3. Commit your changes
4. Push to the branch
5. Create a Pull Request

## Support

For support, please contact:
- Email: ap5381545@gmail.com

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Author

- **Anticoder03**
- Email: ap5381545@gmail.com

## Acknowledgments

- Tailwind CSS for the frontend framework
- PHPMailer for email functionality
- All contributors who have helped with the project

## Disclaimer

This software is provided "as is", without warranty of any kind. The author is not responsible for any damages or issues that may arise from using this software. 