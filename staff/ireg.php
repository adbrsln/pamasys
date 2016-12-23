<?php
 include 'include/check.php';
include '../include/db.php';
$num = $_GET['id'];

$sql = "SELECT * FROM item where num = '$num'";
$result = mysqli_query($connect,$sql); 
$sql3 = "SELECT * FROM category";
$result3 = mysqli_query($connect,$sql3);
?>
<!-- Header Content -->
   <?php include "include/header.php"; ?>
    <!-- end header Content -->

    <!-- Page Content -->
    <div class="container">
       <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Medication <small>Management</small>
                        </h1>
                        
                    </div>
                </div>
             

               <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Updating Patient?</strong> Try out <a class="alert-link" href="index.php">Here</a>
                        </div>
                    </div>
                </div>
               <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> Patient Details Update</h3>
                            </div>
                            <div class="panel-body">
                                    <div class="col-lg-12">
                                        <?php while($row2 = mysqli_fetch_assoc($result)){ ?>
                                        <form method="POST" action = "iproses.php">
	
                                        Patient Name</br>
                                           <input class="form-control"  type="text" name = "pname"  value = "<?=$row2["itemName"]?>" required>
                                            </br>
                                        <a>Patietn Identification Card No.</a> </br>
                                           <input class="form-control"  type="text" name = "pic" value = "<?=$row2["itemPrice"]?>" required>
                                             </br>
                                        <a>Patient Birth Certificate</a></br>  
                                           <input class="form-control"  type="text" name = "pbirthcert"  value = "<?=$row2["itemDesc"]?>" required></a>
                                             </br>
                                        <a>Gender</a></br>  
                                            <select class ="form-control" name = "gender">
                                                <option selected value="<?=$row2["categ"]?>"><?=$row2["categ"]?></option>
                                                <?php while($row3 = mysqli_fetch_assoc($result3)){ ?>
                                                <option value = "<?=$row3['name'];?>"><?=$row3['name'];?></option>
                                               <?php }?>
                                            </select>
                                            </br>
                                        <a>Race</a></br>  
                                            <select class ="form-control" name = "gender">
                                                <option selected value="<?=$row2["categ"]?>"><?=$row2["categ"]?></option>
                                                <?php while($row3 = mysqli_fetch_assoc($result3)){ ?>
                                                <option value = "<?=$row3['name'];?>"><?=$row3['name'];?></option>
                                               <?php }?>
                                            </select>
                                             </br>
                                        <?php  }  ?>
                                            <input type = "hidden" name = "id" value = <?=$num?>>
                                             <input type ="submit" class  = "btn btn-primary" name = "submit" id ="submit" value="Submit">
                                             
                                       </form></div>
                            </div>
                        </div>
                    </div>
                </div>
             
        
    </div>
    <!-- /.footer -->
    <?php include "include/footer.php"; ?>

