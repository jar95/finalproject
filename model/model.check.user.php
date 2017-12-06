<?php
	session_start();	
	
	include 'model.data.base.php';
	
	class Checking {
		public $isuser;
		public $items;
		
		public function getUserStatus() {
			if (isset($_REQUEST['userMail']) && isset($_REQUEST['userPass'])) {
				
				$mail = $_REQUEST['userMail'];
				$pass = $_REQUEST['userPass'];
				$this->isuser = new Connect();
				$sql = "SELECT * FROM accounts WHERE email='$mail' ";
		        
		        $resultOfQuery = $this->isuser->runQuery($sql);
				
				if (count($resultOfQuery)>'0') {
					if ($resultOfQuery['0']['password'] == $pass) {
						$_SESSION['user_fname']	= $resultOfQuery['0']['fname'];
						$_SESSION['user_lname'] = $resultOfQuery['0']['lname'];
						return 'login';
					} else {
						return 'badpass';
					} 
				} else {
					return 'signup';	
				}
			}
		}

		
		public function getCompleteList() {
			$atte = $_SESSION['session_mail'];
			$this->items = new Connect();
			$sql = "SELECT * FROM todos WHERE owneremail='$atte' and isdone='0' ORDER BY createddate";
			$resultOfQuery = $this->items->runQuery($sql);
			return $resultOfQuery;
		}

		public function getIncompleteList() {
			$atte = $_SESSION['session_mail'];
			$this->items = new Connect();
			$sql = "SELECT * FROM todos WHERE owneremail='$atte' and isdone='1' ORDER BY duedate";
			$resultOfQuery = $this->items->runQuery($sql);
			return $resultOfQuery;
		}

		public function getList() {
			$atte = $_SESSION['session_mail'];
			$this->items = new Connect();
			$sql = "SELECT * FROM todos WHERE owneremail='$atte' ORDER BY createddate";
			$resultOfQuery = $this->items->runQuery($sql);
			return $resultOfQuery;
		}

		
		public function addNewItem() {
			if (isset($_REQUEST['item_cdate']) && isset($_REQUEST['item_ddate'])) {
				$mcmail = $_SESSION['session_mail'];
				$mcdate = $_REQUEST['item_cdate'];
				$mddate = $_REQUEST['item_ddate'];
				$mmessa = $_REQUEST['item_messa'];
				
				$this->newItem = new Connect();
				$sql = "INSERT INTO todos(owneremail,createddate,duedate,message,isdone)
				VALUES('$mcmail','$mcdate','$mddate','$mmessa','1');";
				$result = $this->newItem->runQuery($sql);
			}
		}

		public function editItem() {
			if (isset($_REQUEST['item_cdate']) && isset($_REQUEST['item_ddate'])) {
				$mcmail = $_SESSION['session_mail'];
				$mcidev = $_SESSION['session_id'];
				$mcdate = $_REQUEST['item_cdate'];
				$mddate = $_REQUEST['item_ddate'];
				$mmessa = $_REQUEST['item_messa'];
				
				$this->newItem = new Connect();
				$sql = "UPDATE todos SET createddate='$mcdate', duedate='$mddate', message='$mmessa' 
						WHERE  owneremail='$mcmail' and id='$mcidev'";
				$result = $this->newItem->runQuery($sql);
			}
		}

		public function signupUser() {

			if (isset($_REQUEST['fname'])) {
				$userNewEmail = $_GET["email"];
             	$userNewPassw = $_REQUEST["passw"];
             	$userNewFname = $_REQUEST["fname"];
				$userNewLname = $_REQUEST["lname"];
				$userNewPhone = $_REQUEST["phone"];
				$userNewBirthday = $_REQUEST["bdate"];
				$userNewGender = $_REQUEST["gender"];
				
				$this->newItem = new Connect();
				$sql = "INSERT INTO accounts (email,fname,lname,phone,birthday,gender,password)
				VALUES('$userNewEmail','$userNewFname','$userNewLname','$userNewPhone','$userNewBirthDay','$userNewGender','$userNewPassw');";	
				$result = $this->newItem->runQuery($sql);

			}
		}

	}
?>	

						