<?php
	//MySQL Queries
	const QUERY_ADD			= 'INSERT INTO user VALUES (?, ?, ?, ?, ?, ?, ?)';
	const QUERY_DELETE		= 'DELETE FROM user WHERE user_id = ?';
	const QUERY_GET			= 'SELECT * FROM user WHERE user_id = ?';
	const QUERY_GETALL		= 'SELECT * FROM user';
	const QUERY_UPDATE_PWD	= 'UPDATE user SET password_hash = ?, password_salt = ? where user_id = ?';
	const QUERY_UPDATE		= 'update user set name = ?, role = ?, email = ?, message = ? where user_id = ?';

	//General Keys
	const KEY_ID			= 'id';
	const KEY_NAME		    = 'name';
	const KEY_PASSWORD		= 'password';
	const KEY_ROLE		    = 'role';
	const KEY_EMAIL			= 'email';
	const KEY_MESSAGE		= 'message';

	//Database Keys
	const TBL_ID			= 'user_id';
	const TBL_NAME		    = 'name';
	const TBL_PASSWORD_H	= 'password_hash';
	const TBL_PASSWORD_S	= 'password_salt';
	const TBL_ROLE      	= 'role';
	const TBL_EMAIL			= 'email';
	const TBL_MESSAGE		= 'message';

	//Parameters
	const OPTION_POST = 'post_option';
	const OPTION_UPDATE_CRED = 'cred';
	const OPTION_UPDATE_PROFILE = 'profile';
	const OPTION_SHOW = 'show';
	const OPTION_SHOW_ALL = 'show_all';
