<?php
	namespace KopiStarter_API
	{
		final class Connection
		{
			private static \mysqli $_mysql_connection;

			public static function set_mysql_connection(\mysqli $connection)
			{
				self::$_mysql_connection = $connection;
			}

			public static function get_mysql_connection() : \mysqli
			{
				return self::$_mysql_connection;
			}
		}
	}
