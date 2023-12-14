<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internship Application</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <style>
        /* Reset some default browser styles */
        body,
        h1,
        div {
            margin: 0;
            padding: 0;
        }

        /* Apply a background color and set text color */
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
            color: #333;
            line-height: 1.6;
        }

        /* Style the container */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Style the success message */
        .success-message {
            background-color: #4CAF50;
            color: #fff;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            font-size: 24px;
        }
    </style>
</head>

<body>
    
    <div class="container">
        <?php
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Database connection details
            // $servername = "localhost";
            // $username = "root";
            // $password = "";
            // $dbname = "algodream";

            $servername = "localhost";
            $username = "u537311607_dreamersmoveme";
            $password = "Askery786.@";
            $dbname = "u537311607_algodream";

            // Create a database connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Get form data
            $name = $_POST["name"];
            $phone = $_POST["phone"];
            $email = $_POST["email"];
            $special = $_POST["special"];

            // Upload and store the resume file
            $resumeFileName = $_FILES["resume"]["name"];
            $resumeTmpName = $_FILES["resume"]["tmp_name"];
            $resumeUploadPath = "uploads/" . $resumeFileName;

            // Move the uploaded file to a specific directory
            move_uploaded_file($resumeTmpName, $resumeUploadPath);

            // Insert data into the database
            $sql = "INSERT INTO applications (name, phone, email, special, resume) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssss", $name, $phone, $email, $special, $resumeUploadPath);

            if ($stmt->execute()) {
                echo '<div class="success-message">';
                echo '<h1>Application submitted successfully!</h1>';
                echo '</div>';
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            // Close the database connection
            $stmt->close();
            $conn->close();
        } else {
            // Redirect back to the form if accessed directly
            header("Location: index.php");
            exit();
        }
        ?>
    </div>
</body>

</html>