
<?php
	$option = $_REQUEST['option'];
    
    
    switch($option) {
        case 'inevents':
            $msg1 = 'No Incomplete task has been recognized';
            $msg2 = 'Return to the last page.'; 
            $imsg = 'class="fa fa-info fa-stack-1x fa-inverse"';      
            break;
        case 'coevents':
            $msg1 = ' You do not have a task Completed     ';
            $msg2 = 'Make a task complete.'; 
            $imsg = 'class="fa fa-text-width fa-stack-1x fa-inverse"';      
            break;
        case 'newuser':
            $msg1 = 'Are you new user? please register ';
            $msg2 = 'Register new user.'; 
            $imsg = 'class="fa fa-user-o fa-stack-1x fa-inverse"';
            break;
        case 'errorpass':
            $msg1 = '       Please, check your password   ';
            $imsg = 'class="fa fa-pencil-square-o fa-stack-1x fa-inverse"'; 
            break;
        case 'noevents':
            $msg1 = ' No task in your profile has been recognized';
            $msg2 = 'Add events in your Profile.'; 
            $imsg = 'class="fa fa-pencil-square-o fa-stack-1x fa-inverse"';   
            break;
        case 'cosuccess':
            $msg1 = 'an item has been successfully completed';
            $msg2 = 'Return';
            $imsg = 'class="fa fa-info fa-stack-1x fa-inverse"';
            break;
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<link rel="stylesheet" href="mycss.library.css">
	</head>
	<body id="errorScreen">
		<div id="containerMsg">
		    <h2 id=textMsg><?php echo $msg1?></h2>
           
            <div id="marginMsg" class="col-md-2">
                <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa fa-reply fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="text-muted">Return Log in page.</h4>
                <a href='view.user.login.php' class="service-heading">click here</a>                       
            </div>	

            <?php
                if ($option!='errorpass') { ?>
                    <div class="col-md-2">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i <?php echo $imsg?>></i>
                        </span>
                        <h4 class="text-muted"><?php echo $msg2?></h4>

                        <?php
                            switch ($option) {
                                case 'newuser':?>
                                    <a href="../view/view.new.user.php" class="service-heading">click here</a><?php
                                    break;
                                case 'errorpass': ?>
                                    <a href="../view/view.user.login.php" class="service-heading">click here</a><?php
                                    break;
                                case 'noevents': ?>
                                    <a href="../model/model.new.item.php" class="service-heading">click here</a><?php
                                    break;                                                                    
                                default: ?>
                                    <a href="../view/view.task.page.php" class="service-heading">click here</a><?php
                                    break;
                            }
                        ?>
                    </div><?php
                }
            ?>           				
	    </div>
    </body>
</html>