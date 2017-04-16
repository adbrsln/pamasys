<?php
include 'include/check.php';
include '../include/db.php';
$id = $_GET['id'];
$type = $_GET['type'];


$masatarikh = date('Y-m-d H:i:s');
$query="SELECT * FROM corder WHERE transactionid = '$id'";
$result=mysqli_query($connect,$query);
$num=mysqli_num_rows($result);
if ($num > 0) {
	if ($type == 'Approve'){
		$query2 = "UPDATE corder set status = 'Waiting Customer Payment' where transactionid = '$id'";

		mysqli_query($connect,$query2) or die('Error: ' . mysqli_error());
		$querydaftar = "FLUSH PRIVILEGES";

		 echo '<meta http-equiv="refresh" content="0;url=../staff/index.php">';

	}
	elseif ($type == 'complete') {
		$query2 = "UPDATE corder set status = 'Complete' where transactionid = '$id'";

		mysqli_query($connect,$query2) or die('Error: ' . mysqli_error());
		$querydaftar = "FLUSH PRIVILEGES";

		 echo '<meta http-equiv="refresh" content="0;url=../staff/index.php">';

	}else {
		$query2 = "UPDATE corder set status = 'Cancel' where transactionid = '$id'";

			mysqli_query($connect,$query2) or die('Error: ' . mysqli_error());
			$querydaftar = "FLUSH PRIVILEGES";

			 echo '<meta http-equiv="refresh" content="0;url=../staff/index.php">';
	}
	
}


else{

 //echo '<meta http-equiv="refresh" content="0;url=/userid/pages/pengguna.php?success=false">'; 
echo '<script>window.history.go(-1);</script>';
}

?>