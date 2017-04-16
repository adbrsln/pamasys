<?php session_Start(); ?>
<?php

// Check, if user is already login, then jump to secured page
if (!isset($_SESSION['usernamela'])) {
       
     
      header('Location: ../main.php?s=sf');
      }
else{
switch ($_SESSION['levella']) {
        case 1:
           
          header('Location: ../admin/index.php'); // admin Level;
          break;
        
         case 3:
           
          header('Location: ../customer/index.php'); // admin Level;
          break;
        
      }
}
?> 