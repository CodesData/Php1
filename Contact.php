<?php
  session_start();
  $pagetitle = "Contact";
  require_once ("Includes/header.inc.php");
?>
<!-- page content -->
<div class="container" id="pageContent">
  <div class="row">
    <div class="col-md-9">
      <!-- breadcrumb -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-bars fa-fw"></i></a></li>
          <li class="breadcrumb-item active"><a href="Contact.php">Contact</a></li>
        </ol>
      </nav>
      <!-- Content section -->
    </div>
<?php
  require_once ("Includes/sidebar.inc.php");
  require_once ("Includes/footer.inc.php");
?>