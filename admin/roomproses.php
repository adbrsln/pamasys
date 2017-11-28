
<?php
include 'include/check.php';
include '../include/db.php';


$rn = $_POST['rname'];
$dn = $_POST['dname'];


if($rn == '')
{
    echo '<meta http-equiv="refresh" content="0;url=../admin/room.php?s=f">';
}
else
    {

        $query = "INSERT INTO room (name,idStaff) VALUES ('$rn','$dn')";
        mysqli_query($connect,$query) or die ;
        $query = "FLUSH PRIVILEGES";




    echo '<meta http-equiv="refresh" content="0;url=../admin/room.php?s=t">';

    }



?>
