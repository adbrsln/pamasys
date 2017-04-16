<?php
include 'include/check.php';
include '../include/db.php';
$num = $_GET['id'];
$type = $_GET['t'];

if ($type == 'i'){
$query = "DELETE FROM item WHERE num = '$num'";
mysqli_query($connect,$query) or die('Penghapusan a GAGAL. Tiada Pengguna Dapat Dipadamkan.');
$query = "FLUSH PRIVILEGES";
echo '<meta http-equiv="refresh" content="0;url=../staff/item.php?s=p">'; 
//include 'files/closedb.php';	
}else if ($type =='r'){
$query = "DELETE FROM corder WHERE transactionid = '$num'";
mysqli_query($connect,$query) or die('Penghapusan  GAGAL. Tiada Pengguna Dapat Dipadamkan.');
$query = "FLUSH PRIVILEGES";
echo '<meta http-equiv="refresh" content="0;url=../staff/index.php?s=p">'; 
}else{
$query = "DELETE FROM category WHERE num = '$num'";
mysqli_query($connect,$query) or die('Penghapusan  GAGAL. Tiada Pengguna Dapat Dipadamkan.');
$query = "FLUSH PRIVILEGES";
echo '<meta http-equiv="refresh" content="0;url=../staff/cat.php?s=p">'; 
}
?>
