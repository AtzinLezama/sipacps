<?php
session_start();
$varsesion = $_SESSION['rol'];



switch ($varsesion) {
   case null;
      header("Location: ../index.html");
      break;
   case '';
      header("Location: ../index.html");
      break;
   case 2;
      header("Location: ../index.html");
      break;
}


