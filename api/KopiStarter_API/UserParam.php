<?php
	namespace KopiStarter_API
	{
		final class UserParam
		{
			private string $email;
			private string $password;
			private string $name;
			private int $role;

			public function __construct(string $email, string $password, string $name, int $role)
			{
				$this->email = $email;
				$this->password = $password;
				$this->name = $name;
				$this->role = $role;
			}

			public function get_email() : string
			{
				return $this->email;
			}

			public function get_password() : string
			{
				return $this->password;
			}

			public function get_name() : string
			{
				return $this->name;
			}

			public function get_role() : int
			{
				return $this->role;
			}
		}
	}
