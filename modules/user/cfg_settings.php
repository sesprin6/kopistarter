<?php
	//MySQL Queries
	const QUERY_ADD			= 'INSERT INTO user VALUES (?, ?, ?, ?, ?, ?, default)';
	const QUERY_DELETE		= 'DELETE FROM user WHERE user_id = ?';
	const QUERY_GET			= 'SELECT * FROM user WHERE user_id = ?';
	const QUERY_GETALL		= 'SELECT * FROM user';
	const QUERY_UPDATE_PWD	= 'UPDATE user SET password_hash = ?, password_salt = ? where user_id = ?';
	const QUERY_UPDATE		= 'update user set name = ?, role = ?, email = ?, message = ? where user_id = ?';

	//General Keys
	const ID				= 'id';
	const NAME			    = 'name';
	const UPASSWORD			= 'password';
	const ROLE		        = 'role';
	const EMAIL				= 'email';
	const MESSAGE			= 'message';

	//Database Keys
	const TBL_ID			= 'user_id';
	const TBL_NAME		    = 'name';
	const TBL_PASSWORD_H	= 'password_hash';
	const TBL_PASSWORD_S	= 'password_salt';
	const TBL_ROLE      	= 'role';
	const TBL_EMAIL			= 'email';
	const TBL_MESSAGE		= 'message';
