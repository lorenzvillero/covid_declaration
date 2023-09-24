<?php
// Connect to the database (replace with your credentials)
$host = "localhost";
$username = "root";
$password = "";
$database = "covid_declaration";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve declarations from the database
$sql = "SELECT * FROM declarations ORDER BY id DESC";
$result = $conn->query($sql);

$sqlEncountersCount = "SELECT COUNT(*) AS encounters_count FROM declarations WHERE covid_encounter = 'yes'";
$resultEncountersCount = $conn->query($sqlEncountersCount);
$rowEncountersCount = $resultEncountersCount->fetch_assoc();
$encountersCountDeclarations = $rowEncountersCount['encounters_count'];

$sqlVaccinatedCount = "SELECT COUNT(*) AS vaccinated_count FROM declarations WHERE vaccinated = 'yes'";
$resultVaccinatedCount = $conn->query($sqlVaccinatedCount);
$rowVaccinatedCount = $resultVaccinatedCount->fetch_assoc();
$vaccinatedCountDeclarations = $rowVaccinatedCount['vaccinated_count'];

$sqlFeverCount = "SELECT COUNT(*) AS fever_count FROM declarations WHERE body_temp > 37";
$resultFeverCount = $conn->query($sqlFeverCount);
$rowFeverCount = $resultFeverCount->fetch_assoc();
$feverCount = $rowFeverCount['fever_count'];

$sqlAdult = "SELECT COUNT(*) AS adult_count FROM declarations WHERE age >= 18";
$resultAdult = $conn->query($sqlAdult);
$rowAdult = $resultAdult->fetch_assoc();
$adultCount = $rowAdult['adult_count'];

$sqlMinor = "SELECT COUNT(*) AS minor_count FROM declarations WHERE age < 18";
$resultMinor = $conn->query($sqlMinor);
$rowMinor = $resultMinor->fetch_assoc();
$minorCount = $rowMinor['minor_count'];

$sqlForeigner = "SELECT COUNT(*) AS foreigner_count FROM declarations WHERE nationality <> 'filipino'";
$resultForeigner = $conn->query($sqlForeigner);
$rowForeigner = $resultForeigner->fetch_assoc();
$foreignerCount = $rowForeigner['foreigner_count'];

?>



<!DOCTYPE html>
<html>
<head>
    <title>COVID Declaration Dashboard</title>
</head>
<body>
    <h1>COVID Declaration Dashboard</h1>

     <!-- Summary Information -->
     <div>
        <strong>Covid Encounters:</strong> <?php echo $encountersCountDeclarations; ?>
    </div>

    <div>
        <strong>Vaccinated:</strong> <?php echo $vaccinatedCountDeclarations; ?>
    </div>
    
    <div>
        <strong>Fever:</strong> <?php echo $feverCount; ?>
    </div>

    <div>
        <strong>Adult:</strong> <?php echo $adultCount; ?>
    </div>

    <div>
        <strong>Minor:</strong> <?php echo $minorCount; ?>
    </div>

    <div>
        <strong>Foreigner:</strong> <?php echo $minorCount; ?>
    </div>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Mobile Number</th>
                <th>Temperature (°C)</th>
                <th>Covid Diagnosed</th>
                <th>Covid Encounter</th>
                <th>Vaccinated</th>
                <th>Nationality</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['full_name'] . "</td>";
                    echo "<td>" . $row['gender'] . "</td>";
                    echo "<td>" . $row['age'] . "</td>";
                    echo "<td>" . $row['mobile_num'] . "</td>";
                    echo "<td>" . $row['body_temp'] . "</td>";
                    echo "<td>" . $row['covid_diagnosed'] . "</td>";
                    echo "<td>" . $row['covid_encounter'] . "</td>";
                    echo "<td>" . $row['vaccinated'] . "</td>";
                    echo "<td>" . $row['nationality'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No declarations found.</td></tr>";
            }
            ?>
        </tbody>
    </table>
<?php
    echo '<p><a href="index.php">Create new declaration</a></p>';
?>
    </body>
</html>

<?php
$conn->close();
?>
