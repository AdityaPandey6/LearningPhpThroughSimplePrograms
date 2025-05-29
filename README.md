# PHP Learning Projects

This directory contains various PHP projects and examples focused on web development fundamentals, database connectivity, session management, and user authentication.

## Projects Overview

### 📚 Library Management System
- **LibraryManagementSimple.php** - A basic library management system for adding and searching books by accession number
- Features: Book registration, search functionality, MySQL database integration

### 🔐 Authentication & Session Management
- **login.php** - User login form with credential validation
- **welcome.php** / **welcome copy.php** - Welcome pages for authenticated users
- **logout.php** - Session termination and user logout
- **authenticate.php** - User authentication logic
- **WepageVisitCountBySession.php** - Session-based page visit counter
- **simpleLoginLocalStorage.php** - Login system with local storage implementation

### 🗃️ Database Operations
- **FetchingDataFromDatabase.php** - Examples of retrieving data from MySQL database
- **index.php** - Department-based record filtering from PERS table
- **config.php** - Database configuration settings
- **setup.php** - Database setup and initialization scripts

### 🍪 Cookie Management
- **LastVisited.php** - Cookie demonstration for tracking last visit time

### 🛠️ Utilities
- **error.php** - Error handling and display page

## Technology Stack

- **Backend**: PHP 7.x+
- **Database**: MySQL
- **Frontend**: HTML5, CSS3, JavaScript
- **Server**: Apache (XAMPP recommended)

## Setup Instructions

1. **Prerequisites**
   - Install XAMPP or similar local development environment
   - Ensure Apache and MySQL services are running

2. **Database Setup**
   - Create required databases (e.g., `library`, `pers`)
   - Import or create necessary tables
   - Update database credentials in configuration files

3. **Running the Applications**
   - Place this directory in your `htdocs` folder
   - Access via: `http://localhost/Learning/[filename].php`

## Key Features Demonstrated

- **Session Management**: User sessions, page visit tracking
- **Cookie Handling**: Setting, reading, and deleting cookies
- **Database Connectivity**: MySQL integration with PHP
- **Form Processing**: POST data handling and validation
- **User Authentication**: Login/logout functionality
- **Data Filtering**: Dynamic record filtering based on user selection

## Learning Objectives

This collection serves as a practical reference for:
- PHP syntax and best practices
- Database operations (CRUD)
- Session and cookie management
- User authentication workflows
- Form handling and validation
- Basic security considerations

## Note

These projects are designed for educational purposes and local development. For production use, implement proper security measures including input validation, SQL injection prevention, and secure authentication protocols.

---

**Author**: Aditya Pandey  
**Student ID**: 220111919  
**Semester**: 06  
**Section**: C2