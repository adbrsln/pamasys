<?php session_Start(); ?>
<?php

// Check, if user is already login, then jump to secured page
if (!isset($_SESSION['sid'])) {
       
     
      header('Location: ../main.php?s=sf');
      }
else{
switch ($_SESSION['levella']) {
        case 2:
           
          header('Location: ../staff/index.php'); // admin Level;
          break;
        
         
      }
}
?> 