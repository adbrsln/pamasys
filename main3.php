<?php 

include 'include/check.php';

			?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
	<title>ePasti</title></title>
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="images/style.css" />
	<!-- Google Font -->
	<link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core CSS -->
	<link type="text/css" rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- jQuery Library -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
    <!-- Bootstrap Core JS -->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<script>
function login(){
	var frm = document.loginForm;
	frm.action.value = 'login';
	if(frm.userbox.value == '' || frm.passbox.value == '')
		{
		alert("Sila penuhkan ruangan nama pengguna dan katalaluan.");
		}
		else {
	frm.submit();
	}
}



</script>
<body>
	
	<section class="container">
	    <section class="login-form">
		<form name= "loginForm" method="post" action="./include/loginproc.php" role="login">
			<div>
                </br></br>
				<img src="images/logo.png" alt="" />
				</br></br>
			</div>			
			<input type="text" name="username" id="userbox" placeholder="Nama Pengguna"  required class="form-control input-lg" />
			<input type="password" name="password" id="passbox"   placeholder="Katalaluan" required class="form-control input-lg" />
			<button type="button" name="button" id="button" value="Login" onClick="login();" class="btn btn-lg btn-block btn-info">Login</button>
			
			<div>
				<p>No Account? <a href="mailto:admin@epasti.net?Subject=Masalah%20log%20masuk%20pengguna" target="_top" > Contact Here</a></p>
			</div>
			 <input type="hidden" name="action" value="" />
		</form>
		</section>
	</section>
	
</body>
</html>