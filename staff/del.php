<?php
include 'include/check.php';
include '../include/db.php';
$num = $_GET['id'];
$type = $_GET['t'];

if($type == 'p'){

    $query = "UPDATE diagnosis set statusID = 3 where diagnosisID = '$num'";
		mysqli_query($connect,$query) or die ("Error Query [".$strSQL."]");
		$query = "FLUSH PRIVILEGES";
    echo '<meta http-equiv="refresh" content="0;url=./index.php?s=t">'; 
    
}elseif($type == 'rd'){

    $query = "DELETE FROM diagnosis WHERE diagnosisID = '$num'";
		mysqli_query($connect,$query) or die ("Error Query [".$strSQL."]");
		$query = "FLUSH PRIVILEGES";
    echo '<meta http-equiv="refresh" content="0;url=./index.php?s=t">'; 
}
elseif($type == 'pr'){

    $query = "DELETE FROM patient WHERE patientID = '$num'";
		mysqli_query($connect,$query) or die ("Error Query [".$strSQL."]");
		$query = "FLUSH PRIVILEGES";
   
    echo '<meta http-equiv="refresh" content="0;url=./list.php?s=t">'; 
}

//include 'files/closedb.php';	

?>
