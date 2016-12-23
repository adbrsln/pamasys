<?php session_Start(); ?>
<?php

// Check, if user is already login, then jump to secured page
if (!isset($_SESSION['usernamela'])) {
       
     
     // header('Location: ./main.php');
      }
else{
switch ($_SESSION['levella']) {
        case 1:
           
          header('Location: ./admin'); // admin Level;
          break;
        case 2:
           
          header('Location: ./staff'); // admin Level;
          break;
        case 3:
           
          header('Location: ./customer'); // admin Level;
          break;
         
      }
}
?> 