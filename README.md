# secure-web-development
Secure Web Development – Turkey Tour Platform
A secure, responsive full-stack web application developed for Excursion Co., highlighting
a premium Holiday Day Trip Excursion across the beautiful West-Coast line of Istanbul, Turkey. 
This repository demonstrates how to integrate vital security controls into basic frontend and backend
infrastructure to defend a customer-facing portal against common OWASP vulnerabilities.

# Tech Stack
## Frontend: HTML5, CSS3
## Backend: PHP
## Database: MySQL

# Implemented Security Protocols
## SQL Injection (SQLi) Prevention:
Built using secure database connection practices, leveraging PHP prepared statements 
and parameterized queries for all transaction handling.
## Cross-Site Scripting (XSS) Protection:
Applied context-aware input sanitization and output escaping filters before rendering any 
dynamic content on pages.
## Secure Authentication Management:
Leveraged PHP’s native password_hash implementation using strong cryptographic hashing 
algorithms to ensure stored passwords are never kept in plain text.
## Session Validation & Authorization:
Integrated strict structural checkpoints checking authorization variables on every page load. 
This forces session-valid checks and blocks unauthorized direct link access to secure user 
areas without logging in.

# Core Features
## Dynamic Tour Portal:
Highlights the historical 7-hill layout, coastal details, and local attractions like
the Blue Mosque, Grand Bazaar, and Basilica Cistern.
## User Authentication Hub:
Secure navigation paths containing dedicated client Registration, Secure Login, and
session-clearing Logout zones.
##Input Enforcement:
Strict client-side and server-side validation bounds to ensure clean, structured data captures.

# Local Installation Steps:
## Clone the Repository:
   git clone https://github.com/tony-lam-nun/secure-web-development
## Environment Configuration:
Move the project files to your local web server root directory (e.g., htdocs in XAMPP or www in WampServer).
Import the provided SQL schema file into your local MySQL instance via phpMyAdmin.
## Database Hook Setup: 
(functions.php or dbconn.php)
phpdefine('DB_SERVER', 'localhost');
define('DB_USERNAME', 'unn_w22042968');
define('DB_PASSWORD', 'Shogun1304@');
define('DB_NAME', 'unn_w22042968');
## Boot Up:
Start Apache and MySQL through your environment dashboard.
Access the application locally by navigating to
http://localhost/LOCALHOST/content/index.html.

