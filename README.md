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

##Previews:

![Screenshot 2025-06-15 230227](https://github.com/user-attachments/assets/8c13487c-6fdf-4e3d-9ee5-c847b47a1522)
![Screenshot 2025-06-15 230220](https://github.com/user-attachments/assets/12fec137-7c5a-43cb-8354-b029e7e1c51d)
![Screenshot 2025-06-15 230214](https://github.com/user-attachments/assets/51205662-7f80-4080-bd02-0db65704cd2e)
![Screenshot 2025-06-15 230203](https://github.com/user-attachments/assets/a2d2db30-9fbb-42e3-9fd9-628c947ad9dc)
![Screenshot 2025-06-15 230135](https://github.com/user-attachments/assets/af37079e-babb-4a5c-a2ab-aa162e5f4105)
![Screenshot 2025-06-15 230124](https://github.com/user-attachments/assets/a2fe0ac8-31e3-4f7b-b6fb-fdb6493a9120)
![Screenshot 2025-06-15 230111](https://github.com/user-attachments/assets/0d0892e0-1887-4ddd-a7a1-880859762f5c)
![Screenshot 2025-06-15 230101](https://github.com/user-attachments/assets/b16214c5-4844-4084-a548-38cfb9592f1c)
![Screenshot 2025-06-15 230042](https://github.com/user-attachments/assets/56992af8-7857-4050-a16f-15b3db93ee53)
![Screenshot 2025-06-15 225920](https://github.com/user-attachments/assets/e2928432-c10b-42bd-bbdb-73d395f2d58e)
![Screenshot 2025-06-15 225744](https://github.com/user-attachments/assets/53a37797-e290-488a-947f-1af161625b64)
![Screenshot 2025-06-15 225737](https://github.com/user-attachments/assets/daada479-9425-49c1-91bb-9713f44a5025)
![Screenshot 2025-06-15 225729](https://github.com/user-attachments/assets/ce4bbc7a-b8f9-4d44-a6a3-79e990256180)
![Screenshot 2025-06-15 225720](https://github.com/user-attachments/assets/7dcb598a-ae6a-49b0-811f-3e195aa40f8b)
![Screenshot 2025-06-15 225712](https://github.com/user-attachments/assets/5fd004ea-3cf1-4f04-aff0-f462eaa17095)
![Screenshot 2025-06-15 225702](https://github.com/user-attachments/assets/38819d2e-0d17-4042-b8e2-944eca1cdd8e)
![Screenshot 2025-06-15 223116](https://github.com/user-attachments/assets/5d687436-486b-4a1f-8334-e362b697dd2f)
![Screenshot 2025-06-15 223102](https://github.com/user-attachments/assets/fabe5227-c610-4a52-9f8f-e80969f3c51c)
![Screenshot 2025-06-15 223052](https://github.com/user-attachments/assets/45f83212-4643-4644-8f5a-ed1a27136831)
![Screenshot 2025-06-15 231143](https://github.com/user-attachments/assets/af29ecbb-b83c-47af-ab63-3a4332094164)
![Screenshot 2025-06-15 231042](https://github.com/user-attachments/assets/b7dbfaee-9b81-48a9-a041-03c51664f0fd)
![Screenshot 2025-06-15 230605](https://github.com/user-attachments/assets/679f9843-bdf8-4350-b65f-278d713ed768)
![Screenshot 2025-06-15 230340](https://github.com/user-attachments/assets/9f3a8bff-435d-4a46-a231-66f242bb2427)
![Screenshot 2025-06-15 230256](https://github.com/user-attachments/assets/ace748a8-2b5c-4af1-928b-5f410dc7572f)


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
