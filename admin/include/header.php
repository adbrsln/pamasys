
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Patient Management System</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="include/shop-homepage.css" rel="stylesheet">

    <!-- footer CSS -->
    <!-- <link href="../css/stickyfooter.css" rel="stylesheet"> -->

    <link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <script src="../js/sweetalert.min.js"></script>
    <link rel="stylesheet" href="../css/sweetalert.css">



    <link href="../include/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    <link href="../include/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

</head>

<body>
<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Patient Management System <strong>[Admin]</strong></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav ">
                    <li><a href="patient.php">Patient Management</a></li>
                    <li><a href="staff.php">Staff Management</a></li>
                    <li><a href="newu2.php">Update Profile</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">

                   <li>
                    <a href="../logout.php"><i class="fa fa-fw fa-power-off">&nbsp;</i>Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
