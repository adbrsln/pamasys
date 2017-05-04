<?php 
include 'include/check.php';
include '../include/db.php';

include 'datesql.php';




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
      <script>
        $(function () {
        Highcharts.chart('container', {

    title: {
        text: 'Number of Patients, 2010-2016'
    },

    subtitle: {
        text: 'Source:'
    },

    yAxis: {
        title: {
            text: 'Number of Patients'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            pointStart: 1
        }
    },

    series: [{
        name: 'Number of Patients',
        data: [<?php echo $r1;?>,
               <?php echo $r2;?>,
               <?php echo $r3;?>,
               <?php echo $r4;?>,
               <?php echo $r5;?>,
               <?php echo $r6;?>,
               <?php echo $r7;?>,
               <?php echo $r8;?>,
               <?php echo $r9;?>,
               <?php echo $r10;?>,
               <?php echo $r11;?>,
               <?php echo $r12;?>]
    }]

});
    });
         </script>
