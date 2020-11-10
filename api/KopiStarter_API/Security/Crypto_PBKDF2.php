<?php
	namespace KopiStarter_API\Security
	{
		class Crypto_PBKDF2
		{
			private const CHARS = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
			public static int $Hash_Size = 60;
			public static int $Salt_Size = 32;
			public static int $Iteration = 65535;
			public static string $HardSalt_Start = '';
			public static string $HardSalt_End = '';
			public static string $Digest = Digest::SHA1;

			public static final function generateString(int $length) : string
			{
				$generatedString = null;
				for ($i = 0; $i < $length; $i++)
					$generatedString .= self::CHARS[rand(0, strlen(self::CHARS) - 1)];
				return $generatedString;
			}
			public static final function generateHash(string $password, int $hash_size = -1, int $salt_size = -1, string $digest = null) : array
			{
				$_salt = self::generateString($salt_size > -1 ? $salt_size : self::$Salt_Size);
				$hash = hash_pbkdf2($digest != null ? $digest : self::$Digest, self::$HardSalt_Start . $password . self::$HardSalt_End, $_salt, self::$Iteration, $hash_size > -1 ? $hash_size : self::$Hash_Size);
				return array('hash' => $hash, 'salt' => $_salt);
			}
			public static final function verifyPassword(string $password, string $hash, string $salt, string $digest = null)
			{
				$temp_hash = hash_pbkdf2($digest != null ? $digest : self::$Digest, self::$HardSalt_Start . $password . self::$HardSalt_End, $salt, self::$Iteration, strlen($hash));
				return $temp_hash === $hash;
			}
		}
	}
