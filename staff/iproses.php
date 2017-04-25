
<?php
include 'include/check.php';
include '../include/db.php';



$n = $_POST['pname'];
$ic = $_POST['pic'];
$notel = $_POST['notel'];
$add = $_POST['address'];



$query="SELECT * FROM patient WHERE ic = '$ic'";
$result=mysqli_query($connect,$query);
$num=mysqli_num_rows($result);

if($num != 0)
{ 
    
    
    echo '<meta http-equiv="refresh" content="0;url=../staff/list.php?s=f">'; 
}
else
    {
 
        $query = "INSERT INTO patient (name,ic,address,phonenumber) VALUES ('$n', '$ic', '$add', '$notel')";
        mysqli_query($connect,$query) or die ("Error Query [".$strSQL."]");;
        $query = "FLUSH PRIVILEGES";

     
    
      
    echo '<meta http-equiv="refresh" content="0;url=../staff/list.php?s=t">'; 

    }



?>