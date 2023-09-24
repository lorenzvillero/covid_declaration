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
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Covid-19 Declaration Data</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="main.php">Dashboard</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="main.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                            <a class="nav-link" href="entryform.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-plus"></i></i></div>
                                Create New Covid-19 Declaration
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Covid-19 Declaration Data</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="main.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">All Data</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Covid Declaration Data
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
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
                                    <tfoot>
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
                                    </tfoot>
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
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Developed by Group 8 for DICT Web Development for Web Developers Training</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
