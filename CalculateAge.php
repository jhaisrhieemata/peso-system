<!DOCTYPE html>
<html>
<head>
    <title>Calculate Age</title>
</head>
<body>
    <h1>Calculate Age</h1>
    <form method="post" action="">
        <label for="date_of_birth">Date of Birth:</label>
        <input type="date" id="date_of_birth" name="date_of_birth" required>
    </form>

    <div id="ageDisplay"></div>

    <script>
        // Function to calculate and display age
        function calculateAge() {
            // Get the user input date of birth
            var dobInput = document.getElementById('date_of_birth').value;
            var date_of_birth = new Date(dobInput);

            // Calculate age
            var today = new Date();
            var age = today.getFullYear() - date_of_birth.getFullYear();

            // Check if the birthday has occurred this year
            if (today.getMonth() < date_of_birth.getMonth() || (today.getMonth() === date_of_birth.getMonth() && today.getDate() < date_of_birth.getDate())) {
                age--;
            }

            // Display the age
            var ageDisplay = document.getElementById('ageDisplay');
            ageDisplay.innerHTML = age;
        }

        // Add an event listener to the date input field
        document.getElementById('date_of_birth').addEventListener('input', calculateAge);
    </script>
</body>
</html>
<!-- 
<!DOCTYPE html>
<html>
<head>
    <title>Calculate Age</title>
</head>
<body>
    <h1>Calculate Age</h1>
    <form method="post" action="">
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>
        <input type="submit" name="submit" value="Calculate Age">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Get the user input date of birth
        $dob = $_POST['dob'];

        // Calculate age
        $today = new DateTime();
        $birthdate = new DateTime($dob);
        $age = $today->diff($birthdate)->y;

        // Display the age
        echo "<p>Your age is: $age years</p>";
    }
    ?>
</body>
</html> -->
