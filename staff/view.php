 <?php 
//include 'include/check.php';
include '../include/db.php';
$transid = $_GET["id"];
if (!isset($_GET["id"])) {
   
  echo '<meta http-equiv="refresh" content="0;url=../admin/patient.php">';
			
}else  {
   $query3="SELECT distinct d.content as content,d.medication as med, d.checkin as checkin,p.name as name ,p.phonenumber as notel, p.ic as ic,p.address as address FROM diagnosis d join patient p on d.patientID = p.patientID WHERE d.diagnosisID = '$transid'"; //index details
	$result3 =mysqli_query($connect,$query3);
	$count = mysqli_num_rows($result3); }?>
  <!-- Header Content -->
   <?php include "include/header.php"; ?>
    <!-- end header Content -->

    <!-- Page Content -->
    <div class="container">
        <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Patient Transaction <small>Details</small>
                            <small><div class="pull-right">Patient ID: P<?php echo $transid;?></div></small>
                        </h1>
                        
                    </div>
                </div>
        <div class="row">
            <div class="col-lg-12">
                    <form method = "POST" action ="index.php">
                    
                    <table class = "table">
                          
                        <tr>

                            <?php while($row2 = mysqli_fetch_assoc($result3)){  
                            ?>
                            <td class = "col-md-6">
                            <Strong>Patient Information</Strong></br></br>
                                Check in Time :   <Strong><?php echo $row2['checkin']; ?></Strong></br>
                                Name : <?php echo $row2['name']; ?></br>
                                Identification Number : <?php echo $row2['ic']; ?></br>
                                Phone Number : <?php echo $row2['notel']; ?></br>
                               </br>
                                </td></div>

                              

                                
                        </tr>
                      </hr>
                        <tr>
                            <th colspan="1">Medical Prescription</th>
                            
                           
                        </tr>
                        <tr>
                            
                            
                            <td colspan="1"><?php echo $row2['med']; ?></td>
                            
                                
                        </tr>
            <?php  }  ?>    
                    </table>
                    
                <hr>
                <div class="pull-right">
                    <a   class = "btn btn-success"  href="status.php?id=<?=$transid;?>&type=Approve"><span class="glyphicon glyphicon-check" aria-hidden="true"></span> Complete</a>
                     
                    <a  class = "btn btn-danger" href="#" onclick="window.history.go(-1);" ><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancel</a>
                </div>
                 </form>
                </div>
        </div>
       
</div>
    <!-- /.footer -->
    <?php include "include/footer.php"; ?>

