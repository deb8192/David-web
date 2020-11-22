<?php
	/****************************************************
	*	@Author: Débora Galdeano González
	*	
	*	Database class used to manage David Web DB.
	****************************************************/

	include_once('./includes/global-constants.php');

	class Database
	{
		private const DB_SERVER = "localhost";
		private const DB_USER = "DVWUser";
		private const DB_PASSWORD = "4gJUsHrZRQ4iIbXA";
		private const DB_NAME = "davidvallsweb";

		private $connection = null;

		public function __construct()
		{
			$this->connection = null;
		}	

		public function testError($errType)
		{
			switch($errType)
			{
				case 1:
					mysqlConnectionError(Constant::MYSQL_CONNECTION_ERROR_MSG);
					break;
				case 2:
					mysqlError(Constant::MYSQL_SELECTING_ERROR_MSG);
					break;
				case 3:
					mysqlError(Constant::MYSQL_CONSULTING_ERROR_MSG);
					break;
			}
		}
		public function mysqlConnectionError($msg)
		{
			if($this->$connection->connect_errno != Constant::ZERO)
			{
				showMysqlErrorMessage($msg, $this->connection->connect_error);
				exit();
			}
		}
		
		public function mysqlError($msg)
		{
			if($this->$connection->errno != Constant::ZERO)
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
			$this->connection = @new mysqli(DB_SERVER, DB_USER, DB_PASSWORD);
			testError(Constant::MYSQL_CONNECTION_ERROR_TYPE);
			
			$this->connection->set_charset("utf8");
			$this->connection->select_db(DB_NAME);
			testError(Constant::MYSQL_SELECTING_ERROR_TYPE);
		}
		
		public function executeQuery($query)
		{
			$results = $this->$connection->query($query);
			testError(Constant::MYSQL_CONSULTING_ERROR_TYPE);
			
			return $results;
		}
		public function closeConnection()
		{
			$this->connection->close();
		}
	}
	
	
?>