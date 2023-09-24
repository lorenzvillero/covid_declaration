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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Please enter your details</h3></div>
                                    <div class="card-body">
                                        <form action="submit.php" method="post">
                                            <div class="form-check mb-3">
                                                <label for="full_name">Full Name:</label>
                                                <input type="text" name="full_name" required><br>
                                            </div>
                                            <div class="form-check mb-3">
                                            <label for="gender">Gender:</label>
                                                <select name="gender" id="gender">
                                                <option style="display:none;"></option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="other">Prefer not to say</option>
                                                </select><br>
                                            </div>
                                            <div class="form-check mb-3">
                                                <label for="age">Age:</label>
                                                <input type="number" name="age" required><br>
                                            </div>
                                            <div class="form-check mb-3">
                                                <label for="mobile_num">Mobile Number:</label>
                                                <input type="number" name="mobile_num" min="1" max="9999999999" required><br>
                                            </div>
                                            <div class="form-check mb-3">
                                                <label for="body_temp">Temperature (°C):</label>
                                                <input type="number" step="0.01" name="body_temp" required><br>
                                            </div>
                                            <div class="form-check mb-3">
                                                <label for="covid_diagnosed">Covid Diagnosed:</label>
                                                <select name="covid_diagnosed" id="covid_diagnosed">
                                                <option style="display:none;"></option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option></select><br>
                                            </div>
                                            <div class="form-check mb-3">
                                                <label for="covid_encounter">Covid Encounter:</label>
                                                <select name="covid_encounter" id="covid_encounter">
                                                <option style="display:none;"></option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option></select><br>
                                            </div>
                                            <div class="form-check mb-3">
                                                <label for="vaccinated">Vaccinated:</label>
                                                <select name="vaccinated" id="vaccinated">
                                                <option style="display:none;"></option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option></select><br>
                                            </div>
                                            <div class="form-check mb-3">
                                                <label for="nationality">Nationality:</label>
                                                <select name="nationality" id="nationality">
                                                <option style="display:none;"></option>
                                                <option value="filipino">Filipino</option>
                                                <option value="foreigner">Foreigner</option></select><br>
                                            </div>

                                            <div class="btn btn-primary">
                                                <input class="btn btn-primary" type="submit" value="Submit">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                    <div class="small"><a href="main.php">Go to dashboard</a></div>
                                        <div class="small"><a href="register.html">Need help? Please refer to this manual</a></div>
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
