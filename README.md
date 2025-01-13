# Power Gym Website

## Overview

Power Gym Website is a dynamic web application designed to showcase the services, facilities, and programs of Power Gym while providing users with interactive features like user registration, class booking, and blog engagement. The project integrates modern web technologies and a MySQL database to deliver a seamless and responsive user experience.

---

## Features

### User-Facing Features:
- **User Registration and Login**: Users can create accounts, log in, and manage their sessions.
- **Class Booking**: Users can view class schedules, check availability, and book classes.
- **Blog**: A dynamic blog where users can post and view comments.
- **Contact Form**: Users can send inquiries and subscribe to newsletters.
- **Responsive Design**: The website is mobile-friendly and optimized for all devices.

### Admin Features:
- **Admin Login**: Secure login functionality for admin users.
- **Dashboard**: Admins can view, edit, and delete user accounts.
- **Real-Time Updates**: User data updates dynamically using AJAX.
- **Newsletter Management**: Admins can manage newsletter subscriptions.

---

## Technologies Used

### Frontend:
- HTML5, CSS3, JavaScript
- jQuery for dynamic updates and AJAX requests
- Font Awesome for icons

### Backend:
- PHP for server-side logic
- MySQL/MariaDB for database management
- XAMPP for local development and testing

### Tools:
- phpMyAdmin for database management
- Visual Studio Code for code development
- GitHub for version control

---

## Installation and Setup

### Prerequisites:
- Install [XAMPP](https://www.apachefriends.org/index.html).
- Install [Git](https://git-scm.com/).

### Steps:
1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/power-gym-website.git
   mv power-gym-website /path-to-xampp/htdocs/
   http://localhost/power-gym-website/

2. Project Structure
```   
├── CSS/
│   ├── mainstyle.css
├── Images/
├── PHP/
│   ├── navbar.php
│   ├── login.php
│   ├── loginprocess.php
│   ├── admin_login.php
│   ├── admin_loginprocess.php
│   ├── admin_dashboard.php
│   ├── add_comments.php
│   ├── add_comments_process.php
│   ├── get_comments.php
├── index.php
├── README.md
```

##  Key Functionalities
  User Authentication:
  Process: Sessions are managed to track user login status.
  Security: Passwords are hashed using password_hash().
  Class Management:
  Users can view, book, and cancel gym classes.
  Availability is updated dynamically using AJAX.
  Blog Comments:
    Users can add comments to blog posts.
    Comments are fetched dynamically and displayed without refreshing the page.
  Admin Panel:
    Secure login for admin users.
    Manage user accounts (add, edit, delete) with real-time updates.
    Challenges and Solutions
    
##  Implementing Newsletter Subscription:

- Challenge: Sending emails via a local server.
- Solution: Used PHPMailer for reliable email delivery.
   
###  AJAX Integration:

-Challenge: Loading data dynamically without page refresh.
-Solution: Implemented jQuery AJAX for real-time updates.

###  Session Management:

  -  Challenge: Maintaining user sessions securely.
  -  Solution: Used PHP sessions with strict validation.
    
###  Future Improvements
  - Node.js and MongoDB: Transitioning to a more modern stack for scalability and performance.
  - OAuth Authentication: Adding social media login options.
  - Enhanced Analytics: Implementing Google Analytics for user tracking and insights.



