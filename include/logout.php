<?php

  // Inialize session
  session_start();

// Delete certain session
  unset($_SESSION['username']);
   unset($_SESSION['nama']);
    unset($_SESSION['level']);
  //session_destroy();
  // Delete all session variables
  // session_destroy();

 // Jump to login page
 header('Location:./main.php');

  ?>