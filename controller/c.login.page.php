<!--************************************************************************************************
*   Class Task                                                                                     *
*   It allows the page to control the status of the users when they try to login                   *
*   It also redirect different task (incomplete, complete, new user..) to be execute               *
*************************************************************************************************-->


<?php
	include '../model/model.check.user.php';
	include '../view/view.error.message.php';
	class Task {
		
		public $obj_Login;      // Instance Checking class   -To get the login status of the user
		public $obj_items;      // Instance Checking Class   -To get items list status
		public $obj_tasks;      // Instance Checking Class   -To get task  inside a list of items
		public $obj_lists;      // Instance Checking Class   -To get complete and incomplete Items
		public $obj_signup;     // Instance Checking Class   -To get sign up page.
		public $obj_edit;

		function __construct() {
			$this->obj_Login = new Checking();
			$this->obj_items = new Checking(); 
			$this->obj_tasks = new Checking();  
			$this->obj_lists = new Checking();  
			$this->obj_signup = new Checking();          
			$this->obj_edit = new Checking();
		}
		

		// *****************************************************************
		// * LOGIN PAGE: Check Status of the user 
		// *****************************************************************
		function taskUser() {
			$status = $this->obj_Login->getUserStatus();
			switch ($status) {
				case 'login':
					header('Location: ../view/view.task.page.php');	
					break;
				case 'signup':
					header('Location: ../view/view.show.message.php?option=newuser');	
					break;
				case 'badpass':
					header('Location: ../view/view.show.message.php?option=errorpass');
					break;
			}			
		}

		// ****************************************************************
		// *  check status of items to be showed 
		// ****************************************************************
		function taskItems() {
			$result = $this->obj_items->getList();
			if (count($result)>0) {
		    	include '../view/view.show.item.php';
			}else {
				header('Location: ../view/view.show.message.php?option=noevents');
			}
		}


		// ***************************************************************
		// *  Check status only for incomplete items
		// ***************************************************************
		function taskIncomplete() {
			$result = $this->obj_lists->getIncompleteList();
			if (count($result)>0) {
				include('../view/view.incomplete.list.php');
			}else {
				header('Location: ../view/view.show.message.php?option=inevents');
			}
		}

		// ***************************************************************
		// *  Check status only for complete items
		// ***************************************************************
		function taskComplete() {
			$result = $this->obj_lists->getCompleteList();
			if (count($result)>0) {
				include '../view/view.complete.list.php';
			}else {
				header('Location: ../view/view.show.message.php?option=coevents');
			}
		}



		// ***************************************************************
		// * Execute task to add new event
		// ***************************************************************
		function taskNewI() {
			$this->obj_tasks->addNewItem();
		}

		// ***************************************************************
		// * Execute task to edit an event
		// ***************************************************************
		function taskEditI() {
			$this->obj_edit->editItem();
		}



		// ***************************************************************
		// * Execute task to add new user. SIGN UP
		// ***************************************************************
		function taskSignUp() {
			$this->obj_signup->SignupUser();
		}

	}
?>