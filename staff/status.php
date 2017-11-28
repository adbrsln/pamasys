<?php
include 'include/check.php';
include '../include/db.php';
$id = $_GET['id'];
$type = $_GET['type'];



$query="SELECT * FROM diagnosis WHERE diagnosisID = '$id'";
$result=mysqli_query($connect,$query);
$num=mysqli_num_rows($result);

if ($num > 0) {
	
    if ($type == 'Approve'){
		$query2 = "UPDATE diagnosis set statusID = 5 where diagnosisID = '$id'";

		mysqli_query($connect,$query2) or die('Error: ' . mysqli_error());
		$querydaftar = "FLUSH PRIVILEGES";

		 echo '<meta http-equiv="refresh" content="0;url=../staff/list.php">';

	}else if ($type == 'collectMed'){
		$query2 = "UPDATE diagnosis set statusID = 2,roomID = 7 where diagnosisID = '$id'";

		mysqli_query($connect,$query2) or die('Error: ' . mysqli_error());
		$querydaftar = "FLUSH PRIVILEGES";

		 echo '<meta http-equiv="refresh" content="0;url=../staff/view.php?id='.$id.'&s=t">';

	}else {
		$query2 = "UPDATE diagnosis set statusID = 4 where diagnosisID = '$id'";

			mysqli_query($connect,$query2) or die('Error: ' . mysqli_error());
			$querydaftar = "FLUSH PRIVILEGES";

			 echo '<meta http-equiv="refresh" content="0;url=../staff/list.php">';
	}
	
}


else{

 //echo '<meta http-equiv="refresh" content="0;url=/userid/pages/pengguna.php?success=false">'; 
echo '<script>window.history.go(-1);</script>';
}

?>