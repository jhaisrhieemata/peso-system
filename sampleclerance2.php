<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mfpesodb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch form data
$name = $_POST['name'];
$address = $_POST['address'];
$paragraph = $_POST['paragraph'];
$purpose = $_POST['purpose'];
$gender = ""; // Set gender based on your logic
$date_issued = date("Y-m-d");

// Generate certificate HTML template
$html = "
<html>
<head>
    <title>Certificate Template</title>
    <style>
    /* Add CSS styles for your certificate template */
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    .logo-container {
        display: flex;
        justify-content: space-between;
        width: 100%;
    }
    .logo-container img {
        max-width: 150px;
        height: auto;
    }
</style>
    <script>
        function printCertificate() {
            window.print();
            document.getElementById('printButton').style.display = 'none';
        }
    </script>
</head>
<body>
    <h2>Certificate of Completion</h2>
    <p>Name: $name</p>
    <p>Address: $address</p>
    <p>Gender: $gender</p>
    <p>Date Issued: $date_issued</p>
    <p>Paragraph: $paragraph</p>
    <p>Purpose: $purpose</p>
    
    <button id='printButton' onclick='printCertificate()'>Print Certificate</button>
</body>
</html>
";

// Save certificate details in the database
$sql = "INSERT INTO certificates (name, address, paragraph, purpose, gender, date_issued) VALUES ('$name', '$address', '$paragraph', '$purpose', '$gender', '$date_issued')";
if ($conn->query($sql) === TRUE) {
    // Save HTML template as a file
    $filename = "$name - $purpose.html";
    file_put_contents($filename, $html);
    echo "Certificate generated and saved as $filename.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
<form action="certificate.php" method="POST">
    <label for="recipient_name">Recipient Name:</label>
    <input type="text" name="recipient_name" required>
    
    <label for="course_name">Course Name:</label>
    <input type="text" name="course_name" required>
    
    <label for="date_issued">Date Issued:</label>
    <input type="date" name="date_issued" required>
    
    <input type="submit" value="Generate Certificate">
</form>