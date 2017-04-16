<?php 

include 'include/check.php';

			?>
<!-- header page include-->
        <?php include 'include/header.php'; ?>
     <!-- header page include-->
<div class="container">
        <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            
                        </h1>
                        
                    </div>
                </div>
    </br> </br> </br> 
<div class="col-lg-4"></div>
        <div class="col-lg-4">
           <div class="row">
                <form method="post" action="./include/loginproc.php">

                    <label>Username</label>
                    <input class="form-control" type="text" name ="username" required><br>
                    <label>Password</label>
                    <input class="form-control" name="password" type="password" required><br>
                    Not registered yet? click <strong><a data-toggle="modal" data-target="#myModal" class="alert-link">Here</a></strong><br><br>

                    <input class="btn btn-primary btn-block" type="submit" value="Login"><br>

                </form>
            </div>
        </div>
    <div class="col-lg-4"></div>
<div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header ">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">This is just for testing purpose</h4>
                    </div>
                    <div class="modal-body">
                        Users of the system
                        </br></br>Administrator : 
                        </br>Username : <strong>admin</strong>
                        </br>Password : <strong>admin</strong>
                        
                        </br></br>Staff
                        </br>Username : <strong>user</strong>
                        </br>Password : <strong>user</strong>
                        
                        
                          
                    </div>
                  </div>

                </div>
              </div>
</div>
<!-- header page include-->
        <?php include 'include/footer.php'; ?>
     <!-- header page include-->