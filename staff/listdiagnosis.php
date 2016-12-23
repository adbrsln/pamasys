 <?php 
//include 'include/check.php';
include '../include/db.php';
$transid = $_GET["id"];
if (isset($_GET["id"])) {


$sql2 = "SELECT DISTINCT diagnosis.diagid as diagid, diagnosis.status as status,diagnosis.content,diagnosis.med,diagnosis.checkin, details.name as drname, details.title as title FROM diagnosis join details on diagnosis.sid = details.staffid where diagnosis.pid = '$transid'";

//$sql2 = "SELECT * FROM item LIMIT $start_from, $num_rec_per_page";

$result2 = mysqli_query($connect,$sql2);
$p=mysqli_num_rows($result2);


$sql3 = "SELECT * FROM patient  where patientID = '$transid'";
$result = mysqli_query($connect,$sql3);

}?>
  <!-- Header Content -->
   <?php include "include/header.php"; ?>
    <!-- end header Content -->

    <!-- Page Content -->
    <div class="container">
       <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Patient <small>Management</small>
                        </h1>
                        
                    </div>
                </div>
             

               <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                
                                <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> <a  >Patient Information</a></h3>
                            </div>
                            
                            <div class="panel-body">
                        <?php $total_rows = 1; while($row2 = mysqli_fetch_assoc($result)){  ?>
                        <Strong>Patient Information</Strong></br></br>
                                 <label>Name</label> : 
                                   <?php echo $row2['name']; ?>
                                     </br>
                                <label>Identification Card No.</label> :
                                          <?php echo $row2['ic']; ?>
                                             </br>
                                <label>Address</label> :
                                         <?php echo $row2['address']; ?>
                                             </br>
                                <label>Phone Number</label> :
                                           <?php echo $row2['phonenumber']; ?>
                                             </br>
                                 
                                
                            
                        <?php } ?>
                    </div>
  
                           
                        </div>
                    </div>
                </div>
               <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                
                                <h3 class="panel-title"><i class="fa fa-user fa-fw"></i>Patient Diagnosis List</h3>
                            </div>
                           
                            <div class="panel-body">
                                <div class="dataTable_wrapper">                                    
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                
                                                <th>Diagnosis ID</th>
                                                <th>Check in</th>
                                                <th>Attend by</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                            <?php $total_rows = 1; while($row2 = mysqli_fetch_assoc($result2)){  ?>
                                              <tr>
                                                
                                                <td><?php echo $row2['diagid']; ?></td>
                                                <td><?php echo $row2['checkin']; ?></td>
                                                 <td><?php echo $row2['title']; ?><?php echo $row2['drname']; ?></td>
                                                  <td><?php echo $row2['status']; ?></td>
                                                
                                                
                                                <td ><center><a  class = "btn btn-primary btn-sm"  href="view.php?id=<?=$row2['diagid'];?>" ><span class="glyphicon glyphicon-edit" ></span></a>&nbsp;
                                                   
                                                    <a   id = "confirmation" class = "btn btn-danger btn-sm"  href="del.php?id=<?=$row2['diagid'];?>&t=rd" ><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></center></td>
                                              </tr>
                                             <?php $total_rows++; }  ?> 
                                           
                                        </tbody>
                                    </table>
                                    <!--- bawah ni pagination-->
                                 	
                                </div>

                            </div>
                            </div>
                        </div>
                    </div>
                </div>
       
    </div>
    <!-- /.footer -->
    <?php include "include/footer.php"; ?>

