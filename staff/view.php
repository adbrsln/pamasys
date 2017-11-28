 <?php 
//include 'include/check.php';
include '../include/db.php';
$transid = $_GET["id"];
if (!isset($_GET["id"])) {
   
  echo '<meta http-equiv="refresh" content="0;url=../admin/patient.php">';
			
}else  {
    $query3="SELECT distinct d.content as content,d.medication as med, d.checkin as checkin,
    p.patientName as name ,p.patientPhoneNumber as notel, 
    p.patientIc as ic,p.patientAddress as address, r.name as roomname FROM diagnosis d 
    join patient p on d.patientID = p.patientID
    join room r on d.roomID = r.id
    WHERE d.diagnosisID = '$transid'"; //index details
    $result3 =mysqli_query($connect,$query3);
    $count = mysqli_num_rows($result3); 

    while($row2 = mysqli_fetch_assoc($result3)){ 
        $time =  $row2['checkin'];
        $name =  $row2['name'];
        $ic =  $row2['ic'];
        $notel =  $row2['notel'];
        $med = $row2['med'];
        $room = $row2['roomname'];
    }
}
?>
    
  <!-- Header Content -->
   <?php include "include/header.php"; ?>
    <!-- end header Content -->

    <!-- Page Content -->
    <div class="container">
        <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Patient Appointment <small>Details</small>
                            <small><div class="pull-right"><?php echo $room?></div></small>
                        </h1>
                        
                    </div>
                </div>
        <div class="row">
            <div class="col-lg-12">
                    <form method = "POST" action ="index.php">
                    
                    <table class = "table">
                          
                        <tr>

                            <td class = "col-md-6">
                            <Strong>Patient Information</Strong></br></br>
                                Check in Time :   <Strong><?php echo $time; ?></Strong></br>
                                Name : <?php echo $name; ?></br>
                                Identification Number : <?php echo $ic; ?></br>
                                Phone Number : <?php echo $notel; ?></br>
                               </br>
                                </td></div>

                              

                                
                        </tr>
                      </hr>
                        <tr>
                            <th colspan="1">Medical Prescription</th>
                            
                           
                        </tr>
                        <tr>
                            
                            
                            <td colspan="1"><?php echo $med ?></td>
                            
                                
                        </tr>   
                    </table>
                    
                <hr>
                <div class="pull-right">
                    <a   class = "btn btn-success"  href="status.php?id=<?=$transid;?>&type=Approve"><span class="glyphicon glyphicon-check" aria-hidden="true"></span> Complete</a>
                    <a   class = "btn btn-primary"  href="status.php?id=<?=$transid;?>&type=collectMed"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Set Collect Medicine</a>
                     
                    <a  class = "btn btn-danger" href="#" onclick="window.history.go(-1);" ><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Return to previous page</a>
                </div>
                 </form>
                </div>
        </div>
       
</div>
    <!-- /.footer -->
    <?php include "include/footer.php"; ?>