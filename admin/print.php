<?php
include 'include/check.php';
include '../include/db.php';
$num = $_GET['id'];
$sql = "SELECT p.patientName as pname, p.patientIc as ic, p.patientAddress as address,p.patientPhoneNumber as notel, d.content as content, d.medication as med,d.checkin as checktime, s.staffName as  dname, s.staffTitle as title from diagnosis d join patient p on d.patientID= p.patientID join staffdetail s on s.staffid = d.staffID  where d.diagnosisID = '$num'";
$result = mysqli_query($connect,$sql);

?>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<h4 style="text-align: right;">PRIVATE AND CONFIDENTIAL</h4>
<h1>KLINIK KAMAL&nbsp;</h1>
 <?php while($row2 = mysqli_fetch_assoc($result)){ ?>
<h4>PATIENT INFORMATION :&nbsp;P<?=$num; ?></h4>
<p>Name : <?=$row2['pname']; ?></p>
<p>Identification Number :&nbsp;<?=$row2['ic']; ?></p>
<p>Phone Number :&nbsp;<?=$row2['notel']; ?></p>
<p>Address : <?=$row2['address']; ?></p>
<p>&nbsp;</p>
<h4>DIAGNOSIS</h4>
<p><?=$row2['content']; ?></p>
</br></br>
<h4>Medication Prescription</h4>
<p><?=$row2['med']; ?></p>
</br></br>
<h4>Diagnosed and Confirmed by:</h4>
<p><?=$row2['title']; ?>&nbsp;<?=$row2['dname']; ?>&nbsp;&nbsp;On &nbsp;<?=$row2['checktime']; ?></p>
<?php  }  ?>
<script>window.print()</script>