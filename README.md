# Library Management System (Simple)

This is a simple PHP-based Library Management System that allows you to **add books** and **search for books by their Accession Number**. The project uses MySQL for data storage and is designed for easy setup with XAMPP or similar local development environments.

## Features

- **Add Book:** Enter book details (Title, Author, Acc Number, Edition, Publisher) and store them in the database.
- **Search Book:** Find a book by its Accession Number and view its details.
- **Simple UI:** Minimal interface for demonstration and learning purposes.

## Requirements

- PHP (7.x or above recommended)
- MySQL
- XAMPP, WAMP, or similar local server environment
- Web browser

## Setup Instructions

1. **Clone or Download the Repository**

   ```
   git clone https://github.com/YOUR-USERNAME/YOUR-REPO.git
   ```

2. **Place the Project in Your Web Directory**

   Copy the project folder (e.g., `Learning`) to your XAMPP `htdocs` directory:
   ```
   c:\xampp\htdocs\Learning
   ```

3. **Create the Database and Table**

   - Start Apache and MySQL from XAMPP Control Panel.
   - Open phpMyAdmin at [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
   - Create a database named `library`.
   - Run the following SQL to create the `bookstorage` table:

     ```sql
     CREATE TABLE bookstorage (
         id INT AUTO_INCREMENT PRIMARY KEY,
         title VARCHAR(255) NOT NULL,
         author VARCHAR(255) NOT NULL,
         accnumber VARCHAR(100) NOT NULL UNIQUE,
         edition VARCHAR(100) NOT NULL,
         publisher VARCHAR(255) NOT NULL
     );
     ```

4. **Configure Database Connection**

   The database connection settings are in the PHP files (default: `root` user, no password). Change them if your setup is different.

5. **Run the Application**

   - Open your browser and go to:  
     [http://localhost/Learning/LibraryManagementSimple.php](http://localhost/Learning/LibraryManagementSimple.php)

## Usage

- **Add Book:** Click "Add Book", fill in the form, and submit.
- **Search Book:** Enter an Accession Number in the search form and submit to view book details.

## Notes

- This project is for learning and demonstration purposes. For production use, always validate and sanitize user input, and use prepared statements to prevent SQL injection.
- The UI is intentionally minimal for clarity.

## License

This project is open source and free to use for educational purposes.

---
```# Library Management System (Simple)

This is a simple PHP-based Library Management System that allows you to **add books** and **search for books by their Accession Number**. The project uses MySQL for data storage and is designed for easy setup with XAMPP or similar local development environments.

## Features

- **Add Book:** Enter book details (Title, Author, Acc Number, Edition, Publisher) and store them in the database.
- **Search Book:** Find a book by its Accession Number and view its details.
- **Simple UI:** Minimal interface for demonstration and learning purposes.

## Requirements

- PHP (7.x or above recommended)
- MySQL
- XAMPP, WAMP, or similar local server environment
- Web browser

## Setup Instructions

1. **Clone or Download the Repository**

   ```
   git clone https://github.com/YOUR-USERNAME/YOUR-REPO.git
   ```

2. **Place the Project in Your Web Directory**

   Copy the project folder (e.g., `Learning`) to your XAMPP `htdocs` directory:
   ```
   c:\xampp\htdocs\Learning
   ```

3. **Create the Database and Table**

   - Start Apache and MySQL from XAMPP Control Panel.
   - Open phpMyAdmin at [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
   - Create a database named `library`.
   - Run the following SQL to create the `bookstorage` table:

     ```sql
     CREATE TABLE bookstorage (
         id INT AUTO_INCREMENT PRIMARY KEY,
         title VARCHAR(255) NOT NULL,
         author VARCHAR(255) NOT NULL,
         accnumber VARCHAR(100) NOT NULL UNIQUE,
         edition VARCHAR(100) NOT NULL,
         publisher VARCHAR(255) NOT NULL
     );
     ```

4. **Configure Database Connection**

   The database connection settings are in the PHP files (default `root` user, no password). Change them if your setup is different.

5. **Run the Application**

   - Open your browser and go to:  
     [http://localhost/Learning/LibraryManagementSimple.php](http://localhost/Learning/LibraryManagementSimple.php)

## Usage

- **Add Book:** Click "Add Book", fill in the form, and submit.
- **Search Book:** Enter an Accession Number in the search form and submit to view book details.

## Notes

- This project is for learning and demonstration purposes. For production use, always validate and sanitize user input, and use prepared statements to prevent SQL injection.
- The UI is intentionally minimal for clarity.

## License

This project is open source and free to use for educational purposes.

---
