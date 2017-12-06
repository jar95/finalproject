<?php
		
	$option = $_REQUEST['option'];
	include 'c.login.page.php';

	switch ($option) {
		case 'logout':
			header('Location: ../view/view.user.login.php');           // Action: logout
			break;
		case 'incomplete':
			$re = new Task();										  // Action: show group of options
			$result = $re->taskIncomplete();		
			break;
		case 'complete':
			$re = new Task();										  // Action: show group of options
			$result = $re->taskComplete();		
			break;
	}
?>
