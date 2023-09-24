

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Covid Declaration Form</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                   
                                    <div class="card-body text-center">
                                    <?php
                                    // Connect to the database (replace with your credentials)
                                    $host = "sql105.infinityfree.com";
                                    $username = "if0_35099791";
                                    $password = "uq5qlxmijKbkzD";
                                    $database = "if0_35099791_covid_declaration";

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
                                        echo '<h3 class="text-center font-weight-light my-4">Covid-19 declaration successfully added to database</h3>';
                                        // Add a link to go to the dashboard
                                        echo '<p><div class="small"><a href="index.php">Go to dashboard</a></div></p>';
                                    } else {
                                        echo '<p><a href="404.html">Go to Dashboard</a></p>';
                                    }

                                    $stmt->close();
                                    $conn->close();

                                    ?>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                    <div class="small"><a href="entryform.php">Create new declaration?</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
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
    </body>
</html>
