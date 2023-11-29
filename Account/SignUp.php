<?php
    session_start();
    $pagetitle = "SignUp";
    $message = "";
    // Database connection information
    $servername = "localhost"; // server IP address
    $username = "root"; // Username
    $password = ""; // Password
    $dbname = "user1"; // Database name
    // Connect to the database
    $Connection = mysqli_connect($servername, $username, $password, $dbname);
    // Check the connection
    if ($Connection->connect_error) {
        die("Connection failed: " . $Connection->connect_error);
    }
    // Processing the form when it is submitted
    if(isset($_POST['btnSubmit'])) {
        // Retrieving form data
        $username = $_POST['inptUserName'];
        $password = $_POST['inptPassword'];
        $email = $_POST['inptEMail'];
        // Database insertion query
        $insertQuery = "INSERT INTO userlogin (UserName, Password, EMail) VALUES ('$username', '$password', '$email')";
        // Executing the query
        if(mysqli_query($Connection, $insertQuery)) {
            $message = "Registration successful.";
        } else {
            $message = "Registration error: " . mysqli_error($Connection);
        }
    }
    // Close the connection
    $Connection->close();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="author" content="Php1" />
        <meta name="description" content="Template Php" />
        <meta name="keywords" content="#" />
        <title><?php echo $pagetitle;?> Php1</title>
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" type="text/css" href="../Site/assets/bootstrap/css/bootstrap.css" />
        <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css" href="../Site/assets/fontawesome/css/all.css" />
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="../Site/assets/css/Style.css" />
        <!-- icon -->
        <link rel="shortcut icon" href="../Site/images/icon.ico" />
    </head>
    <body class="bg-dark">
        <form name="frmUser" method="post" action="">
            <div class="card card-login mx-auto mt-5">
                <h5 class="card-header">Register an account</h5>
                <div class="card-body">
                    <span class="text-success"><?php echo $message?></span>
                    <div class="form-group mt-2">
                        <div class="form-label-group">
                            <input type="text" name="inptUserName" class="form-control" placeholder="User Name"
                                required="required" autofocus="autofocus">
                        </div>
                    </div>
                    <div class="form-group mt-2">
                        <div class="form-label-group">
                            <input type="password" name="inptPassword" class="form-control" placeholder="Password"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group mt-2">
                        <div class="form-label-group">
                            <input type="text" name="inptEMail" class="form-control" placeholder="EMail"
                                required="required">
                        </div>
                    </div>
                    <div class="form-label-group mt-3 d-grid gap-2">
                        <input type="submit" name="btnSubmit" value="Sign Up" class="btn btn-primary btn-block">
                    </div> 
                </div>
            </div>
        </form>
        <!-- jQuery -->
        <script type="text/javascript" src="../Site/assets/js/jQuery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script type="text/javascript" src="../Site/assets/bootstrap/js/bootstrap.js"></script>
    </body>
</html>