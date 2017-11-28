
<?php
include 'include/check.php';
include '../include/db.php';

$num = $_SESSION['sid'];
$u = strtolower($_POST['user']);
$p = $_POST['pass'];
$n = $_POST['name'];
$add = $_POST['add'];
$not = $_POST['notel'];
$t = $_POST['title'];



if ($p != ''){

    $encrypted_mypassword = md5($p);
    $query = "UPDATE staffdetail set username = '$u' , password = '$encrypted_mypassword'  where staffid = $num";
    mysqli_query($connect,$query) or die ("Error Query [".$strSQL."]");
    $query = "FLUSH PRIVILEGES";
    echo '<meta http-equiv="refresh" content="0;url=./newu2.php?s=pt">';

}else{


    $query = "UPDATE staffdetail set username = '$u',staffName = '$n', staffAddress = '$add', staffNotel ='$not',staffTitle = '$t'  where staffid = $num";
    mysqli_query($connect,$query) or die ("Error Query [".$strSQL."]");
    $query = "FLUSH PRIVILEGES";
    echo '<meta http-equiv="refresh" content="0;url=./newu2.php?s=pt">';

}






?>
