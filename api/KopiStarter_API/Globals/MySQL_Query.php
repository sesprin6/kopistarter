<?php
	namespace KopiStarter_API\Globals
	{
		final class MySQL_Query
		{
			public const USER_GET = 'select * from user where user_id = ?';
			public const USER_INSERT = 'insert into user values (?, ?, ?, ?, ?, ?, default )';
		}
	}
