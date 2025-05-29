# PHP Login System

A complete PHP login system with user authentication, database integration, and modern UI.

## Features

- **Secure Login Form**: HTML form with modern styling
- **Database Authentication**: Connects to MySQL database to verify credentials
- **Password Security**: Uses PHP's password_hash() and password_verify() functions
- **Session Management**: Maintains user sessions
- **Error Handling**: Shows appropriate error messages with redirect links
- **Welcome Page**: Displays personalized welcome message after successful login
- **Logout Functionality**: Secure session destruction

## Files Structure

- `config.php` - Database configuration and connection
- `login.php` - Login form with modern styling
- `authenticate.php` - Handles login authentication logic
- `welcome.php` - Welcome page for authenticated users
- `error.php` - Error page with redirect link to login
- `logout.php` - Handles user logout
- `setup.php` - Database and table creation with sample users

## Setup Instructions

1. **Start your web server** (XAMPP, WAMP, or similar)
2. **Start MySQL** service
3. **Run the setup script** by navigating to `http://localhost/PhpLearning/setup.php`
4. **Access the login page** at `http://localhost/PhpLearning/login.php`

## Test Credentials

After running setup.php, you can use these test accounts:

- **Username**: admin, **Password**: admin123
- **Username**: user1, **Password**: password1  
- **Username**: testuser, **Password**: test123

## Database Configuration

The system uses the following default database settings:
- **Host**: localhost
- **Database**: user_auth
- **Username**: root
- **Password**: (empty)

Modify `config.php` if your database settings are different.

## Security Features

- Password hashing using PHP's password_hash() function
- SQL injection prevention using prepared statements
- Session-based authentication
- Input validation and sanitization
- Proper error handling

## How It Works

1. User enters username/password on login form
2. Form submits to `authenticate.php`
3. Script connects to database and verifies credentials
4. If correct: redirects to welcome page with session
5. If incorrect: redirects to error page with link back to login
6. Users can logout to destroy session and return to login
