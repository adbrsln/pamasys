<?php
include 'include/check.php';
include '../include/db.php';
$num = $_GET['id'];
$sql = "SELECT patient.name as pname, patient.ic as ic, patient.address as address,patient.phonenumber as notel, diagnosis.content as content, diagnosis.med as med,diagnosis.checkin as checktime, details.name as  dname, details.title as title from diagnosis join patient on diagnosis.pid= patient.patientID join details on details.staffid = diagnosis.sid  where diagnosis.diagid = '$num'";
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