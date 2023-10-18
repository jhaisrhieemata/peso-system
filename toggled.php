<!DOCTYPE html>
<html>
<head>
    <title>Employment Status Form</title>
</head>
<body>
    <h1>Employment Status Form</h1>

    <form method="post" action="save_data.php">
        <label for="employment_status">Select Employment Status:</label>
        <select id="employment_status" name="employment_status">
            <option value="employed">Employed</option>
            <option value="unemployed">Unemployed</option>
        </select>

        <div id="employed_variables" style="display: none;">
            <h2>Employed Variables:</h2>
            <label><input type="checkbox" name="wage" value="Wage"> Wage</label><br>
            <label><input type="checkbox" name="self_em" value="Self-Employed"> Self-Employed</label><br>
            <label><input type="checkbox" name="fisher" value="Fisher"> Fisher</label><br>
            <label><input type="checkbox" name="vendor" value="Vendor"> Vendor</label><br>
            <label><input type="checkbox" name="home" value="Homemaker"> Homemaker</label><br>
            <label><input type="checkbox" name="trans" value="Transportation"> Transportation</label><br>
            <label><input type="checkbox" name="domestic" value="Domestic Worker"> Domestic Worker</label><br>
            <label><input type="checkbox" name="freelancer" value="Freelancer"> Freelancer</label><br>
            <label><input type="checkbox" name="artisan" value="Artisan"> Artisan</label><br>
            <label><input type="checkbox" name="others" value="Others"> Others</label><br>
        </div>

        <div id="unemployed_variables" style="display: none;">
            <h2>Unemployed Variables:</h2>
            <label><input type="checkbox" name="new_finished" value="Newly Finished School"> Newly Finished School</label><br>
            <label><input type="checkbox" name="resign" value="Resigned"> Resigned</label><br>
            <label><input type="checkbox" name="retired" value="Retired"> Retired</label><br>
            <label><input type="checkbox" name="terminated1" value="Terminated (Reason 1)"> Terminated (Reason 1)</label><br>
            <label><input type="checkbox" name="terminated2" value="Terminated (Reason 2)"> Terminated (Reason 2)</label><br>
            <label><input type="checkbox" name="terminated3" value="Terminated (Reason 3)"> Terminated (Reason 3)</label><br>
            <label><input type="checkbox" name="other" value="Other"> Other</label><br>
        </div>

        <input type="submit" value="Submit">
    </form>

    <script>
        document.getElementById("employment_status").addEventListener("change", function () {
            var employedVariables = document.getElementById("employed_variables");
            var unemployedVariables = document.getElementById("unemployed_variables");
            if (this.value === "employed") {
                employedVariables.style.display = "block";
                unemployedVariables.style.display = "none";
            } else if (this.value === "unemployed") {
                employedVariables.style.display = "none";
                unemployedVariables.style.display = "block";
            } else {
                employedVariables.style.display = "none";
                unemployedVariables.style.display = "none";
            }
        });
    </script>
</body>
</html>
