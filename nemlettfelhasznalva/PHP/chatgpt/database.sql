CREATE DATABASE user_registration;USE user_registration;

CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);
// Replace these with your actual database credentials
$db_host = "localhost";
$db_username = "your_db_username";
$db_password = "your_db_password";
$db_name = "user_registration"; // Use the database name you created

// Create a database connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')"; 