 <?php 
//include 'include/check.php';
include '../include/db.php';
$transid = $_GET["id"];
if (!isset($_GET["id"])) {
   
  echo '<meta http-equiv="refresh" content="0;url=../admin/patient.php">';
			
}else  {
   $query3="SELECT distinct d.diagnosisID as did,d.content as content,d.medication as med, d.checkin as checkin,p.patientName as name ,p.patientPhoneNumber as notel, p.patientIc as ic,p.patientAddress as address FROM diagnosis d join patient p on d.patientID = p.patientID WHERE d.diagnosisID = '$transid'"; //index details
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
                            <div class="pull-right"><small>Patient ID: P<?php echo $transid;?></small></div>
                        </h1>
                        
                    </div>
                </div>
        <div class="row">
            <div class="col-lg-12">
                    <form method = "POST" action ="updateq.php">
                    
                    <table class = "table">
                          
                        <tr>

                            <?php while($row2 = mysqli_fetch_assoc($result3)){  
                            ?>
                            <td class = "col-md-6" colspan="2">
                            <Strong>Patient Information</Strong></br></br>
                                Check in Time :   <Strong><?php echo $row2['checkin']; ?></Strong></br>
                                Name : <?php echo $row2['name']; ?></br>
                                Identification Number : <?php echo $row2['ic']; ?></br>
                                Phone Number : <?php echo $row2['notel']; ?></br>
                                Address : <?php echo $row2['address']; ?></br>
                               </br>
                            
                                </td>


                              

                                
                        </tr>
                      </hr>
                        <tr>
                            <th >Diagnosis</th>
                            <th >Medication Prescription</th>
                           
                        </tr>
                        <tr>
                            
                            <td><textarea class="form-control ckeditor" cols = "77" name= "content" rows="5"><?php echo $row2['content']; ?></textarea></td>
                            <td><textarea class="form-control ckeditor"  cols = "77" name ="med" rows="5"><?php echo $row2['med']; ?></textarea></td>
                            <input type = "hidden" name ="id" value = "<?=$transid;?>">
                                
                        </tr>
            <?php  }  ?>    
                    </table>
                    
                <hr>
                <div class="pull-right">
                    
                     <button type ="submit" class ="btn btn-success" ><span class="glyphicon glyphicon-check" aria-hidden="true"></span> Save</button>
                    <a  target="_blank"  class = "btn btn-primary" href="print.php?id=<?php echo $transid;?>"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</a>
                    <a  class = "btn btn-danger" href="#" onclick="window.history.go(-1);" ><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Cancel</a>
                </div>
                 </form>
                </div>
        </div>
       
</div>
    <!-- /.footer -->
    <?php include "include/footer.php"; ?>

