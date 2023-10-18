<!DOCTYPE html>
<html>
<head>
    <title>Job Qualification Checker</title>
</head>
<body>
    <h1>Job Qualification Checker</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input
        $jobOffer = $_POST["jobOffer"];
        $workExperience = $_POST["workExperience"];
        
        // Minimum required experience for the job
        $minimumExperience = 2; // 2 years
        
        // Check if the user is qualified
        if ($workExperience >= $minimumExperience) {
            echo "<p>Congratulations! You are qualified for the job offer as a software developer.$jobOffer</p>" ;
        } else {
            echo "<p>Sorry, you do not meet the minimum work experience requirement for the job offer.</p>";
        }
    }
    ?>

    <h2>Job Offer Details</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="jobOffer">Job Offer:</label>
        <input type="text" id="jobOffer" name="jobOffer" required><br><br>
        
        <label for="workExperience">Work Experience (in years):</label>
        <input type="number" id="workExperience" name="workExperience" required><br><br>
        
        <input type="submit" value="Check Qualification">
    </form>
</body>
</html>
