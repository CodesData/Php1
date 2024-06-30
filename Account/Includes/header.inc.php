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
    <!-- PrismJs -->
    <link rel="stylesheet" type="text/css" href="../site/assets/prismjs/prism.css" />
    <!-- icon -->
    <link rel="shortcut icon" href="../Site/images/icon.ico" />
  </head>
  <body class="page">
    <header>
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" data-bs-theme="dark">
        <div class="container">
          <a class="navbar-brand" href="../index.php">Php1</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="../About.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Services.php">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Articles.php">Articles</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Contact.php">Contact</a>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">
                  <span class="Ad-Color">
                    <?php
                        if(isset($_SESSION["UserName"]))
                        {
                          echo "Hello, ".$_SESSION["UserName"]."";
                        }
                    ?>
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                </form>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-primary" href="SignOut.php">Sign Out</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-primary" href="SignUp.php">Sign up</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- /.Navigation -->
    </header>