<?php
session_start();
include 'db.php';

// Retrieve username and password from database according to user's input
$username=mysqli_real_escape_string($connect,$_POST['username']);
$password=mysqli_real_escape_string($connect,$_POST['password']);
$encrypted_mypassword=md5($password);
$sql = "SELECT * FROM staffdetail WHERE (username = '$username') and (password = '$encrypted_mypassword')";
$login = mysqli_query($connect,$sql);
$count = mysqli_num_rows($login) ;


// Check username and password match

 while($row = mysqli_fetch_assoc($login)){
					
					
					$_SESSION['levella'] = $row['level'];
                    $_SESSION['sid'] = $row['staffid']; //staff id
					
				
					$type = $_SESSION['levella'];
				}

 if ($count != "") {
	switch ($type) {
		case 1:
				
			header('Location: ../admin'); // admin Level;
			break;
		case 2:
					
		
			header('Location: ../staff/index.php');
			break;
		
		
	}
}
else {

header('Location:../index.php?s=lf');

}   




?>