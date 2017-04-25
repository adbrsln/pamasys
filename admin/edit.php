<?php
include 'include/check.php';
include '../include/db.php';
$num = $_GET['id'];
$sql = "SELECT * FROM staffdetail where staffid = '$num'";
$result = mysqli_query($connect,$sql);
?>
<!-- Header Content -->
   <?php include "include/header.php"; ?>
    <!-- end header Content -->

<div class="container">
       <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            User Credentials <small>Management</small>
                        </h1>
                        
                    </div>
                </div>

<div class="row">
    <div class="col-lg-12">
        <form method="POST" action = "reg_user.php">
            <?php while($row2 = mysqli_fetch_assoc($result)){ ?>
            
            
            <label>Username</label> </br>
               <input class="form-control"  type="text" name = "user"  value="<?=$row2['username']; ?>" required>
                 </br>
            <label>Password</label></br>  
               <input class="form-control"  type="password" name = "pass" value="user1234" required></a>
                 </br>
            <label>Credential type</label></br>  
                <select class ="form-control" name = "level">
                    <optgroup label="Current">
                    <option value = "<?php echo $row2['level'] ; if ($row2['level'] ==1){ $t = 'Admin';}else{$t = 'User'; }; ?>"><?=$t?></option>
                    </optgroup>
                    <optgroup label="New">
                    <option value = "1">Admin</option>
                    <option value = "2">User</option>
                    <option value = "3">Customer</option>
                    </optgroup>
                </select>
            </br>

            <input type="hidden" name = "num" value = "<?=$row2['staffid']; ?>" >
            <?php  }  ?>

             <input class="btn btn-primary" type ="submit" class  = "btn" name = "submit" id ="submit" value="Submit">
       </form>
    </div>  
</div>
</div>
  <?php include "include/footer.php"; ?>