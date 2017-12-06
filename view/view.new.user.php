<?php
  
	session_start();
  $mail = $_SESSION['session_mail'];
  $pass = $_SESSION['session_pass'];
  include "../controller/c.login.page.php";
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    
    <!--  ******************************************************** Include boostrap Libraries ******************* -->
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
   
    <link rel="stylesheet" href="mycss.library.css">                               
  </head>
  
  <body id="errorScreen">
    
    <header>  
      <div class="container">
        <div class="buttonR">
          <h3>Sign Up Page</h3>
          <a href="view.user.login.php"><span class="glyphicon glyphicon-home"></span></a>
        </div>
    </header>
  
    <div class="container">
        <br />
        <br />
       
        <form  action="#" class="form-signin">
       
          Email:
          <input type="text" class="form-control" name="email" value="<?php echo $mail?>"/><br>
          Password:
          <input type="password" class="form-control" name="passw" required /><br>
          First Nmame:
          <input type="text" class="form-control" name="fname" required /><br>
          Last Name:
          <input type="text" class="form-control" name="lname" required/><br>
          Phone Number:
          <input type="text" class="form-control" name="phone" required /><br>
          BirthDay
          <input type="date" class="form-control" name="bdate" required /><br>
          Gender:
          <label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
          <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
          <br />
          <br />
          <button type="submitt" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Sign In</button>
    
        </form>

    </div>      
    <?php
      $call = new Task();
      $call->taskSignUp();
    ?>
 </body>
</html>