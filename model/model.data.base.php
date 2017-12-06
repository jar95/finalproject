<?php
	
	class Connect {
		
		private static $conn =NULL;
		private static $dsn = 'mysql:host=sql.njit.edu;dbname=jar95';
		private static $username = 'jar95';
		private static $password = 'uHnrTJqnT';

		function getConnection() {	
			if (!self::$conn) {
				self::$conn =  new PDO(self::$dsn, self::$username, self::$password);
				self::$conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return self::$conn;
			}
		}

		
		function runQuery($query) {	
			try {
				$db = Connect::getConnection();
				$q = $db->prepare($query);
				$q->execute();
				$results = $q->fetchAll();
				$q->closeCursor();
				return $results;	
			} catch (PDOException $e) {
				echo "";
			}
		}

	}
?>