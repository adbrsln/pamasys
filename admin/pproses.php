
<?php
include 'include/check.php';
include '../include/db.php';


$id = $_POST['pid'];
$n = $_POST['pname'];
$ic = $_POST['pic'];
$notel = $_POST['notel'];
$add = $_POST['address'];



if($id == 0)
{


  echo '<meta http-equiv="refresh" content="0;url=../admin/patient.php?s=f">';
}
else
    {

        $query = "UPDATE patient set patientName= '$n',patientIc='$ic',patientAddress='$add',patientPhoneNumber= '$notel' where patientID = $id";
        mysqli_query($connect,$query) or die ("Error Query");;
        $query = "FLUSH PRIVILEGES";




    echo '<meta http-equiv="refresh" content="0;url=../admin/listdiagnosis.php?id='.$id.'&s=t">';

    }



?>
