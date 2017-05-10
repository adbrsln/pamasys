<?php
include 'include/check.php';
include '../include/db.php';
$num = $_GET['id'];
$type = $_GET['t'];

if ($type == 'r'){
  $query = "DELETE FROM staffdetail WHERE staffid = '$num'";
    mysqli_query($connect,$query) or die('Failed to delete');
    $query = "FLUSH PRIVILEGES";  
   
    echo '<meta http-equiv="refresh" content="0;url=./staff.php?s=p">'; 
    
}elseif($type == 'p'){

    $query = "UPDATE diagnosis set statusID = 3 where diagnosisID = '$num'";
		mysqli_query($connect,$query) or die ("Error Query ");
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
    
    
    echo '<meta http-equiv="refresh" content="0;url=./patient.php?s=t">'; 
}

//include 'files/closedb.php';	

?>
