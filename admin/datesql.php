<?php 
$year = $_GET['year'];
$sql1 = "SELECT COUNT(diagnosisID) FROM diagnosis WHERE checkin like '$year-01%'";
$p= mysqli_query($connect,$sql1);
$r1 =mysqli_num_rows($p);

$sql2 = "SELECT COUNT(diagnosisID) FROM diagnosis WHERE checkin like '$year-02%'";
$p = mysqli_query($connect,$sql2);
$r2 =mysqli_num_rows($p);

$sql3 = "SELECT COUNT(diagnosisID) FROM diagnosis WHERE checkin like '$year-03%'";
$p = mysqli_query($connect,$sql3);
$r3 =mysqli_num_rows($p);

$sql4 = "SELECT COUNT(diagnosisID) FROM diagnosis WHERE checkin like '$year-04%'";
$p = mysqli_query($connect,$sql4);
$r4 =mysqli_num_rows($p);

$sql5 = "SELECT COUNT(diagnosisID) FROM diagnosis WHERE checkin like '$year-05%'";
$p = mysqli_query($connect,$sql5);
$r5 =mysqli_num_rows($p);

$sql6 = "SELECT COUNT(diagnosisID) FROM diagnosis WHERE checkin like '$year-06%'";
$p = mysqli_query($connect,$sql6);
$r6 =mysqli_num_rows($p);

$sql7 = "SELECT COUNT(diagnosisID) FROM diagnosis WHERE checkin like '$year-07%'";
$p = mysqli_query($connect,$sql7);
$r7 =mysqli_num_rows($p);

$sql8 = "SELECT COUNT(diagnosisID) FROM diagnosis WHERE checkin like '$year-08%'";
$p = mysqli_query($connect,$sql8);
$r8 =mysqli_num_rows($p);

$sql9 = "SELECT COUNT(diagnosisID) FROM diagnosis WHERE checkin like '$year-09%'";
$p = mysqli_query($connect,$sql9);
$r9 =mysqli_num_rows($p);

$sql10 = "SELECT COUNT(diagnosisID) FROM diagnosis WHERE checkin like '$year-10%'";
$p = mysqli_query($connect,$sql10);
$r10 =mysqli_num_rows($p);

$sql11 = "SELECT COUNT(diagnosisID) FROM diagnosis WHERE checkin like '$year-11%'";
$p = mysqli_query($connect,$sql11);
$r11 =mysqli_num_rows($p);

$sql12 = "SELECT COUNT(diagnosisID) FROM diagnosis WHERE checkin like '$year-12%'";
$p = mysqli_query($connect,$sql12);
$r12 =mysqli_num_rows($p);


?>