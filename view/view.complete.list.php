<?php
	session_start();
	$user = $_SESSION['session_mail'];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Complete List</title>
	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<link rel="stylesheet" href="../view/mycss.library.css">
	</head>
	<body>
		<header>
			<div class="container">
				<div>
					<h1>Complete Items</h1>
					<h5>Welcome,   <span class="Highlight"><?php echo $user; ?></span></h5>
				</div>
				
			</div>
		</header>
		<br />
		<div>
			<a href='../view/view.task.page.php' class='btn btn-info btn-lg active pull-right' role='button'>
	  		<i class="fa fa-reply fa-lg"></i> Click here to Return 
  			</a> <br />
  		</div>
		<br />
		<?php
			echo "<div><table class='table' border='2'><tr><th>Action</th><th>Created Date </th><th>Due Date</th><th>Message</th></tr></div>";
			
			foreach ($result as $row) {
				echo "<tr><td><a href='# class='btn btn-success btn-xm'>
								<span class='glyphicon glyphicon-text-width' class='Highlight'>  Task Completed</span></a>"
  					  	      	."</td><td>".$row["createddate"]."</td><td>".$row["duedate"]."</td><td>".$row["message"]."</td></tr>";
			}
		?>
	</body>
</html>
