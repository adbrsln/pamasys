<?php 
include 'include/check.php';
include '../include/db.php';
$num_rec_per_page=10;

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * $num_rec_per_page; 
//$sql2 = "SELECT DISTINCT patient.name,patient.ic,details.loginID,login.nama as name FROM corder join details on corder.user_id = details.num join login on details.loginID = login.num  LIMIT $start_from, $num_rec_per_page";

$sql2 = "SELECT * FROM patient LIMIT $start_from, $num_rec_per_page";

$result2 = mysqli_query($connect,$sql2);
$p=mysqli_num_rows($result2);


$sql2 = "SELECT * FROM category";
$result = mysqli_query($connect,$sql2);

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
                        </h1>
                        
                    </div>
                </div>
             

               <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Adding a new Patient?</strong> Try out <a data-toggle="modal" data-target="#myModal" class="alert-link">Here</a>
                        </div>
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
                                                
                                                <th>Patient Name</th>
                                                <th>Patient IC</th>
                                                
                                                <th>Phone Number</th>
                                                
                                                <th>Action</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                            <?php $total_rows = 1; while($row2 = mysqli_fetch_assoc($result2)){  ?>
                                              <tr>
                                                
                                                <td><?php echo $row2['name']; ?></td>
                                                <td><?php echo $row2['ic']; ?></td>
                                               
                                                  <td><?php echo $row2['phonenumber']; ?></td>
                                                
                                                
                                                <td class="col-md-2"><center>
                                                    <a  title="View Records" class = "btn btn-primary btn-sm"  href="listdiagnosis.php?id=<?=$row2['patientID'];?>" ><span class="glyphicon glyphicon-eye-open" ></span></a>&nbsp;
                                                    
                                                    <a   title="Add in Queue" class = "btn btn-success btn-sm"  href="newq.php?id=<?=$row2['patientID'];?>" ><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>&nbsp;
                                                    
                                                  
                                                    
                                                    <a id = "confirmation" class = "btn btn-danger btn-sm" href="del.php?id=<?=$row2['patientID'];?>&t=<?= 'pr'?>" ><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></center></td>
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
        <div class="modal fade bs-example-modal-lg" id="myModal" role="dialog">
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
                               <input class="form-control"  type="text" name = "pname"  required>
                                </br>
                                <p>Patient IC</p>
                               <input class="form-control"  type="text" name = "pic"  required>
                                 </br>
                                <p>Patient Address</p>
                                <input class="form-control"  type="text" name = "address"  required>
                                 </br>
                                <p>Patient Phone Number</p>
                                <input class="form-control"  type="text" name = "notel"  required>
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
