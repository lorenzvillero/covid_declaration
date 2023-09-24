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


// Retrieve form data
$full_name = $_POST['full_name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$mobile_num = $_POST['mobile_num'];
$body_temp = $_POST['body_temp'];
$covid_diagnosed = $_POST['covid_diagnosed'];
$covid_encounter = $_POST['covid_encounter'];
$vaccinated = $_POST['vaccinated'];
$nationality = $_POST['nationality'];



// Insert data into the database
$sql = "INSERT INTO declarations (full_name, gender, age, mobile_num, body_temp, covid_diagnosed, covid_encounter, vaccinated, nationality) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssiiissss", $full_name, $gender, $age, $mobile_num, $body_temp, $covid_diagnosed, $covid_encounter, $vaccinated, $nationality);

if ($stmt->execute()) {
    echo "Declaration submitted successfully!";
    // Add a link to go to the dashboard
    echo '<p><a href="dashboard.php">Go to Dashboard</a></p>';
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

?>
