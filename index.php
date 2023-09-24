<!DOCTYPE html>
<html>
<head>
    <title>COVID Declaration Form</title>
</head>
<body>
    <h1>COVID Declaration Form</h1>
    <form action="submit.php" method="post">
        <label for="full_name">Full Name:</label>
        <input type="text" name="full_name" required><br>

        <label for="gender">Gender:</label>
        <select name="gender" id="gender">
        <option style="display:none;"></option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Prefer not to say</option>
        </select><br>

        <label for="age">Age:</label>
        <input type="number" name="age" required><br>

        <label for="mobile_num">Mobile Number:</label>
        <input type="number" name="mobile_num" min="1" max="9999999999" required><br>

        <label for="body_temp">Temperature (°C):</label>
        <input type="number" step="0.01" name="body_temp" required><br>

        <label for="covid_diagnosed">Covid Diagnosed:</label>
        <select name="covid_diagnosed" id="covid_diagnosed">
        <option style="display:none;"></option>
        <option value="yes">Yes</option>
        <option value="no">No</option></select><br>

        <label for="covid_encounter">Covid Encounter:</label>
        <select name="covid_encounter" id="covid_encounter">
        <option style="display:none;"></option>
        <option value="yes">Yes</option>
        <option value="no">No</option></select><br>

        <label for="vaccinated">Vaccinated:</label>
        <select name="vaccinated" id="vaccinated">
        <option style="display:none;"></option>
        <option value="yes">Yes</option>
        <option value="no">No</option></select><br>

        <label for="nationality">Nationality:</label>
        <select name="nationality" id="nationality">
        <option style="display:none;"></option>
        <option value="filipino">Filipino</option>
        <option value="foreigner">Foreigner</option></select><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
