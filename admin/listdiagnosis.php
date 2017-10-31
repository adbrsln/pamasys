 <?php
//include 'include/check.php';
include '../include/db.php';
$transid = $_GET["id"];
if (isset($_GET["id"])) {


$sql2 = "SELECT DISTINCT d.diagnosisID as diagid, d.statusID as status,d.content,d.medication,d.checkin, s.staffName as drname, s.staffTitle as title,status.statusName as sname FROM diagnosis d join staffdetail s on d.staffID = s.staffid join status on d.statusID = status.statusID where d.patientID = '$transid'";

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
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2 class="page-header">
                            Patient Diagnosis <small>Management</small>
                            <a data-toggle="modal" data-target="#myModal"  class="btn btn-primary pull-right"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit Patient</a> 
                        
                        </h2>

                    </div>
                </div>


               <div class="row">
                    <div class="col-lg-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">

                                <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> Patient Information</h3>
                            </div>
                            
                            <div class="panel-body">
                        <?php $total_rows = 1; while($row2 = mysqli_fetch_assoc($result)){  
                            $pn = $row2['patientName'];
                            $pic =$row2['patientIc'];
                            $padd =$row2['patientAddress'];
                            $ppn =$row2['patientPhoneNumber'];
                            $pid = $row2['patientID'];
                            
                            ?>
                        
                        <form method="POST" action = "pproses.php">
                                 <label>Name</label> </br>
                                   <p><?=$pn?></p>
                                <label>Identification Card No.</label> </br>
                                    <p><?=$pic?></p>
                                <label>Address</label> </br>
                                    <p><?=$padd?></p>
                                <label>Phone Number</label> </br>
                                    <p><?=$ppn?></p>
                                           
                              </form>
                        <?php } ?>
                    

                            </div>
                        </div>
                    </div>
                
                    <div class="col-lg-9 col-md-12 col-sm-12">
                                
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                
                                                <th>ID</th>
                                                <th>Appointment</th>
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
                                                  <td><?php switch($row2['status']){
                                                        case 1 : echo '<span class="label label-primary">'; echo $row2['sname']; echo '</span>'; break;
                                                        case 2 : echo '<span class="label label-warning">'; echo $row2['sname']; echo '</span>'; break;
                                                        case 3 : echo '<span class="label label-success">'; echo $row2['sname']; echo '</span>'; break;
                                                        case 4 : echo '<span class="label label-danger">'; echo $row2['sname']; echo '</span>'; break;
                                                        }?></td>


                                                <td ><center><a  class = "btn btn-primary btn-sm"  href="view.php?id=<?=$row2['diagid'];?>" ><span class="glyphicon glyphicon-edit" ></span> View</a>&nbsp;
                                                     <a    target="_blank"  class = "btn btn-success btn-sm"  href= "print.php?id=<?=$row2['diagid'];?>" ><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</a>&nbsp;

                                                    <a   id = "confirmation" class = "btn btn-danger btn-sm"  href="del.php?id=<?=$row2['diagid'];?>&t=rd" ><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Delete</a></center></td>
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
    <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header ">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Edit Patient Details</h4>
                    </div>
                    <div class="modal-body">

                          <form method="POST" action = "pproses.php">
                            <p>Patient Name</p>
                              <input class="form-control"  type="text" name = "pname" maxlength="30" value = "<?=$pn?>" required>
                               </br>
                               <p>Patient IC</p>
                              <input class="form-control"  type="text" name = "pic" maxlength="12" placeholder="e.g : 941339085222" value = "<?=$pic?>" required>
                                </br>
                               <p>Patient Address</p>
                               <textarea class = "form-control" name="address" id="address" cols="30" rows="5" required><?=$padd?></textarea>
                                </br>
                               <p>Patient Phone Number</p>
                               <input class="form-control"  type="text" name = "notel" maxlength="12" value = "<?=$ppn?>" placeholder="e.g : 0176213816" required>
                                </br>
                                <input type="hidden" name="pid" value = "<?=$pid?>">


                        </div>
                    <div class="modal-footer">
                      <input type="submit" class="btn btn-primary" value ="Submit" id="submit">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </form>
                    </div>
                  </div>

                </div>
              </div>
    </div>
    <!-- /.footer -->
    <?php include "include/footer.php"; ?>
