<?php
	namespace KopiStarter_API
	{
		require_once 'Exceptions/_autoload.php';
		require_once 'Globals/MySQL_Query.php';
		require_once 'Security/_autoload.php';

		require_once 'UserParam.php';

		use KopiStarter_API\Exceptions;
		use KopiStarter_API\Globals;
		use KopiStarter_API\Security;

		use KopiStarter_API\UserParam;

		final class User
		{
			private string $username;

			public final function __construct(string $username)
			{
				$this->username = $username;
			}

			public final function check_user_exists() : bool
			{
				$connection = Connection::get_mysql_connection();

				$statement = $connection->prepare(Globals\MySQL_Query::USER_GET);
				$statement->bind_param('s', $this->username);
				if ($statement->execute())
					return $statement->get_result()->num_rows > 0;
				else
					throw new Exceptions\MySQLStatementException($statement->error);
			}

			public final function get_login_status(string $password) : bool
			{
				if (!$this->check_user_exists())
					return false;

				$connection = Connection::get_mysql_connection();
				$statement = $connection->prepare(Globals\MySQL_Query::USER_GET);
				$statement->bind_param('s', $this->username);
				$statement->execute();

				$user_data = $statement->get_result()->fetch_assoc();
				return Security\Crypto_PBKDF2::verifyPassword($password, $user_data['password_hash'], $user_data['password_salt']);
			}

			public final function getUsername() : string
			{
				return $this->username;
			}

			public final function registerUser(UserParam $param) : bool
			{
				if ($this->check_user_exists())
					return false;

				$connection = Connection::get_mysql_connection();
				$statement = $connection->prepare(Globals\MySQL_Query::USER_INSERT);

				$crypt = Security\Crypto_PBKDF2::generateHash($param->get_password());

				$param_userid = $this->username;
				$param_password_hash = $crypt['hash'];
				$param_password_salt = $crypt['salt'];
				$param_name = $param->get_name();
				$param_role = $param->get_role();
				$param_email = $param->get_email();

				$statement->bind_param('ssssis', $param_userid, $param_password_hash, $param_password_salt, $param_name, $param_role, $param_email);
				return $statement->execute();
			}
		}
	}
