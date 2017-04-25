
<?php
include 'include/check.php';
include '../include/db.php';


if(isset($_POST['num']))
{ 
    $u = strtolower($_POST['user']);
    $p = $_POST['pass'];
    $l = $_POST['level'];

     $n1 = $_POST['num'];
    $query="SELECT * FROM staffdetail WHERE staffid = '$n1'";
    $result=mysqli_query($connect,$query);
    $num=mysqli_num_rows($result);
   
		if ($p != ''){

		$encrypted_mypassword = md5($p);
		$query = "UPDATE staffdetail set username = '$u' , password = '$encrypted_mypassword' , level = '$l' where staffid = $n1";
		mysqli_query($connect,$query) or die ("Error Query [".$strSQL."]");
		$query = "FLUSH PRIVILEGES";
		echo '<meta http-equiv="refresh" content="0;url=./staff.php?s=pt">'; 
		
		}else{
			$query = "UPDATE staffdetail set username = '$u' , level = '$l' where staffid = $n1";
		mysqli_query($connect,$query) or die ("Error Query [".$strSQL."]");
		$query = "FLUSH PRIVILEGES";
		echo '<meta http-equiv="refresh" content="0;url=./staff.php?s=pt">'; 
		
		}
		
}
else
		{
            
        $u = strtolower($_POST['user']);
        $p = $_POST['pass'];
        $l = $_POST['level'];
        $n = $_POST['name'];
        $add = $_POST['add'];
        $not = $_POST['notel'];
        $t = $_POST['title'];
            
		$encrypted_mypassword = md5($p);
		$query = "INSERT INTO staffdetail (username, password, level,name,address,title,notel) 
        VALUES ('$u', '$encrypted_mypassword', '$l','$n','$add','$t','$not')";
        mysqli_query($connect,$query) or die ("Error Query ");
		
                   
		echo '<meta http-equiv="refresh" content="0;url=./staff.php?s=pt">'; 

		}



?>