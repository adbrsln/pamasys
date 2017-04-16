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
                            Category <small>Management</small>
                        </h1>
                        
                    </div>
                </div>
             

               <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Updating item?</strong> Try out <a class="alert-link" href="item.php">Here</a>
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
                                        <?php while($row2 = mysqli_fetch_assoc($result)){ ?>
                                        <form method="POST" action = "iproses.php">
	
                                        Item Name</br>
                                           <input class="form-control"  type="text" name = "itemname"  value = "<?=$row2["itemName"]?>" required>
                                            </br>
                                        <a>Item Price</a> </br>
                                           <input class="form-control"  type="text" name = "itemprice" value = "<?=$row2["itemPrice"]?>" required>
                                             </br>
                                        <a>Item Description</a></br>  
                                           <input class="form-control"  type="text" name = "desc"  value = "<?=$row2["itemDesc"]?>" required></a>
                                             </br>
                                        <a>Category</a></br>  
                                            <select class ="form-control" name = "category">
                                                <option selected value="<?=$row2["categ"]?>"><?=$row2["categ"]?></option>
                                                <?php while($row3 = mysqli_fetch_assoc($result3)){ ?>
                                                <option value = "<?=$row3['name'];?>"><?=$row3['name'];?></option>
                                               <?php }?>
                                            </select>
                                            </br></br>
                                        <a>Item image link</a></br>  
                                           <input class="form-control" required type="text" name = "img"  value = "<?php if(isset($_GET['img'])){ echo $_GET['img'];} else echo $row2["imglink"];?>" ></a>
                                             </br>
                                        <?php  }  ?>
                                            <input type = "hidden" name = "id" value = <?=$num?>>
                                             <input type ="submit" class  = "btn btn-primary" name = "submit" id ="submit" value="Submit">
                                             <a data-toggle="modal" data-target="#myModal"  class = "btn btn-info">Upload image</a>
                                       </form></div>
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
                      <h4 class="modal-title">Upload image for item</h4>
                    </div>
                    <div class="modal-body">
                      
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            <p>Only upload an image with the <strong>size of 800x500 only !</strong></p>
                            <p>Select image to upload:</p>
                        <input type="file" name="fileToUpload"  id="fileToUpload">
                        
                        <input type ="hidden" name ="id" value = "<?= $num; ?>">
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

