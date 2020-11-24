
<?php
    class Constant
    {
		//Boolean values
        const TRUE_CONST = true;
        const FALSE_CONST = false;
		
		//DB error messages
		const MYSQL_CONNECTION_ERROR_MSG = "An error occurred while connecting with server";
		const MYSQL_SELECTING_ERROR_MSG = "An error occurred while selecting database";
		const MYSQL_CONSULTING_ERROR_MSG = "An error occurred while consulting database";
		
		//Error types
		const MYSQL_CONNECTION_ERROR_TYPE = 1;
		const MYSQL_SELECTING_ERROR_TYPE = 2;
		const MYSQL_CONSULTING_ERROR_TYPE = 3;
		
		//Numeric constants
		const ZERO = 0;
		const ONE = 1;
		const TWO = 2;
		const THREE = 3;
		
    }
?>