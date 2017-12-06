<?php
	session_start();
	
	include '../controller/c.login.page.php';
	$user = $_SESSION['user_lname'] . " " . $_SESSION['user_fname'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Final Project</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="mycss.library.css">
</head>
<body>
	<header>
		<div class=container>
			<div id="logo">
				<h1><span class="highlight">IS218</span> Final Project</h1>
				<h5>Welcome,   <span class="Highlight"><?php echo $user; ?></span></h5>
			</div>

			<nav>
				<ul>
					<li class="current"><a href="../controller/c.action.task.php?option=logout">Log out</a></li>
					<li><a href="../controller/c.action.task.php?option=incomplete">Incomplete Task</a></li>
					<li><a href="../controller/c.action.task.php?option=complete">Complete Task</a></li>
				</ul>
			</nav>
		</div>
	</header>
	
	<section>
		<div>
			<?php
				$re = new Task();										  // Action: show group of options
				$result = $re->taskItems();				
			?>
	 	</div>
	 </section>
		
</body>
</html>