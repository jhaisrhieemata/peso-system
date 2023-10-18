<?php
// Your database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$database = "mfpesodb";

// Create a database connection
// $conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Replace these with the actual employment_id and job_opening_id you want to use
$employment_id = 1;
$job_opening_id = 2;

// SQL query to predict the job
$sql = "SELECT j.job_name
        FROM mis_job_opening j
        INNER JOIN mis_employment e ON j.job_opening_id = e.job_opening_id
        WHERE e.employment_id = ? AND j.job_opening_id = ?";

// Prepare and bind the parameters
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $employment_id, $job_opening_id);

// Execute the query
$stmt->execute();

// Get the result
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $predictedJob = $row['job_name'];
    echo "Predicted Job: " . $predictedJob;
} else {
    echo "Job not found for the given IDs.";
}

// Close the statement and the connection
$stmt->close();
$conn->close();
?>