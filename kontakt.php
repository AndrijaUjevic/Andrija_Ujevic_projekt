<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Form</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            form {
                border: 1px solid #ccc;
                padding: 20px;
                border-radius: 5px;
                width: 300px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            input, textarea {
                width: 90%;
                padding: 10px;
                margin: 10px 0;
                border: 1px solid #ccc;
                border-radius: 5px;
            }
            button {
                padding: 10px;
                background-color: #28a745;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
            button:hover {
                background-color: #218838;
            }
        </style>
        <script>
            function validateForm() {
                var firstName = document.forms["contactForm"]["first_name"].value;
                var lastName = document.forms["contactForm"]["last_name"].value;
                var email = document.forms["contactForm"]["email"].value;
                var reason = document.forms["contactForm"]["reason"].value;
                if (firstName == "" || lastName == "" || email == "" || reason == "") {
                    alert("All fields must be filled out");
                    return false;
                }
                var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
                if (!emailPattern.test(email)) {
                    alert("Please enter a valid email address");
                    return false;
                }
                return true;
            }
        </script>
    </head>
    <body>
        <form name="contactForm" action="" method="post" onsubmit="return validateForm()">
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name">
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name">
            <label for="email">Email</label>
            <input type="text" id="email" name="email">
            <label for="reason">Reason for Contact</label>
            <textarea id="reason" name="reason"></textarea>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kontakti";
$port = 3308;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $reason = $_POST['reason'];

    $stmt = $conn->prepare("INSERT INTO contacts (first_name, last_name, email, reason) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $firstName, $lastName, $email, $reason);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>