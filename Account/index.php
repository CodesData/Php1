<?php
  session_start();
  $pagetitle = "index";
  if (isset($_SESSION["UserName"])) {

  }else {
    header('Location: SignIn.php');
  }
  require_once ("Includes/header.inc.php");
?>
<!-- page content -->
<div class="container" id="pageContent">
  <div class="row">
    <div class="col-md-9">
      <!-- breadcrumb -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"><a href="index.php"><i class="fas fa-bars fa-fw"></i></a></li>
        </ol>
      </nav>
      <!-- Content section -->
      <section class="py-5">
        <div class="container">
          <h1>Section Heading</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim blanditiis nemo distinctio impedit accusamus exercitationem
            esse maiores hic magnam obcaecati labore officia excepturi quasi quisquam quam voluptate reiciendis, reprehenderit fugit?</p>
        </div>
      </section>
    </div>
<?php
  require_once ("../Includes/sidebar.inc.php");
  require_once ("Includes/footer.inc.php");
?>