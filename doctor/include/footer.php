<?php
       if(isset($_GET['s'])){
           $s = $_GET['s'];
         switch ($s){
            case 't':
            echo  '<script type="text/javascript" language="javascript"> 
            swal("Succesful", "Successs Adding to Cart", "success");</script>';
            break;
            case 'f':
            echo  '<script type="text/javascript" language="javascript"> swal("Failed", "Fail to add to cart", "error");
            </script>';
            break;
            case 'lt':
            echo  '<script type="text/javascript" language="javascript"> swal("Succesful", "Welcome user!", "success");
            </script>';
            break;
             case 'lf':
            echo  '<script type="text/javascript" language="javascript"> swal("Failed", "username or password went wrong", "error");
            </script>';
            break;
            case 'sf':
            echo  '<script type="text/javascript" language="javascript"> swal("Failed", "You have no Access! Login First!", "error");
            </script>';
            case 'p':
            echo  '<script type="text/javascript" language="javascript"> swal("Succesful", "You have Successfully delete the record!", "success");
            </script>';
            break;
            case 'fu':
            echo  '<script type="text/javascript" language="javascript"> swal("Upload Failed", "Something is wrong ! Contact Administrator", "error");
            </script>';
            break;
             case 'fue':
            echo  '<script type="text/javascript" language="javascript"> swal("Upload Failed", "Image already uploaded!", "error");
            </script>';
            break;
            case 'fxi':
            echo  '<script type="text/javascript" language="javascript"> swal("Upload Failed", "File is not an Image", "error");
            </script>';
            break;
            case 'fb':
            echo  '<script type="text/javascript" language="javascript"> swal("Upload Failed", "Image is too big . Reduced it down please!", "error");
            </script>';
            break;
            case 'ff':
            echo  '<script type="text/javascript" language="javascript"> swal("Upload Failed", "Image format is wrong, upload .jpg or .png only!", "error");
            </script>';
            break;
        default:  
            }
       }?> 
 <div class="container">

        <hr>

        <!-- Footer -->
        <footer class="footer">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy;<strong>Adb Roslan </strong> 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    
</body>

</html>