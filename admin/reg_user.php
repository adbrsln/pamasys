
<?php
include 'include/check.php';
include '../include/db.php';


if(isset($_POST['num']))
{ 
    $u = strtolower($_POST['user']);
    $p = $_POST['pass'];
    $l = $_POST['level'];

     $n1 = $_POST['num'];
    $query="SELECT * FROM login WHERE num = '$n1'";
    $result=mysqli_query($connect,$query);
    $num=mysqli_num_rows($result);
   
		if ($p != ''){

		$encrypted_mypassword = md5($p);
		$query = "UPDATE login set username = '$u' , password = '$encrypted_mypassword' , level = '$l' where num = $n1";
		mysqli_query($connect,$query) or die ("Error Query [".$strSQL."]");
		$query = "FLUSH PRIVILEGES";
		echo '<meta http-equiv="refresh" content="0;url=./staff.php?s=pt">'; 
		
		}else{
			$query = "UPDATE login set username = '$u' , level = '$l' where num = $n1";
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
		$query = "INSERT INTO login (username, password, level) VALUES ('$u', '$encrypted_mypassword', '$l')";
		 mysqli_query($connect,$query) or die ("Error Query [".$strSQL."]");
		
        $sql = "SELECT * FROM login WHERE (username = '$u') and (password = '$encrypted_mypassword')";
        $result = mysqli_query($connect, $sql) or die ("Error Query [".$strSQL."]");
		 while($row = mysqli_fetch_assoc($result)){
					$num = $row['num'];
         }
        $query3 = "INSERT INTO details (staffid,name,address,title,notel) VALUES ('$num','$n','$add','$t','$not')";
		mysqli_query($connect,$query3) or die ("Error Query [".$strSQL."]");
		$query = "FLUSH PRIVILEGES";
            
		echo '<meta http-equiv="refresh" content="0;url=./staff.php?s=pt">'; 

		}



?>