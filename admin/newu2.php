<?php
include 'include/check.php';
include '../include/db.php';
$num = $_SESSION['sid'];
$sql = "SELECT * FROM staffdetail where staffid = '$num'";
$result = mysqli_query($connect,$sql);

include "include/header.php"; ?>
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
    <div class="col-lg-6">
        <form method="POST" action = "reg_user2.php">
            <?php while($row2 = mysqli_fetch_assoc($result)){ ?>
                <label>Name</label> </br>
                   <input class="form-control"  type="text" name = "name"  value="<?=$row2['staffName']; ?>" required>
                     </br>
             <label>Username</label> </br>
               <input class="form-control"  type="text" name = "user" value="<?=$row2['username']; ?>" required>
                 </br>
            <label>Password</label></br>
               <input class="form-control"  type="password" name = "pass"  placeholder = "if want to change password only"></a>
                 </br>

            </br>

 </div>
        <div class="col-lg-6">


                <label>Address</label></br>
                   <input class="form-control"  type="text" name = "add" value="<?=$row2['staffAddress']; ?>" required></a>
                     </br>
                <label>Phone Number</label></br>
                   <input class="form-control"  type="text" name = "notel" value="<?=$row2['staffNotel']; ?>" required></a>
                     </br>
                <label>Title</label></br>
                    <input class="form-control"  type="text" name = "" value="<?=$row2['staffTitle']; ?>" disabled="true"></a>
                    <input class="form-control"  type="hidden" name = "title" value="<?=$row2['staffTitle']; ?>" disabled="true"></a>
                </br>


    </div>
<?php  }  ?>
</div>
<input class="btn btn-primary pull-right" type ="submit" name = "submit" id ="submit" value="Submit">
 </form>
  <?php include "include/footer.php"; ?>
