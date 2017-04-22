<?php
include 'include/check.php';
include '../include/db.php';
$num = $_GET['id'];
$sql = "SELECT * FROM category where num = '$num'";
$result = mysqli_query($connect,$sql);  
?>
<!-- Header Content -->
   <?php include "include/header.php"; ?>
    <!-- end header Content -->

    <!-- Page Content -->
    <div class="container">
       <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Category <small>Management</small>
                        </h1>
                        
                    </div>
                </div>
             

               <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Updating category?</strong> Try out <a class="alert-link" href="cat.php">Here</a>
                        </div>
                    </div>
                </div>
               <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> Category List</h3>
                            </div>
                            <div class="panel-body">
                                    <div class="col-lg-12">
                                        <form method = "POST" action ="cproses.php">
                                        <?php while($row2 = mysqli_fetch_assoc($result)){ ?>
                                        <p>Category Name</p>
                                        <input type="text" class="form-control" name ="catname" value="<?=$row2['name'];?>">
                                        <p>Category Description</p>
                                        <input type="text" class="form-control" name="catdesc" value="<?=$row2['catdesc'];?>">
                                            </br>
                                        <input type ="hidden" name="id" value ="<?=$num;?>">
                                        <?php }?>
                                        <input type="submit" class="btn btn-primary" value ="Submit" id="submit">
                                    </div>
                                     </form>
                            </div>
                        </div>
                    </div>
                </div>
            
    </div>
    <!-- /.footer -->
    <?php include "include/footer.php"; ?>

