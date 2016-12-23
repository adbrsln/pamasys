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
<div class="col-lg-4"></div>
        <div class="col-lg-4">
           <div class="row">
                <form method="post" action="./include/loginproc.php">

                    <label>Username</label>
                    <input class="form-control" type="text" name ="username" required><br>
                    <label>Password</label>
                    <input class="form-control" name="password" type="password" required><br>
                    Not registered yet? click <strong><a href="register.php">here</a></strong><br><br>

                    <input class="btn btn-primary btn-block" type="submit" value="Login"><br>

                </form>
            </div>
        </div>
    <div class="col-lg-4"></div>
</div>
<!-- header page include-->
        <?php include 'include/footer.php'; ?>
     <!-- header page include-->