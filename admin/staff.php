<?php 
include 'include/check.php';
include '../include/db.php';

$sql2 = "SELECT * FROM staffdetail ";
$result2 = mysqli_query($connect,$sql2);
$p=mysqli_num_rows($result2);
?>
  <!-- Header Content -->
   <?php include "include/header.php"; ?>
    <!-- end header Content -->

    <!-- Page Content -->
    <div class="container">
       <div class="row">
                    <div class="col-lg-12">
                        
                        <h1 class="page-header">
                        Staff <small>Management</small>
                            <a data-toggle="modal" data-target="#myModal"  class="btn btn-primary pull-right"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add New Staff</a> 
                        
                        </h1>
                    </div>
                </div>
             
               <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> User Credentials Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="dataTable_wrapper">                                    
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th class="col-lg-4" rowspan="3">Name</th>
                                                <th class="col-lg-3" rowspan="3">Username</th>
                                                
                                                <th class="col-lg-2">Access Level</th>
                                                <th class="col-lg-2"><center>Action</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while($row2 = mysqli_fetch_assoc($result2)){ $o=1; ?>
                                              <tr>
                                                <td ><?php echo $row2['staffName']; ?></td>
                                                <td ><?php echo $row2['username']; ?></td>
                                                
                                                <td ><?php if($row2['level'] == 1) {echo '<span class="label label-success">Admin</span>';}else echo '<span class="label label-primary">Staff</span>'; ?></td>
                                                <td ><center>
                                                    <a  class = "btn btn-primary btn-sm"  href="edit.php?id=<?=$row2['staffid'];?>" ><span class="glyphicon glyphicon-edit" aria-hidden="true"> </span> Update</a>&nbsp;
                                                   
                                                    <a   id = "confirmation" class = "btn btn-danger btn-sm" href="del.php?id=<?=$row2['staffid'];?>&t=r" ><span class="glyphicon glyphicon-remove" aria-hidden="true"> </span> Delete</a></center></td>
                                              </tr>
                                             <?php  }  ?> 
                                           
                                        </tbody>
                                    </table>
                                    <!--- bawah ni pagination-->
                                 
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header ">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add New Staff</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action = "reg_user.php">
                <div class="row">
                <div class="col-lg-6">
                                <label>Name</label> </br>
                               <input class="form-control"  type="text" name = "name"  required>
                                 </br>
                         <label>Username</label> </br>
                           <input class="form-control"  type="text" name = "user"  required>
            
            
                           <input class="form-control"  type="hidden" name = "pass"  value = "user1234"></a>
                             </br>
                        <label>Credential type</label></br>
                            <select class ="form-control" name = "level">
                                <option value = "1">Admin</option>
                                <option value = "2">User</option>
                            </select>
                        </br>
            
             </div>
                    <div class="col-lg-6">
            
            
                            <label>Address</label></br>
                               <input class="form-control"  type="text" name = "add"  required></a>
                                 </br>
                            <label>Phone Number</label></br>
                               <input class="form-control"  type="text" name = "notel"  required></a>
                                 </br>
                            <label>Title</label></br>
                                <select class ="form-control" name = "title">
                                    <option value = "Mr.">Mr.</option>
                                    <option value = "Miss">Ms.</option>
                                    <option value = "Madam">Madam</option>
                                    <option value = "Dr.">Dr.</option>
                                </select>
                            </br>
            
            
                </div>
            </div>
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

