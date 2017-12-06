<?php
	session_start();
	$mail = $_SESSION['session_mail'];
	
	include "../controller/c.login.page.php";
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <title>New Event</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
   
    <link rel="stylesheet" href="../view/mycss.library.css">                               
  </head>
  
  <body>
    
    <header>  
      <div class="container">
       <div id="logo">
          <h2>NJIT</h2>
          <h3><span class="remark">IS218</span> C o u r s e</h3>
        </div>
        <div id="signInHeading">
          <h2>New Event Page</h2>
        </div>
        <div class="buttonR">
         <a href="../view/view.task.page.php"><span class="glyphicon glyphicon-menu-up">  BACK</span></a>
        </div>
    </header>
  
    <div class="container">
        <br />
        <br />
       
        <form  action="#" class="form-signin">
          Date:
          <input type="date" class="form-control" name="item_cdate" required/><br>
          Due Date:
          <input type="date" class="form-control" name="item_ddate" required /><br>
          Message:
          <input type="text" class="form-control" name="item_messa" required /><br>
          
          <br />
          <br />
          <input type="hidden" name='action' value='action'>
          <button type="submitt" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Create</button>
    
        </form>
    </div>      
    <?php
    	$call = new Task();
    	$call->taskNewI();
    ?>
 </body>
</html>

