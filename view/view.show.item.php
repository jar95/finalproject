
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
		<br />
		<section>
			<div class="content">
				<a href='../model/model.new.item.php' class='btn btn-info btn-lg active pull-right' role='button'>
  					<i class="fa fa-pencil-square-o fa-lg"></i> Create new item 
  				</a> <br />
  			</div>
  		</section>
  		<br />
		<?php
			echo "<div><table class='table' border='2'><tr><th>Action</th><th>Created Date </th><th>Due Date</th><th>Message</th></tr></div>";

			foreach ($result as $row) {
				echo "<tr><td><a href='../controller/c.task.item.php?&owneremail=".$row["owneremail"]."&id=".$row["id"]."&option=1' class='btn btn-success btn-xm'>
								<span class='glyphicon glyphicon-check'>Complete task</span></a>
  					  	      <a href='../controller/c.task.item.php?&owneremail=".$row["owneremail"]."&id=".$row["id"]."&option=2' class='btn btn-warning btn-xm'>
  					  	    	<i class='fa fa-pencil fa-sm'></i><span class='size'>Edit this item</span></a>
  							  <a href='../controller/c.task.item.php?&owneremail=".$row["owneremail"]."&id=".$row["id"]."&option=3' class='btn btn-danger btn-xm'>
  								<i class='fa fa-trash-o fa-sm'></i><span class='size'>Delete item</span></a>"
  						."</td><td>".$row["createddate"]."</td><td>".$row["duedate"]."</td><td>".$row["message"]."</td></tr>";
			}
		?>
	</body>
</html>
