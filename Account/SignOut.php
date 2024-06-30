<?php
    session_start();
    unset($_SESSION["id"]);
    unset($_SESSION["UserName"]);
    header("Location: ../index.php");
?>