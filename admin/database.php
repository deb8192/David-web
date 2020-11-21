<?php
	/****************************************************
	*	@Author: Débora Galdeano González
	*	
	*	Database class used to manage David Web DB.
	****************************************************/

	class Database
	{
		private const $dbServer = "localhost";
		private const $dbUser = "DVWUser";
		private const $dbPassword = "4gJUsHrZRQ4iIbXA";
		private const $dbName = "davidvallsweb";

		private $connection = null;

		public function testError($errType)
		{
			switch($errType)
			{
				case 1:
					mysqlConnectionError(Constants::MYSQL_CONNECTION_ERROR_MSG);
				case 2:
					mysqlError(Constants::MYSQL_SELECTING_ERROR_MSG);
				case 3:
					mysqlError(Constants::MYSQL_CONSULTING_ERROR_MSG);
			}
		}
		public function mysqlConnectionError($msg)
		{
			if($this->$connection->connect_errno != Constants::ZERO)
			{
				showMysqlErrorMessage($msg, $this->connection->connect_error);
				exit();
			}
		}
		
		public function mysqlError($msg)
		{
			if($this->$connection->errno != Constants::ZERO)
			{
				showMysqlErrorMessage($msg, $this->$connection->error);
				$this->$connection->close();
				exit();
			}
		}
		public function showMysqlErrorMessage($msg, $connectionMsg)
		{
			echo $msg , ': ' , $connectionMsg;
		}
		
		public function connect()
		{
			$this->connection = null;
			$this->connection = new @mysqli($dbServer, $dbUser, $dbPassword);
			testError(Constants::MYSQL_CONNECTION_ERROR_TYPE, $connection);
			
			$this->connection->set_charset("utf8");
			$this->connection->select_db($dbName);
			testError(Constants::MYSQL_SELECTING_ERROR_TYPE, $connection);
		}
		
		public function executeQuery($query)
		{
			$results = $this->$connection->query($query);
			testError(Constants::MYSQL_CONSULTING_ERROR_TYPE, $connection);
			
			return $results;
		}
		public function closeConnection()
		{
			$this->connection->close();
		}
	}
	
	
?>