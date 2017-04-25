<?php
include 'include/check.php';
include '../include/db.php';
$num = $_GET['id'];



    $query = "UPDATE diagnosis set content = 'Complete', medication='' where diagnosisID = '$num'";
		mysqli_query($connect,$query) or die ("Error Query [".$strSQL."]");
		$query = "FLUSH PRIVILEGES";
    echo '<meta http-equiv="refresh" content="0;url=./queu.php?s=p">'; 


//include 'files/closedb.php';	

?>
