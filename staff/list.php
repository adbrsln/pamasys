<?php include 'include/check.php';
include '../include/db.php';

$sql2 = "SELECT * FROM patient";

$result2 = mysqli_query($connect,$sql2);
$p=mysqli_num_rows($result2);

$sql1 = "SELECT * FROM room";

$result1 = mysqli_query($connect,$sql1);
$p=mysqli_num_rows($result1);

?>
  <!-- Header Content -->
   <?php include "include/header.php"; ?>
    <!-- end header Content -->

    <!-- Page Content -->
    <div class="container">
       <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Patient <small>Management</small>
                            <a data-toggle="modal" data-target="#myModal"  class="btn btn-primary pull-right"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add New Patient</a> 
                        </h1>

                    </div>
                </div>


               
               <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> Patient List</h3>
                            </div>
                            <div class="panel-body">
                                 <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th class="col-lg-1">No.</th>
                                                <th>Patient Name</th>
                                                <th>Patient IC</th>

                                                <th>Phone Number</th>

                                                <th>Action</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                            <?php $total_rows = 1; while($row2 = mysqli_fetch_assoc($result2)){  ?>
                                              <tr>
                                                <td><?=$total_rows;?></td>
                                                <td><?php echo $row2['patientName']; ?></td>
                                                <td><?php echo $row2['patientIc']; ?></td>

                                                  <td><?php echo $row2['patientPhoneNumber']; ?></td>


                                                <td ><center>
                                                    <a  data-toggle="tooltip" data-placement="top" title="View" class = "btn btn-primary btn-sm"  href="listdiagnosis.php?id=<?=$row2['patientID'];?>" ><span class="glyphicon glyphicon-eye-open" ></span> View</a>&nbsp;
                                                    <a  data-toggle="modal"  data-id="<?=$row2['patientID'];?>" data-placement="top" title="Add in Queue" class="open-myModal2 btn btn-success btn-sm" href="#myModal2"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Set Appointment</a>
                                                    <a data-toggle="tooltip" data-placement="top" title="Delete Record" id = "confirmation" class = "btn btn-danger btn-sm" href="del.php?id=<?=$row2['patientID'];?>&t=<?= 'pr'?>" ><span class="glyphicon glyphicon-remove" aria-hidden="true"> </span> Delete</a></center></td>
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
                      <h4 class="modal-title">New Patient</h4>
                    </div>
                    <div class="modal-body">

                          <form method="POST" action = "iproses.php">
                            <p>Patient Name</p>
                              <input class="form-control"  type="text" name = "pname" maxlength="30" required>
                               </br>
                               <p>Patient IC</p>
                              <input class="form-control"  type="text" name = "pic" maxlength="12" placeholder="e.g : 941339085222"required>
                                </br>
                               <p>Patient Address</p>
                               <input class="form-control"  type="text" name = "address"  required>
                                </br>
                               <p>Patient Phone Number</p>
                               <input class="form-control"  type="text" name = "notel" maxlength="12" placeholder="e.g : 0176213816" required>
                                </br>


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

    <div class="modal fade bs-example-modal-sm" id="myModal2" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                <div class="modal-header ">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Set Patient Appointments?</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action = "newq.php">
                    
                    
                    <input type="hidden" name="pid" id="roomId" value=""/>
                    <p>Medical Room</p>
                    <select name="rid" class="form-control">
                    <?php while($row1= mysqli_fetch_assoc($result1)){ ?>
                        <option value="<?=$row1['id']?>"><?=$row1['name']?></option>
                        
                    <?php $sid = $row1['idStaff'];} ?>
                    </select>
                    <input type="hidden" name="sid" value="<?=$sid?>"/>
                    </br>
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
    <script>
   $(document).on("click", ".open-myModal2", function () {
    var roomid = $(this).data('id');
    $(".modal-body #roomId").val( roomid );
    });
    </script>