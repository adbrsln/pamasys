<?php
include 'include/check.php';
include '../include/db.php';

$rid = $_POST['rid'];
$pid = $_POST['pid'];
// $sid = $_SESSION['sid'];
$query = "INSERT INTO diagnosis (patientID,roomID, statusID) VALUES ('$pid','$rid', 1)";
mysqli_query($connect,$query) or die ("Error Query [".$strSQL."]");
$query = "FLUSH PRIVILEGES";

echo '<meta http-equiv="refresh" content="0;url=./index.php?s=t">'; 

?>