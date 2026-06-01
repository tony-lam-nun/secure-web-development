# secure-web-development
Secure Web Development – Turkey Tour Platform
A secure, responsive full-stack web application developed for Excursion Co., highlighting
a premium Holiday Day Trip Excursion across the beautiful West-Coast line of Istanbul, Turkey. 
This repository demonstrates how to integrate vital security controls into basic frontend and backend
infrastructure to defend a customer-facing portal against common OWASP vulnerabilities.

# Tech StackFrontend: 
## HTML5
## CSS3
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
## git clone https://github.com

