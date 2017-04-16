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
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Adding a new Patient?</strong> Try out <a data-toggle="modal" data-target="#myModal" class="alert-link">Here</a>
                        </div>
                    </div>
                </div>
<div class="row">
    <div class="col-lg-6">
        <form method="POST" action = "reg_user.php">
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
                        <option value = "Miss">Miss</option>
                        <option value = "Madam">Madam</option>
                        <option value = "Dr.">Dr.</option>
                    </select>
                </br>
   
 
    </div>

</div>
<input class="btn btn-primary pull-right" type ="submit" name = "submit" id ="submit" value="Submit">
 </form>
  <?php include "include/footer.php"; ?>