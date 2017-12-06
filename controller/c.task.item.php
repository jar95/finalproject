<?php
	session_start();	
	include '../model/model.action.item.php';

	$gemail = $_REQUEST['owneremail'];
	$iditem = $_REQUEST['id'];
	$option = $_REQUEST['option'];
	$_SESSION['session_id'] = $iditem;

	$_edit = new EditItem($gemail,$iditem);
	$_delete = new DeleteItem($gemail,$iditem);
	$_complete = new CompleteItem($gemail,$iditem);
	echo $iditem;
	switch ($option) {
		case '1':
			$_complete->displaymsg();
			break;
		case '2':
			$_edit->displaymsg();
			break;
		case '3':
			$_delete->displaymsg();
			break;
	}
?>
	
	
	

