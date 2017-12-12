<?php
	session_start();
	include '../controller/c.login.page.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="home.page.style.css">
</head>
<body>
	
	<section id="showcase">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sx-4">
					
				</div>
				<div class="col-md-4 col-sx-4" >
					<div id="showcase-context">
						<i style="font-size:180px" class="fa">&#xf2c1;</i><br>
						<br><br>
						<form action='#' method='POST'>
							<div class="input-group">
    							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    							<input id="email" type="email"  class="form-control input-lg" name="userMail" placeholder="Email">
  							</div>
  							<br>
  							<div class="input-group">
    							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
   								<input id="password" type="password" class="form-control input-lg" name="userPass" placeholder="Password">
  							</div> 
  							<br>
  							<input type="hidden" name='action' value='action'>
  							<input type="submit" class="btn btn-default btn-lg" value=" Login ">   											
  						</form>
  						<br><br>
  						<a id="link" href="view.new.user.php" class="btn btn-link" role="button"><b>New User? Sign Up</b></button>
 					</div> 			
  				</div>
			
			</div>
		</div>
		
	</section>
	<?php
		$_SESSION['session_mail'] = $_REQUEST['userMail'];
		$_SESSION['session_pass'] = $_REQUEST['userPass'];
		$user = new Task();
		$user->taskUser();
	?>		
</body>
</html>