<?php 
	
	include "./model.edit.item.php";

	class EditItem extends Action {
 		
 		public function displaymsg() {
 			echo "edit " . $this->mail . " " . $this->item;
 		}
 	}
 
?>
