<?php
include 'include/check.php';
include '../include/db.php';

$id = $_POST['id'];
$c = $_POST['content'];
$m = $_POST['med'];
$sid = $_SESSION['sid'];
    $query = "UPDATE diagnosis set content = '$c' , medication = '$m' , statusID = 5, attendBy = '$sid'  where diagnosisID = '$id'";
		mysqli_query($connect,$query) or die ("Error Query ");
		$query = "FLUSH PRIVILEGES";
    echo '<meta http-equiv="refresh" content="0;url=./index.php?s=t">'; 



//include 'files/closedb.php';	

?>
