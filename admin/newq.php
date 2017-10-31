
<?php
include 'include/check.php';
include '../include/db.php';


        $id = $_GET['id'];
        
        $sid = $_SESSION['sid'];
        
        $query = "INSERT INTO diagnosis (patientID,staffID, statusID) VALUES ('$id','$sid', 1)";
		mysqli_query($connect,$query) or die ;
		$query = "FLUSH PRIVILEGES";
		
		echo '<meta http-equiv="refresh" content="0;url=./index.php?s=t">'; 




?>