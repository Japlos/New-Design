<?php
session_start();  // Start the session

// Database connection parameters
$servername = "localhost";
$username = "";
$password = "";
$dbname = "onament";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize input data
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $student_number = isset($_POST['student_number']) ? sanitize_input($_POST['student_number']) : null;
    $first_name = isset($_POST['first_name']) ? sanitize_input($_POST['first_name']) : null;
    $last_name = isset($_POST['last_name']) ? sanitize_input($_POST['last_name']) : null;
    $course = isset($_POST['course']) ? sanitize_input($_POST['course']) : null;
    $email = isset($_POST['email']) ? sanitize_input($_POST['email']) : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;

    // Check if all required fields are filled
    if ($student_number && $first_name && $last_name && $course && $email && $password) {
        // Hash the password for security
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO students (student_number, first_name, last_name, course, email, password) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $student_number, $first_name, $last_name, $course, $email, $hashed_password);

        // Execute the statement
        if ($stmt->execute()) {
            // Store user name in session
            $_SESSION['first_name'] = $first_name;
            $_SESSION['last_name'] = $last_name;

            // Redirect to the dashboard page
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Error: All fields are required. Please check the form and try again.";
    }
}

// Close connection
$conn->close();
?>
