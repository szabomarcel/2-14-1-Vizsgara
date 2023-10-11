<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // You can add validation and security checks here before proceeding with registration.
    
    // For this example, let's assume you have a database connection.
    // You should replace these database credentials with your own.
    $db_host = "localhost";
    $db_username = "your_db_username";
    $db_password = "your_db_password";
    $db_name = "your_db_name";

    // Create a database connection
    $conn = new mysqli($db_host, $db_username, $db_password, $db_name);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert user data into the database (you should hash the password for security)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful. You can now log in.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Assuming you have a database connection
        $db_host = "localhost";
        $db_username = "your_db_username";
        $db_password = "your_db_password";
        $db_name = "your_db_name";
    
        // Replace 'your_db_username', 'your_db_password', and 'your_db_name' with your actual database credentials.
    
        $conn = new mysqli($db_host, $db_username, $db_password, $db_name);
    
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        // Assuming you have a user ID to identify the record you want to delete
        $user_id_to_delete = $_POST["user_id"];
    
        // Perform the deletion
        $sql = "DELETE FROM users WHERE user_id = $user_id_to_delete";
    
        if ($conn->query($sql) === TRUE) {
            echo "User record deleted successfully.";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    
        $conn->close();
    }
}
?>