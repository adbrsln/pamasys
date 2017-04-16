
<?php
include 'include/check.php';
include '../include/db.php';



$u = strtolower($_POST['user']);
$p = $_POST['pass'];
$l = $_POST['level'];
$n1 = $_POST['num'];




$query="SELECT * FROM login WHERE num = '$n1'";
$result=mysqli_query($connect,$query);
$num=mysqli_num_rows($result);

if($n1 != 0)
{ 
		if ($p != ''){

		$encrypted_mypassword = md5($p);
		$query = "UPDATE login set username = '$u' , password = '$encrypted_mypassword' , level = '$l' where num = $n1";
		mysqli_query($connect,$query) or die ("Error Query [".$strSQL."]");
		$query = "FLUSH PRIVILEGES";
		echo '<meta http-equiv="refresh" content="0;url=./index.php?s=u">'; 
		
		}else{
			$query = "UPDATE login set username = '$u' , level = '$l' where num = $n1";
		mysqli_query($connect,$query) or die ("Error Query [".$strSQL."]");
		$query = "FLUSH PRIVILEGES";
		echo '<meta http-equiv="refresh" content="0;url=./index.php?s=t">'; 
		
		}
		
}
else
		{
		$encrypted_mypassword = md5($p);
		$query = "INSERT INTO login (username, password, level) VALUES ('$u', '$encrypted_mypassword', '$l')";
		mysqli_query($connect,$query) or die ("Error Query [".$strSQL."]");
		$query = "FLUSH PRIVILEGES";
		
		echo '<meta http-equiv="refresh" content="0;url=./index.php?s=true">'; 

		}



?>