<?php
	//MySQL Queries
	const QUERY_ADD			= 'INSERT INTO role VALUES (default , ?)';
	const QUERY_DELETE		= 'DELETE FROM role WHERE role_id = ?';
	const QUERY_GET			= 'SELECT * FROM role WHERE role_id = ?';
	const QUERY_GETALL		= 'SELECT * FROM role';
	const QUERY_UPDATE		= 'update role set name = ? where role_id = ?';

	//General Keys
	const KEY_ID			= 'id';
	const KEY_NAME		    = 'name';

	//Database Keys
	const TBL_ID			= 'role_id';
	const TBL_NAME		    = 'name';

	//Parameters
	const OPTION_SHOW = 'show';
	const OPTION_SHOW_ALL = 'show_all';
