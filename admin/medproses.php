<?php include 'include/check.php';
include '../include/db.php';
$did = $_SESSION['sid'];

$pname = $_POST['pname'];
$pic = $_POST['pic'];
$sdate = $_POST['sdate'];
$edate = $_POST['edate'];
$today = date("j F Y"); 


$start = strtotime($sdate);
$end = strtotime($edate);

$days = ceil(abs($end - $start) / 86400);
?>
<!doctype html>
<meta charset="utf-8">

<link rel="stylesheet" href="card.css">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<body>

    <div class="face face-front">    
    <div class="panel panel-default">
    <div class="panel-body">
    
    <h2 class="text-left text-bold">Klinik Kamal <span class="pull-right"><small><u>Medical Certificate</u></small></span></h2>
    </br>
    <p>This is to certify that i have examined <strong><?=$pname ?></strong>. IC. No.  <strong><?=$pic ?></strong>. He/She is unfit for the proper performance of his/her duties on/from <strong><?=$sdate ?></strong> to <strong><?=$edate ?></strong> for <strong><?=$days ?></strong> days.</p>
    
    <div class="row">
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-4">
        </br>
        </br>
        </br>
        ______________________</br>
        <p class="text-center">Medical Practitioner</p>
        </div>
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-4">
        </br>
        </br>
        </br>
        <p class="text-center"><u><?=$today?></u></p>
        <p class="text-center">Date</p>
        </div>
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-4">
        </br>
        </br>
        </br>
        ___________________</br>
        <p class="text-center">Official Stamp</p>
        </div>
    </div>
    
    </div>
    </div>
    </div>
</body>

<script>window.print()</script>