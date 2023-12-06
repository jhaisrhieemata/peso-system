<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Position Form</title>
</head>
<body>

<form action="process_form.php" method="post">
    <?php
    // Assume 10 example positions
    $examplePositions = ['Developer', 'Manager', 'Analyst', 'Designer', 'Engineer', 'Assistant', 'Coordinator', 'Specialist', 'Officer', 'Supervisor'];

    foreach ($examplePositions as $position) {
        echo '<div class="form-group col-md-4">
                <label for="inputPosition" class="col-form-label">Position</label>
                <input required="required" type="text" name="positions[]" class="form-control" id="Position" placeholder="Position" value="' . $position . '">
              </div>';
    }
    ?>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>
