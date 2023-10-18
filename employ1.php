<!DOCTYPE html>
<html>
<head>
    <title>Show/Hide Dropdown based on Checkbox</title>
</head>
<body>
    <h1>Show/Hide Dropdown based on Checkbox</h1>

    <form method="post" action="process.php">

        <th>
             <label for="enableDropdownCheckbox" class="col-form-label">Enable Dropdown:</label>
                <input type="checkbox" id="enableDropdownCheckbox" name="enableDropdownCheckbox" class="form-control">
        </th>
              <div id="dropdownContainer" style="display: none;">
              <label for="dropdown">Dropdown List:</label>
               <select id="dropdown" name="dropdown">
                <option value="option1">Option 1</option>
                <option value="option2">Option 2</option>
                <option value="option3">Option 3</option>
            </select>
        </div>
 
            <th>
        <label for="enableDropdownCheckbox2" class="col-form-label">Enable Dropdown:</label>
        <input type="checkbox" id="enableDropdownCheckbox2" name="enableDropdownCheckbox2" class="form-control">
        </th>

        <div id="dropdownContainer2" style="display: none;">
            <label for="dropdown">Dropdown List:</label>
            <select id="dropdown" name="dropdown">
                <option value="option1">Option 1</option>
                <option value="option2">Option 2</option>
                <option value="option3">Option 3</option>
            </select>
        </div>

        <input type="submit" value="Submit">
    </form>

    <script>
        document.getElementById("enableDropdownCheckbox").addEventListener("change", function () {
            var dropdownContainer = document.getElementById("dropdownContainer");
            if (this.checked) {
                dropdownContainer.style.display = "block";
            } else {
                dropdownContainer.style.display = "none";
            }
        });
    </script>
    <script>
        document.getElementById("enableDropdownCheckbox2").addEventListener("change", function () {
            var dropdownContainer = document.getElementById("dropdownContainer2");
            if (this.checked) {
                dropdownContainer.style.display = "block";
            } else {
                dropdownContainer.style.display = "none";
            }
        });
    </script>
</body>
</html>
