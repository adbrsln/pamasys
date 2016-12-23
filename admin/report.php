<?php 
include 'include/check.php';
include '../include/db.php';

$sql2 = "SELECT DISTINCT diagnosis.pid as pid,diagnosis.diagid as did,diagnosis.checkin as timecheckin,diagnosis.status as status ,patient.patientID,patient.name as name ,patient.ic as ic FROM diagnosis join patient on diagnosis.pid = patient.patientID WHERE status != 'Complete' ";


$result2 = mysqli_query($connect,$sql2);
$p=mysqli_num_rows($result2);


$sql3 = "SELECT * FROM patient";

$result3 = mysqli_query($connect,$sql3);
$p3=mysqli_num_rows($result3);

?>
  <!-- Header Content -->
   <?php include "include/header.php"; ?>
    <!-- end header Content -->

    <!-- Page Content -->
    <div class="container">
       <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Patient <small>Report</small>
                        </h1>
                        
                    </div>
                </div>
             

               <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Adding a new Inpatient?</strong> Try out <a href = "patient.php" class="alert-link">Here</a>
                        </div>
                        <script src="https://code.highcharts.com/highcharts.js"></script>
                        <script src="https://code.highcharts.com/modules/exporting.js"></script>

                        <div id="container" style="min-width: 310px; height: 400px; max-width: 800px; margin: 0 auto"></div>

                    </div>
                </div>
            
    </div>

    
    <!-- /.footer -->
    <?php include "include/footer.php"; ?>

