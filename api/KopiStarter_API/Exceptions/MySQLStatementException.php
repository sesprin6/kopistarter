<?php
	namespace KopiStarter_API\Exceptions
	{
		use Throwable;

		class MySQLStatementException extends \Exception
		{
			public function __construct($message, $code = 0, Throwable $previous = null)
			{
				parent::__construct($message, $code, $previous);
			}

			public function __toString()
			{
				parent::__toString();
			}
		}
	}
