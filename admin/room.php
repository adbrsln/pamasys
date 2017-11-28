<?php 
include 'include/check.php';
include '../include/db.php';

$sql2 = "SELECT  a.id as rid,a.name as rname, b.staffName as staffname, b.staffTitle as stafftitle, b.staffid as staffid FROM room a join staffdetail b on a.idstaff = b.staffid";
$result2 = mysqli_query($connect,$sql2);
$p=mysqli_num_rows($result2);

$sql1="SELECT * FROM staffdetail";
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
                            Room <small>Management</small>
                            <a data-toggle="modal" data-target="#myModal"  class="btn btn-primary pull-right"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add New Room</a> 
                        
                        </h1>
                        
                    </div>
                </div>
             

               
               <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> Room List</h3>
                            </div>
                            <div class="panel-body">
                                <div class="dataTable_wrapper">                                    
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th class="col-lg-4" rowspan="3">Room Name</th>
                                                <th class="col-lg-4" rowspan="3">Practitioners</th>
                                                <th class="col-lg-2"><center>Action</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while($row2 = mysqli_fetch_assoc($result2)){ $o=1; ?>
                                              <tr>
                                                <td ><?php echo $row2['rname']; ?></td>
                                                <td ><?php echo $row2['stafftitle'].' '.$row2['staffname']; ?></td>
                                                <td ><center>
                                                    <a  class = "btn btn-primary btn-sm"  href="editr.php?id=<?=$row2['rid'];?>" ><span class="glyphicon glyphicon-edit" aria-hidden="true"> </span> Update</a>&nbsp;
                                                   
                                                    <a   id = "confirmation" class = "btn btn-danger btn-sm" href="del.php?id=<?=$row2['rid'];?>&t=room" ><span class="glyphicon glyphicon-remove" aria-hidden="true"> </span> Delete</a></center></td>
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
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header ">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Add New Room</h4>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action = "roomproses.php">
                        <p>Room Name</p>
                            <input class="form-control"  type="text" name = "rname" maxlength="30" placeholder="Room 1" required>
                            </br>
                        <p>Practitioners</p>
                        <select name="dname" class="form-control">
                        <?php while($row1= mysqli_fetch_assoc($result1)){ ?>
                         <option value="<?=$row1['staffid']?>"><?=$row1['staffTitle'].' '.$row1['staffName']?></option>
                        <?php } ?>
                        </select>
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

