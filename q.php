<?php 
include 'include/db.php';

$sql2 = "SELECT DISTINCT d.patientID as pid,d.diagnosisID as did,d.checkin as timecheckin,
d.statusID as status ,patient.patientID,patient.patientName as name ,patient.patientIc as ic, 
status.statusName as sname ,status.statusID as statid
FROM diagnosis d 
join patient on d.patientID = patient.patientID
join status on d.statusID = status.statusID
WHERE status.statusName != 'Complete' ORDER BY did DESC";
$result2 = mysqli_query($connect,$sql2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="5;URL='<?=$_SERVER['PHP_SELF']?>'">
    <title>Patient Management System</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

   

    <link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <script src="../js/sweetalert.min.js"></script>
    <link rel="stylesheet" href="../css/sweetalert.css">



    <link href="../include/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    <link href="../include/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <style>
        body{
            margin-top:30px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center">Klinik Kamal | Johor Bahru <div id="timestamp"></div></h1>
    <div class="table-responsive">          
    <table class="table">
    <thead>
        <tr>
        <th>#</th>
        <th class="col-8">Name</th>
        <th class="col-2 text-center">Room</th>
        <th class="col-1 text-center">Date / Time</th>
        </tr>
    </thead>
    <tbody>
    <?php $total_rows = 1; while($row2 = mysqli_fetch_assoc($result2)){  ?>
        <tr>
        <td><?=$total_rows;?></td>
        <td><?php echo $row2['name']; ?></td>
        <td class="text-center">Medical Room 1</td>
        <td class="text-center"><?php  echo $row2['timecheckin']; ?></td>
                                                
        </tr>
    <?php $total_rows ++;} ?>
    </tbody>
    </table>
    </div>
    </div>
</body>
</html>
<script>
$(document).ready(function() {
    setInterval(timestamp, 1000);
});

function timestamp() {
    $.ajax({
        url: 'http://pamasys.dev/timestamp.php',
        success: function(data) {
            $('#timestamp').html(data);
        },
    });
}
</script>
