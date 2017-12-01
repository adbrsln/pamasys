<?php
include 'include/check.php';
include '../include/db.php';

$rid = $_POST['rid'];
$pid = $_POST['pid'];
 $sid = $_POST['sid'];
$query = "INSERT INTO diagnosis (patientID,roomID,statusID,attendBy) VALUES ('$pid','$rid', 1,'$sid')";
mysqli_query($connect,$query) or die ("Error Query [".$strSQL."]");
$query = "FLUSH PRIVILEGES";

echo '<meta http-equiv="refresh" content="0;url=./index.php?s=t">'; 

?>