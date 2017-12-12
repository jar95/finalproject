<?php 
	
	include 'model.data.base.php';

	class Action {
 		var $mail;
 		var $item;
 		
 		public function __construct($aa,$bb) {
 			$this->mail = $aa;
 			$this->item = $bb;
 		}

 		public function displaymsg() {
 			echo "action";
 		}
 		
 	}

 	

 	// Inheritance class for editing an item
 	class EditItem extends Action {
 		public function displaymsg() {
 			$this->itemsToEdit = new Connect;
 			
 			$sql = "UPDATE todos SET createddate='$mcdate', duedate='$mddate', message='$mmessa' 
					WHERE  owneremail='$this->email' and id='$this->item'";
			$result = $this->itemsToEdit->runQuery($sql);
			header('Location:../model/model.edit.item.php');	
 		}
 	}

 	
 	// Inheritance class for deleteing an item
 	class DeleteItem extends Action {
 		public function displaymsg() {
 			$this->itemsToDelete = new Connect;
 			$sql = "DELETE FROM todos WHERE owneremail='$this->mail' and id='$this->item'";
			$result = $this->itemsToDelete->runQuery($sql);
			header('Location: ../view/view.task.page.php');		
		}
 	}

 	//Inheritance class for deleting an item
 	class CompleteItem extends Action {
 		public function displaymsg() {
 			$this->itemsToComplete = new Connect;
 			$sql = "UPDATE todos SET isdone='0' WHERE owneremail='$this->mail' and id='$this->item'";
			$result = $this->itemsToComplete->runQuery($sql);
			header('Location: ../view/view.show.message.php?option=cosuccess');
			//header('Location: ../view/view.task.page.php');		 			
 		}
 	}


 
 ?>