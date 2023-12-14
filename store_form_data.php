<?php
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['organization']) || empty($_POST['message'])) {
    echo "All fields are required.";
    exit;
}


// Validate form data
if(strlen($_POST['name']) < 3) {
    echo "Name must be greater than 3 characters.";
    exit;
  }
  if(!preg_match('/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]+$/i', $_POST['email'])) {
    echo "Invalid email format.";
    exit;
  }
  if(!ctype_digit($_POST['phone'])) {
    echo "Phone number must contain only numeric values.";
    exit;
  }
  if(strlen($_POST['organization']) < 2) {
    echo "Organization name must be greater than 2 characters.";
    exit;
  }
  if(strlen($_POST['message']) < 5) {
    echo "Message must be greater than 5 characters.";
    exit;
  }


// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['organization'];
$message = $_POST['message'];

// Connect to database
$servername = "localhost";
$username = "u537311607_dreamersmoveme";
$password = "Askery786.@";
$dbname = "u537311607_algodream";
// // Connect to database
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "algodream";


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind the query
$stmt = $conn->prepare("INSERT INTO orders (name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $email, $phone, $subject, $message);

// Execute the query
if ($stmt->execute()) {
  echo 1;
} else {
  echo 0;
}

// Close the statement and database connection
$stmt->close();
$conn->close();
?>
