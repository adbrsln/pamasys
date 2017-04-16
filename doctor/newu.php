  <!-- Header Content -->
   <?php 
include 'include/check.php';
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
    <div class="col-lg-12">
        <form method="POST" action = "reg_user.php">

             <label>Username</label> </br>
               <input class="form-control"  type="text" name = "user"  required>
                 </br>
            <label>Password</label></br>  
               <input class="form-control"  type="password" name = "pass"  required></a>
                 </br>
            <label>Credential type</label></br>  
                <select class ="form-control" name = "level">
                    <option value = "1">Admin</option>
                    <option value = "2">User</option>
                </select>
            </br>



             <input class="btn btn-primary" type ="submit" class  = "btn" name = "submit" id ="submit" value="Submit">
       </form>
    </div>  
</div>
</div>
</body>
</html>