<?php
	/****************************************************
	*	@Author: Débora Galdeano González
	*	
	*	Database class used to manage David Web DB.
	****************************************************/

	class Database
	{
		private const DB_SERVER = 'localhost';
		private const DB_USER = 'DVWUser';
		private const DB_PASSWORD = '4gJUsHrZRQ4iIbXA';
		private const DB_NAME = 'davidvallsweb';

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
					self::mysqlConnectionError(Constant::MYSQL_CONNECTION_ERROR_MSG);
					break;
				case 2:
					self::mysqlError(Constant::MYSQL_SELECTING_ERROR_MSG);
					break;
				case 3:
					self::mysqlError(Constant::MYSQL_CONSULTING_ERROR_MSG);
					break;
			}
		}
		public function mysqlConnectionError($msg)
		{
			if($this->connection->connect_errno != Constant::ZERO)
			{
				self::showMysqlErrorMessage($msg, $this->connection->connect_error);
				exit();
			}
		}
		
		public function mysqlError($msg)
		{
			if($this->connection->errno != Constant::ZERO)
			{
				self::showMysqlErrorMessage($msg, $this->connection->error);
				$this->connection->close();
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
			$this->connection = @new mysqli(self::DB_SERVER, self::DB_USER, self::DB_PASSWORD);
			$this->testError(Constant::MYSQL_CONNECTION_ERROR_TYPE);
			
			$this->connection->set_charset("utf8");
			$this->connection->select_db(self::DB_NAME);
			$this->testError(Constant::MYSQL_SELECTING_ERROR_TYPE);
			
			return $this->connection;
		}
		
		public function executeQuery($query)
		{
			$results = $this->connection->query($query);
			$this->testError(Constant::MYSQL_CONSULTING_ERROR_TYPE);
			
			return $results;
		}
		public function closeConnection()
		{
			$this->connection->close();
		}
	}
	
	
?>